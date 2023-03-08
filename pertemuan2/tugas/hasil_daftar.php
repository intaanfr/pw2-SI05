<!DOCTYPE html>
<html>
<head>
	<title>Data Pendaftar</title>
	<!-- Load Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h2>Data Pendaftar</h2>
		<table class="table">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama Lengkap</th>
					<th>Email</th>
					<th>Alamat</th>
					<th>Telepon</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td>Intan Fitarani</td>
					<td>intanefitarani@gmail.com</td>
					<td>Bekasi</td>
					<td>+89602906150</td>
				</tr>

	<?php
	    
		$nomor=2;

        // Variable untuk menangkap data
        $nama = $_POST['nama_lengkap'];
        $email = $_POST['email'];
        $alamat = $_POST['alamat'];
        $telepon = $_POST['telepon'];

        // Tampilkan data variable
		echo '<td>' . $nomor;
        echo '<hr>';
        echo '<td>' . $nama;
        echo '<hr>';
        echo '<td>' . $email;
        echo '<hr>';
        echo '<td>' . $alamat;
        echo '<hr>';		
        echo '<td>' . $telepon;
        echo '<hr>';

	?>

			</tbody>
		</table>
	</div>
</body>
</html>