<?php
    include("config.php");
    switch ($_REQUEST["acao"]) {
        case 'cadastrar':
            try {
                $idMedico = $_POST["idMedico"];
                $idPaciente = $_POST["idPaciente"];
                $idClinica = $_POST["idClinica"];
                $dataConsulta = $_POST["dataConsulta"];
                $horarioConsulta = $_POST["horarioConsulta"];
    
                $sql = "INSERT INTO consulta (idMedico, 
                idPaciente, idClinica,dataConsulta, horarioConsulta) 
                VALUES ('{$idMedico}', '{$idPaciente}', 
                '{$idClinica}', '{$dataConsulta}' , '{$horarioConsulta}')";
    
                $resultado = $conn->query($sql);
                if ($resultado) {
                    echo "<script>alert('Consulta excluída com sucesso');</script>";
                    echo "<script>location.href='todasAsConsultas.php';</script>";
                } else {
                    throw new Exception("Não foi possível excluir essa Consulta. " . $conn->error);
                }
            } catch (Exception $e) {
                echo "<script>alert('Erro ao excluir a Consulta');</script>";
                echo "<script>location.href='todasAsConsultas.php';</script>";
            }
            break;

        case 'editar' :
            try {
                $idMedico = $_POST["idMedico"];
                $idPaciente = $_POST["idPaciente"];
                $idClinica = $_POST["idClinica"];
                $dataConsulta = $_POST["dataConsulta"];
                $horarioConsulta = $_POST["horarioConsulta"];
                
                $sql = "UPDATE consulta SET
                            idMedico = '{$idMedico}',
                            idPaciente = '{$idPaciente}',
                            idClinica = '{$idClinica}',
                            dataConsulta = '{$dataConsulta}',
                            horarioConsulta = '{$horarioConsulta}'
                        WHERE
                            idConsulta=" .$_REQUEST["idConsulta"];
  
                $resultado = $conn->query($sql);

                if ($resultado) {
                    echo "<script>alert('Consulta excluída com sucesso');</script>";
                    echo "<script>location.href='todasAsConsultas.php';</script>";
                } else {
                    throw new Exception("Não foi possível excluir essa Consulta. " . $conn->error);
                }
            } catch (Exception $e) {
                echo "<script>alert('Erro ao excluir a Consulta');</script>";
                echo "<script>location.href='todasAsConsultas.php';</script>";
            }
            break;

        case 'excluir' :
    
            try {
                $sql = "DELETE FROM consulta WHERE idConsulta=" .$_REQUEST["idConsulta"];
                $resultado = $conn->query($sql);

                if ($resultado) {
                    echo "<script>alert('Consulta excluída com sucesso');</script>";
                    echo "<script>location.href='todasAsConsultas.php';</script>";
                } else {
                    throw new Exception("Não foi possível excluir essa Consulta. " . $conn->error);
                }
            } catch (Exception $e) {
                echo "<script>alert('Erro ao excluir a Consulta');</script>";
                echo "<script>location.href='todasAsConsultas.php';</script>";
            }
            break;
    }
?>
