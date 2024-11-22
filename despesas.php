<!DOCTYPE html>
<html lang="pt-BR"> <!-- Define o idioma da página como português do Brasil -->
<head>
    <meta charset="UTF-8"> <!-- Define a codificação de caracteres como UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Ajusta a visualização para dispositivos móveis -->
    <title>ContaCerta</title> <!-- Define o título da página -->
    <link rel="stylesheet" href="despesas.css"> <!-- Vincula o arquivo CSS externo -->
</head>
<body>
    <!-- Cabeçalho da página -->
    <header class="header">
        <!-- Logo da aplicação -->
        <div class="logo">ContaCerta</div>
        
        <!-- Menu de navegação -->
        <nav class="menu">
            <a href="#">VISÃO GERAL</a> <!-- Link para a visão geral -->
            <a href="#">LANÇAMENTO</a> <!-- Link para lançamentos -->
            <a href="#">RELATÓRIOS</a> <!-- Link para relatórios -->
            <a href="#">LIMITE DE GASTOS</a> <!-- Link para limite de gastos -->
        </nav>
        
        <!-- Ícones do cabeçalho -->
        <div class="icons">
            <span class="bell">🔔</span> <!-- Ícone de notificações -->
            <span class="gear">⚙️</span> <!-- Ícone de configurações -->
            <span class="user">👤</span> <!-- Ícone do usuário -->
        </div>
    </header>





    <!-- Conteúdo principal da página -->
    <main class="main">
        <!-- Mensagem de boas-vindas -->
            <div class="dashboard">
  <div class="greeting">
    <span>BOA TARDE, <br><strong>LUIZ!</strong></span>
  </div>

  <div class="financial-info">
    <div class="info-box">
      <span>RECEITA MENSAL</span>
      <p class="income">R$ 1.200,00</p>
    </div>
    <div class="info-box">
      <span>DESPESA MENSAL</span>
      <p class="expense">R$ 1.000,00</p>
    </div>
    <div class="info-box view-reports-box">
      <button class="view-reports">VER RELATÓRIOS</button>
    </div>
  </div>

  <div class="quick-access">
    <button class="action-button expense">
      <span>DESPESAS</span>
    </button>
    <button class="action-button income">
      <span>RECEITAS</span>
    </button>
    <button class="action-button transfer">
      <span>TRANSF.</span>
    </button>
    <button class="action-button import">
      <span>IMPORTAR</span>
    </button>
  </div>
</div>




        <!-- Seção de contas -->
       <div class="dashboard1">
    <!-- Seção de Saldo Geral -->
    <div class="balance-section">
      <div class="balance-header">
        <p class="balance-title">SALDO GERAL</p>
        <div class="balance-value">
          <span>R$</span>
          <strong>200,00</strong>
          <i class="icon-eye">👁️</i>
        </div>
      </div>
      <hr class="divider">
      <div class="accounts-section">
        <div class="account">
          <img src="Conta-inicial.png" alt="Conta Inicial" class="account-icon">
          <p>CONTA INICIAL</p>
        </div>
        <div class="account-value">R$ 200,00</div>
      </div>
      <button class="manage-button">GERENCIAR CONTAS</button>
    </div>
    <!-- Seção de Gráfico -->
    <div class="chart-section">
      <div class="chart">
        <!-- Gráfico de pizza é uma imagem ou gerado via JavaScript -->
        <img src="Grafico.png" alt="Gráfico de pizza" class="chart-img">
      </div>
      <div class="chart-details">
        <div class="chart-item">
          <span class="circle" style="background-color: #008080;"></span>
          <p>DÍVIDAS E EMPRÉSTIMOS</p>
          <span class="percentage">31%</span>
        </div>
        <div class="chart-item">
          <span class="circle" style="background-color: #8a2be2;"></span>
          <p>TRANSPORTES</p>
          <span class="percentage">29,8%</span>
        </div>
        <div class="chart-item">
          <span class="circle" style="background-color: #dc3545;"></span>
          <p>SERVIÇOS E ASSINATURAS</p>
          <span class="percentage">27,4%</span>
        </div>
        <div class="chart-item">
          <span class="circle" style="background-color: #28a745;"></span>
          <p>EDUCAÇÃO</p>
          <span class="percentage">11,9%</span>
        </div>
        <button class="view-reports">VER RELATÓRIOS</button>
      </div>
    </div>
  </div>


    </main>
</body>
</html>
