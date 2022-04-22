<?php
class Database{
    
    // CHANGE THE DB INFO ACCORDING TO YOUR DATABASE
    private $db_host = 'sost2.blackburn.ac.uk';
    private $db_name = '20293693Project';
    private $db_username = '20293693Project';
    private $db_password = 'SA2020'; 
    
    public function dbConnection(){
        
        try{
            $conn = new PDO('mysql:host='.$this->db_host.'; port=3306; dbname='.$this->db_name,$this->db_username,$this->db_password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        }
        catch(PDOException $e){
            echo "Connection error ".$e->getMessage(); 
            exit;
        }
          
    }
}