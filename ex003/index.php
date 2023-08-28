<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tipos primitivos em PHP</title>
</head>
<body>
    <h1>teste de tipos primitivos</h1>
    <?php 
       // $num = 0x1A;
       //echo "o valor da variável é $num";
        
       // $v = "rodrigo";
       // var_dump($v);

       //$vet = [0,9,9,"rodrigo", false, 12.5];
       //var_dump($vet);

       class Pessoa {
        private string $nome;
       }

       $p = new Pessoa;
       var_dump($p);
    ?>
</body>
</html>