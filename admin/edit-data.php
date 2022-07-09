<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css" />

    <!-- Mapbox -->
    <script src="https://api.mapbox.com/mapbox-gl-js/v2.8.2/mapbox-gl.js"></script>
    <link href="https://api.mapbox.com/mapbox-gl-js/v2.8.2/mapbox-gl.css" rel="stylesheet" />

    <!-- My Style -->
    <link rel="stylesheet" href="style.css" />

    <title>Edit Data | SIG Petshop</title>
  </head>
  <body>
    <section id="navbar">
      <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #fffaf4">
        <div class="container">
          <a class="navbar-brand" href="#">
            <strong>SIG <span style="color: #05595b">PETSHOP</span></strong>
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <i class="bi bi-gear-fill"></i>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarTogglerDemo02">
            <ul class="navbar-nav mb-2 mb-lg-0">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <strong>More</strong> </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Dashboard</a></li>
                  <li><a class="dropdown-item" href="#">Data Petshop</a></li>
                  <li><a class="dropdown-item" href="#">Data Request</a></li>
                  <li><a class="dropdown-item" href="#">Logout</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <hr style="margin: 0px 0px; height: 1px; opacity: 0.5" />
    </section>

    <section id="tambah-data-form">
      <div class="tambah-data-form">
        <div class="container">
          <div class="row text-center">
            <h4>Ubah Data</h4>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <div id="map" class="map shadow mt-4" style="width: 100%; height: 400px"></div>
            </div>
            <div class="col-sm-12 mt-4">
              <form action="" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="kategori" value="umkm" />
                <div class="row">
                  <div class="col-sm-12">
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text font-weight-bold text-light" style="background-color: #05595b" id="label-latitude">Latitude</span>
                          </div>
                          <input type="text" class="form-control" id="lat" name="lat" aria-describedby="label-latitude" />
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text font-weight-bold text-light" style="background-color: #05595b" id="label-longitude">Longitude</span>
                          </div>
                          <input type="text" class="form-control" id="lng" name="lng" aria-describedby="label-longitude" />
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="">Nama Petshop</label>
                      <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan nama petshop" />
                    </div>
                    <div class="form-group">
                      <label for="phone">No. Telp</label>
                      <input type="tel" id="phone" name="phone" class="form-control" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" placeholder="Masukan no. telp" />
                    </div>
                    <div class="form-group">
                      <label for="">Kecamatan</label>
                      <select class="form-select" id="kecamatan" name="kecamatan">
                        <option selected>Semua Kecamatan</option>
                        <option value="">Purwokerto Utara</option>
                        <option value="">Purwokerto Timur</option>
                        <option value="">Purwokerto Barat</option>
                        <option value="">Purwokerto Selatan</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="">Jenis Layanan</label>
                      <div class="row">
                        <div class="col-sm-6">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked />
                            <label class="form-check-label" for="flexCheckDefault"> Pet Shop </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" />
                            <label class="form-check-label" for="flexCheckChecked"> Pet Clinic </label>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked />
                            <label class="form-check-label" for="flexCheckDefault"> Pet Grooming </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" />
                            <label class="form-check-label" for="flexCheckChecked"> Pet Hotel </label>
                          </div>
                        </div>
                      </div>
                      <!-- <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked />
                        <label class="form-check-label" for="flexCheckDefault"> Pet Shop </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked />
                        <label class="form-check-label" for="flexCheckChecked"> Pet Clinic </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                        <label class="form-check-label" for="flexCheckDefault"> Pet Grooming </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" />
                        <label class="form-check-label" for="flexCheckChecked"> Pet Hotel </label>
                      </div> -->
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="">Alamat</label>
                      <textarea class="form-control" id="alamat" name="alamat" rows="4"></textarea>
                    </div>
                    <div class="form-group">
                      <label for="formFileMultiple" class="form-label mb-auto">Foto <small>(*Maks 4)</small></label>
                      <input class="form-control" type="file" id="formFileMultiple" multiple />
                      <!-- <label for="">Foto</label>
                      <input type="file" class="form-control" name="foto[]" accept="image/*" multiple /> -->
                    </div>
                    <div class="row mt-2">
                      <div class="col-sm-3">
                        <div class="thumbnail">
                          <img src="../images/background.jpg" alt="" class="d-block w-100" />
                          <div class="caption">
                            <p><a class="btn btn-danger" href="#">Hapus</a></p>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-3">
                        <div class="thumbnail">
                          <img src="../images/background-2.jpg" alt="" class="d-block w-100" />
                          <div class="caption">
                            <p><a class="btn btn-danger" href="#">Hapus</a></p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row mt-2">
                  <div class="col-sm-12">
                    <label for="">Info Detail</label>
                    <textarea class="ckeditor" id="ckedtor" name="info"></textarea>
                  </div>
                </div>
                <div class="row mt-2">
                  <div class="col-sm-12 d-flex justify-content-center">
                    <button type="submit" class="btn btn-block text-light" style="background-color: #05595b">Simpan</button>
                    <button type="submit" class="btn btn-block btn-danger text-light ms-1">Batal</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="footer">
      <div class="py-3">
        <div class="container">
          <div class="row">
            <div class="col">
              <p class="text-secondary mb-0 text-center"><small>2022 - Created by Marsel</small></p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
    <script>
      mapboxgl.accessToken = "pk.eyJ1IjoibWFyc2VsYWRlcmFoYXJqbyIsImEiOiJja3Z6eTl2bXQ0MHdkMm9tb3BwNmZkazUwIn0.Ir9YmaXKN3HfyzzS0zxi2A";
      var map = new mapboxgl.Map({
        container: "map", // container ID
        style: "mapbox://styles/mapbox/streets-v11", // style URL
        center: [109.23819945612114, -7.419380317240572], // starting position [lng, lat]
        zoom: 10, // starting zoom
      });
    </script>
  </body>
</html>