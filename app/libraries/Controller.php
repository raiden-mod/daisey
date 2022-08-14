<?php
// load the module and the view 
class Controller {
    public function model($model){
        // this will require module file
        require_once '../app/models/' . $model . '.php';
        return new $model();
    }
    // this will load the views and check for the views files 
    public function view($view , $data = []){
        if(file_exists('../app/views/'. $view .'.php')){
            require_once '../app/views/'. $view .'.php';
        }else{
            die("view  does not exist");
        }
    }
}