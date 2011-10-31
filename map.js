var tableid = 1504980;
var geocoder = new google.maps.Geocoder();

function initialize() {
  map = new google.maps.Map(document.getElementById('map_canvas'), {
  center: new google.maps.LatLng(42, -93.95),
  zoom: 8,
  minZoom: 6,
  maxZoom: 13,
  mapTypeControl: false,
  streetViewControl: false,
  mapTypeId: google.maps.MapTypeId.TERRAIN,
  });

  layer = new google.maps.FusionTablesLayer({
    map: map,
    heatmap: { enabled: false },
    query: {
      select: "col0\x3e\x3e1",
      from: "1504980",
      where: ""
    }
  });
  
}

function zoomtoaddress() {

  // Use the geocoder to geocode the address
  geocoder.geocode( { 'address': document.getElementById("address").value }, 

function(results, status) {
    // If the status of the geocode is OK
    if (status == google.maps.GeocoderStatus.OK) {
      // Change the center and zoom of the map
      map.setCenter(results[0].geometry.location);
      map.setZoom(10);
    } 
  });
}

function searchKeyPress(e)
        {
                // look for window.event in case event isn't passed in
                if (window.event) { e = window.event; }
                if (e.keyCode == 13)
                {
                        document.getElementById('btnSearch').click();
                }
        }
        
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) {return;}
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#appId=148866255208434&xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));