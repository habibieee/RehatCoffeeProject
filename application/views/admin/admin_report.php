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
								<a href="#">Report</a>
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
													<th>no</th>
													<th>Nama Pegawai</th>
													<th>Tanggal Report</th>
													<th>file</th>
												</tr>
											</thead>
											<tfoot>
												<tr>
													<th>no</th>
													<th>Nama Pegawai</th>
													<th>Tanggal Report</th>
													<th>file</th>
												</tr>
											</tfoot>
											<tbody>
												<?php $no = 1; ?>
												<?php foreach ($report as $r) { ?>
													<tr>
														<td><?= $no ?></td>
														<td><?= $r['nama_report'] ?></td>
														<td><?= $r['tanggal_report'] ?></td>
														<td>
															<a href="<?= base_url('assets/report/') . $r['file_report'] ?>">
																<button class="btn btn-info">
																	<span class="btn-label">
																		<i class="fa fa-folder"></i>
																	</span>
																	Open
																</button>
															</a>

														</td>
													</tr>
												<?php $no++;
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