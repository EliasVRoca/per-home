<?php
class UsuariosModel extends Database
{
    function __construct()
    {
        $this->connect();
    }
    public function obtenerTodosUsuarios()
    {
        return $this->getData("SELECT * FROM tbl_usuarios WHERE 1");
    }
    public function obtenerUsuarioPorEmail($email){
        return $this->getData("SELECT id, correo, clave FROM tbl_usuarios WHERE correo = ? AND estado = 1", [$email]);
    }
}
