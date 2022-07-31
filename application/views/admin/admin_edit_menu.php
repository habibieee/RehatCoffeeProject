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
                                    <div class="card-title">Tambah Menu</div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <form class="col-md-6 col-lg-12" action="<?= base_url('admin/updateMenu') ?>" method="post">
                                        
                                            <div class="form-group form-group-default">
                                                <label>Nama Menu</label>
                                                <input value="<?= $menu['nama_menu'] ?>" id="Name" type="text" class="form-control" name="nama_menu" placeholder="Fill Name">
                                            </div>
                                            <div class="form-group form-group-default">
                                                <label>Kategori</label>
                                                <input value="<?= $menu['kategori_menu'] ?>" type="text" class="form-control" name="kategori_menu" placeholder="Fill Kategori">
                                            </div>
                                            <div class="form-group form-group-default">
                                                <label>Harga Menu</label>
                                                <input value="<?= $menu['harga_menu'] ?>" type="text" class="form-control" name="harga_menu" placeholder="Fill Price">
                                            </div>
                                            <div class="form-group form-group-default">
                                                <label>Deskripsi Menu</label>
                                                <input value="<?= $menu['deskripsi_menu'] ?>" type="text" class="form-control" name="deskripsi_menu" placeholder="Fill Deskription">
                                            </div>
                                            <div class="form-group form-group-default">
                                                <label>Gambar Menu</label>
                                                <input value="<?= $menu['gambar_menu'] ?>" type="text" class="form-control" placeholder="Fill Name" readonly>
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