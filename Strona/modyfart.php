<?php
    session_start();
    try{
      $dbh = new PDO ('mysql:host=localhost;dbname=blog','root','');
      $dbh->query("SET NAMES utf8");
      if(!isset($_POST["hiddID"])){
        header('Location: index.php');
        exit;
      }
      $id=$_POST['hiddID'];
      $tyt=$_POST['name'];
      $arty=$_POST['message'];
      $sql="UPDATE artykuly SET nazwa='$tyt', artykul='$arty' WHERE id_artykulu='$id'";
      $dbh->query($sql);
      header('Location: index.php');
      exit;
    }
    catch(PDOException $e){
      echo 'Connection failed: ' . $e->getMessage();
    }
?>
