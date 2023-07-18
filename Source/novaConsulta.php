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
            <h1>Cadastrar consulta</h1>
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
                <input type="hidden" name="acao" value="cadastrar">
                <?php
                    include("config.php");

                    $sql = "SELECT * FROM medico";
                    $resultadoMedico = $conn->query($sql);
                    $quantidadeMedico = $resultadoMedico->num_rows;

                    if($quantidadeMedico == 0) {
                        echo "Nenhum médico cadastrado";
                        echo "<br><br>";
                    }
                    else {
                        echo '<div>';
                            echo '<label for="medico">Selecione o Médico:</label>';
                                echo '<select name="idMedico" class ="caixa-dados">';
                                while ($row = $resultadoMedico->fetch_object()) {
                                    echo '<option value="' . $row->idMedico . '"> Nome: ' . $row->nomeMedico . '. ID: ' . $row->idMedico . '</option>';
                                }
                            echo '</select>';
                        echo '</div>';    
                    }
                    
                    
                    $sql = "SELECT * FROM paciente";
                    $resultadoPaciente = $conn->query($sql);
                    $quantidadePaciente = $resultadoPaciente->num_rows;

                    if($quantidadePaciente == 0) {
                        echo "Nenhum paciente cadastrado";
                        echo "<br><br>";
                    }
                    else {
                        echo '<div>';
                            echo '<label for="paciente">Selecione o Paciente:</label>';
                                echo '<select name="idPaciente" class ="caixa-dados">';
                                while ($row = $resultadoPaciente->fetch_object()) {
                                    echo '<option value="' . $row->idPaciente . '"> Nome: ' . $row->nomePaciente . '. ID: ' . $row->idPaciente . '</option>';
                                }
                            echo '</select>';
                        echo '</div>';    
                        }

                    $sql = "SELECT * FROM clinica";
                    $resultadoClinica = $conn->query($sql);
                    $quantidadeClinica = $resultadoClinica->num_rows;
                        

                    if($quantidadeClinica == 0) {
                        echo "Nenhuma clínica cadastrada";
                        echo "<br><br>";
                    }
                      
                    else {
                        echo '<div>';
                            echo '<label for="clinica">Selecione o Clínica:</label>';
                                echo '<select name="idClinica" class ="caixa-dados">';
                                while ($row = $resultadoClinica->fetch_object()) {
                                    echo '<option value="' . $row->idClinica . '"> Nome: ' . $row->nomeClinica . '. ID: ' . $row->idClinica . '</option>';
                                }
                            echo '</select>';
                        echo '</div>';  
                    }                                              
                ?>

                <div>
                    <label>Data</label>
                    <input type = "date" name="dataConsulta" class="caixa-dados">
                </div>
                <div>
                    <label>Horário</label>
                    <input type = "time" name="horarioConsulta" class="caixa-dados">
                </div>
                <div>
                    <button class = "botao-adicionar" type = "submit">Adicionar nova Consulta</button>
                </div>
            </form> 
            <button class="botao-cancelar" onclick="location.href='todasAsConsultas.php'">Cancelar</button>
        </div>  
    </div>  
</body>
</html>
