<?php $this->load->view("_partials/head.php") ?>
<?php $this->load->view("_partials/sidebar.php") ?>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data user</h6>
            <a href="<?php echo site_url('user/tambah/') ?>"
                href="#!"  class="btn btn-outline-success"><strong>Tambah</strong></a>
        </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                               <th>id user</th>
                               <th>username</th>
                               <th>password</th>
                               <th>Actoin</th>
                               
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
<?php $this->load->view("_partials/footer.php") ?>