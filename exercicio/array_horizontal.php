<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela Horizontal</title>
</head>
<body>
    <?php
        $array = [
            'nome' => 'Jose',
            'idade' => 19,
            'empresa' => 'facilita voos',
            'cor' => 'Preto',
            'Profissão' => 'Dev'
        ];

        echo "<table style='border: 1px solid; background: lightgray;'>";
            echo '<tr>';
            foreach($array as $key=>$value){
                echo "<th style='border: 1px solid; background: white; text-align: center;'> $key </th>"; 
            }
            echo '</tr>';
            echo '<tr>';
            foreach($array as $key=>$value){
                echo "<td style='border: 1px solid; background: white;'> $value </td>";
            }   
            echo '</tr>';
                
        echo "</table>";
        
    ?>
</body>
</html>