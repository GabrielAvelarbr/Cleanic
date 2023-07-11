<?php
    include("config.php");
    switch ($_REQUEST["acao"]) {
        case 'cadastrar':
            $nomeMedico = $_POST["nomeMedico"];
            $especialidadeMedico = $_POST["especialidadeMedico"];
            $emailMedico = $_POST["emailMedico"];
            $telefoneMedico = $_POST["telefoneMedico"];

            $sql = "INSERT INTO medico (nomeMedico, 
            especialidadeMedico, emailMedico,telefoneMedico) 
            VALUES ('{$nomeMedico}', '{$especialidadeMedico}', 
            '{$emailMedico}', '{$telefoneMedico}')";

            $resultado = $conn->query($sql);

            if($resultado==true){
                echo "<script>alert('Médico cadastrado com sucesso');</script>";
                echo "<script>location.href='visualizarMedicos.php';</script>";
            }
            
            break;

        case 'editar' :
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

            if($resultado==true){
                echo "<script>alert('Dados do médico alterados com sucesso');</script>";
                echo "<script>location.href='visualizarMedicos.php';</script>";
            }

            break;

        case 'excluir' :
            $sql = "DELETE FROM medico WHERE idMedico=" .$_REQUEST["idMedico"];

            $resultado = $conn->query($sql);

            if($resultado==true){
                echo "<script>alert('Médico excluído com sucesso');</script>";
                echo "<script>location.href='visualizarMedicos.php';</script>";
            }
            break;
    }
    