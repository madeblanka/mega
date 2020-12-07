<?php $this->load->view("_partials/head.php") ?>
<?php $this->load->view("_partials/sidebar.php") ?>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">From Tambah Sekolah</h6>
            </div>
            <div class="card-body">
            <form action="<?php echo site_url('sekolah/add') ?>" method="post" enctype="multipart/form-data">
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Id Sekolah</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="id_sekolah" id="inputPassword" >
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="nama" id="inputPassword" >
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">alamat</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="alamat" id="inputPassword" >
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">telp</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="telp" id="inputPassword" >
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">status</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="status" id="inputPassword" >
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">email</label>
                <div class="col-sm-10">
                <input type="email" class="form-control" name="email" id="inputPassword" >
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">keterangan</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="keterangan" id="inputPassword" >
                </div>
            </div>
            <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Jenis</label>
                    <select class="col-sm-10" class="form-control" name="jenis">
                      <option value="negeri">Negeri</option>
                      <option value="swasta">Swasta</option>
                    </select>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">rayon</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="rayon" id="inputPassword" >
                </div>
            </div>
            <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Jenjang</label>
                    <select class="col-sm-10" class="form-control" name="jenjang">
                      <option value="tk">TK</option>
                      <option value="sd">SD</option>
                    </select>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">akreditasi</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="akreditasi" id="inputPassword" >
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">longtitude</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="longtitude" id="inputPassword" >
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">latitude</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="latitude" id="inputPassword" >
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
            </div>
     </div>

       
<?php $this->load->view("_partials/footer.php") ?>