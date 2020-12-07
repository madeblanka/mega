<?php $this->load->view("_partials/head.php") ?>
<?php $this->load->view("_partials/sidebar.php") ?>

    <div class="card shadow mb-4">
            <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Siswa</h6>
            <a href="<?php echo site_url('siswa/tambah/') ?>"
                href="#!"  class="btn btn-outline-success"><strong>Tambah</strong></a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
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
                               <th>action</th>
                            </tr>
                        </thead>
                        <?php foreach ($siswa as $siswa): ?>
                  <tbody>
                      <tr>
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
                          <td>                        
                          <a href="<?php echo site_url('siswa/edit/'.$siswa->nis) ?>"
                           href="#!" class="btn btn-small text-primary"><i class="fas fa-edit"></i> Edit</a>

                           <a href="<?php echo site_url('siswa/delete/'.$siswa->nis) ?>"
                           onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini ?');" href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>

                          </td>
                      </tr>
                    <?php endforeach?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

<?php $this->load->view("_partials/footer.php") ?>