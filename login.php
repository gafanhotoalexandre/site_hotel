<?php
session_start();
if (isset($_SESSION['email'])) {
    header('Location: home.php');
    exit;
}

$error = '';

if (isset($_GET['error']) && !empty($_GET['error']) ) {

    if ($_GET['error'] == 1) {
        $error = 'Usuário ou senha inválidos.';
    }
    if ($_GET['error'] == 2) {
        $error = 'Usuário não autenticado.';
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <!-- Personal CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        nav a.h2 {
            color: #121f4080;
        }
    </style>

    <title>Breveler - login</title>
</head>
<body>

    <nav class="navbar navbar-expand-sm navbar-light bg-white shadow">
        <!-- Logo -->
        <a href="#" class="h2">Breveler</a>
        <!-- Logo -->

        <!-- Navegação -->
        <ul class="navbar-nav ml-auto">

            <li class="nav-item">
                <a class="nav-link lead" href="">Opções</a>
            </li>

            <li class="nav-item">
                <a class="nav-link lead" href="">Opções</a>
            </li>

            <li class="nav-item">
                <a class="nav-link lead" href="">Opções</a>
            </li>
        </ul>
        <!-- Fim Navegação -->
    </nav>

    <main class="mt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">

                    <div class="card bg-transparent border-light">
                        <div class="card-header bg-transparent border-light">
                            <h2 class="display-4 text-center text-white">Login</h2>
                        </div>

                        <div class="card-body">
                            <form action="login_action.php" method="post" class="text-light">
                                <!-- Mensagem de Erro -->
                                <?php if ($error): ?>
                                    <div class="alert alert-danger">
                                        ERRO: <?= $error?>
                                    </div>
                                <?php endif ?>
                                <!-- Mensagem de Erro -->

                                <div class="form-group">
                                    <label for="email">Usuário:</label>
                                    <input type="text" name="email" id="email"
                                        class="form-control"  placeholder="admin@teste.com"> 
                                </div>

                                <div class="form-group">
                                    <label for="email">Senha:</label>
                                    <input type="password" name="password" id="password"
                                        class="form-control" placeholder="1234">
                                </div>

                                <button type="submit" class="btn btn-info form-control">Entrar</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div> 
        </div>
    </main>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</body>
</html>