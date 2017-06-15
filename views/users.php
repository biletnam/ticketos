<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
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
  </head>
  <body>
    <p>Users</p>
        <table border="1">
             <thead>
                 <tr>
                     <th>Id</th>
                     <th>Cod Name</th>
                     <th>Email</th>
                     <th>Create</th>
                     <th>Action</th>
                 </tr>
             </thead>
             <tbody><?php
                 foreach($user as $value) {?>
                 <tr>
                     <td><?php echo $value['id']?></td>
                     <td><?php echo $value['codname']?></td>
                     <td><?php echo $value['email']?></td>
                     <td><?php echo $value['date_create']?></td>
                     <td> <a href="#" onclick="location='?c=users&v=editar&id=<?php echo $value['id']?>'">Edit</a> | <a href="#" onclick="location='?c=users&v=borrar&id=<?php echo $value['id']?>'">Delete</a> </td>
                 </tr>
                 <?php } ?>
             </tbody>
        </table>
        <input type="button" value="Init" class="btn btn-primary" onclick="location='?c=init&v=index'" />
        <input type="button" value="New User" class="btn btn-primary" onclick="location='?c=users&v=createuser'" />
  </body>
</html>
