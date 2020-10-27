<div class="container">
  <div class="card">
    <div class="card-header">
      <h3><?= $curso['titulo'] ?></h3>
    </div>
    <div class="conteudo-detalhe card-body">
      <div class="descricao">
        <p><?= $curso['descricao'] ?></p>
      </div>
      <div class="galeria-imagens">
        <?php foreach ($img_galeria_nome as $img) { ?>
          <img src="<?= base_url()?>public/uploads/imgs_galeria/<?= $img ?>">
        <?php } ?>
      </div>
    </div>
    <div class="card-footer">
      <a href="#" class="btn btn-warning">
        Editar
      </a>
      <a href="#" class="btn btn-danger">
        Deletar
      </a>
    </div>
  </div>
</div>