<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard Sistem</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('dashboard/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    <link href="<?php echo base_url('dashboard/vendor/fontawesome-free/css/all.min.css" rel="stylesheet') ?>" type="text/css">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('dashboard/css/coming-soon.min.css') ?>" rel="stylesheet">

</head>

<body>

    <div class="overlay"></div>
    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
        <source src="<?php echo base_url('dashboard/mp4/bg.mp4') ?>" type="video/mp4">
    </video>

    <div class="masthead">
        <div class="masthead-bg"></div>
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-12 my-auto">
                    <div class="masthead-content text-white py-5 py-md-0">
                        <img src="<?php echo base_url('assetsimage/a.png') ?>" width="230" />
                        <h2 class="mb-3">Sistem Informasi UPTD</h2>
                        <p class="mb-5">Berhasil Login</p>
                        <form action="<?php echo base_url('login/submit_sekolah') ?>" method="post">
                            <div class="input-group input-group-newsletter">
                                <div class="input-group-append">
                                    <select class="form-control form-control-lg" name="id_sekolah">
                                        <option>Default select</option>
                                        <?php foreach ($sekolahs as $s_sekolah) : ?>
                                            <option value="<?php echo $s_sekolah->id_sekolah ?>"><?php echo $s_sekolah->nama ?></option>
                                        <?php endforeach ?>
                                    </select>
                                    <button class="btn btn-success" type="submit">Pilih</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url('dashboard/vendor/jquery/jquery.min.js') ?>"></script>
    <script src="<?php echo base_url('dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

    <!-- Custom scripts for this template -->
    <script src="<?php echo base_url('dashboard/js/coming-soon.min.js') ?>"></script>

</body>

</html>