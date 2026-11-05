<?php
$pagina = 'sobre';
$titulo = 'OPO Adota | Adotar, ajudar e reencontrar animais';
include __DIR__ . '/includes/header.php';
?>


  <section class="hero" style="padding: 3rem 1.5rem;">
    <h1>A Nossa Missão</h1>
    <p>Ligar quem precisa de ajuda a quem quer ajudar — de forma simples, transparente e local.</p>
  </section>

  <main>
    <section>
      <div class="section-head">
        <h2>Quem Somos</h2>
      </div>
      <p style="max-width: 720px;">
        O OPO Adota nasceu como projeto académico do CTeSP TPSI, no ISPGAYA,
        com o objetivo de resolver um problema real: a falta de um espaço
        único onde adoção, doações e animais perdidos possam ser geridos de
        forma transparente e acessível a qualquer pessoa na região do Porto.
      </p>
    </section>

    <section>
      <div class="section-head">
        <h2>Perguntas Frequentes</h2>
      </div>

      <div class="faq-lista">
        <details class="faq-item">
          <summary>Como funciona o processo de adoção?</summary>
          <p>Escolhes um animal na página "Adotar", preenches o formulário de
          contacto e a associação responsável entra em contacto contigo para
          agendar uma visita.</p>
        </details>

        <details class="faq-item">
          <summary>As doações são seguras?</summary>
          <p>Sim. Podes escolher doar de forma anónima e o teu método de
          pagamento fica guardado apenas na tua área de cliente.</p>
        </details>

        <details class="faq-item">
          <summary>Posso denunciar um anúncio suspeito?</summary>
          <p>Sim, cada anúncio tem um contacto direto com a equipa OPO Adota
          para reportar qualquer irregularidade.</p>
        </details>

        <details class="faq-item">
          <summary>Como posso tornar-me parceiro (associação/abrigo)?</summary>
          <p>Envia-nos um email através da página "Como Ajudar" com os
          detalhes da tua associação e entraremos em contacto.</p>
        </details>
      </div>
    </section>

    <section>
      <div class="section-head">
        <h2>Histórias de Sucesso</h2>
      </div>

      <div class="testemunhos-grid">
        <div class="testemunho-card">
          <p class="testemunho-texto">"Adotámos a Luna através do OPO Adota e foi o processo mais simples que já passámos."</p>
          <p class="testemunho-autor">— Marta C., Porto</p>
        </div>
        <div class="testemunho-card">
          <p class="testemunho-texto">"Reencontrámos o nosso cão em menos de 48 horas graças aos anúncios de perdidos."</p>
          <p class="testemunho-autor">— Hugo R., Gaia</p>
        </div>
        <div class="testemunho-card">
          <p class="testemunho-texto">"As doações ajudaram-nos a cobrir os cuidados veterinários de 3 animais este mês."</p>
          <p class="testemunho-autor">— Abrigo Patas do Porto</p>
        </div>
      </div>
    </section>
  </main>

  
<?php include __DIR__ . '/includes/footer.php'; ?>
