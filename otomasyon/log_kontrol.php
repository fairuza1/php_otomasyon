<?php
session_start();
	//oturum değişkenlerini tanımlamaya yarar
    // ve en başta ki satırda olmak zorunda ayrıca üstünde kod olmayacak
    // server tarafında ki bilgisayarlarda olusur sessionlar

if($_POST['kadi']=="a" && $_POST['ksifre'] == "a")
{
	// kullanıcı adı ve şifre girilme durumu doğru oldugunda session olusuturduk
	$_SESSION['giris']="basarili";
	
 header('location:otomasyon.php');	
	
}
else
{
	// kullanıcı adı veya şifre yanlış girilme durumu
	//header()komutu sayfalar arası yönlendirmeye yarar
	header('location:index.php?hata=1');
	//yanlış bir giriş yapıldığında bizi sistem kullanıcı giriş ekranına atmasını sağladı bu komut
	// ? işareti ni ise değişken oldugunu anlatmak için koyduk yani bir sayfada hata lı girdiğimizde burdan anlamamıza yarar
	
	
}


?>