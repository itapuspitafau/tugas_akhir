<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span> Daftar Produk</h4>

        <!-- Basic Bootstrap Table -->
        <div class="card">
            <h5 class="card-header">
                <a href="<?= base_url("ProdukAdmin/tambah") ?>" class="btn btn-danger">Tambah</a>

            </h5>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                        <tr>
                            <td><strong>Nama Produk</strong></td>
                            <td><strong>Gambar Produk</strong></td>
                            <td><strong>Deskripsi</strong></td>
                            <td><strong>Harga Produk</strong></td>
                            <td><strong>Stok Produk</strong></td>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        <tr>
                            <?php
                            $no = 1;
                            foreach ($produk as $p) {
                                ?>
                                <td>
                                    <?php echo $p->nama_produk ?>
                                </td>
                                <td>
                                    <img src="<?php echo "./uploads/" . $p->gambar ?>" class="w-25">
                                </td>
                                <td>
                                    <?php echo $p->deskripsi ?>
                                </td>
                                <td>
                                    <?php echo $p->harga_produk ?>
                                </td>
                                <td>
                                    <?php echo $p->stok_produk ?>
                                </td>

                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item"
                                                href="<?= base_url("ProdukAdmin/edit/" . $p->id_produk) ?>"><i
                                                    class="bx bx-edit-alt me-1"></i> Edit</a>
                                            <a class="dropdown-item"
                                                href="<?= base_url("ProdukAdmin/hapus/" . $p->id_produk) ?>"><i
                                                    class="bx bx-trash me-1"></i> Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!--/ Basic Bootstrap Table -->





        <hr class="my-5" />





        <div class="content-backdrop fade"></div>
    </div>
    <!-- Content wrapper -->