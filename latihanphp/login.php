<?php
// Jika Anda perlu menangani pengolahan form atau session, Anda bisa menambahkannya di sini
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data form
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Proses login (contoh pengecekan sederhana, Anda bisa ganti dengan logika yang lebih kompleks)
    if ($email === 'user@example.com' && $password === 'password123') {
        // Jika login berhasil, bisa mengarahkan ke halaman lain
        header("Location: miki.php");
        exit();
    } else {
        $error_message = "Invalid email or password";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="login.css">
</head>

<body>

    <section>
        <div class="form-box">
            <div class="form-value">
                <form method="POST">
                    <h2>Login</h2>
                    
                    <!-- Error message if login fails -->
                    <?php if (isset($error_message)): ?>
                        <div style="color: red;"><?php echo $error_message; ?></div>
                    <?php endif; ?>

                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="email" name="email" required>
                        <label>Email</label>
                    </div>
                    
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" name="password" required>
                        <label>Password</label>
                    </div>

                    <div class="forget">
                        <label><input type="checkbox" name="remember">Remember Me</label>
                        <a href="#">Forgot Password</a>
                    </div>

                    <button type="submit">Login</button>

                    <div class="register">
                        <p>Don't have an account? <a href="#">Sign Up</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>

</body>

</html>
