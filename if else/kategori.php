<?php
$nama = "stefani";
$tb = 200 / 100;
$bb = 60;
$nilai = ($bb / ($tb * $tb));

if ($nilai < 18.5) {
   $bmi = "kurus";
} elseif ($nilai > 30) {
   $bmi ="gemuk";
} else {
   $bmi = "sedang";
}

echo "Halo, $nama. Nilai BMI anda adalah $nilai, anda termasuk $bmi"
?>