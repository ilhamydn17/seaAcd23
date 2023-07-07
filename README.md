# SeaFlashTix 📽️

SeaFlashTix adalah aplikasi pemesanan tiket bioskop secara online yang memudahkan pengguna untuk mencari, memilih, dan memesan tiket bioskop dengan mudah melalui website. Dengan SeaFlashTix, pengguna dapat memesan tiket bioskop yang diinginkan tanpa harus antri di loket bioskop. Aplikasi ini dibuat menggunakan framework [Laravel](https://laravel.com).

## Tools Requirement
Sebelum menjalankan projek ini, ada beberapa aplikasi/software yang perlu di-install dalam PC atau perangkat anda.
1. [Composer](https://getcomposer.org/download/), package manager PHP.
2. [XAMPP](https://www.apachefriends.org/), local hosting & database management.
3. [Git](https://git-scm.com/downloads), version control system lokal.

## Running Project
1. Clone project ke local.
```
git clone ....
```
2. Jalankan Git Bash pada folder repositori project yang sudah di clone, kemudian update composer.
```
composer update /atau/ composer install
```
3. Copy dan buat file .env
```
cp .env.example .env
```
4. Generate application key
```
php artisan key:generate
```
5. Menjalakan migration
```
php artisan migrate 
```
6. Menjalankan seeder untuk generate data aplikasi
```
php artisan db:seed 
```
7. Menjalankan aplikasi -> pastikan telah menjalankan MySQL dan Apache pada melalui XAMPP control panel terlebih dahulu.
```
php artisan serve
```

## Credits

1. [Stisla](https://choosealicense.com/licenses/mit/), Bootstrap UI template.
2. [Laravel](https://laravel.com), web aplication framework.
3. 


<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>


## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
