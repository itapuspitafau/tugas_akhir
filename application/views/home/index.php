<div class="container-fluid">
    <div class="row">
        <img src="<?= base_url('./assets/gambar/mstech.png') ?>" style="width: 100%" alt="" srcset="">
    </div>
</div>
<div class="container-fluid">
    <div class="row justify-content-center" style="background-color: #9DC08B">
        <div class="col-12 mt-5 mb-5 text-center">
            <h1>Milenial Organic Farming: MSTECH</h1>
            <p style="font-size: 26px"> "Jadilah bagian dari perubahan menuju pertanian yang lebih berkelanjutan dan
                sehat dengan MSTECH. Temukan solusi pertanian organik modern bagi generasi milenial sekarang!"</p>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row justify-content-center" style="background-color: #ffff">
        <div class="col-12 mt-5 text-center">
            <h1>Produk</h1>
            <div class="row mb-5">
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
<div class="container-fluid">
    <div class="row justify-content-center" style="background-color: #9DC08B">
        <div class="col-10 mt-5 mb-5 text-center">
            <h1>Sejarah Singkat</h1>
            <p style="font-size: 20px">MSTECH memadukan teknologi modern dengan metode pertanian yang ramah lingkungan
                untuk meningkatkan produktivitas pertanian tanpa penggunaan pupuk dan pestisida sintetis serta menjaga
                kesehatan tanah, air, dan udara, berdedikasi pada pengembangan pertanian yang ramah lingkungan dan
                berkelanjutan melalui fokus pada urban farming, aquaponik, vertical garden, dan pertanian organik.</p>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row justify-content-center" style="background-color: #D9D9D9">
        <div class="col-10 mt-5 mb-5 text-center">
            <h1>Tujuan Pertanian Organik Milenial - MSTECH</h1>
            <p style="font-size: 20px">MSTECH memiliki tujuan untuk mengembangkan pertanian organik yang ramah
                lingkungan dan berkelanjutan dengan memanfaatkan teknologi modern. Kami bertekad untuk meningkatkan
                hasil pertanian tanpa menggunakan pupuk dan pestisida sintetis, serta menjaga kesehatan tanah, air, dan
                udara. Dengan fokus pada urban farming, aquaponik, vertical garden, dan microgreens, kami ingin membantu
                menciptakan masa depan pertanian yang lebih sehat dan berkelanjutan bagi generasi mendatang.</h1>
        </div>
    </div>
</div>