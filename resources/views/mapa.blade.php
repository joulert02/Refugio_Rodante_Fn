<!DOCTYPE html>
<html>
<head>
    <title>Mapa de Parqueaderos</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <style>#map { height: 600px; width: 100%; }</style>
</head>
<body>
    <h2 style="text-align: center;">Parqueaderos disponibles</h2>
    <div id="map"></div>

    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script>
        const map = L.map('map').setView([4.6097, -74.0817], 13);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; OpenStreetMap contributors'
        }).addTo(map);

        @foreach ($parkings as $parking)
            L.marker([{{ $parking->latitude }}, {{ $parking->longitude }}])
                .addTo(map)
                .bindPopup(`<strong>{{ $parking->name }}</strong><br>
                            Espacios disponibles: {{ $parking->available_spaces }}<br>
                            Precio: ${{ $parking->price_per_hour }}/h`);
        @endforeach
    </script>
</body>
</html>

