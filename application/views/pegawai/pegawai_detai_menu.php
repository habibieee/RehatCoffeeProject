        <div class="main-panel">
            <div class="content">
                <div class="page-inner">
                    <div class="page-header">
                        <h4 class="page-title">Penjualan RehatCoffeeShop </h4>
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
                            <li class="separator">
                                <i class="flaticon-right-arrow"></i>
                            </li>
                            <li class="nav-item">
                                <a href="#">Tambah Menu</a>
                            </li>
                        </ul>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">Detail Pemesanan</div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <form class="col-md-6 col-lg-12" action="<?= base_url('pegawai/uploadDetail') ?>" method="post">
                                            <input type="hidden" name="tanggal" value="<?= date('Y/m/d') ?>">
                                            <input type="hidden" name="id_menu" value="<?= $menu['id_menu'] ?>">
                                            <div class="form-group form-group-default">
                                                <label>Nama Menu</label>
                                                <input value="<?= $menu['nama_menu'] ?>" id="Name" type="text" class="form-control" name="nama_menu" placeholder="Fill Name" readonly>
                                            </div>
                                            <div class="form-group form-group-default" hidden>
                                                <label>Nama Menu</label>
                                                <input value="<?= $user['id_user'] ?>" id="Name" type="text" class="form-control" name="id_user" placeholder="Fill Name" readonly>
                                            </div>
                                            <div class="form-group form-group-default">
                                                <label>Kategori</label>
                                                <input value="<?= $menu['kategori_menu'] ?>" type="text" class="form-control" name="kategori_menu" placeholder="Fill Kategori" readonly>
                                            </div>
                                            <div class="form-group form-group-default">
                                                <label>Harga Menu</label>
                                                <input id="harga_menu" value="<?= $menu['harga_menu'] ?>" type="text" class="form-control" name="harga_menu" placeholder="Fill Price" readonly>
                                            </div>
                                            <div class="form-group form-group-default">
                                                <label>Jumlah </label>
                                                <input type="number" min="1" class="form-control" id="jumlah_menu" name="jumlah" placeholder="Fill Jumlah">
                                            </div>

                                            <div class="form-group form-group-default">
                                                <label>Total</label>
                                                <input type="text" class="form-control" id="total" name="total" placeholder="Fill Name" readonly>
                                            </div>
                                            <div class="form-group form-group-default" hidden>
                                                <label>Total</label>
                                                <input type="text" class="form-control" id="status" name="status" value="dipesan" placeholder="Fill Name">
                                            </div>
                                            <button class="btn btn-success float-right m-2" id="tambah" type="submit">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>