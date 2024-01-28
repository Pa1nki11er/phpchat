<?php
require 'connectdb.php';
$select = 'SELECT * from todos';
$res = $connect->query("SELECT * from todos");
//var_dump($res->fetch_object());


//echo $row['id'], $row['title'], , $row['checked'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"></meta:httpequiv>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="js/jquery-3.7.1.min.js"></script>
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
            while($row = $res->fetch_object())
            {?>
            <div class="todo-item" id="todo-item">
                <input id="checkbox" type="checkbox" name="checked" <?php
                if ($row->checked == "1")
                {
                 echo "checked";    
                }
                ?> >  
                 
                <h2 id="task" class="task" <?php  if ($row->checked == "1")
                {
                 echo "style='text-decoration:line-through;'";    
                }?>> <?php echo $row->title ?></h2>
                <img src="img/6861362.png" alt="" class="imgDel" id="imgDel">
                <br>
                <small>created: <?php echo $row->date_time ?> </small>
            </div>
            
            <?php } ?>
            
        </div>
        </form>
    </div>
    <script src="js/checkbox.js"></script>
    
</body>
</html>