<?php
// Struktur kontrol
echo "<br><br>";

// Menggunakan if-else
$x = 19;
if($x % 2 == 0){
    echo "$x adalah bilangan genap";
} else {
    echo "$x adalah bilangan ganjil";
}
echo "<br><br><br>";

// Menggunakan switch
$tahun = "2018";
if($tahun == "2015"){
    echo "Sekarang tahun 2015";
} elseif ($tahun == "2016"){
    echo "Sekarang tahun 2016";
} elseif ($tahun == "2017"){
    echo "Sekarang tahun 2017";
} else {
    echo "Sekarang tahun 2018";
}
?>