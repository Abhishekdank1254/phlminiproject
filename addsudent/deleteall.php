<?php
require_once("config.php");

if(isset($_POST['confirm_delete'])) {
    $delete_query = "DELETE FROM student";
    $delete_result = mysqli_query($conn, $delete_query);
    if ($delete_result) {
        $message = "All records deleted successfully.";
    } else {
        $message = "Error deleting records: " . mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete All Students</title>
</head>
<body>
    <h1>Delete All Students</h1>

    <?php if (isset($message)) { ?>
        <p><?php echo $message; ?></p>
    <?php } ?>

    <form action="" method="post">
        <p>Are you sure you want to delete all records? 
        <button type="submit" name="confirm_delete">Yes, Delete All</button>
    </form>

    <button><a href="index.php">Back to Students</a></button>
</body>
</html>
