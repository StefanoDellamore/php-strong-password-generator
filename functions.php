<?php
session_start();
//generatore password
function generatePassword($passwordLength) {
    $characters = 'abcdefghilmnopqrstuvwxyzABCDEFGHILMNOPQRSTUVWXYZ0123456789!?%$&()[]+-*/';
    $password = '';
    $charactersLength = strlen($characters);

    for ($i = 0; $i < $passwordLength; $i++) {
        $password .= $characters [rand(0, $charactersLength - 1)];
    }
    return $password;
}

//controllo
$passwordGenerated = "";
if ($_SERVER["REQUEST_METHOD"] == "GET"){
    if (isset($_GET["passwordLength"])) {
        $charactersLength = $_GET["passwordLength"];
        $passwordGenerated = generatePassword ($charactersLength);
        $_SESSION['passwordGenerated'] = $passwordGenerated;
        header("Location: password.php");
        exit();
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>function</title>
</head>
<body>
    <form method="get">
        <label for="passwordLength">Lunghezza della password:</label>
        <input type="number" id="passwordLength" name="passwordLength" min="8" max="20">
        <button type="submit">genera password</button>
    </form>
</body>
</html>