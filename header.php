<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Wisata</title>
</head>

<body>
    <?php include 'include/functions.php' ?>

    <nav>
        <div class="logo">
            <a href="">Wisata</a>
        </div>

        <ul class="nav-item">
            <li class="nav-link"><a href="index.php">Home</a></li>
            <li class="nav-link"><a href="#destinasi">Destinasi</a></li>
            <li class="nav-link"><a href="#hotel">Hotel</a></li>
            <?php if ($_SESSION['login']) : ?>
                <li class="nav-link"><a href="logout.php" class="btn-primary">Logout</a></li>
            <?php else : ?>
                <li class="nav-link"><a href="signin.php" class="btn-primary">Sign In</a></li>
            <?php endif; ?>
        </ul>

        <div class="menu-toggle">
            <input type="checkbox" name="toggle" id="toggle">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </nav>