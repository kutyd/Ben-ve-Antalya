<?php
	$parola1 = "b201210095";
	if ($_POST['parola']== $parola1){
		echo "Hosgeldiniz"." ".$_POST['kullaniciadi'];
		echo "<p> <a href='hakkımızda.htm'>BUYRUN</a></p>";
		}
		
	else{
		echo "turn back!!";
		echo "<p> <a href='index.htm'>Geri Dön</a></p>";
	}
		
?>
