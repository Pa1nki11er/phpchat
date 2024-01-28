<?php
require 'connectdb.php';
$taskName = $_POST["taskName"];
//$action1 = $_POST["action"];
//$savedb = sql_connect();$prepSaveDb->bindParam(':title', $taskName, PDO::PARAM_STR);
//$prepSaveDb->bindParam(':action1', $action1, PDO::PARAM_STR);
//$prepSaveDb=$savedb->prepare("UPDATE todos SET checked = :action1 WHERE title = (:title)");
$connect->query("DELETE FROM todos WHERE title = '".$taskName."'");
if (!$connect->connect_error)
{
echo json_encode(["status" => "success",
                  "message"=> $taskName,
                 
                ]);
} 
else 
{
    echo json_encode(["status" => "nope",
    "message"=> $taskName,
    
  ]);
}
?>