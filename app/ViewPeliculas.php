<?php
require_once('libs/smarty/Smarty.class.php');

class ViewPeliculas{


    private $title;

    function __construct(){
        $this->title= "PELIS";
    }

    function homeLocation(){
        header("Location: ".BASE_URL."home");
    }

    function viewAllMovies($peliculas){
        $smarty = new Smarty();

        $smarty->assign('title_header', $this->title);
        $smarty->assign('peliculas', $peliculas);
        $smarty->assign('titulo', "Título");
        $smarty->assign('Anio', "Año");
        $smarty->assign('Pais', "País");
        $smarty->assign('Genero', "Género");
        $smarty->assign('Director_a', "Director/a");
        $smarty->assign('Calificacion', "Calificación");
        $smarty->assign('eliminar', "Eliminar");
        $smarty->assign('editar', "Editar");

        $smarty->display('templates/viewAllMovies.tpl');
    }

    function onlyMovies($peliculas){
        $smarty = new Smarty();

        $smarty->assign('title_header', $this->title);
        $smarty->assign('peliculas', $peliculas);
        $smarty->assign('titulo', "Título");
        $smarty->assign('Anio', "Año");
        $smarty->assign('Pais', "País");
        $smarty->assign('Genero', "Género");
        $smarty->assign('Director_a', "Director/a");
        $smarty->assign('Calificacion', "Calificación");
        $smarty->assign('eliminar', "Eliminar");
        $smarty->assign('editar', "Editar");

        $smarty->display('templates/onlyMovies.tpl');
    }
 
    function viewAllGenres($generos){
        $smarty = new Smarty();
        $smarty->assign('title_header', $this->title);
        $smarty->assign('titulo', "LISTA DE GENEROS");
        $smarty->assign('generos', $generos);
        $smarty->display('templates/viewAllGenres.tpl');
    }

    function showHome($peliculas){
        $smarty = new Smarty();
        $smarty->assign('title_header', $this->title);
        $smarty->assign('peliculas', $peliculas);
        $smarty->assign('titulo', "Filtrar/buscar peliculas por");
        $smarty->assign('titulo2', "Agregue un género");
        $smarty->assign('anio', "Año");
        $smarty->assign('pais', "País");
        $smarty->assign('direccion', "Director/a");
        $smarty->assign('Enviar', "Enviar");
        $smarty->assign('calif', "Calificacion");
        $smarty->assign('genero', "Género");

        $smarty->display('templates/home.tpl');
    }

    function showForm($id, $generos, $peliculas){
        $smarty = new Smarty();

        $smarty->assign('title_header', $this->title);
        $smarty->assign('generos', $generos);
        $smarty->assign('id', $id);
        $smarty->assign('peliculas', $peliculas);
        $smarty->assign('titulo', "Filtrar/buscar peliculas por");
        $smarty->assign('titulo2', "Agregue un género");
        $smarty->assign('anio', "Año");
        $smarty->assign('pais', "País");
        $smarty->assign('direccion', "Director/a");
        $smarty->assign('Enviar', "Enviar");
        $smarty->assign('calif', "Calificacion");
        $smarty->assign('genero', "Género");
        $smarty->assign('BASE_URL', "'BASE_URL'");

        $smarty->display('templates/form_edit.tpl');
    }

}
