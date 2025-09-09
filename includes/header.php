<!DOCTYPE html>
<html lang="pt-BR" <?php echo (isset($_COOKIE['theme']) && $_COOKIE['theme'] === 'dark') ? 'data-theme="dark"' : ''; ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo defined('SITE_NAME') ? SITE_NAME : 'Sistema de Entregas'; ?></title>

    <!-- Favicon -->
    <link rel="icon" href="<?php echo defined('SITE_URL') ? SITE_URL : '/'; ?>assets/img/favicon.ico" type="image/x-icon">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
 
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo defined('SITE_URL') ? SITE_URL : '/'; ?>assets/css/style.css" rel="stylesheet">

    <!-- Script para aplicar tema antes de renderizar -->
    <script>
        (function() {
            const savedTheme = localStorage.getItem('theme') || 'light';
            document.documentElement.setAttribute('data-theme', savedTheme);
        })();
    </script>
</head>
<body class="bg-light">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Sistema de Entregas</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">Início</a></li>
                    <li class="nav-item"><a class="nav-link" href="clientes/listar.php">Clientes</a></li>
                    <li class="nav-item"><a class="nav-link" href="entregas/listar.php">Entregas</a></li>
                    <li class="nav-item"><a class="nav-link" href="ajuda.php">Ajuda</a></li>
                </ul>
                <button id="theme-toggle" class="btn btn-outline-light" title="Alternar tema">
                    <i class="fas fa-moon"></i>
                </button>
            </div>
        </div>
    </nav>

    <!-- Layout Principal -->
    <div class="container-fluid p-0">
        <div class="row">
            <main class="col-12 p-4">
                <!-- Conteúdo da página vai aqui -->
                <?php echo $content ?? ''; ?>
            </main>
        </div>
    </div>
