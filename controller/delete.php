<?php
				include('../controller/config.php');
				
				if(isset($_GET['delmateri'])){
					$xx = $_GET['delmateri'];
					$sql= mysql_query("DELETE from tb_materi where id='$xx'");
					if($sql!=0){
						header("Location: /kuliahkudotcom/view/materi.php");
					}
					else{
						echo'failed';
					}
				}
				if(isset($_GET['deltugas'])){
					$xx = $_GET['deltugas'];
					$sql= mysql_query("DELETE from tb_tugas_kuis where id='$xx'");
					if($sql!=0){
						header("Location: /kuliahkudotcom/view/forward.php");
					}
					else{
						echo'failed';
					}
				}
				?>