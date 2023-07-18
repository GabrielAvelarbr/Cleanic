<!DOCTYPE html>
<html>
<head>
    <html lang=¨pt-br¨></html>    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <link rel="stylesheet" href="styleMenuFixo.css">
    <link rel="stylesheet" href="styleTabela.css">
</head>
<body>
    <div class="header"> 
        <div>
            <img src="Logo.png" class="logoRightLogin">
        </div>
        <div class="linha-branca"></div>
        <div class="nome-tela">
            <h1>Todos os médicos</h1>
        </div>
    </div>
    <div class="sidebar">
        <div class="foto-perfil">
            <img src="Foto-perfil.png" >
        </div>
        <p class="nome-perfil">Admin</p>
        <p class="menssagem-bem-vindo">Seja bem-vindo(a)</p>
        <div class="atalhos-sidebar">
            <a class="atalho-menu-inicial" href="menuInicial.php">Menu inicial</a>
            <a class="atalhos" href="todosOsMedicos.php">Médicos</a>
            <a class="atalhos" href="todosOsPacientes.php">Pacientes</a>
            <a class="atalhos" href="todasAsClinicas.php">Clínicas</a>
            <a class="atalhos" href="todasAsConsultas.php">Consultas</a>
        </div>
    </div>
    <div class="main-container">
    <p class = "categoria-lista"><span class="destaque-lista">Médicos</span> lista</p>
    <?php
        include("config.php");

        $sql = "SELECT * FROM medico";

        $resultado = $conn->query($sql);

        $quantidade = $resultado->num_rows;

        if($quantidade == 0) {
            echo "Nenhum médico cadastrado";
            echo "<br><br>";
        }
        else {
            echo '<table>';
            echo '<tr><th>ID</th><th>Nome</th><th>Email</th><th colspan="3">Ações</th></tr>';
        
            while ($row = $resultado->fetch_object()) {
                echo '<tr>';
                echo '<td>' . $row->idMedico . '</td>';
                echo '<td>' . $row->nomeMedico . '</td>';
                echo '<td>' . $row->emailMedico . '</td>';
                echo '<td><button onclick="location.href=\'visualizarMedico.php?idMedico=' . $row->idMedico . '\'">Visualizar</button></td>';
                echo '<td><button onclick="location.href=\'alterarDadosMedico.php?idMedico=' . $row->idMedico . '\'">Editar</button></td>';
                echo '<td><button onclick="if(confirm(\'Tem certeza que deseja excluir?\')){location.href=\'salvaMedico.php?acao=excluir&idMedico='
                    .$row->idMedico.'\';}else{false;}">Excluir</button></td>';
            }
            echo '</table>';
        }
        echo '<button class="botao-adicionar" onclick="location.href=\'novoMedico.php\'">Adicionar Médico</button>';
    ?>
</div>

</body>
</html>
