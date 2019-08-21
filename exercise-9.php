/*
 TUGAS NO.1 
 BUATLAH KODE FUNCTION DISINI
*/

console.log(shoutOut()) // Menampilkan "Halo Function!" di console

/*
JAWABAN NO. 1
*/

<?php
function shoutOut() {
    echo "Halo Function!";
}
shoutOut(); // Menampilkan
?>


/*
 TUGAS NO.2
 BUATLAH KODE FUNCTION DISINI
*/

var num1 = 5;
var num2 = 6;

var hasilPerkalian = calculateMultiply(num1,num2);
console.log(hasilPerkalian); // Menampilkan angka 30
/*
JAWABAN NO. 2
*/

<?php

 function  calculateMultiply ($angka1, $angka2) {
	 echo "hasilPerkalian \n";
	 return $angka1 * $angka2;
	 }
	 // Menampilkan angka 30;
	 echo calculateMultiply(5,6);
 ?>
 
 
 /*TUGAS NO.3
*/Buatlah sebuah fungsi bernama processSentence(), yang akan memproses seluruh parameter yang diinput menjadi satu kalimat berikut: "Nama saya [Name], umur saya [Age] tahun, alamat saya di [Address], dan saya punya hobby yaitu [hobby]!"

/*
 BUATLAH KODE FUNCTION DISINI
*/

var name = "Agus";
var age = 30;
var address = "Jln. Malioboro, Yogjakarta";
var hobby = "gaming";

var fullSentence = processSentence(name,age,address,hobby);
console.log(fullSentence); // Menampilkan "Nama saya Agus, umur saya 30 tahun, alamat saya di Jln. Malioboro, Yogjakarta, dan saya punya hobby yaitu gaming!



<?php
function processSentence($nama, $umur, $alamat, $hobby){
  echo "Nama saya $nama, umur saya $umur tahun, alamat saya di $alamat, saya punya hobby yaitu $hobby";
}

processSentence("agus", "30", "Jln. Malioboro, Yogjakarta", "gaming");
 
 ?>