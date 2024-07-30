<?php
class Database 
{
    public $connection;
    public function __construct()
    { 
        $host = 'bvnb3shbn5ecplhduwam-mysql.services.clever-cloud.com';
        $db = 'bvnb3shbn5ecplhduwam';
        $charset = 'utf8mb4';
        $dsn = "mysql:host=$host; dbname=$db; charset=$charset";
        $username = 'uzfaevabijyp9ghr';
        $password = 'mD2Cy4nCgLui1IDboGno';

        $this->connection = new PDO($dsn, $username, $password);
    }
    
        public function query($query)
        {
         
            
            
            
            try {
                
                $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo "Conexão bem-sucedida!<br>";
            
              
                $statement = $this->connection->prepare($query);
            
                
                $statement->execute();
            
                
                return $statement->fetchAll(PDO::FETCH_ASSOC);
            
               
               
            
            } catch (PDOException $e) {
                
                echo "Conexão falhou: " . $e->getMessage();
            }
            
            
        }
}
