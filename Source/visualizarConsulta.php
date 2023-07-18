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
            <h1>Visualizar dados da consulta</h1>
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

            $sql = "SELECT * FROM consulta WHERE idconsulta=" .$_REQUEST["idConsulta"];;

            $resultado = $conn->query($sql);

            echo '<table>';
            echo '<tr><th>ID Consulta</th><th>Nome Médico</th><th>ID Médico</th><th>Nome Paciente</th><th>ID Paciente</th>
            <th>Nome Clínica</th><th>ID Clínica</th><th>Data</th><th>Horário</th></tr>';
            
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
                echo '<td>' . $row->idConsulta . '</td>';
                echo '<td >' . $rowMedico->nomeMedico . '</td>';
                echo '<td>' . $row->idMedico . '</td>';
                echo '<td>' . $rowPaciente->nomePaciente . '</td>';
                echo '<td>' . $row->idPaciente . '</td>';
                echo '<td>' . $rowClinica->nomeClinica . '</td>';
                echo '<td>' . $row->idClinica . '</td>';
                echo '<td>' . $row->dataConsulta . '</td>';
                echo '<td>' . $row->horarioConsulta . '</td>';
                echo '</tr>';
            }   
            echo '</table>';
            echo '<button class="botao-voltar" onclick="location.href=\'todasAsConsultas.php\'">Voltar</button>';
            ?>
        </div>
    </div>  
</body>
</html>

  