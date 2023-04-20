<?php 

include './database.php';
$db = new Database;

session_start();

// Get User's Email and Password
$email = $_POST['email'];
$password = $_POST['pwd'];

// Query the database to find a user with matching email and password
$query = "SELECT UserID, SName FROM User_Accounts WHERE email = '$email' AND password = '$password'";
$result = mysqli_query($db->Opencon(), $query);
while ($row = mysqli_fetch_assoc($result))
            {
echo $row['UserID'];
echo $row['SName'];
}

// // Matched User
// if (mysqli_num_rows($result) == 1) {
//     $row = mysqli_fetch_assoc($result);
//     $_SESSION["user_id"] = $row['UserID'];
//     $_SESSION["user_sname"] = $row['SName'];
// }


echo $_SESSION["user_id"];
?>