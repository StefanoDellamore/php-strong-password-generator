<?php 
session_start();

if (isset($_SESSION['passwordGenerated'])) {
    $passwordGenerated = $_SESSION['passwordGenerated'];
    unset($_SESSION['passwordGenerated']);
} else {
    header("Location: functions.php");
    exit();

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password</title>
</head>
<body>
    <div>
        <h2>
            La tua password generata: <?php echo $passwordGenerated ?>
        </h2>
        
        <p>
            <a href="./index.php"> back home</a>
        </p>
    </div>
</body>
</html>