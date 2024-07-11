<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span>Tambah Produk</h4>

        <!-- Basic Layout & Basic with Icons -->
        <div class="row">
            <!-- Basic Layout -->
            <div class="col-xxl">
                <div class="card mb-4">

                    <div class="card-body">
                        <form action="<?= base_url("ProdukAdmin/update/" . $produk->id_produk) ?>" method="POST"
                            enctype="multipart/form-data">
                            <div class="row mb-3">
                                <label class="col-sm-2" for="basic-default-name">Nama Produk</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="basic-default-name"
                                        value="<?= $produk->nama_produk ?>" name="nama_produk" placeholder=""
                                        required />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2" for="basic-default-company">Deskripsi</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="basic-default-company"
                                        value="<?= $produk->deskripsi ?>" name="deskripsi" placeholder="" required />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 " for="basic-default-name">Harga Produk</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="basic-default-name"
                                        value="<?= $produk->harga_produk ?>" name="harga_produk" placeholder=""
                                        required />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2" for="basic-default-company">Stok Produk</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="basic-default-company"
                                        value="<?= $produk->stok_produk ?>" name="stok_produk" placeholder=""
                                        required />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 " for="basic-default-company">Gambar Produk</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" id="basic-default-company" name="gambar"
                                        placeholder="" />
                                </div>
                            </div>
                            <div class="row justify-content-end">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Send</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Basic with Icons -->

        </div>
        <!-- / Content -->


        <div class="content-backdrop fade"></div>
    </div>
    <!-- Content wrapper -->