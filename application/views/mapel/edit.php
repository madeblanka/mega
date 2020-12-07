<?php $this->load->view("_partials/head.php") ?>
<?php $this->load->view("_partials/sidebar.php") ?>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">From Tambah Guru</h6>
            </div>
            <div class="card-body">
            <form action="<?php echo site_url('mapel/update') ?>" method="post" enctype="multipart/form-data">
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Id mapel</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="id_mapel" id="inputPassword" readonly value="<?php echo $mapel->id_mapel?>">
                </div>
            </div>
            <div class="form-group row">
            <label for="inputPassword"  class="col-sm-2 col-form-label">Id guru</label>
                <div class="col-sm-10">
                    <select name="id_guru">
                    <optgroup class="form-control" label="(empty)" id="inputPassword">
                     <?php foreach ($guru as $guru):?>
                     <option value="<?php echo $guru->id_guru?>"><?php echo $guru->nama?> </option>
                     <?php endforeach?>
				    </optgroup>
                   </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">mata pelajaran</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="matapelajaran" id="inputPassword" value="<?php echo $mapel->matapelajaran?>">
                </div>
            </div>
            <button type="submit" class="btn btn-primary"  onclick="return confirm('Apakah Anda Yakin Ingin Menyimpan Data Ini ?');">Simpan</button>
            </form>
            </div>
     </div>

       
<?php $this->load->view("_partials/footer.php") ?>