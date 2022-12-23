<?php 

class Controller{

    public function __construct()
    {
        $this->views = new Views();
        $this->cargarModel();
    }

    public function cargarModel()
    {
        $model = get_class($this)."Model";
        $rutaModel = "Models/".$model.".php";
        if(file_exists($rutaModel)){
            require_once $rutaModel;
            $this->model = new $model();
        }
    }

}

?>