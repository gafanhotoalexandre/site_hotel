<?php
    require_once '../auth/verify_login.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <!-- Personal CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <style>
        .box {
            height: 425px;
        }
    </style>

    <title>Breveler</title>
</head>
<body>


    <div id="sidebar" class="fixed-top">
        <nav>
            <div id="title" class="text-center m-3 p-2">
                <a href="home.php" class="navbar-brand">HOSPEDAGEM X</a>
            </div>

            <ul class="list-unstyled">
                <li class="selected">
                    <a href="hotel_guests.php">Hóspedes</a>
                </li>
                <li>
                    <a href="open_spaces.php">Vagas Abertas</a>
                </li>
                <li>
                    <a href="filled_spaces.php">Vagas Preenchidas</a>
                </li>
                <li>
                    <a href="">Histórico</a>
                </li>
                <li>
                    <a href="">Finanças</a>
                </li>
                
            </ul>
        </nav>

        <div class="text-center">
            <a href="../auth/logout.php"
                class="btn btn-outline-light px-5">
                Sair
            </a>
        </div>
    </div>

    <div id="content" class="container-fluid mt-3">
        <nav class="navbar navbar-expand-sm navbar-light bg-light shadow">            
            <!-- Navegação -->
            <ul class="navbar-nav ml-3">
    
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
            <div id="special-logout" class="ml-auto">
                <a href="../auth/logout.php" class="btn btn-outline-secondary px-3">Sair</a>
            </div>
        </nav>

        <main class="mt-3 bg-light py-3">
            <nav class="pb-1">
                <ul class="d-flex flex-wrap justify-content-around align-items-center list-unstyled">
                    <li class="bg-success px-4">
                        <a href="" class="text-light">Entra hoje: 12</a>
                    </li>
                    <li class="bg-danger px-4">
                        <a href="" class="text-light">Sai hoje: 05</a>
                    </li>
                    <li id="search" class="bg-info px-4">
                        <a onclick="researcher()" class="text-light">Pesquisar</a>
                    </li>
                </ul>
            </nav>

            <article class="mx-4 my-3">
                <div class="container text-light">
                    <section class="row my-3">
                        <div class="col-md">
                            <div class="box text-center">Dados</div>
                        </div>
                    </section>
                </div>
            </article>
        </main>

        <footer class="mt-3">
            <p class="text-light text-right">
                Made by ...
            </p>
        </footer>
    </div>
    








    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <script src="../assets/js/script.js"></script>

</body>
</html>