<?php
if (isset($_GET['id'])) {
    $id =  $_GET['id'];

include_once 'config.php';

$sql = "SELECT * FROM users WHERE id='$id'";

$result = $database_connection->query($sql);
$row = $result->fetch_assoc();
$first =  $row['fname'];
$last = $row['lname'];
$mail =$row["email"];
$pwd =$row["password"];
$confirm =$row["confirm_password"];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="signup-form">
        <form action="edit.php" method="post">
            <div class="form-input"><input type="number" name="id" value="<?php echo $id; ?>" placeholder="id field"></div>
            <div class="form-input"><input type="text" name="fname" value="<?php echo $first; ?>" placeholder="Enter first name"></div>
            <div class="form-input"><input type="text" name="lname" value="<?php echo $last; ?>" placeholder="Enter last name"></div>
            <div class="form-input"><input type="email" name="email" value="<?php echo $mail; ?>" placeholder="Enter email"></div>
            <div class="form-input"><input type="password" name="password" value="<?php echo $password; ?>" placeholder="Enter password"></div>
            <div class="form-input"><input type="password" name="confirm_password" value="<?php echo $confirm; ?>" placeholder="Confirm password"></div>
            <div class="form-input"><input type="submit" name="edit" value="Update"></div>
        </form>
    </div>
</body>
</html>
<?php
if (isset($_POST['edit'])) {
    $id  = $_POST['id'];
    $first  = $_POST['fname'];
    $last  = $_POST['lname'];
    $mail = $_POST['email'];
    $pwd = $_POST['password'];
    $confirm =$_POST["confirm_password"];

    include_once "config.php";

    $sql = "UPDATE users SET fname='$first', lname='$last', email='$mail', password='$pwd', confirm_password='$confirm' WHERE id='$id'";
    if ($database_connection->query($sql) === TRUE) {
    echo "Successfully updated.";
   }else{
    echo "Updating failed";
   }
}
?>