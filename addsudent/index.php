<?php require_once("config.php")?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <button><a href="add.php">add student</a></button>
    <button><a href="deleteall.php">deleteall</a></button>
    <table>
        <thead>
            <th>sn</th>
            <th>name</th>
            <th>Associatedclub</th>
        </thead>
        <tbody>
        <?php 
        $SELECT_query ="SELECT * FROM STUDENT";
        $SELECT_RESULT=mysqli_query($conn,$SELECT_query);
      $i=0;
       
            while ($data_row = mysqli_fetch_array($SELECT_RESULT)) {
                $i++;
                ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $data_row['name']; ?></td>
                    <td><?php echo $data_row['club']; ?></td>
                    <td>
                      <button><a href="edit.php?id=<?php echo $data_row['id']; ?>">Edit</a></button>  
                        <button><a href="delete.php?id=<?php echo $data_row['id']; ?>">Delete</button>
                        
                    </td>
                </tr>
           
                <?php
            }
            
            
    
        ?>
        </tbody>
        <tfoot></tfoot>
    </table>
   
</body>
</html>