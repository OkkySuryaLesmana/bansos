@include('loaders/css')
  @include('component/menu')
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
@include('loaders/js')