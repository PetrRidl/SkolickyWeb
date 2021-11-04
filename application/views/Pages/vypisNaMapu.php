<style>



</style>
<br>
<br>
<br>
<div id="mapid"></div>

<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>

<script>

var mapid = L.map('mapid').setView([49.032687, 17.643536], 12);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(mapid);


</script>
