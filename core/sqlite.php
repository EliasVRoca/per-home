<?php
class Sqlite
{
    private $db_file = __DIR__.'/../core/databases.db';
    private $conn;

    public function __construct()
    {
       $this->connect();
    }

    // Obtener la conexión a la base de datos SQLite
    protected function connect()
    {
        $this->conn = null;

        try {
            $this->conn = new PDO('sqlite:' . $this->db_file);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'Error de conexión: ' . $e->getMessage();
        }

        return $this->conn;
    }

    // Método para obtener datos
    protected function getData($query, $params = [])
    {
        try {
            $stmt = $this->conn->prepare($query);
            $stmt->execute($params);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo 'Error de consulta: ' . $e->getMessage();
        }
    }

    // Método para insertar datos
    protected function insertData($query, $params = [])
    {
        try {
            $stmt = $this->conn->prepare($query);
            $stmt->execute($params);
            return $this->conn->lastInsertId();
        } catch (PDOException $e) {
            echo 'Error de inserción: ' . $e->getMessage();
        }
    }

    // Método para actualizar datos
    protected function updateData($query, $params = [])
    {
        try {
            $stmt = $this->conn->prepare($query);
            return $stmt->execute($params);
        } catch (PDOException $e) {
            echo 'Error de actualización: ' . $e->getMessage();
        }
    }

    // Método para eliminar datos
    protected function deleteData($query, $params = [])
    {
        try {
            $stmt = $this->conn->prepare($query);
            return $stmt->execute($params);
        } catch (PDOException $e) {
            echo 'Error de eliminación: ' . $e->getMessage();
        }
    }
}
