<?php
//require 'function.php';


    //sql_create();
    //$connect = new PDO('mysql:host=localhost;dbname='.$db_name.'','root', '');
    //$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "connected";
    $connect = new mysqli ("localhost","root","","to_do_list");

if (!$connect) {
    echo"connected";
    exit();
  }

  
?>