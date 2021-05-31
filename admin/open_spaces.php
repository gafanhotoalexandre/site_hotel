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
        }
        .box {
            border-radius: 5px;
            padding: 3px 5px;
        }
        p {
            margin: 0;
            padding: 0;
        }
        img + p {
            border-top: 1px solid;
            border-bottom: 1px solid;
        }

        p a.info-link {
            color: #121F40;
            transition: all .1s;
        }
        p a.info-link:hover {
            color: rgb(255, 255, 255);
            opacity: .4;
        }
        p {
            font-size: 0.8rem;
        }
        h6.lead {
            font-size: 1.1rem;
        }
        @media (max-width: 1300px) {
            p.lead {
                font-size: 0.6rem;
            }
        }
    </style>

    <title>Breveler - Vagas Abertas</title>
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
                <li class="selected">
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
            <article class="mx-4 mb-3">
                <h2 class="text-center text-secondary">Vagas Abertas</h2>
                <div class="container box py-3">
                    <section class="row">

                        <?php for ($i = 1; $i <=4; $i++): ?>
                            <div class="col-xl-6">
                                <div class="container">
                                    <div class="row bg-card py-2 align-items-center">
                                        <div class="col-md-7">
                                            <img src="../assets/imgs/hotel_room.jpg" class="img-fluid" alt="Quarto de Hotel">
                                        </div>

                                        <div class="col-md-5">
                                            <div class="info-room">
                                                <h6 class="text-center lead">Informações Quarto</h6>
                                                <p class="px-3 text-justify">
                                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Commodi aut esse?
                                                </p>
                                                <p class="border-top my-1 text-center">
                                                    <a href="" class="info-link">Acessar</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endfor ?>

                    </section>
                </div>
            </article>

            <nav>
                <ul class="pagination justify-content-center">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Anterior">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">Anterior</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item active"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Próximo">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Próximo</span>
                        </a>
                    </li>
                </ul>
            </nav>
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