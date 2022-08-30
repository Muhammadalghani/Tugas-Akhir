<?php 

$dbhost = 'localhost';
$dbname = 'db_simpudi';
$dbuser = 'root';
$dbpass = '';

try{

	$dbcon = new PDO("mysql:host={$dbhost};dbname={$dbname}",$dbuser, $dbpass);
	$dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $ex){
	die($ex->getMessage());
}

$stmt=$dbcon->prepare("SELECT 	butuh_kecamatan2.`butuh-_id`,
		                        kecamatan.nama_kecamatan,
		                        butuh_kecamatan2.luas_tanam,
		                        butuh_kecamatan2.urea1,
		                        butuh_kecamatan2.urea2,
		                        butuh_kecamatan2.urea3,
		                        butuh_kecamatan2.sp1,
		                        butuh_kecamatan2.sp2,
		                        butuh_kecamatan2.sp3,
		                        butuh_kecamatan2.za1,
		                        butuh_kecamatan2.za2,
		                        butuh_kecamatan2.za3,
		                        butuh_kecamatan2.npk1,
		                        butuh_kecamatan2.npk2,
		                        butuh_kecamatan2.npk3,
		                        butuh_kecamatan2.organik1,
		                        butuh_kecamatan2.organik2,
		                        butuh_kecamatan2.organik3 
		        	FROM butuh_kecamatan2 
		        	INNER JOIN kecamatan ON butuh_kecamatan2.kecamatan_id = kecamatan.kecamatan_id
		        	ORDER BY butuh_kecamatan2.luas_tanam DESC");
$stmt->excecute();
$json = [];
while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
	extract($row);
	$json[]= [(string)$nama_kecamatan, (int)$luas_tanam];
}
echo json_encode($json);
?>












 ?>