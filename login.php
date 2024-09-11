<?php

include("conexao.php");

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Página de Login Personalizada</title>
  <link rel="stylesheet" href="css/style.css">

  <script>
    function redirectToDashboard() {
      // Verifica se os campos de login não estão vazios (opcional)
      const username = document.getElementById('username').value;
      const password = document.getElementById('password').value;

      if (username && password) {
        // Se as credenciais forem válidas, redireciona o usuário
        window.location.href = "dashboard.php"; // Substitua pelo destino desejado
      } else {
        // Alerta caso os campos estejam vazios
        alert('Por favor, preencha todos os campos.');
      }
    }
  </script>
</head>
<body>

  <div class="login-container">
    <h2>LOG IN</h2>
    <form action="javascript:void(0);"> <!-- O formulário não será enviado, pois controlamos com JS -->
      <label for="username">Nome de Usuário</label>
      <input type="text" id="username" placeholder="Digite seu nome de usuário" required>

      <label for="password">Senha</label>
      <input type="password" id="password" placeholder="Digite sua senha" required>

      <button type="submit" class="login-btn" onclick="redirectToDashboard()">Entrar</button>

      <div class="forgot-password">
        <a href="#">Esqueceu a senha?</a>
      </div>

      <div class="signup">
        <p>Não tem uma conta? <a href="#">Cadastre-se</a></p>
      </div>
    </form>
  </div>

</body>
</html>