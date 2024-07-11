<!DOCTYPE html>

<html lang="en" class="light-style customizer-hide" dir="ltr" data-theme="theme-default" data-assets-path="../assets/"
    data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Login Admin</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?= base_url() ?>assets/admin-assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/admin-assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/admin-assets/vendor/css/core.css"
        class="template-customizer-core-css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/admin-assets/vendor/css/theme-default.css"
        class="template-customizer-theme-css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/admin-assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet"
        href="<?= base_url() ?>assets/admin-assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/admin-assets/vendor/css/pages/page-auth.css" />
    <!-- Helpers -->
    <script src="<?= base_url() ?>assets/admin-assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="<?= base_url() ?>assets/admin-assets/js/config.js"></script>
</head>

<body>
    <!-- Content -->

    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner">
                <!-- Register -->
                <div class="card">
                    <div class="card-body">
                        <!-- Logo -->
                        <div class="container-xxl">
                            <div class="authentication-wrapper authentication-basic container-p-y">
                                <div class="authentication-inner">
                                    <!-- Register -->
                                    <div class="card">
                                        <div class="card-body">
                                            <!-- Logo -->
                                            <div class="row justify-content-center">
                                                <div class="col-12 text-center">
                                                    <img style="width: 20%;"
                                                        src="<?= base_url("assets/gambar/logo.jpg") ?>" alt="">
                                                </div>
                                                <div class="col-12 text-center">
                                                    <span class="app-brand-text demo text-body fw-bolder">Login
                                                        Admin</span>
                                                </div>
                                            </div>
                                            <!-- /Logo -->


                                            <form id="formAuthentication" class="mb-3"
                                                action=" <?= base_url("Auth/aksi_login") ?>" method="POST">
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Username</label>
                                                    <input type="text" class="form-control" name="username"
                                                        placeholder="username" autofocus />
                                                </div>
                                                <div class="mb-3 form-password-toggle">
                                                    <div class="d-flex justify-content-between">
                                                        <label class="form-label" for="password">Password</label>
                                                        </a>
                                                    </div>
                                                    <div class="input-group input-group-merge">
                                                        <input type="password" id="password" class="form-control"
                                                            name="password"
                                                            placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                                            aria-describedby="password" />
                                                        <span class="input-group-text cursor-pointer"><i
                                                                class="bx bx-hide"></i></span>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <button type="submit" class="btn btn-primary d-grid w-100"
                                                        type="submit">Login</button>
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                    <!-- /Register -->
                                </div>
                            </div>
                        </div>

                        <!-- / Content -->
                        <!-- Core JS -->
                        <!-- build:js assets/vendor/js/core.js -->
                        <script src="<?= base_url() ?>assets/admin-assets/vendor/libs/jquery/jquery.js"></script>
                        <script src="<?= base_url() ?>assets/admin-assets/vendor/libs/popper/popper.js"></script>
                        <script src="<?= base_url() ?>assets/admin-assets/vendor/js/bootstrap.js"></script>
                        <script
                            src="<?= base_url() ?>assets/admin-assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

                        <script src="<?= base_url() ?>assets/admin-assets/vendor/js/menu.js"></script>
                        <!-- endbuild -->

                        <!-- Vendors JS -->

                        <!-- Main JS -->
                        <script src="<?= base_url() ?>assets/admin-assets/js/main.js"></script>

                        <!-- Page JS -->

                        <!-- Place this tag in your head or just before your close body tag. -->
                        <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>