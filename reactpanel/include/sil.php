<?php
if(!empty($_GET["tablo"]) && !empty($_GET["ID"]))
{	
	$resim=$VT->filter($_GET["resim"]);
	$tablo=$VT->filter($_GET["tablo"]);
	$ID=$VT->filter($_GET["ID"]);
	$kontrol=$VT->VeriGetir("moduller","WHERE tablo=? AND durum=?",array($tablo,1),"ORDER BY ID ASC",1);
	if($kontrol!=false)
	{
		$veri=$VT->VeriGetir($kontrol[0]["tablo"],"WHERE ID=?",array($ID),"ORDER BY ID ASC",1);
		if($veri!=false)
		{
			$sil=$VT->SorguCalistir("DELETE FROM ".$tablo,"WHERE ID=?",array($ID),1);
			$sil1=$VT->SorguCalistir("DELETE FROM resimler","WHERE resim=?",array($resim),1);
			?>
        <meta http-equiv="refresh" content="0;url=<?=SITE?>liste/<?=$kontrol[0]["tablo"]?>">
        <?php
		}
		else
		{
			?>
        <meta http-equiv="refresh" content="0;url=<?=SITE?>liste/<?=$kontrol[0]["tablo"]?>">
        <?php
		}
 
	}
	else
	{
		?>
        <meta http-equiv="refresh" content="0;url=<?=SITE?>">
        <?php
	}
}
else
{
	?>
        <meta http-equiv="refresh" content="0;url=<?=SITE?>">
        <?php
}
 ?>