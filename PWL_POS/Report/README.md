# Dokumentasi Screenshot Aplikasi PWL POS

## 1. Halaman Home / Landing Page

![Halaman Home](image.png)

**Route:** `GET /`  
**Controller:** `HomeController@index`  
**Fungsi:** Halaman utama/beranda aplikasi POS  
**Keterangan:**

- Menampilkan halaman sambutan aplikasi Point of Sale (POS)
- Merupakan halaman pertama yang dilihat user saat mengakses aplikasi
- Biasanya berisi dashboard atau informasi ringkasan

---

## 2. Halaman Produk - Food & Beverage

![Kategori Food & Beverage](image-1.png)

**Route:** `GET /category/food-beverage`  
**Controller:** `ProductController@foodBeverage`  
**Fungsi:** Menampilkan daftar produk kategori makanan dan minuman  
**Keterangan:**

- Menggunakan route prefix `category`
- Menampilkan produk-produk dalam kategori Food & Beverage
- User dapat melihat katalog produk makanan dan minuman yang tersedia

---

## 3. Halaman Produk - Beauty & Health

![Kategori Beauty & Health](image-2.png)

**Route:** `GET /category/beauty-health`  
**Controller:** `ProductController@beautyHealth`  
**Fungsi:** Menampilkan daftar produk kategori kecantikan dan kesehatan  
**Keterangan:**

- Menggunakan route prefix `category`
- Menampilkan produk-produk dalam kategori Beauty & Health
- User dapat melihat katalog produk kecantikan dan kesehatan yang tersedia

---

## 4. Halaman Produk - Home Care

![Kategori Home Care](image-3.png)

**Route:** `GET /category/home-care`  
**Controller:** `ProductController@homeCare`  
**Fungsi:** Menampilkan daftar produk kategori perawatan rumah  
**Keterangan:**

- Menggunakan route prefix `category`
- Menampilkan produk-produk dalam kategori Home Care
- User dapat melihat katalog produk perawatan rumah yang tersedia

---

## 5. Halaman Produk - Baby & Kid

![Kategori Baby & Kid](image-4.png)

**Route:** `GET /category/baby-kid`  
**Controller:** `ProductController@babyKid`  
**Fungsi:** Menampilkan daftar produk kategori bayi dan anak  
**Keterangan:**

- Menggunakan route prefix `category`
- Menampilkan produk-produk dalam kategori Baby & Kid
- User dapat melihat katalog produk bayi dan anak yang tersedia

---

## 6. Halaman User Profile

![User Profile](image-5.png)

**Route:** `GET /user/{id}/name/{name}`  
**Controller:** `UserController@show`  
**Fungsi:** Menampilkan detail profil user berdasarkan ID dan nama  
**Keterangan:**

- Menggunakan route parameter dinamis `{id}` dan `{name}`
- Menampilkan informasi detail user seperti ID dan nama
- Contoh URL: `/user/1/name/John` akan menampilkan user dengan ID 1 dan nama John

---

## 7. Halaman Penjualan (Sales)

![Halaman Sales](image-6.png)

**Route:** `GET /sales`  
**Controller:** `SalesController@index`  
**Fungsi:** Menampilkan halaman transaksi penjualan  
**Keterangan:**

- Menampilkan informasi transaksi penjualan
- Kemungkinan berisi data penjualan, riwayat transaksi, atau form untuk melakukan penjualan baru
- Halaman utama untuk mengelola transaksi penjualan di sistem POS

---

## Ringkasan Route

| No  | Route                     | Method | Controller                     | Fungsi                        |
| --- | ------------------------- | ------ | ------------------------------ | ----------------------------- |
| 1   | `/`                       | GET    | HomeController@index           | Halaman utama                 |
| 2   | `/category/food-beverage` | GET    | ProductController@foodBeverage | Produk makanan & minuman      |
| 3   | `/category/beauty-health` | GET    | ProductController@beautyHealth | Produk kecantikan & kesehatan |
| 4   | `/category/home-care`     | GET    | ProductController@homeCare     | Produk perawatan rumah        |
| 5   | `/category/baby-kid`      | GET    | ProductController@babyKid      | Produk bayi & anak            |
| 6   | `/user/{id}/name/{name}`  | GET    | UserController@show            | Detail profil user            |
| 7   | `/sales`                  | GET    | SalesController@index          | Halaman penjualan             |

## Catatan Teknis

- Semua route menggunakan method HTTP **GET**
- Route produk menggunakan **Route Prefix** `category` untuk pengelompokan yang lebih baik
- Route user menggunakan **Route Parameter** untuk dynamic routing
- Aplikasi ini mengikuti pattern **MVC (Model-View-Controller)** Laravel
