<?php
try {
    $db = new PDO('sqlite:tyf.db');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $db->exec('CREATE TABLE IF NOT EXISTS contact_submissions (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        name TEXT,
        city TEXT,
        contact TEXT,
        profession TEXT,
        query TEXT,
        created_at DATETIME DEFAULT CURRENT_TIMESTAMP
    )');

    $db->exec('CREATE TABLE IF NOT EXISTS newsletter_signups (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        name TEXT,
        email TEXT,
        city TEXT,
        created_at DATETIME DEFAULT CURRENT_TIMESTAMP
    )');

} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
?>