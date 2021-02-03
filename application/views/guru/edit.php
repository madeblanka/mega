
<?php $this->load->view("_partials/head.php") ?>
<?php $this->load->view("_partials/sidebar.php") ?>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">From Tambah Guru</h6>
            </div>
            <div class="card-body">
            <form action="<?php echo site_url('guru/update') ?>" method="post" enctype="multipart/form-data">
            <?php foreach ($guru as $guru): ?>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Id Guru</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="id_guru" value="<?php echo $guru->id_guru?>" id="inputPassword" readonly placeholder="otomatis terisi oleh sistem">
                </div>
            </div>
            <div class="form-group row">
            <label for="inputPassword"  class="col-sm-2 col-form-label">Id Sekolah</label>
                <div class="col-sm-10">
                    <select  class="form-control" name="id_sekolah">
                    <optgroup label="(empty)" id="inputPassword">
                    <?php foreach ($sekolah as $sekolah):?>
                     <option value="<?php echo $sekolah->id_sekolah?>"><?php echo $sekolah->nama?> </option>
                     <?php endforeach?>
				    </optgroup>
                   </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">ID Sekolah</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="id_sekolah" id="inputPassword" value="<?php echo $guru->id_sekolah?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Nip</label>
                <div class="col-sm-10">
                <input type="number" class="form-control" name="nip" id="inputPassword" value="<?php echo $guru->nip?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="nama" id="inputPassword" value="<?php echo $guru->nama?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                <input type="email" class="form-control" name="email" id="inputPassword" value="<?php echo $guru->email?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">telp</label>
                <div class="col-sm-10">
                <input type="number" class="form-control" name="telp" id="inputPassword" value="<?php echo $guru->telp?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">jabatan</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="jabatan" id="inputPassword" value="<?php echo $guru->jabatan?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">lulusan</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="lulusan" id="inputPassword" value="<?php echo $guru->lulusan?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">jenis</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="jenis" id="inputPassword" value="<?php echo $guru->jenis?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">jenis kelamin</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="jeniskelamin" id="inputPassword" value="<?php echo $guru->jeniskelamin?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">tempat lahir</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="tempat_lahir" id="inputPassword" value="<?php echo $guru->tempat_lahir?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">tanggal lahir</label>
                <div class="col-sm-10">
                <input type="datetime" class="form-control" name="tanggal_lahir" id="inputPassword"value="<?php echo $guru->tanggal_lahir?>" >
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">alamat</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="alamat" id="inputPassword" value="<?php echo $guru->alamat?>">
                </div>
            </div>
            <button type="submit" class="btn btn-primary"  onclick="return confirm('Apakah Anda Yakin Ingin Menyimpan Data Ini ?');">Simpan</button>
            <?php endforeach?>
            </form>
            </div>
     </div>

       
<?php $this->load->view("_partials/footer.php") ?>