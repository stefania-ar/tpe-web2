<?php

require_once 'ModelPeliculas.php';
require_once 'ViewPeliculas.php';
require_once './_View/ViewUser.php';

Class ControllerPeliculas{

    private $model;
    private $view;
    private $viewUser;

    function __construct(){
        $this->model= new ModelPeliculas();
        $this->view= new ViewPeliculas();
        $this->viewUser= new ViewUser();
    }

    function home (){
        $peliculas=$this->model->selectAllGenres();
        $this->view->showHome($peliculas);
    }

    private function checkLogin(){
        session_start();

        if(!isset($_SESSION['TYPE'])){
            $this->viewUser->render_login();
                die();
        }else if ( (isset($_SESSION['TYPE'])) && ($_SESSION['TYPE']!=1) ) {
                $this->viewUser->render_login();
                die();
            
        }
        
    }

    function insert(){
        $this->checkLogin();

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
        $this->checkLogin();

        $genre= $_POST['generoCrear'];
        $this->model->insertGenre($genre);
        $this->view->homeLocation();
    }

    function deleteMovie($params=null){
        $this->checkLogin();

        $id= $params [':ID'];
        $this->model->delete($id);
        header("Location: ".BASE_URL."showAll");
    }

    function showForm($params=null){
        $id= $params [':ID'];
        $generos=$this->model->selectAllGenres();
        $peliculas=$this->model->returnMovieByID($id);
        $this->view->showForm($id, $generos, $peliculas);
        
    }

    function editMovie($params=null){
        $this->checkLogin();

        $id= $params [':ID'];
        $this->model->edit($_POST['title'],$_POST['anio'],$_POST['pais'],$_POST['director_a'],$_POST['calif'],$_POST['genero'],$id);
        header("Location: ".BASE_URL."showAll");
    }

    function deleteGenre(){
        
    }
}




