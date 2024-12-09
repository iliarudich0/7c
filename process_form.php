<!DOCTYPE html>
<html lang="ru">


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Include the Google Sheets integration script
    include 'google_sheets.php';

    // Process the data (e.g., save to a database, send an email, etc.)
    echo "Name: $name<br>Email: $email<br>Message: $message";
} else {
    echo "Invalid request.";
}
?>
</html>