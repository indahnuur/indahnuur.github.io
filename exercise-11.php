/*EXERCISE 11 NO. 1
*/



Logic Challenge - Balik Kata
Problem
Diberikan sebuah function balikKata(kata) yang menerima satu parameter berupa string. Function akan me-return kata yang dibalik. Contoh, jika kata adalah "John Doe", function akan me-return "eoD nhoJ".

Code
function balikKata(kata) {
  // you can only write your code here!
}

// TEST CASES
console.log(balikKata('Hello World and Coders')); // sredoC dna dlroW olleH
console.log(balikKata('John Doe')); // eoD nhoJ
console.log(balikKata('I am a bookworm')); // mrowkoob a ma I
console.log(balikKata('Coding is my hobby')); // ybboh ym si gnidoC
console.log(balikKata('Super')); // repuS


/*JAWABAN
*/

<?php
function balikKata($kata) {
  
  return strrev($kata)."\n";
}
// TEST CASES
echo balikKata('Hello World and Coders'); // sredoC dna dlroW olleH
echo balikKata('John Doe'); // eoD nhoJ
echo balikKata('I am a bookworm'); // mrowkoob a ma I
echo balikKata('Coding is my hobby'); // ybboh ym si gnidoC
echo balikKata('Super'); // repuS

?>