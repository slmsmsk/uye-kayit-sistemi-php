<?php require 'config.php'; ?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Üye Giriş Sayfası</title>
	<link rel="stylesheet" href="style.css" />
</head>
<body>
	<form action="" method="post">
<?php
	if($_POST){
		$uye_adi = $_POST["uye_adi"];
		$uye_soyadi = $_POST["uye_soyadi"];
		$uye_kullanici_adi = $_POST["uye_kullanici_adi"];
		$uye_email = $_POST["uye_email"];
		$uye_sifre = $_POST["uye_sifre"];
		$uye_sifre2 = $_POST["uye_sifre2"];
		$uye_dogum_tarihi = $_POST["uye_dogum_tarihi"];
		
		$uye_adi = trim(htmlspecialchars($uye_adi));
		$uye_soyadi = trim(htmlspecialchars($uye_soyadi));
		$uye_kullanici_adi = trim(htmlspecialchars($uye_kullanici_adi));
		$uye_email = trim(htmlspecialchars($uye_email));
		$uye_dogum_tarihi = trim(htmlspecialchars($uye_dogum_tarihi));
		$kod = md5(rand(1000000,4000000));
		
		if(empty($uye_adi) or empty($uye_soyadi) or empty($uye_dogum_tarihi) or empty($uye_kullanici_adi) or empty($uye_email) or empty($uye_sifre) or empty($uye_sifre2)){
			echo '<div class="uyari">Tüm alanları doldurunuz.</div>';
		}else{
			if($uye_sifre == $uye_sifre2){
				$uye_sifre = md5($uye_sifre);
				$ekle = mysql_query("INSERT INTO uye SET
					uye_adi = '$uye_adi',
					uye_soyadi = '$uye_soyadi',
					uye_kullanici_adi = '$uye_kullanici_adi',
					uye_email = '$uye_email',
					uye_sifre = '$uye_sifre',
					uye_onay = false,
					uye_aktivasyon_kodu = '$kod',
					uye_dogum_tarihi = '$uye_dogum_tarihi'
				");
				
				if($ekle){
					echo '<div class="sonuc">Kaydınız başarıyla sonuçlandı.</div>';
				}else{
					echo mysql_error();
				}
				
			}else{
				echo '<div class="uyari">Girdiğiniz şifreler uyuşmuyor.</div>';
			}
		}
		
	}
?>
		<label for="uye_ad">Adınız</label>
		<input type="text" name="uye_adi" required="required" autocomplete="off" />
		<label for="uye_soyad">Soyadınız</label>
		<input type="text" name="uye_soyadi" required="required" autocomplete="off" />
		<label for="uye_kullanici_adi">Kullanıcı Adınız</label>
		<input type="text" name="uye_kullanici_adi" required="required" autocomplete="off" />
		<label for="uye_dogum_tarihi">Doğum Tarihi</label>
		<input type="date" name="uye_dogum_tarihi" required="required" autocomplete="off" />
		<label for="uye_email">Email Adresiniz</label>
		<input type="email" name="uye_email" required="required" autocomplete="off" />
		<label for="uye_sifre">Şifreniz</label>
		<input type="password" name="uye_sifre" required="required" autocomplete="off" />
		<label for="uye_sifre">Şifreniz (tekrar)</label>
		<input type="password" name="uye_sifre2" required="required" autocomplete="off" />
		<button>Kayıt ol</button>
	</form>
</body>
</html>
