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
								<a href="#">Pegawai</a>
							</li>
						</ul>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Table Pegawai</h4>
									<div class="mt-2">
										<a href="<?= base_url('auth/registrasi') ?>">
											<button class="btn btn-secondary">
												<span class="btn-label">
													<i class="fa fa-plus"></i>
												</span>
												Tambah Pegawai
											</button>
										</a>
									</div>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table id="basic-datatables" class="display table table-striped table-hover">
											<thead>
												<tr>
													<th>Nama Pegawai</th>
													<th>Email Pegawai</th>
													<th>Role User</th>
													<th>Tanggal</th>
													<th>Action</th>
												</tr>
											</thead>
											<tfoot>
												<tr>
													<th>Nama Pegawai</th>
													<th>Email Pegawai</th>
													<th>Role Pegawai</th>
													<th>Tanggal Register</th>
													<th>Action</th>
												</tr>
											</tfoot>
											<tbody>
												<?php $x = 1; ?>
												<?php foreach ($pegawai as $p) { ?>
													<tr>
														<td><?= $p['nama_user'] ?></td>
														<td><?= $p['email_user'] ?></td>
														<td><?= $p['role_user'] ?></td>
														<td><?= $p['tanggal_user']?></td>
														<td><a href="<?= base_url('admin/pegawaiHapus/') . $p['id_user']; ?>">
																<button type="button" class="btn btn-icon btn-round btn-danger">
																	<i class="fa fa-trash"></i>
																</button>
															</a>
														</td>
													</tr>
												<?php } ?>
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