<?

include("baglanti.php");

echo $tarih=date('y-m-d');
$sql="insert into satis values(NULL,'".$_GET['mid']."','".$_GET['urnid']."','".$_POST['adet']."','".$tarih."')";

mysqli_query($baglanti,$sql)or die(mysql_error());
header('location:otomasyon.php?s=satis');

?>