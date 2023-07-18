<!DOCTYPE html>
<html>
<head>
    <html lang=¨pt-br¨></html>    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <link rel="stylesheet" href="styleMenuFixo.css">
    <link rel="stylesheet" href="styleTabela.css">    
</style>

</head>
<body>
    <div class="header"> 
        <div>
            <img src="Logo.png" class="logoRightLogin">
        </div>
        <div class="linha-branca"></div>
        <div class="nome-tela">
            <h1>Todas as clínicas</h1>
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
    <p class = "categoria-lista"><span class="destaque-lista">Clínicas</span> lista</p>
<?php
    include("config.php");

    $sql = "SELECT * FROM clinica";

    $resultado = $conn->query($sql);

    $quantidade = $resultado->num_rows;

    if($quantidade == 0) {
        echo "Nenhuma clínica cadastrada";
        echo "<br><br>";
    }
    else {
        echo '<table>';
        echo '<tr><th>ID</th><th>Nome</th><th>Email</th><th>Acoes</th></tr>';
    
        while ($row = $resultado->fetch_object()) {
            echo '<tr>';
            echo '<td>' . $row->idClinica . '</td>';
            echo '<td>' . $row->nomeClinica . '</td>';
            echo '<td>' . $row->emailClinica . '</td>';
            echo '<td><button onclick="location.href=\'visualizarClinica.php?idClinica=' . $row->idClinica . '\'">Visualizar</button></td>';
            echo '</tr>';
        }
    
        echo '</table>';
    }
    echo '<button class="botao-adicionar" onclick="location.href=\'novaClinica.php\'">Adicionar Clínica</button>';
?>
        </div>
    </div>  
</body>
</html>

   