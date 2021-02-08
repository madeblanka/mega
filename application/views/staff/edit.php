<?php $this->load->view("_partials/head.php") ?>
<?php $this->load->view("_partials/sidebar.php") ?>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">From Tambah Staff</h6>
            </div>
            <div class="card-body">
            <form action="<?php echo site_url('staff/update') ?>" method="post" enctype="multipart/form-data">
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Id staff</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="id_staff" id="inputPassword" readonly value="<?php echo $staff->id_staff?>">
                </div>
            </div>
            <div class="form-group row">
            <label for="inputPassword"  class="col-sm-2 col-form-label">Id Sekolah</label>
                <input type="text" class="form-control" name="id_sekolah" id="inputPassword" value= "<?php echo $this->session->userdata('id_sekolah')?>" readonly placeholder="<?php $this->session->userdata('idsekolah')?>">
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="nama" id="inputPassword" value="<?php echo $staff->nama?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">telp</label>
                <div class="col-sm-10">
                <input type="number" class="form-control" name="telp" id="inputPassword" value="<?php echo $staff->telp?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">alamat</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="alamat" id="inputPassword" value="<?php echo $staff->alamat?>">
                </div>
            </div>  
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">jabatan</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="jabatan" id="inputPassword" value="<?php echo $staff->jabatan?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">status</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="status" id="inputPassword" value="<?php echo $staff->status?>">
                </div>
            </div>
            <div class="form-group row">
            <label for="inputPassword"  class="col-sm-2 col-form-label">Jenis Kelamin</label>
                <div class="col-sm-10">
                    <select name="jeniskelamin">
                    <optgroup class="form-control" label="(empty)" id="jeniskelamin">
                     <option value="pria">Pria</option>
                     <option value="perempuan">Perempuan</option>
				    </optgroup>
                   </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primary"  onclick="return confirm('Apakah Anda Yakin Ingin Menyimpan Data Ini ?');">Simpan</button>
            </form>
            </div>
     </div>
<?php $this->load->view("_partials/footer.php") ?>