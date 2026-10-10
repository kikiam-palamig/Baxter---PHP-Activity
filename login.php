<?php
$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';

    if ($username === 'admin' && $password === '12345') {
        header('Location: index.php');
        exit;
    } else {
        $error = 'Invalid username or password. Please try again.';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Cosmic</title>
    <link rel="stylesheet" href="auth.css">
</head>
<body>
    <main class="page-container">
        <div class="card">
            <header class="card-header">
                <h1 class="brand-title">🌌 Cosmic</h1>
                <p class="subtitle">Welcome back! Please enter your details.</p>
            </header>

            <?php if (!empty($error)): ?>
                <div class="form-alert error" role="alert"><?php echo htmlspecialchars($error); ?></div>
            <?php endif; ?>

            <form action="login.php" method="POST" class="auth-form" id="loginForm">
                <div class="form-group">
                    <label for="username">Username or Email</label>
                    <input type="text" id="username" name="username" placeholder="Enter your username or email" value="<?php echo htmlspecialchars($username ?? ''); ?>" required>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter your password" required>
                </div>

                <button type="submit" class="submit-btn">Login</button>
            </form>

            <p class="demo-hint">Demo account: <strong>admin</strong> / <strong>12345</strong></p>

            <footer class="card-footer">
                <p>Don't have an account? <a href="register.php">Register</a></p>
            </footer>
        </div>
    </main>
</body>
</html>