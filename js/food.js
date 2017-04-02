booking();

function booking() {
	//console.log('findAll');
    //alert("Here");
	$.ajax({
		type: 'GET',
		url: 'getent.php?id=FD',
		dataType: "json", // data type of response
		success: function(data){
            //data=JSON.stringify(data);
           // alert(data);
                var map;
    var bounds = new google.maps.LatLngBounds();
   /* var mapOptions = {
        mapTypeId: 'roadmap'
    };*/
                    
    // Display a map on the page
    map = new google.maps.Map(document.getElementById("map"));
    map.setTilt(45);
    var markers = []; 
    $.each(data, function(n,elem){
        var mr = [];
        mr.push(elem.lat);
        mr.push(elem.lon);
        markers.push(mr);
    });
    var infoWindow = new google.maps.InfoWindow(), marker, i;
    
    for( i = 0; i < markers.length; i++ ) {
        var position = new google.maps.LatLng(markers[i][0], markers[i][1]);
        bounds.extend(position);
        marker = new google.maps.Marker({
            position: position,
            map: map
            //title: markers[i][0]
        });
        
        map.fitBounds(bounds);
    }

    var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
        this.setZoom(14);
        google.maps.event.removeListener(boundsListener);
    });
		}, 
        error: function(xhr, status, error) {
            //var err = eval("(" + xhr.responseText + ")");
            //alert(error.Message);
        }   
});
}