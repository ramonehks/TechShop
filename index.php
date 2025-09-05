<form method="post" action="inserir.php" class="p-3">
  <div class="mb-3">
    <label class="form-label">Nome da Peça</label>
    <input type="text" name="nome" class="form-control">
  </div>
  
  <div class="mb-3">
    <label class="form-label">Preço (R$)</label>
    <input type="number" step="0.01" name="preco" class="form-control">
  </div>
  
  <div class="mb-3">
    <label class="form-label">Descrição</label>
    <textarea name="descricao" class="form-control"></textarea>
  </div>
  
  <div class="mb-3">
    <label class="form-label">Categoria</label>
    <select name="id_categoria" class="form-select">
      <?php foreach($categorias as $cat): ?>
        <option value="<?= $cat['id'] ?>"><?= $cat['nome'] ?></option>
      <?php endforeach; ?>
    </select>
  </div>
  
  <div class="mb-3">
    <label class="form-label">Marca</label>
    <select name="id_marca" class="form-select">
      <?php foreach($marcas as $m): ?>
        <option value="<?= $m['id'] ?>"><?= $m['nome'] ?></option>
      <?php endforeach; ?>
    </select>
  </div>

  <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>
