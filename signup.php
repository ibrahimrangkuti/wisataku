<?php include 'header.php' ?>

<?php

if (isset($_POST['signup'])) {
    if (signup($_POST) > 0) {
        echo "<script>
                alert('Akun berhasil didaftarkan, silakan sign in!')
                document.location.href = 'signin.php'
            </script>";
    }
}

?>
<section id="auth">
    <div class="form">
        <h2 class="center">Sign Up</h2>
        <form action="" method="POST">
            <div class="form-group">
                <label for="nama">Nama Lengkap</label>
                <input type="text" name="nama" id="nama" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label><br>
                <input type="email" name="email" id="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label><br>
                <input type="password" name="password" id="password" required>
            </div>
            <div class="form-group">
                <label for="password2">Konfirmasi Password</label><br>
                <input type="password" name="password2" id="password2" required>
            </div>
            <p>Sudah punya akun? <a href="signin.php">Sign In</a></p>
            <button class="btn-primary" name="signup">Sign Up</button>
        </form>
    </div>
</section>