<div class="container-fluid">
    <div class="row justify-content-center" style="background-color: #ffff">
        <div class="col-12 mt-5 text-center">
            <h1>Produk</h1>
            <div class="row mt-5 mb-5">
                <?php foreach ($produk as $p) { ?>
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