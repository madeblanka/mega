<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Dashboard Sistem</title>

  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url('dashboard/vendor/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
  <link href="<?php echo base_url('dashboard/vendor/fontawesome-free/css/all.min.css" rel="stylesheet')?>" type="text/css">

  <!-- Custom styles for this template -->
  <link href="<?php echo base_url('dashboard/css/coming-soon.min.css')?>" rel="stylesheet">

</head>

<body>

  <div class="overlay"></div>
  <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
    <source src="<?php echo base_url('dashboard/mp4/bg.mp4')?>" type="video/mp4">
  </video>

  <div class="masthead">
    <div class="masthead-bg"></div>
    <div class="container h-100">
      <div class="row h-100">
        <div class="col-12 my-auto">
          <div class="masthead-content text-white py-5 py-md-0">
          <img src="<?php echo base_url('assetsimage/a.png')?>" width="230" />
            <h2 class="mb-3">Sistem Informasi UPTD</h2>
            <p class="mb-5">Selamat Datang Di Sistem Informasi UPTD Pendidikan Kecamatan Baturiti, BALI!
            <div class="input-group input-group-newsletter">
              <div class="input-group-append">
                <a href="#" data-toggle="modal" data-target="#mylogin">
                <button class="btn btn-primary" type="button">UPTD</button>
                </a>
                <a href="#" data-toggle="modal" data-target="#mylogin2">
                <button class="btn btn-success" type="button">SEKOLAH</button>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
<div id="mylogin" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Login</h4>
        </div>
        <div class="modal-body">
          <form action="<?php echo base_url('login/loginuptd') ?>"  method="post" enctype="multipart/form-data" >
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control" id="username" name="username" placeholder="Username" required="">
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success" name="button">login</button>
        <!-- <input class="btn btn-success" type="submit" name="btn" value="login" data-dismiss="modal" /> -->
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </form>
        </div>
      </div>
    </div>
  </div>
  <!-- End Modal Login -->
  <div id="mylogin2" class="modal fade" role="dialog">
    <div class="modal-dialog">
  <!-- Modal content-->
  <div class="modal-content">
    <div class="modal-header">
      <h4 class="modal-title">Login</h4>
    </div>
    <div class="modal-body">
      <form action="<?php echo base_url('login/loginsekolah') ?>"  method="post" enctype="multipart/form-data" >
        <div class="form-group">
    <label for="username">ID Sekolah</label>
    <input type="text" class="form-control" id="username" name="id_sekolah" placeholde="ID SEKOLAH" required="">
    <label for="password">Password</label>
    <input type="password12" class="form-control" id="password" name="password" placeholde="Password" required="">
        </div>
    <button type="submit" class="btn btn-success" name="button">login</button>
    <!-- <input class="btn btn-success" type="submit" name="btn" value="login" data-dismiss="modal" /> -->
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript -->
  <script src="<?php echo base_url('dashboard/vendor/jquery/jquery.min.js')?>"></script>
  <script src="<?php echo base_url('dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>

  <!-- Custom scripts for this template -->
  <script src="<?php echo base_url('dashboard/js/coming-soon.min.js')?>"></script>

</body>

</html>
