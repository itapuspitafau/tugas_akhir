<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span>Data Pesanan </h4>
        <a href="<?= base_url("DataPesanan/eksport") ?>" class="btn mb-4 btn-danger">Eksport</a>

        <!-- Basic Bootstrap Table -->
        <div class="card">
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Kode Transaksi</th>
                            <th>Nama Pembeli</th>
                            <th>No.HP</th>
                            <th>Nama Produk</th>
                            <th>Jumlah Produk</th>
                            <th>total bayar</th>
                            <th>status</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        <tr>
                            <?php
                            $no = 1;
                            foreach ($pesanan as $p) {
                                ?>
                                <td>
                                    <?php echo $p->id_transaksi ?>
                                </td>
                                <td>
                                    <?php echo $p->nama_pembeli ?>
                                </td>
                                <td>
                                    <?php echo $p->no_hp ?>
                                </td>
                                <td>
                                    <?php echo $p->nama_produk ?>
                                </td>
                                <td>
                                    <?php echo $p->jmlh_produk ?>
                                </td>
                                <td>
                                    <?php echo $p->total_bayar ?>
                                </td>
                                <td>
                                    <?php echo $p->status ?>
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="<?= base_url("DataPesanan/detail") ?>"><i
                                                    class="bx me-1"></i>Detail Pesanan</a>
                                            <a class="dropdown-item" href="javascript:void(0);"><i class="bx me-1"></i>
                                                Edit</a>
                                            <a class="dropdown-item"
                                                href="<?= base_url("DataPesanan/hapus/" . $p->id_transaksi) ?>"><i
                                                    class="bx me-1"></i>
                                                Delete</a>
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