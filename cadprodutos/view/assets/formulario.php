<link rel="stylesheet" href="css/estilo.css">

<div class="container">
  <h1>Cadastro de Produtos</h1>

  <?php if (!empty($erro)) : ?>
    <p class="erro"><?= $erro ?></p>
  <?php endif; ?>

  <form method="POST" action="index.php">
    <label for="nome">Nome do Produto:</label>
    <input type="text" name="nome" required />

    <label for="preco">Preço (R$):</label>
    <input type="number" name="preco" step="0.01" required />

    <label for="descricao">Descrição:</label>
    <textarea name="descricao" required></textarea>

    <button type="submit">Cadastrar</button>
  </form>
</div>
