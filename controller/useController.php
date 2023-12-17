<?php 


require_once ('../model/OperationDb.php');

 


class userController {
    private $modelDb;

    function __construct()
    {
        $this->modelDb = new operationDb();
       
    }

    function addUserController(){
        if(isset($_POST['btn-add'])){
            $nome = $_POST['name'];
            $email = $_POST['email'];
            $telefone = $_POST['telefone'];
            
            $this->modelDb->addUserdb($nome,$email,$telefone);
            header("location: /index.html");
        }

    }
    function listAllController(){
        $listUser = $this->modelDb->listAllDb();

        return $listUser;
    }

    function editViewController(){
        if(isset($_GET['editid'])){
            
            $editid = $_GET['editid'];
            $dataUserEdit = $this->modelDb->editViewDb($editid);
            return $dataUserEdit;
        }
      

    }

    function editUserController(){
        

        if(isset($_POST['btn-edit']) && isset($_GET['id'])){
            $id = $_GET['id'];
            $nome = $_POST['name'];
            $email = $_POST['email'];
            $telefone = $_POST['telefone'];
           
            $this->modelDb->editUserDb($id,$nome,$email,$telefone);
            header("location: /view/listUsers.php");
        }

    }

    function removeUserController(){
        
        if(isset($_GET['remoid'])){
            $idRemUser = $_GET['remoid'];
            
            $removeUser = $this->modelDb->deleteUserDb($idRemUser);
            header("location: /view/listUsers.php");
        }  
        
    }

}



$controllerObj = new userController();

$controllerObj->addUserController();
$controllerObj->editViewController();
$controllerObj->editUserController();
$controllerObj->removeUserController();












