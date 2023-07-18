<!DOCTYPE html>
<html>
<head>
    <html lang=¨pt-br¨></html>    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <link rel="stylesheet" href="styleMenuInicial.css">
    <link rel="stylesheet" href="styleMenuFixo.css">
</head>
<body>
    <div class="header"> 
        <div>
            <img src="Logo.png" class="logoRightLogin">
        </div>
        <div class="linha-branca"></div>
        <div class="nome-tela">
            <h1>Menu inicial</h1>
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
        <div class="botao"> 
            <button class="botaoMedicos" onclick="location.href = 'todosOsMedicos.php'">Médicos</button>
            <button class="botaoPacientes" onclick="location.href = 'todosOsPacientes.php'">Pacientes</button> 
            <button class="botaoClinicas" onclick="location.href = 'todasAsClinicas.php'">Clínicas</button> 
            <button class="botaoConsultas" onclick="location.href = 'todasAsConsultas.php'">Consultas</button>
 
        </div>
    </div>  
</body>
</html>
