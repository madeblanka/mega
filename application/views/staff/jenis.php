<?php $this->load->view("_partials/head.php") ?>
<?php $this->load->view("_partials/sidebar.php") ?>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data staff</h6>
            <a href="<?php echo site_url('staff/tambah/') ?>"
                href="#!"  class="btn btn-outline-success"><strong>Tambah</strong></a>
        </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                               <th>id staff</th>
                               <th>id sekolah</th>
                               <th>nama</th>
                               <th>telp</th>
                               <th>alamat</th>
                               <th>jabatan</th>
                               <th>status</th>
                               <th>Jenis Kelamin</th>
                               <th>Actoin</th>
                               
                            </tr>
                        </thead>
                        <?php foreach ($staff as $staff): ?>
                  <tbody>
                      <tr>
                          <td><?php echo $staff->id_staff?></td>
                          <td><?php echo $staff->id_sekolah?></td>
                          <td><?php echo $staff->nama?></td>
                          <td><?php echo $staff->telp?></td>
                          <td><?php echo $staff->alamat?></td>
                          <td><?php echo $staff->jabatan?></td>
                          <td><?php echo $staff->status?></td>
                          <td><?php echo $staff->jeniskelamin?></td>                            
                          <td><a href="<?php echo site_url('staff/edit/'.$staff->id_staff) ?>"
                           href="#!" class="btn btn-small text-primary"><i class="fas fa-edit"></i> Edit</a>
                           <a href="<?php echo site_url('staff/delete/'.$staff->id_staff) ?>"
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