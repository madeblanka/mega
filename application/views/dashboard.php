<?php $this->load->view("_partials/head.php") ?>
<?php $this->load->view("_partials/sidebar.php") ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
     <!-- Page Heading -->
     <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                               Total TK</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $this->Sekolah_model->totaltk(); ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-chalkboard-teacher fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Total Sekolah </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $this->Sekolah_model->totalsekolah(); ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-building fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total SD
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $this->Sekolah_model->totalsd(); ?></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user-friends fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Total Siswa</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $this->Siswa_model->totalsiswa(); ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->

                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-8 col-lg-7">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Grafik </h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-area">
                                        <canvas id="line-chart"width="800" height="250"></canvas>
                                        <script>
                                   new Chart(document.getElementById("line-chart"), {
                                    type: 'line',
                                    data: {
                                        labels: [2016,2017,2018,2019,2020],
                                        datasets: [{ 
                                            data: [
                                            <?php foreach ($jumlahsiswa1 as $jumlahsiswa1): echo $jumlahsiswa1->jumlah_siswa; endforeach?>,
                                            <?php foreach ($jumlahsiswa2 as $jumlahsiswa2): echo $jumlahsiswa2->jumlah_siswa; endforeach?>,
                                            <?php foreach ($jumlahsiswa3 as $jumlahsiswa3): echo $jumlahsiswa3->jumlah_siswa; endforeach?>,
                                            <?php foreach ($jumlahsiswa4 as $jumlahsiswa4): echo $jumlahsiswa4->jumlah_siswa; endforeach?>,
                                            <?php foreach ($jumlahsiswa5 as $jumlahsiswa5): echo $jumlahsiswa5->jumlah_siswa; endforeach?>,
                                            ],
                                            label: "Data Jumlah Siswa",
                                            borderColor: "#3e95cd",
                                            fill: false
                                        },
                                        ]
                                    },
                                    options: {
                                        title: {
                                        display: true,
                                        text: 'Data Jumlah Siswa 5 Tahun Terahir'
                                        }
                                    }
                                    });
                                    </script>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pie Chart -->
                        <div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Grafik Sekolah Swasta dan Negeri</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-pie pt-4 pb-2">
                                    <canvas id="doughnut-chart" width="600" height="300"></canvas>
                                    <script>
                                    new Chart(document.getElementById("doughnut-chart"), {
                                        type: 'doughnut',
                                        data: {
                                        labels: ["swasta", "negeri"],
                                        datasets: [
                                            {
                                            label: "Data guru Pria",
                                            backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
                                            data: [  
                                            <?= $this->Sekolah_model->swasta();?>,
                                            <?= $this->Sekolah_model->negeri();?>,]
                                            }
                                        ]
                                        },
                                        options: {
                                        title: {
                                            display: false,
                                            text: ""
                                        }
                                        }
                                    });
                                    </script>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                                       <!-- Content Row -->
                    <div class="row">

                        <!-- Content Column -->
                        <div class="col-lg-6 mb-4">

                            <!-- Project Card Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Tabel User</h6>
                                </div>
                                <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                        <th>id user</th>
                                        <th>Username</th>
                                        <th>Password</th>
                                        <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <?php foreach ($user as $user): ?>
                            <tbody>
                                <tr>
                                    <td><?php echo $user->id_user?></td>
                                    <td><?php echo $user->username?></td>
                                    <td><?php echo $user->password?></td>                             
                                    <td><a href="<?php echo site_url('user/edit/'.$user->id_user) ?>"
                                    href="#!" class="btn btn-small text-primary"><i class="fas fa-edit"></i> Edit</a>

                                    <a href="<?php echo site_url('user/delete/'.$user->id_user) ?>"
                                    onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini ?');" href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>

                                    </td>
                                </tr>
                                <?php endforeach?>
                                    </tbody>
                            </table>
                        </div>
                    </div>
                            </div>

                            <!-- Color System -->

                        </div>

                        <div class="col-lg-6 mb-4">

                            <!-- Illustrations -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Pengumuman</h6>
                                </div>
                                <div class="card-body">
                                    <div class="text-center">
                                    </div>
                                    <p> <?php foreach ($pengumuman as $pengumuman): ?><?php echo $pengumuman->judul?></p>
                                        <p class="mb-0">  <?php echo $pengumuman->deskripsi?></p>

                                    <a target="_blank" rel="nofollow" href="<?php echo base_url('dashboard/download/'.$pengumuman->lampiran )?>">Download Lampiran &rarr;</a>
                                        <?php endforeach?>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    
<?php $this->load->view("_partials/footer.php") ?>