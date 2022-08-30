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
	<!-- section grafik dan chart -->
	<section id="section-about">
		<div class="">
			<div class="about">
				<div class="row">
					<div class="col-md-offset-2 col-md-8" style="padding: 0px">
						<div class="title">
							<div class="wow bounceIn">

								<h3 size="5px" class="section-heading animated" data-animation="bounceInUp" style="margin-bottom: 5px"><b>
										Informasi Pupuk Bersubsidi yang diterima oleh Kios
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
											echo "Kecamatan Enam Lingkung";
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
										di Kabupaten Padang Pariaman
										<?php
										$tahun = @$_GET['tahun'];
										if ($tahun == "1") {
											echo "Tahun 2020";
										} elseif ($tahun == "2") {
											echo "Tahun 2021";
										} elseif ($tahun == "3") {
											echo "Tahun 2022";
										} ?>
									</b></h3>


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
						<form method="get" action="<?php echo base_url("homes/pupukterima_p/by_tahun#section-about") ?>">
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
							<!-- <div class="col-lg-4 hide">
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
	 							</div> -->
							<!-- <div class="col-lg-4 hide">
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
	 							</div> -->
					</div>
					<!-- Menampilkan Menu -->
				</div>
				<hr style="margin: 5px">
				<div class="row">
					<div class="">

						<!-- /* Mengambil query report*/ -->

						<!-- Bar Chart -->
						<?php
						if ($data > 0) {
							foreach ($data as $result) {
								$nama[] 	= (string)$result->nama_kecamatan; //ambil nama Kecamatan
								$jumlah[] 	= (float) $result->jumlah_terima; //ambil nilai
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
						if ($datab > 0) {
							foreach ($datab as $result) {
								$namab[] 	= (string)$result->nama_kecamatan; //ambil nama Kecamatan
								$jumlahb[] 	= (float) $result->jumlah; //ambil nilai
								$pupukb[]	= (string)$result->nama_pupuk;
								$tahunb		= (float) $result->nama_tahun;
								$bulanb[]	= (string)$result->nama_bulan;
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
						$nilai = 0;
						if ($dataurea > 0) {
							foreach ($dataurea as $result) {
								$urea[]	= (float)$result->jumlah_terima;
							}
						} else {
							// echo '<center><b>';
							// echo '<div  style="color:#2B3643;font-size: 25px;margin-top: 80px"';
							// echo '<p>Maaf tidak ada informasi Kebutuhan Pupuk Bersubsidi </p><p>di Kabupaten Purworejo!';
							// echo '</p>';
							// echo '	 </div>';
							// echo '	</b></center>';
							echo $nilai;
						}
						?>

						<?php
						$nilai = 0;
						if ($dataphonska > 0) {
							foreach ($dataphonska as $result) {
								$phonska[]	= (float)$result->jumlah_terima;
							}
						} else {
							// echo '<center><b>';
							// echo '<div  style="color:#2B3643;font-size: 25px;margin-top: 80px"';
							// echo '<p>Maaf tidak ada informasi Kebutuhan Pupuk Bersubsidi </p><p>di Kabupaten Purworejo!';
							// echo '</p>';
							// echo '	 </div>';
							// echo '	</b></center>';
							echo $nilai;
						}

						// var_dump($phonska);

						?>

						<?php
						$nilai = 0;
						if ($datasp36 > 0) {
							foreach ($datasp36 as $result) {
								$sp36[]	= (float)$result->jumlah_terima;
							}
						} else {
							// echo '<center><b>';
							// echo '<div  style="color:#2B3643;font-size: 25px;margin-top: 80px"';
							// echo '<p>Maaf tidak ada informasi Kebutuhan Pupuk Bersubsidi </p><p>di Kabupaten Purworejo!';
							// echo '</p>';
							// echo '	 </div>';
							// echo '	</b></center>';
							echo $nilai;
						}
						// var_dump($sp36);
						?>

						<?php
						$nilai = 0;
						if ($dataza > 0) {
							foreach ($dataza as $result) {
								$za[]	= (float)$result->jumlah_terima;
							}
						} else {
							// echo '<center><b>';
							// echo '<div  style="color:#2B3643;font-size: 25px;margin-top: 80px"';
							// echo '<p>Maaf tidak ada informasi Kebutuhan Pupuk Bersubsidi </p><p>di Kabupaten Purworejo!';
							// echo '</p>';
							// echo '	 </div>';
							// echo '	</b></center>';
							echo $nilai;
						}



						// var_dump($dataza);
						?>

						<?php
						$nilai = 0;
						if ($datapetroganik > 0) {
							foreach ($datapetroganik as $result) {
								$petroganik[]	= (float)$result->jumlah_terima;
							}
						} else {
							// echo '<center><b>';
							// echo '<div  style="color:#2B3643;font-size: 25px;margin-top: 80px"';
							// echo '<p>Maaf tidak ada informasi Kebutuhan Pupuk Bersubsidi </p><p>di Kabupaten Purworejo!';
							// echo '</p>';
							// echo '	 </div>';
							// echo '	</b></center>';
							echo $nilai;
						}

						// var_dump($petroganik);
						?>



						<div class="col-lg-6">
							<div>
								<div id="data_column" style="min-width: 310px; max-width: 100%; height: 450px; margin: 0 auto"></div>
							</div>



							<script src="<?= base_url() ?>assets/highcharts/highcharts.js"></script>
							<script src="<?= base_url() ?>assets/highcharts/exporting.js"></script>
							<script src="<?= base_url() ?>assets/highcharts/export-data.js"></script>
							<script src="<?= base_url(); ?>assets/node_modules/highcharts/highcharts.js"></script>
							<script src="<?= base_url(); ?>assets/node_modules/highcharts/modules/series-label.js"></script>
							<script src="<?= base_url(); ?>assets/node_modules/highcharts/modules/exporting.js"></script>
							<script src="<?= base_url(); ?>assets/node_modules/highcharts/modules/export-data.js"></script>
							<script src="<?= base_url(); ?>assets/node_modules/highcharts/modules/accessibility.js"></script>
							<!-- <style>
								.highcharts-figure,
								.highcharts-data-table table {
									min-width: 310px;
									max-width: 800px;
									margin: 1em auto;
								}

								#container {
									height: 400px;
								}

								.highcharts-data-table table {
									font-family: Verdana, sans-serif;
									border-collapse: collapse;
									border: 1px solid #ebebeb;
									margin: 10px auto;
									text-align: center;
									width: 100%;
									max-width: 500px;
								}

								.highcharts-data-table caption {
									padding: 1em 0;
									font-size: 1.2em;
									color: #555;
								}

								.highcharts-data-table th {
									font-weight: 600;
									padding: 0.5em;
								}

								.highcharts-data-table td,
								.highcharts-data-table th,
								.highcharts-data-table caption {
									padding: 0.5em;
								}

								.highcharts-data-table thead tr,
								.highcharts-data-table tr:nth-child(even) {
									background: #f8f8f8;
								}

								.highcharts-data-table tr:hover {
									background: #f1f7ff;
								}
							</style> -->

							<script>
								Highcharts.chart('data_column', {
									chart: {
										type: 'column'
									},
									title: {
										text: 'JumlahPupuk Bersubsidi yang diterima dalam Jenis dan Bulan'
									},
									xAxis: {
										categories: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],
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
										data: <?php
												if ($petroganik > 0) {
													echo json_encode($petroganik);
												} else {
													echo json_encode(0);
												}
												?>
									}, {
										name: 'Phonska',
										data: <?php
												if ($phonska > 0) {
													echo json_encode($phonska);
												} else {
													echo json_encode(0);
												}
												?>
									}, {
										name: 'Sp36',
										data: <?php
												if ($sp36 > 0) {
													echo json_encode($sp36);
												} else {
													echo json_encode(0);
												}
												?>
									}, {
										name: 'Urea',
										data: <?php
												if ($urea > 0) {
													echo json_encode($urea);
												} else {
													echo json_encode(0);
												}
												?>
									}, {
										name: 'Za',
										data: <?php
												if ($za > 0) {
													echo json_encode($za);
												} else {
													echo json_encode(0);
												}
												?>
									}]
								});
							</script>
						</div>
						<!-- Bar Chart -->
						<!-- Pie Chart -->

						<div class="col-lg-6">
							<div>
								<div id="container" style="min-width: 310px; max-width: 100%; height: 450px; margin: 0 auto"></div>
							</div>
							<script>
								Highcharts.chart('container', {
									title: {
										text: 'Perbandingan sebaran pupuk yang diterima dengan kebutuhan'
									},
									xAxis: {
										categories: <?php echo json_encode($pupuk); ?>
									},
									yAxis: [{
										min: 0,
										title: {
											text: 'Jumlah (kg)'
										}
									}],
									series: [{
										type: 'column',
										name: 'Jumlah pupuk yang diterima',
										data: <?php echo json_encode($jumlah); ?>
									}, {
										type: 'column',
										name: 'Jumlah pupuk yang dibutuhkan',
										data: <?php echo json_encode($jumlahb); ?>
									}]
								});

								// Highcharts.chart('container', {
								// 	chart: {
								// 		type: 'column'
								// 	},
								// 	title: {
								// 		text: 'Perbandingan sebaran pupuk yang diterima dengan kebutuhan'
								// 	},
								// 	xAxis: {
								// 		categories: <?php echo json_encode($pupuk); ?>
								// 	},
								// 	yAxis: [{
								// 		min: 0,
								// 		title: {
								// 			text: 'Jumlah (kg)'
								// 		}
								// 	}],
								// 	legend: {
								// 		shadow: false
								// 	},
								// 	tooltip: {
								// 		shared: true
								// 	},
								// 	plotOptions: {
								// 		column: {
								// 			grouping: false,
								// 			shadow: false,
								// 			borderWidth: 0
								// 		}
								// 	},
								// 	series: [{
								// 			type: 'column',
								// 			name: 'Jumlah yang tersedia',
								// 			color: 'rgba(60,197,5,0.8)',
								// 			data: <?php echo json_encode($jumlah); ?>,
								// 			// pointPadding: 0.3,
								// 			// pointPlacement: -0.2
								// 		}, {
								// 			type: 'column',
								// 			name: 'Jumlah yang dibutuhkan',
								// 			color: 'rgba(188,225,19,0.8)',
								// 			data: <?php echo json_encode($jumlahb); ?>,
								// 			// pointPadding: 0.4,
								// 			// pointPlacement: -0.2
								// 		}
								// 		// , {
								// 		// 	name: 'Profit',
								// 		// 	color: 'rgba(248,161,63,1)',
								// 		// 	data: [183.6],
								// 		// 	tooltip: {
								// 		// 		valuePrefix: '$',
								// 		// 		valueSuffix: ' M'
								// 		// 	},
								// 		// 	pointPadding: 0.3,
								// 		// 	pointPlacement: 0.2,
								// 		// 	yAxis: 1
								// 		// }, {
								// 		// 	name: 'Profit Optimized',
								// 		// 	color: 'rgba(186,60,61,.9)',
								// 		// 	data: [203.6],
								// 		// 	tooltip: {
								// 		// 		valuePrefix: '$',
								// 		// 		valueSuffix: ' M'
								// 		// 	},
								// 		// 	pointPadding: 0.4,
								// 		// 	pointPlacement: 0.2,
								// 		// 	yAxis: 1
								// 		// }
								// 	]
								// });
							</script>
						</div>
						<!-- Pie Chart -->
					</div>
				</div>
			</div>

		</div>
	</section>

	<section id="section-about section appear clearfix">
		<div class="container">
			<div class="about">
				<div class="row">
					<div class="col">
						<div class="title" style="margin-bottom: 5px">
							<div class="wow bounceIn">
								<h3><b>Peta Sebaran Jumlah Pupuk Bersubsidi yang diterima oleh Kios Pengecer <text style="text-transform: capitalize;" id="myJenis"></text> <text id="myTahun"></text></b></h3>
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
							<!-- <div id='selector_menu'>
	 								<select id='selector_tahun'>
	 									<option value='-'>Tahun</option>
	 									<option value='2020'>2020</option>
	 									<option value='2021'>2021</option>
	 									<option value='2022'>2022</option>
	 								</select>
	 								<select id='selector_jenis'>
	 									<option value='-'>Jenis</option> -->
							<!-- <option value = 'luas_tanam'>Luas Tanam</option> -->
							<!-- <option value='urea'>Pupuk Urea</option>
	 									<option value='phonska'>Pupuk Ponska</option>
	 									<option value='za'>Pupuk ZA</option>
	 									<option value='sp'>Pupuk SP</option>
	 									<option value='organik'>Pupuk Organik</option> -->
							<!-- </select> -->
						</div>
					</div>
	</section>
	<script src="<?php echo base_url(); ?>assets/js/leaflet-panel-layers.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/leaflet.ajax.js"></script>
	<script src="<?php echo base_url(); ?>vendor/axios.min.js"></script>

	<script>
		<?php
		foreach ($datageojson as $row) {
			$terima[$row->nama_kecamatan] = $row->jumlah_terima;
		}
		?>

		var TERIMA = <?= json_encode($terima); ?>
		// var geojson_pointer, geojson;
		var map = L.map('map').setView([-0.5511576, 100.1703919], 11);
		// var info = L.control(); // control that shows state info on hover
		// let legend = L.control({
		// position: 'bottomright'
		// });
		L.tileLayer('http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}', {
			subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
		}).addTo(map);


		// control that shows state info on hover
		// var info = L.control();

		

		// legend
		function getColor(d) {
			return d > 1500000 ? '#00ee72' :
				d > 0 ? '#BD0026' :
				'#FFEDA0';
		}



		var legend = L.control({
			position: 'bottomright'
		});

		legend.onAdd = function(map) {

			var div = L.DomUtil.create('div', 'info legend'),
				grades = [0, 1500000],
				labels = ['Keterangan'],
				from, to;

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

		function style(feature) {
			return {
				weight: 2,
				opacity: 1,
				color: 'white',
				dashArray: '3',
				fillOpacity: 0.7,
				fillColor: getColor(TERIMA[feature.properties.Kecamatan])
			};
		}




		$.getJSON("<?= base_url('map_data/pdpariaman2022.geojson'); ?>", function(data) {
			geoLayer = L.geoJson(data, {
				style: function(feature) {
					return {
						color: '#ffe7c5',
						fillColor: 0.9,
						fillOpacity: 0.4,
					}
				}
			}).addTo(map);

			geoLayer.eachLayer(function(layer) {
				layer.bindPopup('<h4>Kios di kecamatan ini belum melakukan input</h4>');
			});
		});
		// menampilkan file geojson dari database
		<?php
		foreach ($datageojson as $datgeo => $value) {
		?>
			$.getJSON("<?= base_url('map_data/' . $value->geojson); ?>",

				function(data) {
					geoLayer = L.geoJson(data, {
						style: function(feature) {
							return {
								color: '#ffcc99',
								fillOpacity: 0.8,
								opacity: 1.0,
								fillColor: getColor(TERIMA[feature.properties.Kecamatan])
							}
						}
					}).addTo(map);

					// info.onAdd = function(map) {
					// 	this._div = L.DomUtil.create('div', 'info');
					// 	this.update();
					// 	return this._div;
					// };

					// info.update = function(props) {
					// 	this._div.innerHTML = '<h4>Tingkat Kecamatan</h4>' + (props ?
					// 		'<b>' + props.Kecamatan + '</b><br />' + TERIMA[props.Kecamatan] + ' titik' :
					// 		'Dekatkan mouse untuk melihat');
					// };

					// info.addTo(map);
					geoLayer.eachLayer(function(layer) {
						layer.bindPopup("<h4>Kecamatan : <?= $value->nama_kecamatan; ?><br>" +
							"Jumlah pupuk yang diterima : <?= $value->jumlah_terima; ?></h4>"
						);
					});
				});
		<?php } ?>
	</script>