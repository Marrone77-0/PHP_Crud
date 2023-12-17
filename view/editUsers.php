

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Edição de usuarios</title>
</head>
<body>

    <div class="container px-5 my-5">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="card border-0 rounded-3 shadow-lg">
              <div class="card-body p-4">
                <div class="text-center">
                  <div class="h1 fw-light mb-5">Edite um usuario</div>
                  
                </div>
      
            
                

                <?php

                    
                    require_once("../controller/useController.php");
                  
                    foreach($controllerObj->editViewController() as $data):
                ?>

                <form action="../controller/useController.php?id=<?= $data['id']  ?>"  method="POST">
              
                    
                  <div class="form-floating mb-3">
                    <input class="form-control" id="name" name="name" type="text" placeholder="Nome" autocomplete="off"  value="<?= $data['nome'] ?>" />
                    <label for="input-name">Nome</label>
                   
                  </div>
      

                  <div class="form-floating mb-3">
                    <input type="email" class="form-control" placeholder="E-mail" id="inputEmail" autocomplete="off" name="email" value="<?= $data['email'] ?>">
                    <label for="input-email" class="form-label">Email</label>
                  
                    
                </div>
          
                  <div class="form-floating mb-3">
                    <input  class="form-control"  id="inputTelefone" autocomplete="off" name="telefone" type="text" placeholder="Telefone" value="<?= $data['telefone'] ?>" />
                    <label for="input-telefone">Telefone</label>
                  </div>

                <?php endforeach; ?>
        
                  <div class="d-grid">
                    <button class="btn btn-primary btn-lg " name="btn-edit" id="submitButton" type="submit">Editar</button>
                  </div>
                </form>
                
      
              </div>
            </div>
          </div>
        </div>
      </div>
</body>
</html>