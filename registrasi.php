<?php
include 'koneksi.php';

$message = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $sql = "INSERT INTO admin (username, email, password) VALUES ('$username', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        $message = "Registrasi berhasil! Silakan login.";
    } else {
        $message = "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    /* Mengatur latar belakang halaman */
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
    .btn-success {
        background-color: #28a745;
        border: none;
        width: 100%;
    }

    .btn-success:hover {
        background-color: #218838;
    }

    /* Alert */
    .alert-success {
        background-color: #d4edda;
        border-color: #c3e6cb;
        color: #155724;
        border-radius: 5px;
    }

    /* Input */
    .form-control {
        border-radius: 10px;
    }

    /* Link */
    a {
        color: #007bff;
        text-decoration: none;
    }

    a:hover {
        text-decoration: underline;
    }
    </style>
</head>

<body>
    <div class="form-container">
        <h3>Register Admin</h3>
        <!-- Menampilkan pesan jika ada -->
        <?php if (!empty($message)) : ?>
        <div class="alert alert-success" role="alert">
            <?= $message ?>
        </div>
        <?php endif; ?>

        <form method="POST" action="registrasi.php">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan username"
                    required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password"
                    placeholder="Masukkan password" required>
            </div>
            <button type="submit" class="btn btn-success">Register</button>
        </form>
        <div class="text-center mt-3">
            <p>Sudah punya akun? <a href="login.php">Login di sini</a></p>
        </div>
    </div>
</body>

</html>