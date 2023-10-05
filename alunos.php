<?php

namespace app\models;

use app\core\Database;

class Users
{
  
    /**
     * Este método busca todos os usuários armazenados na base de dados
     * 
     * @return   array
     */
    public static function findAll()
    {
        $sql = "SELECT * FROM imdaz";
        
        try{
			$database = new Database();
            $stmt = $database->db->prepare($sql);
            $stmt->execute();

            $aRet = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        }catch(\PDOException $ex){
			echo("teste");
            $msg = $ex->getMessage();
            die('DB Message' . $msg);
        }
        
        return $aRet;
    }
    
    /**
     * Este método busca um usuário armazenados na base de dados com um determinado ID
     * 
     * @param    int     $id   Identificador único do usuário
     * @return   array
     */
    public static function findById(int $id)
    {
        $sql = "SELECT * FROM users WHERE id = :ID LIMIT 1";
        
        try{
            $database = new Database();
            $stmt = $database->db->prepare($sql);
            $stmt->bindValue(':ID', $id);
            $stmt->execute();

            $aRet = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        }catch(\PDOException $ex){
            $msg = $ex->getMessage();
            die('DB Message' . $msg);
        }
        
        return $aRet;
    }

}