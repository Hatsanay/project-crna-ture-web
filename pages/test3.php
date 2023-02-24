<?php
// 3 บรรทัดนี้้ สำหรับป้องกันการ cache จำค่าเก่าตอนทพสอบ คงไว้ หรือเอาออกได้
header("Content-type:text/html; charset=UTF-8");          
header("Cache-Control: no-store, no-cache, must-revalidate");         
header("Cache-Control: post-check=0, pre-check=0", false);   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Polygon 01</title>
<!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">-->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <style type="text/css">
    /* html {
        height: 100%
    }
    body {
        height:100%;
        margin:0;
        padding:0;
        font-family:tahoma, "Microsoft Sans Serif", sans-serif, Verdana;
        font-size:12px;
    } */
    /* css กำหนดความกว้าง ความสูงของแผนที่ */
    html, body, #map-canvas {
	height: 100%;
	margin: 0;
	padding: 0;
}

#map-canvas {
	height: 75%;
	width: 75%;
}

label {
	padding: 20px 10px;
	display: inline-block;
	font-size: 1.5em;
}

input {
	font-size: 0.75em;
	padding: 10px;
}
    </style>
</head>
<body>
<label for="">Address: <input id="map-search" class="controls" type="text" placeholder="Search Box" size="104"></label><br>
<label for="">Lat: <input type="text" class="latitude"></label>
<label for="">Long: <input type="text" class="longitude"></label>
<label for="">City <input type="text" class="reg-input-city" placeholder="City"></label>

<div id="map-canvas"></div>

<script src="javascript.js"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDh5u_5MGZbFpzKlgrG2RCOiwaX1bchfZA&libraries=places&callback=initialize"></script>
    
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>   
<script type="text/javascript">






  
function initialize() {

var mapOptions, map, marker, searchBox, city,
  infoWindow = '',
  addressEl = document.querySelector( '#map-search' ),
  latEl = document.querySelector( '.latitude' ),
  longEl = document.querySelector( '.longitude' ),
  element = document.getElementById( 'map-canvas' );
city = document.querySelector( '.reg-input-city' );

mapOptions = {
  // How far the maps zooms in.
  zoom: 8,
  // Current Lat and Long position of the pin/
  center: new google.maps.LatLng( 18.5204, 73.8567 ),
  // center : {
  // 	lat: -34.397,
  // 	lng: 150.644
  // },
  disableDefaultUI: false, // Disables the controls like zoom control on the map if set to true
  scrollWheel: true, // If set to false disables the scrolling on the map.
  draggable: true, // If set to false , you cannot move the map around.
  // mapTypeId: google.maps.MapTypeId.HYBRID, // If set to HYBRID its between sat and ROADMAP, Can be set to SATELLITE as well.
  // maxZoom: 11, // Wont allow you to zoom more than this
  // minZoom: 9  // Wont allow you to go more up.

};

/**
 * Creates the map using google function google.maps.Map() by passing the id of canvas and
 * mapOptions object that we just created above as its parameters.
 *
 */
// Create an object map with the constructor function Map()
map = new google.maps.Map( element, mapOptions ); // Till this like of code it loads up the map.

/**
 * Creates the marker on the map
 *
 */
marker = new google.maps.Marker({
  position: mapOptions.center,
  map: map,
  // icon: 'http://pngimages.net/sites/default/files/google-maps-png-image-70164.png',
  draggable: true
});

/**
 * Creates a search box
 */
searchBox = new google.maps.places.SearchBox( addressEl );

/**
 * When the place is changed on search box, it takes the marker to the searched location.
 */
google.maps.event.addListener( searchBox, 'places_changed', function () {
  var places = searchBox.getPlaces(),
    bounds = new google.maps.LatLngBounds(),
    i, place, lat, long, resultArray,
    addresss = places[0].formatted_address;

  for( i = 0; place = places[i]; i++ ) {
    bounds.extend( place.geometry.location );
    marker.setPosition( place.geometry.location );  // Set marker position new.
  }

  map.fitBounds( bounds );  // Fit to the bound
  map.setZoom( 15 ); // This function sets the zoom to 15, meaning zooms to level 15.
  // console.log( map.getZoom() );

  lat = marker.getPosition().lat();
  long = marker.getPosition().lng();
  latEl.value = lat;
  longEl.value = long;

  resultArray =  places[0].address_components;

  // Get the city and set the city input value to the one selected
  for( var i = 0; i < resultArray.length; i++ ) {
    if ( resultArray[ i ].types[0] && 'administrative_area_level_2' === resultArray[ i ].types[0] ) {
      citi = resultArray[ i ].long_name;
      city.value = citi;
    }
  }

  // Closes the previous info window if it already exists
  if ( infoWindow ) {
    infoWindow.close();
  }
  /**
   * Creates the info Window at the top of the marker
   */
  infoWindow = new google.maps.InfoWindow({
    content: addresss
  });

  infoWindow.open( map, marker );
} );


/**
 * Finds the new position of the marker when the marker is dragged.
 */
google.maps.event.addListener( marker, "dragend", function ( event ) {
  var lat, long, address, resultArray, citi;

  console.log( 'i am dragged' );
  lat = marker.getPosition().lat();
  long = marker.getPosition().lng();

  var geocoder = new google.maps.Geocoder();
  geocoder.geocode( { latLng: marker.getPosition() }, function ( result, status ) {
    if ( 'OK' === status ) {  // This line can also be written like if ( status == google.maps.GeocoderStatus.OK ) {
      address = result[0].formatted_address;
      resultArray =  result[0].address_components;

      // Get the city and set the city input value to the one selected
      for( var i = 0; i < resultArray.length; i++ ) {
        if ( resultArray[ i ].types[0] && 'administrative_area_level_2' === resultArray[ i ].types[0] ) {
          citi = resultArray[ i ].long_name;
          console.log( citi );
          city.value = citi;
        }
      }
      addressEl.value = address;
      latEl.value = lat;
      longEl.value = long;

    } else {
      console.log( 'Geocode was not successful for the following reason: ' + status );
    }

    // Closes the previous info window if it already exists
    if ( infoWindow ) {
      infoWindow.close();
    }

    /**
     * Creates the info Window at the top of the marker
     */
    infoWindow = new google.maps.InfoWindow({
      content: address
    });

    infoWindow.open( map, marker );
  } );
});


}
</script>      
</body>
</html>