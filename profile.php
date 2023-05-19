<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <style>
        table{
            width: 100%;
        }
        table, tr, th, td{
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <div>
        <?php
       echo "<table>
            <tr>
                <th>First name</th>
                <th>Last name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Confirm password</th>
                <th colspan='2'>Action</th>
            </tr>";
             include_once "config.php";

             $user_loggedin = $_SESSION['fname'];
             $sql = "SELECT * FROM users WHERE fname='$user_loggedin'";
             $result = $database_connection->query($sql);
             $row = $result-> fetch_assoc();
             echo "<tr>
                        <td>" . $row['fname']. "</td>
                        <td>" . $row['lname']. "</td>
                        <td>" . $row['email']. "</td>
                        <td>" . $row['password']. "</td>
                        <td>" . $row['confirm_password']. "</td>
                        <td><a href='edit.php?id=$row[id]'><i class='bi bi-pencil-square text-success'></i></a></td>
                        <td><a href='delete.php?id=$row[id]'><i class='bi bi-archive-fill text-danger'></i></a></td>    
                    </tr>";
        echo "</table>";
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>