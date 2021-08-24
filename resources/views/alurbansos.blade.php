  @include('loaders/css')
  @include('component/menu')
  <!-- ======= Hero Section ======= -->
  <br><br><br>
    <div class="container shadow min-vh-100 py-4">
      <br>
      <a href="/"class="fas fa-long-arrow-alt-left" style="color:black"> Kembali</a><br><br>
        <h1>Alur Pemberian Bantuan Sosial</h1><br>
          <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist"style="background-color : #E4E6E8;">
            <li class="nav-item">
              <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-bansostahap1" role="tab" aria-controls="pills-home" aria-selected="true">Alur DTKS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-bansostahap2" role="tab" aria-controls="pills-profile" aria-selected="false">Alur Non-DTKS</a>
            </li>
          </ul>
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-bansostahap1" role="tabpanel" aria-labelledby="pills-home-tab">
              <div class="container">
                <img src="assets/img/dtks.png" class="img-fluid" alt="">
              </div><br>
                <h2>  Penjelasan :</h2><br>
                <p>  1.Basis data diambil dari data Kemensos yang sudah terdaftar sebagai penerima bantuan (DTKS) atau terdaftar di aplikasi SIKS-NG: https://siks.kemsos.go.id/
                <p> 2.Data dikirim ke Dinas Sosial Kab/Kota dan ditembuskan ke Dinsos Provinsi.
                <p> 3.Selanjutnya dilakukan proses pengolahan, pemadanan, verifikasi validasi data dan musyawarah:
                <p> a.Pengolahan dan pemadanan sumber bansos dan subsidi pemerintah.
                <p> b.Pemadanan NIK dan alamat dengan Dinas Kependudukan dan Catatan Sipil Kab/Kota.
                <p> c.Verifikasi Validasi DTKS oleh Petugas Pendata atau oleh Pekerja Sosial Masyarakat (PSM) yang ada di Puskesos Desa.
                <p> d.Musyawarah Kelurahan dan Desa (Muskel/ Musdes) yang dipimpin oleh Kades/Lurah untuk membuat penetapan usulan atau penghapusan usulan yang akan disampaikan ke Pusdatin Kemensos
                <p> 4.Dinas Sosial Kab/Kota mengajukan bantuan sesuai pintu bantuan bansos :
                <p> a.Mengajukan ke Pusdatin Kemensos RI melalui SIKS-NG Untuk Bansos Tunai atau Bansos Sembako.
                <p> b.engajukan ke Dinsos Provinsi Jabar melalui Dinsos Kab/Kota untuk Bansos Provinsi.
                <p> 5.Data Keluarga Miskin Penerima Manfaat (KPM) yang telah disetujui akan diberikan datanya ke PT Pos.
                <p> 6.PT Pos melakukan pembersihan data dan mapping data KPM untuk tingkat RT hingga Kecamatan.
                <p>7.Data yang tidak lengkap akan dikembalikan untuk dilengkapi dan diberikan ke Disperindag / Bulog untuk bantuan non tunai dan Dinsos untuk bantuan tunai agar dilakukan persiapan pengadaan bansos.
                <p>8.Setelah pengadaan siap, PT Pos melakukan pengiriman dan pendistribusian sesuai alokasi bansos yang diterima oleh Keluarga Penerima Manfaat (KPM).
                <p> 9.Bantuan diterima oleh Keluarga Penerima Manfaat (KPM).
                <p> *DTKS : Data Terpadu Kesejahteraan Sosial</p>
          </div>
            <div class="tab-pane fade" id="pills-bansostahap2" role="tabpanel" aria-labelledby="pills-profile-tab">
              <div class="container">
                <img src="assets/img/nondtks.png" class="img-fluid" alt="">
              </div>
            <br>
              <h2>  Penjelasan :</h2><br>
              <p>1. Proses awal data terdiri dari : 
              <p>a. Usulan mandiri oleh masyarakat yang ditujukan melalui aplikasi Sapawarga.
              <p>b. Desa/Kelurahan/Kecamatan mendata dan mengajukan usulan Penerima Bantuan Pemprov Jaabr melalui Dinsos Kab/Kota.
              <p>2. Proses Daftar Usulan Non-DTKS dari Pemkab/Kota disampaikan kepada Gubernur Melalui Dinas Sosial Provinsi lengkap dengan nama dan alamat (BNBA) dengan format yang sudah ditetapkan. 
              <p>3. Vertifikasi dan Validasi via Aplikasi Sapawarga : 
              <p>a. Melakukan pendataan tambahan data calon penerima bantuan jika belum terdaftar dan verval oleh RT/RW menggunakan Aplikasi Sapawarga.
              <p> b. Melakukan pendataan tambahan data calon penerima bantuan jika belum terdaftar dan verval oleh Kelurahan/Desa berkoordinasi dengan RT/RW  menggunakan Aplikasi Sapawarga.         
              <p>4. Verifikasi dan Validasi Manual : 
              <p>a. Proses Provinsi mengembalikan data ke Kabupaten / Kota jika ada kolom alamat yang belum lengkap.
              <p>b. Proses Kabupaten / Kota mengembalikan data ke Provinsi untuk dilakukan pemadanan ke Disdukcapil.         
              <p>5. Proses pemadanan NIK dan Pembersihan data di Provinsi oleh Tim Verifikasi dan Validasi Data Bansos COVID-19 Dinas Sosial Provinsi Jawa Barat dibantu Tim Sapawarga, dengan cara : 
              <p>a. Melakukan Proses Pencocokan NIK dan alamat ke Ditjen Kependudukan dan Catatan Sipil Kemendagri RI.
              <p>b. Melakukan Pemadanan data NON DTKS calon penerima Banprov dengan penerima Bansos yang lain (PKH Reguler/Perluasan, Program Sembako Reguler/Perluasan, BST Kemensos, Bansos sembako Kemensos, Banprov DTKS, Bansos Pemkab/Pemkot).         
              <p>6. Proses pengembalian data yang sudah lengkap ke kab/kota melalui mekanisme download di aplikasi sapawarga dan alternatif melalui google drive untuk kab/kot dapat mengalokasikan Bantuan Provinsi.
              <p>7. Proses penetapan usulan data Penerima Bantuan Pemerintah Provinsi oleh Bupati/Walikota yang dilengkapi dengan SPTJM yang kemudian disahkan oleh Gubernur dalam Kepgub Jabar tentang Penerima Bantuan Pemerintah Provinsi Jawa Barat Bagi Masyarakat yang Terdampak Ekonomi Akibat Pandemi Covid 19.
              <p>8. Proses Pemkab/Pemkot mengembalikan data alokasi banprov melalui mekanisme upload di aplikasi sapawarga dan alternatif melalui google form sesuai kuota yang disahkan dalam SPTJM Bupati/Walikota.
              <p>9. Proses pengiriman data penerima banprov ke Disperindag, PT POS Indonesia Regional Jabar Banten, dan Perum BULOG. 
              <p>10. PT POS mapping data KRTS tersebut sesuai cabang dengan mapping level kecamatan, kelurahan, RT/RW.
              <p>11. Data yang tidak lengkap akan di kembalikan kembali untuk di lengkapi, dan data yang lengkap diberikan ke Dinsos dan Disperindag , bekerja sama dengan Perum BULOG untuk pengadaan bantuan tunai/non tunai.
              <p>12. Setelah pengadaan siap maka PT POS akan melakukan pengiriman dan distribusi sesuai bansos yang di terima oleh Keluarga Rumah Tangga Sasaran (KRTS).
              <p>13. Bantuan diterima oleh Keluarga Rumah Tangga Sasaran (KRTS).</p>
         
         
         
            </p>         
            </div>
            <div class="tab-pane fade" id="pills-bansostahap3" role="tabpanel" aria-labelledby="pills-contact-tab">tahap 3</div>
            <div class="tab-pane fade" id="pills-bansostahap4" role="tabpanel" aria-labelledby="pills-contact-tab">tahap 4</div>
          </div>
        </div>
      </div>
    </div>


  </section><!-- End Hero -->
  @include('loaders/js')