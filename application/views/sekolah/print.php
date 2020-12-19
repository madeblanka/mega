<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Print Data Sekolah</title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url('template/vendor/fontawesome-free/css/all.min.css')?>" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
        <link href="<?php echo base_url('template/vendor/datatables/dataTables.bootstrap4.min.css')?>" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="<?php echo base_url('template/css/sb-admin-2.min.css')?>" rel="stylesheet">

</head>
<script>
  window.print();
</script>
<table class="table">
  <thead>
    <tr>
    <th scope="col">id sekolah</th>
    <th scope="col">nama</th>
    <th scope="col">alamat</th>
    <th scope="col">telp</th>
    <th scope="col">status</th>
    <th scope="col">email</th>
    <th scope="col">keterangan</th>
    <th scope="col">jenis</th>
    <th scope="col">rayon</th>
    <th scope="col">jenjang</th>
    <th scope="col">akreditasi</th>
    <th scope="col">longtitude</th>
    <th scope="col">latitude</th>  
    </tr>
  </thead>
  <tbody>
  <?php foreach ($sekolah as $sekolah): ?>
    <tr>
        <td><?php echo $sekolah->id_sekolah?></td>
        <td><?php echo $sekolah->nama?></td>
        <td><?php echo $sekolah->alamat?></td>
        <td><?php echo $sekolah->telp?></td>     
        <td><?php echo $sekolah->status?></td>
        <td><?php echo $sekolah->email?></td>
        <td><?php echo $sekolah->keterangan?></td>
        <td><?php echo $sekolah->jenis?></td>       
        <td><?php echo $sekolah->rayon?></td>
        <td><?php echo $sekolah->jenjang?></td>
        <td><?php echo $sekolah->akreditasi?></td>
        <td><?php echo $sekolah->longtitude?></td>       
        <td><?php echo $sekolah->latitude?></td>                             
        </tr>
   <?php endforeach?>
  </tbody>
</table>
    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url('template/vendor/jquery/jquery.min.js')?>"></script>
    <script src="<?php echo base_url('template/vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url('template/vendor/jquery-easing/jquery.easing.min.js')?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url('template/js/sb-admin-2.min.js')?>"></script>

    <!-- Page level plugins -->
    <script src="<?php echo base_url('template/vendor/chart.js/Chart.min.js')?>"></script>

    <!-- Page level custom scripts -->
    <script src="<?php echo base_url('template/js/demo/chart-area-demo.js')?>"></script>
    <script src="<?php echo base_url('template/js/demo/chart-pie-demo.js')?>"></script>
    <script src="<?php echo base_url('template/js/demo/datatables-demo.js')?>"></script>
    <script src="<?php echo base_url('template/vendor/datatables/jquery.dataTables.min.js')?>"></script>
    <script src="<?php echo base_url('template/vendor/datatables/dataTables.bootstrap4.min.js')?>"></script>

   
    <!-- Page level custom scripts -->
    <script src="<?php echo base_url('template/js/demo/chart-area-demo.js')?>"></script>
    <script src="<?php echo base_url('template/js/demo/chart-pie-demo.js')?>"></script>
    <script src="<?php echo base_url('template/js/demo/chart-bar-demo.js')?>"></script>
</body>

</html>