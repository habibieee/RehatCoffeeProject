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
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Table Menu</h4>
									<div class="mt-2">
										<a href="<?= base_url('admin/tambahMenu') ?>">
											<button class="btn btn-secondary">
												<span class="btn-label">
													<i class="fa fa-plus"></i>
												</span>
												Tambah Menu
											</button>
										</a>
									</div>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table id="basic-datatables" class="display table table-striped table-hover">
											<thead>
												<tr>
													<th>No</th>
													<th>Gambar Menu</th>
													<th>Nama Menu</th>
													<th>Katergori Menu</th>
													<th>Harga menu</th>
													<th>Deskripsi Menu</th>
													<th>Action</th>
												</tr>
											</thead>
											<tfoot>
												<tr>
													<th>No</th>
													<th>Gambar Menu</th>
													<th>Nama Menu</th>
													<th>Katergori Menu</th>
													<th>Harga menu</th>
													<th>Deskripsi Menu</th>
													<th>Action</th>
												</tr>
											</tfoot>
											<tbody>
												<?php $i = 1; ?>
												<?php foreach ($menu as $m) { ?>
													<tr>
														<td><?= $i; ?></td>
														<td><img class="m-1" style="max-width:70px ;" src="<?= base_url('assets/img/coffee/') . $m['gambar_menu'] ?>"></td>
														<td><?= $m['nama_menu']; ?></td>
														<td><?= $m['kategori_menu']; ?></td>
														<td><?= $m['harga_menu']; ?></td>
														<td><?= $m['deskripsi_menu']; ?></td>
														<td>
															<a href="<?= base_url('admin/editMenu/' . $m['id_menu']) ?> ">
																<button type="button" class="btn btn-icon btn-round btn-success">
																	<i class="fa fa-check"></i>
																</button>
															</a>
															<a href="<?= base_url('admin/hapusMenu/' . $m['id_menu']) ?>">
																<button type="button" id="displayNotif" class="btn btn-icon btn-round btn-danger">
																	<i class="fa fa-trash"></i>
																</button>
															</a>
														</td>
													</tr>
													<?php $i++ ?>
												<?php }; ?>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<footer class="footer">
				<div class="container-fluid">
					<nav class="pull-left">
						<ul class="nav">
							<li class="nav-item">
								<a class="nav-link" href="https://www.themekita.com">
									ThemeKita
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">
									Help
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">
									Licenses
								</a>
							</li>
						</ul>
					</nav>
					<div class="copyright ml-auto">
						2018, made with <i class="fa fa-heart heart text-danger"></i> by <a href="https://www.themekita.com">ThemeKita</a>
					</div>
				</div>
			</footer>
		</div>