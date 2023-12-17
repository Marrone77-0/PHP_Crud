<?php



require_once ('../config/DatabaseConfig.php');

class  operationDb extends connectionDb {
    
    

  
    

    public function  addUserdb($nome,$email,$telefone){

        $query = $this->connection->prepare("INSERT INTO pessoas(nome,email,telefone)
                                          VALUES(:nome,:email,:telefone)");        
		$query->bindValue(":nome", $nome, PDO::PARAM_STR);
        $query->bindValue(":email", $email, PDO::PARAM_STR);
		$query->bindValue(":telefone", $telefone, PDO::PARAM_STR);

        $query->execute();
        
                                  
    }


    public function listAllDb(){
        $query = $this->connection->query("SELECT * FROM pessoas");
        
        $dados = $query->fetchAll();

        return $dados;
    }

    public function editViewDb($idUser){
        $query = $this->connection->query("SELECT * FROM pessoas WHERE id=$idUser");
        $dados = $query->fetchAll();
        if($dados != null){
            return $dados;
        } else {
            return print_r("Id não existe");
        }

    }

    public function editUserDb($idUser,$nome,$email,$telefone){
        $query = $this->connection->prepare('UPDATE pessoas SET nome= :nome, email = :email, telefone = :telefone WHERE id= :id');
        $query->bindValue(':id',$idUser, PDO::PARAM_INT);
        $query->bindValue(':nome',$nome,PDO::PARAM_STR);
        $query->bindValue(':email',$email, PDO::PARAM_STR);
        $query->bindValue(":telefone", $telefone, PDO::PARAM_STR);

        $query->execute();
        


    }

    public function deleteUserDb($idUser){
        
        $query = $this->connection->prepare("DELETE FROM pessoas WHERE id=:id");
        $query->bindValue(':id',$idUser);
        $query->execute();
        
    }
  }
  









    