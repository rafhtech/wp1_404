<!DOCTYPE html>
<html>
    <head>
        <title>Tugas Ke 2</title>
    </head>
    
    <body>
        <h1>Tugas 2 Pertemuan 3</h1>
        <?php
        // tambahan atribut konstanta
        define ("garis","=================================");

        // variabel data
        $nama = "lintang Seruni Senja";
        $alamat = "Jl. Badak No. 2 Cimahi-Bandung";
        $ttl = "Jakarta, 20 Oktober 1990";
        $tlp = "08212345678";

        // mencetak data
        echo garis, 
"<pre>Nama Saya       : $nama
Alamat          : $alamat
TTL             : $ttl
Telp            : $tlp </pre>", garis;
        ?>
    </body>
</html>