<?php
session_start();

if (isset($_POST['password'])) {
    if ($_POST['password'] == '123445678910') {
        $_SESSION['loggedin'] = true;
        header('Location: admin.php');
        exit;
    } else {
        $error = 'Incorrect password!';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --dark-blue: #f9fbff;
            --navy-blue: #e6f0ff;
            --light-navy: #ffffff;
            --accent-blue: #2563eb;
            --white: #000000;
            --text-light: #1e293b;
            --shadow: 0 10px 30px rgba(37, 99, 235, 0.15);
            --transition: all 0.3s ease;
        }
        * { 
            margin: 0; 
            padding: 0; 
            box-sizing: border-box; 
        }
        body {
            font-family: 'Poppins', sans-serif;
            color: var(--text-light);
            background: var(--dark-blue);
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            padding: 1rem;
        }
        .login-container {
            width: 100%;
            max-width: 450px;
            background: var(--light-navy);
            padding: 3rem;
            border-radius: 20px;
            box-shadow: var(--shadow);
            text-align: center;
        }
        .login-container img {
            height: 80px;
            margin-bottom: 1.5rem;
        }
        h2 {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
            color: var(--white);
        }
        input[type="password"] {
            width: 100%;
            padding: 1rem;
            border: 1px solid #ddd;
            border-radius: 10px;
            font-family: inherit;
            font-size: 1rem;
            transition: var(--transition);
            background: var(--dark-blue);
            color: var(--text-light);
            margin-bottom: 1.5rem;
        }
        input[type="password"]:focus {
            outline: none;
            border-color: var(--accent-blue);
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.2);
        }
        input[type="submit"] {
            display: inline-block;
            width: 100%;
            padding: 1rem 2.5rem;
            border-radius: 50px;
            font-weight: 600;
            transition: var(--transition);
            border: 2px solid var(--accent-blue);
            background: var(--accent-blue);
            color: #fff;
            font-size: 1rem;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background: #1d4ed8; /* Darker blue */
            transform: translateY(-3px);
            box-shadow: var(--shadow);
        }
        .error {
            color: #ef4444; /* Red */
            margin-top: 1.5rem;
            font-weight: 500;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <img src="../images/1.png" alt="TYF Logo">
        <h2>Admin Login</h2>
        <form method="post">
            <input type="password" name="password" placeholder="Password" required>
            <input type="submit" value="Login"> 
        </form>
        <?php if (isset($error)) { echo "<p class='error'>$error</p>"; } ?>
    </div>
</body>
</html>