# 📘 Laravel 12 Simple CRUD Project

## 📌 Deskripsi

Project ini merupakan aplikasi CRUD (Create, Read, Update, Delete) sederhana yang dibuat menggunakan **Laravel 12**, **PHP**, dan **MySQL**.
Aplikasi ini bertujuan untuk membantu memahami dasar penggunaan Laravel mulai dari routing, controller, model, hingga database.

---

## ⚙️ Teknologi yang Digunakan

* PHP 8+
* Laravel 12
* MySQL
* Composer
* Blade Template Engine

---

## 🚀 Fitur Utama

* Menampilkan data (Read)
* Menambahkan data (Create)
* Mengedit data (Update)
* Menghapus data (Delete)
* Validasi form sederhana

---

## 📂 Struktur Project

```bash
app/
routes/
resources/views/
database/migrations/
```

---

## 🛠️ Cara Instalasi

1. **Clone repository**

```bash
git clone https://github.com/username/nama-project.git
cd nama-project
```

2. **Install dependency**

```bash
composer install
```

3. **Copy file environment**

```bash
cp .env.example .env
```

4. **Konfigurasi database di file `.env`**

```env
DB_DATABASE=nama_database
DB_USERNAME=root
DB_PASSWORD=
```

5. **Generate key**

```bash
php artisan key:generate
```

6. **Migrasi database**

```bash
php artisan migrate
```

7. **Jalankan server**

```bash
php artisan serve
```

8. **Akses di browser**

```
http://127.0.0.1:8000
```

---

## 📸 Tampilan (Optional)

Tambahkan screenshot aplikasi di sini jika diperlukan.

---

## 📖 Cara Penggunaan

* Klik tombol tambah untuk menambahkan data
* Klik edit untuk mengubah data
* Klik delete untuk menghapus data

---

## 🧑‍💻 Author

* Nama: Ilham Maulana
* GitHub: https://github.com/username

---

## 📄 License

Project ini dibuat untuk keperluan pembelajaran dan bebas digunakan.
