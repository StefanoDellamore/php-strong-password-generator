<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Strong Password Generator</title>
    </head>
    <body>
        <form method="get">
            <label for="passwordLength">Lunghezza della password:</label>
            <input type="number" id="passwordLength" name="passwordLength" min="8" max="20">
            <button type="submit">genera password</button>
        </form>

        <?php include __DIR__.'/functions.php'; ?>
    </body>
</html>