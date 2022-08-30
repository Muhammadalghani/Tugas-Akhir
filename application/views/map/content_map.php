    <script src="https://unpkg.com/esri-leaflet@2.2.4/dist/esri-leaflet.js" integrity="sha512-tyPum7h2h36X52O2gz+Pe8z/3l+Y9S1yEUscbVs5r5aEY5dFmP1WWRY/WLLElnFHa+k1JBQZSCDGwEAnm2IxAQ==" crossorigin=""></script>

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
    				<div class="item active" style="background-image: url(<?php echo base_url(); ?>home_file/img/Gambar1.png);">
    					<div class="carousel-caption">
    						<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.5s">
    							<h2>SELAMAT DATANG DI <font color="#ffff00">SIMPUDI</font>
    							</h2>
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

    				<div class="item" style="background-image: url(<?php echo base_url(); ?>home_file/img/Gambar2.png);">
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
    									<!-- <button type="livedemo" name="purchase" class="btn btn-primary btn-lg" required="required">Live Demo</button> -->
    								</div>
    								<a href="#services" class="btn btn-default btn-lg btn-border">
    									-LIHAT PETA-
    								</a>
    							</form>
    						</div>
    					</div>
    				</div>

    				<div class="item" style="background-image: url(<?php echo base_url(); ?>home_file/img/Gambar3.png);">
    					<div class="carousel-caption">
    						<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">
    							<h2>Peta Sebaran Luas Tanam</h2>
    						</div>
    						<div class="col-md-10 col-md-offset-1">
    							<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.9s">
    								<p>Menyajikan Peta Sebaran Luas Tanam per Kecamatan</p>
    							</div>
    						</div>
    						<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="1.2s">
    							<form class="form-inline">
    								<div class="form-group">
    									<!-- <button type="livedemo" name="purchase" class="btn btn-primary btn-lg" required="required">Live Demo</button> -->
    								</div>
    								<a href="#services" class="btn btn-default btn-lg btn-border">
    									-LIHAT PETA-
    								</a>
    							</form>
    						</div>
    					</div>
    				</div>

    				<div class="item" style="background-image: url(<?php echo base_url(); ?>home_file/img/Gambar4.png);">
    					<div class="carousel-caption">
    						<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">
    							<h2>Peta Pupuk yang diterima setiap kecamatan</h2>
    						</div>
    						<div class="col-md-10 col-md-offset-1">
    							<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.9s">
    								<p>Menyajikan Peta Sebaran Pupuk Bersubsidi yang telah diterima oleh Kios pengecer</p>
    							</div>
    						</div>
    						<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="1.2s">
    							<form class="form-inline">
    								<!-- <div class="form-group">
                <button type="livedemo" name="purchase" class="btn btn-primary btn-lg" required="required">Live
                  Demo</button>
              </div> -->
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
    	<!-- /#about-slider
			/#slider -->


    	<!-- sECTION gRAFIK -->
    	<section id="section-about">
    		<div class="">
    			<div class="about">
    				<div class="row">
    					<div class="col-md-offset-2 col-md-8">
    						<div class="title">
    							<div class="wow bounceIn">
    								<h3 class="section-heading animated" data-animation="bounceInUp" style="margin-bottom: 5px">Informasi Penanaman Padi di Kabupaten Padang Pariaman
    									<?php
										$tahun = @$_GET['tahun'];
										if ($tahun == "1") {
											echo "Tahun 2020";
										} elseif ($tahun == "2") {
											echo "Tahun 2021";
										} elseif ($tahun == "3") {
											echo "Tahun 2022";
										} ?>
    								</h3>
    							</div>
    						</div>
    					</div>

    					<!-- Menampilkan Menu -->
    					<div class="col-md-offset-0 col-md-5" style="padding-left: 50px">
    						<!-- Dropdown dengan method AJAX PHP  -->
    						<div class="col-lg-4 col-sm-4 col-xs-4" align="" style="padding-left: 5px; padding-right: 5px">
    							<!-- <p style="margin: 0 0 0px">Tahun:</p> -->
    							<select class="form-control" name="tahun" id="tahun" onchange="send_value(this.value);">
    								<option value="3">-Pilih Tahun-</option>
    								<?php
									foreach ($get_tahun as $row) {
										echo "<option value='" . $row->tahun_id . "' >" . $row->nama_tahun . "</option>";
									}
									?>
    							</select>
    							<script>
    								function send_value(val) {
    									window.location = "<?php echo base_url("homes/map/by_tahun") ?>?tahun=" + val + "#section-about";
    									// Here page.php is the page where you want to send the value it may be the name of same page.
    								}
    							</script>
    						</div>
    						<!-- End of AJAX METHOD -->

    					</div>
    					<!-- Menampilkan Menu -->
    				</div>
    				<hr style="margin: 5px">
    				<div class="row">
    					<div class="">
    						<?php
							if ($data > 0) {
								foreach ($data as $result) {					/* Mengambil query report*/
									$nama[] 	= (string)$result->nama_kecamatan; //ambil nama Kecamatan
									$jumlah[]	= (float) $result->luas_tanam;
									$jumlah2[]	= (float) $result->luas_tanam2;
									$jumlah3[]	= (float) $result->luas_tanam3;
									$total[]	= (float) $result->luas_tanam + $result->luas_tanam2 + $result->luas_tanam3;
									$tahun 	= $result->nama_tahun; //ambil nilai

									// $data[] = [$nama, $jumlah];
								}
							} else {
								echo '<center><b>';
								echo '<div  style="color:#2B3643;font-size: 25px;margin-top: 80px"';
								echo '<p>Maaf tidak ada informasi penanaman Padi </p><p>di Kabupaten Padang Pariaman!';
								echo '</p>';
								echo '</div>';
								echo '</b></center>';
							}
							/* end mengambil query*/
							?>

    						<!-- Bar Chart -->
    						<div class="col-lg-7">
    							<div>
    								<div id="data_luas" style="min-width: 310px; max-width: 800px; height: 525px; margin: 0 auto"></div>
    							</div>
    							<script src="<?= base_url() ?>assets/highcharts/highcharts.js"></script>
    							<script src="<?= base_url() ?>assets/highcharts/exporting.js"></script>
    							<script src="<?= base_url() ?>assets/highcharts/export-data.js"></script>
    							<script>
    								Highcharts.chart('data_luas', {
    									chart: {
    										type: 'column'
    									},
    									title: {
    										text: 'Jumlah Luas Tanam Setiap Masa Tanam dalam Kecamatan'
    									},
    									subtitle: {
    										text: 'Source: <a href="https://distankp.padangpariamankab.go.id/">Dinas Pertanian dan Ketahanan Pangan Kabupaten Padang Pariaman</a>'
    									},
    									xAxis: {
    										categories: <?php echo json_encode($nama); ?>,
    										crosshair: true,
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
    									// tooltip: {
    									// 	valueSuffix: ' Ha'
    									// },
    									tooltip: {
    										headerFormat: '<span style="font-size:10px">{point.key} :</span><table>',
    										pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name} : </td>' +
    											'<td style="padding:0"><b> {point.y:.1f} Ha</b></td></tr>',
    										footerFormat: '</table>',
    										shared: true,
    										useHTML: true
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
    									// plotOptions: {
    									//        column: {
    									//            pointPadding: 0.2,
    									//            borderWidth: 0
    									//        }
    									//    },
    									credits: {
    										enabled: false
    									},
    									// legend: {
    									// 	layout: 'vertical',
    									// 	align: 'right',
    									// 	verticalAlign: 'top',
    									// 	x: -40,
    									// 	y: 80,
    									// 	floating: true,
    									// 	borderWidth: 1,
    									// 	backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
    									// 	shadow: true
    									// }, 
    									credits: {
    										enabled: false
    									},

    									series: [{
    										name: 'Masa Tanam 1',
    										data: <?php echo json_encode($jumlah); ?>
    									}, {
    										name: 'Masa Tanam 2',
    										data: <?php echo json_encode($jumlah2); ?>
    									}, {
    										name: 'Masa Tanam 3',
    										data: <?php echo json_encode($jumlah3); ?>
    									}]
    								});
    							</script>
    						</div>
    						<!-- Bar Chart -->
    						<!-- Pie Chart  -->

    						<div class="col-lg-5">
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
    										text: 'Presentase Jumlah Luas Tanam Setiap Kecamatan'
    									},
    									subtitle: {
    										text: 'Source: <a href="https://distankp.padangpariamankab.go.id/">Dinas Pertanian dan Ketahanan Pangan Kabupaten Padang Pariaman</a>'
    									},
    									xAxis: {
    										categories: <?php echo json_encode($nama); ?>,
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
    												format: '{point.percentage:,.2f} %' //untuk menampilkan dalam jumlah
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
    										enabled: false
    									},

    									series: [{
    										data: <?php echo json_encode($total); ?>

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
    		#selector_menu {
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
    								<strong>
    									<h3> Peta Sebaran Luas Tanam <text id="mytahun"></text> </h3>
    								</strong>
    							</div>
    						</div>
    					</div>
    				</div>
    				<div class="row">
    					<div class="col-lg-12">

    						<div id="map">


    							<div class="leaflet-bottom leaflet-right hide">
    								<span id="studentsCount" class="lblStyle span3 leaflet-control"> Options: </span>
    								<input type="button" id="Btn1" value="Provinsi" onclick="btn1_fn()" class="btnStyle span3 leaflet-control" />
    								<input type="button" id="Btn1" value="Near me" onclick="btnloct_fn()" class="btnStyle span3 leaflet-control" />
    								<input type="button" id="Btn3" value="Reset" onclick="location.reload();" class="btnStyle span3 leaflet-control" />
    							</div>
    							<div id='selector_menu'>
    								<select id='selector_tahun'>
    									<option value='-'>Tahun</option>
    									<option value='2020'>2020</option>
    									<option value='2021'>2021</option>
    									<option value='2022'>2022</option>
    								</select>

    								<!-- <script type="text/javascript">
  function myFunction() {
		var t = document.getElementById("selector_tahun").value;
    document.getElementById("mytahun").innerHTML = "You selected: " + t;
	}
</script> -->

    								<select id='selector_jenis' class="hide">
    									<option value='-'>Jenis</option>
    									<option value='luas_tanam'>Luas Tanam</option>
    									<option value='Urea'>Pupuk Urea</option>
    									<option value='Phonska'>Pupuk Ponska</option>
    									<option value='ZA'>Pupuk ZA</option>
    									<option value='SP-36'>Pupuk SP</option>
    									<option value='Organik'>Pupuk Organik</option>
    								</select>
    							</div>
    						</div>
    	</section>

    	<style>
    		.countryLabel {
    			background: rgba(255, 255, 255, 0);
    			border: 0;
    			border-radius: 0px;
    			box-shadow: 0 0px 0px;
    			font-size: 14px;
    			font-weight: bold;

    		}
    	</style>
    	<script src="<?php echo base_url(); ?>vendor/axios.min.js"></script>
    	<!-- <script src="https://unpkg.com/axios/dist/axios.min.js"></script> -->
    	<script>
    		var geojson_pointer, geojson;
    		var map = L.map('map').setView([-0.5511576, 100.1703919], 11);
    		var info = L.control(); // control that shows state info on hover
    		let legend = L.control({
    			position: 'bottomright'
    		});

    		// get color depending on population density value
    		function getColor(d, type) {
    			let retcolor = "#000";
    			switch (type) {
    				case "luas_tanam":
    					retcolor = d > 4000 ? '#00FF00' :
    						d > 3000 ? '#E5FF00' :
    						d > 2000 ? '#FFC100' :
    						d > 1000 ? '#FF6900' :
    						d >= 500 ? '#FF0000' :
    						d > 0 ? '#3182bd' :
    						'#FFEDA0';
    					break;
    				case "urea":
    				case "phonska":
    				case "za":
    				case "sp":
    				case "organik":
    					retcolor = d > 1000000 ? '#00FF00' :
    						d > 100000 ? '#E5FF00' :
    						d > 10000 ? '#FFC100' :
    						d > 1000 ? '#FF6900' :
    						d >= 100 ? '#FF0000' :
    						d > 0 ? '#3182bd' :
    						'#FFEDA0';
    					break;
    				default:
    					return;
    			}

    			return retcolor;
    		}

    		function style(type) {
    			return function(feature) {
    				let style_object = {
    					weight: 2,
    					opacity: 1,
    					color: 'white',
    					dashArray: '3',
    					fillOpacity: 0.7,
    					fillColor: getColor(feature.properties[type], type)
    				};

    				return style_object;
    			}
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

    		function resetHighlight(e) {
    			geojson_pointer.resetStyle(e.target);
    			info.update();
    		}

    		function zoomToFeature(e) {
    			map.fitBounds(e.target.getBounds());
    		}

    		function onEachFeature(feature, layer) {
    			layer.on({
    				mouseover: highlightFeature,
    				mouseout: resetHighlight,
    				// click: zoomToFeature
    			});

    			layer.bindTooltip(
    				feature.properties.Kecamatan, {
    					permanent: true,
    					direction: 'center',
    					className: 'countryLabel'
    				}
    			);

    			layer.bindPopup(`
			<div class='row data-title'>
				<b style='margin: 10px'>
					<center>
						<h4> Kecamatan: ${feature.properties.Kecamatan} </h4>
						<hr>
					</center>
						<h6> Luas Tanam:   ${feature.properties.luas_tanam} Ha </h6>
				</b>
			</div>
		`);
    		}

    		map.attributionControl.addAttribution('Data Dinas Pertanian Padang Pariaman &copy; <a href="https://distankp.padangpariamankab.go.id/">Dinas Pertanian dan Ketahanan Pangan Padang Pariaman</a>');

    		L.esri.basemapLayer('Imagery', {
    			maxZoom: 11,
    			minZoom: 10,
    		}).addTo(map);

    		L.esri.basemapLayer('ImageryLabels', {
    			maxZoom: 11,
    			minZoom: 10,
    		}).addTo(map);

    		// L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
    		//  	maxZoom: 11,
    		//  	minZoom: 10,
    		//  	attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
    		// 		'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
    		// 		'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    		// 	id: 'mapbox.light'
    		// }).addTo(map);

    		// L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
    		//  	maxZoom: 11,
    		//  	minZoom: 10,
    		//  	attribution: '&copy; Openstreetmap France | &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    		// 	// id: 'mapbox.light'
    		// }).addTo(map);	

    		info.onAdd = function(map) {
    			this._div = L.DomUtil.create('div', 'info');
    			this.update();
    			return this._div;
    		};

    		info.update = function(props) {
    			this._div.innerHTML = '<h4>Kecamatan:</h4>' + (props ?
    				'<b>' + props.Kecamatan + '</b>' :
    				'Tekan Kursor Pada Peta');
    		};

    		var simpudi_legend_generate = (type) => {
    			let grades;

    			let helper = (_type) => {
    				switch (_type) {
    					case "luas_tanam":
    						grades = [0, 500, 1000, 2000, 3000, 4000];
    						break;
    					case "urea":
    					case "phonska":
    					case "za":
    					case "sp":
    					case "organik":
    						grades = [0, 100, 1000, 10000, 100000, 1000000]
    						break;
    					default:
    						return;
    				}

    				return grades.reduce((p, c, i, a) => {
    					if (i + 1 != a.length)
    						p += `<br />
					<i style="background:${ getColor(grades[i] + 1, _type) }"></i>
					${grades[i]}–${grades[i + 1]}
					`;
    					else
    						p += `<br />
					<i style="background:${ getColor(grades[i] + 1, _type) }"></i>
					${grades[i]} >
					`;

    					return p;
    				}, `<strong>Kategori:</strong>
				<br />
				<i style="background:${getColor(0, _type)}"></i>
				Data tidak tersedia`);
    			}

    			legend.onAdd = (map) => {
    				let div = L.DomUtil.create('div', 'info legend');

    				div.innerHTML = helper(type);
    				return div;
    			}
    		}

    		var simpudi_change_year_map = (tahun) => {
    			axios.get(`<?php echo base_url(); ?>map_data/pdpariaman2022.geojson`).then((res) => {
    				let type_elem = document.getElementById("selector_jenis");
    				let selected_type = "luas_tanam";

    				geojson = res.data;

    				if (geojson_pointer !== undefined)
    					map.removeLayer(geojson_pointer);
    				else
    					type_elem.selectedIndex = 1;

    				selected_type = type_elem.options[type_elem.selectedIndex].value

    				geojson_pointer = L.geoJson(geojson, {
    					style: style("luas_tanam"),
    					onEachFeature: onEachFeature
    				}).addTo(map);



    				simpudi_legend_generate(selected_type);

    				info.addTo(map);
    				legend.addTo(map);
    			}).catch((e) => {
    				console.log(`${e} : Gagal loading data map`)
    			});
    		}

    		var simpudi_change_type_map = (type) => {
    			if (geojson_pointer !== undefined)
    				map.removeLayer(geojson_pointer);

    			geojson_pointer = L.geoJSON(geojson, {
    				style: style(type),
    				onEachFeature: onEachFeature
    			}).addTo(map);

    			simpudi_legend_generate(type);

    			info.addTo(map);
    			legend.addTo(map);
    		}

    		simpudi_change_year_map(2022);

    		document.getElementById("selector_tahun").onchange = (e) => {
    			let elem = e.target;
    			let tahun_dipilih = elem.options[elem.selectedIndex].value;
    			document.getElementById("mytahun").innerHTML = "Tahun " + tahun_dipilih;


    			simpudi_change_year_map(tahun_dipilih);
    		}

    		document.getElementById("selector_jenis").onchange = (e) => {
    			let elem = e.target;
    			let jenis_dipilih = elem.options[elem.selectedIndex].value;
    			// document.getElementById("myjenis").innerHTML = "Jenis: " + jenis_dipilih;

    			simpudi_change_type_map(jenis_dipilih);
    		}
    	</script>