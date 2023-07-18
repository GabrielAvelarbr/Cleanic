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
            <h1>Todos as consultas</h1>
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
    <p class = "categoria-lista"><span class="destaque-lista">Consultas</span> lista</p>
    <?php
        include("config.php");

        $sql = "SELECT * FROM consulta";
        $resultado = $conn->query($sql);
        $quantidade = $resultado->num_rows; 
        
        if($quantidade == 0) {
            echo "Nenhuma consulta cadastrada";
            echo "<br><br>";
        }
        else {
            echo '<table>';
            echo '<tr><th>Médico</th><th>Paciente</th><th>Clínica</th><th colspan="3">Ações</th></tr>';
        
            while ($row = $resultado->fetch_object()) {
                $sql = "SELECT * FROM medico WHERE idMedico = " . $row->idMedico;
                $resultadoMedico = $conn->query($sql);
                $rowMedico = $resultadoMedico->fetch_object();

                $sql = "SELECT * FROM paciente WHERE idPaciente = " . $row->idPaciente;
                $resultadoPaciente = $conn->query($sql);
                $rowPaciente = $resultadoPaciente->fetch_object();

                $sql = "SELECT * FROM clinica WHERE idClinica = " . $row->idClinica;
                $resultadoClinica = $conn->query($sql);
                $rowClinica = $resultadoClinica->fetch_object();
                
                echo '<tr>';
                echo '<td >' . $rowMedico->nomeMedico . '</td>';
                echo '<td>' . $rowPaciente->nomePaciente . '</td>';
                echo '<td>' . $rowClinica->nomeClinica . '</td>';
                echo '<td><button onclick="location.href=\'visualizarConsulta.php?idConsulta=' . $row->idConsulta . '\'">Visualizar</button></td>';
                echo '<td><button onclick="location.href=\'alterarDadosConsulta.php?idConsulta=' . $row->idConsulta . '\'">Editar</button></td>';
                echo '<td><button onclick="if(confirm(\'Tem certeza que deseja excluir?\')){location.href=\'salvaConsulta.php?acao=excluir&idConsulta='
                    .$row->idConsulta.'\';}else{false;}">Excluir</button></td>';
            }
            echo '</table>';
        }
        echo '<button class="botao-adicionar" onclick="location.href=\'novaConsulta.php\'">Adicionar Consulta</button>';
    ?>
</div>

</body>
</html>
