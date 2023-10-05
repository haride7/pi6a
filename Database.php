<?php
namespace app\core;

class Database
{
    protected $DB_NAME;
    protected $DB_USER;
    protected $DB_PASSWORD;
    protected $DB_HOST;
    protected $DB_PORT;
    
    /**
     * @var \PDO
     */
    public $db;

    public function __construct()
    {
        // When this class is instantiated, the variable $db is assigned the connection to the db
        $this->DB_NAME = 'cadastro3';
        $this->DB_USER = 'root';
        $this->DB_PASSWORD = '';
        $this->DB_HOST = 'localhost';
        $this->DB_PORT = 3306;
        
        $DSN = "mysql:host={$this->DB_HOST};port={$this->DB_PORT};dbname={$this->DB_NAME}";
        try{
            $this->db = new \PDO($DSN,$this->DB_USER,$this->DB_PASSWORD);
            $this->db->setAttribute(\PDO::ATTR_ERRMODE,\PDO::ERRMODE_EXCEPTION);
        }catch(\PDOException $ex){
            die("<br>Error connecting to database: " . $ex->getMessage() . " File: " . __FILE__ . " Line: " . __LINE__ );
        }
    }

}