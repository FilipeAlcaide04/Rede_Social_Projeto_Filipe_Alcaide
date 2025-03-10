<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    // Redirect to login page if not logged in
    header("Location: login_register.php");
    exit;
}

// Check if the user is the admin
if (isset($_SESSION['username']) && $_SESSION['username'] === 'admin') {
    // Redirect admin to the admin page
    header("Location: admin_dashboard.php");
    exit;
}

// Handle logout functionality
if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: login_register.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buzzly</title>
    <!-- Bootstrap CSS -->
    <link href="bootstrap-4.5.3-dist/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style_nav.css">
    <link rel="stylesheet" href="css/post_area_style.css">
    <link rel="stylesheet" href="css/create_post.css">
</head>

<body class="font_jet size-12">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">Buzzly</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse ml-3" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="index.php">Feed ✨<span class="sr-only"></span></a>
                </li>
                <li class="nav-item ml-3">
                    <a class="nav-link" href="trending.php">Trending 🔥</a>
                </li>
                <li class="nav-item ml-3">
                    <a class="nav-link" href="post.php">Post 💡</a>
                </li>
                <li class="nav-item ml-3">
                    <a class="nav-link" href="chat.php">Chat 🌎</a>
                </li>
                <li class="nav-item ml-3 active">
                    <a class="nav-link" href="about.php">About 🔎</a>
                </li>
            </ul>
            <!-- Logout Button -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="?logout=true">Logout 🚪</a>
                </li>
            </ul>
        </div>
    </nav>



    <div class="container mt-3 quadradjinho">

    <div class="container mt-1">
        <div class="row">
            <div class="col-md-4 text-center">
                <img src="images/foto_pesada.jpeg" alt="My Photo" class="rounded-circle img-fluid" style="width: 250px; height: 250px;">
            </div>
            <div class="col-md-8 d-flex flex-column justify-content-center">
                <h1 class="font-weight-bold">Olá, sou o Filipe Alcaide</h1>
                <p>
                    Estudo no ISTEC e frequento o segundo ano da licenciatura em engenharia informática,
                    realizei este projeto no âmbito da unidade curricular de Tecnologias da Internet II, lecionada
                    pelo professor José Neves.
                    Neste projeto utilizei tecnologias como Php,java_script e mySQL.
                </p>
                <p>Quando não estou a trabalhar gosto de jogar Futebol e ver Séries.</p>
                
            </div>
            <img src="images/istec.png" alt="My Photo" class="img-fluid mt-2 border" style="width: auto; height: auto;">

            <figure class="text-star ">
  <blockquote class="blockquote">
    <p>Quero ver aqui uma foto de fato e gravata.</p>
  </blockquote>
  <figcaption class="blockquote-footer">
    Someone famous in <cite title="istec">Istec</cite>
  </figcaption>
</figure>

        </div>
    </div>
        <div id="feed" class="row"></div>
        <footer class="mt-4 mr-4">
            ® Buzzly Designed in Lisbon 2024
        </footer>
    </div>

    <script src="java_script/btn_reaction.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="bootstrap-4.5.3-dist/js/bootstrap.js"></script>
    <script src="bootstrap-4.5.3-dist/js/bootstrap.bundle.js"></script>
</body>
</html>