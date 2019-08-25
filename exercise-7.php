/*TUGAS NO. 1/

Looping
Soal looping - asterisk ini memiliki 3 nomor.

1. Menyusun Barisan Bintang
Problem
Pada tugas ini kamu diminta untuk melakukan looping dalam JavaScript untuk menampilkan di console barisan asterisks (bintang). Setiap baris memiliki 1 simbol '*'.

Skeleton Code
var rows1; // input the number of rows

// do loops to display asterisks in the console.
Output
jika rows1 = 5

*
*
*
*
*

/*JAWABAN NO.1
*/


<?php  
for ($rows1 = 1; $rows1 <= 5; $rows1++) {
  echo "*\n";
}
?>  



/* TUGAS NO.2
*/

2. Menyusun Barisan Bintang Dengan Nested Looping
Problem
Pada tugas ini kamu diminta untuk melakukan looping dalam JavaScript untuk menampilkan di console barisan asterisks (bintang). Setiap baris memiliki jumlah simbol '*' sesuai dengan jumlah baris. Manfaatkan nested loop atau loop di dalam loop untuk menyelesaikan kasus ini.

Skeleton Code
var rows2; // input the number of rows

// do loops to display asterisks in the console.
Output
jika rows2 = 5

*****
*****
*****
*****
*****



/* TUGAS NO.3
*/
3. Menyusun Barisan Tangga Bintang Dengan Nested Looping
Problem
Pada tugas ini kamu diminta untuk melakukan looping dalam JavaScript untuk menampilkan di console barisan asterisks (bintang) dalam bentuk tangga. Setiap baris memiliki jumlah simbol '*' sesuai dengan nomor baris. Baris pertama, hanya ada satu bintang. Baris kedua, dua bintang, baris ketiga tiga bintang, dan seterusnya. Manfaatkan nested loop atau loop di dalam loop untuk menyelesaikan kasus ini.

Skeleton Code
var rows3; // input the number of rows

// do loops to display asterisks in the console.
Output
jika rows3 = 5

*
**
***
****
*****



/*JAWABAN NO.3
*/



<?php
$rows3 = 5;
$hitung = 1;
for( $karakter=""; ($karakter=$karakter . "*"); $hitung++ )
{
	echo $karakter . "\n";
	if($hitung == $rows3 ){
	break;
	}
}
?>