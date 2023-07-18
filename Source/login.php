<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleLogin.css">
    <title>Login Cleanic</title> 
</head>
<body>
    <div class="mainLogin">
        <div class="leftLogin">
           
        </div>
        <div class="rightLogin">
            <div class="cardLogin">
                <div>
                    <img src="Logo.png" class="logoRightLogin">
                </div>
                <h2>Acesse sua conta</h2>
                <p>E otimize a gestão da sua clínica</p>
                <div class="textField">
                    <label for="email">Email</label>
                    <input type="email" id ="email" placeholder="Email">
                </div>
                <div class="textField">
                    <label for="senha">Senha</label>
                    <input type="password" id ="senha" placeholder="Senha">
                </div>
                <button class="botaoEntrar" onclick="logar()">Entrar</button>
                <p class="esqueciSenhaRightLogin">Esqueci minha senha</p>
                <p>Ainda não possui conta? <span class="destaqueRightLogin">Crie agora</span</p>
            </div>
        </div>
    </div>
    <script>
        function logar() { 
            var email = document.getElementById('email').value;
            var senha = document.getElementById('senha').value;

            if(email == "admin@mail.com" && senha == "1234") {
                location.href = "menuInicial.php";
            }
            else {
                alert('Email ou senha incorretos');
            }
        }
        
    </script>
    
</body>
</html>