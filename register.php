<!DOCTYPE html>
<html lang="pt-br">
<!-- Define o tipo de documento como HTML5 e o idioma principal da página como português do Brasil -->

<head>
    <!-- Metadados e configurações da página -->
    <meta charset="UTF-8">
    <!-- Define o conjunto de caracteres como UTF-8 para suportar caracteres especiais -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Torna a página responsiva para dispositivos móveis -->
    <title>ContaCerta - Cadastro</title>
    <!-- Define o título da página que será exibido na aba do navegador -->
    <link rel="stylesheet" href="styles.css">
    <!-- Link para o arquivo CSS externo que estiliza a página -->
</head>

<body>
    <!-- Início do corpo da página -->

    <header>
        <!-- Cabeçalho da página -->
        <div class="logo-container">
            <!-- Container para o logotipo -->
            <img src="logoescrita.png" alt="Logo da ContaCerta" class="logo-img">
            <!-- Imagem do logo com texto alternativo para acessibilidade -->
        </div>
    </header>

    <div class="login-container">
        <!-- Container principal do formulário de cadastro -->
        <main>
            <!-- Elemento principal que contém o formulário -->
            <form class="login-form" method="POST" action="process_register.php">
                <!-- Início do formulário para cadastro, enviando os dados via método POST -->
                
                <div class="form-group">
                    <!-- Campo de entrada para o nome completo do usuário -->
                    <input type="text" name="nome" placeholder="nome:" required>
                    <!-- Campo obrigatório para inserir o nome -->
                </div>
                
                <div class="form-group">
                    <!-- Campo de entrada para o e-mail do usuário -->
                    <input type="email" name="email" placeholder="email:" required>
                    <!-- Campo obrigatório e validado para entrada de e-mail -->
                </div>
                
                <div class="form-group">
                    <!-- Campo de entrada para a data de nascimento -->
                    <input type="date" name="data_nascimento" placeholder="data de nascimento:" required>
                    <!-- Campo obrigatório para o usuário inserir sua data de nascimento -->
                </div>
                
                <div class="form-group">
                    <!-- Campo de entrada para a senha -->
                    <input type="password" name="senha" placeholder="senha:" required>
                    <!-- Campo obrigatório para o usuário inserir sua senha -->
                </div>
                
                <!-- Botão para enviar o formulário -->
                <button type="submit" class="btn-acessar">Cadastrar</button>
            </form>

            <div class="help-links">
                <!-- Links adicionais de navegação -->
                <a href="index.php">Login</a>
                <!-- Link para a página de login -->
                <a href="#">Precisa de ajuda?</a>
                <!-- Link genérico para a seção de ajuda -->
            </div>
        </main>
    </div>
</body>

<!-- Link adicional para retornar à página de login -->
<a href="index.php">Login</a>

</html>
