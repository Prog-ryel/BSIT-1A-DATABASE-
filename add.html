<?php 

include_once("connection.php");
$con = connection();

if (isset($_POST['submit'])) {
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $bday = $_POST['birthday'];
    $gender = $_POST['gender']; 

    // Correct the SQL statement
    $sql = "INSERT INTO `users_list` (`first_name`, `last_name`, `birth_day`, `gender`) VALUES ('$fname', '$lname', '$bday', '$gender')";
    
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
    <title>Student Registration</title>
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
        input[type="text"], input[type="date"], select {
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
        .success-message {
            text-align: center;
            color: green;
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
    </style>
</head>
<body>
    <form action="" method="post">
        <h1>Register Student</h1>
        <?php if (isset($successMessage)): ?>
            <div class="success-message"><?php echo $successMessage; ?></div>
        <?php endif; ?>
        
        <label for="firstname">Firstname</label>
        <input type="text" name="firstname" id="firstname" placeholder="Firstname" required>
        
        <label for="lastname">Lastname</label>
        <input type="text" name="lastname" id="lastname" placeholder="Lastname" required>
        
        <label for="birthday">Birthday</label>
        <input type="date" name="birthday" id="birthday" required>
        
        <label for="gender">Gender</label>
        <select name="gender" id="gender" required>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select>
        
        <input type="submit" name="submit" value="Submit Form">

        <div class="login-link">
            <p><a href="index.php">Back to Dashboard</a></p>
        </div>
    </form>
</body>
</html>
