<div class="home-container container">
  <?php foreach($cursos as $curso) { ?>
    <div id="home-card" class="card">

      <div id="home-card-header" class="card-header">
        <?= $curso['titulo'] ?>
      </div>
      
      <div id="home-card-body" class="card-body">
        <img src="<?= base_url()?>public/uploads/imgs_principais/<?= $curso['img_principal']?>">
        <p><?= $curso['descricao'] ?></p>
      </div>

      <div id="home-card-footer" class="card-footer">
        <a
          class="btn btn-success"
          href="<?= base_url()?>detalhe_curso/show/<?= $curso['id'] ?>">Detalhes do curso</a>
      </div>

    </div>
  <?php } ?>
</div>
