

 <div class="slider">
	<div id="about-slider">
		<div id="carousel-slider" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators visible-xs">
				<li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
				<li data-target="#carousel-slider" data-slide-to="1"></li>
				<li data-target="#carousel-slider" data-slide-to="2"></li>
			</ol>

			<div class="carousel-inner">
				<div class="item active" style="background-image: url(<?php echo base_url();?>home_file/img/1.jpg);">
					<div class="carousel-caption">
						<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.5s">
							<h2>SELAMAT DATANG DI <font color="#ffff00">SIMPUDI</font></h2>
						</div>
						<div class="col-md-10 col-md-offset-1">
							<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.9s">
								<p>Sistem Informasi Distribusi Pupuk Bersubsidi</p>
							</div>
						</div>
						<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="1.2s">


							<a href="#section-about" class="btn btn-default btn-lg btn-border">
								-CARI TAHU-
							</a>

						</div>
					</div>
				</div>

				<div class="item" style="background-image: url(<?php echo base_url();?>home_file/img/2.jpg);">
					<div class="carousel-caption">
						<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">
							<h2>Peta Distribusi Kebutuhan Pupuk Sepanjang Tahun</h2>
						</div>
						<div class="col-md-10 col-md-offset-1">
							<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.9s">
								<p>Menyajikan Peta Distribusi Pupuk Bersubsidi</p>
							</div>
						</div>
						<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="1.2s">
							<form class="form-inline">
								 <div class="form-group">
<!-- 									 <button type="livedemo" name="purchase" class="btn btn-primary btn-lg" required="required">Live
										 Demo</button> -->
										</div>
										<a href="#services" class="btn btn-default btn-lg btn-border">
											-LIHAT PETA-
										</a>
									</form>
								</div>
							</div>
						</div>

					<div class="item" style="background-image: url(<?php echo base_url();?>home_file/img/3.jpg);">
							<div class="carousel-caption">
								<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">
									<h2>Peta Sebaran Tanaman Pertanian</h2>
								</div>
								<div class="col-md-10 col-md-offset-1">
									<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.9s">
										<p>Menyajikan Peta Pola Tanam Tanaman Pertanian</p>
									</div>
								</div>
								<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="1.2s">
									<form class="form-inline">
								 <div class="form-group">
<!-- 									 <button type="livedemo" name="purchase" class="btn btn-primary btn-lg" required="required">Live
										 Demo</button> -->
										</div>
										<a href="#services" class="btn btn-default btn-lg btn-border">
											-LIHAT PETA-
										</a>
									</form>
								</div>
							</div>
						</div>
					</div>

					<a class="left carousel-control hidden-xs" href="#carousel-slider" data-slide="prev">
						<i class="fa fa-angle-left"></i>
					</a>

					<a class=" right carousel-control hidden-xs" href="#carousel-slider" data-slide="next">
						<i class="fa fa-angle-right"></i>
					</a>
				</div>
			</div>
			<!--/#about-slider-->
			<!--/#slider-->


			<!-- sECTION gRAFIK -->
			<section id="section-about">
				<div class="">
					<div class="about">
						<div class="row">
							<div class="col-md-offset-2 col-md-8">
								<div class="title">
									<div class="wow bounceIn">

										<h3 class="section-heading animated" data-animation="bounceInUp">Informasi Penanaman Padi di Kabupaten Purworejo </h3>


									</div>
								</div>
							</div>

							<!-- Menampilkan Menu -->
							<div class="col-md-offset-7 col-md-5">
								<div class="col-lg-4 hide">
									<p>Komoditas</p>
									<div class="">
										<button class="col-lg-12" type="button" data-toggle="">Padi 
											<span class=""></span></button>
								</div>
							</div>
			<form method="get" action="<?php echo base_url("homes/map/by_tahun#section-about")?>">
              <div class="col-lg-4 col-sm-4 col-xs-4" align="center">
			<select class="form-control" name="tahun" id="tahun">
				<option value="3">-Pilih Tahun-</option>
				<?php
				foreach($get_tahun as $row){
				echo "<option value='".$row->tahun_id."' >".$row->nama_tahun."</option>";
				}
				?>
			</select></div>
			<div class="col-lg-4 col-sm-4 col-xs-4" align="center">
				<input type="submit" class="btn btn-success btn-xs" value="Cari"></div>

							<div class="col-lg-4 hide">
								<p>Pilih tahun</p>
								<div class="dropdown">
									<button class="col-lg-12" type="button" data-toggle="dropdown">2018  <span class="caret"></span></button>
									<ul class="dropdown-menu col-lg-12" style="margin-top: 40px">
										<li><a href="#">2016</a></li>
										<li><a href="#">2017</a></li>
										<li><a href="#">2018</a></li>
										<li><a href="#">2019</a></li>
									</ul>
								</div>
							</div>
							<div class="col-lg-4 hide">
								<p>Pilih bulan</p>
								<div class="dropdown">
									<button class="col-lg-12" type="button" data-toggle="dropdown">  <span class="caret"></span></button>
									<ul class="dropdown-menu col-lg-12" style="margin-top: 40px">
										<li><a href="#tahun=2018&amp;bulan=semua">Semua di 2018</a></li>
										<li><a href="#">Januari</a></li>
										<li><a href="#">Februari</a></li>
										<li><a href="#">Maret</a></li>
										<li><a href="#">April</a></li>
										<li><a href="#">Mei</a></li>
										<li><a href="#">Juni</a></li>
										<li><a href="#">Juli</a></li>
										<li><a href="#">Agustus</a></li>
										<li><a href="#">September</a></li>
										<li><a href="# ">Oktober</a></li>
										<li><a href="# ">November</a></li>
										<li><a href="# ">Desember</a></li>
									</ul>
								</div>
							</div>
						</div>
						<!-- Menampilkan Menu -->
					</div>
					<div class="row">
						<div class="">
	<?php
	if ($data>0) {
	foreach ($data as $result){					/* Mengambil query report*/
	 $nama[] 	= (string)$result->nama_kecamatan; //ambil nama Kecamatan
	 $jumlah[]	= (float) $result->luas_tanam;
	 $tahun 	= $result->nama_tahun; //ambil nilai
	 // $data[] = [$nama, $jumlah];
	}
	}
	else {
		echo '<center><b>';
		echo '<div  style="color:#2B3643;font-size: 25px;margin-top: 80px"';
		echo '<p>Maaf tidak ada informasi penanaman Padi </p><p>di Kabupaten Purworejo!';
		echo '</p>';
		echo '</div>';
		echo '	</b></center>';
	}
	/* end mengambil query*/
	?>

							<!-- Bar Chart -->
	<div class="col-lg-6">
		<div>
			<div id="data_luas" style="min-width: 310px; max-width: 800px; height: 470px; margin: 0 auto"></div>
		</div>
			<script src="<?= base_url()?>assets/highcharts/highcharts.js"></script>
	<script src="<?= base_url()?>assets/highcharts/exporting.js"></script>
	<script src="<?= base_url()?>assets/highcharts/export-data.js"></script>
	<script>
		Highcharts.chart('data_luas', {
			chart: {
				type: 'bar'
			},
			title: {
				text: 'Jumlah Luas Tanam Tiap Kecamatan'
			},
			subtitle: {
				text: 'Source: <a href="http://www.purworejokab.go.id/">Dinas Pertanian Purworejo</a>'
			},
			xAxis: {
				categories: <?php echo json_encode($nama);?>,
				title: {
					text: null
				}
			},
			yAxis: {
				min: 0,
				title: {
					text: 'Luas Tanam (Ha)',
					align: 'high'
				},
				labels: {
					overflow: 'justify'
				}
			},
			tooltip: {
				valueSuffix: ' Ha'
			},
			plotOptions: {
				bar: {
					dataLabels: {
						enabled: true
					}
				},
				series: {
					colorByPoint: true
				}
			},
			credits: {
			enabled: true
			},
			legend: {
				layout: 'vertical',
				align: 'right',
				verticalAlign: 'top',
				x: -40,
				y: 80,
				floating: true,
				borderWidth: 1,
				backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
				shadow: true
			},
			credits: {
				enabled: true
			},

			series: [{
				name: 'Tahun <?php echo json_encode($tahun);?>',
				data: <?php echo json_encode($jumlah);?>
			}]
		});
	</script>
</div>
<!-- Bar Chart -->
<!-- Pie Chart --> 

<div class="col-lg-6">
	<div>
		<div id="data_pie" style="min-width: 310px; max-width: 800px; height: 470px; margin: 0 auto"></div>
	</div>
	<script>
		Highcharts.chart('data_pie', {
			chart: {
				plotBackgroundColor: null,
				plotBorderWidth: null,
				plotShadow: false,
				type: 'pie'
			},
			title: {
				text: 'Presentase Luas Tanam Tiap Kecamatan'
			},
			subtitle: {
				text: 'Source: <a href="http://www.purworejokab.go.id/">Dinas Pertanian Purworejo</a>'
			},
			xAxis: {
				categories: <?php echo json_encode($nama);?>,
				title: {
					text: null
				}
			},
			yAxis: {
				min: 0,
				title: {
					text: 'Luas Tanam (Ha)',
					align: 'high'
				},
				labels: {
					overflow: 'justify'
				}
			},
			tooltip: {
				formatter: function() {
					var sliceIndex = this.point.index;
					var sliceName = this.series.chart.axes[0].categories[sliceIndex];
					this.point.name = sliceName;
					return 'Jumlah Luas Lahan <b>' + sliceName +
					'</b> adalah <b>' + this.y + '</b> ' + 'Ha';
				},
				pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>',
				pointFormat: '{series.name}: <b>{point.y}</b> ({point.percentage:.1f}%)<br/>'
			},
			plotOptions: {
				pie: {
					allowPointSelect: true,
					cursor: 'pointer',
					dataLabels: {
						enabled: true,
				 format: '{point.percentage:,.2f} %'						//untuk menampilkan dalam jumlah
				//format: '<b>{point.name}</b>: {point.percentage:.1f} %', //untuk menampilkan dalam persen
			},
			showInLegend: true
		},
		series: {
			colorByPoint: true
		}
	},
	legend: {
		enabled: true,
		labelFormatter: function() {
			var legendIndex = this.index;
			var legendName = this.series.chart.axes[0].categories[legendIndex];

			return legendName;
		}

	},
	credits: {
		enabled: true
	},

	series: [{
		data: <?php echo json_encode($jumlah);?>

	}]
});
</script>
</div>
<!-- Pie Chart -->
</div>
</div>
</div>

</div>
</section>

<style>
	#selector_menu{
	  	position: absolute;
	  	top: 20px;
	  	left: 80px;
	  	z-index: 9000;
	}	
</style>


<!-- -about- Tempat template PETA PURWOREJO -->
<section id="section-about section appear clearfix">
	<div class="container">
		<div class="about">
			<div class="row">
				<div class="col-md-offset-3 col-md-6">
					<div class="title" style="margin-bottom: 5px">
						<div class="wow bounceIn">

							<strong><h3> PETA LUAS TANAM</h3></strong>


						</div>
					</div>
				</div>
			</div>
			<div  class="row">
				<div class="col-lg-12">
	<div id="map">
        <div class="leaflet-bottom leaflet-right hide">
	    <span id="studentsCount" class="lblStyle span3 leaflet-control"> Options: </span>
			<!-- <input type="button" id="Btn1" value="Provinsi" onclick="btn1_fn()" class="btnStyle span3 leaflet-control" />
			<input type="button" id="Btn1" value="Near me" onclick="btnloct_fn()" class="btnStyle span3 leaflet-control" />
            <input type="button" id="Btn3" value="Reset" onclick="location.reload();" class="btnStyle span3 leaflet-control" /> -->
            
        </div>
	<div id='selector_menu'>
			<select id='selector'>
				<option value='reset'>Reset</option>
				
				<option value = '2016'>2016</option>
				<option value = '2017'>2017</option>
				<option value = '2018'>2018</option>

			</select>
		</div>		
	</div>
    		<script src="<?php echo base_url();?>map_data/data/purworejo_kec.geojson"></script>
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

				 



				 // control that shows state info on hover
				 var info = L.control();

				 info.onAdd = function (map) {
				 	this._div = L.DomUtil.create('div', 'info');
				 	this.update();
				 	return this._div;
				 };

				 info.update = function (props) {
				 	this._div.innerHTML = '<h3>Provinsi:</h3>' +  (props ?
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


		var LayerActions = {
			reset: function(){
				map.removeLayer(geojson);
			},
			2016: function(){
				map.removeLayer(geojson);
				$.getJSON('http://localhost/simpudi3/map_data/data/2016.geojson', function(obj) {
						geojson = L.geoJson(obj, {
						style: style,
						onEachFeature: onEachFeature
					}).addTo(map);
				});
				
				return true;
			},
			2017: function(){
				map.removeLayer(geojson);
				$.getJSON('http://localhost/simpudi3/map_data/data/2017.geojson', function(obj) {
						geojson = L.geoJson(obj, {
						style: style,
						onEachFeature: onEachFeature
					}).addTo(map);
				});
				
				return true;
			}
		}




				$('#selector').change(function(){
				LayerActions[$(this).val()]();
				});	

				</script>
				</div>

			</div>
		</div>
	</div>
</div>
</section>