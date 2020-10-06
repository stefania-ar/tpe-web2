<?php

require_once 'ModelPeliculas.php';
require_once 'ViewPeliculas.php';

Class ControllerPeliculas{

    private $model;
    private $view;

    function __construct(){
        $this->model= new ModelPeliculas();
        $this->view= new ViewPeliculas();
    }

    function home (){
        $peliculas=$this->model->selectAllGenres();
        $this->view->showHome($peliculas);
    }

    function insert(){
        $genre=$_POST['genero'];
        $this->model->insert($_POST['title'],$_POST['anio'],$_POST['pais'],$_POST['director_a'],$_POST['calif'],$genre);
        $this->view->homeLocation();
    }

    function viewAllMovies(){
        $peliculas=$this->model->selectAllTable();
        $this->view->onlyMovies($peliculas);
    }
    
    function viewAllGenres(){
        $generos=$this->model->selectAllGenres();
        $this->view->viewAllGenres($generos);
    }

    function viewByGenre(){
        $genre= $_POST['genero2'];
        $peliculas=$this->model->selectByGenre($genre);
        $this->view->viewAllMovies($peliculas);
    }

    function searchByName(){
        $nombre= $_POST['nombrePelicula'];
        $peliculas=$this->model->returnName($nombre);
        $this->view->viewAllMovies($peliculas);
    }

    function searchByYear(){
        $anio= $_POST['anio'];
        $peliculas=$this->model->returnYear($anio);
        $this->view->viewAllMovies($peliculas);
    }

    function searchByCountry(){
        $pais= $_POST['pais2'];
        $peliculas=$this->model->returnCountry($pais);
        $this->view->viewAllMovies($peliculas);
    }

    function searchByDirection(){
        $direccion = $_POST['direccion'];
        $peliculas=$this->model->returnDirection($direccion);
        $this->view->viewAllMovies($peliculas);
    }

    function searchByCalification(){
        $calif = $_POST['calificacion'];
        $peliculas=$this->model->returnCalif($calif);
        $this->view->viewAllMovies($peliculas);
    }

    function addGenre(){
        $genre= $_POST['generoCrear'];
        $this->model->insertGenre($genre);
        $this->view->homeLocation();
    }

    function deleteMovie($params=null){
        $id= $params [':ID'];
        $this->model->delete($id);
        header("Location: ".BASE_URL."showAll");
        //echo '<p><a href="javascript:history.go(-1)" title="Return to previous page">&laquo; Go back</a></p>';
    }

    function editMovie($params=null){
        $id= $params [':ID'];
        $this->view->showForm($id);
        $this->model->edit($id);
    }
}




