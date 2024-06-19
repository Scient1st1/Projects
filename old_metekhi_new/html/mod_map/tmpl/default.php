<?php
// no direct access
defined('_JEXEC') or die('Restricted access');
//jimport('goodweb.session');

require_once JPATH_ROOT . DS . 'components' . DS . 'content' . DS . 'helpers' . DS . 'route.php';
if (is_null($map)) {
    return;
}
$map_data = $map;
if ($category) {
    $map_data = $category;
}
$map_data = json_encode($map_data);

if (!$map->mapstyles) {
    $map->mapstyles = '0';
}
?>
<div id="googleMap" style="width:<?= $width ?>;height:<?= $heigth ?>;"></div>
<script><?php ob_start(); ?>
    var mapData = <?= $map_data ?>;
    mapData = jQuery.parseJSON(JSON.stringify(mapData));
    var defaultText = "<?= $map->direction_text ?>";
    var defaultTextStatus = "<?= $map->direction ?>";
    var mapstyles = <?= $map->mapstyles ?>;
    var markerList = <?= json_encode($markers) ?>;
    markerList = jQuery.parseJSON(JSON.stringify(markerList));
    markerCount = markerList.length;
    var mapProp = {
        center: new google.maps.LatLng(mapData.latitude, mapData.longitude),
        zoom: parseInt(mapData.zoom_level),
        mapTypeControlOptions: {
            mapTypeIds: [google.maps.MapTypeId.SATELLITE, google.maps.MapTypeId.HYBRID, google.maps.MapTypeId.TERRAIN, google.maps.MapTypeId.ROADMAP, "map_style"]
        }
    };
    var styles = mapstyles;


    var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);

    if (mapstyles) {
        var styledMap = new google.maps.StyledMapType(styles, {name: "GW"});

        map.mapTypes.set('map_style', styledMap);
        map.setMapTypeId('map_style');
    }










    function markerSet() {


        for (var i = 0; i < markerCount; i++) {


            var latLng = new google.maps.LatLng(markerList[i].latitude, markerList[i].longitude);
            var name = markerList[i].name;
            var info;
            var icon = setIcon(markerList[i].icon);
            switch (parseInt(markerList[i].direction)) {
                case 0:
                    info = "";
                    break;
                case 1:
                    info = markerList[i].direction_text;
                    break;
                case 2:
                    if (parseInt(defaultTextStatus) == 1) {
                        info = defaultText;
                    } else {
                        info = "";
                    }
                    break;
                default:
                    info = "";
                    break;

            }

            marker = new google.maps.Marker({
                position: latLng,
                map: map,
                icon: icon,
                title: name
            });

            google.maps.event.addDomListener(marker, 'load', (function (marker, markerCount) {
                return function () {
                    infowindow.open(map, marker);
                };
            })(marker, markerCount));
            if (info) {
                infoWindow(marker, info);
            }


        }

    }

    markerSet();





    function setIcon(link) {
        if (!link) {
            return;
        }
        icons = {
            url: link,
            scaledSize: new google.maps.Size(42, 52),
            origin: new google.maps.Point(0, 0),
            anchor: new google.maps.Point(0, 0)
        };
        return icons;
    }

    function infoWindow(marker, text) {
        var infoWindow = new google.maps.InfoWindow({
            content: text
        });

        google.maps.event.addListener(marker, 'click', function () {
            infoWindow.open(map, marker);
        });
    }






<?php $script = ob_get_clean(); ?>
</script><?php
$document = JFactory::getDocument();
$document->addScriptDeclaration($script);





