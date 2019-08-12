<?php
 
 define('DB_USER', 'root');
 define('DB_PWD', '');
 define('DB_HOST', 'localhost');
 define('DB', 'piedradelcanada');
 define('DB_TYPE', 'mysql');

class PDO_Connect
{
    var $_dsn;
    var $user;
	var $passwd;
	var $pdo;

 
    function __construct()
    {
        $this->_dsn = DB_TYPE.":host=".DB_HOST.";dbname=".DB;
		$this->user =  DB_USER;
		$this->passwd =  DB_PWD;
    }
 
    function PDO_Connect()
    {
        $this->__construct();
    }
 
    function connect()
    {
        try 
        {
        
            $options = array(
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
                PDO::ATTR_EMULATE_PREPARES  => false
            );            
            
            $this->pdo = new PDO($this->_dsn, $this->user, $this->passwd, $options);	
            				
            return $this->pdo;
            
		} catch(PDOException $e) {

			echo 'ERROR: ' . $e->getMessage();			
			return null;
		}	


		
    }

    function getAll($_query, $_params_array = null){

        try {
                if ($_params_array == null)              
                    $result = $this->pdo->query($_query)->fetchAll();   
                
                else  {

                    $stmt = $this->pdo->prepare($_query);

                    $stmt->execute($_params_array);

                    $result = $stmt->fetchAll();
                }
                
            return  $result;

            } catch(PDOException $e) {

                echo 'ERROR: ' . $e->getMessage() . " " . $_query;			
                return null;
            }	

    }



    function getRow($_query, $_params_array = null){

        try {
            if ($_params_array == null)              
                $result = $this->pdo->query($_query)->fetch();   
            
            else  {

                $stmt = $this->pdo->prepare($_query);

                $stmt->execute($_params_array);

                $result = $stmt->fetch();
            }
            
        return  $result;

        } catch(PDOException $e) {

            echo 'ERROR: ' . $e->getMessage() . " " . $_query;	
            return null;
        }	

    }


    function getOne($_query, $_params_array = null){

        try {
            if ($_params_array == null)              
                $result = $this->pdo->query($_query)->fetchColumn();   
            
            else  {

                $stmt = $this->pdo->prepare($_query);

                $stmt->execute($_params_array);

                $result = $stmt->fetchColumn();
            }
            
            return  $result;

        } catch(PDOException $e) {

            echo 'ERROR: ' . $e->getMessage() . " " . $_query;	
            return null;
        }	

    }


    function query($_query, $_params_array = null){


        try {
            if ($_params_array == null)   

                $result = $this->pdo->query($_query);   
            
            else  {

                $stmt = $this->pdo->prepare($_query);

                $result = $stmt->execute($_params_array);

            }
            
            return  $result;

        } catch(PDOException $e) {

            echo 'ERROR: ' . $e->getMessage() . " " . $_query;	
            return null;
        }	

    }


 

}

?>