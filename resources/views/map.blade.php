<!DOCTYPE html>
<html>

<head>
    <title>OpenStreetMap Laravel</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <style>
        /* Layout styling */
        .container {
            display: flex;
        }

        /* Card styling */
        .card-list {
            width: 40%;
            padding: 10px;
            overflow-y: auto;
            /* max-height: 500px; */
            background-color: #f9f9f9;
            border-right: 1px solid #ddd;
        }

        .card {
            background-color: #fff;
            padding: 15px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .card h3 {
            margin: 0;
            color: #2C3E50;
            font-size: 18px;
        }

        .card p {
            margin: 5px 0;
            color: #34495E;
            font-size: 14px;
        }

        /* Map styling */
        #map {
            height: 500px;
            width: 60%;
            margin: 1%;
        }
        .container {
            height: 60%
        }
    </style>
</head>

<body>
    <div class="container">
        <!-- Mitra List on the left -->
        <div class="card-list" id="card-list"></div>

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
        var svgIconUrl = 'data:image/svg+xml;charset=UTF-8,' + encodeURIComponent(`
    <svg display="block" height="31px" width="27px" viewBox="0 0 27 41" xmlns="http://www.w3.org/2000/svg">
        <defs>
            <radialGradient id="shadowGradient">
                <stop offset="10%" stop-opacity="0.4"></stop>
                <stop offset="100%" stop-opacity="0.05"></stop>
            </radialGradient>
        </defs>
        <ellipse cx="13.5" cy="34.8" rx="10.5" ry="5.25" fill="url(#shadowGradient)"></ellipse>
        <path fill="#22b371" d="M27,13.5C27,19.07 20.25,27 14.75,34.5C14.02,35.5 12.98,35.5 12.25,34.5C6.75,27 0,19.22 0,13.5C0,6.04 6.04,0 13.5,0C20.96,0 27,6.04 27,13.5Z"></path>
        <path opacity="0.25" d="M13.5,0C6.04,0 0,6.04 0,13.5C0,19.22 6.75,27 12.25,34.5C13,35.52 14.02,35.5 14.75,34.5C20.25,27 27,19.07 27,13.5C27,6.04 20.96,0 13.5,0ZM13.5,1C20.42,1 26,6.58 26,13.5C26,15.9 24.5,19.18 22.22,22.74C19.95,26.3 16.71,30.14 13.94,33.91C13.74,34.18 13.61,34.32 13.5,34.44C13.39,34.32 13.26,34.18 13.06,33.91C10.28,30.13 7.41,26.31 5.02,22.77C2.62,19.23 1,15.95 1,13.5C1,6.58 6.58,1 13.5,1Z"></path>
        <circle fill="white" cx="13.5" cy="13.5" r="5.5"></circle>
    </svg>
`);

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

        // Custom icon for the user's current location
        var userIcon = L.icon({
            iconUrl: 'https://cdn.pixabay.com/photo/2014/04/03/10/03/google-309739_640.png', // Placeholder image for example
            iconSize: [25, 41],
            iconAnchor: [12, 41],
            popupAnchor: [1, -34]
        });

        // Get the user's current location
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
                const userLat = position.coords.latitude;
                const userLon = position.coords.longitude;

                // Set the map view to the user's location
                map.setView([userLat, userLon], 13);

                // Add a marker for the user's location
                var userMarker = L.marker([userLat, userLon], {
                    icon: userIcon
                }).addTo(map);
                // userMarker.bindPopup("<b>Your Location</b>").openPopup();
            }, function(error) {
                console.error("Geolocation error:", error);
            });
        } else {
            alert("Geolocation is not supported by this browser.");
        }
    </script>
</body>

</html>