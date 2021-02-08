<?php $this->load->view("_partials/head.php") ?>
<?php $this->load->view("_partials/sidebar.php") ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
     <!-- Page Heading -->
     <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                    </div>



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