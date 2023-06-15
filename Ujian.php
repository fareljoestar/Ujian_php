<?php
$kalori = 2500;

//hari
$senin = 3;
$selasa = 2;
$rabu = 2;
$kamis = 3;
$jumat = 3;
$sabtu = 2;
$minggu = 1;

$hari = $senin + $selasa + $rabu + $kamis +$jumat + $sabtu + $minggu;

//Menjumlahkan perhari
$senin = $senin * $kalori;
$selasa = $selasa * $kalori;
$rabu = $rabu * $kalori;
$kamis = $kamis * $kalori;
$jumat = $jumat * $kalori;
$sabtu = $sabtu * $kalori;
$minggu = $minggu * $kalori;

//menjumlahkan Perminggu
$perminggu = $senin + $selasa + $rabu + $kamis +$jumat + $sabtu + $minggu;

//menampilkan
echo ("senin makan 3× perhari " . $senin .  "kalori" . "<br>");
echo ("selasa makan 2× perhari " . $selasa . " kalori" . "<br>");
echo ("rabu makan 2× perhari " . $rabu . " kalori" . "<br>");
echo ("kamis makan 3× perhari " . $kamis . " kalori" . "<br>");
echo ("jumat makan 3× perhari " . $jumat . " kalori" . "<br>");
echo ("sabtu makan 2× perhari " . $sabtu . " kalori" . "<br>");
echo ("minggu makan 1× perhari " . $minggu . " kalori" . "<br>");
echo "<br>";
echo "Perminggu makan sebanyak " . $hari . " kali " . " Kalori " . $perminggu;
echo "<hr>";
echo "<br>";

//Waktu Istirahat
echo "<b>Waktu Istirahat</b>";
echo "<br>";
echo "<br>";

$senin = 5;
$selasa = 6;
$rabu = 8;
$kamis = 8;
$jumat = 5;
$sabtu = 6;
$minggu = 4;
$batas = 8;

//Jumlah Waktu Istirahat perminggu
$Perminggu_istirahat= $senin + $selasa + $rabu + $kamis + $jumat + $sabtu + $minggu;

//Perhari
echo ("Fu Beristirahat Pada Hari senin Adalah Selama " . $senin . " jam" . "<br>");
echo ("Fu Beristirahat Pada Hari Selasa Adalah selama " . $selasa . " jam" . "<br>");
echo ("Fu Beristirahat Pada Hari Rabu Adalah Selama " . $rabu . " jam" . "<br>");
echo ("Fu Beristirahat Pada Hari Kamis Adalah Selama " . $kamis . " jam" . "<br>");
echo ("Fu Beristirahat Pada Hari Jumat Adalah Selama " . $jumat . " jam" . "<br>");
echo ("Fu Beristirahat Pada Hari Sabtu Adalah Selama " . $sabtu . " jam" . "<br>");
echo ("Fu Beristirahat Pada Hari Minggu Adalah Selama " . $minggu . " jam" . "<br>");
echo ("Istirahat Orang Dewasa Adalah Selama" . $minggu . "jam" . "<br>");
echo "<br>";
echo ("Istirahat Dalam perminggu = " . $Perminggu . " jam");
echo "<hr>";
echo "<b>Apakah Fu Sembuh Atau Tidak ? </b>";
echo "<br>";
echo "<br>";
$kaloriperminggu = "$kalori * 7";
if ($perminggu >= $seminggu && $hari >= $Perminggu_istirahat){
  echo "Fu Sudah Sehat :)";
}else{
  echo "Fu Masih Sakit :(";
}
