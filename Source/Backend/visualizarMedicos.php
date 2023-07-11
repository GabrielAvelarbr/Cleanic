<h1>Todos os médicos</h1>
<h3>Lista médicos</h3>
<?php
    include("config.php");

    $sql = "SELECT * FROM medico";

    $resultado = $conn->query($sql);

    $quantidade = $resultado->num_rows;

    if ($quantidade > 0) {
        echo '<table>';
        echo '<tr><th>ID</th><th>Nome</th><th>Especialidade</th><th>Email</th><th>Telefone</th><th>Acoes</th></tr>';
    
        while ($row = $resultado->fetch_object()) {
            echo '<tr>';
            echo '<td>' . $row->idMedico . '</td>';
            echo '<td>' . $row->nomeMedico . '</td>';
            echo '<td>' . $row->especialidadeMedico . '</td>';
            echo '<td>' . $row->emailMedico . '</td>';
            echo '<td>' . $row->telefoneMedico . '</td>';
            echo '<td><button onclick="location.href=\'alterarDadosMedico.php?idMedico=' . $row->idMedico . '\'">Editar</button></td>';
            echo '<td><button onclick="if(confirm(\'Tem certeza que deseja excluir?\')){location.href=\'salvaMedico.php?acao=excluir&idMedico='.$row->idMedico.'\';}else{false;}">Excluir</button></td>';

            echo '</tr>';
        }
    
        echo '</table>';
        echo '<button onclick="location.href=\'novoMedico.php\'">Adicionar novo médico</button>';

        
    }
    

?>