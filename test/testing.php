 <?php
 echo "Mencari Luas dan Keliling Lingkaran<br><br>";
 $p = round(pi(),2);
 $r = 14;
 $L = $p * $r * $r;
 $Kll = $p * ($r + $r);

 echo "Pi = $p<br>";
 echo "Jari - Jari Lingkaran = $r<br><br>";
 echo "Luas Lingkaran = $p * $r * $r<br>";
 echo "Luas Lingkaran = $L  <br><br>";
 echo "Keliling Lingkaran = $p * ($r * 2)<br>";
 echo "Keliling Lingkaran = $Kll <br><br>";
 ?>