<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: login.php');
    exit;
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
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
            line-height: 1.6;
        }
        .admin-header {
            background: var(--light-navy);
            padding: 1rem 5%;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 3rem;
        }
        .admin-title {
            display: flex;
            align-items: center;
            gap: 1rem;
        }
        .admin-title img {
            height: 50px;
        }
        .admin-title h1 {
            font-size: 1.8rem;
            color: var(--accent-blue);
            font-weight: 700;
            margin: 0;
        }
        .logout-btn {
            display: inline-block;
            padding: 0.6rem 1.5rem;
            border-radius: 50px;
            font-weight: 600;
            transition: var(--transition);
            background: var(--accent-blue);
            color: #fff;
            text-decoration: none;
        }
        .logout-btn:hover {
            background: #1d4ed8;
            transform: translateY(-2px);
        }
        .admin-container {
            width: 90%;
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 1rem;
        }
        h2 {
            font-size: 2.2rem;
            font-weight: 700;
            margin-bottom: 2rem;
            color: var(--white);
            border-bottom: 3px solid var(--accent-blue);
            padding-bottom: 0.5rem;
            display: inline-block;
        }
        .table-wrapper {
            background: var(--light-navy);
            padding: 2rem;
            border-radius: 20px;
            box-shadow: var(--shadow);
            overflow-x: auto;
            margin-bottom: 3rem;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 1rem;
        }
        th, td {
            padding: 1rem;
            text-align: left;
            border-bottom: 1px solid var(--navy-blue);
        }
        thead th {
            background-color: var(--navy-blue);
            color: var(--accent-blue);
            font-size: 1rem;
            font-weight: 600;
            text-transform: uppercase;
        }
        tbody tr:hover {
            background-color: var(--dark-blue);
        }
        td {
            color: var(--text-light);
        }
    </style>
</head>
<body>
    <header class="admin-header">
        <div class="admin-title">
            <img src="../images/1.png" alt="TYF Logo">
            <h1>TYF Admin Panel</h1>
        </div>
        <a href="logout.php" class="logout-btn">Logout</a>
    </header>

    <div class="admin-container">
        <div class="table-wrapper">
            <h2>Contact Submissions</h2>
            <table>
                <thead>
                    <tr>
                        <th>Timestamp</th>
                        <th>Name</th>
                        <th>City</th>
                        <th>Number</th>
                        <th>Query Source</th>
                        <th>Query</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (file_exists('../contact_submissions.csv')) {
                        $file = fopen('../contact_submissions.csv', 'r');
                        while (($line = fgetcsv($file)) !== FALSE) {
                            echo '<tr>';
                            foreach ($line as $cell) {
                                echo '<td>' . htmlspecialchars($cell) . '</td>';
                            }
                            echo '</tr>';
                        }
                        fclose($file);
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <div class="table-wrapper">
            <h2>Newsletter Subscriptions</h2>
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>City</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (file_exists('../newsletter_subscriptions.csv')) {
                        $file = fopen('../newsletter_subscriptions.csv', 'r');
                        while (($line = fgetcsv($file)) !== FALSE) {
                            echo '<tr>';
                            foreach ($line as $cell) {
                                echo '<td>' . htmlspecialchars($cell) . '</td>';
                            }
                            echo '</tr>';
                        }
                        fclose($file);
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>