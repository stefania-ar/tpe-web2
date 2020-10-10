<?php

require_once './_Model/ModelUser.php';
require_once './_View/ViewUser.php';

Class ControllerUser{

    private $model;
    private $view;

    function __construct(){
        $this->model= new ModelUser();
        $this->view= new ViewUser();
    }

    function login (){
        $this->view->render_login();
    }

    function verifyUser(){
        $user= $_POST['user'];
        $pass= $_POST['password'];

        
        if(isset($user)){
            $userDB=$this->model->getUser($user);

            if(isset($userDB) && $userDB){

                if(password_verify($pass, $userDB->password)) {
                    session_start();
                    $_SESSION['USER']=  $userDB->username;

                    $this->view->homeLocation();
                }else $this->view->render_login("Contraseña incorrecta");

            }else $this->view->render_login("Usuario incorrecto");
            
        }
    }
    
}




