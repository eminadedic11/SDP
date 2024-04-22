<?php
if (empty($_POST["name"])) {
    die("Name is required");
}

if (empty($_POST["email"]) || !filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    die("Valid email is required");
}

if (strlen($_POST["password"]) < 8) {
    die("Password must be at least 8 characters");
}

if (!preg_match("/[a-z]/i", $_POST["password"])) {
    die("Password must contain at least one letter");
}

if (!preg_match("/[0-9]/", $_POST["password"])) {
    die("Password must contain at least one number");
}

$password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);

$mysqli = require __DIR__ . "/database.php";

$sql = "INSERT INTO user (full_name, email, password_hash, experience)
        VALUES (?, ?, ?, ?)";

$stmt = $mysqli->prepare($sql);

if (!$stmt) {
    die("SQL error: " . $mysqli->error);
}

$stmt->bind_param("ssss",
                  $_POST["name"],
                  $_POST["email"],
                  $password_hash,
                  $_POST["experience"]);

try {
    $stmt->execute();
    header("Location: signup-success.html");
    exit;
} catch (mysqli_sql_exception $e) {
    if ($e->getCode() === 1062) {
        die("The email address is already taken. Please choose a different one.");
    } else {
        die("An error occurred: " . $e->getMessage());
    }
}
?>
