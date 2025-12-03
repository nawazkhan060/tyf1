<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $city = $_POST['city'] ?? '';

    $file = fopen('newsletter_subscriptions.csv', 'a');
    fputcsv($file, [$name, $email, $city]);
    fclose($file);

    header('Location: index.php?newsletter_success=1');
    exit;
}
?>