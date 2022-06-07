<?php
    session_start();
    if(isset($_SESSION["login"]))
    {
        header("LOCATION:anasayfa.php");
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
            if(isset($_COOKIE["error"]))
            {
                echo "<font color='red'>Lütfen bütün alanları doldurun!</font>";
            }
        ?>
        <form action="kayit.php" method="POST">
            Kullanıcı Adı: <input type="text" name="username"><br>
            Şifre: <input type="password" name="password"><br>
            <button type="submit">Kayıt Ol</button>
        </form>
        <a href="index.php" style="text-decoration:none; color:black; background-color:red;">Geri Dön</a>
        </center>
        <hr>
    </body>
</html>