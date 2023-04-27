<?php
  $tinggi_segitiga = 5; 

//   mengulang banyaknya tinggi dari segitiga
  for($i = 1; $i <= $tinggi_segitiga; $i++) {
   
   // mengulang banyaknya bintang dalam baris
    for($j = $tinggi_segitiga; $j >= $i; $j--) {
      echo " *";
    }
    echo " ".PHP_EOL;
  }
?>