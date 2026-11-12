<?php
// PHP kodları <?php ... ?> etiketleri arasına yazılır.
// değişkenler her zaman $ işareti ile başlar.

// 1. TEMEL VERİ TİPLERİ
$egitimAdi = "Web Geliştirme ve PHP"; // String (Metin)
$toplamSaat = 8;                      // Integer (Tam sayı)
$dersUcreti = 0.0;                    // Float (Ondalıklı sayı)
$sertifikaVarMi = true;               // Boolean (Mantıksal: true / false)

// 2. ARİTMETİK İŞLEMLER
$haftaSayisi = 2;
$haftalikDers = $toplamSaat / $haftaSayisi; // Bölme işlemi

// 3. METİN BİRLEŞTİRME (. operatörü ile yapılır)
$tamBaslik = "MTA Atölyesi - " . $egitimAdi;
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>PHP Temelleri: Değişkenler</title>
</head>
<body>

    <!-- HTML içinde PHP değişkeni yazdırma -->
    <h1><?php echo $tamBaslik; ?></h1>

    <p><strong>Toplam Eğitim Süresi:</strong> <?php echo $toplamSaat; ?> Saat</p>
    <p><strong>Haftalık Ders Saati:</strong> <?php echo $haftalikDers; ?> Saat</p>

    <p>
        <strong>Katılım Belgesi:</strong> 
        <?php 
            // Ternary (Kısa Koşul) kullanımı
            echo $sertifikaVarMi ? "TTO Tarafından Verilecek" : "Verilmeyecek"; 
        ?>
    </p>

</body>
</html>
