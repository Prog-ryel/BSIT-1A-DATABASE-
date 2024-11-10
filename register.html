<?php 

include_once("connection.php");
$con = connection();

$successMessage = ""; // Initialize success message variable

if (isset($_POST['submit'])) {
    $uname = $_POST['Username'];
    $password = $_POST['Password'];

    // Correct the SQL statement
    $sql = "INSERT INTO `users_identity`(`username`, `password`) VALUES ('$uname', '$password')";
    
    // Execute the query and handle errors
    if ($con->query($sql) === TRUE) {
        $successMessage = "<p style='color: green;'>Record inserted successfully.</p>";
    } else {
        die("Error: " . $con->error);
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #f0f8ff, #e6e6fa);
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        form {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            width: 300px;
        }
        h1 {
            text-align: center;
            color: #4A90E2;
        }
        label {
            margin-top: 10px;
            display: block;
            color: #333;
        }
        input[type="text"], input[type="password"] {
            width: 90%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4A90E2;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 15px;
            transition: background 0.3s;
        }
        input[type="submit"]:hover {
            background-color: #357ABD;
        }
        .show-password {
            margin-top: 10px;
        }
        .login-link {
            text-align: center;
            margin-top: 15px;
        }
        .login-link a {
            color: #4A90E2;
            text-decoration: none;
        }
        .success-message {
            text-align: center;
            color: green;
            margin-top: 10px;
        }
    </style>
    <script>
        function togglePassword() {
            const passwordInput = document.getElementById('Password');
            const passwordCheckbox = document.getElementById('showPassword');
            passwordInput.type = passwordCheckbox.checked ? 'text' : 'password';
        }
    </script>
</head>
<body>
    <form action="" method="post">
        <h1>Register</h1>
        <label for="Username">Username</label>
        <input type="text" name="Username" id="Username" placeholder="Username" required>
        
        <label for="Password">Password</label>
        <input type="password" name="Password" id="Password" placeholder="Password" required>
        <div class="show-password">
            <input type="checkbox" id="showPassword" onclick="togglePassword()">
            <label for="showPassword">Show Password</label>
        </div>

        <?php if ($successMessage): ?>
            <div class="success-message"><?php echo $successMessage; ?></div>
        <?php endif; ?>

        <input type="submit" name="submit" value="Submit Form">
        <div class="login-link">
            <p>Already have an account? <a href="login.php">Login here</a></p>
        </div>
    </form>
    <script>
    function decodeJwtResponse(token) {
        const base64Url = token.split('.')[1];
        const base64 = base64Url.replace(/-/g, '+').replace(/_/g, '/');
        const jsonPayload = decodeURIComponent(atob(base64).split('').map(function(c) {
            return '%' + ('00' + c.charCodeAt(0).toString(16)).slice(-2);
        }).join(''));

        return JSON.parse(jsonPayload);
    }</script>
</body>
</html>
