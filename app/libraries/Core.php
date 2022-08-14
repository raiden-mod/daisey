<?php 
// core app class
class Core {
    protected $currentController = 'Pages';
    protected $currentMethod = 'index';
    protected $params = [];

    public function __construct(){
        // print_r($this->getUrl());
        $url = $this->getUrl();
        // we wil look into our controllers and ucword will capitalize our first letters.
        if(isset($url[0])){
            if(file_exists('../app/controllers/'. ucwords($url[0]) .'.php')){
                // this will set a new controller
                $this->currentController = ucwords($url[0]);
                unset($url[0]);
            }
        }
        // require the controller
        require_once '../app/controllers/'  . $this->currentController . '.php';
        // now we extanciate
        $this->currentController = new $this->currentController;

        // this will check for the second parameters
        if(isset($url[1])){
            if(method_exists($this->currentController, $url[1])){
                $this->currentMethod = $url[1];
                unset($url[1]);
            }
        }
        // this will get the parameters
        $this->params = $url ? array_values($url) : [];

        // call a callback parameters with arrays of param
        call_user_func_array([$this->currentController, $this->currentMethod], $this->params);

    }
    public function getUrl(){
        if(isset($_GET['url'])){
            // this will get the url and trim out the slashes 
            $url = rtrim($_GET['url'], '/');
            // this will allow you to filter variable as a string slash number
            $url = filter_var($url, FILTER_SANITIZE_URL);
            // this will explode the url and break it into an array
            $url = explode('/', $url);
            return $url;
        }
    }
}