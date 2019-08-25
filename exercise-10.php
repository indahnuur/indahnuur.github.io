/* EXERCISE 10 NO.1 
*/


Logic Challenge - Bandingkan Angka
Problem
Diberikan sebuah function bandingkanAngka(angka1, angka2) yang menerima dua parameter angka. Function akan me-return nilai true jika angka2 lebih besar dari angka1, dan false jika sebaliknya. Jika kedua angka bernilai sama, function akan me-return -1.

Code
function bandingkanAngka(angka1, angka2) {
  // you can only write your code here!
}

// TEST CASES
console.log(bandingkanAngka(5, 8)); // true
console.log(bandingkanAngka(5, 3)); // false
console.log(bandingkanAngka(4, 4)); // -1
console.log(bandingkanAngka(3, 3)); // -1
console.log(bandingkanAngka(17, 2)); // false

/*JAWABAN
*/





<?php
function bandingkanAngka($angka1, $angka2) {
  if ($angka1 < $angka2){
    return "true\n";
  }
  else if ($angka1 > $angka2){
    return "false\n";
  }
  else if ($angka1 == $angka2){
    return "-1\n";
  }
  // switch($angka1 && $angka2){
  //   case ($angka1 < $angka2) :
  //   return "true\n";
  //   break;
  //   case ($angka1 > $angka2) :
  //   return "false\n";
  //   break;
  //   case ($angka1 == $angka2) :
  //   return "-1\n";
  //   break;
  //   default:
  //   return "hayoo";
  //   break;
  // }
}
// TEST CASES
echo bandingkanAngka(5, 8); // true
echo bandingkanAngka(5, 3); // false
echo bandingkanAngka(4, 4); // -1
echo bandingkanAngka(3, 3); // -1
echo bandingkanAngka(17, 2); // false
?>