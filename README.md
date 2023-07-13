# SeaFlashTix 📽️

SeaFlashTix adalah aplikasi pemesanan tiket bioskop secara online yang memudahkan pengguna untuk mencari, memilih, dan memesan tiket bioskop dengan mudah melalui website. Dengan SeaFlashTix, pengguna dapat memesan tiket bioskop yang diinginkan tanpa harus antri di loket bioskop. Aplikasi ini dibuat menggunakan framework [Laravel](https://laravel.com).

## Tools Requirement
Sebelum menjalankan projek ini, ada beberapa aplikasi/software yang perlu di-install dalam PC atau perangkat anda.
1. [Composer](https://getcomposer.org/download/), package manager PHP.
2. [XAMPP](https://www.apachefriends.org/), local hosting & database management (pastikan unduh XAMPP terbaru dengan versi PHP minimal 8.1).
3. [Git](https://git-scm.com/downloads), version control system lokal.

## Running Project
Sebelum menjalankan langkah-langkah dibawah ini, jalankan terlebih dahulu MySQL dan Apache melalui XAMPP control panel yang sudah ter-install. Jalankan perintah-perintah di bawah ini dengan menggunakan terminal Git Bash.
1. Clone project ke local PC anda dengan menggunakan terminal Git Bash.
```
git clone https://github.com/ilhamydn17/seaAcd23.git
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
5. Menjalakan migration, ketik 'yes' jika setelah menjalankan perintah ini muncul permintaan untuk membuat database baru.
```
php artisan migrate
```
6. Menjalankan seeder untuk generate data aplikasi
```
php artisan db:seed 
```
7. Menjalankan aplikasi, setelah menjalankan perintah ini akan muncul alamat host yang sedang berjalan, copy alamat host tersebut dan buka di browser anda.
```
php artisan serve
```
Note
```
*). Untuk melakukan login:
    username => ilham_
    password => ilham123,
    atau dapat dilihat pada file UserSeeder.php
*). Anda juga dapat melakukan registrasi untuk membuat data akun baru.
```



## Credits

1. [Stisla](https://github.com/stisla/stisla), Bootstrap UI template.
2. [Laravel](https://laravel.com), web aplication framework.


<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

<p align="center">The Laravel framework is open-sourced software licensed under the <a href="https://opensource.org/licenses/MIT">MIT license</a>.</p>
