<!DOCTYPE html>
<html>
  <head>
    <style>
#map {
        width: 100%;
        height: 400px;
     }
    </style>
  </head>
  <body>
    <h3>My Google Maps Demo</h3>
    <div id="map"></div>
    <script>
      function initMap() {
        var mapDiv = document.getElementById('map');
        var map = new google.maps.Map(mapDiv, {
            center: {lat:  28.600895, lng: 77.3763935},
            zoom: 15
        });
      }
    </script>
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBg3BlVjNyHfx6vfmVEkuqozQZKUHe9fVA&callback=initMap">
    </script>
  </body>
</html>