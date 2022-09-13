 <!-- Masthead-->
 <header class="masthead">
 	<div class="container">
 		<div class="masthead-subheading">Sistem Informasi Approval</div>
 		<div class="masthead-heading text-uppercase">PT. Citra Warna Abadi</div>
 		<a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#profil">Lihat Detail</a>
 	</div>
 </header>

 <!-- profil-->
 <section class="page-section" id="profil">
 	<div class="container">
 		<div class="text-center">
 			<h2 class="section-heading text-uppercase">Profil</h2>
 			<h3 class="section-subheading text-muted">PT. Citra Warna Abadi</h3>
 		</div>
 		<div class="row text-justify pl-5 pr-5">
 			<p><?= $profil[0]['profile'] ?></p>
 		</div>
 	</div>
 </section>

 <!-- struktur -->
 <section class="page-section bg-light" id="struktur">
 	<div class="container">
 		<div class="text-center">
 			<h2 class="section-heading text-uppercase">Departemen</h2>
 			<h3 class="section-subheading text-muted">PT. Citra Warna Abadi</h3>
 		</div>
 		<div class="row">
 			<div class="col-lg-4 col-sm-6 mb-4">
 				<div class="portfolio-item">
 					<a class="portfolio-link" data-toggle="modal" href="#skelurahan">
 						<div class="portfolio-hover">
 							<div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
 						</div>
 						<img class="img-fluid" src="<?= base_url('/assets/galery/'); echo $profil[0]['s_kelurahan'] ?>"
 							alt="struktur-kelurahan" />
 					</a>
 					<div class="portfolio-caption">
 						<div class="portfolio-caption-heading">Formulir Departemen Warehouse,FC, PPIC</div>
 						<div class="portfolio-caption-subheading text-muted">Klik + lihat detail</div>
 					</div>
 				</div>
 			</div>
 			<div class="col-lg-4 col-sm-6 mb-4">
 				<div class="portfolio-item">
 					<a class="portfolio-link" data-toggle="modal" href="#slpm">
 						<div class="portfolio-hover">
 							<div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
 						</div>
 						<img class="img-fluid" src="<?= base_url('/assets/galery/'); echo $profil[0]['s_lpm'] ?>"
 							alt="struktur-LPM" />
 					</a>
 					<div class="portfolio-caption">
 						<div class="portfolio-caption-heading">Formulir Departemen Purchasing, Produksi, Lab</div>
 						<div class="portfolio-caption-subheading text-muted">Klik + lihat detail</div>
 					</div>
 				</div>
 			</div>
 			<div class="col-lg-4 col-sm-6 mb-4">
 				<div class="portfolio-item">
 					<a class="portfolio-link" data-toggle="modal" href="#slinmas">
 						<div class="portfolio-hover">
 							<div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
 						</div>
 						<img class="img-fluid" src="<?= base_url('/assets/galery/'); echo $profil[0]['s_linmas'] ?>"
 							alt="struktur-linmas" />
 					</a>
 					<div class="portfolio-caption">
 						<div class="portfolio-caption-heading">Formulir Departemem Technical, Accfintac, Sekre</div>
 						<div class="portfolio-caption-subheading text-muted">Klik + lihat detail</div>
 					</div>
 				</div>
 			</div>
 			<div class="col-lg-4 col-sm-6 mb-4">
 				<div class="portfolio-item">
 					<a class="portfolio-link" data-toggle="modal" href="#spemuda">
 						<div class="portfolio-hover">
 							<div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
 						</div>
 						<img class="img-fluid" src="<?= base_url('/assets/galery/'); echo $profil[0]['s_pemuda'] ?>"
 							alt="struktur-pemuda" />
 					</a>
 					<div class="portfolio-caption">
 						<div class="portfolio-caption-heading">Formulir Departemen HR, GA</div>
 						<div class="portfolio-caption-subheading text-muted">Klik + lihat detail</div>
 					</div>
 				</div>
 			</div>
 			<div class="col-lg-4 col-sm-6 mb-4">
 				<div class="portfolio-item">
 					<a class="portfolio-link" data-toggle="modal" href="#rtrw">
 						<div class="portfolio-hover">
 							<div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
 						</div>
 						<img class="img-fluid" src="<?= base_url('/assets/galery/'); echo $profil[0]['k_rtrw'] ?>"
 							alt="struktur-rtrw" />
 					</a>
 					<div class="portfolio-caption">
 						<div class="portfolio-caption-heading">Formulir Departemen IT, MTN</div>
 						<div class="portfolio-caption-subheading text-muted">Klik + lihat detail</div>
 					</div>
 				</div>
			 </div>
			 <div class="col-lg-4 col-sm-6 mb-4">
 				<div class="portfolio-item">
 					<a class="portfolio-link" data-toggle="modal" href="#rtrw">
 						<div class="portfolio-hover">
 							<div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
 						</div>
 						<img class="img-fluid" src="<?= base_url('/assets/galery/'); echo $profil[0]['k_rtrw'] ?>"
 							alt="struktur-rtrw" />
 					</a>
 					<div class="portfolio-caption">
 						<div class="portfolio-caption-heading">Formulir Departemen MT, QA</div>
 						<div class="portfolio-caption-subheading text-muted">Klik + lihat detail</div>
 					</div>
 				</div>
			 </div>

	<div class="container">
 		<div class="text-center">
			 <h2 class="section-heading text-uppercase">Info Pengajuan Formulir Ke Kepala Departemen</h2>
			 <h3 class="section-subheading text-muted">PT.Citra Warna Abadi</h3>
		</div>
		<div class="row text-justify pl-5 pr-5">
 			<p>Diberitahukan untuk melakukan Pengajuan Formulir dimohon untuk melengkapi data dengan benar dan 
				 berkas persyaratan untuk Pengajuan Formulir di Upload. Jika terdapat permasalahan dalam mengisi 
				 form approval dimohon kepada pengaju untuk datang langsung ke Departemen IT atau hubungi lewat Lan Massangger, 
				 atas perhatiannya terimakasih.</p>
			<div class="row text-aligncenter pl-6 pr-4">
				<p>
					<span> </span>
				</p>
			</div>
 		</div>
	</div>
		 
 		</div>
 	</div>
 </section>
