<?php
// Variáveis esperadas (definidas em cada página antes do include):
//   $pagina  -> 'inicio' | 'adotar' | 'perdidos' | 'sobre'  (link ativo no menu)
//   $titulo  -> título da página (opcional)
$pagina = $pagina ?? '';
$titulo = $titulo ?? 'OPO Adota | Adotar, ajudar e reencontrar animais';

function ativo(string $nome, string $atual): string {
    return $nome === $atual ? ' class="ativo"' : '';
}
?>
<!DOCTYPE html>
<html lang="pt-PT">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= htmlspecialchars($titulo) ?></title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&family=Poppins:wght@600;700&display=swap" rel="stylesheet">
  <link rel="icon" type="image/png" href="img/favicon.png">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

  <header>
    <div class="navbar">
      <a href="index.php" class="logo" aria-label="OPO Adota — página inicial">
        <img src="img/logo.png" alt="OPO Adota">
      </a>
      <nav>
        <ul>
          <li><a href="index.php"<?= ativo('inicio', $pagina) ?>>Início</a></li>
          <li><a href="adotar.php"<?= ativo('adotar', $pagina) ?>>Adotar</a></li>
          <li><a href="perdidos.php"<?= ativo('perdidos', $pagina) ?>>Animais Perdidos</a></li>
          <li><a href="sobre.php"<?= ativo('sobre', $pagina) ?>>Sobre Nós</a></li>
          <li><a href="ajudar.php#doar" class="btn-ajudar">Doar</a></li>
        </ul>
      </nav>
    </div>
  </header>
