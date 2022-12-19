function getMap(){
    var lat       = pos[0];
    var lon       = pos[1];
    var zoom      = 16;

    var fromProjection = new OpenLayers.Projection("EPSG:4326");
    var toProjection   = new OpenLayers.Projection("EPSG:900913");
    var position       = new OpenLayers.LonLat(lon, lat).transform( fromProjection, toProjection);

    map = new OpenLayers.Map("Map");
    var mapnik         = new OpenLayers.Layer.OSM();
    map.addLayer(mapnik);

    var markers = new OpenLayers.Layer.Markers( "Markers" );
    map.addLayer(markers);
    markers.addMarker(new OpenLayers.Marker(position));
    map.setCenter(position, zoom);
    
    document.cookie = "lon="+lon+"; expires=Fri, 31 Dec 9999 23:59:59 GMT; path=/"
    document.cookie = "lat="+lat+"; expires=Fri, 31 Dec 9999 23:59:59 GMT; path=/"
}