<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style>
	body{
		background-image: url("../img/background.jpg");
	}
</style>
<body>
	
<section class="page-section">
	<div class="container">
		<?php if ($this->session->flashdata('message') == TRUE) : ?>
		<?= $this->session->flashdata('message'); ?>
		<?php endif; ?>
		<div class="text-center">
			<h2 class="section-heading text-uppercase">Tracking Pengajuan Formulir</h2>
			<h3 class="section-subheading text-muted">Masukkan ID Formulir untuk di<b>Track</b>:</h3>
		</div>
		<div class="text-justify pl-5 pr-5">
			<div class="row justify-content-center">
				<div class="col-12 col-md-10 col-lg-8">
					<?= form_open('tracking/cari', 'id="tracking", class="card card-sm"') ?>
					<div class="card-body row no-gutters align-items-center">
						<div class="col-auto">
							<i class="fas fa-search h4 text-body"></i>
						</div>
						<!--end of col-->
						<div class="col">
							<input class="form-control form-control-lg form-control-borderless" type="search"
								name="trackid" placeholder="Masukkan ID Pengajuan Anda">
						</div>
						<!--end of col-->
						<div class="col-auto">
							<button class="btn btn-lg btn-success" type="submit">Cari</button>
						</div>
						<!--end of col-->
					</div>
					<?= form_close()?>
				</div>
				<!--end of col-->
			</div>
		</div>
	</div>
</section>

<section class="page-section">
</section>

</body>
</html>

