<?php require_once("config.php")?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <button><a href="index.php"> view student</a></button>
    <?php
    if(isset($_POST['submit'])!=NULL){
        $name=$_POST['name'];
        $club=$_POST['club'];
        $insert_query="INSERT into student(name,club) value('$name','$club')";
        $insert_result=mysqli_query($conn,$insert_query);
       if($insert_query){
        header('Location: index.php?msg=recordadded sucessfully');
        exit;
       }

    }
    ?>
    <p>add student 
    <form action="" method="post">
    <label for="">Name</label><br>
        <input type="text" name="name" id="" required><br>
        <label for="">Club</label><br>
        <input type="text" name="club" required><br>
            <br>
        <button type="submit" name="submit">submiit</button>
    </form>
</body>
</html>