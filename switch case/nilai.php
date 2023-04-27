<?php
$nilai = 10;
$keterangan = 'Nilai anda ';

switch (true) {
   case ($nilai >= 90):
      $predikat = 'A';
      break;

   case ($nilai < 90 && $nilai >= 80):
      $predikat = 'B';
      break;

   case ($nilai < 80 && $nilai >=  70):
      $predikat = 'C';

   default:
      $predikat = 'D';
}
echo $keterangan . $predikat;
?>