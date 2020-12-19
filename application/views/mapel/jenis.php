<?php $this->load->view("_partials/head.php") ?>
<?php $this->load->view("_partials/sidebar.php") ?>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data mapel</h6>
            <a href="<?php echo site_url('mapel/tambah/') ?>"
                href="#!"  class="btn btn-outline-success"><strong>Tambah</strong></a>
        </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                               <th>id mapel</th>
                               <th>id sekolah</th>
                               <th>id guru</th>
                               <th>mata pelajaran</th>
                               <th>Actoin</th>
                               
                            </tr>
                        </thead>
                        <?php foreach ($mapel as $mapel): ?>
                  <tbody>
                      <tr>
                          <td><?php echo $mapel->id_mapel?></td>
                          <td><?php echo $mapel->id_sekolah?></td>
                          <td><?php echo $mapel->id_guru?></td>
                          <td><?php echo $mapel->matapelajaran?></td>                           
                          <td><a href="<?php echo site_url('mapel/edit/'.$mapel->id_mapel) ?>"
                           href="#!" class="btn btn-small text-primary"><i class="fas fa-edit"></i> Edit</a>
                           <a href="<?php echo site_url('mapel/delete/'.$mapel->id_mapel) ?>"
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