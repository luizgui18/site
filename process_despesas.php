<?php
$nome = "LUIZ";
$receitaMensal = 1200.00;
$despesaMensal = 1000.00;
$saldoGeral = $receitaMensal - $despesaMensal;

echo "<h2>BOA TARDE, <strong>$nome!</strong></h2>";
echo "<div>RECEITA MENSAL <span class='income'>R$ " . number_format($receitaMensal, 2, ',', '.') . "</span></div>";
echo "<div>DESPESA MENSAL <span class='expense'>R$ " . number_format($despesaMensal, 2, ',', '.') . "</span></div>";
echo "<p>SALDO GERAL: R$ " . number_format($saldoGeral, 2, ',', '.') . "</p>";
?>
