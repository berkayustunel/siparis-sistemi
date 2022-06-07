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
        header("LOCATION:add.php");
        die();
    }
    if($name == "" || $surname == "" || $order == "" || $quantity == "" || $cost == "")
    {
        setcookie("error", "1", time()+5);
        header("LOCATION:add.php");
        die();
    }
    $baglanti = mysqli_connect("localhost", "id19028335_orders", "!ILoJYHp7z9@mrFW", "id19028335_siparisler");
    $sql = "insert into siparisler (ad, soyad, siparis, adet, ucret) values ('$name','$surname','$order','$quantity','$cost')";
    $cevap = mysqli_query($baglanti, $sql);
    setcookie("yeni_siparis", "1", time()+5);
    header("LOCATION:add.php");
?>