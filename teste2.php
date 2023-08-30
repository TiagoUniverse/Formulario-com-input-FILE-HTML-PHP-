<?php

$diretorio='docs/';

$temp = explode('.', $_FILES['fileEscolaridade']['name']);

$extensao = end($temp);

$nome = $_FILES['fileEscolaridade']['name'];

echo "Nome do arquivo:";
for($contador = 0; $contador < count($temp) -1; $contador++){
    echo $temp[$contador];
}

echo "<br>";
$novoNome = time() . '.' . $extensao;

echo $novoNome;

move_uploaded_file($_FILES['fileEscolaridade']["tmp_name"] , $diretorio . $novoNome);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>teste 2</title>
</head>
<body>
    <h1>Arquivo salvo!</h1>
    <a href="<?php echo $diretorio . $novoNome; ?> "  target="_blank">arquivo</a>
</body>
</html>