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
            <h1>Todos os paciente</h1>
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
    <p class = "categoria-lista"><span class="destaque-lista">Pacientes</span> lista</p>
<?php
    include("config.php");

    $sql = "SELECT * FROM paciente";

    $resultado = $conn->query($sql);

    $quantidade = $resultado->num_rows;

    if($quantidade == 0) {
        echo "Nenhum paciente cadastrado";
        echo "<br><br>";
    }
    else {
        echo '<table>';
        echo '<tr><th>ID</th><th>Nome</th><th>Email</th><th>Acoes</th></tr>';
    
        while ($row = $resultado->fetch_object()) {
            echo '<tr>';
            echo '<td>' . $row->idPaciente . '</td>';
            echo '<td>' . $row->nomePaciente . '</td>';
            echo '<td>' . $row->emailPaciente . '</td>';
            echo '<td><button onclick="location.href=\'visualizarPaciente.php?idPaciente=' . $row->idPaciente . '\'">Visualizar</button></td>';
            echo '</tr>';
        }
    
        echo '</table>';
    }
    echo '<button class="botao-adicionar" onclick="location.href=\'novoPaciente.php\'">Adicionar Paciente</button>';
?>
        </div>
    </div>  
</body>
</html>

   