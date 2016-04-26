<?php
include("config.php");
if($_POST['inputnilai']){
$nim = $_POST['nim'];
$pertemuan = $_POST['pertemuan'];
$nilai = $_POST['nilai'];
$tipe = $_POST['tipe'];
$sql= mysql_query("INSERT INTO tb_nilai values(NULL,'$nim','$pertemuan','$nilai','$tipe')");
if($sql!=0){
	header("Location:/kuliahkudotcom/view/forward.php");
}else{
	echo'Failed';
}
}
?>