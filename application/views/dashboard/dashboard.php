<!-- Content wrapper -->
<div class="content-wrapper">
  <div class="container-xxl flex-grow container-p-y">
    <div class="row">
      <!-- Content -->
      <div class="col-sm-12 col-md-12 col-lg-12">
        <div class="row">
          <div class="col-4 mb-4">
            <div class="card">
              <div class="card-body">
                <div class="card-title d-flex align-items-start justify-content-between">
                  <div class="avatar flex-shrink-0">
                    <img src="<?= base_url() ?>assets/admin-assets/img/icons/unicons/paypal.png" alt="Credit Card"
                      class="rounded" />
                  </div>
                </div>
                <span class="d-block mb-1">Stok Produk</span>
                <h3 class="card-title text-nowrap mb-2">
                  <?= $stok ?>
                </h3>
              </div>
            </div>
          </div>
          <div class="col-4 mb-4">
            <div class="card">
              <div class="card-body">
                <div class="card-title d-flex align-items-start justify-content-between">
                  <div class="avatar flex-shrink-0">
                    <img src="<?= base_url() ?>assets/admin-assets/img/icons/unicons/cc-primary.png" alt="Credit Card"
                      class="rounded" />
                  </div>

                </div>
                <span class="fw-semibold d-block mb-1">Jumlah Produk Terjual</span>
                <h3 class="card-title mb-2">
                  <?= $terjual ?>
                </h3>
              </div>
            </div>
          </div>
          <div class="col-4 mb-4">
            <div class="card">
              <div class="card-body">
                <div class="card-title d-flex align-items-start justify-content-between">
                  <div class="avatar flex-shrink-0">
                    <img src="<?= base_url() ?>assets/admin-assets/img/icons/unicons/cc-primary.png" alt="Credit Card"
                      class="rounded" />
                  </div>
                </div>
                <span class="fw-semibold d-block mb-1">Transaksi</span>
                <h3 class="card-title mb-2">
                  <?= $transaksi ?>
                </h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>