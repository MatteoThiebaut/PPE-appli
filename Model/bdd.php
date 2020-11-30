<?php   

class BDD{
    private $dbh;

    public function __construct() {
        try{
            $this->dbh = new PDO('mysql:dbname=ppeappli;host=127.0.0.1;',"root","ROOT");
        } catch (PDOException $e) {
             print "Connexion échoué : " . $e->getMessage();
        }
            }
        }
?>