<?php $this->load->view("_partials/head.php") ?>
<?php $this->load->view("_partials/sidebar.php") ?>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data pengumuman</h6>
            <a href="<?php echo site_url('pengumuman/tambah/') ?>"
                href="#!"  class="btn btn-outline-success"><strong>Tambah</strong></a>
        </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                               <th>id pengumuman</th>
                               <th>judul</th>
                               <th>deskripsi</th>
                               <th>lampiran</th>
                               <th>Actoin</th>
                               
                            </tr>
                        </thead>
                        <?php foreach ($pengumuman as $pengumuman): ?>
                  <tbody>
                      <tr>
                          <td><?php echo $pengumuman->id_pengumuman?></td>
                          <td><?php echo $pengumuman->judul?></td>
                          <td><?php echo $pengumuman->deskripsi?></td>
                          <td><?php echo $pengumuman->lampiran?></td>                    
                          <td><a href="<?php echo site_url('pengumuman/edit/'.$pengumuman->id_pengumuman) ?>"
                           href="#!" class="btn btn-small text-primary"><i class="fas fa-edit"></i> Edit</a>
                           <a href="<?php echo site_url('pengumuman/delete/'.$pengumuman->id_pengumuman) ?>"
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