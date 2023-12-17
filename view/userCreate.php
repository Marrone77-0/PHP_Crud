

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Registro de usuarios</title>
</head>
<body>

    <div class="container px-5 my-5">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="card border-0 rounded-3 shadow-lg">
              <div class="card-body p-4">
                <div class="text-center">
                  <div class="h1 fw-light mb-5">Registre um usuario</div>
                  
                </div>
      
            
                <form action="../controller/useController.php"  method="POST">
      
              
                  <div class="form-floating mb-3">
                    <input class="form-control" id="input-nome" name="name" type="text" placeholder="Nome" autocomplete="off" required/>
                    <label for="input-nome">Nome</label>
                   
                  </div>
      

                  <div class="form-floating mb-3">
                    <input type="email" class="form-control" placeholder="E-mail" id="inputEmail" required name="email" autocomplete="off">
                    <label for="input-email" class="form-label">Email</label>
                    
                  
                    
                </div>
          
                  <div class="form-floating mb-3">
                    <input  class="form-control"  id="inputTelefone" name="telefone" type="text" placeholder="Telefone" autocomplete="off" required />
                    <label for="input-telefone">Telefone</label>
                    

                  </div>
        
                  <div class="d-grid">
                    <button class="btn btn-primary btn-lg " name="btn-add" id="submitButton" type="submit">Registrar</button>
                  </div>
                </form>
                
      
              </div>
            </div>
          </div>
        </div>
      </div>
      
      

</body>

</html>