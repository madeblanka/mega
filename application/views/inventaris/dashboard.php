<?php $this->load->view("_partials/head.php") ?>
<?php $this->load->view("_partials/sidebar.php") ?>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Inventaris</h6>
             <?php if($this->session->userdata('role') !="kadis"): ?><a href="<?php echo site_url('inventaris/tambah/') ?>"
                href="#!"  class="btn btn-outline-success"><strong>Tambah</strong></a>
        </div><?php endif ?>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                               <th>id inventaris</th>
                               <th>id sekolah</th>
                               <th>nama</th>
                               <th>status</th>
                               <th>jumlah</th>
                               <th>sumber</th>
                               <th>tahun</th>
                               <th>Actoin</th>
                               
                            </tr>
                        </thead>
                        <?php foreach ($inventaris as $inventaris): ?>
                  <tbody>
                      <tr>
                          <td><?php echo $inventaris->id_inventaris?></td>
                          <td><?php echo $inventaris->id_sekolah?></td>
                          <td><?php echo $inventaris->nama?></td>
                          <td><?php echo $inventaris->status?></td>
                          <td><?php echo $inventaris->jumlah?></td> 
                          <td><?php echo $inventaris->sumber?></td>
                          <td><?php echo $inventaris->tahun?></td>                            
                          <td>
                          <?php if($this->session->userdata('role') =="kadis"): ?>  
                            
                            <a href="<?php echo site_url('jumlahsiswa/print/') ?>"
                           href="#!" class="btn btn-small text-secondary"><i class="fas fa-trash"></i> Print</a>                    
                        
                           <?php endif ?><?php if($this->session->userdata('role') !="kadis"): ?>  <a href="<?php echo site_url('inventaris/edit/'.$inventaris->id_inventaris) ?>"
                           href="#!" class="btn btn-small text-primary"><i class="fas fa-edit"></i> Edit</a>
                           <a href="<?php echo site_url('inventaris/delete/'.$inventaris->id_inventaris) ?>"
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