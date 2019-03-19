<?php
$joining_date = $_POST['tanggal'];
$timeToAdd = "+ 53 years";
$objDateTime = DateTime::createFromFormat("Y-m-d",$joining_date);
$objDateTime->modify($timeToAdd);
$retire_date = date('d-m-Y', strtotime($joining_date));
$sekarang = date('Y');
$sisa = $objDateTime->format("Y") - $sekarang;

echo "Tanggal Anda Masuk = $retire_date</br>";
print_r('Masa Aktif anda bekerja sampai = ');print_r($objDateTime->format("d-m-Y"));
echo "</br>";
echo "Sisa Masa Aktif anda = $sisa Tahun lagi</br>";

?>