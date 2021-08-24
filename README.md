# BANSOS
 Aplikasi Data Bantuan Sosial Pemerintah Kabupaten Ciamis.
 
Laravel Versi 8.0
Admin Panel Voyager

* Setelah download repository, segera lakukan update composer.
`composer update`

* copy+paste `.env.example` dan ubah menjadi `.env`. sesuaikan nama database, username dan password dengan local server.

* lakukan migrasi database
`php artisan migrate`

* lakukan instalasi voyager
`php artisan voyager:install --with-dummy`

* Tambahkan symlink, agar data di storage dapat di akses public.
`php artisan storage:link`

# MENGGUNAKAN DATA DUMMY
- Tambahkan ke file .env pada baris terakhir

`FAKER_LOCALE=id_ID`

#run seeder 

Data Kependudukan

`php artisan db:seed --class=DatabaseSeeder`

Data Indikator

`php artisan db:seed --class=IndikatorSeeder`

Data Penilaian

`php artisan db:seed --class=PenilaianSeeder`

Data User

`php artisan db:seed --class=UsersTableSeeder`

# OPSIONAL

`php artisan key:generate` apabila pada saat running aplikasi diminta menambahkan key
