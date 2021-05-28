<!DOCTYPE html>
<html lang="pt-br">
<head>
   <title>Breveler - Homepage</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <!-- Personal CSS -->
    <!-- <link rel="stylesheet" href="assets/css/style.css"> -->
    <link rel="stylesheet" href="assets/css/index_style.css">
    <style>
        nav a.h2, nav ul li a {
            color: #121f40cc;
            text-decoration: none;
        }
        .box {
            background-color: white;
            color: black;
        }
    </style>
</head>
<body>

    <nav class="fixed-top navbar navbar-expand-sm navbar-light bg-transparent shadow">
        <!-- Logo -->
        <a href="index.php" class="h2">Breveler</a>
        <!-- Logo -->

        <!-- Botão Menu -->
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbar">
            <i class="navbar-toggler-icon"></i>
        </button>
        <!-- Fim Botão -->
        
        <div id="navbar" class="collapse navbar-collapse"><!-- Configurando o colapso de blocos -->
            <!-- Navegação -->
            <ul class="navbar-nav ml-auto">

                <li class="nav-item">
                    <a class="nav-link lead" href="#home">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link lead" href="#services">Serviços</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link lead" href="#reviews">Depoimentos</a>
                </li>
            </ul>
            <!-- Fim Navegação -->
        </div>
    </nav>

    <main>
        <section id="home" class="d-flex">
            <div class="container align-self-center">
                <div class="row">
                    <h2 class="display-4 text-center">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </h2>
                </div>
            </div>    
        </section>

        <section id="services" class="py-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <img src="./assets/imgs/deluxe_room.jpg"
                            alt="Imagem de Serviço de Quarto"
                                class="img-fluid"/>
                    </div>

                    <div class="col-md-6 border-left">
                        <div class="container">
                            <div class="row">
                                <div class="col">

                                    <h3 class="text-center">Nossa História</h3>
                                    <h4>Subtítulo</h4>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto rem velit consequuntur praesentium mollitia dicta corrupti vitae, necessitatibus dolor, voluptatem nemo eaque repellendus? Reprehenderit nulla ab voluptates, quibusdam impedit doloribus.
                                    </p>
                                    <h4>Subtítulo</h4>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto rem velit consequuntur praesentium mollitia dicta corrupti vitae, necessitatibus dolor, voluptatem nemo eaque repellendus? Reprehenderit nulla ab voluptates, quibusdam impedit doloribus.
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section id="reviews" class="d-flex flex-column justify-content-center">
            
            <div class="container">
                <div class="row justify-content-center">
                    <h2 class="py-3 display-3">Depoimentos</h2>
                </div>
            </div>

            <div class="container lead bg-custom rounded">
                <section class="row my-4">
                    <div class="col-md-4">
                        <div class="container review">
                            <div class="row text-center">
                                <div class="col-md">
                                    <h5>Nome Pessoa 1</h5>
                                    <hr>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni, nisi? Distinctio velit dolorum.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="container review">
                            <div class="row text-center">
                                <div class="col-md">
                                    <h5>Nome Pessoa 2</h5>
                                    <hr>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni, nisi? Distinctio velit dolorum.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="container review">
                            <div class="row text-center">
                                <div class="col-md">
                                    <h5>Nome Pessoa 3</h5>
                                    <hr>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni, nisi? Distinctio velit dolorum.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>                        
                </section>
                
                <section class="row my-4">
                    <div class="col-md-4">
                        <div class="container review">
                            <div class="row text-center">
                                <div class="col-md">
                                    <h5>Nome Pessoa 4</h5>
                                    <hr>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni, nisi? Distinctio velit dolorum.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="container review">
                            <div class="row text-center">
                                <div class="col-md">
                                    <h5>Nome Pessoa 5</h5>
                                    <hr>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni, nisi? Distinctio velit dolorum.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="container review">
                            <div class="row text-center">
                                <div class="col-md">
                                    <h5>Nome Pessoa 6</h5>
                                    <hr>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni, nisi? Distinctio velit dolorum.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>                        
                </section>
            </div>

            <!-- Faça sua reserva! -->
            <div class="align-self-center my-5 w-75 border"></div>

            <div class="container">
                <div class="row justify-content-center mb-5">
                    <div class="bg-custom border-success rounded px-5 py-2">
                        <a href="" class="text-success display-4">Fazer Reserva</a>
                    </div>
                </div>
            </div>
            <!-- Faça sua reserva! -->

        </section>
    </main>

    <footer>
        <div class="container">
            <div class="row pt-5 pb-2">
                <div class="col-md-3">
                    <a href="index.php" class="display-4">Breveler</a>
                </div>
                <div class="col-md-3">
                        <h5>Parceiros</h5>
                        <ul class="list-unstyled pl-1">
                            <li>
                                <a href="">Parceiro</a>
                            </li>
                            <li>
                                <a href="">Parceiro</a>
                            </li>
                            <li>
                                <a href="">Parceiro</a>
                            </li>
                            <li>
                                <a href="">Parceiro</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-md-3">
                        <h5>Links Úteis</h5>
                        <ul class="list-unstyled pl-1">
                            <li>
                                <a href="">Link útil</a>
                            </li>
                            <li>
                                <a href="">Link útil</a>
                            </li>
                            <li>
                                <a href="">Link útil</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-md-3">
                        <h5>E-mails para contato</h5>
                        <ul class="list-unstyled pl-1">
                            <li>
                                <a href="">email@contato.com</a>
                            </li>
                            <li>
                                <a href="">email@contato.com</a>
                            </li>
                            <li>
                                <a href="">email@contato.com</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</body>
</html>