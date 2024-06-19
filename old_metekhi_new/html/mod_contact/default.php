<?php
defined('_JEXEC') or die('Restricted access');



if ($data) {
    $type = (bool) $params->get('show_type');
    ?>
    <div class="contact_info<?php echo $type ? '_icon' : ''; ?>">
        <?php
        if ($data->image && $params->get('show_image', '')) {
            $image = GoodWebSiteHelper::getImageInSize('mod_contact', $data->image);

            $Itemid = wsHelper::getItemid('contact', 'contact');
            $link = JRoute::_('index.php?option=contact&view=contact&Itemid=' . $Itemid, true);
            ?>

            <div class="contanct_img">
                <a href="<?php echo $link; ?>">
                    <img src="<?php echo $image; ?>" alt=""  />  
                </a>
            </div>

            <?php
        }
        ?>

        <?php
        if ($params->get('show_map', '') == 1) {
            $showdirections = $data_map->map->showdirections;
            $choosemapstyle = $data_map->map->choosemapstyle;
            $showdescs = $data_map->map->showdescs;
            if ($showdirections == 1) {
                $showdirections = "display:none";
            } else {
                $showdirections = "display:block";
            }
            if ($showdescs == 1) {
                $showdescs = "display:none";
            } else {
                $showdescs = "display:block;font-size:12px;margin:5px 0 0;";
            }
            //$zoom = (int)$data_map->map->zoom;
            $latitude[0] = $data_map->map->latitude;
            $longitude[0] = $data_map->map->longitude;
            $tit[0] = $data_map->map->title;
            $des[0] = $data_map->map->desc;
            $latitude[1] = $data_map->map->latitude1;
            $longitude[1] = $data_map->map->longitude1;
            $tit[1] = $data_map->map->title1;
            $des[1] = $data_map->map->desc1;
            $latitude[2] = $data_map->map->latitude2;
            $longitude[2] = $data_map->map->longitude2;
            $tit[2] = $data_map->map->title2;
            $des[2] = $data_map->map->desc2;
            $latitude[3] = $data_map->map->latitude3;
            $longitude[3] = $data_map->map->longitude3;
            $tit[3] = $data_map->map->title3;
            $des[3] = $data_map->map->desc3;
            $latitude[4] = $data_map->map->latitude4;
            $longitude[4] = $data_map->map->longitude4;
            $tit[4] = $data_map->map->title4;
            $des[4] = $data_map->map->desc4;
            $latitude[5] = $data_map->map->latitude5;
            $longitude[5] = $data_map->map->longitude5;
            $tit[5] = $data_map->map->title5;
            $des[5] = $data_map->map->desc5;
            $latitude[6] = $data_map->map->latitude6;
            $longitude[6] = $data_map->map->longitude6;
            $tit[6] = $data_map->map->title6;
            $des[6] = $data_map->map->desc6;
            $latitude[7] = $data_map->map->latitude7;
            $longitude[7] = $data_map->map->longitude7;
            $tit[7] = $data_map->map->title7;
            $des[7] = $data_map->map->desc7;
            $latitude[8] = $data_map->map->latitude8;
            $longitude[8] = $data_map->map->longitude8;
            $tit[8] = $data_map->map->title8;
            $des[8] = $data_map->map->desc8;
            $latitude[9] = $data_map->map->latitude9;
            $longitude[9] = $data_map->map->longitude9;
            $tit[9] = $data_map->map->title9;
            $des[9] = $data_map->map->desc9;
            $latitude[10] = $data_map->map->latitude10;
            $longitude[10] = $data_map->map->longitude10;
            $tit[10] = $data_map->map->title10;
            $des[10] = $data_map->map->desc10;
            $latitude[11] = $data_map->map->latitude11;
            $longitude[11] = $data_map->map->longitude11;
            $tit[11] = $data_map->map->title11;
            $des[11] = $data_map->map->desc11;
            $latitude[12] = $data_map->map->latitude12;
            $longitude[12] = $data_map->map->longitude12;
            $tit[12] = $data_map->map->title12;
            $des[12] = $data_map->map->desc12;
            $latitude[13] = $data_map->map->latitude13;
            $longitude[13] = $data_map->map->longitude13;
            $tit[13] = $data_map->map->title13;
            $des[13] = $data_map->map->desc13;
            $latitude[14] = $data_map->map->latitude14;
            $longitude[14] = $data_map->map->longitude14;
            $tit[14] = $data_map->map->title14;
            $des[14] = $data_map->map->desc14;
            $latitude[15] = $data_map->map->latitude15;
            $longitude[15] = $data_map->map->longitude15;
            $tit[15] = $data_map->map->title15;
            $des[15] = $data_map->map->desc15;
            $latitude[16] = $data_map->map->latitude16;
            $longitude[16] = $data_map->map->longitude16;
            $tit[16] = $data_map->map->title16;
            $des[16] = $data_map->map->desc16;
            $latitude[17] = $data_map->map->latitude17;
            $longitude[17] = $data_map->map->longitude17;
            $tit[17] = $data_map->map->title17;
            $des[17] = $data_map->map->desc17;
            $latitude[18] = $data_map->map->latitude18;
            $longitude[18] = $data_map->map->longitude18;
            $tit[18] = $data_map->map->title18;
            $des[18] = $data_map->map->desc18;
            $latitude[19] = $data_map->map->latitude19;
            $longitude[19] = $data_map->map->longitude19;
            $tit[19] = $data_map->map->title19;
            $des[19] = $data_map->map->desc19;
            $latitude[20] = $data_map->map->latitude20;
            $longitude[20] = $data_map->map->longitude20;
            $tit[20] = $data_map->map->title20;
            $des[20] = $data_map->map->desc20;
            $latitude[21] = $data_map->map->latitude21;
            $longitude[21] = $data_map->map->longitude21;
            $tit[21] = $data_map->map->title21;
            $des[21] = $data_map->map->desc21;
            $latitude[22] = $data_map->map->latitude22;
            $longitude[22] = $data_map->map->longitude22;
            $tit[22] = $data_map->map->title22;
            $des[22] = $data_map->map->desc22;
            $latitude[23] = $data_map->map->latitude23;
            $longitude[23] = $data_map->map->longitude23;
            $tit[23] = $data_map->map->title23;
            $des[23] = $data_map->map->desc23;
            $latitude[24] = $data_map->map->latitude24;
            $longitude[24] = $data_map->map->longitude24;
            $tit[24] = $data_map->map->title24;
            $des[24] = $data_map->map->desc24;
            $latitude[25] = $data_map->map->latitude25;
            $longitude[25] = $data_map->map->longitude25;
            $tit[25] = $data_map->map->title25;
            $des[25] = $data_map->map->desc25;
            $latitude[26] = $data_map->map->latitude26;
            $longitude[26] = $data_map->map->longitude26;
            $tit[26] = $data_map->map->title26;
            $des[26] = $data_map->map->desc26;
            $latitude[27] = $data_map->map->latitude27;
            $longitude[27] = $data_map->map->longitude27;
            $tit[27] = $data_map->map->title27;
            $des[27] = $data_map->map->desc27;
            $latitude[28] = $data_map->map->latitude28;
            $longitude[28] = $data_map->map->longitude28;
            $tit[28] = $data_map->map->title28;
            $des[28] = $data_map->map->desc28;
            $latitude[29] = $data_map->map->latitude29;
            $longitude[29] = $data_map->map->longitude29;
            $tit[29] = $data_map->map->title29;
            $des[29] = $data_map->map->desc29;


            $map_zoom = $params->get('map_zoom', '');
            $map_width = $params->get('map_width', '');
            $map_height = $params->get('map_height', '');
            ?>
            <div class="google_map">
                <?php
                echo'<div style="width:' . $map_width . '; height:' . $map_height . ';" id="map-canvas"></div>';
                ?>
            </div>
            <?php
            $doc = JFactory::getDocument();


            $mimg = JURI::base() . 'modules' . DS . 'mod_contact' . DS . 'assets' . DS . 'location_map_icon.png';
            $js = <<<__JS__

            var saqartvelo = new google.maps.LatLng("$latitude[0]","$longitude[0]"); 


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
                     scrollwheel: false,
                zoom: $map_zoom,
                center: saqartvelo,
                     mapTypeControlOptions: {
                   mapTypeIds: [google.maps.MapTypeId.SATELLITE,google.maps.MapTypeId.HYBRID,google.maps.MapTypeId.TERRAIN,google.maps.MapTypeId.ROADMAP,"map_style"]
                }
              };

              map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
                              //
                              map.mapTypes.set('map_style', styledMap);
                          
                    map.setMapTypeId($choosemapstyle);
                              //
                    
                              var k = new google.maps.LatLng("$latitude[0]","$longitude[0]");
                              var kmarker = new google.maps.Marker({position:k,icon: image});
                    var ktit = new google.maps.InfoWindow({content: '<h3>$tit[0]</h3><h5 style="$showdescs" >$des[0]</h5><a style="$showdirections" target="_blank" href="https://www.google.com/maps/dir/Current+Location/$lat[0],$lon[0]">Get Directions</a>'});
                              kmarker.addListener("click", function() {
                                  ktit1.close(); 
                             ktit2.close(); 
                             ktit3.close(); 
                             ktit4.close(); 
                            ktit.open(map, kmarker);
                                });
                              kmarker.setMap(map);
                              //--------- cords
                              var k1 = new google.maps.LatLng("$latitude[1]","$longitude[1]");
                              var kmarker1 = new google.maps.Marker({position:k1,icon: image});
                    var ktit1 = new google.maps.InfoWindow({content: '<h3>$tit[1]</h3><h5 style="$showdescs" >$des[1]</h5><a style="$showdirections" target="_blank" href="https://www.google.com/maps/dir/Current+Location/$lat[1],$lon[1]">Get Directions</a>'});
                              kmarker1.addListener("click", function() {
                             ktit.close(); 
                             ktit2.close(); 
                             ktit3.close(); 
                             ktit4.close(); 
                                  ktit1.open(map, kmarker1);});
                              kmarker1.setMap(map);
                              //--------- cords
                              var k2 = new google.maps.LatLng("$latitude[2]","$longitude[2]");
                              var kmarker2 = new google.maps.Marker({position:k2,icon: image});
                     var ktit2 = new google.maps.InfoWindow({content: '<h3>$tit[2]<h5 style="$showdescs" >$des[2]</h5><a style="$showdirections" target="_blank" href="https://www.google.com/maps/dir/Current+Location/$lat[2],$lon[2]">Get Directions</a></h3>'});
                              kmarker2.addListener("click", function() {
                             ktit1.close(); 
                             ktit.close(); 
                             ktit3.close(); 
                             ktit4.close(); 
                                  ktit2.open(map, kmarker2);
                                      });
                              kmarker2.setMap(map);
                              //--------- cords
                              var k3 = new google.maps.LatLng("$latitude[3]","$longitude[3]");
                              var kmarker3 = new google.maps.Marker({position:k3,icon: image});
                     var ktit3 = new google.maps.InfoWindow({content: '<h3>$tit[3]</h3><h5 style="$showdescs" >$des[3]</h5><a style="$showdirections" target="_blank" href="https://www.google.com/maps/dir/Current+Location/$lat[3],$lon[3]">Get Directions</a>'});
                              kmarker3.addListener("click", function() {
                             ktit1.close(); 
                             ktit2.close(); 
                             ktit.close(); 
                             ktit4.close();      
                            ktit3.open(map, kmarker3);});
                              kmarker3.setMap(map);
                              //--------- cords
                              var k4 = new google.maps.LatLng("$latitude[4]","$longitude[4]");
                              var kmarker4 = new google.maps.Marker({position:k4,icon: image});
                    var ktit4 = new google.maps.InfoWindow({content: '<h3>$tit[4]</h3><h5 style="$showdescs" >$des[4]</h5><a style="$showdirections" target="_blank" href="https://www.google.com/maps/dir/Current+Location/$lat[4],$lon[4]">Get Directions</a>'});
                              kmarker4.addListener("click", function() {
                                ktit1.close(); 
                             ktit2.close(); 
                             ktit3.close(); 
                             ktit.close(); 
                                  ktit4.open(map, kmarker4);
                                      });
                              kmarker4.setMap(map);
                    
                         //------------------------------- new cords
                              var k6 = new google.maps.LatLng("$latitude[6]","$longitude[6]");
                              var kmarker6 = new google.maps.Marker({ position:k6,icon: image});
                              var ktit6 = new google.maps.InfoWindow({content: '<h3>$tit[6]</h3><h5 style="$showdescs" >$des[6]</h5><a style="$showdirections" target="_blank" href="https://www.google.com/maps/dir/Current+Location/$lat[6],$lon[6]">Get Directions</a>'});
                              kmarker1.addListener("click", function() {
                              ktit.close(); 
                             ktit1.close(); 
                             ktit2.close(); 
                             ktit3.close(); 
                             ktit4.close(); 
                             ktit5.close(); 
                                  ktit6.open(map, kmarker6);
                                      });
                                kmarker6.setMap(map);
                    
                     //------------------------------- new cords
                              var k7 = new google.maps.LatLng("$latitude[7]","$longitude[7]");
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
                                  ktit7.open(map, kmarker7);
                                      });
                                kmarker7.setMap(map);
                    
                    //------------------------------- new cords
                              var k8 = new google.maps.LatLng("$latitude[8]","$longitude[8]");
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
                                  ktit8.open(map, kmarker8);
                                      });
                                kmarker8.setMap(map);
                    
                      //------------------------------- new cords
                              var k9 = new google.maps.LatLng("$latitude[9]","$longitude[9]");
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
                                  ktit9.open(map, kmarker9);
                                      });
                                kmarker9.setMap(map);
                    
                     //------------------------------- new cords
                              var k10 = new google.maps.LatLng("$latitude[10]","$longitude[10]");
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
                                  ktit10.open(map, kmarker10);
                                      });
                                kmarker10.setMap(map);
                    
                    //------------------------------- new cords
                              var k11 = new google.maps.LatLng("$latitude[11]","$longitude[11]");
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
                                  ktit11.open(map, kmarker11);
                                      });
                                kmarker11.setMap(map);
                    
                    //------------------------------- new cords
                              var k12 = new google.maps.LatLng("$$latitude[12]","$longitude[12]");
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
                                  ktit12.open(map, kmarker12);
                                      });
                                kmarker12.setMap(map);
                    
                    
                    //------------------------------- new cords
                              var k13 = new google.maps.LatLng("$latitude[13]","$longitude[12]");
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
                                  ktit13.open(map, kmarker13);
                                      });
                                kmarker13.setMap(map);
                    
                    
                      //------------------------------- new cords
                              var k14 = new google.maps.LatLng("$latitude[14]","$longitude[14]");
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
                                  ktit14.open(map, kmarker14);
                                      });
                                kmarker14.setMap(map);
                    
                    //------------------------------- new cords
                              var k15 = new google.maps.LatLng("$latitude[15]","$longitude[15]");
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
                                  ktit15.open(map, kmarker15);
                                      });
                                kmarker15.setMap(map);
                    
                     //------------------------------- new cords
                              var k16 = new google.maps.LatLng("$latitude[16]","$longitude[16]");
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
                                  ktit16.open(map, kmarker16);
                                      });
                                kmarker16.setMap(map);
                    
                    
                    //------------------------------- new cords
                              var k17 = new google.maps.LatLng("$latitude[17]","$longitude[17]");
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
                                  ktit17.open(map, kmarker17);
                                      });
                                kmarker17.setMap(map);
                    
                    
                     //------------------------------- new cords
                              var k18 = new google.maps.LatLng("$latitude[18]","$longitude[18]");
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
                                  ktit18.open(map, kmarker18);
                                      });
                                kmarker18.setMap(map);
                    
                    
                    
                    //------------------------------- new cords
                              var k19 = new google.maps.LatLng("$latitude[19]","$longitude[19]");
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
                                  ktit19.open(map, kmarker19);
                                      });
                                kmarker19.setMap(map);
                    
                    //------------------------------- new cords
                              var k20= new google.maps.LatLng("$latitude[20]","$longitude[20]");
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
                                  ktit20.open(map, kmarker20);
                                      });
                                kmarker20.setMap(map);
                    
                    
                     //------------------------------- new cords
                              var k21= new google.maps.LatLng("$latitude[21]","$longitude[21]");
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
                                  ktit21.open(map, kmarker21);
                                      });
                                kmarker21.setMap(map);
                    
                    //------------------------------- new cords
                              var k22= new google.maps.LatLng("$latitude[22]","$longitude[22]");
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
                                  ktit22.open(map, kmarker21);
                                      });
                                kmarker22.setMap(map);
                    
                    
                     //------------------------------- new cords
                              var k23= new google.maps.LatLng("$latitude[23]","$longitude[23]");
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
                                  ktit23.open(map, kmarker22);
                                      });
                                kmarker23.setMap(map);
                    
                    
                    //------------------------------- new cords
                              var k24= new google.maps.LatLng("$latitude[24]","$longitude[24]");
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
                                  ktit24.open(map, kmarker23);
                                      });
                                kmarker24.setMap(map);
                    
                    //------------------------------- new cords
                              var k25= new google.maps.LatLng("$latitude[25]","$longitude[25]");
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
                                  ktit25.open(map, kmarker24);
                                      });
                                kmarker25.setMap(map);
                 
                            //------------------------------- new cords
                              var k26= new google.maps.LatLng("$latitude[26]","$longitude[26]");
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
                                  ktit26.open(map, kmarker25);
                                      });
                                kmarker26.setMap(map);


 //------------------------------- new cords
                              var k27= new google.maps.LatLng("$latitude[27]","$longitude[27]");
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
                                  ktit27.open(map, kmarker28);
                                      });
                                kmarker27.setMap(map);

//------------------------------- new cords
                              var k28= new google.maps.LatLng("$latitude[28]","$longitude[28]");
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
                                  ktit28.open(map, kmarker28);
                                      });
                                kmarker28.setMap(map);


//------------------------------- new cords
                              var k29= new google.maps.LatLng("$latitude[29]","$longitude[29]");
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
                                  ktit29.open(map, kmarker29);
                                      });
                                kmarker29.setMap(map);



//------------------------------- new cords
                              var k30= new google.maps.LatLng("$latitude[30]","$lon[30]");
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
                                  ktit30.open(map, kmarker30);
                                      });
                                kmarker30.setMap(map);


                              //--------- cords
           
            }
            google.maps.event.addDomListener(window, 'load', initialize);

__JS__;

            $doc->addScriptDeclaration($js);



//         include_once (JURI::root( false, 'modules'.DS.'mod_contact'.DS.'assets'.DS.'map.php' ));
        }
        ?>


        <div class="contact_infos">
            <?php
            if ($data->address && $params->get('show_address', '')) {
                ?>
                <div class="contact_address">
                    <?php echo ($type ? '<span></span>' : JText::_('STREET') . ': ') . $data->address; ?>   
                </div>
                <?php
            }

            if ($data->telephone && $params->get('show_telephone', '')) {
                ?>
                <div class="contact_telephone">
                    <?php echo ($type ? '<span></span>' : JText::_('tel') . ' : ') . $data->telephone; ?>   
                </div>
                <?php
            }
            if ($data->mobile && $params->get('show_mobile', '')) {
                ?>
                <div class="contact_mobile">
                    <?php echo ($type ? '<span></span>' : JText::_('mobile') . ': ' ) . $data->mobile; ?>   
                </div>
                <?php
            }
            if ($data->fax && $params->get('show_fax', '')) {
                ?>
                <div class="contact_fax">
                    <?php echo ($type ? '<span></span>' : JText::_('fax') . ': ' ) . $data->fax; ?>   
                </div>
                <?php
            }
            if ($data->email_contact && $params->get('email_contact', '')) {
                ?>
                <div class="contact_email_to">
                    <?php echo ($type ? '<span></span>' : JText::_('EMAIL') . ': '); ?><a href="mailto:<?php echo $data->email_contact; ?>" target="_blank"><?php echo $data->email_contact; ?></a> 
                </div>
                <?php
            }
            if ($data->webpage && $params->get('show_webpage', '')) {
                ?>
                <div class="contact_webpage">
                    <?php echo ($type ? '<span></span>' : JText::_('web') . ': ') . $data->webpage; ?>   
                </div>
                <?php
            }
            if ($data->moreinformation && $params->get('show_moreinformation', '')) {
                ?>
                <div class="contact_moreinfo">
                    <?php echo ($type ? '<span></span>' : JText::_('moreinfo')) . '' . $data->moreinformation; ?>   
                </div>

                <?php
            }
            ?>
        </div>
    </div>
    <?php
}
            //include_once (JURI::root( false, 'modules'.DS.'mod_contact'.DS.'assets'.DS.'js'.DS.'mapjs.js' ));
            
            