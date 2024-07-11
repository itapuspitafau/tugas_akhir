<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Laporan Excel Database Provinsi di Indonesia.xls"); ?>

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
            </tr>
        <?php } ?>
    </tbody>
</table>