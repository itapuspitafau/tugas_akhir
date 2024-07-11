<!DOCTYPE html>
<html>

<head>
    <title>Checkout</title>
    <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js"
        data-client-key="SB-Mid-client-xNptmJUtDRbKaFb6"></script>
</head>

<body>

    <script type="text/javascript">
        var snapToken = '<?= $snapToken ?>';
        snap.pay(snapToken, {
            onSuccess: function (result) {
                window.location.href = '<?= base_url(); ?>./produk/transaksiBerhasil/<?= $idProduk; ?>/<?= $idtransaksi ?>'; // arahkan ke halaman berikut
            },
            onPending: function (result) {
                window.location.href = '<?= base_url(); ?>./produk/transaksiGagal/<?= $idProduk; ?>/<?= $idtransaksi ?>'; // arahkan ke halaman berikut
            },
            onError: function (result) {
                window.location.href = '<?= base_url(); ?>./produk/transaksiGagal/<?= $idProduk; ?>/<?= $idtransaksi ?>'; // arahkan ke halaman berikut
            },
            onClose: function () {
                window.location.href = '<?= base_url(); ?>./produk/transaksiGagal/<?= $idProduk; ?>/<?= $idtransaksi ?>'; // arahkan ke halaman berikut
            }
        });
    </script>
</body>

</html>