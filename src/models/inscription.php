<?php

namespace Daw;

    class inscription{
        public $sql;
        
        public function __construct($sql){
            $this->sql = $sql;
        }


        public function inscript($name, $surename, $address, $datanaix, $id){
            $sql = "INSERT INTO inscript (ID, name, surname, address, datanaix) VALUES (:id, :name, :surename, :address, :datanaix);";
          
            try {
                $stmt = $this->sql->prepare($sql);
                $stmt->execute([
                    ':name' => $name,
                    ':surename' => $surename,
                    ':address' => $address,
                    ':datanaix' => $datanaix,
                    ':id' => $id
                ]);
                
               
            } catch (PDOException $e) {
                echo "Registration error: " . $e->getMessage();
            } 
        }


        public function getInscript($id){
            $sql = "select * from inscript where id = :id;";
            $stmt = $this->sql->prepare($sql);
            $stmt ->execute([
                ':id'=> $id
            ]);

            $result = $stmt->fetch(\PDO::FETCH_ASSOC);

          
            return $result;
        }


        public function getAll(){
            $stm = $this->sql->prepare('SELECT * from inscript;');
            $stm->execute();
            $tasks = array();
            while ($result = $stm->fetch(\PDO::FETCH_ASSOC)) {
                $tasks[] = $result;
            }
            return $tasks;
        }

       

    }
