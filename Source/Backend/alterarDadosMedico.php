<h1>Alterar dados do medico</h1>
<?php   
    include("config.php");
    $sql = "SELECT * FROM medico WHERE idMedico=" .$_REQUEST["idMedico"];

    $resultado = $conn->query($sql);
    $row = $resultado->fetch_object();
?>
<form action = "salvaMedico.php" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="idMedico" value="<?php echo $row->idMedico ?>">
    <div>
        <label>Nome</label>
        <input type ="text" name="nomeMedico" value ="<?php echo $row->nomeMedico; ?>">
    </div>
    <div>
        <label>Especialidades</label>
        <input type = "text" name="especialidadeMedico" value ="<?php echo $row->especialidadeMedico;?>">
    </div>
    <div>
        <label>Email</label>
        <input type = "email" name="emailMedico" value="<?php echo $row->emailMedico; ?>">
    </div>
    <div>
        <label>Telefone</label>
        <input type = "text" name="telefoneMedico" value="<?php echo $row->telefoneMedico; ?>">
    </div>
    <div>
        <button type = "submit">Confirmar alteração dos dados</button>
    </div>
</form>