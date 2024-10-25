@extends('layouts.layout')

@section('child')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <style>
        /* General styling */
        body {
            font-family: 'Poppins', sans-serif; /* Using Poppins font */
            background-color: #f4f4f4; /* Light background for better contrast */
            margin: 0;
            padding: 0;
            height: 100vh;
        }

        .container {
            display: flex;
            height: 100vh; /* Full height for the viewport */
            overflow: hidden; /* Prevent overflow */
        }

        /* Card styling */
        .card-list {
            width: 40%;
            padding: 20px;
            overflow-y: auto;
            background-color: #ffffff; /* White background for cards */
            border-right: 1px solid #ddd;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Subtle shadow */
            transition: transform 0.3s ease;
        }

        .card {
            background-color: #ffffff;
            padding: 15px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s ease; /* Smooth shadow transition */
        }

        .card h3 {
            margin: 0;
            color: #2C3E50;
            font-size: 20px; /* Larger font size */
        }

        .card p {
            margin: 5px 0;
            color: #34495E;
            font-size: 16px; /* Larger font size */
        }

        /* Map styling */
        #map {
            height: 100%; /* Full height */
            width: 60%; /* Full width */
        }

        /* Media query for responsiveness */
        @media (max-width: 768px) {
            .container {
                flex-direction: column; /* Stack vertically on small screens */
            }
            .card-list {
                width: 100%; /* Full width on mobile */
                border-right: none; /* Remove border */
                border-bottom: 1px solid #ddd; /* Add bottom border */
            }
            #map {
                width: 100%; /* Full width on mobile */
                height: 400px; /* Set fixed height */
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <!-- Mitra List on the left -->
        <div class="card-list" id="card-list">
            <h2>Mitra List</h2> <!-- Title for better context -->
        </div>

        <!-- Map on the right -->
        <div id="map"></div>
    </div>

    <script>
        // Initialize the map
        var map = L.map('map').setView([-0.0376495, 109.3435703], 13);

        // Add OpenStreetMap layer
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        // Mitra data from Laravel backend
        var mitras = @json($mitras);

        var LeafIcon = L.Icon.extend({
            options: {
                iconSize: [38, 95],
                shadowSize: [50, 64],
                iconAnchor: [22, 94],
                shadowAnchor: [4, 62],
                popupAnchor: [-3, -76]
            }
        });

        // Inline SVG as a data URI
        var svgIconUrl = 'data:image/svg+xml;charset=UTF-8,' + encodeURIComponent(` ... `); // SVG remains unchanged

        // Set the SVG icon URL in Leaflet
        var greenIcon = new LeafIcon({
            iconUrl: svgIconUrl,
        });

        // Loop through each mitra and add it to the map and list
        mitras.forEach(function(mitra) {
            // Add marker to the map
            var marker = L.marker([mitra.latitude, mitra.longitude], {
                icon: greenIcon
            }).addTo(map);
            marker.bindPopup(`
                <div class="popup-content">
                    <h3>${mitra.name}</h3>
                    <p><strong>Address:</strong> ${mitra.address}</p>
                    <p><strong>Contact:</strong> ${mitra.phone}</p>
                    <p><strong>Time:</strong> ${mitra.time}</p>
                </div>
            `);

            // Add card to the card list
            var cardList = document.getElementById('card-list');
            var card = document.createElement('div');
            card.className = 'card';
            card.innerHTML = `
                <h3>${mitra.name}</h3>
                <p><strong>Address:</strong> ${mitra.address}</p>
                <p><strong>Contact:</strong> ${mitra.phone}</p>
                <p><strong>Time:</strong> ${mitra.time}</p>
            `;
            cardList.appendChild(card);
        });

        // Get the user's current location
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
                const userLat = position.coords.latitude;
                const userLon = position.coords.longitude;

                // Set the map view to the user's location
                map.setView([userLat, userLon], 13);

                // Add a marker for the user's location
                var userMarker = L.marker([userLat, userLon]).addTo(map);
                userMarker.bindPopup("<b>Your Location</b>").openPopup();
            }, function(error) {
                console.error("Geolocation error:", error);
            });
        } else {
            alert("Geolocation is not supported by this browser.");
        }
    </script>
</body>

@endsection
