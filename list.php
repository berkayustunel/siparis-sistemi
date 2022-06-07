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
            if(isset($_COOKIE["updated"]))
            {
                echo "<center>Sipariş başarıyla güncellendi!</center>";
            }
            if(isset($_COOKIE["deleted"]))
            {
                echo "<center>Sipariş başarıyla silindi!</center>";
            }
            $baglanti = mysqli_connect("localhost", "id19028335_orders", "!ILoJYHp7z9@mrFW", "id19028335_siparisler");
            $sql = "select * from siparisler";
            $cevap = mysqli_query($baglanti, $sql);
            echo "<center><table border=1> <tr> <th>Ad</th> <th>Soyad</th> <th>Sipariş</th> <th>Adet</th> <th>Fiyat</th> </tr>";
            while($list=mysqli_fetch_array($cevap))
            {
                echo "<tr><td>" . $list["ad"] . "</td>";
                echo "<td>" . $list["soyad"] . "</td>";
                echo "<td>" . $list["siparis"] . "</td>";
                echo "<td>" . $list["adet"] . "</td>";
                echo "<td>" . $list["ucret"] . "</td>";
                echo "<td><a href=update.php?id=" . $list["siparis_id"] . ">Güncelle</a></td>";
                echo "<td><a href=delete.php?id=" . $list["siparis_id"] . ">Sil</a></td></tr>";
            }
            echo "</center>";
        ?>
        <center>
        <a href="anasayfa.php" style="text-decoration:none; color:black; background-color:red;">Geri Dön</a>
        </center>
        <hr>
    </body>
</html>