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

        $smarty->display('./templates/login.tpl');
    }





}