<?php
  $tinggi_segitiga = 5; 

//   mengulang tinggi dari segitiga
  for($i = 0; $i <= $tinggi_segitiga; $i++) {
   
   // mengulang banyaknya baris
    for($j = 0; $j <= $i; $j++) {
      echo "$j";
    }
    echo " ".PHP_EOL;
  }
?>