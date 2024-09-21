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
}
