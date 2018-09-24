<html>
<head>
    <script src='https://api.mapbox.com/mapbox-gl-js/v0.49.0/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v0.49.0/mapbox-gl.css' rel='stylesheet' />
</head>
<body>
<div id='map' style='width: 400px; height: 300px;'></div>
<script>
    mapboxgl.accessToken = 'pk.eyJ1Ijoic25laGlsc2Fua2FscCIsImEiOiJjam1hNjBkcDgxNGhyM2tsa2dhazRtdjA0In0.qyAqw9Wm6RWJLRMaiX9-rg';
    var map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/streets-v10'
    });
</script>
</body>
</html>