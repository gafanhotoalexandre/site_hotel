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

    <title>Editar Reserva - Breveler</title>
</head>
<body>


    <div id="sidebar" class="fixed-top">
        <nav>
            <div id="title" class="text-center m-3 p-2">
                <a href="home.php" class="navbar-brand">BREVELER</a>
            </div>

            <ul class="list-unstyled">
                <li>
                    <a href="records.php">Voltar</a>
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
                                <p class="lead text-center">Editar Reserva/Hospedagem</p>
                            </div>
                        </div>

                    </section>

                    <section class="row">
                        <div class="col">
                            
                            <div class="card bg-card">
                                <div class="card-header bg-transparent lead">Reserva</div>
                                <div class="card-body">
                                    <form action="">

                                        <div class="form-group row">
                                            <label for="guest" class="col-sm-3 col-form-label">Hóspede</label>
                                            <div class="col-sm-6">
                                                <select name="guest" id="guest" class="form-control">
                                                    <option value="1"><?= (rand(2, 9) * time()) ?> - Nome Hóspede</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="suite" class="col-sm-3 col-form-label">Suíte</label>
                                            <div class="col-sm-6">
                                                <select name="suite" id="suite" class="form-control">
                                                    <option value="1"> <?= (rand(2, 9) * time()) ?> </option>
                                                </select>
                                            </div>
                                        </div>  

                                        <div class="form-group row">
                                            <label for="num_guests" class="col-sm-3 col-form-label">Quantidade de Hóspedes</label>
                                            <div class="col-sm-4">
                                                <input type="number" name="num_guests" id="num_guests"
                                                    class="form-control" min="1" max="8" value="2">
                                            </div>
                                        </div>          

                                        <div class="form-group row">
                                            <label for="entry_date" class="col-sm-3 col-form-label">Entrada Prevista</label>
                                            <div class="col-sm-4">
                                                <input type="date" name="entry_date" id="entry_date"
                                                    class="form-control" value="<?= date('Y-m-d') ?>" placeholder="dd/mm/aaaa">
                                            </div>
                                        </div>          

                                        <div class="form-group row">
                                            <label for="expected_exit" class="col-sm-3 col-form-label">Saída Prevista</label>
                                            <div class="col-sm-4">
                                                <input type="date" name="expected_exit" id="expected_exit"
                                                    class="form-control" value="<?= date('Y-m-d', strtotime('05-06-2021')) ?>">
                                            </div>
                                        </div>          

                                        <p class="text-center">
                                            <button class="btn btn-success">Salvar</button>
                                        </p>

                                    </form>
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