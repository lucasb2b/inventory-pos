<?php
  try {
    $pdo = new PDO('mysql:host=localhost;dbname=pos_db', 'root', '123456');
    //echo "Connection Successfull!";
  } catch (PDOException $f) {
    echo $f->getMessage();
  }
  
  
?>