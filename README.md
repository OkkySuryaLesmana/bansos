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

#menggunkan seeder 
- tambahkan ke .env FAKER_LOCALE=id_ID
- run seeder dengan php artisan migrate:fresh --seed
- run php artisan db:seed --class=IndikatorSeeder
- php artisan db:seed --class=PenilaianSeeder
