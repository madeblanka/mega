<?php $this->load->view("_partials/head.php") ?>
<?php $this->load->view("_partials/sidebar.php") ?>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Guru</h6>
            <?php if($this->session->userdata('role') !="kadis"): ?>
            <a href="<?php echo site_url('guru/tambah/') ?>"
                href="#!"  class="btn btn-outline-success"><strong>Tambah</strong></a>
            </div><?php endif ?>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                               <th>Id Guru</th>
                               <th>Id Sekolah</th>
                               <th>Nip</th>
                               <th>Nama</th>
                               <th>Email</th>
                               <th>telp</th>
                               <th>jabatan</th>
                               <th>lulusan</th>
                               <th>jenis</th>
                               <th>jenis kelamin</th>
                               <th>tempat lahir</th>
                               <th>tanggal_lahir</th>
                               <th>alamat</th>
                               <th>Action</th>
                            </tr>
                        </thead>
                        <?php foreach ($guru as $guru): ?>
                  <tbody>
                      <tr>
                          <td><?php echo $guru->id_guru?></td>
                          <td><?php echo $guru->id_sekolah?></td>
                          <td><?php echo $guru->nip?></td>
                          <td><?php echo $guru->nama?></td>
                          <td><?php echo $guru->email?></td>
                          <td><?php echo $guru->telp?></td>
                          <td><?php echo $guru->jabatan?></td>
                          <td><?php echo $guru->lulusan?></td>
                          <td><?php echo $guru->jenis?></td>
                          <td><?php echo $guru->jeniskelamin?></td>
                          <td><?php echo $guru->tempat_lahir?></td>
                          <td><?php echo $guru->tanggal_lahir?></td>
                          <td><?php echo $guru->alamat?></td>
                          <td> 
                          <?php if($this->session->userdata('role') =="kadis"): ?>  
                            
                            <a href="<?php echo site_url('jumlahsiswa/print/') ?>"
                           href="#!" class="btn btn-small text-secondary"><i class="fas fa-trash"></i> Print</a>                    
                        
                           <?php endif ?><?php if($this->session->userdata('role') !="kadis"): ?>  
                          <a href="<?php echo site_url('guru/edit/'.$guru->id_guru) ?>"
                           href="#!" class="btn btn-small text-primary"><i class="fas fa-edit"></i> Edit</a>

                           <a href="<?php echo site_url('guru/delete/'.$guru->id_guru) ?>"
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