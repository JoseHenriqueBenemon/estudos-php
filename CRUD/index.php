<?php
require "config.php";

$sql = $conn->query("SELECT * FROM usuarios;");

$data = $sql->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>CRUD</title>

    

</head>
<body>
    <a href="adicionarUsuario.php" class="button">Adicionar Usuários</a>

    <table id="users">
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Senha</th>
            <th>Ações</th>
        </tr>
        
            <?php foreach($data as $row): ?>
                <tr>
                    <td><?=$row["id"]?></td>
                    <td><?=$row["nome"]?></td>
                    <td><?=$row["email"]?></td>
                    <td><?=$row["senha"]?></td>
                    <td>
                        <a class='smallButton' href="alterarUsuario.php?id=<?=$row['id']?>">Alterar</a> 
                        - 
                        <a class='smallButton' href="excluirUsuario.php?id=<?=$row['id']?>" onclick="return confirm('Deseja excluir este usuário?');">Excluir</a>
                    </td>
                </tr>
            <?php endforeach; ?>
    </table>

    <!-- Pop-up -->
	<div id="meuPopUp">
		<div class="conteudo" id="conteudo">
			<p id="mensagem-popup"></p>

            <div class="center">
                <button onclick="fecharPopUp()">Fechar</button>
            </div>
		</div>
	</div>

    <script src="js/script.js"></script>

</body>
</html>