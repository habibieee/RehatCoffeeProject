        <div class="main-panel">
            <div class="content">
                <div class="page-inner">
                    <div class="page-header">
                        <h4 class="page-title">Forms</h4>
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
                                <a href="#">Forms</a>
                            </li>
                            <li class="separator">
                                <i class="flaticon-right-arrow"></i>
                            </li>
                            <li class="nav-item">
                                <a href="#">Basic Form</a>
                            </li>
                        </ul>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <form class="col-md-6 col-lg-12" action="<?= base_url('pegawai/uploadPenjualan') ?>" method="post">
                                    <div class="card-header">
                                        <div class="card-title">Basic Table</div>
                                    </div>
                                    <div class="card-body">
                                        <table class="table mt-3">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Nama Menu</th>
                                                    <th scope="col">Jumlah</th>
                                                    <th scope="col">id user</th>
                                                    <th scope="col">Harga</th>
                                                    <th scope="col">Kategori</th>
                                                    <th scope="col">Sa</th>
                                                </tr>
                                            </thead>
                                            <?php

                                            $i = 1;
                                            $total_bayar = 0;
                                            ?>
                                            <?php foreach ($kasir as $k) { ?>
                                                <tbody>
                                                    <tr>
                                                        <td><?= $i ?></td>
                                                        <td><?= $k['nama_menu'] ?></td>
                                                        <td><?= $k['jumlah'] ?></td>
                                                        <td><?= $k['id_user'] ?></td>
                                                        <td><?= $k['total'] ?></td>
                                                        <td hidden><?= $total_bayar += $k['total']; ?></td>
                                                        <td><?= $k['kategori_menu'] ?></td>
                                                        <td><?= $k['status'] ?></td>
                                                    </tr>
                                                </tbody>
                                                <?php $i++ ?>
                                            <?php } ?>
                                        </table>
                                    </div>
                                    <div class="card-header">
                                        <div class="card-title">Kasir </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">

                                            <div class="form-group form-group-default">
                                                <label>Atas Nama</label>
                                                <input id="Name" name="nama_pembeli" type="text" class="form-control" placeholder="Fill Name">
                                                <input hidden id="id_kasir" name="id_user" type="text" value="<?= $k['id_user']; ?>" class="form-control" placeholder="Fill Name ">
                                                <input hidden id="id_kasir" name="id_kasir" type="text" value="<?= $k['id_kasir']; ?>" class="form-control" placeholder="Fill Name ">
                                                <input hidden id="tanggal" name="tanggal" type="text" value="<?= $k['tanggal']; ?>" class="form-control" placeholder="Fill Name ">
                                            </div>

                                            <div class="form-group form-group-default">
                                                <label>Harga total </label>
                                                <label>
                                                    <h3></h3><strong><?= 'Rp' ?></strong>
                                                </label>
                                                <input id="Total" name="total" type="text" class="form-control" value="<?= $total_bayar; ?>" placeholder="Fill Name" readonly>
                                            </div>


                                            <button class="btn btn-success m-2" type="submit">Submit</button>
                                            <button class="btn btn-danger">Cancel</button>

                                </form>
                            </div>

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

        </div>