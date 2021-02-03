<?php $this->load->view("_partials/head.php") ?>
<?php $this->load->view("_partials/sidebar.php") ?>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">From Tambah Jumlah Siswa</h6>
            </div>
            <div class="card-body">
            <form action="<?php echo site_url('jumlahsiswa/add') ?>" method="post" enctype="multipart/form-data">
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Id jumlahsiswa</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="id_jumlahsiswa" id="inputPassword" readonly placeholder="otomatis terisi oleh sistem">
                </div>
            </div>
            <div class="form-group row">
            <label for="inputPassword"  class="col-sm-2 col-form-label">Id Sekolah</label>
                <div class="col-sm-10">
                    <select name="id_sekolah">
                    <optgroup class="form-control" label="(empty)" id="inputPassword">
                     <?php foreach ($sekolah as $sekolah):?>
                     <option value="<?php echo $sekolah->id_sekolah?>"><?php echo $sekolah->nama?> </option>
                     <?php endforeach?>
				    </optgroup>
                   </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">tahun</label>
                <div class="col-sm-10">
                <input type="year" class="form-control" name="tahun" id="inputPassword" >
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">jumlah siswa</label>
                <div class="col-sm-10">
                <input type="number" class="form-control" name="jumlah_siswa" id="inputPassword" >
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">jumlah siswa masuk</label>
                <div class="col-sm-10">
                <input type="number" class="form-control" name="jumlah_siswa_masuk" id="inputPassword" >
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">jumlah siswa keluar</label>
                <div class="col-sm-10">
                <input type="number" class="form-control" name="jumlah_siswa_keluar" id="inputPassword" >
                </div>
            </div>
            <button type="submit" class="btn btn-primary"  onclick="return confirm('Apakah Anda Yakin Ingin Menyimpan Data Ini ?');">Simpan</button>
            </form>
            </div>
     </div>

       
<?php $this->load->view("_partials/footer.php") ?>