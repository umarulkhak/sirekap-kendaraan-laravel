<h3 align="center">Selamat datang di Sistem Informasi Rekam Data Kendaraan! 👋</h3>

**Sistem Informasi Rekam Data Kendaraan dibuat sebagai Ujian Akhir Semester Mata Kuliah Framework Programming.**

## Fitur apa saja yang tersedia di Sistem Informasi Akademik Sekolah?

-   Autentikasi
-   CRUD
-   Cetak Laporan

## Release Date

**Release date : 28 Juni 2021**

> Sistem Informasi Rekam Data Kendaraan merupakan project open source yang dibuat oleh Umar Ulkhak. Kalian dapat download/fork/clone. Cukup beri stars di project ini agar memberiku semangat. Terima kasih!

---

## Install

1. **Clone Repository**

```bash
git clone https://github.com/umarulkhak/uas-umar.git
cd uas-umar
composer install
cp .env.example .env
```

2. **Buka `.env` lalu ubah baris berikut sesuai dengan databasemu yang ingin dipakai**

```bash
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```

3. **Instalasi website**

```bash
php artisan key:generate
php artisan migrate --seed
```

4. **Jalankan website**

```bash
php artisan serve
```

## Contributing

Contributions, issues and feature requests di persilahkan.
Jangan ragu untuk memeriksa halaman masalah jika Anda ingin berkontribusi. **Berhubung Project ini saya sudah selesaikan sendiri, namun banyak fitur yang kalian dapat tambahkan silahkan berkontribusi yaa!**

## License

-   Copyright © 2021 Umar Ulkhak.
-   **Sistem Informasi Rekam Data Kendaraan is open-sourced software licensed.**
