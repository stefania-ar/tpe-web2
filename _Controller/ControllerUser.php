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

            if(isset($user) && $userDB){
               
                foreach ($userDB as $contraseña) {
                    if(password_verify($pass, $contraseña->password)) {
                        $this->view->homeLocation();
                    }else $this->view->render_login("Contraseña incorrecta");
                }
                        
            }else $this->view->render_login("Usuario incorrecto");
            
        }
    }
    
}




