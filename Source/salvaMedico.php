<?php
    include("config.php");
    switch ($_REQUEST["acao"]) {
        case 'cadastrar':
            try {
                $nomeMedico = $_POST["nomeMedico"];
                $especialidadeMedico = $_POST["especialidadeMedico"];
                $emailMedico = $_POST["emailMedico"];
                $telefoneMedico = $_POST["telefoneMedico"];

                $sql = "INSERT INTO medico (nomeMedico, 
                especialidadeMedico, emailMedico,telefoneMedico) 
                VALUES ('{$nomeMedico}', '{$especialidadeMedico}', 
                '{$emailMedico}', '{$telefoneMedico}')";

                $resultado = $conn->query($sql);

                if ($resultado) {
                    echo "<script>alert('Médico adicionado com sucesso');</script>";
                    echo "<script>location.href='todosOsMedicos.php';</script>";
                } else {
                    throw new Exception("Não foi possível adicionar esse médico. " . $conn->error);
                }
            } catch (Exception $e) {
                echo "<script>alert('Erro ao adicionar o médico');</script>";
                echo "<script>location.href='todosOsMedicos.php';</script>";
            }
            break;

        case 'editar' :
            try {
                $nomeMedico = $_POST["nomeMedico"];
                $especialidadeMedico = $_POST["especialidadeMedico"];
                $emailMedico = $_POST["emailMedico"];
                $telefoneMedico = $_POST["telefoneMedico"];
                
                $sql = "UPDATE medico SET
                            nomeMedico = '{$nomeMedico}',
                            especialidadeMedico = '{$especialidadeMedico}',
                            emailMedico = '{$emailMedico}',
                            telefoneMedico = '{$telefoneMedico}'
                        WHERE
                            idMedico=" .$_REQUEST["idMedico"];   
                $resultado = $conn->query($sql);

                if ($resultado) {
                    echo "<script>alert('Médico alterado com sucesso');</script>";
                    echo "<script>location.href='todosOsMedicos.php';</script>";
                } else {
                    throw new Exception("Não foi possível atualizar esse médico. " . $conn->error);
                }
            } catch (Exception $e) {
                echo "<script>alert('Erro ao atualizar o médico');</script>";
                echo "<script>location.href='todosOsMedicos.php';</script>";
            }
            break;

        case 'excluir' :
            try {
                $sql = "DELETE FROM medico WHERE idMedico=" .$_REQUEST["idMedico"];
                $resultado = $conn->query($sql);

                if ($resultado) {
                    echo "<script>alert('Médico excluído com sucesso');</script>";
                    echo "<script>location.href='todosOsMedicos.php';</script>";
                } else {
                    throw new Exception("Não foi possível excluir esse médico. " . $conn->error);
                }
            } catch (Exception $e) {
                echo "<script>alert('Erro ao excluir o médico');</script>";
                echo "<script>location.href='todosOsMedicos.php';</script>";
            }
            break;
    }
?>

