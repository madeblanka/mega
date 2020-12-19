<?php $this->load->view("_partials/head.php") ?>
<?php $this->load->view("_partials/sidebar.php") ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
<div class="row">
                        <div class="col-xl-8 col-lg-7">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Grafik guru Negeri</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-area">
                                    <canvas id="doughnut-chart" width="800" height="250"></canvas>
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
                                            <?= $this->Guru_model->jenis('swasta');?>,
                                            <?= $this->Guru_model->jenis('negeri');?>,]
                                            }
                                        ]
                                        },
                                        options: {
                                        title: {
                                            display: true,
                                            text: 'Data guru Pria'
                                        }
                                        }
                                    });
                                    </script>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Tabel Guru Negeri</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-pie pt-4 pb-2">
                                    <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                    <tr>
                                    <th>nip</th>
                                    <th>nama</th>
                                    <th>jenis</th>
                                    </tr>
                                    </thead>
                                    <?php foreach ($guru as $guru): ?>
                                    <tbody>
                                        <tr>
                                            <td><?php echo $guru->nip?></td>
                                            <td><?php echo $guru->nama?></td>
                                            <td><?php echo $guru->jenis?></td>  
                                        </tr>
                                        <?php endforeach?>
                                            </tbody>
                                    </table>
                                    </div>
                                </div>
                                    </div>
                                </div>
                            </div>
                        </div>

<?php $this->load->view("_partials/footer.php") ?>

  