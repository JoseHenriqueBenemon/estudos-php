<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudos importantes</title>
</head>
<body>
    <h1>Estudo de PHP</h1>
    <hr />

    <h2>Valores padrões em funções</h2>
    <?php 
        //Quando um paramentro é igual a 0, quer dizer que ele não precisa ser preenchido
        //obrigatoriamente  
        function somar($n1, $n2, $n3 = 0){
            return $n1 + $n2 + $n3;
        }

        echo '1 + 1 =' . somar(1, 1) . "<br />";
        echo '1 + 1 + 1=' . somar(1, 1, 1) . "<br /><br />";

        //Quando precisa fazer uma função que só possa receber um tipo de variavel
        //coloque-a na frente da variavel de desejo
        function diminiur(float $n1, float $n2, float $n3 = 0){
            return $n1 - $n2 - $n3;
        }

        echo '2 - 1 = ' . diminiur(1, 1) . "<br />";
        echo '2 + 1 + 1= ' . diminiur(1, 1, 1) . "<br /><br />";
    ?>

    <h2>Retornando valores de uma função sem return</h2>
    <?php 
        //Colocando uma e-comercial (&) e uma variavel como parametro de uma função
        //tudo que for posto dentro dessa variavel, a função irá retornar  
        function multiplicar(int $n1, int $n2, &$total){
            $total = $n1 * $n2;
        }
        
        multiplicar(4, 10, $result);

        echo "4 x 10 = {$result}";
    ?>
    
    <h2>Funções anônimas</h2>
    <?php 
        //podemos criar funções sem precisar colocar nomes para elas
        //e colocarmos onde quisermos desde uma variavel  
        $imposto = function($value){
            return $value * 0.2;
        };
        
        $result = function($value){
            return $value;
        };

        function funcao($n1, $n2){
            return $n1 / $n2;
        }
        //até para chamar uma outra function
        funcao(20, $result(10));

        echo "O imposto de um produto que custa R$20.00 será de: {$imposto(20)}";
    ?>

    <h2>Arrow function</h2>
    <?php 
        //Arrow function funcionam para otimizar o código, para deixar ele menor 
        //podendo apenas retornar uma linha de código  
        $salgados = fn($qt, $value) => $qt * $value;

        echo "Salgados baratos cada salgado por 3 reais";
        echo "Supondo que pedimos 12 salgados, ficará {$salgados(12, 3)}";
    ?>

    <h2>Função Recursiva</h2>
    <?php 
        //Uma função recursiva é uma função que chama ela mesma na função  
        function ateMil($value){
            $result = $value * 2;
            echo "Valor: {$result} <br />";

            ($result < 1000) ? ateMil(round($result)) : "Chegou em mil!";
        }
        
        echo "Chegando de um valor até mil";
        echo "Supondo que quermos começar do 10 multiplicando por 2, ficará <br />";
        ateMil(10);
    ?>

    <h2>Funções Nativas matemática</h2>
    <?php 
        //Função que pegar o valor absoluto de um número (o mesmo porém positivo)
        echo "Número -4.2, ele absoluto fica:" . abs(-4.2) . "<br />";

        //Função que pega o número de pi
        echo "Pi:" . pi() . "<br />";

        //Função que arredonda um número sempre para baixo 
        echo "8.94, arrendodado para baixo fica: " . floor(8.94) . "<br />";

        //Função que arredonda um número sempre para cima 
        echo "8.94, arrendodado para cima fica: " . ceil(8.94) . "<br />";

        //Função que arredonda um número naturalmente 
        echo "8.64, arrendodada um número normalmente: " . round(8.64) . "<br />";
        
        //Caso precise arrendondar com casas decimais
        echo "8.67, arrendodada um número normalmente com 1 casa decimal: " . round(8.67, 1) . "<br />";
        
        //Função que retorna um/ou mais números aleatorios
        echo "Número aleatório: " . rand(1, 10) . "<br />";

        //Função que retorna o maior número de um array
        $arr = [1, 3, 4, 5, 6, 19];
        
        echo "<br />";
        print_r($arr);
        echo "<br /> Número maior deste array é: " . max($arr) . "<br />";
        echo "Número menor deste array é: " . min($arr) . "<br />";

        //Função que formata números
        $var = 1222.85;
        
        echo "Número no formato americano : USD " . $var . "<br />";
        echo "Número no formato brasileiro: BRL " . number_format($var, 4, ",", ".") . "<br />";
        
    ?>

    <h2>Função nativa em String</h2>
    <?php 
        //Tirar espaço do começo e do final de uma variavel
        $var = "     José       ";

        echo "Tirando espaço em variavel: " . trim($var) . "<br />";

        //deixar uma variavel toda em minuscula ou maiusculo
        $name = "José Henrique";

        echo "Nome todo em minusculo: " . strtolower($name) . "<br />";
        echo "Nome todo em maiusculo: " . strtoupper($name) . "<br />";

        //Função que altera uma palavra
        $nameAlterado = str_replace('Henrique', 'Benemon', $name);
        echo "Nome alterado: " . $nameAlterado . "<br />";

        //Função que pega um pedaço de uma string substr(variavel, começo, qtd)
        echo "Pedaço do nome: " . substr($name, 0, 6) . "<br />";

        //Função que retorna a posição que estamos procurando uma certa palavra
        $lorem = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae ex congue ipsum vehicula malesuada et ac erat";
        echo "Quando aparece a primeira vez a palavra Sed: " . strpos($lorem, "Sed") . "<br />";

        //Função que retorna uma variavel com a primeira letra maiuscula da primeira palavra
        $varAleatoria = "palarelepipedo";
        echo "Primeira letra maiuscula: " . ucfirst($varAleatoria) . "<br />";

        //Função que retorna uma variavel com a primeira letra maiuscula de todas as palavras em uma variavel
        $varAleatoria = "palarelepipedo de patins";
        echo "Primeiras letras maiusculas: " . ucwords($varAleatoria) . "<br />";

        //Função que quebra variaveis
        $varToArray = "palarelepipedo de patins";
        $arr = explode(" ", $varToArray);

        print_r($arr);
    ?>

    <h2>Função nativa em Array</h2>    
    <?php 
        $defaultArr = ['José', "Henrique", "Benemon", "Masculino", 19];

        //Função que conta quantos elementos tem dentro de um array
        echo "Número de elementos dentro do array: " . count($defaultArr) . "<br />";

        //Função que retorna valores diferentes do primeiro array passado
        $defaultArr2 = ['Maria', "Eduarda", "Benemon", "Feminino", 19];
        $diffArr = array_diff($defaultArr, $defaultArr2);

        echo "Valores diferentes dos arrays: <br />";
        print_r($diffArr);

        //Função que filtra um array
        $num = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

        $numFilter = array_filter($num, function($item){
            for ($i = 2; $i < $item-1; $i++){ 
                if ($item % $i == 0) 
                    return false; 
            } 
            return true; 
        });

        echo "<br /> Valores dentro do array de 1 a 10 que são primos: <br />";
        print_r($numFilter);

        //Função que mapei um array
        $numMoreOne = array_map(function($item){
            return $item + 1;
        }, $num);
        
        echo "<br /> Array mapeado somado mais 1: <br />";
        print_r($numMoreOne) . "<br />";

        //Função que remove o úlitmo item de um array
        array_pop($numMoreOne);
        echo "<br /> Último item tirado do array acima: <br />";
        print_r($numMoreOne);

        //Função que remove o primeiro item de um array
        array_shift($numMoreOne);
        echo "<br /> Primeiro item tirado do array acima: <br />";
        print_r($numMoreOne);

        //Função que verifica se existe número que você quer em um array
        echo "<br /> Função se verifica se tem o número desejado no array acima in_array(): <br />";
        echo (in_array(10, $numMoreOne)) ? "Tem o número 10 no array <br />" : "Não tem o número 10 no array <br />";

        //Função que retorna a posição do item desejado no array
        //Caso o número passado não exista, a função não retornará nada
        echo "Função que retorna a posição do elemento dentro do array acima array_search(): <br />"; 
        echo "Posição: " . array_search(10, $numMoreOne) . "<br />";

        //Função que ordena o array do menor para o maior 
        sort($numMoreOne);
        echo "Array ordernado: <br />";
        print_r($numMoreOne);

        //Função que ordena o array do maior para o menor
        rsort($numMoreOne); 
        echo "<br /> Array ordernado inversamente: <br />";
        print_r($numMoreOne);

        //Função para manter o número do elemento com a sua chave original
        asort($numMoreOne);
        echo "<br /> Array com chaves originais: <br />";
        print_r($numMoreOne);

        //Função para manter o número do elemento com a sua chave original inversamente
        arsort($numMoreOne);
        echo "<br /> Array com chaves originais inversamente: <br />";
        print_r($numMoreOne);

        //Função que junta elementos de um array em uma variavel
        $information = implode(' ', $defaultArr);
        echo "<br /> O array com elementos juntas dentro de uma variavel ficou: <br/ >";
        echo $information;

 
    ?>

    <h2>Função nativa com datas/horas</h2>  
    <?php 
        //Função que pega o tempo em milisegundos
        echo "Tempo em milisegundos: " . time() . "<br />";

        //Função que mostra a data convencional
        echo "Data e hora atual: " . date('d/m/Y H:i:s', ) . "<br />";

        //Função que pega a data (em formato americano por exemplo) e coloca no segundo parametro do date
        $date = "2020-11-24";
        echo "Data registrada em uma variavel: " . date("d/m/Y", strtotime($date)) . "<br />";
    ?>

    <h2>Exercicio data</h2>
    <?php 
        $data = $date;
        function diaDaSemana($value){
            $time = strtotime($value);
            $data = date("d/m/Y", $time);

            $diaDaSemana = date("l", $time);

            $diaDaSemana = match ($diaDaSemana){
                'Monday' => $diaDaSemana = "Segunda-Feira",
                'Tuesday' => $diaDaSemana = "Terça-Feira",
                'Wednesday' => $diaDaSemana = "Quarta-Feira",
                'Thursday' => $diaDaSemana = "Quinta-Feira",
                'Friday' => $diaDaSemana = "Sexta-Feira",
                'Saturday' => $diaDaSemana = "Sabádo",
                'Sunday' => $diaDaSemana = "Domingo"
            };

            echo "Data: " . $data . ", Dia da semana: " . $diaDaSemana;
        }

        diaDaSemana($data);
    ?>

    <h2>Trabalhando com multiplos arquivos</h2>
    <?php
        require('template/header.php');
    ?>
    <p>Contéudo do index</p>

    <h2>Trabalhando com formulário 
        <?php

        ?>
    </h2>
    
    <?php
        if(!empty($_SESSION['msg'])){
            echo 'Err:' . $_SESSION['msg'];
            $null = '';

            $_SESSION['msg'] = $null;
        }
    ?>

    <form method="POST" action="getInformation.php">
        <label for="name">Nome:</label><br />
        <input type="text" id="name" name="name" />
        <br /><br />
        
        <label for="email">Email:</label><br />
        <input type="email" name="email" id="email">
        <br /><br />

        <label for="pwd">Senha</label><br />
        <input type="password" name="pwd" id="pwd" />
        <br /><br />

        <button type="submit">Enviar</button>
    </form>

    <a href="exercicio/login.php"><h5>Exercicio SESSION e COOKIE</h5></a>

    <p>Atividade tabela vertical</p>

    <a href="exercicio/array_vertical.php">Trabalhando com formulário<a>

    <p>Atividade tabela Horizontal</p>

    <a href="exercicio/array_horizontal.php">Trabalhando com formulário<a>
</body>
</html>