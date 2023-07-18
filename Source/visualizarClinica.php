<!DOCTYPE html>
<html>
<head>
    <html lang=¨pt-br¨></html>    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <link rel="stylesheet" href="styleTabela.css"> 
    <link rel="stylesheet" href="styleMenuFixo.css">
</head>
<body>
    <div class="header"> 
        <div>
            <img src="Logo.png" class="logoRightLogin">
        </div>
        <div class="linha-branca"></div>
        <div class="nome-tela">
            <h1>Visualizar clínica</h1>
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
<?php
    include("config.php");

    $sql = "SELECT * FROM clinica WHERE idClinica=" .$_REQUEST["idClinica"];;

    $resultado = $conn->query($sql);

    echo '<table>';
    echo '<tr><th>ID</th><th>Nome</th><th>Endereço</th><th>Cidade</th><th>Estado</th>
    <th>Cep</th><th>Email</th><th>Telefone</th></tr>';
    
    while ($row = $resultado->fetch_object()) {
        echo '<tr>';
        echo '<td>' . $row->idClinica . '</td>';
        echo '<td>' . $row->nomeClinica . '</td>';
        echo '<td>' . $row->enderecoClinica . '</td>';
        echo '<td>' . $row->cidadeClinica . '</td>';
        echo '<td>' . $row->estadoClinica . '</td>';
        echo '<td>' . $row->cepClinica . '</td>';
        echo '<td>' . $row->emailClinica . '</td>';
        echo '<td>' . $row->telefoneClinica . '</td>';
        echo '</tr>';
    }   
    echo '</table>';
    echo '<button class="botao-voltar" onclick="location.href=\'todasAsClinicas.php\'">Voltar</button>';
    ?>
        </div>
    </div>  
</body>
</html>

  