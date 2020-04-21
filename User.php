<?php
include 'Crud.php';

class User implements Crud{

    private $user_id;
    private $first_name;
    private $last_name;
    private $city;
    private $db;
    private $conn;




    function __construct($first_name,$last_name,$city){

      $this->first_name = $first_name;
      $this->last_name = $last_name;
      $this->city = $city;

      }

      public function   getUserid(){
        return $this->$user_id;
      }
      public function readUnique(){}

      public function readAll(){
        $db = new DBConnector();
        $conn = $db->getConn();
        $sql  = "select * from user";
        $result = mysqli_query($conn,'select * from user');
        if (mysqli_num_rows($result) > 0) {

          while($row=mysqli_fetch_assoc($result)) {
              echo "Id: " . $row["id"]. "  First Name: " . $row["first_name"]. " Last name :" . $row["last_name"]."  City ". $row['user_city']. "<br>";
          }


      }
    }
      public function search(){}
      public function removeAll(){}
      public function update(){}
      public function removeOne(){}

      public function save()
      {
        $db = new DBConnector();
        $conn = $db->getConn();
        $fn = $this->first_name;
        $ln = $this->last_name;
        $city = $this->city;

        $res = mysqli_query($conn,"insert into user(first_name,last_name,user_city) VALUES('$fn','$ln','$city')");
        return $res;
      }






}

 ?>
