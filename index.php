<html>
    <head>
        <title>PHP & JS SVG Türkiye Haritası</title>
    <head>
<body>
    <div id="map-container"></div>
</body>
<script>
    window.addEventListener('DOMContentLoaded', (event) => {
        var mapContainer = document.getElementById('map-container');
        mapContainer.innerHTML = '<object data="../assets/turkiye-map.svg" type="image/svg+xml"></object>';
        var svgObject = mapContainer.querySelector('object');

        svgObject.addEventListener('load', function() {
            var svgDocument = svgObject.contentDocument;
            var cityElements = svgDocument.getElementsByClassName('st82 st83');
            
            Array.from(cityElements).forEach(function(cityElement) {
                cityElement.addEventListener('click', function() {
                    var cityName = this.textContent;
                    console.log(cityName);
                });
            });
        });
    });
</script>
</html>