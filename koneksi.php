<?php
if (empty($_SESSION["user"])){
    $_SESSION["alert"] = "Anda harus melakukan login terlebih dahulu!";
    header ("Location:login.php");
}
?>