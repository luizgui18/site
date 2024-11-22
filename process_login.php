<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Validação simples
    if ($email == "admin@teste.com" && $senha == "1234") {
        echo "Login bem-sucedido!";
        header("Location: despesas.php");
    } else {
        echo "Credenciais inválidas.";
    }
}
?>
