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
            <div class="form-group">
              <label class="col-md-4 control-label" for="sector">Codigo Usuario:</label>
              <div class="col-md-4">
                  <input type="text" name="id" class="form-control" value="<?php echo (isset($empleado)) ? $empleado['codname'] : ""?>" />
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-4">
                <label class="col-md-4 control-label" for="continuar"></label>
                <button id="continuar" name="continuar" class="btn btn-primary" type="submit" form="form_postulacion">Continuar</button>
              </div>
            </div>
          </fieldset>
        </form>
  </body>
</html>
