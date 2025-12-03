<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $message = $_POST['message'] ?? '';

    $file = fopen('contact_submissions.csv', 'a');
    fputcsv($file, [$name, $email, $message]);
    fclose($file);

    header('Location: index.php?contact_success=1');
    exit;
}
?>