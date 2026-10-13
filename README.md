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
text

## Instalasi

1. Clone repository:
git clone https://github.com/RaphlX01/TugasWeb-P10-BlogCRUD.git
text

2. Masuk ke folder project:
cd TugasWeb-P10-BlogCRUD
text

3. Install dependency:
composer install
text

4. Salin file environment:
copy .env.example .env
text

5. Generate application key:
php artisan key:generate
text

6. Buat database `blog_db_10` di phpMyAdmin, lalu atur `.env`:
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=blog_db_10
DB_USERNAME=root
DB_PASSWORD=
text

7. Jalankan migration:
php artisan migrate
text

8. Jalankan project:
php artisan serve
text

9. Buka browser:
http://127.0.0.1:8001/posts
text

## Struktur Folder
app/
├── Http/Controllers/PostController.php
├── Models/Post.php
└── View/Components/
├── Alert.php
└── Card.php
resources/views/
├── layouts/app.blade.php
├── components/
│ ├── alert.blade.php
│ └── card.blade.php
└── posts/
├── index.blade.php
├── create.blade.php
├── edit.blade.php
└── show.blade.php
text

## Repository
TugasWeb-P10-BlogCRUD
text

## Author

Rafael Tamtama Pasaribu
Ilmu Komputer — Universitas Negeri Medan

