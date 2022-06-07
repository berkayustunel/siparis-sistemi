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
        <table align="center">
            <tr>
            <td><a href="login.php" style="text-decoration:none; color:black; background-color:red;">Giriş Yap</a></td>
            </tr>
            <tr>
            <td><a href="signup.php" style="text-decoration:none; color:black; background-color:red;">Kayıt Ol</a></td>
            </tr>
            <tr>
            <td><a href="https://github.com/berkayustunel/siparis-sistemi" style="text-decoration:none; color:black; background-color:red;">Nasıl Kullanılır?</a></td>
            </tr>
        </table>
        <hr>
    </body>
</html>