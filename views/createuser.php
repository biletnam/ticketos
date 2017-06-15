<?php
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
            <input type="hidden" name="id" class="form-control" value="<?php echo (isset($user)) ? $user['id'] : ""?>" />
            <div class="form-group">
              <label class="col-md-4 control-label" for="codname">User</label>
              <div class="col-md-4">
                  <input type="text" name="codname" class="form-control" value="<?php echo (isset($user)) ? $user['codname'] : ""?>" />
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-4 control-label" for="passwd">Password</label>
              <div class="col-md-4">
                  <input type="password" name="passwd" class="form-control" value="<?php echo (isset($user)) ? $user['passwd'] : ""?>" />
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-4 control-label" for="email">Email:</label>
              <div class="col-md-4">
                  <input type="text" name="email" class="form-control" value="<?php echo (isset($user)) ? $user['email'] : ""?>" />
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-4 control-label" for="type">Type</label>
              <div class="col-md-4">
                <select id="reto" name="type" class="form-control">
                  <option value="admin">Administrator</option>
                  <option value="soporte">Support</option>
                  <option value="cliente">Customer</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-4 control-label" for="state">State</label>
              <div class="col-md-4">
                <select id="reto" name="state" class="form-control">
                  <option value="A">Open</option>
                  <option value="C">Closed</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-4">
                <label class="col-md-4 control-label" for="continuar"></label>
                <input type="button" class="btn btn-primary" value="Back" onclick="location='?c=users&v=inicio'" />
                <input type="button" class="btn btn-primary"  value="Save" onclick="valida(this.form)" />
                <input type="hidden" class="btn btn-primary"  name="c" value="users" />
                <input type="hidden" class="btn btn-primary"  name="v" value="<?php echo (isset($user)) ? "guardar" : "inserta"?>" />
              </div>
            </div>
          </fieldset>
        </form>
  </body>
</html>
