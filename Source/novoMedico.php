<!DOCTYPE html>
<html>
<head>
    <html lang=¨pt-br¨></html>    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <link rel="stylesheet" href="styleExibiçãoDados.css">
    <link rel="stylesheet" href="styleMenuFixo.css">
</head>
<body>
    <div class="header"> 
        <div>
            <img src="Logo.png" class="logoRightLogin">
        </div>
        <div class="linha-branca"></div>
        <div class="nome-tela">
            <h1>Cadastrar médico</h1>
        </div>
    </div>
    <div class="sidebar">
        <div class="foto-perfil">
            <img src="Foto-perfil.png" >
        </div>
        <p class="nome-perfil">Admin</p>
        <p class="menssagem-bem-vindo">Seja bem-vindo(a)</p>
        <div class="atalhos-sidebar">
            <a class="atalho-menu-inicial" href="menuInicial.php">Menu inicial</a>
            <a class="atalhos" href="todosOsMedicos.php">Médicos</a>
            <a class="atalhos" href="todosOsPacientes.php">Pacientes</a>
            <a class="atalhos" href="todasAsClinicas.php">Clínicas</a>
            <a class="atalhos" href="todasAsConsultas.php">Consultas</a>
        </div>
    </div>
    <div class="main-container">
        <div class="formulario-dados">
            <form action = "salvaMedico.php" method="POST">
                <input type="hidden" name="acao" value="cadastrar">
                <div>
                    <label>Nome</label>
                    <input type ="text" name="nomeMedico" class="caixa-dados">
                </div>
                <div>
                    <label>Especialidades</label>
                    <input type = "text" name="especialidadeMedico" class="caixa-dados">
                </div>
                <div>
                    <label>Email</label>
                    <input type = "email" name="emailMedico" class="caixa-dados">
                </div>
                <div>
                    <label>Telefone</label>
                    <input type = "text" name="telefoneMedico" class="caixa-dados">
                </div>
                <div>
                    <button class = "botao-adicionar" type = "submit">Adicionar novo medico</button>
                </div>
            </form> 
            <button class="botao-cancelar" onclick="location.href='todosOsMedicos.php'">Cancelar</button>
        </div>  
    </div>  
</body>
</html>
