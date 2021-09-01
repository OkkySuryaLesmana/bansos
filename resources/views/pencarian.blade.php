@include('loaders/css')
  @include('component/menu')
  <!-- ======= Hero Section ======= -->
  <section class="mt-5">
    <div class="container">
    <h1 style="text-align:center; font-weight: bold;">Cari Informasi Penerima Bantuan</h1>
      <div class="row d-flex justify-content-center my-5">
        <div class="col-md-4">
          <div class="input-group">
            <input type="text" class="form-control mb-3" placeholder="Masukkan NIK Kepala Keluarga Disini">
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
        </div>
      </div>
      <div class="row">
        <div class="text-center">
          <img class="mx-auto d-block" src="assets/img/pencarian.png" style="width: 40%; height: 100%;"> 
          <br>
        </div>
      </div>
        <div class="container mt-5" style="width: 70%;">
          <h2 style="text-align:center; font-weight: bold;">Informasi Penolakan</h2><br>
          <p style="text-align:center;">Untuk mengecek siapa saja yang telah menerima bantuan, Anda dapat memulai dengan memasukkan NIK dari Kepala Keluarga yang ingin dicari.</p>
          <br>
        </div>
      </div>
    </div> 
  </section><!-- End Hero -->
  <!-- modal -->
@include('modal/modal-search');
@include('loaders/js')