# Tugas Rutin 10 — Blog CRUD Laravel

## Deskripsi

Project ini merupakan implementasi CRUD Blog menggunakan Laravel dengan fitur validasi, pagination, Route Model Binding, Blade Components, dan Flash Message.

## Fitur

- CRUD Post (Create, Read, Update, Delete)
- Route Resource (`Route::resource`)
- Named Routes
- Route Model Binding
- Blade Master Layout (`@extends`, `@yield`, `@section`)
- Blade Components (Alert, Card)
- Validasi form (`$request->validate`)
- Error validation per field
- Old input (`old()`)
- Flash message (session)
- Pagination (6 post per halaman)
- `@csrf` + `@method('PUT'/'DELETE')`

## Teknologi

- Laravel 10
- PHP 8.2
- MySQL
- Blade Templating
- Tailwind CSS CDN

## Struktur Halaman
/posts
/posts/create
/posts/{post}
/posts/{post}/edit


## Instalasi

1. Clone repository:
git clone https://github.com/RaphlX01/TugasWeb-P10-BlogCRUD.git


2. Masuk ke folder project:
cd TugasWeb-P10-BlogCRUD


3. Install dependency:
composer install
text

4. Salin file environment:
copy .env.example .env


5. Generate application key:
php artisan key:generate


6. Buat database `blog_db_10` di phpMyAdmin, lalu atur `.env`:
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=blog_db_10
DB_USERNAME=root
DB_PASSWORD=


7. Jalankan migration:
php artisan migrate


8. Jalankan project:
php artisan serve


9. Buka browser:
http://127.0.0.1:8001/posts



## Repository
TugasWeb-P10-BlogCRUD

## Author

Rafael Tamtama Pasaribu
Ilmu Komputer — Universitas Negeri Medan

