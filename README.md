# bansos
 Aplikasi Data Bantuan Sosial Pemerintah Kabupaten Ciamis.
 
Laravel Versi 8.0

Admin Panel Voyager

* Setelah download repository, segera lakukan update composer.
`composer update`

* copy+paste `.env.example` dan ubah menjadi `.env`. sesuaikan nama database, username dan password dengan storage local.

* lakukan migrasi database
`php artisan migrate`

* lakukan instalasi voyager
`php artisan voyager:install --with-dummy`

* Tambahkan symlink, agar data di storage dapat di akses public.
`php artisan storage:link`

Setting Voyager
- klik menu tools>database
- create new table
- isi form tabel
- setelah tabel dibuat, create bread
- ubah pada kolom model menjadi `APP\Models\***`

#menggunkan seeder 
- tambahkan ke .env FAKER_LOCALE=id_ID

`Data Kependudukan`
- run seeder dengan php artisan db:seed --class=DatabaseSeeder

`Indikator Kemiskinan`
- run php artisan db:seed --class=IndikatorSeeder

`Penilaian`
- php artisan db:seed --class=PenilaianSeeder
