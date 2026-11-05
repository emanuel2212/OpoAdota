<?php
$pagina = 'inicio';
$titulo = 'OPO Adota | Adotar, ajudar e reencontrar animais';
include __DIR__ . '/includes/header.php';
?>


  <main>
  <section class="hero">
    <h1>Um novo lar começa aqui</h1>
    <p>A plataforma que junta adoção, doações e animais perdidos em Portugal — tudo num só lugar.</p>
    <div class="hero-botoes">
      <a href="adotar.php" class="btn-principal">Quero Adotar</a>
      <a href="perdidos.php#reportar" class="btn-secundario">Reportar Animal Perdido</a>
    </div>
  </section>

    <section>
      <div class="section-head">
        <h2>Destaques para Adoção</h2>
      </div>

      <div class="animais-grid">
        <div class="card cao">
          <div class="foto">
            <img src="img/perdidos/perdido1.jpg" alt="Bolota, um cão de 2 anos disponível para adoção no Porto">
          </div>
          <div class="info">
            <span class="tag">Cão</span>
            <h3>Bolota</h3>
            <p class="meta">2 anos · Porto</p>
            <a href="animal.php?id=bolota" class="btn-card">Ver mais →</a>
          </div>
        </div>
        
        <div class="card outro">
          <div class="foto">
            <img src="img/perdidos/perdido1.jpg" alt="Bolota, um cão de 2 anos disponível para adoção no Porto">
          </div>
          <div class="info">
            <span class="tag">Coelho</span>
            <h3>Nino</h3>
            <p class="meta">1 ano · Braga</p>
            <a href="animal.php?id=nino" class="btn-card">Ver mais →</a>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="section-head">
        <h2>Últimos Animais Perdidos</h2>
      </div>

      <div class="perdidos-grid">
        <div class="card">
          <div class="foto">
            <img src="img/perdidos/perdido2.avif" alt="Nino, um coelho de 1 ano disponível para adoção em Braga">
          </div>
          <div class="info">
            <span class="tag urgente">Perdido</span>
            <h3>Toto</h3>
            <p class="meta">Visto em Vila Nova de Gaia · há 2 dias</p>
            <a href="perdidos.php" class="btn-card">Ver detalhes →</a>
          </div>
        </div>

        <div class="card">
          <div class="foto">
            <img src="img/perdidos/perdido2.avif" alt="Nino, um coelho de 1 ano disponível para adoção em Braga">
          </div>
          <div class="info">
            <span class="tag urgente">Perdido</span>
            <h3>Luna</h3>
            <p class="meta">Visto no Porto (Bonfim) · há 5 dias</p>
            <a href="perdidos.php" class="btn-card">Ver detalhes →</a>
          </div>
        </div>
      </div>
    </section>

  </main>

  
<?php $scripts_rodape = "\n  <script src=\"js/main.js\" defer></script>\n"; ?>
<?php include __DIR__ . '/includes/footer.php'; ?>
