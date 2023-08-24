<?php
//ax^2+bx+c=0
echo "<style>
.bullets {
    height: 10px;
    position: relative;
    border: none;
  }
  
  .center {
    margin: 0;
    position: absolute;
    top: 50%;
    left: 50%;
    -ms-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
  }
.button {
    border: none;
    color: white;
    padding: 4px 16px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    transition-duration: 0.4s;
    cursor: pointer;

    
  }
  
  .button1 {
    background-color: white;
    color: black;
    border: 2px solid #ffad33;
   
  }
  
  .button1:hover {
    background-color: #ffad33;
    color: white;

  }
  
  .button2 {
    background-color: white;
    color: black;
    border: 2px solid #ff3333;

  }
  
  .button2:hover {
    background-color: #ff3333;
    color: white;

  }
p {
    font-family: Arial, Helvetica, sans-serif;
  }
body {background-color: #E0FFFF;}
h1 {text-align: center;}
h4 {text-align: left;}
p {text-align: center;}
</style>";
echo "<h1>Mencari Persamaan Akar Kuadrat<br>";
$a = 4; // Variable A
$b = 12; // Variable B
$c = 9; // Variable C
$br30 = "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
echo "--------------------------------------<br><h4>Bagus Perwira/X RPL 2/05<br><br>";

echo "A = $a<br>B = $b<br>C = $c<br><br>";

//Diskriminan
$D = ($b*$b)-(4*$a*$c); 
echo "Diskriminan = $D<br><br>";

// Jika Diskriminan Lebih dari 0
if ($D > 0){
    echo "Akar Real dan Berbeda<br>";
    $x1 = round(-$b + sqrt($D)/(2*$a));
    $x2 = round(-$b - sqrt($D)/(2*$a));
    echo "x1 = $x1<br>x2 = $x2$br30";
}

// Jika Diskriminan Sama dengan 0
elseif ($D == 0){
    echo "Akar Real dan Sama<br>";
    $x1 = round(-$b + sqrt($D)/(2*$a));
    $x2 = $x1;
    echo "x1 = $x1<br>x2 = $x2$br30";
}

// Jka Diskriminan Kurang dari 0
else {
    echo "Akar Tidak Real / Imajiner$br30";
}
echo "<footer><p>Nasi Goreng Cap Pak Hidayat</p></footer>";
echo "<div class='bullets'><div class='center'>
<a href='https://github.com/zdev2'><button class='button button1'>Github</button></a>
<a href='https://www.youtube.com/@bagusbilek'><button class='button button2'>Youtube</button></a></div></div>";
?>
