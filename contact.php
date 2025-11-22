<?php

$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$message = $_POST['message'] ?? '';

if(!$name || !$email || !$message){
    echo "Please fill all fields.";
    exit;
}

// DB part (replace with your credentials)
$pdo = new PDO('mysql:host=localhost;dbname=test', 'root', '');

$stmt = $pdo->prepare("INSERT INTO contacts (name, email, message) VALUES (?, ?, ?)");
$stmt->execute([$name, $email, $message]);

echo "Message sent successfully!";


