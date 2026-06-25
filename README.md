# NexaGuard

NexaGuard adalah aplikasi web berbasis Laravel yang dikembangkan sebagai project UAS Mata Kuliah Pemrograman Web.

## Fitur Utama

* Login Authentication
* Dashboard Admin
* Manajemen Data Layanan (CRUD)
* Manajemen Artikel (CRUD)
* Company Profile
* Integrasi Database MySQL

## Teknologi yang Digunakan

* Laravel 13
* PHP 8
* MySQL
* Bootstrap 5
* HTML, CSS, JavaScript

## Instalasi

1. Clone repository

```bash
git clone https://github.com/RivaldiIlyas/nexaguard.git
```

2. Install dependency

```bash
composer install
```

3. Copy file environment

```bash
cp .env.example .env
```

4. Generate key

```bash
php artisan key:generate
```

5. Konfigurasi database pada file `.env`

6. Jalankan migration dan seeder

```bash
php artisan migrate --seed
```

7. Jalankan aplikasi

```bash
php artisan serve
```

## Struktur Fitur

* Home
* About
* Services
* Articles
* Contact
* Dashboard Admin

## Tim Pengembang

Project UAS Sistem Informasi Universitas Pamulang.

## Repository

https://github.com/RivaldiIlyas/nexaguard
