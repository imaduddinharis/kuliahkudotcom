<?php
				include('../controller/config.php');
				if($_POST['editmateri']){
					$nama = $_POST['judul'];
					$xx = $_GET['nm'];
					$cek=mysql_query("SELECT * FROM tb_materi where judul='$xx'");
					$id=mysql_fetch_assoc($cek);
					$idcek=$id['id'];
					$sql= mysql_query("UPDATE tb_materi set judul='$nama' where id='$idcek'");
					if($sql!=0){
						header("Location: /kuliahkudotcom/view/materi.php");
					}
					else{
						echo'failed';
					}
				}
				if($_POST['edittugas']){
					$nama = $_POST['judul'];
					$xx = $_GET['nm'];
					$cek=mysql_query("SELECT * FROM tb_tugas_kuis where judul='$xx'");
					$id=mysql_fetch_assoc($cek);
					$idcek=$id['id'];
					$sql= mysql_query("UPDATE tb_tugas_kuis set judul='$nama' where id='$idcek'");
					if($sql!=0){
						header("Location: /kuliahkudotcom/view/forward.php");
					}
					else{
						echo'failed';
					}
				}
				?>