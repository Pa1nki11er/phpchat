<?php 
$db_name = "to_do_list";

try{
    $connect = new PDO('mysql:host=localhost;dbname='.$db_name.'','root', '');
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "connected";
}
catch(PDOException $e){
    echo 'ERROR '. $e->getMessage();
}
?>