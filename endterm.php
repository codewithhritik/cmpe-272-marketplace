<?php
session_start();

// Login Validation Logic
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userid = $_POST["userid"];
    $password = $_POST["password"];

    // Password validation criteria
    if ($userid === "admin" && 
        preg_match('/^(?![0-9])[a-zA-Z0-9!@#$%^&*]{20,}$/', $password) &&
        preg_match('/[A-Z]/', $password) &&
        preg_match('/[^a-zA-Z0-9]{2,}/', $password)) {
        $_SESSION["loggedin"] = true;
        header("Location: " . $_SERVER['PHP_SELF']);
        exit;
    } else {
        $error_message = "Invalid login credentials.";
    }
}

// Logout Logic
if (isset($_GET['action']) && $_GET['action'] == 'logout') {
    unset($_SESSION['loggedin']);
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Secure Admin Section</title>
    <link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
</head>
<body>
    <?php if (!isset($_SESSION["loggedin"])): ?>
        <div data-role="page" id="loginPage">
            <div data-role="header">
                <h1>Admin Login</h1>
            </div>
            <div role="main" class="ui-content">
                <?php if (isset($error_message)): ?>
                    <p style="color: red;"><?php echo $error_message; ?></p>
                <?php endif; ?>
                <form id="loginForm" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <label for="userid">User ID:</label>
                    <input type="text" name="userid" id="userid">
                    <label for="password">Password:</label>
                    <input type="password" name="password" id="password">
                    <input type="submit" value="Login">
                </form>
            </div>
            <div data-role="footer">
                <h4>Footer Content</h4>
            </div>
        </div>
    <?php else: ?>
        <div data-role="page">
            <div data-role="header">
                <h1>User List</h1>
            </div>
            <div role="main" class="ui-content">
                <ul data-role="listview">
                    <li>Mary Smith</li>
                    <li>John Wang</li>
                    <li>Alex Bington</li>
                </ul>
                <a href="<?php echo $_SERVER['PHP_SELF']; ?>?action=logout" class="ui-btn">Logout</a>
            </div>
            <div data-role="footer">
                <h4>Footer Content</h4>
            </div>
        </div>
    <?php endif; ?>
</body>
</html>
