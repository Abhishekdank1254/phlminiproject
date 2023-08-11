<?php
require_once("config.php");

if(isset($_GET['id'])){
    $ID = $_GET['id'];

    $delete_query = "DELETE FROM student WHERE id = $ID";
    $delete_result = mysqli_query($conn, $delete_query);

    if ($delete_result) {
       echo header('Location: index.php?msg=delete_success');
        exit;
    } else {
       echo header('Location: index.php?msg=something_went_wrong');
        exit;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Student</title>
</head>
<body>
    <button><a href="index.php">View Students</a></button>
</body>
</html>
