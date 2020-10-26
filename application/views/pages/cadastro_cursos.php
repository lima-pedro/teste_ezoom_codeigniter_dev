<div class="container">
  <form class="form" action="<?= base_url()?>cadastro_cursos/create" method="POST" enctype="multipart/form-data">
    <div class="form-group">
      <label>Título do curso</label>
      <input
        class="form-control"
        name="title"
        type="text"
        placeholder="Título do curso"
      >
    </div>

    <div class="form-group">
      <label>Descrição do curso</label>
      <textarea
        class="form-control"
        name="description"
        type="text"
        placeholder="Descrição do curso"
      ></textarea>
    </div>

    <p>Escolha uma foto principal para o curso: </p>
    <div class="input-group mb-3">
      <div class="custom-file">
        <input type="file" name="main_image" accept="image/*"> 
      </div>
    </div>

    <p>Escolha uma as imagens para galeria: </p>
    <div class="input-group mb-3">
      <div class="custom-file">
        <input type="file" name="galery_images[]" multiple="multiple" accept="image/*"> 
      </div>
    </div>

    <button class="btn btn-success btn-block" type="submit">Cadastrar curso</button>
  </form>
</div>