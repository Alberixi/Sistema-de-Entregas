<?php
require_once 'config/database.php';
require_once 'includes/header.php';

// Conteúdo da página
$content = '<div class="card mb-4">
    <div class="card-header bg-primary text-white">
        <h5>Dashboard</h5>
    </div>
    <div class="card-body">
        <p>Bem-vindo ao sistema de entregas!</p>
        <a href="clientes/listar.php" class="btn btn-primary">Clientes</a>
        <a href="entregas/listar.php" class="btn btn-primary">Entregas</a>
    </div>
</div>';

require_once 'includes/footer.php';
?>
