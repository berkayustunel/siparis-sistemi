<?php
    session_start();
    if(isset($_SESSION["login"]))
    {
        header("LOCATION:anasayfa.php");
        die();
    }
    extract($_POST);
    if(!isset($username))
    {
        header("LOCATION:signup.php");
        die();
    }
    if($username == "" || $password == "")
    {
        setcookie("error", "1", time()+5);
        header("LOCATION:signup.php");
        die();
    }
    $baglanti = mysqli_connect("localhost", "id19028335_account", "FOBV{]oiOr_?V1>C", "id19028335_hesap");
    $sql = "insert into hesap (username, password) values ('$username','$password')";
    $cevap = mysqli_query($baglanti, $sql);
    setcookie("yeni_kayit", "1", time()+5);
    header("LOCATION:login.php");
?>