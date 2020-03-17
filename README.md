# TumbasApp

TumbasApp adalah anak perusahaan yang melayani jasa pengembangan aplikasi berbasis Desktop, Mobile dan Android. TumbasApp dinaungi oleh Tumbas Corp. yang didalamnya juga menyediakan berbagai layanan jasa seperti halnya TumbasDesain yang melayani jasa desain grafis dan desain web, TumbasKenangan yang melayani jasa pengambilan kenangan wedding dan wisuda meliputi photography, videography, ataupun pencetakan foto polaroid.

## Requirements (Kebutuhan)
- [PHP](https://php.net/) versi 5.6 atau lebih baru.
- [XAMPP](https://www.apachefriends.org/download.html) 7.2.28 atau lebih baru.
- [Codeigniter](https://codeigniter.com/en/download) versi 3.1.11
- [Visual Studio Code](https://code.visualstudio.com/download) ( an option for your text editor )

## Prepare (Persiapan)
1. Jalankan Webserver anda, dalam kasus ini yaitu XAMPP
2. Download atau Fork repository ini ke dalam htdocs anda, beri nama folder project dengan nama **tumbasapp**
3. Tuliskan link berikut pada browser anda http://localhost/tumbasapp/ 
4. Buat database baru bernama **tumbasapp**, dan import file `tumbasapp.sql` ke dalam database tersebut
5. Pastikan kode pada file `application/config/database.php` telah sama seperti baris kode berikut :
``` php
defined('BASEPATH') OR exit('No direct script access allowed');
$active_group = 'default';
$query_builder = TRUE;

$db['default'] = array(
    'dsn'   => '',
    'hostname' => 'localhost',
    'username' => 'root',
    'password' => '',
    'database' => 'tumbasapp',
    'dbdriver' => 'mysqli',
    'dbprefix' => '',
    'pconnect' => FALSE,
    'db_debug' => (ENVIRONMENT !== 'production'),
    'cache_on' => FALSE,
    'cachedir' => '',
    'char_set' => 'utf8',
    'dbcollat' => 'utf8_general_ci',
    'swap_pre' => '',
    'encrypt' => FALSE,
    'compress' => FALSE,
    'stricton' => FALSE,
    'failover' => array(),
    'save_queries' => TRUE
);
```

## Implementations

1. Jalankan tumbasapp sebagai customer pada link http://localhost/tumbasapp/ dan link berikut sebagai admin http://localhost/tumbasapp/admin/
2. Web saat ini per 2020/03/17 masih sangat berantakan dan memerlukan kerja sama tim untuk melakukan pengembangan.

## Keterangan
- Seluruh baris kode untuk pengembangan aplikasi tumbasapp masih privat dan tidak untuk publik
- Sumber template admin dapat anda unduh disini [Aero Bootstrap](https://drive.google.com/file/d/1FN8bKe-NTiNz1TGZnWVZGIjGWpqZ92Bx/view?usp=sharing), template ini memiliki lisensi sesuai yang tertera pada package file.
- Sumber template customer dapat anda unduh disini [Coagex Creative Agency](https://drive.google.com/file/d/1qi0EqYnPgHjY4Avzq7ETh7he4iZhJbfH/view?usp=sharing), template ini memiliki lisensi sesuai yang tertera pada package file.

