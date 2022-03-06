<?php

session_start();

$conn = mysqli_connect("localhost", "root", "", "tiket");

function query($query)
{
    global $conn;

    $rows = [];
    $result = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

function signup($data)
{
    global $conn;

    $nama = $data['nama'];
    $email = $data['email'];
    $nohp = $data['nohp'];
    $password = $data['password'];
    $password2 = $data['password2'];

    $user = query("SELECT * FROM users WHERE email = '$email'");
    // Cek apakah email sudah dipakai
    if ($user) {
        echo "<script>
                alert('Email sudah terpakai')
            </script>";
        return false;
    }

    $password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (nama, email, nohp, password) VALUES ('$nama', '$email', '$nohp', '$password')";
    mysqli_query($conn, $sql);

    return mysqli_affected_rows($conn);
}
