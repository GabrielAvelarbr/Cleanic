<!DOCTYPE html>
<html>
<head>
    <html lang=¨pt-br¨></html>    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <link rel="stylesheet" href="styleExibiçãoDados.css">
    <link rel="stylesheet" href="styleMenuFixo.css">
</head>
<body>
    <div class="header"> 
        <div>
            <img src="Logo.png" class="logoRightLogin">
        </div>
        <div class="linha-branca"></div>
        <div class="nome-tela">
            <h1>Alterar dados da consulta</h1>
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
    <div class="formulario-dados">
            <form action = "salvaConsulta.php" method="POST">
                <input type="hidden" name="acao" value="editar">
                
                <?php   
                    include("config.php");
                    $sql = "SELECT * FROM consulta WHERE idConsulta=" .$_REQUEST["idConsulta"];

                    $resultado = $conn->query($sql);
                    $row = $resultado->fetch_object();

                    $sql = "SELECT * FROM medico";
                    $resultadoMedico = $conn->query($sql);
        
                    echo '<div>';
                        echo '<label for="medico">Selecione o Médico:</label>';
                        echo '<select name="idMedico" class ="caixa-dados">';
                            while ($rowMedico = $resultadoMedico->fetch_object()) {
                                $selected = ($rowMedico->idMedico == $row->idMedico) ? 'selected' : '';
                                echo '<option value="' . $rowMedico->idMedico . '" ' . $selected . '> Nome: ' . $rowMedico->nomeMedico . '. ID: ' . $rowMedico->idMedico . '</option>';
                            }
                        echo '</select>';
                    echo '</div>';          
                    
                    $sql = "SELECT * FROM paciente";
                    $resultadoPaciente = $conn->query($sql);

                    echo '<div>';
                        echo '<label for="paciente">Selecione o Paciente:</label>';
                        echo '<select name="idPaciente" class ="caixa-dados">';
                            while ($rowPaciente = $resultadoPaciente->fetch_object()) {
                                $selected = ($rowPaciente->idPaciente == $row->idPaciente) ? 'selected' : '';
                                echo '<option value="' . $rowPaciente->idPaciente . '" ' . $selected . '> Nome: ' . $rowPaciente->nomePaciente . '. ID: ' . $rowPaciente->idPaciente . '</option>';
                            }
                        echo '</select>';
                    echo '</div>';

                    $sql = "SELECT * FROM clinica";
                    $resultadoClinica = $conn->query($sql);

                    echo '<div>';
                        echo '<label for="clinica">Selecione a Clínica:</label>';
                        echo '<select name="idClinica" class ="caixa-dados">';
                            while ($rowClinica = $resultadoClinica->fetch_object()) {
                                $selected = ($rowClinica->idClinica == $row->idClinica) ? 'selected' : '';
                                echo '<option value="' . $rowClinica->idClinica . '" ' . $selected . '> Nome: ' . $rowClinica->nomeClinica . '. ID: ' . $rowClinica->idClinica . '</option>';
                            }
                        echo '</select>';
                    echo '</div>';                           
                ?> 
                <input type="hidden" name="idConsulta" value="<?php echo $row->idConsulta ?>" class="caixa-dados">  
                <div>
                    <label>Data</label>
                    <input type = "date" name="dataConsulta" value="<?php echo $row->dataConsulta; ?>" class="caixa-dados">
                </div>
                <div>
                    <label>Horário</label>
                    <input type = "time" name="horarioConsulta" value="<?php echo $row->horarioConsulta; ?>" class="caixa-dados">
                </div>
                <div>
                    <button class = "botao-adicionar" type = "submit">Confirmar alteração dos dados</button>
                </div>
            </form>
        <button class="botao-cancelar" onclick="location.href='todasAsConsultas.php'">Cancelar</button>
    </div>
</div>

</body>
</html>
