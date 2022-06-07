<?php
    session_start();
    if(!isset($_SESSION["login"]))
    {
        header("LOCATION:index.php");
        die();
    }
    extract($_POST);
    if(!isset($name))
    {
        header("LOCATION:list.php");
        die();
    }
    $baglanti = mysqli_connect("localhost", "id19028335_orders", "!ILoJYHp7z9@mrFW", "id19028335_siparisler");
    $sql = "update siparisler set ad='$name', soyad='$surname', siparis='$order', adet='$quantity', ucret='$cost' where siparis_id=" . $_GET["id"];
    $cevap = mysqli_query($baglanti, $sql);
    setcookie("updated", "1", time()+5);
    header("LOCATION:list.php");
?>