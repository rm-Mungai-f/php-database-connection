<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
    <div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <ul class="navbar-nav w-100 d-flex justify-content-between">
                <li class="nav-item">
                    <a class="nav-link" href="dashboard.php?id=profile">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="dashboard.php?id=statements">View statements</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="dashboard.php?id=loans">Apply loans</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="dashboard.php?id=reports">Reports</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="dashboard.php?id=logout">Logout</a>
                </li>
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

