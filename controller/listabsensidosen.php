<?php
				include('../controller/config.php');
				$sql = mysql_query("SELECT * from tb_mahasiswa");
				if(mysql_num_rows($sql) > 0){
					$no = 1;
					while($data = mysql_fetch_assoc($sql)){
						$nim = $data['nim'];
						$cektrans = mysql_query("SELECT * from tb_trans_kehadiran where nim ='$nim'");
						while($datakehadiran = mysql_fetch_assoc($cektrans)){
						$cekpertemuan = mysql_query("SELECT * FROM tb_pertemuan");
						$pertemuan = mysql_num_rows($cekpertemuan);
						$kehadiran = mysql_num_rows($cektrans);
						$persen = ($kehadiran/$pertemuan) *100;
					echo '
						<tr bgcolor="#fff">
							<td align="center">'.$datakehadiran['nim'].'</td>
							<td align="center">'.$data['nama'].'</td>
							<td align="center">'.$kehadiran.'</td>
							<td align="center">'.$pertemuan.'</td>
							<td align="center">'.$persen.' %</td>
						</tr>
						';
						$no++;
					}
					}
				}else{
					echo '
					<tr bgcolor="#fff">
						<td align="center" colspan="9" align="center">Tidak ada data!</td>
					</tr>
					';
				}
				
				?>