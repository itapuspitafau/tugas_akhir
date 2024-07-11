<div class="container-fluid">
  <div class="row" style="background-color: #080202">
    <div class="col-4 mt-5 mb-5 ">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5756.121586300004!2d110.42128411717479!3d-7.648474431298855!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5e7be70a3867%3A0x6edfccd9bdbf6880!2sM-SEED%20Durian%20Menoreh%20-%20PUPUK%20LENGKAP%20ALAMI%20TOP%20D&#39;WE!5e0!3m2!1sen!2sid!4v1686050368358!5m2!1sen!2sid"
        width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="col-6 mt-5 mb-5 ">
      <i class="mt-5 fa-brands fa-whatsapp fa-xl" style="color: #ffff;"></i>
      <span style="font-size: 14px; color: #ffff">+62 822-2083-5814</span>
      <br>
      <i class="mt-5 fa-brands fa-instagram fa-xl" style="color: #ffff"></i>
      <span style="font-size: 14px; color: #ffff">instagram</span>
    </div>
  </div>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
  integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"
  integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
  integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script type="text/javascript">
  function pay() {
    var snapToken = '<?= $snapToken ?? '' ?>';
    snap.pay(snapToken, {
      onSuccess: function (result) {
        console.log('Payment successful!', result);
        // Tambahkan tindakan yang ingin Anda lakukan setelah pembayaran berhasil
      },
      onPending: function (result) {
        console.log('Payment pending...', result);
        // Tambahkan tindakan yang ingin Anda lakukan saat pembayaran sedang diproses
      },
      onError: function (result) {
        console.log('Payment error!', result);
        // Tambahkan tindakan yang ingin Anda lakukan jika terjadi kesalahan pembayaran
      },
      onClose: function () {
        console.log('Payment closed');
        // Tambahkan tindakan yang ingin Anda lakukan saat popup ditutup tanpa pembayaran
      }
    });
  }
</script>

<script>
  // Mendapatkan elemen input
  var inputElement = document.getElementById('no_hp');

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
  var inputElement1 = document.getElementById('jumlah_pesanan');

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