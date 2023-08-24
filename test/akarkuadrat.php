<?php
echo "<style>
h1 {text-align: center;}
h4 {text-align: left;}
p {text-align: center;}
</style>";
echo "<h1>Mencari Persamaan Akar Kuadrat<br>";
$a = 4;
$b = 15;
$c = 9;
$br30 = "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
echo "--------------------------------------<br><h4>Bagus Perwira/X RPL 2/05<br><br>";

echo "A = $a<br>B = $b<br>C = $c<br><br>";
$D = ($b*$b)-(4*$a*$c);
echo "Diskriminan = $D<br><br>";
if ($D > 0){
    echo "Akar Real dan Berbeda<br>";
    $x1 = round(-$b + sqrt($D)/(2*$a));
    $x2 = round(-$b - sqrt($D)/(2*$a));
    echo "x1 = $x1<br>x2 = $x2$br30";
}
elseif ($D > 0){
    echo "Akar Real dan Sama";
    $x1 = round(-$b + sqrt($D)/(2*$a));
    $x2 = $x1;
    echo "x1 = $x1<br>x2 = $x2$br30";
}
else {
    echo "Akar Tidak Real / Imajiner$br30";
}
echo "<footer><p>Nasi Goreng Cap Pak Hidayat</p></footer>";
?>
