<?php
class UsuariosModel extends Query
{
    
    /* public function __construct()
    {
        parent::__construct();
    } */

    public function getUsuario(array $user)
    {
        $sql = "SELECT * FROM tbl_usuarios WHERE nick_usu = ? AND pass_usu = ? AND est_usu = 1";
        return $this->select($sql,$user);
    }

    public function getUsuarios()
    {
        $sql = "SELECT u.*, r.id_rol, r.nom_rol FROM tbl_usuarios u 
        INNER JOIN tbl_rol r 
        WHERE u.id_rol_usu = r.id_rol AND est_rol = 1";
        return $this->selectAll($sql);
    }

    public function getRoles()
    {
        $sql = "SELECT * FROM tbl_rol WHERE est_rol = 1";
        return $this->selectAll($sql);
    }

    public function register(array $user)
    {
        $checkUser = "SELECT * FROM tbl_usuarios WHERE nick_usu = '$user[2]'";
        //Verifico si existe un usuario con el nick que estoy intentando ingresar
        if (!$this->select($checkUser)){
            $sql = "INSERT INTO tbl_usuarios(nom_usu,ape_usu,nick_usu,ema_usu,pass_usu,id_rol_usu) 
            VALUES(?,?,?,?,?,?)";
            return $this->save($sql,$user)? 'Ok' : false;
        }
        return 'exist';
        
    }
    
}
