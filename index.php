<?php

# IF ELSE

# variabel yang mau diuji

// $hewan = "sapi";
// $bergerak = "";
// if($hewan == "sapi"){
//     $bergerak = "Lari!";
// }else{
//     $bergerak = "Berenang";
// }
// echo $bergerak;

# Switch

// switch ($hewan){
//     case "Sapi":
//         $bergerak = "Lari";
//         break;
//     case "Burung":
//         $bergerak = "Terbang";
//         break;
//     default:
//         $bergerak = "Berenang";
//         break;
// }

// echo "$bergerak";

# Study Case

$makanmantap = "ayam ternate";
$rasa = "";

if($makanmantap == "MCD"){
    echo "Rasanya Maknyus";
}else if($makanmantap == "KFC"){
    echo "Rasanya Gurih";
}else if($makanmantap == "ayam ternate"){
    echo "Duh rasanya enak banget";
}else{
    echo "Tidak sedap, pait";
}

echo "$rasa";

?>