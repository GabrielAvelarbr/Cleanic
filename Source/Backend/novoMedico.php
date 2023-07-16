<h1>Adicionar medico</h1>
<form action = "salvaMedico.php" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div>
        <label>Nome</label>
        <input type ="text" name="nomeMedico">
    </div>
    <div>
        <label>Especialidades</label>
        <input type = "text" name="especialidadeMedico">
    </div>
    <div>
        <label>Email</label>
        <input type = "email" name="emailMedico">
    </div>
    <div>
        <label>Telefone</label>
        <input type = "text" name="telefoneMedico">
    </div>
    <div>
        <button type = "submit">Adicionar novo medico</button>
    </div>
</form>