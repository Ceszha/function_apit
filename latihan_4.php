<?php

$a = "Muhammad Rizqi Fithyarabbani";
$b = "17";
$c = "X-RPL 2";
$d = "Jakarta, 18 Februari 2007";
$e = "0895 3454 23600";
$f = "Jl. Mangga Besar XIII, RT.010/RW.003 NO.4";

function mybiodata(){
    global $a, $b, $c, $d, $e, $f;
    echo "<h1>=== Program Biodata Sederhana Function ===</h1>";
    echo "Nama Lengkap : $a <br/>";
    echo "Umur : $b <br/>";
    echo "Kelas : $c <br/>";
    echo "Tempat Tanggal Lahir : $d <br/>";
    echo "No. WhatsApp : $e <br/>";
    echo "Alamat : $f <br/>";
}
echo mybiodata();

echo "<br/><br/><hr><br/>";

function angkot($noangkot, $kondisiterminasi, $kondisiterminasi1, $kondisiterminasi2, $kondisiterminasi3, $kondisiterminasi9, $kondisiterminasi10, $kondisiterminasi11, $kondisiterminasi12, $kondisiterminasi17){
    echo "<h1>=== Program Angkot Sederhana ===</h1>";
    for($noangkot; $noangkot <= $kondisiterminasi; $noangkot++){
    if($noangkot == $kondisiterminasi1 || $noangkot == $kondisiterminasi3 || $noangkot == $kondisiterminasi10 || $noangkot == $kondisiterminasi11){
        echo "Angkot no - $noangkot tersedia <br/>";
    }else if($noangkot == $kondisiterminasi2 || $noangkot == $kondisiterminasi9 || $noangkot == $kondisiterminasi12 || $noangkot == $kondisiterminasi17){
        echo "Angkot no - $noangkot sedang diperbaiki <br/>";
    }else{
        echo "Angkot no - $noangkot tidak tersedia <br/>";
    }
}
}
echo angkot(1, 20, 1, 2, 3, 9, 10, 11, 12, 17);
?>