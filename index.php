<!DOCTYPE html>
<html lang="pt-br">
<!-- Define o tipo de documento como HTML5 e define o idioma da página como português do Brasil -->

<head>
    <!-- Metadados e informações do cabeçalho -->
    <meta charset="UTF-8">
    <!-- Define o conjunto de caracteres como UTF-8 para suportar caracteres especiais -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Configura a página para ser responsiva em dispositivos móveis -->
    <title>ContaCerta - Login</title>
    <!-- Define o título da página que será exibido na aba do navegador -->
    <link rel="stylesheet" href="styles.css">
    <!-- Vincula o arquivo CSS externo para estilizar a página -->
</head>

<body>
    <!-- Corpo principal do documento -->
    
    <!-- Cabeçalho da página -->
    <header>
        <div class="logo-container">
            <!-- Container para o logo -->
            <img src="Logoescrita.png" alt="Logo da ContaCerta" class="logo-img">
            <!-- Imagem do logo com descrição alternativa para acessibilidade -->
        </div>
    </header>

    <!-- Container para o formulário de login -->
    <div class="login-container">
        <main>
            <!-- Conteúdo principal da página -->
            <form class="login-form" method="POST" action="process_login.php">
                <!-- Formulário de login que envia os dados via método POST para process_login.php -->
                
                <!-- Campo para o e-mail do usuário -->
                <div class="form-group">
                    <input type="email" name="email" placeholder="email" required>
                    <!-- Campo de entrada para e-mail com validação obrigatória -->
                </div>
                
                <!-- Campo para a senha do usuário -->
                <div class="form-group">
                    <input type="password" name="senha" placeholder="senha" required>
                    <!-- Campo de entrada para senha com validação obrigatória -->
                </div>
                
                <!-- Botão para enviar o formulário -->
                <button type="submit" class="btn-acessar">Acessar</button>
            </form>
            
            <!-- Links de ajuda e cadastro -->
            <div class="help-links">
                <a href="register.php">Cadastrar-se</a>
                <!-- Link para a página de cadastro -->
                <a href="https://wa.me/5531996553835">Precisa de ajuda?</a>
                <!-- Link genérico para a seção de ajuda (pode ser configurado posteriormente) -->
            </div>
        </main>
    </div>
</body>

</html>
