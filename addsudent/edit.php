<?php require_once("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student</title>
</head>
<body>
    <button><a href="index.php">View Students</a></button>
    <?php
    if(isset($_GET['id'])){
        $ID = $_GET['id'];
        $edit_query = "SELECT * FROM student WHERE id = $ID";
        $edit_data = mysqli_query($conn, $edit_query);
        $edit_row = $edit_data->fetch_assoc();
        $edit_name = $edit_row['name'];
        $edit_club = $edit_row['club'];
    }
    if(isset($_POST['submit'])){
        $newName = $_POST['name'];
        $newClub = $_POST['club'];
    
        // Update the record in the database
        $update_query = "UPDATE student SET name = '$newName', club = '$newClub' WHERE id = $ID";
        $result = mysqli_query($conn, $update_query);
    
        if ($result) {
           
           echo header('Location: index.php?msg="Record updated successfully.');
            exit;
        } else {
          echo  header('Location: index.php?msg=something_went_wrong');
            exit;
        }
    }
    
    ?>
    
    <p>Edit.php</p>
    <form action="" method="post">
        <label for="name">Name</label><br>
        <input type="text" name="name" id="name" value="<?php echo $edit_name; ?>"><br>
        <label for="club">Club</label><br>
        <input type="text" name="club" id="club" value="<?php echo $edit_club; ?>"><br>
        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>
