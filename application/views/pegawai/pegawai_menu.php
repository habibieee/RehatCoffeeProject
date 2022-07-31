		<div class="main-panel">
			<div class="content">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">Penjualan RehatCoffeeShop</h4>
						<ul class="breadcrumbs">
							<li class="nav-home">
								<a href="#">
									<i class="flaticon-home"></i>
								</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="#">Pendataan CoffeeShop</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="#">Menu</a>
							</li>
						</ul>
					</div>
					<div class="row">
						<?php foreach ($menu as $m) { ?>
							<div class="col-xl-4 col-md-6 mb-4">
								<div class="card border-left-primary shadow h-100 py-2">
									<div class="card-body">
										<div class="row no-gutters align-items-center">
											<div class="col mr-2">
												<div>
													<h3><?= $m['nama_menu']; ?></h3>
												</div>
												<div class="tetxt-xs font-weight-bold text-gray-800"><?= $m['harga_menu']; ?></div>
												<div><?= $m['deskripsi_menu']; ?></div>
											</div>

											<div class="col-auto">
												<img src="<?= base_url('assets/img/coffee/') . $m['gambar_menu'] ?>" style="max-width:250px ; max-height:160px ;" class="img-thumbnail">
											</div>
										</div>
										<a href="<?= base_url('pegawai/detaiMenu/').$m['id_menu'] ?>">
											<button type="button" class="btn btn-icon btn-round btn-success mt-3">
												<i class="fas fa-shopping-cart"></i>
											</button>
										</a>
									</div>
								</div>
							</div>
						<?php } ?>