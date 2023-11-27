<?php
require 'connectdb.php';
$taskName = $_POST["taskName"];
$action1 = $_POST["action"];

$savedb = $connect->prepare("UPDATE todos SET checked = :action1 WHERE title = (:title)");
$savedb->bindParam(':title', $taskName, PDO::PARAM_STR);
$savedb->bindParam(':action1', $action1, PDO::PARAM_STR);
if ($savedb->execute())
{
echo json_encode(["status" => "success",
                  "message"=> $taskName,
                  "lala"=> $action1,
                ]);
} 
else 
{
    echo json_encode(["status" => "nope",
    "message"=> $taskName,
    "lala"=> $action1,
  ]);
}
?>