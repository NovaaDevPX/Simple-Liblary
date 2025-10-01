# 📚 Simple Liblary - Laravel

Proyek ini adalah aplikasi sederhana untuk mengelola data **Books** (buku) menggunakan Laravel.
Fitur yang tersedia mencakup **CRUD** (Create, Read, Update, Delete) serta dukungan **API**.

---

## ⚠️ Warning

Project ini dibangun dengan mengambil kerangka Laravel dari project sebelumnya.  
Maka ada kemungkinan terdapat file, konfigurasi, atau folder yang **tidak diperlukan** dalam project ini.

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
```

2. **Install dependencies**

```bash
composer install
npm install && npm run dev
```

3. **Konfigurasi environment**

-   Salin file `.env.example` menjadi `.env`
-   Sesuaikan konfigurasi database pada `.env`

4. **Migrasi database**

```bash
php artisan migrate
```

5. **Seeder data awal**

```bash
php artisan db:seed
```

6. **Jalankan aplikasi**

```bash
php artisan serve
```

---

## 📂 API Endpoint

| Method | Endpoint          | Deskripsi                  |
| ------ | ----------------- | -------------------------- |
| GET    | `/api/books`      | Menampilkan semua buku     |
| GET    | `/api/books/{id}` | Menampilkan detail buku    |
| POST   | `/api/books`      | Menambahkan buku baru      |
| PUT    | `/api/books/{id}` | Update buku berdasarkan ID |
| DELETE | `/api/books/{id}` | Hapus buku berdasarkan ID  |

---

Seorang Frontend Developer yang juga suka eksplorasi backend dengan Laravel 🚀
