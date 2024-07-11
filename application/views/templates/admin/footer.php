<div class="row">
    <!-- Order Statistics -->

    <div class="content-backdrop fade"></div>
</div>
<!-- Content wrapper -->
</div>

<!-- / Layout page -->
</div>

<!-- Overlay -->
<div class="layout-overlay layout-menu-toggle"></div>
</div>
<!-- / Layout wrapper -->

<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->
<script src="<?= base_url() ?>assets/admin-assets/vendor/libs/jquery/jquery.js"></script>
<script src="<?= base_url() ?>assets/admin-assets/vendor/libs/popper/popper.js"></script>
<script src="<?= base_url() ?>assets/admin-assets/vendor/js/bootstrap.js"></script>
<script src="<?= base_url() ?>assets/admin-assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

<script src="<?= base_url() ?>assets/admin-assets/vendor/js/menu.js"></script>
<!-- endbuild -->

<!-- Vendors JS -->
<script src="<?= base_url() ?>assets/admin-assets/vendor/libs/apex-charts/apexcharts.js"></script>

<!-- Main JS -->
<script src="<?= base_url() ?>assets/admin-assets/js/main.js"></script>

<!-- Page JS -->
<script src="<?= base_url() ?>assets/admin-assets/js/dashboards-analytics.js"></script>

<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>

<script>
    // Mendapatkan elemen input
    var inputElement = document.getElementById('harga');

    // Menambahkan event listener untuk event input
    inputElement.addEventListener('input', function () {
        // Mendapatkan nilai input
        var inputValue = inputElement.value;

        // Menghilangkan semua karakter non-angka
        var numericValue = inputValue.replace(/\D/g, '');

        // Menyimpan kembali nilai yang sudah difilter hanya angka
        inputElement.value = numericValue;

        // Menampilkan notifikasi jika terdapat perbedaan nilai input
        if (inputValue !== numericValue) {
            inputElement.classList.add('is-invalid')
        } else {
            inputElement.classList.remove('is-invalid')
        }
    });
</script>
<script>
    // Mendapatkan elemen input
    var inputElement1 = document.getElementById('stok');

    // Menambahkan event listener untuk event input
    inputElement1.addEventListener('input', function () {
        // Mendapatkan nilai input
        var inputValue = inputElement1.value;

        // Menghilangkan semua karakter non-angka
        var numericValue = inputValue.replace(/\D/g, '');

        // Menyimpan kembali nilai yang sudah difilter hanya angka
        inputElement1.value = numericValue;

        // Menampilkan notifikasi jika terdapat perbedaan nilai input
        if (inputValue !== numericValue) {
            inputElement1.classList.add('is-invalid')
        } else {
            inputElement1.classList.remove('is-invalid')
        }
    });
</script>
</body>

</html>