
<?php
    include("config.php");
    switch ($_REQUEST["acao"]) {
        case 'cadastrar':
            try {
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

                if ($resultado) {
                    echo "<script>alert('Clinica cadastrada com sucesso');</script>";
                    echo "<script>location.href='todasAsClinicas.php';</script>";
                } else {
                    throw new Exception("Não foi possível cadastrar essa clínica. " . $conn->error);
                }
            } catch (Exception $e) {
                echo "<script>alert('Erro ao cadastrar a Clinica');</script>";
                echo "<script>location.href='todasAsClinicas.php.php';</script>";
            }
            break;
    }
    ?>
