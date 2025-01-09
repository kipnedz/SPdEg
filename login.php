<?php
include 'koneksi.php';
session_start();

$error = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM admin WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        if (password_verify($password, $row['password'])) {
            $_SESSION['admin'] = $row['username'];
            header("Location: pembuka.php"); // Redirect ke dashboard
        } else {
            $error = "Password salah!";
        }
    } else {
        $error = "Username tidak ditemukan!";
    }
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    /* Mengatur latar belakang gambar */
    body {
        background-image: url('images/123.jpg');
        /* Ganti dengan path gambar Anda */
        background-size: cover;
        background-position: center;
        height: 100vh;
        margin: 0;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    /* Membuat form container */
    .form-container {
        background: rgba(255, 255, 255, 0.85);
        /* Semi-transparan */
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.25);
        width: 100%;
        max-width: 400px;
    }

    /* Header */
    h3 {
        font-size: 1.8rem;
        font-weight: bold;
        text-align: center;
        color: #333;
    }

    /* Tombol */
    .btn-primary {
        background-color: #007bff;
        border: none;
        width: 100%;
    }

    .btn-primary:hover {
        background-color: #0056b3;
    }

    /* Alert */
    .alert-danger {
        background-color: #f8d7da;
        border-color: #f5c6cb;
        color: #721c24;
        border-radius: 5px;
    }

    /* Input */
    .form-control {
        border-radius: 10px;
    }
    </style>
</head>

<body>
    <div class="form-container">
        <h3>Login Admin</h3>
        <!-- Menampilkan error jika ada -->
        <?php if (!empty($error)) : ?>
        <div class="alert alert-danger" role="alert">
            <?= $error ?>
        </div>
        <?php endif; ?>

        <form method="POST" action="login.php">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan username"
                    required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password"
                    placeholder="Masukkan password" required>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
        <div class="text-center mt-3">
            <p>Belum punya akun? <a href="registrasi.php">Daftar di sini</a></p>
        </div>
    </div>
</body>

</html>