<html>
<head>
	<title>Sistem Pakar</title>
</head>
<body>
	<center>
		<h1>SELAMAT DATANG DI MENU USER</h1>
		<h4><u>SILAHKAN JAWAB PERTANYAAN DIBAWAH</u></h4>
		<form action="proses.php" method="POST">
		<table>
			<tr>
				<td align="center" colspan="2">
				<?php 
					session_start();
					include('../koneksi.php');
					$no = $_SESSION['no'];
					$query = mysqli_query($konek, "SELECT * FROM SOAL where no = '$no' ");
					$data = mysqli_fetch_array($query);
					echo $no.'.';
					echo $data['pertanyaan'];
				 ?>
				</td>
			</tr>
			<tr>
				<td align="center">
					<input type="radio" name="jawaban" value="ya">YA
				</td>
				<td align="center">
					<input type="radio" name="jawaban" value="tidak">TIDAK
				</td>
			</tr>
		</table>
		<input type="submit" name="simpan" value="SIMPAN">
		</form>
	</center>
</body>
</html>