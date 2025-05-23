<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PET VALLEY - LOGIN</title>
        <link rel="stylesheet" href="../../public/styles/main.css">
    <link rel="stylesheet" href="../../public/styles/login.css">
</head>
<body>
    <?php include_once '../component/navbar.php'; ?>
    <div class="login">
        <div class="login-container">
        <div class="login-header">
            <h1>Welcome to Pet Valley</h1>
            <p>Please login to continue</p>
        </div>
        <?php
        // Display error message if login fails
            session_start();
            if (isset($_SESSION['login_error'])) {
                echo '<div class="error-message">' . $_SESSION['login_error'] . '</div>';
                unset($_SESSION['login_error']);
            }
        ?>
        
        <form action="../../control/auth/LoginControl.php" method="post">
            <div class="form-group">
                <label for="username">Username/Email</label>
                <input type="text" id="username" name="username" required placeholder="Enter your username or email">
            </div>
            
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required placeholder="Enter your password">
            </div>
            
            <button type="submit" class="submit-btn">Login</button>
            
            <div class="register-link">
                <p>Don't have an account? <a href="../auth/register.php">Register here</a></p>
            </div>
        </form>
    </div>
    </div>
    <?php include_once '../component/footer.php'; ?>
</body>
</html>