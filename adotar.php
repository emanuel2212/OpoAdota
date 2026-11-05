<?php
$pagina = 'adotar';
$titulo = 'OPO Adota | Adotar, ajudar e reencontrar animais';
include __DIR__ . '/includes/header.php';
?>


  <main>
    <section>
      <div class="section-head">
        <h2>Animais Disponíveis para Adoção</h2>
      </div>

      <!-- Filtro por espécie, feito só com HTML/CSS (radio + :checked) -->
      <input type="radio" name="filtro" id="filtro-todos" checked>
      <input type="radio" name="filtro" id="filtro-caes">
      <input type="radio" name="filtro" id="filtro-gatos">
      <input type="radio" name="filtro" id="filtro-outros">

      <div class="filtros">
        <label for="filtro-todos">Todos</label>
        <label for="filtro-caes">Cães</label>
        <label for="filtro-gatos">Gatos</label>
        <label for="filtro-outros">Outros</label>
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
            <a href="animal.php" class="btn-card">Ver mais →</a>
          </div>
        </div>

        <div class="card gato">
          <div class="foto">
            <img src="img/perdidos/perdido1.jpg" alt="Bolota, um cão de 2 anos disponível para adoção no Porto">
          </div>
          <div class="info">
            <span class="tag">Gato</span>
            <h3>Mimi</h3>
            <p class="meta">8 meses · Gaia</p>
            <a href="animal.php" class="btn-card">Ver mais →</a>
          </div>
        </div>

        <div class="card cao">
          <div class="foto">
            <img src="img/perdidos/perdido1.jpg" alt="Bolota, um cão de 2 anos disponível para adoção no Porto">
          </div>
          <div class="info">
            <span class="tag">Cão</span>
            <h3>Rex</h3>
            <p class="meta">5 anos · Matosinhos</p>
            <a href="animal.php" class="btn-card">Ver mais →</a>
          </div>
        </div>

        <div class="card gato">
          <div class="foto">
            <img src="img/perdidos/perdido1.jpg" alt="Bolota, um cão de 2 anos disponível para adoção no Porto">
          </div>
          <div class="info">
            <span class="tag">Gato</span>
            <h3>Simba</h3>
            <p class="meta">3 anos · Vila do Conde</p>
            <a href="animal.php" class="btn-card">Ver mais →</a>
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
            <a href="animal.php" class="btn-card">Ver mais →</a>
          </div>
        </div>

        <div class="card cao">
          <div class="foto">
            <img src="img/perdidos/perdido1.jpg" alt="Bolota, um cão de 2 anos disponível para adoção no Porto">
          </div>
          <div class="info">
            <span class="tag">Cão</span>
            <h3>Filipa</h3>
            <p class="meta">4 anos · Vila Nova de Gaia</p>
            <a href="animal.php" class="btn-card">Ver mais →</a>
          </div>
        </div>
      </div>
    </section>
  </main>

  
<?php include __DIR__ . '/includes/footer.php'; ?>
