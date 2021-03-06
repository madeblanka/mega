<?php $this->load->view("_partials/head.php") ?>
<?php $this->load->view("_partials/sidebar.php") ?>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data jumlah siswa</h6>
           <?php if($this->session->userdata('role') !="kadis"): ?>  <a href="<?php echo site_url('jumlahsiswa/tambah/') ?>"
                href="#!"  class="btn btn-outline-success"><strong>Tambah</strong></a>
        </div><?php endif ?>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                               <th>id jumlah siswa</th>
                               <th>tahun</th>
                               <th>jumlah siswa</th>
                               <th>jumlah siswa masuk</th>
                               <th>jumlah siswa keluar</th>
                               <th>Action</th>
                            </tr>
                        </thead>
                        <?php foreach ($jumlahsiswa as $jumlahsiswa): ?>
                  <tbody>
                      <tr>
                          <td><?php echo $jumlahsiswa->id_jumlahsiswa?></td>
                          <td><?php echo $jumlahsiswa->tahun?></td>
                          <td><?php echo $jumlahsiswa->jumlah_siswa?></td>
                          <td><?php echo $jumlahsiswa->jumlah_siswa_masuk?></td>    
                          <td><?php echo $jumlahsiswa->jumlah_siswa_keluar?></td>                         
                          <td>
                          <?php if($this->session->userdata('role') =="kadis"): ?>  
                            
                            <a href="<?php echo site_url('jumlahsiswa/print/') ?>"
                           href="#!" class="btn btn-small text-secondary"><i class="fas fa-trash"></i> Print</a>                    
                        
                           <?php endif ?><?php if($this->session->userdata('role') !="kadis"): ?>  
                          <a href="<?php echo site_url('jumlahsiswa/edit/'.$jumlahsiswa->id_jumlahsiswa) ?>"
                           href="#!" class="btn btn-small text-primary"><i class="fas fa-edit"></i> Edit</a>
                           <a href="<?php echo site_url('jumlahsiswa/delete/'.$jumlahsiswa->id_jumlahsiswa) ?>"
                           onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini ?');" href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
                            <?php endif ?>
                          </td>
                      </tr>
                <?php endforeach?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
<?php $this->load->view("_partials/footer.php") ?>