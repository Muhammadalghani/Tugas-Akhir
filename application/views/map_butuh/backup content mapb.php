 -about- Tempat template PETA PURWOREJO
<section id="section-about section appear clearfix">
	<div class="container">
		<div class="about">
			<div class="row">
				<div class="col-md-offset-3 col-md-6">
					<div class="title">
						<div class="wow bounceIn">
							<h3 size="5px" class="section-heading animated" data-animation="bounceInUp"><b>Peta Sebaran Kebutuhan Pupuk Bersubsidi</b></h3>

							<b><font size="5px">PETA SEBARAN KEBUTUHAN PUPUK BERSUBSIDI</font></b>
						</div>
					</div>
				</div>
			</div>

<script src='https://api.mapbox.com/mapbox.js/plugins/leaflet-fullscreen/v1.0.1/Leaflet.fullscreen.min.js'></script>
<link href='https://api.mapbox.com/mapbox.js/plugins/leaflet-fullscreen/v1.0.1/leaflet.fullscreen.css' rel='stylesheet' />

			<div  class="row">
				<div class="col-lg-12">
					<div id="map"></div>
				<script>
				 //  var map = L.map('map').setView([37.8, -96], 4);
				 var map = L.map('map').setView([-7.7086, 110.0031], 11); //-7.71148/110.00559new// -7.696451, 109.998940//old 

				 L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
				 	maxZoom: 11,
				 	minZoom: 10,
				 	attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
				 	'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
				 	'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
				 	id: 'mapbox.light'
				 }).addTo(map);

				 L.control.fullscreen().addTo(map);


				 // control that shows state info on hover
				 var info = L.control();

				 info.onAdd = function (map) {
				 	this._div = L.DomUtil.create('div', 'info');
				 	this.update();
				 	return this._div;
				 };

				 info.update = function (props) {
				 	this._div.innerHTML = '' +  (props ?
				 		'<b>' + props.Kecamatan + '</b>'
				 		: 'Arahkan Kursor dan Pilih Pada Peta');
				 };

				 info.addTo(map);


				 // get color depending on population density value
				 function getColor(d) {
				 	return  d > 4000 ? '#00FF00' :
						 	d > 3000 ? '#E5FF00' :
						 	d > 2000 ? '#FFC100' :
						 	d > 1000 ? '#FF6900' :
						 	d >= 500 ? '#FF0000' :
						 	d > 0 ?    '#3182bd' :
						 	'#FFEDA0';

				 }

				 function style(feature) {
				 	return {
				 		weight: 2,
				 		opacity: 1,
				 		color: 'white',
				 		dashArray: '3',
				 		fillOpacity: 0.7,
				 		fillColor: getColor(feature.properties.luas_tanam)
				 	};
				 }

				 function highlightFeature(e) {
				 	var layer = e.target;

				 	layer.setStyle({ 
				 		weight: 5,
				 		color: '#666',
				 		dashArray: '',
				 		fillOpacity: 0.7
				 	});

				 	if (!L.Browser.ie && !L.Browser.opera && !L.Browser.edge) {
				 		layer.bringToFront();
				 	}

				 	info.update(layer.feature.properties);
				 }

				 var geojson;

				 function resetHighlight(e) {
				 	geojson.resetStyle(e.target);
				 	info.update();
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

				 	//dari shita
				 var popupcontent = [];
				   popupcontent.push("<div class='row data-title'><b><center>");
				   popupcontent.push("<h4>");
				   popupcontent.push("     "+feature.properties.Kecamatan+"     ");
				   popupcontent.push("</h4>");
				   popupcontent.push("<hr>");
				   popupcontent.push("<h5>");
				   popupcontent.push("Luas Tanam:   "+feature.properties.luas_tanam+" Ha");
				   popupcontent.push("</h5>");
				   popupcontent.push("</br>");
				   popupcontent.push("</center></b></div>");
				 ;
				layer.bindPopup(popupcontent.join(""));
				 	//selesai dari shita
				 }

				 geojson = L.geoJson(statesData, {
				 	style: style,
				 	onEachFeature: onEachFeature
				 }).addTo(map);

				 map.attributionControl.addAttribution('Data Dinas Pertanian Purworejo &copy; <a href="http://www.purworejokab.go.id">Dinas Pertanian Purworejo</a>');




				 var legend = L.control({position: 'bottomright'});

				 legend.onAdd = function (map) {

				 	var div = L.DomUtil.create('div', 'info legend'),
				 	grades = [0, 500, 1000, 2000, 3000, 4000],
				 	labels = ['<strong>Kategori:</strong>'],
				 	from, to;

				 	labels.push(
				 		'<i style="background:' + getColor(0) + '"></i> ' +"Data tidak tersedia");


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
				</script>
				</div>

			</div>
		</div>
	</div>
</div>
</section>
 