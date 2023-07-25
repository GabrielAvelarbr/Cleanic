<?php
    include("config.php");
    switch ($_REQUEST["acao"]) {
        case 'cadastrar':
            try {
                $nomePaciente = $_POST["nomePaciente"];
                $generoPaciente = $_POST["generoPaciente"];
                $dataDeNascimentoPaciente = $_POST["dataDeNascimentoPaciente"];
                $emailPaciente = $_POST["emailPaciente"];
                $telefonePaciente = $_POST["telefonePaciente"];

                $sql = "INSERT INTO paciente (nomePaciente, 
                generoPaciente, dataDeNascimentoPaciente, emailPaciente,telefonePaciente) 
                VALUES ('{$nomePaciente}', '{$generoPaciente}', '{$dataDeNascimentoPaciente}',
                '{$emailPaciente}', '{$telefonePaciente}')";

                $resultado = $conn->query($sql);

                if ($resultado) {
                    echo "<script>alert('Paciente alterado com sucesso');</script>";
                    echo "<script>location.href='todosOsPacientes.php';</script>";
                } else {
                    throw new Exception("Não foi possível atualizar esse Paciente. " . $conn->error);
                }
            } catch (Exception $e) {
                echo "<script>alert('Erro ao atualizar o Paciente');</script>";
                echo "<script>location.href='todosOsPacientes.php';</script>";
            }
            break;
    }
    ?>