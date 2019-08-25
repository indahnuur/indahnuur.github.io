/* EXERCISE 13
*/



Logic Challenge - X dan O
Problem
Diberikan sebuah function xo(str) yang menerima satu parameter berupa string. Function akan me-return true jika jumlah karakter x sama dengan jumlah karakter o, dan false jika tidak.

Code
function xo(str) {
  // you can only write your code here!
}

// TEST CASES
console.log(xo('xoxoxo')); // true
console.log(xo('oxooxo')); // false
console.log(xo('oxo')); // false
console.log(xo('xxxooo')); // true
console.log(xo('xoxooxxo')); // true


/* JAWABAN
*/




<?php
function xo($str) {
    // echo $str[2];
    $x = 0;
    $o = 0;
    $i = 0; //iterasi awal
    for (; $i <= strlen($str); $i++) {
        if ($str[$i] === "x") {
          return "true\n";
            $i++;
        } else if ($str[$i] === "o") {
          return "false\n";
            $o++;
        }
        //ternary operator
        // return $x === $o ? "true\n" : "false\n";
    }
    
}
// TEST CASES
echo xo("xoxoxo"); // true
echo xo("oxooxo"); // false
echo xo("oxo"); // false
echo xo("xxxooo"); // true
echo xo("xoxooxxo"); // true
?>