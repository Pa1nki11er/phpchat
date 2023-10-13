<?php
require 'connectdb.php';
$select = 'SELECT * from todos';
$res = $connect->query("SELECT * from todos");


//echo $row['id'], $row['title'], , $row['checked'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"></meta:httpequiv>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>To-Do-list</title>
</head>
<body>
    <div class="main-section">
        <div class="add-section">
           <form action="savedb.php" class="action" method="post">
                <input type="text" name="title" placeholder="This field is required" / >
                <button name="submitButton" type="submit" >Add &nbsp; <span>&#43</span></button>
            
        </div>

        <div class="show-todo-section">

            <?php
            while($row = $res->fetch(PDO::FETCH_ASSOC))
            {?>
            <div class="todo-item">
                <input type="checkbox" name="checked" <?php if ($row['checked']=="on") {?> 
                    checked value="1" > 
                <?php } ?> 
                <h2> <?php echo $row['title'] ?></h2>
                <br>
                <small>created: <?php echo $row['date_time'] ?> </small>
            </div>
            
            <?php } ?>
            
        </div>
        </form>
    </div>

</body>
</html>