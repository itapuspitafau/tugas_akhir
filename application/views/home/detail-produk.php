<div class="container-fluid">
    <div class="row">
        <div class="col-5 mt-5 text-center ">

            <img src="<?= base_url('./uploads/' . $produk->gambar) ?>" style="width: 50%" alt="" srcset="">
        </div>
        <div class="col-6 mt-5">
            <h3>
                <?= $produk->nama_produk ?>
            </h3>
            <p>
                <?= $produk->deskripsi; ?>
            </p>
            <a href="<?= base_url("produk/beli/$produk->id_produk") ?>" class="btn btn-success">Beli</a>
            <div class="mt-3">
                <p>
                    Harga:
                    <?= $produk->harga_produk ?>
                </p>
                <p>
                    stok:
                    <?= $produk->stok_produk ?>
                </p>

            </div>

        </div>
    </div>
    <div class="row justify-content-center" style="background-color: #ffff">
        <div class="col-12 mt-5 text-center">
            <h1>Produk</h1>
            <div class="row mb-5">
                <?php foreach ($allproduk as $p) { ?>
                    <div class="col-4">
                        <img src="<?= base_url('./uploads/' . $p->gambar) ?>" style="width: 50%" alt="" srcset="">
                        <h3>
                            <?= $p->nama_produk; ?>
                        </h3>
                        <a href="<?= base_url("produk/detail/" . $p->id_produk) ?>" type="button"
                            class="btn btn-success">Detail Produk</a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>