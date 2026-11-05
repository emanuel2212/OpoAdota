<?php
$pagina = '';
$titulo = 'OPO Adota | Adotar, ajudar e reencontrar animais';
include __DIR__ . '/includes/header.php';
?>


  <main>
    <section>
      <div class="animal-detalhe">
        <div class="foto-grande">Foto do Bolota</div>

        <div>
          <h1>Bolota</h1>
          <p>Cão simpático e brincalhão, à procura de uma família com espaço para correr.</p>

          <ul class="ficha">
            <li><strong>Espécie:</strong> Cão</li>
            <li><strong>Idade:</strong> 2 anos</li>
            <li><strong>Localização:</strong> Porto</li>
            <li><strong>Porte:</strong> Médio</li>
            <li><strong>Vacinado:</strong> Sim</li>
            <li><strong>Esterilizado:</strong> Sim</li>
          </ul>

          <form class="form-contacto">
            <div>
              <label for="nome">O teu nome</label>
              <input type="text" id="nome" placeholder="Nome completo">
            </div>
            <div>
              <label for="contacto">Contacto</label>
              <input type="text" id="contacto" placeholder="Telefone ou email">
            </div>
            <div>
              <label for="mensagem">Mensagem</label>
              <textarea id="mensagem" rows="4" placeholder="Fala-nos um pouco sobre a tua casa e rotina..."></textarea>
            </div>
            <button type="submit" class="btn-principal">Quero Adotar o Bolota</button>
          </form>

          <!-- Caixa de doação: mostra o valor necessário e o progresso -->
          <div class="doacao-box">
            <h3>Ajuda a cobrir os cuidados do Bolota</h3>

            <div class="doacao-valores">
              <span class="angariado" id="valor-angariado">120€ angariados</span>
              <span class="objetivo" id="valor-objetivo">de 300€</span>
            </div>

            <div class="barra-progresso">
              <div class="preenchido" id="barra-preenchida" style="width: 40%;"></div>
            </div>
            <p class="doacao-percentagem" id="texto-percentagem">40% do objetivo atingido</p>

            <div class="doacao-botoes">
              <button type="button" onclick="doar(5)">Doar 5€</button>
              <button type="button" onclick="doar(10)">Doar 10€</button>
              <button type="button" onclick="doar(25)">Doar 25€</button>
              <div class="valor-custom">
                <input type="number" id="valor-personalizado" placeholder="Outro valor (€)" min="1">
                <button type="button" onclick="doarPersonalizado()">Doar</button>
              </div>
            </div>

            <label class="checkbox-anonimo">
              <input type="checkbox" id="doacao-anonima">
              Quero doar de forma anónima (o meu nome não é mostrado)
            </label>
          </div>
        </div>
      </div>
    </section>
  </main>

  <script>
    /*
      Demonstração de front-end: simula o aumento do valor angariado
      quando alguém "doa". Não há back-end nem base de dados —
      os valores reiniciam sempre que a página é recarregada.
      Objetivo do animal (facilmente ajustável por animal/página).
    */
    const objetivo = 300;
    let angariado = 120;

    function atualizarBarra() {
      const percentagem = Math.min(100, Math.round((angariado / objetivo) * 100));
      document.getElementById('valor-angariado').textContent = angariado + '€ angariados';
      document.getElementById('barra-preenchida').style.width = percentagem + '%';
      document.getElementById('texto-percentagem').textContent = percentagem + '% do objetivo atingido';
    }

    function doar(valor) {
      angariado += valor;
      atualizarBarra();
    }

    function doarPersonalizado() {
      const input = document.getElementById('valor-personalizado');
      const valor = parseFloat(input.value);
      if (!isNaN(valor) && valor > 0) {
        doar(valor);
        input.value = '';
      }
    }
  </script>

  
<?php include __DIR__ . '/includes/footer.php'; ?>
