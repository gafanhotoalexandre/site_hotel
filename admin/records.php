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

        .info-link {
            color: #121F40;
            transition: all .2s;
        }
        .info-link:hover {
            color: rgb(255, 255, 255);
            opacity: .6;
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

    <title>Registros - Breveler</title>
</head>
<body>


    <div id="sidebar" class="fixed-top">
        <nav>
            <div id="title" class="text-center m-3 p-2">
                <a href="home.php" class="navbar-brand">BREVELER</a>
            </div>

            <ul class="list-unstyled">
                <li>
                    <a href="hotel_guests.php">Voltar</a>
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
                <div class="container box py-3">
                    <section class="row">

                        <div class="col">
                            <div class="bg-card py-2">
                                <p class="lead text-center">Registros de Reserva/Hospedagem</p>
                            </div>
                        </div>

                    </section>

                    <section class="row">
                        <div class="col">
                            
                            <div class="card bg-card">
                                <div class="card-header bg-transparent lead">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <nav class=" navbar-light">
                                                <form class="form-inline">
                                                    <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar">
                                                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                                                </form>
                                            </nav>
                                        </div>


                                        <div class="col-sm-6">
                                            <div class="float-right">
                                                <a href="reservation.php" class="info-link">
                                                    Novo
                                                </a>
                                                <div class="dropdown float-right ml-3">
                                                    <a href="" data-toggle="dropdown" class="dropdown-toggle info-link">Exportar</a>
                                                    <div class="dropdown-menu">
                                                        <a href="" class="dropdown-item">XLSX</a>
                                                        <a href="" class="dropdown-item">CSV</a>
                                                        <a href="" class="dropdown-item">PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="card-body">

                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Código</th>
                                                    <th scope="col">Hóspede</th>
                                                    <th scope="col">Suíte</th>
                                                    <th scope="col">Entrada</th>
                                                    <th scope="col">Saída</th>
                                                    <th scope="col">Ação</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php for ($i = 1; $i <= 5; $i++): ?>
                                                    <tr>
                                                        <th><?= $i ?></th>
                                                        <td>Nome Hóspede</td>
                                                        <td><?= (rand(2, 9) * time()) ?></td>
                                                        <td>01/06/21</td>
                                                        <td>05/06/21</td>
                                                        <td>[V] [E] [D]</td>
                                                    </tr>
                                                <?php endfor ?>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </section>

                    <nav>
                        <ul class="pagination mb-1 justify-content-center">
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