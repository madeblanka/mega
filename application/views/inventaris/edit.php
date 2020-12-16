
<?php $this->load->view("_partials/head.php") ?>
<?php $this->load->view("_partials/sidebar.php") ?>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">From Tambah inventaris</h6>
            </div>
            <div class="card-body">
            <form action="<?php echo site_url('inventaris/update') ?>" method="post" enctype="multipart/form-data">
            <?php foreach ($inventaris as $inventaris): ?>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Id inventaris</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="id_inventaris" value="<?php echo $inventaris->id_inventaris?>" id="inputPassword" readonly placeholder="otomatis terisi oleh sistem">
                </div>
            </div>
            <div class="form-group row">
            <label for="inputPassword"  class="col-sm-2 col-form-label">Id Sekolah</label>
                <div class="col-sm-10">
                    <select class="form-control" name="id_sekolah">
                    <optgroup label="(empty)" id="inputPassword">
                     <?php foreach ($sekolah as $sekolah):?>
                     <option value="<?php echo $sekolah->id_sekolah?>"><?php echo $sekolah->nama?> </option>
                     <?php endforeach?>
				    </optgroup>
                   </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="nama" id="inputPassword" value="<?php echo $inventaris->nama?>">
                </div>
            </div>
            <div class="form-group row">
            <label for="inputPassword"  class="col-sm-2 col-form-label">Status</label>
                <div class="col-sm-10">
                    <select class="form-control" name="status">
                    <optgroup  label="(empty)" id="status">
                    <option value="<?php echo $inventaris->status?>"><?php echo $inventaris->status?></option>
                    <option value="Baik">Baik</option>
                    <option value="Cukup Baik">Cukup Baik</option>
                     <option value="Kurang Baik">Kurang Baik</option>
                     <option value="Rusak">Rusak</option>
				    </optgroup>
                   </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">jumlah</label>
                <div class="col-sm-10">
                <input type="number" class="form-control" name="jumlah" id="inputPassword" value="<?php echo $inventaris->jumlah?>">
                </div>
            </div>
            <div class="form-group row">
            <label for="inputPassword"  class="col-sm-2 col-form-label">Sumber</label>
                <div class="col-sm-10">
                    <select class="form-control" name="sumber">
                    <option value="<?php echo $inventaris->sumber?>"><?php echo $inventaris->sumber?></option>
                    <option value="Beli">Beli</option>
                    <option value="Bantuan">Bantuan</option>
                     <option value="Pinjaman">Pinjaman</option>
                     <option value="Sewa">Sewa</option>
				    </optgroup>
                   </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Tahun</label>
                <div class="col-sm-10">
                <input type="date" class="form-control" name="tahun" id="inputPassword" value="<?php echo $inventaris->tahun?>">
                </div>
            </div>
            <button type="submit" class="btn btn-primary"  onclick="return confirm('Apakah Anda Yakin Ingin Menyimpan Data Ini ?');">Simpan</button>
            <?php endforeach?>
            </form>
            </div>
     </div>

       
<?php $this->load->view("_partials/footer.php") ?>