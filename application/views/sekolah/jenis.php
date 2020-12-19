<?php $this->load->view("_partials/head.php") ?>
<?php $this->load->view("_partials/sidebar.php") ?>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Sekolah</h6>
        <?php if($this->session->userdata('role') !="kadis"): ?>
            <a href="<?php echo site_url('sekolah/tambah/') ?>"
                href="#!"  class="btn btn-outline-success"><strong>Tambah</strong></a>
                <?php endif ?>
        </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                               <th>id sekolah</th>
                               <th>nama</th>
                               <th>alamat</th>
                               <th>telp</th>
                               <th>status</th>
                               <th>email</th>
                               <th>keterangan</th>
                               <th>jenis</th>
                               <th>rayon</th>
                               <th>jenjang</th>
                               <th>akreditasi</th>
                               <th>longtitude</th>
                               <th>latitude</th>
                               <th>action</th>
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
                          <td><a href="<?php echo site_url('sekolah/edit/'.$sekolah->id_sekolah) ?>"
                           href="#!" class="btn btn-small text-primary"><i class="fas fa-edit"></i> Edit</a>

                           <a href="<?php echo site_url('sekolah/delete/'.$sekolah->id_sekolah) ?>"
                           onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini ?');" href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>

                          </td>
                      </tr><?php endforeach?>
                        </tbody>
                        
                    </table>
                </div>
            </div>
    </div>

<?php $this->load->view("_partials/footer.php") ?>