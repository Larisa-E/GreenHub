<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ꕥ 𝙶𝚎𝚗𝚋𝚛𝚞𝚖𝚜 𝚒𝚗 𝙵𝚢𝚗</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <style>
        #map {
            height: 500px;
            width: 100%;
        }
        .info {
            margin-top: 20px;
        }

        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
            color: #333;
        }

        header {
            background-color: brown;
            padding: 10px 20px;
            text-align: center;
        }

        header h1 {
            color: white;
            margin: 0;
        }

        nav {
            background-color: green;
            padding: 10px;
            text-align: center;
        }

        nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: inline-flex;
        }

        nav a {
            margin: 0 15px;
            text-decoration: none;
            color: white;
            font-weight: bold;
            transition: color 0.3s;
        }

        nav a:hover {
            color: #ffd700;
        }
    </style>
</head>
<body>
    <header>
        <h1>𝙶𝚎𝚗𝚋𝚛𝚞𝚖𝚜 𝚒𝚗 𝙵𝚢𝚗</h1>
    </header>

    <?php include('nav.php'); ?> 

    <main>
        <h2>Recycling Centers in Fyn</h2>
        <p>Below are the locations of genbrugs in Fyn, Denmark:</p>
        <div id="map"></div>
        
        <div class="info" id="info">
            <h3>Details:</h3>
            <p id="address"></p>
            <p id="additional-info"></p>
        </div>
    </main>

    <?php include('footer.php'); ?>

    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script>
        var map = L.map('map').setView([55.4000, 10.4000], 9);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '© OpenStreetMap'
        }).addTo(map);

        var genbrugsLocations = [
            { name: "GenbrugsHallerne", position: [55.379957, 10.422214], address: "Rødegårdsvej 182, 5230 Odense", info: "Mandag - søndag: 10.30 - 17.30" },
            { name: "Hjallese Retro & Genbrug", position: [55.356585, 10.398343], address: "Hjallesegade 51, 5260 Odense", info: "" },
            { name: "Mission Afrika Genbrug Odense C", position: [55.394056, 10.375588], address: "Vesterbro 53B, 5000 Odense", info: "Mandag - søndag: 10.30 - 17.30" },
        ];

        function displayInfo(genbrug) {
            document.getElementById('address').innerText = genbrug.address;
            document.getElementById('additional-info').innerText = genbrug.info;
        }

        genbrugsLocations.forEach(function(genbrug) {
            var marker = L.marker(genbrug.position)
                .addTo(map)
                .bindPopup(genbrug.name)
                .on('click', function() {
                    displayInfo(genbrug);
                });
        });
    </script>
</body>
</html>