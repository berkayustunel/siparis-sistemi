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
        <table align="center">
        <tr>
            <td><a href="add.php" style="text-decoration:none; color:black; background-color:red;">Sipariş Ekle</a></td>
        </tr>
        <tr>
            <td><a href="list.php" style="text-decoration:none; color:black; background-color:red;">Siparişleri Listele</a></td>
        </tr>
        </table>
        <hr>
    </body>
</html>