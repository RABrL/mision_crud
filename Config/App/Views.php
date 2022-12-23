<?php 

class Views{

    public function getView($controller,$view,$data='')
    {
        $controller = get_class($controller);
        if($controller == 'Home'){
            $rutaView = "Views/".$view.".php";
        }else {
            $rutaView = "Views/".$controller."/".$view.".php";
        }
        require_once $rutaView;
    }

}

?>