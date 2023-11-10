<?php 
namespace App\Abstract;

abstract class AbstractModel 
{
    protected \PDO $connection;

    public function __construct()
    {
        global $db;

        $this->connection = $db;
    }


    /**
     * Definition dynamique du nom de la table depuis le nom du controller qui 
     * execute une des methodes de la class ModelAbstract
     *
     * @return string
     */
    private function getTable(): string
    {
        $class = get_called_class();
        $class = explode("\\", $class);
        $class = end($class);
        $class = str_replace("Model", '', $class);
        $class = strtolower($class);

        return $class;
    }

    public function all() 
    {
        $sql = "SELECT * FROM `".$this->getTable()."`";

        $query = $this->connection->query( $sql );

        return $query->fetchAll(\PDO::FETCH_OBJ);
    }

    public function one(int $id) 
    {
        $sql = "SELECT * FROM `".$this->getTable()."` WHERE `id`=:id";

        $query = $this->connection->prepare( $sql );
        $query->bindValue(':id', $id, \PDO::PARAM_INT);
        $query->execute();
        
        return $query->fetch(\PDO::FETCH_OBJ);
    }

    public function add(array $data = []) 
    {
        $keys =  array_keys($data);
        $sql_cols = "`".implode("`, `", $keys)."`";
        $pdo_cols = ":".implode(",:", $keys);

        // Definition SQL
        $sql = "INSERT INTO `".$this->getTable()."` ($sql_cols) VALUES ($pdo_cols)";

        // Preparation de la requete
        $query = $this->connection->prepare($sql);
        foreach ($data as $key => $value)
        {
            $query->bindValue(":$key", $value);
        }
    
        // Execution de la requete
        $query->execute();

        return $this->connection->lastInsertId();
    }

    public function edit(int $id, array $data = []) 
    {
        // $sql = "UPDATE `table` SET `col1`="value1",`col2`="value2" WHERE `id`=42"
    }

    public function remove(int $id) 
    {
        $sql = "DELETE FROM `table` WHERE `id`=$id";
    }
}