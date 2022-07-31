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
								<a href="#">Penjualan</a>
							</li>
						</ul>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Table Penjualan</h4>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table id="basic-datatables" class="display table table-striped table-hover">
											<thead>
												<tr>
													<th>#</th>
													<th>No Kasir</th>
													<th>Atas Nama</th>
													<th>Harga Total</th>
													<th>Tanggal</th>
													<th>Status</th>
												</tr>
											</thead>
											<tfoot>
												<tr>
													<th>#</th>
													<th>No Kasir</th>
													<th>Atas Nama</th>
													<th>Harga Total</th>
													<th>Tanggal</th>
													<th>Status</th>
												</tr>
											</tfoot>
											<tbody>
												<?php $i = 1; ?>
												<?php foreach ($penjualan as $p) { ?>
													<tr>
														<td> <?= $i ?></td>
														<td><?= $p['id_kasir'] ?></td>
														<td><?= $p['nama_pemesanan'] ?></td>
														<td><?= $p['total_harga'] ?></td>
														<td><?= $p['tanggal_pemesanan'] ?></td>
														<td><?= $p['status'] ?></td>
													</tr>
												<?php $i++;
												} ?>

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