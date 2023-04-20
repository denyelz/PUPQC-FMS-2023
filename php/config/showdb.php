<?php 
    include "./database.php";

    $db = new Database;
    $result = $db->GetUsers();
    // $result = $db->GetResults();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database</title>
</head>
<body>
    <table>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <?php 
            while ($row = mysqli_fetch_assoc($result))
            { ?>
                <tbody>
            <td><?php echo $row['UserID']; ?></td>
            <td><?php echo $row['FName']; ?></td>
            <td><?php echo $row['Email']; ?></td>
            </tbody>
            <?php } ?>
        
                   

    </table>
</body>
</html>