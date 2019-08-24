/*EXERCISE 4
/*



Menggunakan Switch-Case
Objectives
Mengerti Cara Menggunakan Switch-Case
Mengerti Logika Switch-Case
Directions
Kamu akan diberikan sebuah tanggal dalam tiga variabel, yaitu hari, bulan, dan tahun. Disini kamu diminta untuk membuat format tanggal. Misal tanggal yang diberikan adalah hari 1, bulan 5, dan tahun 1945. Maka, output yang harus kamu proses adalah menjadi 1 Mei 1945.

Gunakan switch case untuk kasus ini!

Contoh:

var hari = 21; var bulan = 1; var tahun = 1945;

Maka hasil yang akan tampil di console adalah: '21 Januari 1945';

Skeleton Code / Code yang dicontohkan yang perlu diikuti dan dimodifikasi
var tanggal; // assign nilai variabel tanggal disini! (dengan angka antara 1 - 31)
var bulan; // assign nilai variabel bulan disini! (dengan angka antara 1 - 12)
var tahun; // assign nilai variabel tahun disini! (dengan angka antara 1900 - 2200)


/* JAWABAN
*/


<?php
$hari = 21;
$bulan = 1;
$tahun = 1945;
switch($bulan){
  case 1:
    echo "$hari Januari $tahun";
  break;
  case 2:
    echo "$hari Februari $tahun";
  break;
  case 3:
    echo "$hari Maret $tahun";
  break;
  case 4:
    echo "$hari April $tahun";
  break;
  case 5:
    echo "$hari Mei $tahun";
  break;
  case 6:
    echo "$hari Juni $tahun";
  break;
  case 7:
    echo "$hari Juli $tahun";
  break;
  case 8:
    echo "$hari Agustus $tahun";
  break;
  case 9:
    echo "$hari September $tahun";
  break;
  case 10:
    echo "$hari Oktober $tahun";
  break;
  case 11:
    echo "$hari November $tahun";
  break;
  case 12:
    echo "$hari Desember $tahun";
  break;
  default:
  echo "bulan lewat";
  break;
}
?>