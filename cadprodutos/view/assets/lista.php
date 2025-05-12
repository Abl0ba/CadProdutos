<div class="container">
  <h2>Produtos Cadastrados</h2>

  <?php if (empty($produtos)) : ?>
    <p>Nenhum produto cadastrado.</p>
  <?php else : ?>
    <?php foreach ($produtos as $p) : ?>
      <div class="produto-item">
        <strong><?= htmlspecialchars($p->nome) ?></strong><br>
        Preço: R$ <?= number_format($p->preco, 2, ',', '.') ?><br>
        <em><?= htmlspecialchars($p->descricao) ?></em>
      </div>
    <?php endforeach; ?>
  <?php endif; ?>
</div>
