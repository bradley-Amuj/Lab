<?php
include_once('DBConnector.php');
include_once('User.php');

$conn = new DBConnector;


if(isset($_POST['btn_save'])){

  $firstname = $_POST['first_name'];
  $lastname = $_POST['last_name'];
  $city_name = $_POST['city_name'];

  $user = new User($firstname,$lastname,$city_name);
  $res = $user->save();
  $user->readAll();


  $conn->close_database();

  if($res){
    echo "Save operation successful";
  }else{
    echo "An error occurred";
  }

}






 ?>


<html>
  <head>
    <title> Form</title>
  </head>
  <body>
    <form method = 'post' action="<?$_SERVER['PHP_SELF'] ?>">
      <table align = 'center'>
        <tr>
          <td><input type="text" name="first_name" required placeholder="First Name"/></td>
        </tr>
        <tr>
          <td><input type="text" name="last_name" required placeholder="Last Name"/></td>
        </tr>
        <tr>
          <td><input type="text" name="city_name" required placeholder="City"/></td>
        </tr>
        <tr>
          <td><button type="submit" name="btn_save"><strong>SAVE</strong></button></td>
        </tr>






      </table>




    </form>




  </body>



</html>
