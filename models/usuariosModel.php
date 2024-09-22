<?php
class UsuariosModel extends Sqlite
{
    function __construct()
    {
        $this->connect();
    }
    public function obtenerTodosUsuarios()
    {
        return $this->getData("SELECT * FROM usuarios WHERE 1");
    }
    public function obtenerUsuarioPorEmail($email){
        return $this->getData("SELECT id, email, clave FROM usuarios WHERE email = ? AND estado = 1", [$email]);
    }
}
