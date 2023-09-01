<?php

if (isset($_FILES['arquivo'])){
    var_dump($_FILES['arquivo']);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="teste3.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="arquivo[]" multiple required>
        <button type="submit">enviar</button>
    </form>
</body>
</html>