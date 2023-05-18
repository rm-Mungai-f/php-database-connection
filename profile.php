<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
             $sql = "SELECT * FROM users WHERE fname='munga'";
             $result = $database_connection->query($sql);
             $row = $result-> fetch_assoc();
             echo "<tr>
                        <td>" . $row['fname']. "</td>
                        <td>" . $row['lname']. "</td>
                        <td>" . $row['email']. "</td>
                        <td>" . $row['password']. "</td>
                        <td>" . $row['confirm_password']. "</td>
                        <td><a href= ''>Edit</a/></td>
                        <td><a href= 'delete.php?id=$row[id]'>Delete</a></td>
                    </tr>";
        echo "</table>";
        ?>
    </div>
</body>
</html>