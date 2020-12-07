<?php $this->load->view("_partials/head.php") ?>
<?php $this->load->view("_partials/sidebar.php") ?>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">From Edit Sekolah</h6>
            </div>
            <div class="card-body">
            <form action="<?php echo site_url('sekolah/update') ?>" method="post" enctype="multipart/form-data">
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Id Sekolah</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="id_sekolah" id="inputPassword" disabled value="<?php echo $sekolah->id_sekolah?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="nama" id="inputPassword" value="<?php echo $sekolah->nama?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">alamat</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="alamat" id="inputPassword" value="<?php echo $sekolah->alamat?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">telp</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="telp" id="inputPassword" value="<?php echo $sekolah->telp?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">status</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="status" id="inputPassword" value="<?php echo $sekolah->status?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">email</label>
                <div class="col-sm-10">
                <input type="email" class="form-control" name="email" id="inputPassword" value="<?php echo $sekolah->email?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">keterangan</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="keterangan" id="inputPassword" value="<?php echo $sekolah->keterangan?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">jenis</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="jenis" id="inputPassword" value="<?php echo $sekolah->jenis?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">rayon</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="rayon" id="inputPassword" value="<?php echo $sekolah->rayon?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">jenjang</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="jenjang" id="inputPassword" value="<?php echo $sekolah->jenjang?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">akreditasi</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="akreditasi" id="inputPassword" value="<?php echo $sekolah->akreditasi?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">longtitude</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="longtitude" id="inputPassword" value="<?php echo $sekolah->longtitude?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">latitude</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="latitude" id="inputPassword" value="<?php echo $sekolah->latitude?>">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
            </div>
     </div>

       
<?php $this->load->view("_partials/footer.php") ?>