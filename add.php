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
        <center>
        <?php
            if(isset($_COOKIE["yeni_siparis"]))
            {
                echo "<center>Sipariş başarıyla eklendi!</center>";
            }
            if(isset($_COOKIE["error"]))
            {
                echo "<center><font color='red'>Lütfen bütün alanları doldurun!</font></center>";
            }
        ?>
        <form action="ekle.php" method="POST">
            Ad: <input type="text" name="name"><br>
            Soyad: <input type="text" name="surname"><br>
            Sipariş: <input type="text" name="order"><br>
            Adet: <input type="text" name="quantity"><br>
            Ücret: <input type="text" name="cost"><br>
            <button type="submit">Sipariş Ekle</button>
        </form>
        <a href="anasayfa.php" style="text-decoration:none; color:black; background-color:red;">Geri Dön</a>
        </center>
        <hr>
    </body>
</html>