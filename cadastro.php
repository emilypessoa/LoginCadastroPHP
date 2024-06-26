<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Configurações básicas da página -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro</title>

    <!-- Inclusão do CSS do Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <!-- Estilos personalizados -->
    <style>
      body, html {
        height: 100%;
        background-color: #212529; /* cor de fundo */
      }
      .cover-container {
        max-width: 42em;
      }
      .text-bg-dark {
        color: white; /* cor do texto */
      }
    </style>
</head>
<body class="d-flex h-100 text-center text-bg-dark">
    <!-- Container principal que ocupa toda a altura da tela -->
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
      
      <!-- Cabeçalho da página -->
      <header class="mb-auto">
        <div>
          <!-- Título da aplicação -->
          <h3 class="float-md-start mb-0 text-white">Aplicação PHP</h3>
          
          <!-- Menu de navegação -->
          <nav class="nav nav-masthead justify-content-center float-md-end">
            <a class="nav-link" href="index.php">Home</a>
            <a class="nav-link" href="login.php">Login</a>
            <a class="nav-link active" href="cadastro.php">Cadastro</a>
          </nav>
        </div>
      </header>

      <!-- Conteúdo principal da página -->
      <main class="px-3">
        <h1>Cadastro</h1>
        
        <!-- Formulário de cadastro -->
        <form action="registrar.php" method="post">
          <div class="mb-3">
            <label for="name" class="form-label">Nome</label>
            <input type="text" class="form-control" id="name" name="name" required>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Senha</label>
            <input type="password" class="form-control" id="password" name="password" required>
          </div>
          <div class="mb-3">
            <label for="confsenha" class="form-label">Confirme a senha</label>
            <input type="password" class="form-control" id="confsenha" name="confsenha" required>
          </div>
          <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
      </main>

      <!-- Rodapé da página -->
      <footer class="mt-auto text-white-50">
        <p>Aplicação PHP com Bootstrap 5, by <a href="https://getbootstrap.com/" class="text-white">Bootstrap</a>.</p>
        <p>Projeto criado por <a href="https://www.linkedin.com/in/emily-rodrigues-pessoa-186a93268?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app" style="color: white;">@emilyrodriguespessoa</a>.</p>
      </footer>
    </div>
    
    <!-- Inclusão do JS do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+9b5U5fR5z0d3N5XyFw5p6C5MQf6D" crossorigin="anonymous"></script>
  </body>
</html>
