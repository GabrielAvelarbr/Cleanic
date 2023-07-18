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
            <h1>Visualizar dados do médico</h1>
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

            $sql = "SELECT * FROM medico WHERE idMedico=" .$_REQUEST["idMedico"];;

            $resultado = $conn->query($sql);

            echo '<table>';
            echo '<tr><th>ID</th><th>Nome</th><th>Especialidade</th><th>Email</th><th>Telefone</th></tr>';
            
            while ($row = $resultado->fetch_object()) {
                echo '<tr>';
                echo '<td>' . $row->idMedico . '</td>';
                echo '<td>' . $row->nomeMedico . '</td>';
                echo '<td>' . $row->especialidadeMedico . '</td>';
                echo '<td>' . $row->emailMedico . '</td>';
                echo '<td>' . $row->telefoneMedico . '</td>';
                echo '</tr>';
            }   
            echo '</table>';
            echo '<button class="botao-voltar" onclick="location.href=\'todosOsMedicos.php\'">Voltar</button>';
            ?>
        </div>
    </div>  
</body>
</html>

  