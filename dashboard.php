<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <nav>
            <div>
                <ul>
                    <li><a href="dashboard.php?id=profile">Profile</a></li>
                    <li><a href="dashboard.php?id=statements">View statements</a></li>
                    <li><a href="dashboard.php?id=loans">Apply loans</a></li>
                    <li><a href="dashboard.php?id=reports">Reports</a></li>
                    <li><a href="dashboard.php?id=logout">Logout</a></li>
                </ul>
            </div>
        </nav>
    </div>
</body>
</html>

<?php
if (isset($_GET['id'])){
    $selected = $_GET['id'];
    switch ($selected) {
        case 'profile':
            include_once "profile.php";
            break;

        case 'statements':
            echo "You selected View statements ";
            break;

        case 'statements':
            echo "You selected View statements ";
            break;

        case 'loans':
            echo "You selected Apply loans ";
            break;

        case 'reports':
            echo "You selected reports ";
            break;

        case 'logout':
            session_start(); //perform logout action
            $_SESSION = array(); //clear session variables
            session_destroy(); //destroy the session
            header("Location: login.php"); // redirect to the login page or any other desired page
            exit();
        
        default:
            # code...
            break;
    }
}
?>

