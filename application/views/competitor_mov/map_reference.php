<div id="map" style="height: 350px; width: 100%;"></div>
  <!-- Insert Content Here ... -->
<script>
  var map;
  function initMap() {
    map = new google.maps.Map(document.getElementById('map'), {
      center: {lat: -1.05, lng: 117.86},
      zoom: 5
    });
  }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDPvntS-apbXQKdi2PIlqVfSnujHLtdJnU&callback=initMap"
async defer></script>