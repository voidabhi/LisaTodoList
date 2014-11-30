
<?php
    function dbConnect(){
        try{
            $username = 'adminc9AFVDJ';
            $password = 'L87Mum1A__qf';
            $conn = new pdo("mysql:host=127.7.34.130;dbname=lisadb;", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;

        }   catch(PDOException $e){
            echo 'ERROR', $e->getMessage();
        }
    }
	
	
?>

