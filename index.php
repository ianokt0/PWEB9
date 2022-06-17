<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Pertemuan 9</title>
</head>
<body>
<table align="center">
	<tr align="center">
		<td>
			<div id="kotak1">
				<div id="kotak-conten">
					<div id="kotak-tittle">
						<h2>Masukkan Nama</h2>
					</div>
					<table align="center">
						<form class="form" name="form1" method="get" action="index.php"/>
							<label>
								<input type="text" name="kal" id="kal" required placeholder="Masukan Kalimat"/></label>
								<tr>
									<td align="center">
										<label>
											<input type="submit" name="button" id="submit-btn" value="proses" align="center"/>
										</label>
									</td>
								</tr>
							</form>
					</table>
				</div>
			</div>
		</td>
		<td>
			<div id="kotak2">
				<div id="kotak-content">
					<div class="data1">
						Kalimat yang di inputkan
					</div>
					<br><br>
					<div class="data2">
						<?php 
						$x = $_GET['kal'];
						$kalimat =$x;
						$jumlah=strlen($kalimat);
						print "$kalimat";

						?>
					</div>
					<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
					
					<div class="data3">
						<?php 
						$x =$_GET['kal'];
						$kalimat = $x;
						$jumlah=strlen($kalimat);
						print "Banyak karakter : $jumlah karakter<br>";
						?>						
					</div>
					<div>
						<?php
						echo "Tanggal dibuat : ". date("1"). ", ".date("d-m-Y").", ".date("h:i:s a"). " Waktu Setempat";
						 ?>
						
					</div>
				</div>
			</div>
		</td>
	</tr>
</table>
</body>
</html>