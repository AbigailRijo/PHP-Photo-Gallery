<<?php
$mensaje = "";
if ($_POST) {
  # code...
  $sql = "select * from usuarios where correo = ? and clave = ?";

  $CI =& get_instance();
  $correo = $_POST['correo'];
  $clave =  md5($_POST['clave']);
  $rs = $CI->db->query($sql, array($correo, $clave));

  $rs = $rs->result();
  if (count($rs)>0) {
    # code...
    $_SESSION['gale_user'] = $rs[0];
    redirect('admin');
  }else {
    # code...
    $mensaje = "Usuario o clave no valido";
  }
}


plantilla::inicio();

 ?>

<div class="row">
  <div class="col col-sm-4 col-sm-offset-4">
    <form method="post" action="">
      <h3 class="text-center">Ingresa al sistema</h3>
      <div class="form-group input-group">
        <label class="input-group-addon">E-mail:</label>
        <input type="text" name="correo" class="form-control"></input>
      </div>
      <div class="form-group input-group">
        <label class="input-group-addon">Contraseña:</label>
        <input type="password" name="clave" class="form-control"></input>
      </div>
      <div class="text-center">
        <button class="btn btn-danger">Ingresar</button>
      </div>
      <div style="color:red">
        <?php echo $mensaje; ?>
      </div>
    </form>
  </div>
</div>
