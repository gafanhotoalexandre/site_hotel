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
        .bg-card {
            background: linear-gradient(to top, rgba(255, 255, 255, 0.8), rgb(240, 240, 240, 0.85));
            border-radius: 5px;
            margin: 5px;
            padding: 5px;
        }
        .box {
            border-radius: 5px;
            padding: 3px 5px;
        }
        p {
            margin: 0;
            padding: 0;
        }

        p a.info-link {
            color: #121F40;
            transition: all .2s;
        }
        p a.info-link:hover {
            color: rgb(18, 31, 64);
            opacity: .4;
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
                <li>
                    <a href="hotel_guests.php">Hóspedes</a>
                </li>
                <li>
                    <a href="open_spaces.php">Vagas Abertas</a>
                </li>
                <li>
                    <a href="filled_spaces.php">Vagas Preenchidas</a>
                </li>
                <li>
                    <a href="hotel_records.php">Histórico</a>
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
        <nav id="top-nav" class="navbar navbar-expand-sm navbar-light bg-light shadow">            
            <!-- Navegação -->
            <ul class="navbar-nav ml-3">
                <li class="nav-item">
                    <a class="nav-link lead" href="hotel_guests.php">Hóspedes</a>
                </li>
    
                <li class="nav-item">
                    <a class="nav-link lead" href="open_spaces.php">Vagas Abertas</a>
                </li>
    
                <li class="nav-item">
                    <a class="nav-link lead" href="filled_spaces.php">Vagas Preenchidas</a>
                </li>
            </ul>
            <!-- Fim Navegação -->
            <div id="special-logout" class="ml-auto">
                <a href="../auth/logout.php" class="btn btn-outline-secondary px-3">Sair</a>
            </div>
        </nav>

        <main class="mt-3 bg-light py-3">

            <article class="mx-4">
                <div class="container box text-dark">
                    <section class="row">
                        <div class="col-md-12">
                        
                            <div class="card bg-card">
                                <div class="card-header bg-transparent lead">Relatório Semanal</div>
                                <div class="card-body">
                                    <h5 class="card-title">Este é o relatório semanal.</h5>
                                    <p class="card-text">
                                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cum officia temporibus nostrum amet neque adipisci autem magni, aliquam praesentium incidunt laudantium ullam dolore commodi tempora? Vitae nam temporibus quidem! Eos!
                                    </p>
                                </div>
                            </div>

                        </div>
                    </section>

                    <section class="row">
                        <div class="col-md-6">

                            <div class="card bg-card">
                                <div class="card-header bg-transparent lead">Gráficos</div>
                                <div class="card-body">
                                    <!-- <h5 class="card-title">Este é o gráfico.</h5> -->
                                    <img src="../assets/imgs/graph.png" class="img-fluid" alt="Gráfico de entradas da semana">

                                    <p class="card-text border-top mt-3 pt-1 px-3 text-justify">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates est adipisci! <a href=""
                                            class="info-link">Acessar</a>
                                    </p>
                                </div>
                            </div>

                        </div>
                        
                        <div class="col-md-6">

                            <div class="card bg-card">
                                <div class="card-header bg-transparent lead">Resultado Financeiro</div>
                                <div class="card-body">
                                    <!-- <h5 class="card-title">Este é o resultado financeiro.</h5> -->
                                    <img src="../assets/imgs/financial_graph.png" class="img-fluid" alt="Gráfico de financeiro semanal">

                                    <p class="card-text border-top mt-3 pt-1 px-3 text-justify">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates est adipisci! <a href=""
                                            class="info-link">Acessar</a>
                                    </p>
                                </div>
                            </div>

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

</body>
</html>