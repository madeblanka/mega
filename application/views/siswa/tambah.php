<?php $this->load->view("_partials/head.php") ?>
<?php $this->load->view("_partials/sidebar.php") ?>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">From Tambah Siswa</h6>
            </div>
            <div class="card-body">
            <form action="<?php echo site_url('siswa/add') ?>" method="post" enctype="multipart/form-data">
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">nis</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="nis" id="inputPassword" >
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
                <label for="inputPassword" class="col-sm-2 col-form-label">kelas</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="kelas" id="inputPassword" >
                </div>
            </div>
            <div class="form-group row">
            <label for="inputPassword"  class="col-sm-2 col-form-label">Jenis Kelamin</label>
                <div class="col-sm-10">
                    <select class="form-control" name="jeniskelamin">
                    <optgroup  label="(empty)" id="jeniskelamin">
                    <option value="Laki-laki">Laki-laki</option>
                     <option value="Perempuan">Perempuan</option>
				    </optgroup>
                   </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">tempat lahir</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="tempat_lahir" id="inputPassword" >
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">tanggal lahir</label>
                <div class="col-sm-10">
                <input type="date" class="form-control" name="tanggal_lahir" id="inputPassword" >
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">tanggal masuk</label>
                <div class="col-sm-10">
                <input type="date" class="form-control" name="tanggal_masuk" id="inputPassword" >
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">tanggal keluar</label>
                <div class="col-sm-10">
                <input type="date" class="form-control" name="tanggal_keluar" id="inputPassword" >
                </div>
            </div>
            <div class="form-group row">
            <label for="inputPassword"  class="col-sm-2 col-form-label">Status Masuk</label>
                <div class="col-sm-10">
                    <select class="form-control" name="status_masuk">
                    <optgroup  label="(empty)" id="jeniskelamin">
                    <option value="Siswa Baru">Siswa Baru</option>
                     <option value="Siswa Pindahan">Siswa Pindahan</option>
				    </optgroup>
                   </select>
                </div>
            </div>
            <div class="form-group row">
            <label for="inputPassword"  class="col-sm-2 col-form-label">Status Keluar</label>
                <div class="col-sm-10">
                    <select class="form-control" name="status_masuk">
                    <optgroup  label="(empty)" id="status_keluar">
                    <option value="Siswa Lulus">Siswa Lulus</option>
                     <option value="Siswa Pindahan">Siswa Pindahan</option>
                     <option value="Siswa Menundurkan Diri">Siswa Menundurkan Diri</option>
                     <option value="Siswa Dikeluarkan">Siswa Dikeluarkan</option>
                     <option value="Siswa Putus Sekolah">Siswa Putus Sekolah</option>
                     <option value="Siswa Wafat">Siswa Wafat</option>
                     <option value="Siswa Hilang">Siswa Hilang</option>
				    </optgroup>
                   </select>
                </div>
            </div>
            <div class="form-group row">
            <label for="inputPassword"  class="col-sm-2 col-form-label">Agama</label>
                <div class="col-sm-10">
                    <select class="form-control" name="agama">
                    <optgroup  label="(empty)" id="jeniskelamin">
                    <option value="Hindu">Hindu</option>
                     <option value="Islam">Islam</option>
                     <option value="Katolik">Katolik</option>
                     <option value="Buddha">Buddha</option>
                     <option value="Kristen">Kristen</option>
                     <option value="Konghucu">Konghucu</option>
				    </optgroup>
                   </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">kewarganegaraan</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="kewarganegaraan" id="inputPassword" >
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
            </div>
     </div>

       
<?php $this->load->view("_partials/footer.php") ?>