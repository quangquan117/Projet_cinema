<?php
    class User{
        private $id;
        private $name;
        private $email;
        private $password;
        private $ville;
        private $pays;

        function __construct($id, $name, $email, $password, $ville, $pays){
            $this->id = $id;
            $this->name = $name;
            $this->email = $email;
            $this->password = $password;
            $this->ville = $ville;
            $this->pays = $pays;
        }
        public function getId(){
            return $this->id;
        }
        public function setId($id){
            $this->id = $id;
        }
        public function getName(){
            return $this->name;
        }
        public function setName($name){
            $this->name = $name;
        }
        public function getEmail(){
            return $this->email;
        }
        public function setEmail($email){
            $this->email = $email;
        }
        public function getPassword(){
            return $this->password;
        }
        public function setPassword($password){
            $this->password = $password;
        }
        public function getVille(){
            return $this->ville;
        }
        public function setVille($ville){
            $this->ville = $ville;
        }
        public function getPays(){
            return $this->pays;
        }
        public function setPays($pays){
            $this->pays = $pays;
        }
    }