<?php $this->load->view("_partials/head.php") ?>
<?php $this->load->view("_partials/sidebar.php") ?>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">From Edit siswa</h6>
            </div>
            <div class="card-body">
            <form action="<?php echo site_url('siswa/update') ?>" method="post" enctype="multipart/form-data">
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">nis</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="nis" id="inputPassword" hidden value="<?php echo $siswa->nis?>">
                </div>
            </div>
            <div class="form-group row">
            <label for="inputPassword"  class="col-sm-2 col-form-label">Id Sekolah</label>
                <input type="text" class="form-control" name="id_sekolah" id="inputPassword" value= "<?php echo $this->session->userdata('id_sekolah')?>" readonly placeholder="<?php $this->session->userdata('idsekolah')?>">
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="nama" id="inputPassword" value="<?php echo $siswa->nama?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">alamat</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="alamat" id="inputPassword" value="<?php echo $siswa->alamat?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">telp</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="telp" id="inputPassword" value="<?php echo $siswa->telp?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">kelas</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="kelas" id="inputPassword" value="<?php echo $siswa->kelas?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">jeniskelamin</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="jeniskelamin" id="inputPassword" value="<?php echo $siswa->jeniskelamin?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">tempat_lahir</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="tempat_lahir" id="inputPassword" value="<?php echo $siswa->tempat_lahir?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">tanggal_lahir</label>
                <div class="col-sm-10">
                <input type="date" class="form-control" name="tanggal_lahir" id="inputPassword" value="<?php echo $siswa->tanggal_lahir?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">tanggal_masuk</label>
                <div class="col-sm-10">
                <input type="date" class="form-control" name="tanggal_masuk" id="inputPassword" value="<?php echo $siswa->tanggal_masuk?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">tanggal_keluar</label>
                <div class="col-sm-10">
                <input type="date" class="form-control" name="tanggal_keluar" id="inputPassword" value="<?php echo $siswa->tanggal_keluar?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">status_masuk</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="status_masuk" id="inputPassword" value="<?php echo $siswa->status_masuk?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">status_keluar</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="status_keluar" id="inputPassword" value="<?php echo $siswa->status_keluar?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">agama</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="agama" id="inputPassword" value="<?php echo $siswa->agama?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">kewarganegaraan</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="kewarganegaraan" id="inputPassword" value="<?php echo $siswa->kewarganegaraan?>">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
            </div>
     </div>

       
<?php $this->load->view("_partials/footer.php") ?>