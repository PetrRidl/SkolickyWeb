<style>



</style>
<br>
<br>
<br>
<div style="height: 750px" id="mapid"></div>



<script>
          <?php
                $js_array = json_encode($vypis_skoly);
                echo "var skoly = " . $js_array . ";\n";
                ?>
var mapid = L.map('mapid').setView([49.032687, 17.643536], 12);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(mapid);
for (let i = 0; i < skoly.length; i++) {
                    L.marker(
                            L.latLng(
                                parseFloat(skoly[i].geo_lat),
                                parseFloat(skoly[i].geo_long)
                            )
                        ).addTo(mapid)
                        .bindPopup(skoly[i].nazevSkol);
                }
</script>


