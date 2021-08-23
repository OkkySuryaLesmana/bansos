<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>PIKOCIS - Bantuan Sosial Kabupaten Ciamis</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  
  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Dosis:300,400,500,,600,700,700i|Lato:300,300i,400,400i,700,700i" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <!-- MDB -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css"rel="stylesheet">
  <!-- MDB -->
  <link rel="stylesheet" href="css/mdb.min.css" />

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">
      <a href="/" class="logo"><img src="assets/img/pikocis.png" alt="" class="img-fluid"></a>
      <!-- Uncomment below if you prefer to use text as a logo -->
      <!-- <h1 class="logo"><a href="index.html">Butterfly</a></h1> -->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a  href="/"><img src="assets/img/home.png" alt="home"/></i>&nbsp;BERANDA</a></li>
          <li><a class="nav-link scrollto" href="/#hotline"><img src="assets/img/pengaduan.png" alt="home"/></i>&nbsp;PENGADUAN</a></li>
          <li><a href="pencarian"><img src="assets/img/search.png" alt="home" /></i>&nbsp;PENCARIAN</a></li>
        <ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" >
    <div class="container">
      <div class="row g-3">
        <div class="col-sm">
          <h1 style="text-align:center;">Cari Informasi Penerima Bantuan</h1>
          <br>
        <div class="col-12">
            <div class="row g-3">
              <div class="col-md-3">
              </div>
                <div class="col-md-4">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Masukkan NIK Kepala Keluarga Disini">
                    <div class="input-group-append">
                        <button class="btn btn-secondary" type="button"style="background-color : #1E88E5;">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                  </div>
                </div>
                <div class="col-md-2">
                  <button type="button" class="btn btn-primary rounded-pill" data-toggle="modal" data-target="#exampleModal">
                    Filter Lengkap
                  </button>
                  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel"style="color:#1E88E5;">PENCARIAN INFORMASI LEBIH LENGKAP</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form class="row g-3">
                            <div class="col-md-6">
                              <label for="inputState" class="form-label">Kecamatan</label>
                              <select id="inputState" class="form-select">
                                <option selected>Pilih Kecamatan</option>
                                <option>CIAMIS</option>
                              </select>
                            </div>
                            <div class="col-md-3">
                              <label for="inputState" class="form-label">Pilih RT / RW </label>
                              <select id="inputState" class="form-select">
                                <option selected>RT</option>
                                <option>01</option>
                                <option>02</option>
                              </select>
                            </div>
                            <div class="col-md-3">
                              <label for="inputState" class="form-label"style="color:#FFFFFF">.</label>
                              <select id="inputState" class="form-select">
                                <option selected>RW</option>
                                <option>01</option>
                                <option>02</option>
                              </select>
                            </div>
                            <div class="col-md-6">
                              <label for="inputState" class="form-label">Kelurahan / Desa</label>
                              <select id="inputState" class="form-select">
                                <option selected>Pilih Kelurahan / Desa</option>
                                <option>CIAMIS</option>
                              </select>
                            </div>
                            <div class="col-md-6">
                              <label for="inputState" class="form-label">Tahapan</label>
                              <select id="inputState" class="form-select">
                                <option selected>PILIH TAHAPAN</option>
                                <option>1</option>
                              </select>
                            </div>
                            <div class="col-md-6">
                              <label for="inputState" class="form-label">Tipe Bantuan </label>
                              <select id="inputState" class="form-select">
                                <option selected>PILIH TIPE BANTUAN</option>
                                <option>PKH</option>
                              </select>
                            </div><br><br>
                            <div class="col-md-6">
                              </select>
                            </div>
                            <br><br>
                            <div class="col-7">
                              <div class="form-check">
                                <p style="color:#1E88E5">  Atur ulang <i class="fas fa-redo-alt"style="color : #1E88E5;"></i> </p>
                                </label>
                              </div>
                            </div>   
                            <div class="col-md-2">
                              <button type="submit" class="btn btn-outline-primary">Batal</button>
                            </div>
                            <div class="col-md-2">
                              <button type="submit" class="btn btn-primary">Terapkan</button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
        
        <div class="container">
          <div class="row">
            <div class="text-center">
              <img class="mx-auto d-block" src="assets/img/pencarian.png"> 
              <br>
            </div>
          </div>
        </div>
        <div class="col-sm">
          <h2 style="text-align:center;">Informasi Penolakan</h2><br>
          <p style="text-align:center;">Untuk mengecek siapa saja yang telah menerima bantuan,</p>
          <p style="text-align:center;">  Anda dapat memulai dengan memasukkan NIK dari Kepala</p>
          <p style="text-align:center;">Keluarga yang ingin dicari.</p>
          <br>
        </div>
      </div>
    </div>
  </div>

  </section><!-- End Hero -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <!-- MDB -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Custom scripts -->
  <script type="text/javascript">
  const searchButton = document.getElementById('search-button');
  const searchInput = document.getElementById('search-input');
  searchButton.addEventListener('click', () => {
  const inputValue = searchInput.value;
  alert(inputValue);
  });</script>
</body>

</html>