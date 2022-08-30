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
	 								<p>Sistem Informasi Manajemen Pupuk Bersubsidi</p>
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
	 	<!--/#about-slider-->
	 	<!--/#slider-->


	 	<!-- sECTION gRAFIK -->
	 	<section id="section-about">
	 		<div class="">
	 			<div class="about">
	 				<div class="row">
	 					<div class="col-md-offset-2 col-md-8" style="padding: 0px">
	 						<div class="title">
	 							<div class="wow bounceIn">

	 								<h3 size="5px" class="section-heading animated" data-animation="bounceInUp" style="margin-bottom: 5px"><b>
	 										Informasi Kebutuhan Pupuk Bersubsidi
	 										<?php
												$kecamatan = @$_GET['kecamatan'];
												if ($kecamatan == "1") {
													echo "Kecamatan 2X11 Enam Lingkung";
												} elseif ($kecamatan == "2") {
													echo "Kecamatan 2X11 Kayu Tanam";
												} elseif ($kecamatan == "3") {
													echo "Kecamatan Batang Anai";
												} elseif ($kecamatan == "4") {
													echo "Kecamatan Batang Gasan";
												} elseif ($kecamatan == "5") {
													echo "Kecamatan Enam Lingkungn";
												} elseif ($kecamatan == "6") {
													echo "Kecamatan IV Koto Aur Malintang";
												} elseif ($kecamatan == "7") {
													echo "Kecamatan Lubuk Alung";
												} elseif ($kecamatan == "8") {
													echo "Kecamatan Nan Sabaris";
												} elseif ($kecamatan == "9") {
													echo "Kecamatan Padang Sago";
												} elseif ($kecamatan == "10") {
													echo "Kecamatan VII Koto Patamuan";
												} elseif ($kecamatan == "11") {
													echo "Kecamatan Sintuk Toboh Gadang";
												} elseif ($kecamatan == "12") {
													echo "Kecamatan Sungai Geringging";
												} elseif ($kecamatan == "13") {
													echo "Kecamatan Sungai Limau";
												} elseif ($kecamatan == "14") {
													echo "Kecamatan Ulakan Tapakis";
												} elseif ($kecamatan == "15") {
													echo "Kecamatan V Koto Kampung Dalam";
												} elseif ($kecamatan == "16") {
													echo "Kecamatan V Koto Timur";
												} elseif ($kecamatan == "17") {
													echo "Kecamatan VII Koto Sungai Sariak";
												} ?><br>
	 										Kabupaten Padang Pariaman
	 										<?php
												$tahun = @$_GET['tahun'];
												if ($tahun == "1") {
													echo "Tahun 2020";
												} elseif ($tahun == "2") {
													echo "Tahun 2021";
												} elseif ($tahun == "3") {
													echo "Tahun 2022";
												} ?>
	 										Berbasis RDKK</b></h3>


	 							</div>
	 						</div>
	 					</div>

	 					<!-- Menampilkan Menu -->
	 					<div class="col-md-offset-0 col-md-5" style="padding-left: 50px">
	 						<div class="col-lg-4 hide">
	 							<p>Komoditas</p>
	 							<div class="">
	 								<button class="col-lg-12" type="button" data-toggle="">Padi
	 									<span class=""></span></button>
	 							</div>
	 						</div>
	 						<form method="get" action="<?php echo base_url("homes/mapb/by_tahun#section-about") ?>">
	 							<!--Dropdown dengan method Get PHP-->
	 							<div class="col-lg-3 col-sm-3 col-xs-3" align="" style="padding-left: 5px; padding-right: 5px">
	 								<p style="margin: 0 0 0px">Tahun:</p>
	 								<select class="form-control" name="tahun" id="tahun">
	 									<option value="99">Pilih</option>
	 									<?php
											foreach ($get_tahun as $row) {
												echo "<option value='" . $row->tahun_id . "'>" . $row->nama_tahun . "</option>";
											}
											?>
	 								</select>
	 							</div>

	 							<!-- Dropdown dengan method AJAX PHP  -->
	 							<!-- <div class="col-lg-3 col-sm-3 col-xs-3" align="" style="padding-left: 5px; padding-right: 5px">
								<p style="margin: 0 0 0px">Tahun:</p>
								<select class="form-control" name="tahun" id="tahun" onchange="send_value();">
									<option value="3">-Pilih Tahun-</option>
									<?php
									foreach ($get_tahun as $row) {
										echo "<option value='" . $row->tahun_id . "' >" . $row->nama_tahun . "</option>";
									}
									?>
								</select>	
								<script>
									function send_value(val)
								{
										window.location = "<?php echo base_url("homes/mapb/by_tahun") ?>?tahun="+val+"#section-about";
									// Here page.php is the page where you want to send the value it may be the name of same page.
								} 	
								</script>
								</div> -->
	 							<!-- End of AJAX METHOD -->

	 							<!--Dropdown dengan method Get PHP-->
	 							<div class="col-lg-3 col-sm-3 col-xs-3" align="" style="padding-left: 5px; padding-right: 5px">
	 								<p style="margin: 0 0 0px">Kecamatan:</p>
	 								<select class="form-control" name="kecamatan" id="kecamatan">
	 									<option value="semua">Semua</option>
	 									<?php
											foreach ($get_kecamatan as $row) {
												echo "<option value='" . $row->kecamatan_id . "'>" . $row->nama_kecamatan . "</option>";
											}
											?>
	 								</select>
	 							</div>

	 							<!-- Dropdown dengan method AJAX PHP  -->
	 							<!-- <div class="col-lg-4 col-sm-4 col-xs-4" align="" style="padding-left: 5px; padding-right: 5px">
									<p style="margin: 0 0 0px">Kecamatan:</p>
									<select class="form-control" name="kecamatan" id="kecamatan" onchange="send_value();">
										<option value="semua">Semua</option>
													<?php
													foreach ($get_kecamatan as $row) {
														echo "<option value='" . $row->kecamatan_id . "'>" . $row->nama_kecamatan . "</option>";
													}
													?>
									</select>	
									<script>
										// function send_value(val,val2)
									//   {
									//   		// var val="1";
									//   		// var val2="semua";
									//        window.location = "<?php echo base_url("homes/mapb/by_tahun") ?>?tahun="+val+"&kecamatan="+val2+"#section-about";
									//       // Here page.php is the page where you want to send the value it may be the name of same page.
									//   }
										function send_value(val) {
											var tahun = $("#tahun").val();
											var kec = $("#kecamatan").val();
											if(country && div) {
												$.ajax({
													type: "POST",
													url: "<?php echo base_url("homes/mapb/by_tahun") ?>",
													data:{"tahun": tahun,"kecamatan":kec},
													// success: function(data){
													//     $("#state-list").val(data);
													//  }
												}); 
											}
										}	    	
									</script>
									</div> -->
	 							<!-- End of AJAX METHOD -->
	 							<!-- Button Cari -->
	 							<div class="col-lg-3 col-sm-3 col-xs-3" align="" style="margin-top: 21px; padding-left: 5px; padding-right: 5px">
	 								<input style="margin-left: 0px; margin-top: 5px; padding-left: 20px; padding-right: 20px" type="submit" class="btn btn-success btn-xs" value="Cari">
	 							</div>
	 							<!-- Button Reset -->
	 							<!-- 	<div class="line-btn-row col-lg-3 col-sm-3 col-xs-3" align="" style="margin-top: 21px; padding-left: 5px; padding-right: 5px">
									<a href="<?= base_url(); ?>homes/mapb#section-about" style="margin-left: 0px; margin-top: 5px; padding-left: 20px; padding-right: 20px; border: 2px solid #000000; font-size: 13px" class="line-btn light">Reset</a>
									
								</div> -->
	 							<!-- http://localhost/simpudi3/homes/mapb/by_tahun?tahun=3&kecamatan=semua#section-about -->
	 							<div class="col-lg-4 hide">
	 								<p>Pilih tahun</p>
	 								<div class="dropdown">
	 									<button class="col-lg-12" type="button" data-toggle="dropdown">2018 <span class="caret"></span></button>
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
	 									<button class="col-lg-12" type="button" data-toggle="dropdown"> <span class="caret"></span></button>
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
	 				<hr style="margin: 5px">
	 				<div class="row">
	 					<div class="">

	 						<!-- /* Mengambil query report*/ -->
	 						<?php
								if ($data > 0) {
									foreach ($data as $result) {
										$nama[] 	= (string)$result->nama_kecamatan; //ambil nama Kecamatan
										$jumlah[] 	= (float) $result->jumlah; //ambil nilai
										$pupuk[]	= (string)$result->nama_pupuk;
										$tahun		= (float) $result->nama_tahun;
										$bulan[]	= (string)$result->nama_bulan;
									}
								} else {
									echo '<center><b>';
									echo '<div  style="color:#2B3643;font-size: 25px;margin-top: 80px"';
									echo '<p>Maaf tidak ada informasi Kebutuhan Pupuk Bersubsidi </p><p>di Kabupaten Padang Pariaman!';
									echo '</p>';
									echo '	 </div>';
									echo '	</b></center>';
								} ?>


	 						<?php
								if ($dataurea > 0) {
									foreach ($dataurea as $result) {
										$urea[]	= (float)$result->jumlah;
									}
								} else {
									// echo '<center><b>';
									// echo '<div  style="color:#2B3643;font-size: 25px;margin-top: 80px"';
									// echo '<p>Maaf tidak ada informasi Kebutuhan Pupuk Bersubsidi </p><p>di Kabupaten Purworejo!';
									// echo '</p>';
									// echo '	 </div>';
									// echo '	</b></center>';
									echo '';
								}
								?>

	 						<?php
								if ($dataphonska > 0) {
									foreach ($dataphonska as $result) {
										$phonska[]	= (float)$result->jumlah;
									}
								} else {
									// echo '<center><b>';
									// echo '<div  style="color:#2B3643;font-size: 25px;margin-top: 80px"';
									// echo '<p>Maaf tidak ada informasi Kebutuhan Pupuk Bersubsidi </p><p>di Kabupaten Purworejo!';
									// echo '</p>';
									// echo '	 </div>';
									// echo '	</b></center>';
									echo '';
								}
								?>

	 						<?php
								if ($datasp36 > 0) {
									foreach ($datasp36 as $result) {
										$sp36[]	= (float)$result->jumlah;
									}
								} else {
									// echo '<center><b>';
									// echo '<div  style="color:#2B3643;font-size: 25px;margin-top: 80px"';
									// echo '<p>Maaf tidak ada informasi Kebutuhan Pupuk Bersubsidi </p><p>di Kabupaten Purworejo!';
									// echo '</p>';
									// echo '	 </div>';
									// echo '	</b></center>';
									echo '';
								}
								?>

	 						<?php
								if ($dataza > 0) {
									foreach ($dataza as $result) {
										$za[]	= (float)$result->jumlah;
									}
								} else {
									// echo '<center><b>';
									// echo '<div  style="color:#2B3643;font-size: 25px;margin-top: 80px"';
									// echo '<p>Maaf tidak ada informasi Kebutuhan Pupuk Bersubsidi </p><p>di Kabupaten Purworejo!';
									// echo '</p>';
									// echo '	 </div>';
									// echo '	</b></center>';
									echo '';
								}
								?>

	 						<?php
								if ($datapetroganik > 0) {
									foreach ($datapetroganik as $result) {
										$petroganik[]	= (float)$result->jumlah;
									}
								} else {
									// echo '<center><b>';
									// echo '<div  style="color:#2B3643;font-size: 25px;margin-top: 80px"';
									// echo '<p>Maaf tidak ada informasi Kebutuhan Pupuk Bersubsidi </p><p>di Kabupaten Purworejo!';
									// echo '</p>';
									// echo '	 </div>';
									// echo '	</b></center>';
									echo '';
								}
								?>
	 						<!-- /* end mengambil query*/
	
								// $data[] = [$nama, $jumlah];
								
								/* end mengambil query*/ -->

	 						<!-- Bar Chart -->
	 						<div class="col-lg-8">
	 							<div>
	 								<div id="data_luas" style="min-width: 400px; max-width: 100%; height: 470px; margin: 0 auto"></div>
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
	 										text: 'Jumlah Kebutuhan Pupuk Bersubsidi dalam Jenis dan Bulan'
	 									},
	 									subtitle: {
	 										text: 'Source: <a href="https://distankp.padangpariamankab.go.id/">Dinas Pertanian dan Ketahanan Pangan Kabupaten Padang Pariaman</a>'
	 									},
	 									xAxis: {
	 										categories: ['Januari', 'Februari', 'Maret', /*'April',*/ 'Mei', 'Juni', 'Juli', /*'Agustus',*/ 'September', 'Oktober', 'November' /*, 'Desember'*/ ],
	 										crosshair: true
	 										// title: {
	 										// 	text: null
	 										// }
	 									},
	 									yAxis: {
	 										min: 0,
	 										title: {
	 											text: 'Jumlah (Kg)',
	 											align: 'high'
	 										},
	 										// labels: {
	 										// 	overflow: 'justify'
	 										// }
	 									},
	 									tooltip: {
	 										headerFormat: '<span style="font-size:10px">{point.key} :</span><table>',
	 										pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name} : </td>' +
	 											'<td style="padding:0"><b> {point.y:.1f} Kg</b></td></tr>',
	 										footerFormat: '</table>',
	 										shared: true,
	 										useHTML: true
	 									},
	 									credits: {
	 										enabled: false
	 									},
	 									plotOptions: {
	 										column: {
	 											pointPadding: 0.2,
	 											borderWidth: 0
	 										}
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
	 									// credits: {
	 									// 	enabled: false
	 									// },

	 									series: [{
	 										name: 'Petroganik',
	 										data: <?php echo json_encode($petroganik); ?>
	 									}, {
	 										name: 'Phonska',
	 										data: <?php echo json_encode($phonska); ?>
	 									}, {
	 										name: 'Sp36',
	 										data: <?php echo json_encode($sp36); ?>
	 									}, {
	 										name: 'Urea',
	 										data: <?php echo json_encode($urea); ?>
	 									}, {
	 										name: 'Za',
	 										data: <?php echo json_encode($za); ?>
	 									}]
	 								});
	 							</script>
	 						</div>
	 						<!-- Bar Chart -->
	 						<!-- Pie Chart -->

	 						<div class="col-lg-4">
	 							<div>
	 								<div id="data_pie" style="min-width: 310px; max-width: 100%; height: 450px; margin: 0 auto"></div>
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
	 										text: 'Kebutuhan Pupuk Bersubsidi dalam Persentase'
	 									},
	 									subtitle: {
	 										text: 'Source: <a href="https://distankp.padangpariamankab.go.id/">Dinas Pertanian dan Ketahanan Pangan Kabupaten Padang Pariaman</a>'
	 									},
	 									xAxis: {
	 										categories: <?php echo json_encode($pupuk); ?>,
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
	 											return 'Jumlah Total Kebutuhan Pupuk <b>' + sliceName +
	 												'</b> adalah <b>' + this.y + '</b> ' + 'Kg';
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
	 										data: <?php echo json_encode($jumlah); ?>

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
	 					<div class="col">
	 						<div class="title" style="margin-bottom: 5px">
	 							<div class="wow bounceIn">
	 								<h3><b>Peta Sebaran Jumlah Pupuk Bersubsidi <text style="text-transform: capitalize;" id="myJenis"></text> <text id="myTahun"></text></b></h3>
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
	 								<select id='selector_jenis'>
	 									<option value='-'>Jenis</option>
	 									<!-- <option value = 'luas_tanam'>Luas Tanam</option> -->
	 									<option value='urea'>Pupuk Urea</option>
	 									<option value='phonska'>Pupuk Ponska</option>
	 									<option value='za'>Pupuk ZA</option>
	 									<option value='sp'>Pupuk SP</option>
	 									<option value='organik'>Pupuk Organik</option>
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
						<h4> Kecamatan: 	${feature.properties.Kecamatan} </h4>
						<hr>
					</center>
						 Jumlah Urea: 		${feature.properties.urea} Kg <br>
						 Jumlah Phonska: 	${feature.properties.phonska} Kg <br>
						 Jumlah ZA: 		${feature.properties.za} Kg <br>
						 Jumlah SP-36: 		${feature.properties.sp} Kg <br>
						 Jumlah Organik: 	${feature.properties.organik} Kg <br>
				</b>
			</div>
		`);
	 		}

	 		map.attributionControl.addAttribution('Data Dinas Pertanian Padang Pariaman &copy; <a href="https://distankp.padangpariamankab.go.id/">Dinas Pertanian dan Ketahanan Pangan Kabupaten Padang Pariaman</a>');

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
	 					style: style("urea"),
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
	 			document.getElementById("myTahun").innerHTML = "Tahun " + tahun_dipilih;

	 			simpudi_change_year_map(tahun_dipilih);
	 		}

	 		document.getElementById("selector_jenis").onchange = (e) => {
	 			let elem = e.target;
	 			let jenis_dipilih = elem.options[elem.selectedIndex].value;
	 			document.getElementById("myJenis").innerHTML = "Jenis " + jenis_dipilih;

	 			simpudi_change_type_map(jenis_dipilih);
	 		}
	 	</script>
	 </div>
	 </div>