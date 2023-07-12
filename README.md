<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# About Website

Website Course Management adalah sebuah aplikasi web sederhana yang dirancang khusus untuk membantu seorang admin platform online course, dalam mengelola kursus dan materi. Aplikasi ini dilengkapi dengan fitur CRUD (Create, Read, Update, Delete) yang memungkinkan untuk membuat, melihat, mengedit, dan menghapus kursus serta materi dengan mudah.

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
- Aplikasi web ini dibangun menggunakan kombinasi teknologi dan bahasa pemrograman berikut:

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

## Manajemen Kursus:
Pengguna dapat melakukan berbagai operasi terkait dengan kursus sebagai berikut:

- Melihat Daftar Kursus:
Pengguna dapat melihat daftar kursus yang tersedia. Setiap kursus akan ditampilkan dalam daftar yang mencakup informasi seperti judul, deskripsi, dan durasi kursus. Daftar ini membantu pengguna untuk melihat secara keseluruhan kursus yang telah dibuat.

- Membuat Kursus Baru:
Pengguna dapat membuat kursus baru dengan mengisi informasi yang diperlukan, seperti judul kursus, deskripsi, dan durasi kursus. Dalam antarmuka, pengguna akan melihat formulir yang memungkinkan mereka untuk memasukkan informasi kursus yang baru.

- Mengedit Kursus:
Pengguna dapat mengedit informasi kursus yang sudah ada. Dalam antarmuka, pengguna akan melihat formulir yang sudah terisi dengan informasi kursus yang ada dan mereka dapat memperbarui informasi tersebut, seperti judul kursus, deskripsi, dan durasi kursus.

- Menghapus Kursus:
Pengguna dapat menghapus kursus yang tidak relevan atau sudah tidak diperlukan. Dalam antarmuka, pengguna akan melihat tombol hapus di samping setiap kursus dalam daftar. Jika pengguna mengklik tombol hapus, kursus tersebut akan dihapus dari sistem.

## Manajemen Materi:
Pengguna dapat melakukan berbagai operasi terkait dengan materi sebagai berikut:

- Melihat Daftar Materi:
Pengguna dapat melihat daftar materi yang telah ditambahkan ke dalam kursus. Setiap materi akan ditampilkan dalam daftar yang mencakup informasi seperti judul, deskripsi, dan link/embed materi. Daftar ini membantu pengguna untuk melihat dan mengakses materi-materi yang ada.

- Membuat Materi Baru:
Pengguna dapat membuat materi baru dengan mengisi informasi yang diperlukan, seperti judul materi, deskripsi, dan link/embed materi. Dalam antarmuka, pengguna akan melihat formulir yang memungkinkan mereka untuk memasukkan informasi materi yang baru.

- Mengedit Materi:
Pengguna dapat mengedit informasi materi yang sudah ada. Dalam antarmuka, pengguna akan melihat formulir yang sudah terisi dengan informasi materi yang ada dan mereka dapat memperbarui informasi tersebut, seperti judul materi, deskripsi, dan link/embed materi.

- Menghapus Materi:
Pengguna dapat menghapus materi yang tidak relevan dalam sebuah kursus. Dalam antarmuka, pengguna akan melihat tombol hapus di samping setiap materi dalam daftar. Jika pengguna mengklik tombol hapus, materi tersebut akan dihapus dari sistem.

## Manajemen Link Materi:
Pengguna dapat melakukan berbagai operasi terkait dengan link materi sebagai berikut:

- Melihat Daftar Link Materi:
Pengguna dapat melihat daftar link materi yang telah ditambahkan. Setiap link materi akan ditampilkan dalam daftar yang mencakup informasi seperti judul, deskripsi, dan link. Daftar ini membantu pengguna untuk melihat dan mengakses link materi yang ada.

- Membuat Link Materi Baru:
Pengguna dapat membuat link materi baru dengan mengisi informasi yang diperlukan, seperti judul link materi, deskripsi, dan link. Dalam antarmuka, pengguna akan melihat formulir yang memungkinkan mereka untuk memasukkan informasi link materi yang baru.

- Mengedit Link Materi:
Pengguna dapat mengedit informasi link materi yang sudah ada. Dalam antarmuka, pengguna akan melihat formulir yang sudah terisi dengan informasi link materi yang ada dan mereka dapat memperbarui informasi tersebut, seperti judul link materi, deskripsi, dan link.

- Menghapus Link Materi:
Pengguna dapat menghapus link materi yang tidak relevan. Dalam antarmuka, pengguna akan melihat tombol hapus di samping setiap link materi dalam daftar. Jika pengguna mengklik tombol hapus, link materi tersebut akan dihapus dari sistem.

Seluruh fitur tersebut diimplementasikan melalui serangkaian rute yang ditentukan dalam kode yang diberikan. Setiap rute memiliki penanganan yang sesuai dalam kontroler yang terkait (KursusController, MateriController, LinkMateriController).
