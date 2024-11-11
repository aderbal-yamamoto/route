<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach($data as $dados){
       echo $dados['nome'] . "<br>\n"; 
       echo $dados['endereco']. "<br>\n";
        }?>
</body>
</html>