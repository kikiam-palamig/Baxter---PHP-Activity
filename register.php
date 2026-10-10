<?php
$error = '';
$success = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fullname = trim($_POST['fullname'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';
    $confirm_password = $_POST['confirm_password'] ?? '';

    $nameRegex = "/^[A-Za-z][A-Za-z\s'.-]*$/";
    $emailRegex = "/^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/";
    $passwordRegex = "/^(?=.*[A-Za-z])(?=.*\d).{8,}$/";

    if (empty($fullname) || empty($email) || empty($password)) {
        $error = 'All fields are required.';
    } elseif (!preg_match($nameRegex, $fullname)) {
        $error = 'Name can only contain letters, spaces, hyphens, and apostrophes.';
    } elseif (!preg_match($emailRegex, $email)) {
        $error = 'Please enter a valid email address.';
    } elseif (!preg_match($passwordRegex, $password)) {
        $error = 'Password must be at least 8 characters long and contain at least one letter and one number.';
    } elseif ($password !== $confirm_password) {
        $error = 'Passwords do not match.';
    } else {
        $success = 'Account created successfully! You can now <a href="login.php">Login</a>.';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Cosmic</title>
    <link rel="stylesheet" href="auth.css">
</head>
<body>
    <main class="page-container">
        <div class="card">
            <header class="card-header">
                <h1 class="brand-title">🌌 Cosmic</h1>
                <p class="subtitle">Create an account to join us.</p>
            </header>

            <?php if (!empty($error)): ?>
                <div class="form-alert error" role="alert"><?php echo htmlspecialchars($error); ?></div>
            <?php endif; ?>

            <?php if (!empty($success)): ?>
                <div class="form-alert success" role="alert"><?php echo $success; ?></div>
            <?php endif; ?>

            <form action="register.php" method="POST" class="auth-form" id="registerForm">
                <div class="form-group">
                    <label for="fullname">Full Name</label>
                    <input type="text" id="fullname" name="fullname" placeholder="Enter your full name" value="<?php echo htmlspecialchars($fullname ?? ''); ?>" required>
                </div>

                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="text" id="email" name="email" placeholder="Enter your email" value="<?php echo htmlspecialchars($email ?? ''); ?>" required>
                </div>

                <div class="form-group">
                    <label for="reg-password">Password</label>
                    <input type="password" id="reg-password" name="password" placeholder="Create a password" required>
                </div>

                <div class="form-group">
                    <label for="confirm-password">Confirm Password</label>
                    <input type="password" id="confirm-password" name="confirm_password" placeholder="Confirm your password" required>
                </div>

                <button type="submit" class="submit-btn">Register</button>
            </form>

            <footer class="card-footer">
                <p>Already have an account? <a href="login.php">Login</a></p>
            </footer>
        </div>
    </main>
</body>
</html>