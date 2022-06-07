<?php
    session_start();
    if(!isset($_SESSION["login"]))
    {
        header("LOCATION:index.php");
        die();
    }
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Sipariş Sistemi</title>
    </head>
    <body style="background-color:brown;">
        <center><div style="color:black; font-size:20px;">SİPARİŞ SİSTEMİ</div></center>
        <hr>
        <?php
            $baglanti = mysqli_connect("localhost", "id19028335_orders", "!ILoJYHp7z9@mrFW", "id19028335_siparisler");
            $sql = "select * from siparisler where siparis_id=" . $_GET["id"];
            $cevap = mysqli_query($baglanti, $sql);
            $list = mysqli_fetch_array($cevap);
            echo "<center><form action='guncelle.php?id=" . $_GET["id"] . "' method='POST'>";
            echo "Ad: <input type='text' name='name' value='" . $list["ad"] . "'><br>";
            echo "Soyad: <input type='text' name='surname' value='" . $list["soyad"] . "'><br>";
            echo "Sipariş: <input type='text' name='order' value='" . $list["siparis"] . "'><br>";
            echo "Adet: <input type='text' name='quantity' value='" . $list["adet"] . "'><br>";
            echo "Ücret: <input type='text' name='cost' value='" . $list["ucret"] . "'><br>";
            echo "<button type='submit'>Sipariş Güncelle</button>";
            echo "</form></center>";
        ?>
        <center>
        <a href="list.php" style="text-decoration:none; color:black; background-color:red;">Geri Dön</a>
        </center>
        <hr>
    </body>
</html>