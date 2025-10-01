# 📚 Simple Liblary - Laravel

Proyek ini adalah aplikasi sederhana untuk mengelola data **Books** (buku) menggunakan Laravel.  
Fitur yang tersedia mencakup **CRUD** (Create, Read, Update, Delete) serta dukungan **API**.

---

## 🚀 Fitur

-   Tambah buku baru
-   Lihat detail buku
-   Edit/update buku
-   Hapus buku
-   Menampilkan daftar buku
-   API endpoint untuk CRUD Books

---

## 🛠️ Instalasi

1. **Clone repository**
    ```bash
    git clone https://github.com/username/books-management.git
    cd books-management
    Install dependencies
    ```

bash

composer install
npm install && npm run dev
Konfigurasi environment

Salin file .env.example menjadi .env

Sesuaikan konfigurasi database pada .env

Migrasi database

bash

php artisan migrate
Seeder data awal

bash

php artisan db:seed --class=BookSeeder
Jalankan aplikasi

bash

php artisan serve
📂 API Endpoint
Method Endpoint Deskripsi
GET /api/books Menampilkan semua buku
GET /api/books/{id} Menampilkan detail buku
POST /api/books Menambahkan buku baru
PUT /api/books/{id} Update buku berdasarkan ID
DELETE /api/books/{id} Hapus buku berdasarkan ID

🧪 Testing API dengan Postman
Jalankan aplikasi:

bash

php artisan serve
Default: http://127.0.0.1:8000

Import endpoint ke Postman:

Contoh GET semua buku → GET http://127.0.0.1:8000/api/books

Contoh POST tambah buku → POST http://127.0.0.1:8000/api/books

json

{
"title": "Sample Book",
"author": "John Doe",
"year": 2024
}
👨‍💻 Author
Dibuat oleh Ade Nova Wiguna
Seorang Frontend Developer yang juga suka eksplorasi backend dengan Laravel 🚀
