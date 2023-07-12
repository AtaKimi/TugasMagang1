<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# About Website

Website Course Management adalah sebuah aplikasi web sederhana yang dirancang khusus untuk membantu seorang admin platform online course, dalam mengelola kursus dan materi. Aplikasi ini dilengkapi dengan fitur CRUD (Create, Read, Update, Delete) yang memungkinkan untuk membuat, melihat, mengedit, dan menghapus kursus serta materi dengan mudah.

## User Guide

Berikut ini adalah user guide yang telah diperbarui dengan perintah yang Anda berikan:

User Guide:

- Pastikan Anda telah mempersiapkan lingkungan pengembangan yang sesuai, termasuk menginstal PHP, Laravel, dan Node.js.
- Setelah mengunduh atau mengklon proyek aplikasi, buka terminal atau command prompt dan arahkan ke direktori proyek.
- Jalankan perintah composer install di terminal untuk menginstal dependensi PHP yang diperlukan oleh proyek.
- Selanjutnya, jalankan perintah php artisan migrate --seed di terminal. Perintah ini akan menjalankan migrasi database dan memasukkan data awal yang diperlukan untuk aplikasi. Pastikan Anda telah mengkonfigurasi file .env dengan benar untuk koneksi database.
- Setelah migrasi selesai, jalankan perintah php artisan key:generate di terminal untuk menghasilkan kunci aplikasi yang unik.
- Jalankan perintah npm install di terminal untuk menginstal dependensi Node.js yang diperlukan oleh proyek.
- Selanjutnya, jalankan perintah npm run dev di terminal untuk mengkompilasi aset JavaScript dan CSS yang diperlukan oleh aplikasi.
- Sekarang Anda dapat menjalankan server lokal Laravel dengan perintah php artisan serve. Anda akan melihat URL lokal yang dapat Anda akses (misalnya, http://localhost:8000).
- Buka browser web dan akses URL lokal yang ditampilkan setelah menjalankan perintah php artisan serve. Misalnya, buka http://localhost:8000 di browser.
- Di halaman utama aplikasi, Anda akan melihat opsi untuk masuk (login) atau mendaftar (register). Jika Anda belum memiliki akun, klik tautan "Register" dan ikuti langkah-langkah untuk membuat akun baru. Jika Anda ingin menggunakan akun pengguna yang telah disediakan, gunakan informasi berikut:
Username: test@example.com
Password: test123
- Setelah masuk, Anda akan diarahkan ke halaman dashboard. Di sini, Anda dapat melihat informasi sederhana tentang kursus, materi, dan link materi yang ada dalam sistem.
- Navigasi aplikasi akan memberikan akses ke fitur-fitur seperti manajemen kursus, materi, dan link materi. Anda dapat menambahkan, mengedit, atau menghapus data sesuai kebutuhan.

# Fitur Aplikasi:

## Fitur Kursus:

- Menampilkan daftar kursus: GET /kursus (KursusController@index)
- Membuat kursus baru: GET /kursus/create (KursusController@create)
- Menyimpan kursus baru: POST /kursus (KursusController@store)
- Menampilkan detail kursus: GET /kursus/{id} (KursusController@show)
- Mengedit informasi kursus: GET /kursus/{id}/edit (KursusController@edit)
- Memperbarui informasi kursus: PUT /kursus/{id} (KursusController@update)
- Menghapus kursus: DELETE /kursus/{id} (KursusController@destroy)
- Mengedit relasi materi dalam kursus: GET /kursus/{id}/edit-materi-relationship (KursusController@editMateriRelationship)
- Memperbarui relasi materi dalam kursus: PUT /kursus/{id}/materi (KursusController@updateMateriRelationship)

## Fitur Materi:

- Menampilkan daftar materi: GET /materi (MateriController@index)
- Membuat materi baru: GET /materi/create (MateriController@create)
- Menyimpan materi baru: POST /materi (MateriController@store)
- Menampilkan detail materi: GET /materi/{id} (MateriController@show)
- Mengedit informasi materi: GET /materi/{id}/edit (MateriController@edit)
- Memperbarui informasi materi: PUT /materi/{id} (MateriController@update)
- Menghapus materi: DELETE /materi/{id} (MateriController@destroy)
- Mengedit relasi link materi dalam materi: GET /materi/{id}/edit-link-materi-relationship (MateriController@editLinkMateriRelationship)
- Memperbarui relasi link materi dalam materi: PUT /materi/{id}/link-materi (MateriController@updateLinkMateriRelationship)

## Fitur Link Materi:

- Menampilkan daftar link materi: GET /link-materi (LinkMateriController@index)
- Membuat link materi baru: GET /link-materi/create (LinkMateriController@create)
- Menyimpan link materi baru: POST /link-materi (LinkMateriController@store)
- Menampilkan detail link materi: GET /link-materi/{id} (LinkMateriController@show)
- Mengedit informasi link materi: GET /link-materi/{id}/edit (LinkMateriController@edit)
- Memperbarui informasi link materi: PUT /link-materi/{id} (LinkMateriController@update)
- Menghapus link materi: DELETE /link-materi/{id} (LinkMateriController@destroy)

# Aplikasi web ini dibangun menggunakan kombinasi teknologi dan bahasa pemrograman berikut:

# Arsitektur Aplikasi:

Aplikasi Ardi Course Management menggunakan arsitektur berbasis web dengan komponen-komponen berikut:

## Front-end:

- Template Engine: Aplikasi menggunakan Blade Template dari framework Laravel sebagai template engine untuk menghasilkan tampilan dinamis berbasis server-side.
- Styling: Aplikasi menggunakan Tailwind CSS sebagai framework CSS untuk mengatur tampilan antarmuka dengan komponen-komponen yang sudah ada.
- Interaksi Klien: Dalam hal ini, JavaScript tidak digunakan secara eksplisit berdasarkan kode yang diberikan. Namun, jika diperlukan, JavaScript dapat digunakan untuk meningkatkan interaksi klien di sisi front-end.

# Back-end:

## Framework: 

Aplikasi menggunakan Laravel sebagai framework back-end untuk mengatur rute (routing), mengelola logika bisnis, dan menghubungkan antarmuka pengguna dengan database.

## Bahasa Pemrograman:

Aplikasi menggunakan bahasa pemrograman PHP yang disediakan oleh Laravel.

## Database:

- Database Management System: Aplikasi menggunakan SQLite sebagai basis data untuk menyimpan dan mengelola data kursus dan materi.
- Bahasa Query: Aplikasi menggunakan SQL (Structured Query Language) untuk melakukan operasi database seperti pembuatan, pembacaan, pembaruan, dan penghapusan data.
Antarmuka Aplikasi:
- Aplikasi Ardi Course Management menyediakan antarmuka yang responsif dan mudah digunakan untuk melakukan manajemen kursus dan materi. Pengguna yang telah terautentikasi (melalui middleware 'auth') dapat mengakses fitur-fitur aplikasi yang disediakan.

## Autentikasi:
Pengguna dapat melakukan berbagai operasi terkait dengan kursus sebagai berikut:

- Registrasi Pengguna: 
Pengguna yang belum terdaftar dapat mengakses halaman registrasi untuk membuat akun baru dengan mengisi formulir yang diperlukan.

<p align="center"><a href="https://github.com/AtaKimi/TugasMagang1/blob/main/screenshots/Kursus.index.png" target="_blank"><img src="https://github.com/AtaKimi/TugasMagang1/blob/main/screenshots/register.png" width="700" alt="Index Kursus"></a></p>

- Login Pengguna: 
Pengguna yang telah terdaftar dapat menggunakan fitur ini untuk melakukan login dengan memasukkan email dan password mereka.

<p align="center"><a href="https://github.com/AtaKimi/TugasMagang1/blob/main/screenshots/Login.png" target="_blank"><img src="https://github.com/AtaKimi/TugasMagang1/blob/main/screenshots/Login.png" width="700" alt="Index Kursus"></a></p>

## Dashboard:
Halaman ini menampilkan informasi sederhana tentang seluruh data yang ada dalam sistem. Informasi yang ditampilkan termasuk jumlah kursus, jumlah materi, dan jumlah link materi. Halaman ini hanya dapat diakses oleh pengguna yang telah login dan sudah memverifikasi email mereka.

<p align="center"><a href="https://github.com/AtaKimi/TugasMagang1/blob/main/screenshots/Dashboard.png" target="_blank"><img src="https://github.com/AtaKimi/TugasMagang1/blob/main/screenshots/Dashboard.png" width="700" alt="Index Kursus"></a></p>

## Manajemen Kursus:
Pengguna dapat melakukan berbagai operasi terkait dengan kursus sebagai berikut:

- Melihat Daftar Kursus:
Pengguna dapat melihat daftar kursus yang tersedia. Setiap kursus akan ditampilkan dalam daftar yang mencakup informasi seperti judul, deskripsi, dan durasi kursus. Daftar ini membantu pengguna untuk melihat secara keseluruhan kursus yang telah dibuat.

<p align="center"><a href="https://github.com/AtaKimi/TugasMagang1/blob/main/screenshots/Kursus.index.png" target="_blank"><img src="https://github.com/AtaKimi/TugasMagang1/blob/main/screenshots/Kursus.index.png" width="700" alt="Index Kursus"></a></p>

-Tampilkan Detail Kursus:
Fitur ini memungkinkan pengguna untuk melihat detail dari suatu kursus. Pengguna dapat mengklik pada judul atau tombol yang sesuai untuk membuka halaman yang menampilkan informasi lengkap tentang kursus tersebut, termasuk judul, deskripsi, dan durasi.

<p align="center"><a href="https://github.com/AtaKimi/TugasMagang1/blob/main/screenshots/Kursus.show.png" target="_blank"><img src="https://github.com/AtaKimi/TugasMagang1/blob/main/screenshots/Kursus.show.png" width="700" alt="Index Kursus"></a></p>

-Tampilkan Halaman yang berisi untuk menghubungkan kursus dengan tabel Materi:
Fitur ini memungkinkan pengguna untuk mengelola hubungan antara kursus dan tabel Materi. Ketika pengguna mengakses halaman ini, mereka dapat melihat daftar materi yang terhubung dengan kursus tertentu. Halaman ini biasanya menampilkan daftar materi dengan opsi untuk menambahkan, mengedit, atau menghapus materi yang terkait dengan kursus.

<p align="center"><a href="https://github.com/AtaKimi/TugasMagang1/blob/main/screenshots/Kursus.edit-materi-relationship.png" target="_blank"><img src="https://github.com/AtaKimi/TugasMagang1/blob/main/screenshots/Kursus.edit-materi-relationship.png" width="700" alt="Index Kursus"></a></p>

- Membuat Kursus Baru:
Pengguna dapat membuat kursus baru dengan mengisi informasi yang diperlukan, seperti judul kursus, deskripsi, dan durasi kursus. Dalam antarmuka, pengguna akan melihat formulir yang memungkinkan mereka untuk memasukkan informasi kursus yang baru.

<p align="center"><a href="https://github.com/AtaKimi/TugasMagang1/blob/main/screenshots/Kursus.create.png" target="_blank"><img src="https://github.com/AtaKimi/TugasMagang1/blob/main/screenshots/Kursus.create.png" width="700" alt="Create Kursus"></a></p>

- Mengedit Kursus:
Pengguna dapat mengedit informasi kursus yang sudah ada. Dalam antarmuka, pengguna akan melihat formulir yang sudah terisi dengan informasi kursus yang ada dan mereka dapat memperbarui informasi tersebut, seperti judul kursus, deskripsi, dan durasi kursus.

<p align="center"><a href="https://github.com/AtaKimi/TugasMagang1/blob/main/screenshots/Kursus.edit.png" target="_blank"><img src="https://github.com/AtaKimi/TugasMagang1/blob/main/screenshots/Kursus.edit.png" width="700" alt="Create Kursus"></a></p>

- Menghapus Kursus:
Pengguna dapat menghapus kursus yang tidak relevan atau sudah tidak diperlukan. Dalam antarmuka, pengguna akan melihat tombol hapus di samping judul kursus yang ada pada halaman detail. Jika pengguna mengklik tombol hapus, kursus tersebut akan dihapus dari sistem.

<p align="center"><a href="https://github.com/AtaKimi/TugasMagang1/blob/main/screenshots/Kursus.shoow.png" target="_blank"><img src="https://github.com/AtaKimi/TugasMagang1/blob/main/screenshots/Kursus.shoow.png" width="700" alt="Create Kursus"></a></p>

## Manajemen Materi:
Pengguna dapat melakukan berbagai operasi terkait dengan materi sebagai berikut:

- Melihat Daftar Materi:
Pengguna dapat melihat daftar materi yang telah ditambahkan ke dalam kursus. Setiap materi akan ditampilkan dalam daftar yang mencakup informasi seperti judul, deskripsi, dan link/embed materi. Daftar ini membantu pengguna untuk melihat dan mengakses materi-materi yang ada.

<p align="center"><a href="https://github.com/AtaKimi/TugasMagang1/blob/main/screenshots/Materi.index.png" target="_blank"><img src="https://github.com/AtaKimi/TugasMagang1/blob/main/screenshots/Materi.index.png" width="700" alt="Create Kursus"></a></p>

- Tampilkan Detail Materi:
Fitur ini memungkinkan pengguna untuk melihat detail dari suatu materi. Pengguna dapat mengklik pada judul atau tombol yang sesuai untuk membuka halaman yang menampilkan informasi lengkap tentang materi tersebut, seperti judul, deskripsi, dan link/embed materi.

<p align="center"><a href="https://github.com/AtaKimi/TugasMagang1/blob/main/screenshots/Materi.show.png" target="_blank"><img src="https://github.com/AtaKimi/TugasMagang1/blob/main/screenshots/Materi.show.png" width="700" alt="Create Kursus"></a></p>

- Tampilkan Halaman yang berisi untuk menghubungkan kursus dengan tabel Link Materi:
Fitur ini memungkinkan pengguna untuk mengelola hubungan antara kursus dan tabel Link Materi. Ketika pengguna mengakses halaman ini, mereka dapat melihat daftar link materi yang terhubung dengan kursus tertentu. Halaman ini menampilkan daftar link materi dengan opsi untuk menambahkan, mengedit, atau menghapus link materi yang terkait dengan kursus.

<p align="center"><a href="https://github.com/AtaKimi/TugasMagang1/blob/main/screenshots/Materi.edit-link-materi-relationship.png" target="_blank"><img src="https://github.com/AtaKimi/TugasMagang1/blob/main/screenshots/Materi.edit-link-materi-relationship.png" width="700" alt="Create Kursus"></a></p>

- Membuat Materi Baru:
Pengguna dapat membuat materi baru dengan mengisi informasi yang diperlukan, seperti judul materi dan deskripsi. Dalam antarmuka, pengguna akan melihat formulir yang memungkinkan mereka untuk memasukkan informasi materi yang baru.

<p align="center"><a href="https://github.com/AtaKimi/TugasMagang1/blob/main/screenshots/Materi.create.png" target="_blank"><img src="https://github.com/AtaKimi/TugasMagang1/blob/main/screenshots/Materi.create.png" width="700" alt="Create Kursus"></a></p>

- Mengedit Materi:
Pengguna dapat mengedit informasi materi yang sudah ada. Dalam antarmuka, pengguna akan melihat formulir yang sudah terisi dengan informasi materi yang ada dan mereka dapat memperbarui informasi tersebut, seperti judul materi, deskripsi.

<p align="center"><a href="https://github.com/AtaKimi/TugasMagang1/blob/main/screenshots/Materi.edit.png" target="_blank"><img src="https://github.com/AtaKimi/TugasMagang1/blob/main/screenshots/Materi.edit.png" width="700" alt="Create Kursus"></a></p>

- Menghapus Materi:
Pengguna dapat menghapus materi yang tidak relevan dalam sebuah kursus. Dalam antarmuka, pengguna akan melihat tombol hapus di samping judul materi. Jika pengguna mengklik tombol hapus, materi tersebut akan dihapus dari sistem.

<p align="center"><a href="https://github.com/AtaKimi/TugasMagang1/blob/main/screenshots/Kursus.shoow.png" target="_blank"><img src="https://github.com/AtaKimi/TugasMagang1/blob/main/screenshots/Kursus.shoow.png" width="700" alt="Create Kursus"></a></p>

## Manajemen Link Materi:
Pengguna dapat melakukan berbagai operasi terkait dengan link materi sebagai berikut:

- Melihat Daftar Link Materi:
Pengguna dapat melihat daftar link materi yang telah ditambahkan. Setiap link materi akan ditampilkan dalam daftar yang mencakup informasi seperti judul dan link. Daftar ini membantu pengguna untuk melihat dan mengakses link materi yang ada.

<p align="center"><a href="https://github.com/AtaKimi/TugasMagang1/blob/main/screenshots/Link-materi.index.png" target="_blank"><img src="https://github.com/AtaKimi/TugasMagang1/blob/main/screenshots/Link-materi.index.png" width="700" alt="Create Kursus"></a></p>

- Membuat Link Materi Baru:
Pengguna dapat membuat link materi baru dengan mengisi informasi yang diperlukan, seperti judul link materi dan link. Dalam antarmuka, pengguna akan melihat formulir yang memungkinkan mereka untuk memasukkan informasi link materi yang baru.

<p align="center"><a href="https://github.com/AtaKimi/TugasMagang1/blob/main/screenshots/Link-materi.create.png" target="_blank"><img src="https://github.com/AtaKimi/TugasMagang1/blob/main/screenshots/Link-materi.create.png" width="700" alt="Create Kursus"></a></p>

Tampilkan Halaman Detail Link Materi:
Fitur ini memungkinkan pengguna untuk melihat detail dari suatu link materi. Pengguna dapat mengklik pada judul atau tombol yang sesuai untuk membuka halaman yang menampilkan informasi lengkap tentang link materi tersebut, seperti judul, dan link.

<p align="center"><a href="https://github.com/AtaKimi/TugasMagang1/blob/main/screenshots/Link-materi.show.png" target="_blank"><img src="https://github.com/AtaKimi/TugasMagang1/blob/main/screenshots/Link-materi.show.png" width="700" alt="Create Kursus"></a></p>

- Mengedit Link Materi:
Pengguna dapat mengedit informasi link materi yang sudah ada. Dalam antarmuka, pengguna akan melihat formulir yang sudah terisi dengan informasi link materi yang ada dan mereka dapat memperbarui informasi tersebut, seperti judul link materi, deskripsi, dan link.

<p align="center"><a href="https://github.com/AtaKimi/TugasMagang1/blob/main/screenshots/Link-materi.edit.png" target="_blank"><img src="https://github.com/AtaKimi/TugasMagang1/blob/main/screenshots/Link-materi.edit.png" width="700" alt="Create Kursus"></a></p>

- Menghapus Link Materi:
Pengguna dapat menghapus link materi yang tidak relevan. Dalam antarmuka, pengguna akan melihat tombol hapus di samping judul link materi. Jika pengguna mengklik tombol hapus, link materi tersebut akan dihapus dari sistem.

<p align="center"><a href="https://github.com/AtaKimi/TugasMagang1/blob/main/screenshots/Link-materi.show.png" target="_blank"><img src="https://github.com/AtaKimi/TugasMagang1/blob/main/screenshots/Link-materi.show.png" width="700" alt="Create Kursus"></a></p>
