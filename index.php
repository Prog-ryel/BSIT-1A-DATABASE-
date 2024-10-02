<?php 
if(!isset($_SESSION)){
    session_start();
}

if (isset($_SESSION['Userlogin'])) {
    $welcomeMessage = "Welcome " . $_SESSION['Userlogin'];
} else {
    $welcomeMessage = "Welcome";
}

include_once("connection.php");
$con = connection();

$sql = "SELECT * FROM users_list";
$students = $con->query($sql) or die($con->error);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>ASSCAT Students</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #f0f8ff, #e6e6fa);
            margin: 0;
            padding: 20px;
            color: #333;
        }
        header {
            text-align: center;
            margin-bottom: 20px;
        }
        h1 {
            color: #4A90E2;
            margin-bottom: 10px;
        }
        h2 {
            color: #333;
        }
        .navigation {
            text-align: center;
            margin-bottom: 20px;
        }
        .navigation a {
            margin: 0 10px;
            text-decoration: none;
            color: #4A90E2;
            font-weight: bold;
        }
        .navigation a:hover {
            text-decoration: underline;
        }
        form {
            text-align: center;
            margin-bottom: 20px;
        }
        input[type="text"] {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 200px;
            transition: border 0.3s;
        }
        input[type="text"]:focus {
            border-color: #4A90E2;
        }
        button {
            padding: 10px 15px;
            background-color: #4A90E2;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s;
        }
        button:hover {
            background-color: #357ABD;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ccc;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #4A90E2;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        a {
            text-decoration: none;
            color: blueviolet;
            margin-left: 8px;
        }
    </style>
</head>
<body>
    <header>
        <h1><?php echo $welcomeMessage; ?></h1>
    </header>

    <div class="navigation">
        <?php if (isset($_SESSION['Userlogin'])) { ?>
            <a href="logout.php">Logout</a>
        <?php } else { ?>
            <a href="login.php">Login</a>
        <?php } ?>
        <a href="add.php">Add User</a>
    </div>

    <h2>BSIT 1A STUDENT SYSTEM</h2>

    <form action="result.php" method="get">
        <input type="text" name="search" id="search" placeholder="Search for students...">
        <button type="submit" name="query">Search</button>
    </form>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Birth Day</th>
                <th>Gender</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            while ($row = $students->fetch_assoc()) { 
            ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['first_name']; ?></td>
                    <td><?php echo $row['last_name']; ?></td>
                    <td><?php echo $row['birth_day']; ?></td>
                    <td><?php echo $row['gender']; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>
