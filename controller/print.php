<html>
<body>
<table class="table" width="100%" border="1px solid #FFF"  cellpadding="3" cellspacing="0">
            	<tr>
					<th bgcolor="blue">Tanggal <//th>
                	<th bgcolor="blue" >Nim</th>
                    <th bgcolor="blue" >Nilai Tugas</th>
                    <th bgcolor="blue" >Nilai Kuis</th>
					<th bgcolor="blue">keterangan</th>
                </tr>
                <?php
				include('config.php');
				$date=$_GET['tanggal'];
				$sql = mysql_query("SELECT p.tanggal, n.nim,n.score,t.status  FROM tb_pertemuan p, tb_trans_kehadiran t, tb_nilai n where p.tanggal='$date' and p.tanggal = t.tanggal_pertemuan and t.tanggal_pertemuan = n.tanggal ");
				$sqlkuis = mysql_query("SELECT p.tanggal, n.nim,n.score,t.status  FROM tb_pertemuan p, tb_trans_kehadiran t, tb_nilai n where n.keterangan ='kuis' and p.tanggal='$date' and p.tanggal = t.tanggal_pertemuan and p.tanggal = n.tanggal ");
				$sqltugas = mysql_query("SELECT p.tanggal, n.nim,n.score,t.status  FROM tb_pertemuan p, tb_trans_kehadiran t, tb_nilai n where n.keterangan ='tugas' and p.tanggal='$date' and p.tanggal = t.tanggal_pertemuan and p.tanggal = n.tanggal ");
				$qq= mysql_query("select * from tb_trans_kehadiran");
				if(mysql_num_rows($qq) > 0){
					$no = 1;
					while($d = mysql_fetch_assoc($qq)){
						$data = mysql_fetch_assoc($sql);
						$datakuis = mysql_fetch_assoc($sqlkuis);
						$datatugas = mysql_fetch_assoc($sqltugas);
						echo '
						<tr bgcolor="#fff">
							<td align="center">'.$data['tanggal'].'</td>
							<td align="center">'.$data['nim'].'</td>
							<td align="center">'.$datatugas['score'].'</td>
							<td align="center">'.$datakuis['score'].'</td>
							<td align="center">'.$data['status'].'</td>
						</tr>
						';
						$no++;
					}
				}else{
					echo '
					<tr bgcolor="#fff">
						<td align="center" colspan="9" align="center">Tidak ada data!</td>
					</tr>
					';
				}
				?>
            </table><br><br><br>
</body>
</html>