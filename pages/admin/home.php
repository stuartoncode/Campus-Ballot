<?php
    include('../../functions.php');

    if (!isAdmin()) {
        $_SESSION['msg'] = "You must log in first";
        header('location: ../../login.php');
    }

    if(isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['user']);
        header("location: ../../login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="../../css/all.min.css">
    <link rel="stylesheet" href="../../css/main.min.css">
    <link rel="stylesheet" href="../../css/bootstrap.css">
    <title>Dashboard - Campus Ballot</title>
</head>
<body class="gray-body">
    <!-- Side navigation -->
    <div class="sidenav">
        <div class="dash-logo">
            <span><i class="fas fa-vote-yea"></i> Campus Ballot</span>
        </div>

        <a href="#" class="profile-settings"><i class="fas fa-cog"></i></a>

        <div class="profile">
            <img src="../../images/admin_profile.jpg" alt="Admin Profile Photo" class="admin-photo">
        </div>

            <?php if(isset($_SESSION['user'])) : ?>
                <h2 class="username"><?php echo $_SESSION['user']['username']; ?></h2>
            <?php endif ?>

            <a href="#">About</a>
            <a href="#">Services</a>
            <a href="#">Clients</a>
            <a href="#">Contact</a>

    </div>

    <!-- Page content -->
    <div class="main gray-body">
        <h1>...</h1>
    </div>
</body>
</html>