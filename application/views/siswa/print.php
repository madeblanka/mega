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
                               <th>id sekolah</th>
                               <th>nis</th>
                               <th>nama</th>
                               <th>alamat</th>
                               <th>telp</th>
                               <th>kelas</th>
                               <th>jeniskelamin</th>
                               <th>tempat lahir</th>
                               <th>tanggal lahir</th>
                               <th>tanggal masuk</th>
                               <th>tanggal keluar</th>
                               <th>status masuk</th>
                               <th>status keluar</th>
                               <th>agama</th>
                               <th>kewarganegaraan</th>
                            </tr>
                        </thead>
                        <?php foreach ($siswa as $siswa): ?>
                  <tbody>
                      <tr>
                          <td><?php echo $siswa->id_sekolah?></td>
                          <td><?php echo $siswa->nis?></td>
                          <td><?php echo $siswa->nama?></td>
                          <td><?php echo $siswa->alamat?></td>
                          <td><?php echo $siswa->telp?></td>     
                          <td><?php echo $siswa->kelas?></td>
                          <td><?php echo $siswa->jeniskelamin?></td>
                          <td><?php echo $siswa->tempat_lahir?></td>
                          <td><?php echo $siswa->tanggal_lahir?></td>
                          <td><?php echo $siswa->tanggal_masuk?></td>       
                          <td><?php echo $siswa->tanggal_keluar?></td>
                          <td><?php echo $siswa->status_masuk?></td>
                          <td><?php echo $siswa->status_keluar?></td>
                          <td><?php echo $siswa->agama?></td>       
                          <td><?php echo $siswa->kewarganegaraan?></td>     
  
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