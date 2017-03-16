<?php

    plantilla::inicio();

 ?>

<fieldset>
  <legend>
    Agregar Inmagen
  </legend>
  <form method="post" action="">
    <div class="col col-sm-5">
    <div class="form-group input-group">
      <label class="input-group-addon">Nombre:</label>
      <input type="text" name="nombre" class="form-control" />
    </div>
    <div class="form-group input-group">
      <label class="input-group-addon">Comentario:</label>
    <textarea class="form-control" name="comentario"></textarea>
    </div>
    <div class="form-group input-group">
      <label class="input-group-addon">Imagen:</label>
      <input type="file" name="foto" class="form-control" />
    </div>
    </div>
  </form>
</fieldset>

<fieldset>
  <legend>
    Imagenes Agredadas
  </legend>
  <table class="table">
    <thead>
      <tr>
        <th>img</th>
        <th>cod</th>
        <th>nombre</th>
        <th>comentario</th>
      </tr>
    </thead>
    <tbody>
    </tbody>
  </table>
</fieldset>
