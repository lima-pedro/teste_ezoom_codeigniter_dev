<div class="container">
  <?php foreach($cursos as $curso) { ?>
    <div class="card">

      <div class="card-header">
        <?= $curso['titulo'] ?>
      </div>
      
      <div class="card-body">
        <img src="<?= base_url()?>public/uploads/imgs_principais/<?= $curso['img_principal']?>">
        <p><?= $curso['descricao'] ?></p>
      </div>

      <div class="card-footer">
        <a
          class="btn btn-success"
          href="<?= base_url()?>detalhe_curso/show/<?= $curso['id'] ?>">Detalhes do curso</a>
      </div>

    </div>
  <?php } ?>
</div>
