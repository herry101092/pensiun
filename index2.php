<html>
<head><title>Masa Kerja Pegawai</title></head>
<body>
	<style>
	body {background-image: url("http://3.bp.blogspot.com/-Na6ga3XEBos/VcgzYukWqzI/AAAAAAAAAVY/RCclSwmYtl0/s1600/MOTIF%2BLORENG%2BEDIT%2Bweb.jpg");}
	</style>
<form action="index2" method="post">
<table border="4" bgcolor="linear-gradient(45deg, rgb(0, 123, 255), rgb(252, 0, 255)" align="center" height="500" width="400" cellpadding="20">
<tr>
<td>
<center><b><font color="white" size="5"> Hitung Masa Kerja Anda </font></b></center>

					<p><b><font color="white"> Pangkat </b></p>
					<select name="Pangkat">
					<option>-Pangkat-</option>
					<option value="prada">prada</option>
					<option value="pratu">pratu</option>
					<option value="praka">praka</option>
					<option value="kopda">kopda</option>
					<option value="koptu">koptu</option>
					<option value="kopka">kopka</option>
					<option value="serda">serda</option>
					<option value="sertu">sertu</option>
					<option value="serka">serka</option>
					<option value="serma">serma</option>
					<option value="pelda">pelda</option>
					<option value="peltu">peltu</option>
					<option value="Letda">Letda</option>
					<option value="Lettu">Lettu</option>
					<option value="kapten">kapten</option>
					<option value="Mayor">Mayor</option>
					<option value="Letkol">Letkol</option>
					<option value="Kolonel">Kolonel</option>
					<option value="IIa">IIa</option>
					<option value="IIb">IIb</option>
					<option value="IIc">IIc</option>
					<option value="IId">IId</option>
					<option value="IIIa">IIIa</option>
					<option value="IIIb">IIIb</option>
					<option value="IIIc">IIIc</option>
					<option value="IIId">IIId</option>
					</select><br>

					<p><b> Nama Lengkap </b></p>
					<input type="text" name="namalengkap" size="46" placeholder="Nama Lengkap">
					
					<p><b> NRP/NIP </b></p>
					<input type="text" Name="NRP" size="46" placeholder="NRP/NIP"><br><br>

					<p><b> Tanggal Lahir </b></p>
					<input type="text" name="tanggal" placeholder="Format YYYY-MM-DD" size="46"></br></br>

<br><center><input value="HITUNG" style="background-color: 4985D0; height: 50; width: 150;"type="submit" name= "submit" ></center></a></br>

					<?php
					if(isset($_POST['submit'])){
											$namalengkap = $_POST['namalengkap'];
											$Pangkat = $_POST['Pangkat'];
											$NRP = $_POST['NRP'];

					$joining_date = $_POST['tanggal'];
					$timeToAdd = "+ 53 years";
					$objDateTime = DateTime::createFromFormat("Y-m-d",$joining_date);
					$objDateTime->modify($timeToAdd);
					$retire_date = date('d-m-Y', strtotime($joining_date));
					$sekarang = date('Y');
					$sisa = $objDateTime->format("Y") - $sekarang;


					echo "<b><br><center>DATA PENSIUN ANDA </b></center></br>";
					echo "$namalengkap </br>";
					echo "$Pangkat</br>"; 
					echo "$NRP </br>";
					echo "Tanggal Lahir = $retire_date</br>";
					print_r('Masa Aktif Bekerja Sampai = ');print_r($objDateTime->format("d-m-Y"));
					echo "</br>";
					echo "Masa Dinas Aktif = $sisa Tahun lagi</br>";
					}


					?>
 </li>
</td>
</tr>

</body>
</html>