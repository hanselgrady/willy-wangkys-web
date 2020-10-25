# Tugas 1 IF3110 Pengembangan Aplikasi Berbasis Web

## Daftar Requirement
* Web browser modern
* Server PHP
* DBMS MySQL

## Instalasi
* Lakukan instalasi MySQL. petunjuk instalasi dapat ditemukan di:
    * [Versi 5.7](https://dev.mysql.com/doc/mysql-installation-excerpt/5.7/en/)
    * [Versi 8.0](https://dev.mysql.com/doc/refman/8.0/en/installing.html)
* Lakukan instalasi web server yang mendukung PHP.
* Buat user baru di MySQL dengan username 'willywangky' dan password 'willywangky'.
* Buka mysql dengan command
    ```
        mysql -u <username> -p
    ```
* Jalankan command berikut untuk create database
    ```
        CREATE DATABASES willywangky;
    ```
* Keluar dari mysql terminal
* Jalankan command berikut untuk mengimport database
    ```
        mysql -u <username> -p willywangky < db/willywangky.sql
    ```
* Pastikan file php.ini mengaktifkan extension mysqli dengan cara membuka file php.ini dan uncomment line hingga sebagai berikut
    ```
        extension=mysqli
    ```
* Untuk sistem operasi linux, install ekstensi menggunakan
    ```
        sudo apt install php-mysql
    ```
## Menjalankan Server
* Buka terminal
* Jalankan command berikut:
    ```
    php -S localhost:8000
    ```
* Buka web browser
* Buka alamat localhost:8000


## Pembagian Tugas


### Frontend
1. Login : 13518140
2. Register : 13518140, 13518115
3. Dashboard : 13518115
4. Search : 13518115
5. Detail : 13518140
6. Add : 13518141
7. Add Stock : 13518141
8. History : 13518141
9. Buy : 13518141

### Backend
1. Login : 13518140
2. Register : 13518140
3. Dashboard : 13518115
4. Search : 13518115
5. Detail : 13518115
6. Add : 13518141
7. Add Stock : 13518141
8. History : 13518141
9. Buy : 13518141
10. Database : 13518141


