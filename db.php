<?php
include_once 'util.php';
class DBConnector{
    protected  $pdo;
    function __construct()
    {
        $dsn="mysql:host=".Util::$DB_SERVER.";dbname=".Util::$DB_NAME."";
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_EMULATE_PREPARES => false,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ];
        try{
            $this->pdo = new PDO($dsn, Util::$DB_USER, Util::$DB_PASS, $options);
        } catch (PDOException $ex){
            echo $ex->getMessage();
        }
    }
    public function connectToDB(){
        return $this->pdo;
    }
    public function closeDB(){
        $this->pdo = null;
    }
}
