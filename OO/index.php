<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Orientado a Objeto</title>
</head>
<body>
    <h2>Diferença de Classe e Objeto</h2>
    <hr />

    <p>Classe Room</p>
    <p>
        class Room {
            public $object = [];
            public $lengthObject = 0;
            public $ownRoom;
        }
    </p>
    
    <?php
        //Criação da classe - Usando construtor
        class Room {
            //Propriedades / Variaveis
            public Array $object = [];
            public Int $lengthObject = 0;
            public String $ownRoom;

            //Criação de um construtor / Construtorem no php servem para executar ações no momento em que a função é chamada
            public function __construct($object = [], $qtObject = 0, $own = ''){
                $this->object = $object;
                $this->lengthObject = $qtObject;
                $this->ownRoom = $own;
            }

            //Criação de um método
            public function addLengthObject(){
                $this->lengthObject++;
            }

            //Encapsulamento (getts e setts)
            public function setObject($object){
                $this->object = $object;
            }
        }   

        class instrument{
            private Array $nameInstr = [];
            private Int $lengthInstr = 0;
            private String $ownInstr;

            //Encapsulamento (getts e setts)
            public function setNameInstr($instruments){
                $this->nameInstr = $instruments;
            }

            public function getNameInstr(){
                return $this->nameInstr;
            }

            public function setLengthInstr($qtdInstr){
                $this->lengthInstr = $qtdInstr;
            }

            public function getLengthInstr(){
                return $this->lengthInstr;
            }

            public function setOwnInstr($owner){
                $this->ownInstr = $owner;
            }

            public function getOwnInstr(){
                return $this->ownInstr;
            }

        }
    ?>

    <p>Objeto com Construtor</p>
    
    <?php
        //Definindo as variaveis para serem populadas no objeto
        $array = ['Mesa', 'Cadeira', 'Computador', 'Mouse', "Teclado", 'Televisão'];
        $length = count($array);
        $own = 'José';
        
        //Cria um objeto
        $firstRoom = new Room($array, $length, $own);

        //Saida de dados
        echo 'Quarto 1 <br />';
        echo 'Quantidade de objetos no quarto:' . $firstRoom->lengthObject . '<br />';
        echo "Nome dos objetos no quarto: ";

        foreach($firstRoom->object as $object){
            if(end($firstRoom->object) != $object){
                echo $object . ", "; 
            } else {
                echo $object;
            }
        }

        echo '<br />';
        echo 'Dono do quarto:' . $firstRoom->ownRoom . '<br />';
    ?>

    <hr />
    <p>Classe Instrumento</p>
    <p>
        class instrument{
            private Array $nameInstr = [];
            private Int $lengthInstr = 0;
            private String $ownInstr;
        }
    </p>

    <p>Objeto sem Construtor</p>
    <?php
        //Definindo as variaveis para serem populadas no objeto
        $arrayInstrument = ['Violão', 'Guitarra', 'Pandeiro', 'Tamborim'];
        $lengthInstrument = count($arrayInstrument);
        $owner = "José";

        //Instânciando a classe e settando as variaveis
        $instrument = new Instrument();
        $instrument->setNameInstr($arrayInstrument);
        $instrument->setLengthInstr($lengthInstrument);
        $instrument->setOwnInstr($owner);

        //Saida de dados
        echo 'Instrumento 1 <br />';
        echo 'Quantidade de instrumentos:' . $instrument->getLengthInstr() . '<br />';
        echo "Nome dos Instrumentos: ";

        $arr = $instrument->getNameInstr();
        foreach($arr as $instr){
            if(end($arr) != $instr){
                echo $instr . ", ";     
            } else {
                echo $instr;
            }
        }

        echo '<br />';
        echo 'Dono dos instrumentos: ' . $instrument->getOwnInstr() . '<br />';
    ?> 
    <hr />

    <p>Utilizando métodos estáticos</p>
    <p>Um método estáticos serve para ser usado sem instanciar uma classe, apenas passando a sua referência</p>

    <p>Classe Usada</p>
    <p>
        class Math{
            public static function plus($a, $b){
                return $a + $b;
            }
        }
    </p>
    <?php
        class Math{

            public static $name = "José";
            
            public static function plus($a, $b){
                return $a + $b;
            }
        }

        echo 'O resultado de 10 + 30, usando um método estático, é: ' . Math::plus(10, 30) . "<br />";
        echo 'O nome guardado, usando uma variavel estática, é: ' . Math::$name;
    ?>

    <hr />
    <a href="exercicio1.php">Exercicio Calculadora</a>
    <hr />

    <p>Classe com herança</p>

    <?php
        class Pesssoa{
            protected String $nome;
            protected String $genero;
            protected Int $idade; 

            public function setNome($nome){
                $this->nome = $nome;
            }
            public function getnome(){
                return $this->nome;
            }

            public function setGenero($genero){
                $this->genero = $genero;
            }
            public function getGenero(){
                return $this->genero;
            }

            public function setIdade($idade){
                $this->idade = $idade;
            }
            public function getIdade(){
                return $this->idade;
            }
        }

        class PessoaFisica extends Pesssoa{
            private Float $cpf;
            
            public function __construct($nome, $genero, $idade, $cpf ){
                $this->setNome($nome);
                $this->setGenero($genero);
                $this->setIdade($idade);
                $this->setCpf($cpf);
            }
            public function setCpf($cpf){
                $this->cpf = $cpf;
            }
            public function getCpf(){
                return $this->cpf;
            }
        }

        $pes = new PessoaFisica('José', 'Masculino', 19, 50860793818);

        echo "Informações da pessoa <br />";
        echo 'Nome: ' . $pes->getNome() . "<br />";
        echo 'Gênero: ' . $pes->getGenero() . "<br />";
        echo 'Idade: ' . $pes->getIdade() . "<br />";
        echo 'CPF: ' . $pes->getCpf() . "<br />";
        
        echo '<br /> <b>REGRA IMPORTANTE:</b> setters e getters devem ser publicos (public) para serem capazes de puxar de fora da classe ';
    ?>

    <hr />
    <p>Diferença entre private e protected</p>
    <hr />
    <p>O tipo private ele só pode ser, manualmente (sem auxilio de setters), na classe pai</p>
    <p>
        class ClasseQualquer{
            private int $id;

            public function __construct($id){
                $this->id = 1;
            }
        } 
    </p>
    <p>Consigo fazer isso</p>
    <p>Mas não consigo fazer: </p>

    <p>
        class ClasseQualquer{
            private int $id;

            public function __construct($id){
                $this->id = 1;
            }
        } 
        class OutraClasseQualquer extends ClasseQualquer{
            public function __construct($id){
                $this->id = 1;
            }
        }
    </p>
    <p>Pois ela não está sendo setada na classe Pai, mas sim em uma outra classe herdada</p>

    <br />
    <hr />
    <p>Já na classe protected, pode ser setada tanto na classe pai, quanto nas classes herdadas</p>
    <p>
        class ClasseQualquer{
            private int $id;

            public function __construct($id){
                $this->id = 1;
            }
        } 
    </p>
    <p>Consigo fazer isso</p>

    <p>
        class ClasseQualquer{
            private int $id;

            public function __construct($id){
                $this->id = 1;
            }
        } 
        class OutraClasseQualquer extends ClasseQualquer{
            public function __construct($id){
                $this->id = 1;
            }
        }
    </p>
    <p>Também consigo fazer isso</p>
    <hr />
    <p>Interfaces - <b>Padronizador</b></p>
    <p>A interface serve ÚNICA e exclusivamente para cosntruir métodos que serão OBRIGADOS a serem criados a classe que elas implementam</p>
    <p>
        interface DataBase{
            public function listar();
            public function buscar();
            public function adicionar();
            public function alterar();
            public function remover();
        }
    </p>
    <?php
        //A interface serve ÚNICA e exclusivamente para cosntruir métodos que serão OBRIGADOS a serem criados a classe que elas implementam
        interface DataBase{
            public function listar();
            public function buscar();
            public function adicionar();
            public function alterar();
            public function remover();
        }
        
        class DataBaseMySQL implements DataBase{
            public function listar(){
                
            }

            public function buscar(){

            }

            public function adicionar(){

            }

            public function alterar(){

            }

            public function remover(){

            }
        }
        
        class DataBaseOracle implements DataBase{
            public function listar(){

            }

            public function buscar(){

            }

            public function adicionar(){

            }

            public function alterar(){

            }

            public function remover(){

            }
        }
    ?>

    <hr />
    <p>Polimorfismo - <b>Métodos padrões para classes</b></p>
    <p>O polimorfismo é quando várias classes, distintas, tenham a mesmas "forma", quando tem métodos iguais.</p>

    <?php
        interface Form{
            public function getName();
            public function getArea();
        }

        class Triangle implements Form{
            private String $name = 'Triângulo';
            private Float $area = 0;

            public function __construct($h, $b){
                $this->area = ($h * $b)/2;
            }

            public function getName(){
                return $this->name;
            }

            public function getArea(){
                return $this->area;
            }
        }

        class Rectangle implements Form{
            private String $name = "Retângulo";
            private Float $area = 0;

            public function __construct($h, $b){
                $this->area = $h * $b;
            }

            public function getName(){
                return $this->name;
            }

            public function getArea(){
                return $this->area;
            }
        }

        //Instânciando as classes
        $triangle = new Triangle(42, 13);
        $rectangle = new Rectangle(25, 17);

        $objects = [
            $triangle,
            $rectangle
        ];

        foreach($objects as $object){
            $name = $object->getName();
            $area = $object->getArea();

            echo 'Objeto: ' . $name . '<br />';
            echo 'Área: ' . $area . "<br />";
            echo '<br />';
        }
    ?>

    <hr />
    <p>Namespace - <b>Métodos para diferenciar classes</b></p>
    <p>O Namespace é quando você tem mais de uma classe com o mesmo nome (ex: Duas classes Usuario) e quer diferencia-los</p>
    <?php
        require 'UsuarioDashboard.php';
        require 'UsuarioSite.php';

        $usuDash = new UsuarioDash\Usuario();
        echo $usuDash->consultar() . "<br>";
        
        $usuDash = new UsuarioSite\Usuario();
        echo $usuDash->consultar() . "<br>";
    ?>

    <p>Também podemos usar o namespace quando tivermos muitas pastas e quermos organiza-las (Divisão de diretório)</p>
    <?php
        require '../dashboard/test/Usuario.php';

        // podemos chamar uma classe simplificando ela, ao inves de escrever dashboard\test\Usuario podemos usar somente Usuario
        use dashboard\test\Usuario; 

        // podemos usar assim também, colocando um apelido para a classe
        // use dashboard\test\Usuario as Usuario;

        $usuario = new Usuario();
        echo $usuario->inserir();
    ?>
    <hr />
    <p>Injeção de Depêndencia<b></b></p>
    <p>A injeção de depência ocorre quando colocamos um objeto de uma classe dentro de outra classe 
       (Ex: Instanciamos o objeto Basica e colocamos ele dentro da classe Matematica passando dentro do construtor)
    </p>
    <?php
        // Classe com operações matemáticas Básicas
        class Basica{
            public function somar(Float $a, Float $b){
                return $a + $b;
            }

            public function subtrair(Float $a, Float $b){
                return $a - $b;
            }
        }

        // Classe mãe que irá englobar todas as classes matemáticas existentes
        class Matematica{
            private $basico;
            // private $geometria; Exemplo

            public function __construct($objContasBasicas){
                $this->basico = $objContasBasicas;
            }

            public function somar(Float $a, Float $b){
                return $this->basico->somar($a, $b);
            }

            public function subtrair(Float $a, Float $b){
                return $this->basico->subtrair($a, $b);
            }
        }

        $contasBasicas = new Basica();
        $mat = new Matematica($contasBasicas);
        echo "Resultado da soma de 10 + 10: " . $mat->somar(10, 10) . "<br>";
        

        // Exemplo pratico

        // A interface serve ÚNICA e exclusivamente para cosntruir métodos que serão OBRIGADOS a serem criados a classe que elas implementam
        interface DatabaseInterface{
            public function inserir($obj);
            public function excluir($obj);
            public function alterar($obj);
            public function buscar($obj);
            public function listar($obj);
        }
        
        // Classe mãe que receberá qual banco de dados será usado na aplicação e chamará o método requisitado
        class BD{
            private $engine; //tipo de banco de dados que será usado ex:mysql, bd2

            public function __construct(DatabaseInterface $engine){
                $this->engine = $engine;
            }
            public function inserir($obj){
                return $this->engine->inserir($obj);
            }
            public function excluir(){
                return $this->engine->excluir($obj);
            }
            public function alterar(){
                return $this->engine->alterar($obj);
            }
            public function buscar(){
                return $this->engine->buscar($obj);
            }
            public function listar(){
                return $this->engine->listar($obj);
            }
            
        }

        // classe com métodos voltados ao CRUD do mysql
        class MysqlBD implements DatabaseInterface{
            public function inserir($obj){
                // Código para inserir algo no banco de dados
                // ...

                return "Objeto inserido!";
            }
            public function excluir($obj){
                // Código para excluir algo no banco de dados
                // ...

                return "Objeto excluido!";
            }
            public function alterar($obj){
                // Código para alterar algo no banco de dados
                // ...

                return "Objeto alterado!";
            }
            public function buscar($obj){
                // Código para buscar algo no banco de dados
                // ...

                return "Resultado do objeto!";
            }
            public function listar($obj){
                // Código para listar algo no banco de dados
                // ...

                return "Lista de objeto!";
            }
        }

        // classe com métodos voltados ao CRUD do Oracle
        class OracleBD implements DatabaseInterface{
            public function inserir($obj){
                // Código para inserir algo no banco de dados
                // ...

                return "Objeto inserido!";
            }
            public function excluir($obj){
                // Código para excluir algo no banco de dados
                // ...

                return "Objeto excluido!";
            }
            public function alterar($obj){
                // Código para alterar algo no banco de dados
                // ...

                return "Objeto alterado!";
            }
            public function buscar($obj){
                // Código para buscar algo no banco de dados
                // ...

                return "Resultado do objeto!";
            }
            public function listar($obj){
                // Código para listar algo no banco de dados
                // ...

                return "Lista de objeto!";
            }
        }

        // classe com métodos voltados ao CRUD do MongoDB
        class MongoBD implements DatabaseInterface{
            public function inserir($obj){
                // Código para inserir algo no banco de dados
                // ...

                return "Objeto inserido!";
            }
            public function excluir($obj){
                // Código para excluir algo no banco de dados
                // ...

                return "Objeto excluido!";
            }
            public function alterar($obj){
                // Código para alterar algo no banco de dados
                // ...

                return "Objeto alterado!";
            }
            public function buscar($obj){
                // Código para buscar algo no banco de dados
                // ...

                return "Resultado do objeto!";
            }
            public function listar($obj){
                // Código para listar algo no banco de dados
                // ...

                return "Lista de objeto!";
            }
        }

        $mysql = New MysqlBD();
        $oracle = New OracleBD();
        $mongo = New MongoBD();

        $DataBase = new BD($mysql);
        echo $DataBase->inserir("Claudio");

    ?>

    <hr />
    <p>PSR-1</p>
    <p>É obrigatório o uso do "< ?php" ou "< ?=" (esse exemplo ao lado serve exlusivamente para mostrar algo na tela) ao invés de usar "< ?"</p>
    <p>É obrigatório salvar os arquivos .php como UTF-8, sem BOM (executa comandando de forma "errada")</p>
    <p>Não podemos usar um arquivo para criar classes, funções, constantes etc e no mesmo arquivo fazer saida de resultados, mudar alguma configuração etc (essa página inteira faz isso mas é por que estou estudando)</p>
    <p>Para utilizarmos o namespace devemos seguir a PSR-4, a regra de autoloading (ainda não aprendi)</p>
    <p>Nome de classes devem seguir o padrão StudlyCaps (Ou seja, colocar a primeira letra da classe em maiscula e caso tenha mais de uma palavra, colocar a primeira letra da segunda palavra em maisuculo também ex: DataBase)</p>
    <P>Nome de métodos devem seguir o padrão camelCase (Ou seja, colocar a primeira letra da classe em minusculo e caso tenha mais de uma palavra, colocar a primeira letra da segunda palavra em maisuclo ex: mudarSenha)</P>
    <p>Toda constante (const) deve estar escrita em CAIXA ALTA e se tiver mais de uma palavra, deve ser separada por underline (_) ex: PI</p>
    <p>E para variaveis, precisamos usar somente um tipo de padrão como o StudlyCaps, camelCase ou snake_case</p>
    
    <hr />
    <p>AutoLoad</p>
    <p>O autoLoad serve para tirar o excesso de require que um script possa vir a ter (um arquivo que precisa de 20 classes terá 20 require, mas com o autoload não!)</p>

    <?php
        // É importante manter o nome do arquivo criado sendo o mesmo do nome da classe
        spl_autoload_register(function($class){
            if(file_exists("classes/" . $class . ".php")){ //esse "file_exists" verifica se o arquivo que está sendo pedido para carregar existe
                require "classes/" . $class . ".php";
            }
        });

        // É melhor fazer um require do autoload para não ficar com essa função no seu script
        require "autoload.php";

        $user = New Usuario();
        echo $user->inserir();
    ?>

    <hr />
    <p>PSR-4 -<b> Regras para o Autoload</b></p>
    <p>A PSR-4 é uma regra que diz que todas as classes necessitam de usar namespace, com o namespace no padrão da pasta e utilizar o autoload.</p>

    <?php

        require '../vendor/autoload.php';

        use \Database\Database as DB;
        use \Database\Mysql;
        use \Database\Oracle;
        use \Database\Mongo;
        use \Math\Basic;
        use \Math\PlaneGeometry;
        use \Function\Connect;

        $conn = new Connect();

        $mysql = new Mysql();
        $dataBase = new DB($mysql);
        echo $dataBase->delete("Claudio!") . "<br>";

        $matematicaBasica = new Basic();
        echo "Resultado: " . $matematicaBasica->divide(952, 13.3) . "<br>";

        $geometriaPlana = new PlaneGeometry();
        echo "Área do trapézio: " . $geometriaPlana->circle(10) . "<br>";

    ?>

    <hr />
    <p>Composer - <b> Como utilizar</b></p>
    <p>Para utilizar o composer, primeiro precisamos criar um arquivo "composer.json" na página do projeto</p>
    <p>Após fazermos isso, abrimos um terminal e rodamos o código "composer install"</p>
    <p>Ele irá criar uma pasta com o nome de "vendor" e tudo que instalarmos do composer, ele irá jogar dentro dessa pasta</p>
    <p>Para instalarmos alguma biblioteca usamos o comando "composer require ..." (Os ... significa a que temos que colocar o nomeDoAutor/nomeDaBiblioteca)</p>
    
    <?php
        require "../vendor/autoload.php"; // autoload padrão do composer

        use \Monolog\Logger;
        use \Monolog\Handler\StreamHandler;

        // create a log channel

        // $log = new Logger("Lucas");
        //$log->pushHandler(new StreamHandler("teste.log", Logger::WARNING));

        // add records to the log 
        
        // $log->warning("Aviso");
        // $log->error("Erro");


    ?>
</body> 
</html>