<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="text-center">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span>Lengkapi Data Untuk Membeli Produk</h4>

        <!-- menampilkan notifikasi berhasil jika flash data memilik sukses -->
        <?php if ($this->session->flashdata('success')): ?>
            <div class="row">
                <div class="col-12">
                    <div class="alert alert-success">
                        <h4>Pembelian Anda Berhasil !!!</h4>
                        <h4>Silahkan Menunggu Barang Anda Diproses</h4>
                        <h4>Jika Anda Tidak Dihubungi Admin Dalam 1x24 Jam Maka Harap Melakukan Konfirmasi Dengan
                            Menyertakan Bukti Pembayaran Ke Nomor Berikut:</h4>
                        <h4>081234353212</h4>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <?php if ($this->session->flashdata('failed')): ?>
            <div class="row">
                <div class="col-12">
                    <div class="alert alert-danger">
                        <h4>Transaksi Anda Gagal !!!</h4>
                        <h4>Harap Lakukan Pembelian Ulang</h4>
                        <h4>Jika anda sudah melakukan pembayaran akan tetapi notifikasi ini tampil. Maka harap konfirmasi ke
                            admin disertakan bukti pembayaran ke nomor berikut:</h4>
                        <h4>081234353212</h4>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <!-- Basic Layout & Basic with Icons -->
        <div class="row">
            <!-- Basic Layout -->
            <div class="col-6 text-center">
                <img src="<?= base_url('./uploads/' . $produk->gambar) ?>" class="img-thumbnail w-50" alt="" srcset="">
            </div>
            <div class="col-6 text-center">
                <div class="card mb-4">
                    <div class="card-body">
                        <form action="<?= base_url("Produk/proses_beli/" . $produk->id_produk) ?>" method="POST"
                            enctype="multipart/form-data">
                            <div class="row mb-3">
                                <label class="col-sm-2" for="basic-default-name">Nama Produk</label>
                                <div class="col-sm-10">
                                    <input type="text" required class="form-control" value="<?= $produk->nama_produk ?>"
                                        readonly id="basic-default-name" name="nama_produk" placeholder="" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2" for="basic-default-name">Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" required class="form-control" id="basic-default-name"
                                        name="nama_pembeli" placeholder="" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2" for="basic-default-company">Alamat</label>
                                <div class="col-sm-10">
                                    <input type="text" required class="form-control" id="basic-default-company"
                                        name="alamat" placeholder="" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 " for="basic-default-name">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" required class="form-control" id="basic-default-name"
                                        name="email" placeholder="" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2" for="basic-default-company">No. Hp</label>
                                <div class="col-sm-10">
                                    <input type="text" required class="form-control" id="no_hp" name="no_hp"
                                        placeholder="" />
                                    <div class="invalid-feedback">
                                        hanya boleh diisi dengan angka!
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2" for="basic-default-company">Jumlah Pesanan</label>
                                <div class="col-sm-10">
                                    <input type="text" required class="form-control" id="jumlah_pesanan"
                                        name="jumlah_pesanan" placeholder="" />
                                    <div class="invalid-feedback">
                                        hanya boleh diisi dengan angka!
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-end">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Kirim</button>
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