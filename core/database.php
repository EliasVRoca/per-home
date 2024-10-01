<?php
class Database
{
    private $host = DB_HOST;
    private $db_name = DB_NAME_DB;
    private $username = DB_USER;
    private $password = DB_PASSWORD;
    private $conn;

    // Obtener la conexión a la base de datos
    protected function connect()
    {
        $this->conn = null;

        try {
            $this->conn = new PDO(
                'mysql:host=' . $this->host . ';dbname=' . $this->db_name,
                $this->username,
                $this->password
            );
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'Error de conexión: ' . $e->getMessage();
        }

        return $this->conn;
    }

    // Ejemplo de método para obtener datos
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

    // Ejemplo de método para insertar datos
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

    // Ejemplo de método para actualizar datos
    protected function updateData($query, $params = [])
    {
        try {
            $stmt = $this->conn->prepare($query);
            return $stmt->execute($params);
        } catch (PDOException $e) {
            echo 'Error de actualización: ' . $e->getMessage();
        }
    }

    // Ejemplo de método para eliminar datos
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
