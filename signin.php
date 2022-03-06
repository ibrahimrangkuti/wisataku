<?php include 'header.php' ?>

<?php

if (isset($_POST['signin'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $user = query("SELECT * FROM users WHERE email = '$email'")[0];

    if ($user !== NULL) {
        if (password_verify($password, $user['password'])) {
            $_SESSION['login'] = true;
            if ($user['is_admin']) {
                header('Location: admin/index.php');
            } else {
                header('Location: index.php');
            }
        }
    } else {
        echo "<script>
                alert('Email atau password salah')
            </script>";
    }
}
?>
<section id="auth">
    <div class="form">
        <h2 class="center">Sign In</h2>
        <form action="" method="POST">
            <div class="form-group">
                <label for="email">Email</label><br>
                <input type="email" name="email" id="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label><br>
                <input type="password" name="password" id="password" required>
            </div>
            <p>Belum punya akun? <a href="signup.php">Sign Up</a></p>
            <button class="btn-primary" name="signin">Sign In</button>
        </form>
    </div>
</section>