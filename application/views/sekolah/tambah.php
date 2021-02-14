<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkYt4euoxxYMzmLijAQW6Nt9ymCLZ8xGc&callback=initMap&libraries=&v=weekly"
      defer
    ></script>
    <script>
      function initMap() {
        const myLatlng = { lat: -8.656196, lng: 115.217643 };
        const map = new google.maps.Map(document.getElementById("map"), {
          zoom: 15,
          center: myLatlng,
        });
        // Create the initial InfoWindow.
        let infoWindow = new google.maps.InfoWindow({
          content: "Click the map to get Lat/Lng!",
          position: myLatlng,
        });
        infoWindow.open(map);
        // Configure the click listener.
        map.addListener("click", (mapsMouseEvent) => {
          document.getElementById("latLong").value = mapsMouseEvent.latLng;
          // Close the current InfoWindow.
          infoWindow.close();
          // Create a new InfoWindow.
          infoWindow = new google.maps.InfoWindow({
            position: mapsMouseEvent.latLng,
          });
          infoWindow.setContent(
            JSON.stringify(mapsMouseEvent.latLng.toJSON(), null, 2)
          );
          infoWindow.open(map);
        });

        const myLatlng2 = { lat: -8.656196, lng: 115.217643 };
        const map2 = new google.maps.Map(document.getElementById("map2"), {
          zoom: 15,
          center: myLatlng2,
        });
        // Create the initial InfoWindow.
        let infoWindow2 = new google.maps.InfoWindow({
          content: "Click the map to get Lat/Lng!",
          position: myLatlng2,
        });
        infoWindow2.open(map2);
        // Configure the click listener.
        map2.addListener("click", (mapsMouseEvent) => {
          document.getElementById("delivery_coordinate").value = mapsMouseEvent.latLng;
          // Close the current InfoWindow.
          infoWindow2.close();
          // Create a new InfoWindow.
          infoWindow2 = new google.maps.InfoWindow({
            position: mapsMouseEvent.latLng,
          });
          infoWindow2.setContent(
            JSON.stringify(mapsMouseEvent.latLng.toJSON(), null, 2)
          );
          infoWindow2.open(map2);
        });

      }

 
    </script>
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
            <label for="inputPassword"  class="col-sm-2 col-form-label">Jenis</label>
                <div class="col-sm-10">
                    <select class="form-control" name="jenis">
                    <optgroup name="jenis">
                      <option value="Negeri">Negeri</option>
                      <option value="Swasta">Swasta</option>
                    </optgroup>
                    </select>
            </div>
            </div>

            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">rayon</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="rayon" id="inputPassword" >
                </div>
            </div>

            <div class="form-group row">
            <label for="inputPassword"  class="col-sm-2 col-form-label">Jenjang</label>
                <div class="col-sm-10">
                    <select class="form-control" name="jenjang">
                    <optgroup name="jenjang">
                      <option value="TK">TK</option>
                      <option value="SD">SD</option>
                      </optgroup>
                    </select>
            </div>
            </div>

            <div class="form-group row">
            <label for="inputPassword"  class="col-sm-2 col-form-label">akreditasi</label>
                <div class="col-sm-10">
                    <select  class="form-control" name="akreditasi">
                    <optgroup name="jenis">
                      <option value="A">A</option>
                      <option value="B">B</option>
                      <option value="C">C</option>
                      <option value="D">D</option>
                      <option value="E">E</option>
				    </optgroup>
                   </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">latitude longtitude</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="latLong" id="latLong" >
                <br>
                <div id="map" style="height:500px;"></div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
            </div>
     </div>
<?php $this->load->view("_partials/footer.php") ?>