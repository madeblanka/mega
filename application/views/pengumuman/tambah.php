<?php $this->load->view("_partials/head.php") ?>
<?php $this->load->view("_partials/sidebar.php") ?>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">From Tambah Pengumuman</h6>
            </div>
            <div class="card-body">
            <form action="<?php echo site_url('pengumuman/add') ?>" method="post" enctype="multipart/form-data">
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Id pengumuman</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="id_pengumuman" id="inputPassword" readonly placeholder="otomatis terisi oleh sistem">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">judul</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="judul" id="inputPassword" >
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">deskripsi</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="deskripsi" id="inputPassword" >
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">lampiran</label>
                <div class="col-sm-10">
                <input type="file" name="lampiran" id="inputPassword" >
                </div>
            </div>
            <button type="submit" class="btn btn-primary"  onclick="return confirm('Apakah Anda Yakin Ingin Menyimpan Data Ini ?');">Simpan</button>
            </form>
            </div>
     </div>       
<?php $this->load->view("_partials/footer.php") ?>