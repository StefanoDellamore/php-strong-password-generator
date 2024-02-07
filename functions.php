<?php

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
    }
}

?>

<div>
    La tua password generata: <?php echo $passwordGenerated ?>
</div>