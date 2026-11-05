<?php
$pagina = 'perdidos';
$titulo = 'OPO Adota | Adotar, ajudar e reencontrar animais';
include __DIR__ . '/includes/header.php';
?>


  <main>
    <section>
      <div class="section-head">
        <h2>Animais Perdidos</h2>
      </div>

      <div class="perdidos-grid">
        <div class="card">
          <div class="foto">Foto do animal</div>
          <div class="info">
            <span class="tag urgente">Perdido</span>
            <h3>Toto</h3>
            <p class="meta">Visto em Vila Nova de Gaia · há 2 dias</p>
            <p class="meta">Contacto: 912 345 678</p>
          </div>
        </div>

        <div class="card">
          <div class="foto">Foto do animal</div>
          <div class="info">
            <span class="tag urgente">Perdido</span>
            <h3>Luna</h3>
            <p class="meta">Visto no Porto (Bonfim) · há 5 dias</p>
            <p class="meta">Contacto: 913 222 111</p>
          </div>
        </div>

        <div class="card">
          <div class="foto">Foto do animal</div>
          <div class="info">
            <span class="tag urgente">Perdido</span>
            <h3>Piu</h3>
            <p class="meta">Visto em Matosinhos · há 1 semana</p>
            <p class="meta">Contacto: 916 789 234</p>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="section-head">
        <h2>Reportar um Animal Perdido</h2>
      </div>

      <form class="form-contacto">
        <div>
          <label for="nome-animal">Nome do animal</label>
          <input type="text" id="nome-animal" placeholder="Ex: Toto">
        </div>
        <div>
          <label for="local">Última localização vista</label>
          <input type="text" id="local" placeholder="Ex: Vila Nova de Gaia">
        </div>
        <div>
          <label for="contacto">O teu contacto</label>
          <input type="text" id="contacto" placeholder="Telefone ou email">
        </div>
        <div>
          <label for="descricao">Descrição</label>
          <textarea id="descricao" rows="4" placeholder="Raça, cor, sinais particulares..."></textarea>
        </div>
        <button type="submit" class="btn-principal">Publicar Anúncio</button>
      </form>
    </section>
  </main>

  
<?php include __DIR__ . '/includes/footer.php'; ?>
