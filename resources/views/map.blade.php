@extends('layouts.layout')

@section('child')
    <!-- Leaflet CSS and JS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>

    <style>
        .bodee {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f4f4;
            height: 120vh;
        }

        .containee {
            display: flex;
            height: 100vh;
            overflow: hidden;
        }

        /* Card styling */
        .card-list {
            width: 40%;
            padding: 20px;
            overflow-y: auto;
            background-color: #ffffff;
            border-right: 1px solid #ddd;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .card {
            background-color: #ffffff;
            padding: 15px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s ease;
        }

        .card h3 {
            margin: 0;
            color: #2C3E50;
            font-size: 20px;
        }

        .maps {
            margin-top: 50px;
        }

        .card p {
            margin: 5px 0;
            color: #34495E;
            font-size: 16px;
        }

        #map {
            height: 100%;
            width: 60%;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .container {
                flex-direction: column;
            }

            .card-list {
                width: 100%;
                border-right: none;
                border-bottom: 1px solid #ddd;
            }

            #map {
                width: 100%;
                height: 400px;
            }
        }
    </style>
    <div class="container mt-5">
        <div class="text-center headee">
            <h3 class="text-center text-success">Daftar Mitra Daur Ulang</h3>
            <p class="text-center text-muted mb-4">
                Temukan mitra daur ulang terdekat untuk mengirimkan barang bekas Anda!
            </p>

        </div>
        <div class="bodee">
            <div class="containee maps">

                <!-- Mitra List -->
                <div class="card-list" id="card-list">
                </div>

                <!-- Map -->
                <div id="map"></div>
            </div>

            <script>
                // Inisialisasi peta
                var map = L.map('map').setView([-0.0376495, 109.3435703], 13);

                // Tambahkan layer OpenStreetMap
                L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                }).addTo(map);

                // Data Mitra dari backend Laravel
                var mitras = @json($mitras);

                // Ikon khusus untuk lokasi mitra
                var LeafIcon = L.Icon.extend({
                    options: {
                        iconSize: [38, 95],
                        shadowSize: [50, 64],
                        iconAnchor: [22, 94],
                        shadowAnchor: [4, 62],
                        popupAnchor: [-3, -76]
                    }
                });

                // Ikon SVG
                var svgIconUrl = 'data:image/svg+xml;charset=UTF-8,' + encodeURIComponent(`
                    <svg display="block" height="41px" width="27px" viewBox="0 0 27 41" xmlns="http://www.w3.org/2000/svg">
                        <defs><radialGradient id="shadowGradient"><stop offset="10%" stop-opacity="0.4"></stop><stop offset="100%" stop-opacity="0.05"></stop></radialGradient></defs>
                        <ellipse cx="13.5" cy="34.8" rx="10.5" ry="5.25" fill="url(#shadowGradient)"></ellipse>
                        <path fill="#22b371" d="M27,13.5C27,19.07 20.25,27 14.75,34.5C14.02,35.5 12.98,35.5 12.25,34.5C6.75,27 0,19.22 0,13.5C0,6.04 6.04,0 13.5,0C20.96,0 27,6.04 27,13.5Z"></path>
                        <circle fill="white" cx="13.5" cy="13.5" r="5.5"></circle>
                    </svg>
                `);

                var greenIcon = new LeafIcon({
                    iconUrl: svgIconUrl
                });

                // Tambahkan marker dan card untuk setiap mitra
                mitras.forEach(function(mitra) {
                    // Marker pada peta
                    var marker = L.marker([mitra.latitude, mitra.longitude], {
                        icon: greenIcon
                    }).addTo(map);
                    marker.bindPopup(`
                        <div class="popup-content">
                            <h3>${mitra.name}</h3>
                            <p><strong>Alamat:</strong> ${mitra.address}</p>
                            <p><strong>Kontak:</strong> ${mitra.phone}</p>
                            <p><strong>Jam Operasional:</strong> ${mitra.time}</p>
                        </div>
                    `);

                    // Tambahkan card untuk setiap mitra di daftar
                    var cardList = document.getElementById('card-list');
                    var card = document.createElement('div');
                    card.className = 'card';
                    card.innerHTML = `
                        <h3>${mitra.name}</h3>
                        <p><strong>Alamat:</strong> ${mitra.address}</p>
                        <p><strong>Kontak:</strong> ${mitra.phone}</p>
                        <p><strong>Jam Operasional:</strong> ${mitra.time}</p>
                    `;
                    cardList.appendChild(card);
                });

                // Lokasi pengguna
                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(function(position) {
                        const userLat = position.coords.latitude;
                        const userLon = position.coords.longitude;

                        // Tampilkan lokasi pengguna
                        map.setView([userLat, userLon], 13);
                        var userMarker = L.marker([userLat, userLon]).addTo(map);
                        userMarker.bindPopup("<b>Lokasi Anda</b>").openPopup();
                    }, function(error) {
                        console.error("Kesalahan Geolokasi:", error);
                    });
                } else {
                    alert("Geolokasi tidak didukung oleh browser ini.");
                }
            </script>
        </div>
    </div>
@endsection
