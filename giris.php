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
        header("LOCATION:login.php");
        die();
    }
    $baglanti = mysqli_connect("localhost", "id19028335_account", "FOBV{]oiOr_?V1>C", "id19028335_hesap");
    $sql = "select * from hesap";
    $cevap = mysqli_query($baglanti, $sql);
    while($list=mysqli_fetch_array($cevap))
    {
        if($username == $list["username"] && $password == $list["password"])
        {
            $_SESSION["login"] = 1; 
            header("LOCATION:index.php");
            die();
        }
    }
    setcookie("deny", "1", time()+5);
    header("LOCATION:login.php");
?>