<!-- Task 1
	Rapihkan dan buatlah form agar bisa mengirim data
	Gunakan form request POST
-->
<!DOCTYPE html>
<html>
<head>
	<title>Form Pendaftaran</title>
	<!-- Load Bootstrap CSS from CDN -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

	<div>
		<form method="POST" action="hasil_daftar.php" class="form-horizontal w-75 mt-5 mx-auto p-4 border shadow-sm">
        <h2 align="center">Form Pendaftaran</h2>
        <hr>

        <div class="container px-3">
            <div class="form-group row mb-3">
				<label for="nama_lengkap"class="col-4 col-form-label">Nama Lengkap</label>
                <div class="col-7">
					<input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap" placeholder="Siapa nama anda?" required>
				</div>
			</div>
		</div>

		<div class="container px-3">
            <div class="form-group row mb-4">
				<label for="email"class="col-4 col-form-label">Email</label>
                <div class="col-7">
					<input type="text" class="form-control" name="email" id="email" placeholder="Masukan email anda" required>
				</div>
			</div>
		</div>

		<div class="container px-3">
			<div class="form-group row mb-4">
				<label for="alamat"class="col-4 col-form-label">Alamat</label>
                <div class="col-7">
					<textarea class="form-control"  name="alamat" id="alamat"placeholder="Masukan alamat anda" required></textarea>
				</div>
			</div>
		</div>

		<div class="container px-3">
			<div class="form-group row mb-4">
				<label for="telepon"class="col-4 col-form-label">Telepon</label>
                <div class="col-7">
					<input type="number" class="form-control" name="telepon" id="telepon" placeholder="Masukan no telepon anda" required> 
				</div>
			</div>
		</div>

			<div class="form-group row mb-3">
                <div class="offset-4 col-8">
                    <input type="submit" name="proses" value="Submit" class="btn btn-primary">
                </div>
		</div>
	</div>
	</form>
	</div>
</body>
</html>