<?php
/**
 * $Id: default.php 11917 2009-05-29 19:37:05Z ian $
 */
defined('_JEXEC') or die('Restricted access');


if ($this->params->get('show_page_title', 1)) {
    ?>
    <div class="page_title">
        <?php echo $this->params->get('page_title'); ?>
    </div>
    <?php
}
?>

<div id="page_body">
    <div class="col-md-12">
        <div class="googlemapcontact">

            <?php
            $showdirections = $this->cont_map->map->showdirections;
            $choosemapstyle = 'map_style';
            $choosemapstyle = $this->cont_map->map->choosemapstyle;
            $showdescs = $this->cont_map->map->showdescs;

            if ($showdirections == 1) {
                $showdirections = "display:none";
            } else {
                $showdirections = "display:block;font-size:12px;margin:5px 0 0;";
            }
            if ($showdescs == 1) {
                $showdescs = "display:none";
            } else {
                $showdescs = "display:block;font-size:12px;margin:5px 0 0;";
            }

            $lat[0] = $this->cont_map->map->latitude;
            $lon[0] = $this->cont_map->map->longitude;
            $tit[0] = $this->cont_map->map->title;
            $des[0] = $this->cont_map->map->desc;
            $lat[1] = $this->cont_map->map->latitude1;
            $lon[1] = $this->cont_map->map->longitude1;
            $tit[1] = $this->cont_map->map->title1;
            $des[1] = $this->cont_map->map->desc1;
            $lat[2] = $this->cont_map->map->latitude2;
            $lon[2] = $this->cont_map->map->longitude2;
            $tit[2] = $this->cont_map->map->title2;
            $des[2] = $this->cont_map->map->desc2;
            $lat[3] = $this->cont_map->map->latitude3;
            $lon[3] = $this->cont_map->map->longitude3;
            $tit[3] = $this->cont_map->map->title3;
            $des[3] = $this->cont_map->map->desc3;
            $lat[4] = $this->cont_map->map->latitude4;
            $lon[4] = $this->cont_map->map->longitude4;
            $tit[4] = $this->cont_map->map->title4;
            $des[4] = $this->cont_map->map->desc4;
            $lat[5] = $this->cont_map->map->latitude5;
            $lon[5] = $this->cont_map->map->longitude5;
            $tit[5] = $this->cont_map->map->title5;
            $des[5] = $this->cont_map->map->desc5;
            $lat[6] = $this->cont_map->map->latitude6;
            $lon[6] = $this->cont_map->map->longitude6;
            $tit[6] = $this->cont_map->map->title6;
            $des[6] = $this->cont_map->map->desc6;
            $lat[7] = $this->cont_map->map->latitude7;
            $lon[7] = $this->cont_map->map->longitude7;
            $tit[7] = $this->cont_map->map->title7;
            $des[7] = $this->cont_map->map->desc7;
            $lat[8] = $this->cont_map->map->latitude8;
            $lon[8] = $this->cont_map->map->longitude8;
            $tit[8] = $this->cont_map->map->title8;
            $des[8] = $this->cont_map->map->desc8;
            $lat[9] = $this->cont_map->map->latitude9;
            $lon[9] = $this->cont_map->map->longitude9;
            $tit[9] = $this->cont_map->map->title9;
            $des[9] = $this->cont_map->map->desc9;
            $lat[10] = $this->cont_map->map->latitude10;
            $lon[10] = $this->cont_map->map->longitude10;
            $tit[10] = $this->cont_map->map->title10;
            $des[10] = $this->cont_map->map->desc10;
            $lat[11] = $this->cont_map->map->latitude11;
            $lon[11] = $this->cont_map->map->longitude11;
            $tit[11] = $this->cont_map->map->title11;
            $des[11] = $this->cont_map->map->desc11;
            $lat[12] = $this->cont_map->map->latitude12;
            $lon[12] = $this->cont_map->map->longitude12;
            $tit[12] = $this->cont_map->map->title12;
            $des[12] = $this->cont_map->map->desc12;
            $lat[13] = $this->cont_map->map->latitude13;
            $lon[13] = $this->cont_map->map->longitude13;
            $tit[13] = $this->cont_map->map->title13;
            $des[13] = $this->cont_map->map->desc13;
            $lat[14] = $this->cont_map->map->latitude14;
            $lon[14] = $this->cont_map->map->longitude14;
            $tit[14] = $this->cont_map->map->title14;
            $des[14] = $this->cont_map->map->desc14;
            $lat[15] = $this->cont_map->map->latitude15;
            $lon[15] = $this->cont_map->map->longitude15;
            $tit[15] = $this->cont_map->map->title15;
            $des[15] = $this->cont_map->map->desc15;
            $lat[16] = $this->cont_map->map->latitude16;
            $lon[16] = $this->cont_map->map->longitude16;
            $tit[16] = $this->cont_map->map->title16;
            $des[16] = $this->cont_map->map->desc16;
            $lat[17] = $this->cont_map->map->latitude17;
            $lon[17] = $this->cont_map->map->longitude17;
            $tit[17] = $this->cont_map->map->title17;
            $des[17] = $this->cont_map->map->desc17;
            $lat[18] = $this->cont_map->map->latitude18;
            $lon[18] = $this->cont_map->map->longitude18;
            $tit[18] = $this->cont_map->map->title18;
            $des[18] = $this->cont_map->map->desc18;
            $lat[19] = $this->cont_map->map->latitude19;
            $lon[19] = $this->cont_map->map->longitude19;
            $tit[19] = $this->cont_map->map->title19;
            $des[19] = $this->cont_map->map->desc19;
            $lat[20] = $this->cont_map->map->latitude20;
            $lon[20] = $this->cont_map->map->longitude20;
            $tit[20] = $this->cont_map->map->title20;
            $des[20] = $this->cont_map->map->desc20;
            $lat[21] = $this->cont_map->map->latitude21;
            $lon[21] = $this->cont_map->map->longitude21;
            $tit[21] = $this->cont_map->map->title21;
            $des[21] = $this->cont_map->map->desc21;
            $lat[22] = $this->cont_map->map->latitude22;
            $lon[22] = $this->cont_map->map->longitude22;
            $tit[22] = $this->cont_map->map->title22;
            $des[22] = $this->cont_map->map->desc22;
            $lat[23] = $this->cont_map->map->latitude22;
            $lon[23] = $this->cont_map->map->longitude23;
            $tit[23] = $this->cont_map->map->title23;
            $des[23] = $this->cont_map->map->desc23;
            $lat[24] = $this->cont_map->map->latitude24;
            $lon[24] = $this->cont_map->map->longitude24;
            $tit[24] = $this->cont_map->map->title24;
            $des[24] = $this->cont_map->map->desc24;
            $lat[25] = $this->cont_map->map->latitude25;
            $lon[25] = $this->cont_map->map->longitude25;
            $tit[25] = $this->cont_map->map->title25;
            $des[25] = $this->cont_map->map->desc25;
            $lat[26] = $this->cont_map->map->latitude26;
            $lon[26] = $this->cont_map->map->longitude26;
            $tit[26] = $this->cont_map->map->title26;
            $des[26] = $this->cont_map->map->desc26;
            $lat[27] = $this->cont_map->map->latitude27;
            $lon[27] = $this->cont_map->map->longitude27;
            $tit[27] = $this->cont_map->map->title27;
            $des[27] = $this->cont_map->map->desc27;
            $lat[28] = $this->cont_map->map->latitude28;
            $lon[28] = $this->cont_map->map->longitude28;
            $tit[28] = $this->cont_map->map->title28;
            $des[28] = $this->cont_map->map->desc28;
            $lat[29] = $this->cont_map->map->latitude29;
            $lon[29] = $this->cont_map->map->longitude29;
            $tit[29] = $this->cont_map->map->title29;
            $des[29] = $this->cont_map->map->desc29;

            //$zooom = $this->cont_map->map->zoom;

            $show_map = $this->params->get('show_map', '');
            $map_zoom = $this->params->get('map_zoom', '');



            $map_width = $this->params->get('map_width', '');
            $map_height = $this->params->get('map_height', '');


            if ($show_map == 1) {

                echo'<div style="width:' . $map_width . '; height:' . $map_height . ';" id="map-canvas"></div>';

                $doc = JFactory::getDocument();

                $mimg = JURI::base() . 'modules' . DS . 'mod_contact' . DS . 'assets' . DS . 'location_map_icon.png';

                $js = <<<__JS__

            var saqartvelo = new google.maps.LatLng("$lat[0]","$lon[0]"); 
                    
            

            var markers = [];
            var iterator = 0;
            var styles;
            var map;
            var mapOptions;
            var image = '$mimg' ;


            function initialize() {

            //
            var styles = [
                {
                  stylers: [
                    { hue: "#ccc" },
                    { saturation: -100 }
                  ]
                },{
                  featureType: "road",
                  elementType: "geometry",
                  stylers: [
                    { lightness: 100 },
                    { visibility: "simplified" }
                  ]
                },{
                  featureType: "road",
                  elementType: "labels",
                  stylers: [
                    { visibility: "on" }
                  ]
                }
              ];

              var styledMap = new google.maps.StyledMapType(styles,{name: "GW"});
            //
            var mapOptions = {
                zoom: $map_zoom,
                center: saqartvelo,
                     mapTypeControlOptions: {
                  mapTypeIds: [google.maps.MapTypeId.SATELLITE,google.maps.MapTypeId.HYBRID,google.maps.MapTypeId.TERRAIN,google.maps.MapTypeId.ROADMAP,"map_style"]
                }
              };

              map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
              map.mapTypes.set('map_style', styledMap);
                   
              map.setMapTypeId($choosemapstyle);
                    
                    
             //------------------------------- new cords
                    if("$lat[0]"){
                    
                        
                              var k = new google.maps.LatLng("$lat[0]","$lon[0]");
                              var kmarker = new google.maps.Marker({ position:k,icon: image});
                              var ktit = new google.maps.InfoWindow({
                                  content: '<h3>$tit[0]</h3><h5 style="$showdescs" >$des[0]</h5><a style="$showdirections" target="_blank" href="https://www.google.com/maps/dir/Current+Location/$lat[0],$lon[0]">Get Directions</a>'
                                      });
                              kmarker.addListener("click", function() {
                             ktit1.close(); 
                             ktit2.close(); 
                             ktit3.close(); 
                             ktit4.close(); 
                             ktit.open(map, kmarker);
                    
                                      });
                              kmarker.setMap(map);
                   }
                    
                    //------------------------------- new cords
                    if("$lat[1]"){
                              var k1 = new google.maps.LatLng("$lat[1]","$lon[1]");
                              var kmarker1 = new google.maps.Marker({ position:k1,icon: image});
                              var ktit1 = new google.maps.InfoWindow({content: '<h3>$tit[1]</h3><h5 style="$showdescs" >$des[1]</h5><a style="$showdirections" target="_blank" href="https://www.google.com/maps/dir/Current+Location/$lat[1],$lon[1]">Get Directions</a>'});
                              kmarker1.addListener("click", function() {
                              ktit.close(); 
                             ktit2.close(); 
                             ktit3.close(); 
                             ktit4.close(); 
                                  ktit1.open(map, kmarker1);
                                      });
                                kmarker1.setMap(map);
                     };
                    //------------------------------- new cords
                    if("$lat[2]"){
                              var k2 = new google.maps.LatLng("$lat[2]","$lon[2]");
                              var kmarker2 = new google.maps.Marker({ position:k2,icon: image});
                    var ktit2 = new google.maps.InfoWindow({content: '<h3>$tit[2]</h3><h5 style="$showdescs" >$des[2]</h5><a style="$showdirections" target="_blank" href="https://www.google.com/maps/dir/Current+Location/$lat[2],$lon[2]">Get Directions</a>'});
                              kmarker2.addListener("click", function() {
                             ktit1.close(); 
                             ktit.close(); 
                             ktit3.close(); 
                             ktit4.close(); 
                                  ktit2.open(map, kmarker2);
                                      });
                                kmarker2.setMap(map);
                    };
                    //------------------------------- new cords
                    if("$lat[3]"){
                              var k3 = new google.maps.LatLng("$lat[3]","$lon[3]");
                              var kmarker3 = new google.maps.Marker({ position:k3,icon: image});
                    var ktit3 = new google.maps.InfoWindow({content: '<h3>$tit[3]</h3><h5 style="$showdescs" >$des[3]</h5><a style="$showdirections" target="_blank" href="https://www.google.com/maps/dir/Current+Location/$lat[3],$lon[3]">Get Directions</a>'});
                              kmarker3.addListener("click", function() {
                              ktit1.close(); 
                             ktit2.close(); 
                             ktit.close(); 
                             ktit4.close(); 
                                  ktit3.open(map, kmarker3);
                                      });
                                kmarker3.setMap(map);
                    };
                    //------------------------------- new cords
                    if("$lat[4]"){
                              var k4 = new google.maps.LatLng("$lat[4]","$lon[4]");
                              var kmarker4 = new google.maps.Marker({ position:k4,icon: image});
                    var ktit4 = new google.maps.InfoWindow({content: '<h3>$tit[4]</h3><h5 style="$showdescs" >$des[4]</h5><a style="$showdirections" target="_blank" href="https://www.google.com/maps/dir/Current+Location/$lat[4],$lon[4]">Get Directions</a>'});
                              kmarker4.addListener("click", function() {
                    ktit1.close(); 
                             ktit2.close(); 
                             ktit3.close(); 
                             ktit.close(); 
                                  ktit4.open(map, kmarker4);
                                      });
                                kmarker4.setMap(map);
                 };
                     //------------------------------- new cords
                    if("$lat[5]"){
                              var k6 = new google.maps.LatLng("$lat[5]","$lon[5]");
                              var kmarker6 = new google.maps.Marker({ position:k6,icon: image});
                              var ktit6 = new google.maps.InfoWindow({content: '<h3>$tit[5]</h3><h5 style="$showdescs" >$des[5]</h5><a style="$showdirections" target="_blank" href="https://www.google.com/maps/dir/Current+Location/$lat[5],$lon[5]">Get Directions</a>'});
                              kmarker1.addListener("click", function() {
                              ktit.close(); 
                             ktit1.close(); 
                             ktit2.close(); 
                             ktit3.close(); 
                             ktit4.close(); 
                             ktit5.close(); 
                                  ktit6.open(map, kmarker1);
                                      });
                                kmarker6.setMap(map);
                    };
                        //------------------------------- new cords
                    if("$lat[6]"){
                              var k6 = new google.maps.LatLng("$lat[6]","$lon[6]");
                              var kmarker6 = new google.maps.Marker({ position:k6,icon: image});
                              var ktit6 = new google.maps.InfoWindow({content: '<h3>$tit[6]</h3><h5 style="$showdescs" >$des[6]</h5><a style="$showdirections" target="_blank" href="https://www.google.com/maps/dir/Current+Location/$lat[6],$lon[6]">Get Directions</a>'});
                              kmarker1.addListener("click", function() {
                              ktit.close(); 
                             ktit1.close(); 
                             ktit2.close(); 
                             ktit3.close(); 
                             ktit4.close(); 
                             ktit5.close(); 
                                  ktit6.open(map, kmarker1);
                                      });
                                kmarker6.setMap(map);
                    };
                     //------------------------------- new cords
                    if("$lat[7]"){
                              var k7 = new google.maps.LatLng("$lat[7]","$lon[7]");
                              var kmarker7 = new google.maps.Marker({ position:k7,icon: image});
                              var ktit7 = new google.maps.InfoWindow({content: '<h3>$tit[7]</h3><h5 style="$showdescs" >$des[7]</h5><a style="$showdirections" target="_blank" href="https://www.google.com/maps/dir/Current+Location/$lat[7],$lon[7]">Get Directions</a>'});
                              kmarker1.addListener("click", function() {
                              ktit.close(); 
                             ktit1.close(); 
                             ktit2.close(); 
                             ktit3.close(); 
                             ktit4.close(); 
                             ktit5.close(); 
                             ktit6.close(); 
                                  ktit7.open(map, kmarker1);
                                      });
                                kmarker7.setMap(map);
                    };
                    //------------------------------- new cords
                    if("$lat[8]"){
                              var k8 = new google.maps.LatLng("$lat[8]","$lon[8]");
                              var kmarker8 = new google.maps.Marker({ position:k8,icon: image});
                              var ktit8 = new google.maps.InfoWindow({content: '<h3>$tit[8]</h3><h5 style="$showdescs" >$des[8]</h5><a style="$showdirections" target="_blank" href="https://www.google.com/maps/dir/Current+Location/$lat[8],$lon[8]">Get Directions</a>'});
                              kmarker8.addListener("click", function() {
                              ktit.close(); 
                             ktit1.close(); 
                             ktit2.close(); 
                             ktit3.close(); 
                             ktit4.close(); 
                             ktit5.close(); 
                             ktit6.close(); 
                             ktit7.close(); 
                                  ktit8.open(map, kmarker1);
                                      });
                                kmarker8.setMap(map);
                    };
                      //------------------------------- new cords
                    if("$lat[9]"){
                              var k9 = new google.maps.LatLng("$lat[9]","$lon[9]");
                              var kmarker9 = new google.maps.Marker({ position:k9,icon: image});
                              var ktit9 = new google.maps.InfoWindow({content: '<h3>$tit[9]</h3><h5 style="$showdescs" >$des[9]</h5><a style="$showdirections" target="_blank" href="https://www.google.com/maps/dir/Current+Location/$lat[9],$lon[9]">Get Directions</a>'});
                              kmarker9.addListener("click", function() {
                              ktit.close(); 
                             ktit1.close(); 
                             ktit2.close(); 
                             ktit3.close(); 
                             ktit4.close(); 
                             ktit5.close(); 
                             ktit6.close(); 
                             ktit7.close(); 
                             ktit8.close(); 
                                  ktit9.open(map, kmarker1);
                                      });
                                kmarker9.setMap(map);
                    };
                     //------------------------------- new cords
                    if("$lat[10]"){
                              var k10 = new google.maps.LatLng("$lat[10]","$lon[10]");
                              var kmarker10 = new google.maps.Marker({ position:k10,icon: image});
                              var ktit10 = new google.maps.InfoWindow({content: '<h3>$tit[10]</h3><h5 style="$showdescs" >$des[10]</h5><a style="$showdirections" target="_blank" href="https://www.google.com/maps/dir/Current+Location/$lat[10],$lon[10]">Get Directions</a>'});
                              kmarker10.addListener("click", function() {
                              ktit.close(); 
                             ktit1.close(); 
                             ktit2.close(); 
                             ktit3.close(); 
                             ktit4.close(); 
                             ktit5.close(); 
                             ktit6.close(); 
                             ktit7.close(); 
                             ktit8.close(); 
                             ktit9.close(); 
                                  ktit10.open(map, kmarker1);
                                      });
                                kmarker10.setMap(map);
                    };
                    //------------------------------- new cords
                    if("$lat[11]"){
                              var k11 = new google.maps.LatLng("$lat[11]","$lon[11]");
                              var kmarker11 = new google.maps.Marker({ position:k11,icon: image});
                              var ktit11 = new google.maps.InfoWindow({content: '<h3>$tit[11]</h3><h5 style="$showdescs" >$des[11]</h5><a style="$showdirections" target="_blank" href="https://www.google.com/maps/dir/Current+Location/$lat[11],$lon[11]">Get Directions</a>'});
                              kmarker11.addListener("click", function() {
                              ktit.close(); 
                             ktit1.close(); 
                             ktit2.close(); 
                             ktit3.close(); 
                             ktit4.close(); 
                             ktit5.close(); 
                             ktit6.close(); 
                             ktit7.close(); 
                             ktit8.close(); 
                             ktit9.close(); 
                             ktit10.close(); 
                                  ktit11.open(map, kmarker1);
                                      });
                                kmarker11.setMap(map);
                    };
                    //------------------------------- new cords
                    if("$lat[12]"){
                              var k12 = new google.maps.LatLng("$lat[12]","$lon[12]");
                              var kmarker12 = new google.maps.Marker({ position:k12,icon: image});
                              var ktit12 = new google.maps.InfoWindow({content: '<h3>$tit[12]</h3><h5 style="$showdescs" >$des[12]</h5><a style="$showdirections" target="_blank" href="https://www.google.com/maps/dir/Current+Location/$lat[12],$lon[12]">Get Directions</a>'});
                              kmarker11.addListener("click", function() {
                              ktit.close(); 
                             ktit1.close(); 
                             ktit2.close(); 
                             ktit3.close(); 
                             ktit4.close(); 
                             ktit5.close(); 
                             ktit6.close(); 
                             ktit7.close(); 
                             ktit8.close(); 
                             ktit9.close(); 
                             ktit10.close(); 
                             ktit11.close(); 
                                  ktit12.open(map, kmarker1);
                                      });
                                kmarker12.setMap(map);
                    
                    };
                    //------------------------------- new cords
                    if("$lat[13]"){
                              var k13 = new google.maps.LatLng("$lat[13]","$lon[12]");
                              var kmarker13 = new google.maps.Marker({ position:k13,icon: image});
                              var ktit13 = new google.maps.InfoWindow({content: '<h3>$tit[13]</h3><h5 style="$showdescs" >$des[13]</h5><a style="$showdirections" target="_blank" href="https://www.google.com/maps/dir/Current+Location/$lat[13],$lon[13]">Get Directions</a>'});
                              kmarker13.addListener("click", function() {
                              ktit.close(); 
                             ktit1.close(); 
                             ktit2.close(); 
                             ktit3.close(); 
                             ktit4.close(); 
                             ktit5.close(); 
                             ktit6.close(); 
                             ktit7.close(); 
                             ktit8.close(); 
                             ktit9.close(); 
                             ktit10.close(); 
                             ktit11.close(); 
                             ktit12.close(); 
                                  ktit13.open(map, kmarker1);
                                      });
                                kmarker13.setMap(map);
                    
                    };
                      //------------------------------- new cords
                    if("$lat[14]"){
                              var k14 = new google.maps.LatLng("$lat[14]","$lon[14]");
                              var kmarker14 = new google.maps.Marker({ position:k14,icon: image});
                              var ktit14 = new google.maps.InfoWindow({content: '<h3>$tit[14]</h3><h5 style="$showdescs" >$des[14]</h5><a style="$showdirections" target="_blank" href="https://www.google.com/maps/dir/Current+Location/$lat[14],$lon[14]">Get Directions</a>'});
                              kmarker14.addListener("click", function() {
                              ktit.close(); 
                             ktit1.close(); 
                             ktit2.close(); 
                             ktit3.close(); 
                             ktit4.close(); 
                             ktit5.close(); 
                             ktit6.close(); 
                             ktit7.close(); 
                             ktit8.close(); 
                             ktit9.close(); 
                             ktit10.close(); 
                             ktit11.close(); 
                             ktit12.close(); 
                             ktit13.close(); 
                                  ktit14.open(map, kmarker1);
                                      });
                                kmarker14.setMap(map);
                    };
                    //------------------------------- new cords
                    if("$lat[15]"){
                              var k15 = new google.maps.LatLng("$lat[15]","$lon[15]");
                              var kmarker15 = new google.maps.Marker({ position:k15,icon: image});
                              var ktit15 = new google.maps.InfoWindow({content: '<h3>$tit[15]</h3><h5 style="$showdescs" >$des[15]</h5><a style="$showdirections" target="_blank" href="https://www.google.com/maps/dir/Current+Location/$lat[15],$lon[15]">Get Directions</a>'});
                              kmarker15.addListener("click", function() {
                              ktit.close(); 
                             ktit1.close(); 
                             ktit2.close(); 
                             ktit3.close(); 
                             ktit4.close(); 
                             ktit5.close(); 
                             ktit6.close(); 
                             ktit7.close(); 
                             ktit8.close(); 
                             ktit9.close(); 
                             ktit10.close(); 
                             ktit11.close(); 
                             ktit12.close(); 
                             ktit13.close(); 
                             ktit14.close(); 
                                  ktit15.open(map, kmarker1);
                                      });
                                kmarker15.setMap(map);
                    };
                     //------------------------------- new cords
                    if("$lat[16]"){
                              var k16 = new google.maps.LatLng("$lat[16]","$lon[16]");
                              var kmarker16 = new google.maps.Marker({ position:k16,icon: image});
                              var ktit16 = new google.maps.InfoWindow({content: '<h3>$tit[16]</h3><h5 style="$showdescs" >$des[16]</h5><a style="$showdirections" target="_blank" href="https://www.google.com/maps/dir/Current+Location/$lat[16],$lon[16]">Get Directions</a>'});
                              kmarker16.addListener("click", function() {
                              ktit.close(); 
                             ktit1.close(); 
                             ktit2.close(); 
                             ktit3.close(); 
                             ktit4.close(); 
                             ktit5.close(); 
                             ktit6.close(); 
                             ktit7.close(); 
                             ktit8.close(); 
                             ktit9.close(); 
                             ktit10.close(); 
                             ktit11.close(); 
                             ktit12.close(); 
                             ktit13.close(); 
                             ktit14.close(); 
                             ktit15.close(); 
                                  ktit16.open(map, kmarker1);
                                      });
                                kmarker16.setMap(map);
                    
                    };
                    //------------------------------- new cords
                    if("$lat[17]"){
                              var k17 = new google.maps.LatLng("$lat[17]","$lon[17]");
                              var kmarker17 = new google.maps.Marker({ position:k17,icon: image});
                              var ktit17 = new google.maps.InfoWindow({content: '<h3>$tit[17]</h3><h5 style="$showdescs" >$des[17]</h5><a style="$showdirections" target="_blank" href="https://www.google.com/maps/dir/Current+Location/$lat[17],$lon[17]">Get Directions</a>'});
                              kmarker17.addListener("click", function() {
                              ktit.close(); 
                             ktit1.close(); 
                             ktit2.close(); 
                             ktit3.close(); 
                             ktit4.close(); 
                             ktit5.close(); 
                             ktit6.close(); 
                             ktit7.close(); 
                             ktit8.close(); 
                             ktit9.close(); 
                             ktit10.close(); 
                             ktit11.close(); 
                             ktit12.close(); 
                             ktit13.close(); 
                             ktit14.close(); 
                             ktit15.close(); 
                             ktit16.close(); 
                                  ktit17.open(map, kmarker1);
                                      });
                                kmarker17.setMap(map);
                    
                    };
                     //------------------------------- new cords
                    if("$lat[18]"){
                              var k18 = new google.maps.LatLng("$lat[18]","$lon[18]");
                              var kmarker18 = new google.maps.Marker({ position:k17,icon: image});
                              var ktit18 = new google.maps.InfoWindow({content: '<h3>$tit[18]</h3><h5 style="$showdescs" >$des[18]</h5><a style="$showdirections" target="_blank" href="https://www.google.com/maps/dir/Current+Location/$lat[18],$lon[18]">Get Directions</a>'});
                              kmarker18.addListener("click", function() {
                              ktit.close(); 
                             ktit1.close(); 
                             ktit2.close(); 
                             ktit3.close(); 
                             ktit4.close(); 
                             ktit5.close(); 
                             ktit6.close(); 
                             ktit7.close(); 
                             ktit8.close(); 
                             ktit9.close(); 
                             ktit10.close(); 
                             ktit11.close(); 
                             ktit12.close(); 
                             ktit13.close(); 
                             ktit14.close(); 
                             ktit15.close(); 
                             ktit16.close(); 
                             ktit17.close(); 
                                  ktit18.open(map, kmarker1);
                                      });
                                kmarker18.setMap(map);
                    
                    
                    };
                    //------------------------------- new cords
                    if("$lat[19]"){
                              var k19 = new google.maps.LatLng("$lat[19]","$lon[19]");
                              var kmarker19 = new google.maps.Marker({ position:k19,icon: image});
                              var ktit19 = new google.maps.InfoWindow({content: '<h3>$tit[19]</h3><h5 style="$showdescs" >$des[19]</h5><a style="$showdirections" target="_blank" href="https://www.google.com/maps/dir/Current+Location/$lat[19],$lon[19]">Get Directions</a>'});
                              kmarker19.addListener("click", function() {
                              ktit.close(); 
                             ktit1.close(); 
                             ktit2.close(); 
                             ktit3.close(); 
                             ktit4.close(); 
                             ktit5.close(); 
                             ktit6.close(); 
                             ktit7.close(); 
                             ktit8.close(); 
                             ktit9.close(); 
                             ktit10.close(); 
                             ktit11.close(); 
                             ktit12.close(); 
                             ktit13.close(); 
                             ktit14.close(); 
                             ktit15.close(); 
                             ktit16.close(); 
                             ktit17.close(); 
                             ktit18.close(); 
                                  ktit19.open(map, kmarker1);
                                      });
                                kmarker19.setMap(map);
                    };
                    //------------------------------- new cords
                    if("$lat[20]"){
                              var k20= new google.maps.LatLng("$lat[20]","$lon[20]");
                              var kmarker20 = new google.maps.Marker({ position:k20,icon: image});
                              var ktit20 = new google.maps.InfoWindow({content: '<h3>$tit[20]</h3><h5 style="$showdescs" >$des[20]</h5><a style="$showdirections" target="_blank" href="https://www.google.com/maps/dir/Current+Location/$lat[20],$lon[20]">Get Directions</a>'});
                              kmarker20.addListener("click", function() {
                              ktit.close(); 
                             ktit1.close(); 
                             ktit2.close(); 
                             ktit3.close(); 
                             ktit4.close(); 
                             ktit5.close(); 
                             ktit6.close(); 
                             ktit7.close(); 
                             ktit8.close(); 
                             ktit9.close(); 
                             ktit10.close(); 
                             ktit11.close(); 
                             ktit12.close(); 
                             ktit13.close(); 
                             ktit14.close(); 
                             ktit15.close(); 
                             ktit16.close(); 
                             ktit17.close(); 
                             ktit18.close(); 
                             ktit19.close(); 
                                  ktit20.open(map, kmarker1);
                                      });
                                kmarker20.setMap(map);
                    
                    };
                     //------------------------------- new cords
                    if("$lat[21]"){
                              var k21= new google.maps.LatLng("$lat[21]","$lon[21]");
                              var kmarker21 = new google.maps.Marker({ position:k21,icon: image});
                              var ktit21 = new google.maps.InfoWindow({content: '<h3>$tit[21]</h3><h5 style="$showdescs" >$des[21]</h5><a style="$showdirections" target="_blank" href="https://www.google.com/maps/dir/Current+Location/$lat[21],$lon[21]">Get Directions</a>'});
                              kmarker21.addListener("click", function() {
                              ktit.close(); 
                             ktit1.close(); 
                             ktit2.close(); 
                             ktit3.close(); 
                             ktit4.close(); 
                             ktit5.close(); 
                             ktit6.close(); 
                             ktit7.close(); 
                             ktit8.close(); 
                             ktit9.close(); 
                             ktit10.close(); 
                             ktit11.close(); 
                             ktit12.close(); 
                             ktit13.close(); 
                             ktit14.close(); 
                             ktit15.close(); 
                             ktit16.close(); 
                             ktit17.close(); 
                             ktit18.close(); 
                             ktit19.close(); 
                             ktit20.close(); 
                                  ktit21.open(map, kmarker1);
                                      });
                                kmarker21.setMap(map);
                    };
                    //------------------------------- new cords
                    if("$lat[22]"){
                              var k22= new google.maps.LatLng("$lat[22]","$lon[22]");
                              var kmarker22 = new google.maps.Marker({ position:k22,icon: image});
                              var ktit22 = new google.maps.InfoWindow({content: '<h3>$tit[22]</h3><h5 style="$showdescs" >$des[22]</h5><a style="$showdirections" target="_blank" href="https://www.google.com/maps/dir/Current+Location/$lat[22],$lon[22]">Get Directions</a>'});
                              kmarker22.addListener("click", function() {
                              ktit.close(); 
                             ktit1.close(); 
                             ktit2.close(); 
                             ktit3.close(); 
                             ktit4.close(); 
                             ktit5.close(); 
                             ktit6.close(); 
                             ktit7.close(); 
                             ktit8.close(); 
                             ktit9.close(); 
                             ktit10.close(); 
                             ktit11.close(); 
                             ktit12.close(); 
                             ktit13.close(); 
                             ktit14.close(); 
                             ktit15.close(); 
                             ktit16.close(); 
                             ktit17.close(); 
                             ktit18.close(); 
                             ktit19.close(); 
                             ktit20.close(); 
                             ktit21.close(); 
                                  ktit22.open(map, kmarker1);
                                      });
                                kmarker22.setMap(map);
                    
                    };
                     //------------------------------- new cords
                    if("$lat[23]"){
                              var k23= new google.maps.LatLng("$lat[23]","$lon[23]");
                              var kmarker23 = new google.maps.Marker({ position:k23,icon: image});
                              var ktit23 = new google.maps.InfoWindow({content: '<h3>$tit[23]</h3><h5 style="$showdescs" >$des[23]</h5><a style="$showdirections" target="_blank" href="https://www.google.com/maps/dir/Current+Location/$lat[23],$lon[23]">Get Directions</a>'});
                              kmarker23.addListener("click", function() {
                              ktit.close(); 
                             ktit1.close(); 
                             ktit2.close(); 
                             ktit3.close(); 
                             ktit4.close(); 
                             ktit5.close(); 
                             ktit6.close(); 
                             ktit7.close(); 
                             ktit8.close(); 
                             ktit9.close(); 
                             ktit10.close(); 
                             ktit11.close(); 
                             ktit12.close(); 
                             ktit13.close(); 
                             ktit14.close(); 
                             ktit15.close(); 
                             ktit16.close(); 
                             ktit17.close(); 
                             ktit18.close(); 
                             ktit19.close(); 
                             ktit20.close(); 
                             ktit21.close(); 
                             ktit22.close(); 
                                  ktit23.open(map, kmarker1);
                                      });
                                kmarker23.setMap(map);
                    
                };    
                    //------------------------------- new cords
                    if("$lat[24]"){
                              var k24= new google.maps.LatLng("$lat[24]","$lon[24]");
                              var kmarker24 = new google.maps.Marker({ position:k24,icon: image});
                              var ktit24 = new google.maps.InfoWindow({content: '<h3>$tit[24]</h3><h5 style="$showdescs" >$des[24]</h5><a style="$showdirections" target="_blank" href="https://www.google.com/maps/dir/Current+Location/$lat[24],$lon[24]">Get Directions</a>'});
                              kmarker24.addListener("click", function() {
                              ktit.close(); 
                             ktit1.close(); 
                             ktit2.close(); 
                             ktit3.close(); 
                             ktit4.close(); 
                             ktit5.close(); 
                             ktit6.close(); 
                             ktit7.close(); 
                             ktit8.close(); 
                             ktit9.close(); 
                             ktit10.close(); 
                             ktit11.close(); 
                             ktit12.close(); 
                             ktit13.close(); 
                             ktit14.close(); 
                             ktit15.close(); 
                             ktit16.close(); 
                             ktit17.close(); 
                             ktit18.close(); 
                             ktit19.close(); 
                             ktit20.close(); 
                             ktit21.close(); 
                             ktit22.close(); 
                             ktit23.close(); 
                                  ktit24.open(map, kmarker1);
                                      });
                                kmarker24.setMap(map);
                    };
                    //------------------------------- new cords
                    if("$lat[25]"){
                              var k25= new google.maps.LatLng("$lat[25]","$lon[25]");
                              var kmarker25 = new google.maps.Marker({ position:k25,icon: image});
                              var ktit25 = new google.maps.InfoWindow({content: '<h3>$tit[25]</h3><h5 style="$showdescs" >$des[25]</h5><a style="$showdirections" target="_blank" href="https://www.google.com/maps/dir/Current+Location/$lat[25],$lon[25]">Get Directions</a>'});
                              kmarker25.addListener("click", function() {
                              ktit.close(); 
                             ktit1.close(); 
                             ktit2.close(); 
                             ktit3.close(); 
                             ktit4.close(); 
                             ktit5.close(); 
                             ktit6.close(); 
                             ktit7.close(); 
                             ktit8.close(); 
                             ktit9.close(); 
                             ktit10.close(); 
                             ktit11.close(); 
                             ktit12.close(); 
                             ktit13.close(); 
                             ktit14.close(); 
                             ktit15.close(); 
                             ktit16.close(); 
                             ktit17.close(); 
                             ktit18.close(); 
                             ktit19.close(); 
                             ktit20.close(); 
                             ktit21.close(); 
                             ktit22.close(); 
                             ktit23.close(); 
                             ktit24.close(); 
                                  ktit25.open(map, kmarker1);
                                      });
                                kmarker25.setMap(map);
                 };
                            //------------------------------- new cords
                    if("$lat[26]"){
                              var k26= new google.maps.LatLng("$lat[26]","$lon[26]");
                              var kmarker26 = new google.maps.Marker({ position:k26,icon: image});
                              var ktit26 = new google.maps.InfoWindow({content: '<h3>$tit[26]</h3><h5 style="$showdescs" >$des[26]</h5><a style="$showdirections" target="_blank" href="https://www.google.com/maps/dir/Current+Location/$lat[26],$lon[26]">Get Directions</a>'});
                              kmarker26.addListener("click", function() {
                              ktit.close(); 
                             ktit1.close(); 
                             ktit2.close(); 
                             ktit3.close(); 
                             ktit4.close(); 
                             ktit5.close(); 
                             ktit6.close(); 
                             ktit7.close(); 
                             ktit8.close(); 
                             ktit9.close(); 
                             ktit10.close(); 
                             ktit11.close(); 
                             ktit12.close(); 
                             ktit13.close(); 
                             ktit14.close(); 
                             ktit15.close(); 
                             ktit16.close(); 
                             ktit17.close(); 
                             ktit18.close(); 
                             ktit19.close(); 
                             ktit20.close(); 
                             ktit21.close(); 
                             ktit22.close(); 
                             ktit23.close(); 
                             ktit24.close(); 
                             ktit25.close(); 
                                  ktit26.open(map, kmarker1);
                                      });
                                kmarker26.setMap(map);

};
 //------------------------------- new cords
                    if("$lat[27]"){
                              var k27= new google.maps.LatLng("$lat[27]","$lon[27]");
                              var kmarker27 = new google.maps.Marker({ position:k27,icon: image});
                              var ktit27 = new google.maps.InfoWindow({content: '<h3>$tit[27]</h3><h5 style="$showdescs" >$des[27]</h5><a style="$showdirections" target="_blank" href="https://www.google.com/maps/dir/Current+Location/$lat[27],$lon[27]">Get Directions</a>'});
                              kmarker27.addListener("click", function() {
                              ktit.close(); 
                             ktit1.close(); 
                             ktit2.close(); 
                             ktit3.close(); 
                             ktit4.close(); 
                             ktit5.close(); 
                             ktit6.close(); 
                             ktit7.close(); 
                             ktit8.close(); 
                             ktit9.close(); 
                             ktit10.close(); 
                             ktit11.close(); 
                             ktit12.close(); 
                             ktit13.close(); 
                             ktit14.close(); 
                             ktit15.close(); 
                             ktit16.close(); 
                             ktit17.close(); 
                             ktit18.close(); 
                             ktit19.close(); 
                             ktit20.close(); 
                             ktit21.close(); 
                             ktit22.close(); 
                             ktit23.close(); 
                             ktit24.close(); 
                             ktit25.close(); 
                             ktit26.close(); 
                                  ktit27.open(map, kmarker1);
                                      });
                                kmarker27.setMap(map);
};
//------------------------------- new cords
                    if("$lat[28]"){
                              var k28= new google.maps.LatLng("$lat[28]","$lon[28]");
                              var kmarker28 = new google.maps.Marker({ position:k28,icon: image});
                              var ktit28 = new google.maps.InfoWindow({content: '<h3>$tit[28]</h3><h5 style="$showdescs" >$des[28]</h5><a style="$showdirections" target="_blank" href="https://www.google.com/maps/dir/Current+Location/$lat[28],$lon[28]">Get Directions</a>'});
                              kmarker28.addListener("click", function() {
                              ktit.close(); 
                             ktit1.close(); 
                             ktit2.close(); 
                             ktit3.close(); 
                             ktit4.close(); 
                             ktit5.close(); 
                             ktit6.close(); 
                             ktit7.close(); 
                             ktit8.close(); 
                             ktit9.close(); 
                             ktit10.close(); 
                             ktit11.close(); 
                             ktit12.close(); 
                             ktit13.close(); 
                             ktit14.close(); 
                             ktit15.close(); 
                             ktit16.close(); 
                             ktit17.close(); 
                             ktit18.close(); 
                             ktit19.close(); 
                             ktit20.close(); 
                             ktit21.close(); 
                             ktit22.close(); 
                             ktit23.close(); 
                             ktit24.close(); 
                             ktit25.close(); 
                             ktit26.close(); 
                             ktit27.close(); 
                                  ktit28.open(map, kmarker1);
                                      });
                                kmarker28.setMap(map);
};

//------------------------------- new cords
                    if("$lat[29]"){
                              var k29= new google.maps.LatLng("$lat[29]","$lon[29]");
                              var kmarker29 = new google.maps.Marker({ position:k29,icon: image});
                              var ktit29 = new google.maps.InfoWindow({content: '<h3>$tit[29]</h3><h5 style="$showdescs" >$des[29]</h5><a style="$showdirections" target="_blank" href="https://www.google.com/maps/dir/Current+Location/$lat[29],$lon[29]">Get Directions</a>'});
                              kmarker29.addListener("click", function() {
                              ktit.close(); 
                             ktit1.close(); 
                             ktit2.close(); 
                             ktit3.close(); 
                             ktit4.close(); 
                             ktit5.close(); 
                             ktit6.close(); 
                             ktit7.close(); 
                             ktit8.close(); 
                             ktit9.close(); 
                             ktit10.close(); 
                             ktit11.close(); 
                             ktit12.close(); 
                             ktit13.close(); 
                             ktit14.close(); 
                             ktit15.close(); 
                             ktit16.close(); 
                             ktit17.close(); 
                             ktit18.close(); 
                             ktit19.close(); 
                             ktit20.close(); 
                             ktit21.close(); 
                             ktit22.close(); 
                             ktit23.close(); 
                             ktit24.close(); 
                             ktit25.close(); 
                             ktit26.close(); 
                             ktit27.close(); 
                             ktit28.close(); 
                                  ktit29.open(map, kmarker1);
                                      });
                                kmarker29.setMap(map);
};


//------------------------------- new cords
                    if("$lat[30]"){
                              var k30= new google.maps.LatLng("$lat[30]","$lon[30]");
                              var kmarker30 = new google.maps.Marker({ position:k30,icon: image});
                              var ktit30 = new google.maps.InfoWindow({content: '<h3>$tit[30]</h3><h5 style="$showdescs" >$des[30]</h5><a style="$showdirections" target="_blank" href="https://www.google.com/maps/dir/Current+Location/$lat[30],$lon[30]">Get Directions</a>'});
                              kmarker30.addListener("click", function() {
                              ktit.close(); 
                             ktit1.close(); 
                             ktit2.close(); 
                             ktit3.close(); 
                             ktit4.close(); 
                             ktit5.close(); 
                             ktit6.close(); 
                             ktit7.close(); 
                             ktit8.close(); 
                             ktit9.close(); 
                             ktit10.close(); 
                             ktit11.close(); 
                             ktit12.close(); 
                             ktit13.close(); 
                             ktit14.close(); 
                             ktit15.close(); 
                             ktit16.close(); 
                             ktit17.close(); 
                             ktit18.close(); 
                             ktit19.close(); 
                             ktit20.close(); 
                             ktit21.close(); 
                             ktit22.close(); 
                             ktit23.close(); 
                             ktit24.close(); 
                             ktit25.close(); 
                             ktit26.close(); 
                             ktit27.close(); 
                             ktit28.close(); 
                             ktit29.close(); 
                                  ktit30.open(map, kmarker1);
                                      });
                                kmarker30.setMap(map);
};


















   
                    
                    
                    
                    
                     google.maps.event.addListener(map, "click", function (e) { 
                    // k = new google.maps.LatLng(e.latLng.lat().toFixed(6), e.latLng.lng().toFixed(6)) ;
                   // map.panTo(k); 
                    //map.setZoom(15);
                    //kmarker.setPosition(k);
                    console.log(e.latLng.lat(), e.latLng.lng());
            }); 
              //------------------klikze---------------------------
            }
            google.maps.event.addDomListener(window, 'load', initialize);

__JS__;

                $doc->addScriptDeclaration($js);
            }
            ?>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="top_contacts">
                    <div class="contact_infos">

                        <?php
                        $image = $this->contact->image;
                        $show_image = $this->params->get('show_image', '');
                        if (!empty($image) && $show_image) {
                            $image = GoodWebSiteHelper::getImageInSize('contact', $image);
                            ?>		
                            <div class="contanct_image">

                                <?php if (!empty($this->contact->map_link)) { ?>
                                    <a href="<?php echo $this->contact->map_link; ?>" target="_blank">
                                    <?php } ?>

                                    <img src="<?php echo $image; ?>" alt="map"  />

                                    <?php if (!empty($this->contact->map_link)) { ?>
                                    </a>
                                <?php } ?>

                            </div>

                            <?php
                        }
                        ?>






                        <?php
                        if ($this->contact->address && $this->params->get('show_address')) {
                            ?>
                            <div class="contact_address">
                                <div class="contact_text"><div class="text_contact"><?php echo JText::_('STREET'); ?>:</div></div>
                                <?php echo $this->contact->address; ?>
                            </div>
                            <?php
                        }

                        if ($this->contact->telephone && $this->params->get('show_telephone')) {
                            ?>
                            <div class="contact_telephone" >
                                <div class="contact_text"><div class="text_contact"><?php echo JText::_('tel'); ?>:</div></div>
                                <?php echo $this->contact->telephone; ?>
                            </div>
                            <?php
                        }

                        if ($this->contact->mobile && $this->params->get('show_mobile')) {
                            ?>
                            <div class="contact_mobile" >
                                <div class="contact_text"><div class="text_contact"><?php echo JText::_('mobile'); ?>:</div></div>
                                <?php echo $this->contact->mobile; ?>
                            </div>
                            <?php
                        }

                        if ($this->contact->fax && $this->params->get('show_fax')) {
                            ?>
                            <div class="contact_fax" >
                                <div class="contact_text"><div class="text_contact"><?php echo JText::_('fax'); ?>:</div></div>
                                <?php echo $this->contact->fax; ?>
                            </div>
                            <?php
                        }

                        if ($this->contact->email_contact && $this->params->get('email_contact')) {
                            ?>
                            <div class="contact_email_to" >
                                <div class="contact_text"><div class="text_contact"><?php echo JText::_('EMAIL'); ?>:</div></div>
                                <?php echo $this->contact->email_contact; ?>
                            </div>
                            <?php
                        }

                        if ($this->contact->webpage && $this->params->get('show_webpage')) {
                            ?>
                            <div class="contact_webpage" >
                                <div class="contact_text"><div class="text_contact"><?php echo JText::_('web'); ?>:</div></div>
                                <?php echo $this->contact->webpage; ?>
                            </div>
                            <?php
                        }
                        if ($this->contact->moreinformation && $this->params->get('show_moreinformation')) {
                            ?>
                            <div class="contact_moreinformation" >

                                <?php echo $this->contact->moreinformation; ?>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>


                <?php
                /*  if ( $this->params->get ( 'show_email_form' ) && ($this->contact->email_to ) )
                  { */
                $script = 'function validateForm( frm ) {
			var valid = document.formvalidator.isValid(frm);
			if (valid == false) {
				// do field validation
				if (frm.email.invalid) {
					alert( "' . JText::_('Please enter a valid e-mail address.', true) . '" );
				} else if (frm.text.invalid) {
					alert( "' . JText::_('CONTACT_FORM_NC', true) . '" );
				}
				return false;
			} else {
				frm.submit();
			}
		}
		';
                $document = JFactory::getDocument();
                $document->addScriptDeclaration($script);

                if (isset($this->error)) {
                    ?>
                    <div>
                        <div><?php echo $this->error; ?></div>
                    </div>
                    <?php
                }
                ?>

                <form action="<?php echo JRoute::_('index.php'); ?>" method="post" name="emailForm" id="emailForm" class="form-validate">
                    <div class="contact_email<?php echo $this->escape($this->params->get('pageclass_sfx')); ?>">
                        <div class="contact_form_left">

                            <div class="contact_form_row">
                                <label for="contact_name">
                                    <?php echo JText::_('Enter your name'); ?><span class="must_have">*</span>:
                                </label>
                                <input type="text" name="name" id="contact_name" size="30" class="inputbox" value="" placeholder="<?php echo JText::_('Enter your name'); ?>"/>
                            </div>
                            <div class="contact_form_row">
                                <label id="contact_emailmsg" for="contact_email">
                                    <?php echo JText::_('Email address'); ?><span class="must_have">*</span>:
                                </label>
                                <input type="text" id="contact_email" name="email" size="30" value="" class="inputbox required validate-email" maxlength="100" placeholder="<?php echo JText::_('Email address'); ?>" />
                            </div>
                            <div class="contact_form_row">
                                <label for="contact_subject">
                                    <?php echo JText::_('Message subject'); ?>:
                                </label>
                                <input type="text" name="subject" id="contact_subject" size="30" class="inputbox" value="" placeholder="<?php echo JText::_('Message subject'); ?>"/>
                            </div>
                            <div class="contact_form_row"><!--telephone-->
                                <label for="contact_telephone">
                                    <?php echo JText::_('Telephone'); ?><span class="must_have">*</span>:
                                </label>
                                <input type="text" name="telephone" id="contact_telephone" size="30" class="inputbox" value="" placeholder="<?php echo JText::_('Telephone'); ?>"/>
                            </div>
                        </div>
                        <div class="contact_form_right">
                            <div class="contact_form_row">  <label id="contact_textmsg" for="contact_text">
                                    <?php echo JText::_('Enter your message'); ?><span class="must_have">*</span>:
                                </label>
                                <textarea cols="50" rows="10" name="text" id="contact_text" class="inputbox required"placeholder="<?php echo JText::_('Enter your message'); ?>"></textarea>
                            </div>
                        </div>  
                        <div class="clr"></div>

                        <!--CAPTCHA -->
                        <div class="item_form">
                            <div class="item_label">
                                <div class="item_label_captcha_in">
                                    <label id="captcha" for="regcaptcha" class="param_lbl">
                                        <?php echo JText::_('CAPTCHA'); ?><span class="must_have">*</span>:
                                    </label>
                                </div>
                            </div>
                            <div class="item_box">
                                <div class="reg_item">
                                    <div class="reg_chk_cptcha">
                                        <?php echo $this->captcha->render(); ?>
                                        <div class="cls"></div>
                                    </div>
                                    <div class="capcha_input">
                                        <input type="text" name="captcha" id="regcaptcha" size="40" value="" class="inputbox required captchainput inputbox_reg" maxlength="50" />
                                    </div>
                                    <div class="cls"></div>
                                </div>
                            </div>
                            <div class="cls"></div>
                        </div>       
                        <div class="item_butt">
                            <div class="item_box_button">
                                <button class="button validate" type="submit" ><?php echo JText::_('send'); ?></button>
                            </div>
                            <div class="cls"></div>
                        </div>
                    </div>
                    <input type="hidden" name="option" value="contact" />
                    <input type="hidden" name="view" value="contact" />
                    <input type="hidden" name="task" value="submit" />
                    <?php echo JHTML::_('form.token'); ?>
                </form>
                <?php
                /* } */
                ?>
            </div>
        </div>

    </div>
</div>

