<script>
function mydate()
{
  //alert("");
document.getElementById("dt").hidden=false;
document.getElementById("ndt").hidden=true;
}
function mydate1()
{
 d=new Date(document.getElementById("dt").value);
dt=d.getDate();
mn=d.getMonth();
mn++;
yy=d.getFullYear();
document.getElementById("ndt").value=yy+"-"+mn+"-"+dt
document.getElementById("ndt").hidden=false;
document.getElementById("dt").hidden=true;
}</script>
      <div class="" id="u1132"><!-- image -->
		<form method="post" action="/kuliahkudotcom/controller/input.php">
		<center>
		<div class="clearfix colelem" id="u1132" >
                        <div>
                            <div class="clearfix grpelem"  id="u1469">
                                <!-- simple frame -->
                                <div class="clearfix grpelem"  id="u1469" style="width:382px; heigth:32px">
                                    <input type="text" name="judul"  style="font-size:20px; background-color:#CCC; padding:10px 0 10px 20px; color:#FFF;" value="INPUT NILAI" readonly="readonly"/>
                                </div>
                            </div>
                        </div>
                    </div>
      		<div class="clearfix colelem" id="u1132" >
                        <div>
                            <div class="clearfix grpelem"  id="u1469">
                                <!-- simple frame -->
                                <div class="clearfix grpelem"  id="u1469" style="width:382px; heigth:32px">
                                    <input type="text" name="nim"  style="font-size:20px; background-color:#333; padding:10px 0 10px 10px; color:#FFF;" placeholder="NIM..."/>
                                </div>
                            </div>
                        </div>
                    </div>
					<div class="clearfix colelem" id="u1132">
                        <div>
                            <div class="clearfix grpelem" id="u1469">
                                <!-- simple frame -->
                                <div class="clearfix grpelem" id="u1469" style="width:382px; heigth:32px">
                                    
                                  <input type="date" name="pertemuan" style="font-size:20px; background-color:#333; padding:10px 0 10px 10px; color:#FFF; font-size:20px;" id="dt" onchange="mydate1();" hidden/>
<input type="text" id="ndt"  onclick="mydate();" hidden />
<input type="button" Value="Date" onclick="mydate();" />
                                  </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix colelem" id="u1132">
                        <!-- group -->
                        <!-- rasterized frame -->
                        <div class="clearfix grpelem" id="u1469">
                          <div class="clearfix grpelem" id="u1469" style="width:382px; heigth:32px">
                                <select id="combobox123" name="tipe" style="font-size:20px; background-color:#333; padding:10px 0 10px 10px; color:#FFF;" style="font-size:20px;" >
                              <option value="">tipe jawaban</option>
                              <option value="kuis">Kuis</option>
                      <option value="tugas">Tugas</option>
                            </select>
                            </div>
                        </div>
                        
                    </div>
					<div class="clearfix colelem" id="u1132">
                        <div>
                            <div class="clearfix grpelem" id="u1469">
                                <!-- simple frame -->
                                <div class="clearfix grpelem" id="u1469" style="width:382px; heigth:32px">
                                    <input type="text" name="nilai" style="font-size:20px; background-color:#333; padding:10px 0 10px 10px; color:#FFF;" style="font-size:20px;" placeholder="Nilai..."/>
                                </div>
                            </div>
                        </div>
                    </div> 

					<div class="clearfix colelem" id="u1132">
                        <div>
                            <div class="clearfix grpelem" id="u1469">
                                <!-- simple frame -->
                                <div class="clearfix grpelem" id="u1469" style="width:382px; heigth:32px">
                                    <input type="submit" name="inputnilai" style="font-size:20px; background-color:#5AC; padding:10px 10px 10px 10px; color:#FFF;" style="font-size:20px;" />
                                </div>
                            </div>
                        </div>
                    </div> 
					
					</center>
					</form>
      </div>
     
     </div>
     <div class="clearfix grpelem" id="pu1138"><!-- column -->
     </div>
     <div class="clearfix grpelem" id="u1064"><!-- column -->
     <div class="clip_frame colelem" id="u1205"><!-- image -->
	    <?php echo'<img class="block" id="u1205_img" src="'.$_SESSION['path'].'" alt="Profile Image" width="213" height="213"/>';?>
      </div>
      <p style="font-size:20px;color:#FFF;margin-top:30px;" alt="Nama:" id="u609-4" class="colelem"> <?php echo $_SESSION['nama'];?></p>
         <!-- rasterized frame -->
      <p style="font-size:20px;color:#FFF;margin-top:30px;" alt="NIP:" id="u610-4" class="colelem"> <?php echo $_SESSION['id'];?></p>
      <!-- rasterized frame -->
      <p style="font-size:20px;color:#FFF;margin-top:30px;" alt="Email:" id="u611-4" class="colelem"> <?php echo $_SESSION['mail'];?></p>
      <!-- rasterized frame -->
      <div class="clearfix colelem" id="pu1215"><!-- group -->
       <div class="clip_frame grpelem" id="u1215"><!-- image -->
       </div>
       </div>
     </div>
     <div class="grpelem" id="u1192"><!-- image --></div>
    </div>
    