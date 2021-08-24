  @include('loaders/css')
  @include('component/menu')
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-left">
    <div class="container">
      <a href="/"class="fas fa-long-arrow-alt-left" style="color:black"> Kembali</a>
        <h1>Statistik Bantuan Tahap 1 di Kelurahan Ciamis</h1>
        <p>Data yang disajikan berikut memuat informasi jenis dan status alokasi bantuan sosial yang dilengkapi jumlah total penerima manfaat di masing-masing wilayah.</p>
          <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist"style="background-color : #E4E6E8;">
            <li class="nav-item">
              <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-bansostahap1" role="tab" aria-controls="pills-home" aria-selected="true">Bantuan Tahap 1</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-bansostahap2" role="tab" aria-controls="pills-profile" aria-selected="false">Bantuan Tahap 2</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-bansostahap3" role="tab" aria-controls="pills-contact" aria-selected="false">Bantuan Tahap 3</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-bansostahap4" role="tab" aria-controls="pills-contact" aria-selected="false">Bantuan Tahap 4</a>
            </li>
          </ul>
          <div class="alert alert-primary d-flex align-items-center" role="alert">
            <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
              <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
              </symbol>
            </svg>
            <div>
              Berikut ini merupakan data penetapan Bantuan Provinsi Tahap I dan PKH, data bantuan lainnya sedang dalam proses pengolahan.
            </div>
          </div>
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-bansostahap1" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="card-deck" class="rounded">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">PKH</h5>
                      <h2 class="card-text">Tidak ada alokasi untuk wilayah ini.</h2>
                      <p class="card-text">Sumber : Kementerian Sosial.</p>
                      <div class="row">
                        <div class="col-sm">
                          DTKS
                          <br>
                          0 KPM
                        </div>
                        <div class="col-sm">
                          Non-DTKS
                          <br>
                          0 KPM
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">KARTU SEMBAKO</h5>
                      <h2 class="card-text">Tidak ada alokasi untuk wilayah ini.</h2>
                      <p class="card-text">Sumber : Kementerian Sosial.</p>
                      <div class="row">
                        <div class="col-sm">
                          DTKS
                          <br>
                          0 KPM
                        </div>
                        <div class="col-sm">
                          Non-DTKS
                          <br>
                          0 KPM
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">BANSOS TUNAI KEMENSOS</h5>
                      <h2 class="card-text">Tidak ada alokasi untuk wilayah ini.</h2>
                      <p class="card-text">Sumber : Kementerian Sosial.</p>
                      <div class="row">
                        <div class="col-sm">
                          DTKS
                          <br>
                          0 KPM
                        </div>
                        <div class="col-sm">
                          Non-DTKS
                          <br>
                          0 KPM
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                
                
                
           
          </div>
            <div class="tab-pane fade" id="pills-bansostahap2" role="tabpanel" aria-labelledby="pills-profile-tab"><div class="card-deck" class="rounded">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">PKH</h5>
                  <h2 class="card-text">Tidak ada alokasi untuk wilayah ini.</h2>
                  <p class="card-text">Sumber : Kementerian Sosial.</p>
                  <div class="row">
                    <div class="col-sm">
                      DTKS
                      <br>
                      0 KPM
                    </div>
                    <div class="col-sm">
                      Non-DTKS
                      <br>
                      0 KPM
                    </div>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">KARTU SEMBAKO</h5>
                  <h2 class="card-text">Tidak ada alokasi untuk wilayah ini.</h2>
                  <p class="card-text">Sumber : Kementerian Sosial.</p>
                  <div class="row">
                    <div class="col-sm">
                      DTKS
                      <br>
                      0 KPM
                    </div>
                    <div class="col-sm">
                      Non-DTKS
                      <br>
                      0 KPM
                    </div>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">BANSOS TUNAI KEMENSOS</h5>
                  <h2 class="card-text">Tidak ada alokasi untuk wilayah ini.</h2>
                  <p class="card-text">Sumber : Kementerian Sosial.</p>
                  <div class="row">
                    <div class="col-sm">
                      DTKS
                      <br>
                      0 KPM
                    </div>
                    <div class="col-sm">
                      Non-DTKS
                      <br>
                      0 KPM
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
            <div class="tab-pane fade" id="pills-bansostahap3" role="tabpanel" aria-labelledby="pills-contact-tab"><div class="card-deck" class="rounded">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">PKH</h5>
                  <h2 class="card-text">Tidak ada alokasi untuk wilayah ini.</h2>
                  <p class="card-text">Sumber : Kementerian Sosial.</p>
                  <div class="row">
                    <div class="col-sm">
                      DTKS
                      <br>
                      0 KPM
                    </div>
                    <div class="col-sm">
                      Non-DTKS
                      <br>
                      0 KPM
                    </div>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">KARTU SEMBAKO</h5>
                  <h2 class="card-text">Tidak ada alokasi untuk wilayah ini.</h2>
                  <p class="card-text">Sumber : Kementerian Sosial.</p>
                  <div class="row">
                    <div class="col-sm">
                      DTKS
                      <br>
                      0 KPM
                    </div>
                    <div class="col-sm">
                      Non-DTKS
                      <br>
                      0 KPM
                    </div>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">BANSOS TUNAI KEMENSOS</h5>
                  <h2 class="card-text">Tidak ada alokasi untuk wilayah ini.</h2>
                  <p class="card-text">Sumber : Kementerian Sosial.</p>
                  <div class="row">
                    <div class="col-sm">
                      DTKS
                      <br>
                      0 KPM
                    </div>
                    <div class="col-sm">
                      Non-DTKS
                      <br>
                      0 KPM
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
            <div class="tab-pane fade" id="pills-bansostahap4" role="tabpanel" aria-labelledby="pills-contact-tab"><div class="card-deck" class="rounded">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">PKH</h5>
                  <h2 class="card-text">Tidak ada alokasi untuk wilayah ini.</h2>
                  <p class="card-text">Sumber : Kementerian Sosial.</p>
                  <div class="row">
                    <div class="col-sm">
                      DTKS
                      <br>
                      0 KPM
                    </div>
                    <div class="col-sm">
                      Non-DTKS
                      <br>
                      0 KPM
                    </div>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">KARTU SEMBAKO</h5>
                  <h2 class="card-text">Tidak ada alokasi untuk wilayah ini.</h2>
                  <p class="card-text">Sumber : Kementerian Sosial.</p>
                  <div class="row">
                    <div class="col-sm">
                      DTKS
                      <br>
                      0 KPM
                    </div>
                    <div class="col-sm">
                      Non-DTKS
                      <br>
                      0 KPM
                    </div>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">BANSOS TUNAI KEMENSOS</h5>
                  <h2 class="card-text">Tidak ada alokasi untuk wilayah ini.</h2>
                  <p class="card-text">Sumber : Kementerian Sosial.</p>
                  <div class="row">
                    <div class="col-sm">
                      DTKS
                      <br>
                      0 KPM
                    </div>
                    <div class="col-sm">
                      Non-DTKS
                      <br>
                      0 KPM
                    </div>
                  </div>
                </div>
              </div>
            </div></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  </section><!-- End Hero -->
  @include(loaders/js)