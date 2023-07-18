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
            <h1>Cadastrar clínica</h1>
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
            <form action = "salvaClinica.php" method="POST">
                <input type="hidden" name="acao" value="cadastrar">
                <div>
                    <label>Nome</label>
                    <input type ="text" name="nomeClinica" class="caixa-dados">
                </div>
                <div>
                    <label>Endereço</label>
                    <input type = "text" name="enderecoClinica" class="caixa-dados">
                </div>
                <div>
                    <label>Cidade</label>
                    <input type = "text" name="cidadeClinica" class="caixa-dados">
                </div>
                <div>
                    <label>Estado</label>
                    <input type = "text" name="estadoClinica" class="caixa-dados">
                </div>
                <div>
                    <label>CEP</label>
                    <input type = "text" name="cepClinica" class="caixa-dados">
                </div>
                <div>
                    <label>Email</label>
                    <input type = "email" name="emailClinica" class="caixa-dados">
                </div>
                <div>
                    <label>Telefone</label>
                    <input type = "text" name="telefoneClinica" class="caixa-dados">
                </div>
                <div>
                    <button class = "botao-adicionar" type = "submit">Adicionar nova clínica</button>
                </div>
            </form>
            <button class="botao-cancelar" onclick="location.href='todasAsClinicas.php'">Cancelar</button>
        </div>
    </div>  
</body>
</html>
