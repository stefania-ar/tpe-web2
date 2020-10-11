<?php

require_once('./libs/smarty/Smarty.class.php');

class ViewUser{

    private $title;

    function __construct(){
        $this->title= "Ingrese para seguir navegando";
    }

    function homeLocation(){
        header("Location: ".BASE_URL."home");
    }

    function render_login($mensaje= ""){
        $smarty = new Smarty();

        $smarty->assign('title_header', $this->title);
        $smarty->assign('mensaje', $mensaje);
        $smarty->assign('m', "Tenga en cuenta que si está intentando acceder a permisos especiales sin ser administrador se le redirigirá al home automáticamente");

        $smarty->display('./templates/login.tpl');
    }

    function loginLocation(){
        header("Location: ".BASE_URL."login");
    }



}