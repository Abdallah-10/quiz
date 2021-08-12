<?php
namespace App\classes;
use PDO;
use PDOException;

class database{

        public $servername= "localhost";
        public $dbname="typeform";
        public $username="root";
        public $password="";
        protected $conn;

        function __construct(){
            try{
                $this->conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname",$this->username,$this->password);
                //echo 'connexion reussie !';
            }
            catch(PDOException $e){
                echo "erreur" .$e->getMessage();
            }
        }

        function InserData($nom,$description,$img,$prix){
            $sql="INSERT INTO products(nom,description,cover_img,prix) 
            VALUES ('$nom','$description','$img','$prix')";
            $sth = $this->conn->prepare($sql);
            $sth->execute();
        }
        function CreatComment(){
            $sql="CREATE TABLE commentaires(
                id INT(11) AUTO_INCREMENT PRIMARY KEY ,
                nom VARCHAR(255),
                prenom VARCHAR(255),
                content TEXT,
                id_product INT(11),
                FOREIGN KEY (id_product) REFERENCES products(id)
            )";
            $this->conn->exec($sql);
        }

}
?>