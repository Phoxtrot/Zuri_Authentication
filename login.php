<?php
session_start();
if(isset($_POST["submit"])){
    $errormessage = '';
    $errorname =  $errorpassword=  "";
    $username =  $password= "" ;
    //validate username
    if(strlen(trim($_POST["username"]))<6){
        $errorname = "Username should be atleast 6 characters ";
    }
    else{
        $username = trim($_POST["username"]);
    } 
  //validate password    
    if (strlen(trim($_POST["password"])) < 6 ) {
    $errorpassword = "Password should be at least 6 characters";
    }
    else {
    $password = trim($_POST["password"]);
    }
    
      if(file_exists('database/'.$username.'.json')){
        $userdata = json_decode(file_get_contents('database/'.$username.'.json'));
        if ($password == $userdata->password) {
          $_SESSION['name'] = $userdata->name;
          $_SESSION["loggedin"] = true;
          header("location: welcome.php");
        } else {
          $errormessage = 'Sorry password is incorrect';
        }
        
      }
      else{
        $errormessage = 'Sorry this user does not exist. Please register ';;
      } 
      
          
  }
  

//include views
define('CSSPATH', 'views/'); //define css path
$cssItem = 'style.css'; //css item to display
include "views/login.view.php";
?>