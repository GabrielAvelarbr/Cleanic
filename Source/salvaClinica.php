
<?php
    include("config.php");
    switch ($_REQUEST["acao"]) {
        case 'cadastrar':
            $nomeClinica = $_POST["nomeClinica"];
            $enderecoClinica = $_POST["enderecoClinica"];
            $cidadeClinica = $_POST["cidadeClinica"];
            $estadoClinica = $_POST["estadoClinica"];
            $cepClinica = $_POST["cepClinica"];
            $emailClinica = $_POST["emailClinica"];
            $telefoneClinica = $_POST["telefoneClinica"];

            $sql = "INSERT INTO clinica (nomeClinica, enderecoClinica, cidadeClinica, 
            estadoClinica, cepClinica, emailClinica, telefoneClinica) 
            VALUES ('{$nomeClinica}', '{$enderecoClinica}', '{$cidadeClinica}', '
            {$estadoClinica}', '{$cepClinica}','{$emailClinica}', '{$telefoneClinica}')";

            $resultado = $conn->query($sql);

            if($resultado==true){
                echo "<script>alert('Clínica cadastrada com sucesso');</script>";
                echo "<script>location.href='todasAsClinicas.php';</script>";
            }
            else {
                echo "<script>alert('Não foi possível cadastrar a clínica');</script>";
                echo "<script>location.href='todasAsClinicas.php';</script>";
            }
        break;
    }
    ?>
 
    
