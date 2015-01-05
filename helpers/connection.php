
<?php
    // update $host and $dbname in mysql string before using this function
    function dbConnect(){
        try{
            $mysql = "mysql:host=$host;dbname=$dbname";
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

