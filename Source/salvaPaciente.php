<?php
    include("config.php");
    switch ($_REQUEST["acao"]) {
        case 'cadastrar':
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

            if($resultado==true){
                echo "<script>alert('Paciente cadastrado com sucesso');</script>";
                echo "<script>location.href='todosOsPacientes.php';</script>";
            }
            else {
                echo "<script>alert('Não foi possível cadastrar o paciente');</script>";
                echo "<script>location.href='todosOsPacientes.php';</script>";
            }
            
            break;
    }
    ?>