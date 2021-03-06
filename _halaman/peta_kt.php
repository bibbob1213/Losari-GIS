<?php
  $title="Peta Kecamatan Losari"; 

?> <!-- Judul Halaman -->

       <div class="container">

                  <div id="mapid" style=" height: 81vh;"></div>
                   <script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js" 
                     integrity="sha512-nMMmRyTVoLYqjP9hrbed9S+FzjZHW5gY1TWCHA5ckwXZBadntCNs8kEqAWdrb9O7rxbCaA4lKTIWjDXZxflOcA=="
                     crossorigin=""></script>

                      <script src="<?=assets()?>js/leaflet-panel-layers-master/src/leaflet-panel-layers.js"></script>
                      <script src="<?=assets()?>js/leaflet.ajax.js"></script>

                     <script>



                  var map = L.map('mapid').setView([-6.8447429,108.850007], 11);

                  var layerkita=L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
                      maxZoom: 25,
                      attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
                        '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
                        'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
                      id: 'mapbox.streets'
                      });
                  map.addLayer(layerkita);

                    function getColor(d) {
                        return d > 5 ? '#800026' :
                            d > 4  ? '#BD0026' :
                            d > 3  ? '#E31A1C' :
                            d > 2  ? '#FC4E2A' :
                            d > 1   ? '#FD8D3C' :
                            '#FEB24C' ;
                      }

                    function style(feature) {
                        return {
                          weight: 1,
                          opacity: 1,
                          color: 'white',
                          dashArray: '3',
                          fillOpacity: 0.7,
                          fillColor: getColor(feature.properties.density)
                        };
                      }
                    function highlightFeature(e) {
                        var layer = e.target;

                        layer.setStyle({
                          weight: 3,
                          color: '#666',
                          dashArray: '',
                          fillOpacity: 0.7
                        });

                        if (!L.Browser.ie && !L.Browser.opera && !L.Browser.edge) {
                          layer.bringToFront();
                        }

                      }



                      function resetHighlight(e) {
                        var layer = e.target;

                        layer.setStyle({
                          weight: 2,
                          opacity: 1,
                          color: 'white',
                          dashArray: '3',
                          fillOpacity: 0.7
                        });

                      }

                      function zoomToFeature(e) {
                        map.fitBounds(e.target.getBounds());
                      }

                      function onEachFeature(feature, layer) {
                        layer.on({
                          mouseover: highlightFeature,
                          mouseout: resetHighlight,
                          click: zoomToFeature
                        });
                      }
                var legend = L.control({position: 'topright'});
                      legend.onAdd = function (map) {

                        var div = L.DomUtil.create('div', 'info legend'),
                          grades = [0, 1, 2,3, 4, 5],
                          labels = ['Ketinggain (mdpl)<br>'],
                          from, to;

                        for (var i = 0; i < grades.length; i++) {
                          from = grades[i];
                          to = grades[i + 1];

                          labels.push(
                            '<i style="background:' + getColor(from + 1) + '"></i> ' +
                            from + (to ? '&ndash;' + to : '+'));
                        }

                        div.innerHTML = labels.join('<br>');
                        return div;
                      };
                    legend.addTo(map);



    function iconByName(name) {
    return '<i class="icon" style="background-color:'+name+';border-radius:50%"></i>';
    }

    function featureToMarker(feature, latlng) {
      return L.marker(latlng, {
        icon: L.divIcon({
          className: 'marker-'+feature.properties.amenity,
          html: iconByName(feature.properties.amenity),
          iconUrl: '../images/markers/'+feature.properties.amenity+'.png',
          iconSize: [25, 41],
          iconAnchor: [12, 41],
          popupAnchor: [1, -34],
          shadowSize: [41, 41]
        })
      });
    }

    <?php 
    include "koneksi.php";
    $data = mysqli_query($connection,"SELECT * FROM desa ORDER BY id_desa ");
    while ($d = mysqli_fetch_array($data)) {
      ?>
          var myStyle<?=$d['id_desa']?>={
              "color":"white",
              "weight":2,
              "dashArray": '3',
              "fillOpacity": 0.7,
              "fillColor": "<?=$d['warna_kt']?>"
          }
      <?php
      $arraydes[]='{
        name: "'.str_replace('_', ' ', $d['nama_desa']).'",
        icon: iconByName("'.$d['warna'].'"),
        layer:  new L.GeoJSON.AJAX(["assets/geojson/'.$d['nama_desa'].'.geojson"] ,{onEachFeature:onEachFeature,style:myStyle'.$d['id_desa'].',pointToLayer: featureToMarker }).addTo(map).bindPopup("<b>Desa '.$d['nama_desa'].' </b><br>Ketinggian : '.$d['mdpl'].' mdpl")
      }';
    }
      # code...
    
      
  
     ?>

    var overLayers = [
     <?=implode(',', $arraydes);?>
    ];

    var panelLayers = new L.Control.PanelLayers(baseLayers, overLayers);

    map.addControl(panelLayers);
  </script>

                        </div>
      <div class="footer">
            
            <div class="no-gutters">
                <div class="col-auto mx-auto">
                    <div class="row no-gutters justify-content-center">
                        <div class="col-auto">
                            <a href="<?=url('beranda')?>" class="btn btn-link-default ">
                                <i class="material-icons">home</i>
                            </a>
                        </div>
                        <div class="col-auto">
                            <a href="<?=url('peta_wl')?>" class="btn btn-link-default active ">
                                <i class="material-icons">map</i>
                            </a>
                        </div>
                        <div class="col-auto">
                            <a href="<?=url('data')?>" class="btn btn-link-default ">
                                <i class="material-icons">find_in_page</i>
                            </a>
                        </div>
                        <div class="col-auto">
                            <a href="<?=url('login')?>" class="btn btn-link-default ">
                                <i class="material-icons">edit</i>
                            </a>
                        </div>
                        <div class="col-auto">
                            <a href="<?=url('tentang')?>" class="btn btn-link-default ">
                                <i class="material-icons">info</i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer ends-->

    </div>
