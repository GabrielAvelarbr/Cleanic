<?php
    include("config.php");
    switch ($_REQUEST["acao"]) {
        case 'cadastrar':
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

            if($resultado==true){
                echo "<script>alert('Consulta cadastrada com sucesso');</script>";
                echo "<script>location.href='todasAsConsultas.php';</script>";
            }
            else {
                echo "<script>alert('Não foi possível cadastrar a consulta');</script>";
                echo "<script>location.href='todasAsConsultas.php';</script>";
            }
            
            break;

        case 'editar' :
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

            if($resultado==true){
                echo "<script>alert('Dados da consulta alterados com sucesso');</script>";
                echo "<script>location.href='todasAsconsultas.php';</script>";
            }
            else {
                echo "<script>alert('Não foi possível modificar os dados desse consulta');</script>";
                echo "<script>location.href='todasAsConsultas.php';</script>";
            }
        
            break;

        case 'excluir' :
            $sql = "DELETE FROM consulta WHERE idConsulta=" .$_REQUEST["idConsulta"];

            $resultado = $conn->query($sql);

            if($resultado==true){
                echo "<script>alert('Consulta excluída com sucesso');</script>";
                echo "<script>location.href='todasAsConsultas.php';</script>";
            }
            else {
                echo "<script>alert('Não foi possível excluir essa consulta');</script>";
                echo "<script>location.href='todasAsConsultas.php';</script>";
            }
            break;
    }
    
?>