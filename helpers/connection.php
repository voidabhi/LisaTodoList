
<?php
    function dbConnect(){
        try{
            $mysql = "mysql:host=127.7.34.130;dbname=lisatodolist";
            $username = 'adminc9AFVDJ';
            $password = 'L87Mum1A__qf';
            $conn = new pdo($mysql, $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;

        }   catch(PDOException $e){
            echo 'ERROR', $e->getMessage();
        }
    }
	
	
?>

