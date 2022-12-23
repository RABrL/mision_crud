<?php 

class Home extends Controller{

    public function index(){
        $this->views->getView($this,"index");
    }

    public function login(){
        $this->views->getView($this,"login");
    }
    
    public function register(){
        $this->views->getView($this,"register");
    }
}

?>