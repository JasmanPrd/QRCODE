<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="<?php echo base_url() ?>/public/img/kkp.png">

	<title>KKP Satu Data</title>


	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<!-- Custom styles for this template -->
	<link href="form-validation.css" rel="stylesheet">
</head>

<body class="bg-light">

	<div class="container">
		<div class="py-5 text-center">
			<img class="d-block mx-auto mb-4" src="<?php echo base_url() ?>/public/img/kkp.png" alt="" width="72" height="72">
			<h2>QRCode KKP Satu Data</h2>
		</div>
		<div class="row">
			<div class="col-md-8 m-auto">
				<h4 class="mb-3">QR Identitas dan Informasi tambahan kartu KUSUKA</h4>
				<?php if (session()->getFlashdata('sukses')) { ?>
					<div class="alert alert-success" role="alert">
						<?= session()->getFlashdata('sukses'); ?>
					</div>
				<?php } ?>
				<?= $validation->listErrors(); ?>
				<form class="needs-validation" novalidate method="POST" action="<?= base_url('Home/create') ?>">
					<?= csrf_field(); ?>
					<div class="row">
						<div class="col-md-6 mb-3">
							<label for="tempat">Tempat Lahir</label>
							<input type="text" class="form-control" name="tempat" placeholder="Bandung" value="" required>
							<div class="invalid-feedback">
								Mohon Masukkan tempat lahir.
							</div>
						</div>
						<div class="col-md-6 mb-3">
							<label for="tanggal">Tanggal Lahir</label>
							<input type="date" class="form-control" name="tgl-lahir" value="" required>
							<div class="invalid-feedback">
								Mohon masukkan tanggal lahir mm/dd/yyyy.
							</div>
						</div>
					</div>

					<div class="mb-3">
						<label for="profesi">Profesi</label>
						<input type="text" class="form-control" name="profesi" placeholder="Nelayan" value="" required>
						<div class="invalid-feedback">
							Mohon Masukkan profesi.
						</div>
					</div>

					<div class="mb-3">
						<label for="thn-pendaftaran">Tahun Pendaftaran</label>
						<input type="number" class="form-control" name="thn-pendaftaran" placeholder="2020" value="" required>
						<div class="invalid-feedback">
							Mohon Masukkan tahun pendaftaran.
						</div>
					</div>

					<div class="mb-3">
						<label for="nohp">No Telepon</label>
						<input type="number" class="form-control" name="nohp" placeholder="082xxxxxx" value="" required>
						<div class="invalid-feedback">
							Mohon Masukkan no telepon yang aktif.
						</div>
					</div>

					<div class="mb-3">
						<label for="sarana">Sarana/Prasarana Produksi</label>
						<textarea rows="5" cols="80" class="form-control" placeholder="Masukkan sarana/prasarana yang digunakan" name="sarana" value="" required></textarea>
						<div class="invalid-feedback">
							Mohon Masukkan sarana/prasarana yang digunakan.
						</div>
					</div>


					<hr class="mb-4">
					<button class="btn btn-primary btn-lg btn-block" type="submit">Generate</button>
				</form>
			</div>
		</div>

		<footer class="my-5 pt-5 text-muted text-center text-small">
			<p class="mb-1">&copy; 2021 Satu Data KKP</p>
			<ul class="list-inline">
				<li class="list-inline-item"><a href="#">Privacy</a></li>
				<li class="list-inline-item"><a href="#">Terms</a></li>
				<li class="list-inline-item"><a href="#">Support</a></li>
			</ul>
		</footer>
	</div>

	<!-- Bootstrap core JavaScript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script>
		// Example starter JavaScript for disabling form submissions if there are invalid fields
		(function() {
			'use strict';

			window.addEventListener('load', function() {
				// Fetch all the forms we want to apply custom Bootstrap validation styles to
				var forms = document.getElementsByClassName('needs-validation');

				// Loop over them and prevent submission
				var validation = Array.prototype.filter.call(forms, function(form) {
					form.addEventListener('submit', function(event) {
						if (form.checkValidity() === false) {
							event.preventDefault();
							event.stopPropagation();
						}
						form.classList.add('was-validated');
					}, false);
				});
			}, false);
		})();
	</script>
</body>

</html>