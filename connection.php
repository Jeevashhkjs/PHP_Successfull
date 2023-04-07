<?php
class DbConnection
{
    public $db;

    public function __construct(){
        try{
            $this -> db = new PDO(
                'mysql:host=localhost;dbname=JasmineJeeva',
                'root',
                'jeeva143'
            );
        }
        catch(PDOException $e)
        {
            echo "Connection error".$e -> getMessage();
        }
    }

    public function query($executeQuery)
    {
        $statement = $this->db->prepare($executeQuery);
        $statement->execute($statement);
 
        return $statement;
    }

}
?>