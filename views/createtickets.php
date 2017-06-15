<?php
session_start();

$_SESSION['id_user_creator'] = 1;

$id_user_creator = $_SESSION['id_user_creator'];

?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css">
    <link rel="stylesheet" href="//d2d3qesrx8xj6s.cloudfront.net/dist/bootsnipp.min.css?ver=7d23ff901039aef6293954d33d23c066">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    	<script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.2/html5shiv.js"></script>
    	<script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.2.0/respond.js"></script>
    <![endif]-->
    <title>TicketOS</title>
    <script>
         function valida(forma){
              forma.submit();
         }
    </script>
  </head>
  <body>
    <p>TicketOS</p>
        <form name="forma" class="form-horizontal" method="post">
          <fieldset>
            <input type="hidden" name="id" value="<?php echo (isset($ticket)) ? $ticket['id'] : ""?>" />
            <input type="hidden" name="id_user_creator" value="<?php echo (isset($id_user_creator)) ? $ticket['id_user_creator'] : ""?>" />

            <div class="form-group">
              <label class="col-md-4 control-label" for="name">Title</label>
              <div class="col-md-4">
                  <input type="text" name="name" class="form-control" value="<?php echo (isset($ticket)) ? $ticket['name'] : ""?>" />
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-4 control-label" for="description">Description</label>
              <div class="col-md-4">
                  <textarea class="form-control" id="description" name="description"><?php echo (isset($ticket)) ? $ticket['description'] : ""?></textarea>
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-4 control-label" for="id_user_resolv">Perfil</label>
              <div class="col-md-4">
                <select id="reto" name="id_user_resolv" class="form-control">
                  <option value="admin">Administrador</option>
                  <option value="soporte">Soporte</option>
                  <option value="cliente">Cliente</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-4 control-label" for="state">Estado</label>
              <div class="col-md-4">
                <select id="reto" name="state" class="form-control">
                  <option value="A">Abierto</option>
                  <option value="C">Cerrado</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-4">
                <label class="col-md-4 control-label" for="continuar"></label>
                <input type="button" class="btn btn-primary" value="Volver" onclick="location='?v=inicio'" />
                <input type="button" class="btn btn-primary"  value="Guardar" onclick="valida(this.form)" />
                <input type="hidden" class="btn btn-primary"  name="v" value="<?php echo (isset($ticket)) ? "guardar" : "inserta"?>" />
              </div>
            </div>
          </fieldset>
        </form>
  </body>
</html>
