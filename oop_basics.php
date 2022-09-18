<?php
    # Classes
    class User{
        private $email;
        private $name;
        private $password;

        public function _construct($email, $name, $password){
            $this->email = $email;
            $this->name = $name;
            $this->password = $password;
        }

        public function login(){
            echo "User logged in successfully!";
            echo 'Name: ' . $this->name;
            echo 'Email: ' . $this->email;
            echo 'Password: ' . $this->password;
        }
    }

    $userOne = new User("snishant306@gmail.com", "Nishant", "test123");
    $userOne->login();
?>