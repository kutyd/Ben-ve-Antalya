<?php
function veritemizle($veri){
	 $veri=trim($veri);
	 $veri=stripcslashes($veri);
	 $veri=htmlspecialchars($veri);
}
	 
error_reporting(0);
	echo "Adınız:".$_POST["adsoyad"]."<br>";
	echo "Mailiniz:".$_POST["mail"]."<br>";
	echo "Parolanız:".$_POST["parola"]."<br>";
	echo "Hobileriniz:".$_POST["basketbol"]." ".$_POST["kitap"]." ".$_POST["bilgisayar"]."<br>";
	echo "Takım:".$_POST["takim"]."<br>";
	echo "Şehir:".$_POST["sehir"]."<br>";
	echo "Açıklama".$_POST["aciklama"]."<br>";
	
	
	
?>

