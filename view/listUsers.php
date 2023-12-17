
<?php

require_once('../controller/useController.php')

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <title>Listagem de usuarios</title>
  <style>
    
    body {
        margin: 0;
        padding: 0;
    }

    .container {
        height: 100vh;
        width: 100vw;
        display: flex;
        align-items: center;
        justify-content: center;
      
        
    }

    .table-container {
      height: 90%;
      width: 80%;
    }
  </style>
</head>
<body>
<div class="container">
    
    <div class="table-container ">
      
    
      <table class="table table-responsive-sm table-dark  table-borderless">
        <thead >
          <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Telefone</th>
          </tr>
        </thead>
        <tbody>

        <?php
            $controller = new userController();
            foreach($controller->listAllController() as $data):
        ?>

        
          <tr>
            <td><?= $data['id']   ?></td>
            <td><?= $data['nome']   ?></td>
            <td><?= $data['email']   ?></td>
            <td><?= $data['telefone']   ?></td>
            <td>
                <a class="btn btn-warning" id="btn-edit"   href="editUsers.php?editid=<?php echo $data['id'];
                ?>">
                Editar 
                </a>
                <a   class="btn btn-danger" id="btn-excluir"  href="/controller/useController.php?remoid=<?php echo $data['id']; ?>">
                Excluir
                </a>
            </td>
          </tr>

          <?php endforeach; ?>
        </tbody>
      </table>
      <div  class="container-fluid d-flex justify-content-center align-items-center ">
  
        <a type="button" class="btn btn-outline-success mt-5 mr-lg-3" href="/index.html">Voltar ao inicio</a>
        <a type="button" class="btn btn-outline-dark mt-5 ml-lg-3" href="userCreate.php ">Adicionar usuario </a>
      </div>


    </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>
