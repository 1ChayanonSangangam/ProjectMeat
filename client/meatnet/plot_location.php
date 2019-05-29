<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
 <head>
<meta charset="utf-8" >
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCeCfHsdy3W0KYNL86EDINqE7d2mPmL8AU&callback=initMap"
  type="text/javascript"></script>
<script type="text/javascript" src="jquery-1.11.2.min.js" ></script>
<script language="JavaScript">

var map;
var infowindow;

function initMap() { 
	var myOptions = {
	  zoom: 7,
	  center: new google.maps.LatLng(15.000, 101.00),
	  mapTypeId: google.maps.MapTypeId.ROADMAP
	};
	 map = new google.maps.Map(document.getElementById('map_canvas'),
		myOptions);
		infowindow = new google.maps.InfoWindow();
selectLocation();
	}


var markers = [];
function selectLocation(){
	$.ajax({
	type:"GET",
	url: "json-location.php?ID="+<?php echo $ID;?>,
	
	}).done(function(text){
		var json = $.parseJSON(text);
		var html2 = "";
			for(var i = 0 ;i<json.length;i++){
				var lat = json[i].lat;
				var lng = json[i].lng;
				var location_name =  json[i].location_name;
				var id = json[i].id;
				var latlng = new google.maps.LatLng(lat,lng);
				var makeroption = {map:map, html:location_name, position:latlng};
				var marker = new google.maps.Marker(makeroption);				
				markers.push(marker);
				google.maps.event.addListener(marker,'click',function(e){
				infowindow.setContent(this.html);
				infowindow.open(map,this);

				});
			}

			$("#divShow").html(html2);

	});
}


function showInfowindow(index){
infowindow.setContent(markers[index].html)
infowindow.open(map,markers[index])
map.panTo(markers[index].getPosition());
}

</script>
 </head>
 <body onload="initMap()">
 </body>
</html>