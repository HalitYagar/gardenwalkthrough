<?php
  include("ayar.php");
  session_start();
  if(!isset($_SESSION["login"])){
    echo "Bu sayfayı görüntüleme yetkiniz yoktur.";
    header("Refresh: 2; url=../index.php");
  }
  else{
    echo "Admin sayfasına hosgeldiniz..<br>";
    echo "<a href = 'logout.php'>Çıkış Yap</a>";
  }
 ?>
