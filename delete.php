<?php
    session_start();
    if(!isset($_SESSION["login"]))
    {
        header("LOCATION:index.php");
        die();
    }
    $baglanti = mysqli_connect("localhost", "id19028335_orders", "!ILoJYHp7z9@mrFW", "id19028335_siparisler");
    $sql = "delete from siparisler where siparis_id=" . $_GET["id"];
    $cevap = mysqli_query($baglanti, $sql);
    setcookie("deleted", "1", time()+5);
    header("LOCATION:list.php");
?>