<?php

class User{
      public function __construct(){
          echo "Constructor Called";
      }

      public function register(){
          echo "User Registered";
      }

      public function login($username, $password){
          eco $username . "is now logged in";
      }

      public function __destruct(){
          echo "Destructor Called";
      }
}

$User = new User;

$User->register();

/* Temporary Array TEST */

$dataArray = array(
    'name' => 'Jan',
    'surname' => 'Kowalski',
    'city' => 'Warszawa',
);

$addDataArray = array(
    'wzrost' => '188',
    'rasa' => 'bialy',
);

$clientData = $dataArray + $addDataArray;

?>
