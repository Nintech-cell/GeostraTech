<?php

require_once '../databs/database.php';

    class User{

        private $db;
        
        public function __construct()
        {
            $this->db = new Database;
        }


        /*Trouver un visiteur par son email ou son pseudo ou identifiant*/

        public function findUserByEmailOrUsername($email, $username){
            $this->db->query('SELECT * FROM visitors WHERE usersUid = :username OR usersEmail = :email');
            $this->db->bind(':username', $username);
            $this->db->bind(':email', $email);

            $row = $this->db->single();

            if($this->db->rowCount() > 0){
                return $row;
            }else{
                return false;
            }
        }

        public function register($data){
            $this->db->query('INSERT INTO visitors (usersName, usersEmail, usersUid, usersPwd)
            VALUES (:name, :email, :Uid, :password)');
                //liaison des valeurs de login.php avec celle de MySQL
            $this->db->bind(':name', $data['usersName']);
            $this->db->bind(':email', $data['usersEmail']);
            $this->db->bind(':Uid', $data['usersUid']);
            $this->db->bind(':password', $data['usersPwd']);

            if($this->db->execute()){
                return true;
            }else{
                return false;
            }
        }

        public function login($nameOrEmail, $password){
            $row = $this->findUserByEmailOrUsername($nameOrEmail, $nameOrEmail);

            if($row == false) return false;

            $hashedPassword = $row->usersPwd;
            if(password_verify($password, $hashedPassword)){
                return $row;
            }else{
                return false;
            }
        }

        public function resetPassword($newPwdHash, $tokenEmail){
            $this->db->query('UPDATE visitors SET usersPwd =:pwd WHERE usersEmail=:email');
            $this->db->bind('pwd', $newPwdHash);
            $this->db->bind('email', $tokenEmail);

            if($this->db->execute()){
                return true;
            }else{
                return false;
            }
        }
    }

    

?>
