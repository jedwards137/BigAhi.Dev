<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <!-- Browser Tab Title -->
    <title>Heatmaps</title>

    <!-- Custom CSS Styling -->
    <link href="thStyles.css" rel="stylesheet">

</head>

<body>

    <!-- Options Panel -->
    <div id="floating-panel">
        <button onclick="toggleHeatmap()">Toggle Heatmap</button>
        <button onclick="changeGradient()">Change gradient</button>
        <button onclick="changeRadius()">Change radius</button>
        <button onclick="changeOpacity()">Change opacity</button>
    </div>

    <!-- Map Div -->
    <div id="map"></div>

    <div id="data">
        hi

    </div>

    <script>
    
    </script>


    <!-- JQuery JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

    <!-- Google Maps JS Api -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCakqO4xhgHWK9gebqUreK3Oy11Y-Ifn1c&libraries=visualization&callback=initMap"></script>

    <!-- Custom JS Functions -->
    <script src="thFunctions.js"></script>


</body>

</html>