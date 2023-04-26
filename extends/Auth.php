<?php 
class Auth{  
    private $conect;
    public function __construct(){
        $conexion = "mysql:host=".DB_HOST.";dbname=".DB_NAME.";";
        try{
            $this->conect = new PDO($conexion,DB_USER,DB_PASSWORD);
            $this->conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(Exception $e){
            $this->conect = 'Error de conexion';            
            if($e->getMessage() !="SQLSTATE[HY000] [1049] Unknown database 'examenivn'"){
                echo "Error: " . $e->getMessage();
            }
        }    
    }

    public function conect(){
        return $this->conect;
    }
}
?>