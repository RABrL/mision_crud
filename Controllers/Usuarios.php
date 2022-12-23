<?php
class Usuarios extends Controller
{
    public function __construct()
    {
        session_start();
        parent::__construct();
    }
    
    public function index()
    {
        $data['roles'] = $this->model->getRoles();
        $this->views->getView($this,'index',$data);
    }

    public function validar()
    {
        if(empty($_POST["username"]) || empty($_POST["password"])){
            $msg = 'Los campos estan vacios';
        }else {
            $user = array($_POST["username"],$_POST["password"]);
            $data = $this->model->getUsuario($user);
            if($data){
                $_SESSION["id_user"] = $data['id_usu'];
                $_SESSION["username"] = $data['nick_usu'];
                $_SESSION["id_rol"] = $data['id_rol_usu'];
                $msg = 'Ok';
            }else{
                $msg = 'Usuario o contraseña incorrecta';
            }
        }
        echo json_encode($msg,JSON_UNESCAPED_UNICODE);
        die();
    }

    public function listar()
    {
        $data = $this->model->getUsuarios();
        for ($i=0; $i < count($data); $i++) { 
            $data[$i]['actions'] = '<div>
            <button class="btn btn-primary" type="button">Editar</button> 
            <button class="btn btn-danger" type="button">Eliminar</button>
            </div>';
            if($data[$i]['est_usu'] == 1){
                $data[$i]['est_usu'] = '<span class="badge badge-success">Activo</span>';
            }else{
                $data[$i]['est_usu'] = '<span class="badge badge-danger">Inactivo</span>';
            }
        }
        echo json_encode($data, JSON_UNESCAPED_UNICODE);
        die();
    }

    public function register()
    {
        if(empty($_POST["firstname"]) || empty($_POST["lastname"]) || empty($_POST["nickname"]) || empty($_POST["email"]) || empty($_POST["password"]) || empty($_POST["rol"])){
            $msg = 'Todos los campos son obligatorios';
        }else if($_POST["password"] != $_POST["confirm"]){
            $msg = 'Las contraseñas no coinciden';
        }else{
            $user = array($_POST["firstname"],$_POST["lastname"],$_POST["nickname"],$_POST["email"],$_POST["password"],$_POST["rol"]);
            $data = $this->model->register($user);
            if($data=='Ok'){
                $msg = $data;
            }else if($data == 'exist'){
                $msg = 'El Nick name ya existe, intenta con otro';
            }else {
                $msg = 'Error al registrar usuario';
            }

        }
        echo json_encode($msg,JSON_UNESCAPED_UNICODE);
        die();
    }
}

?>