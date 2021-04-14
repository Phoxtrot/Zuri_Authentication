<?php
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $errorname = $erroremail= $errorpassword= $errorcheckpassword= "";
    $username = $email = $password= "" ;
    //validate username
    if(strlen(trim($_POST["username"]))<6){
        $errorname = "Username should be atleast 6 characters ";
    }
    else{
        $username = trim($_POST["username"]);
    }
    //validate email
    $testemail = $_POST["email"];
    if (!filter_var($testemail, FILTER_VALIDATE_EMAIL)) {
    $erroremail = "Invalid email format";
    }
    else {
        $email = trim($_POST["email"]);
    }
    //validate password    
    if (strlen(trim($_POST["password"])) < 6 ) {
    $errorpassword = "Password should be at least 6 characters";
    }
    else {
    $password = trim($_POST["password"]);
    }
     //validate password check   
     if (trim($_POST["password"]) != trim($_POST["check_password"]) ) {
        $errorpassword = "Password does not match";
        $errorcheckpassword = "Password does not match";
        }
        else {
        $Checkpassword = trim($_POST["check_password"]);
        }
    //store data in file
if (empty($errorname) && empty($erroremail) && empty($errorpassword) && empty($errorcheckpassword)){
    // $fs = fopen("mydatabase.txt","a");
    // fwrite($fs, $username . "," . $email .  "," . $password . ", \n");
    // fclose($fs);
    $userdata =[
        'name'=>$username,
        'email'=>$email,
        'password'=>$password
    ];
    file_put_contents('database/'.$userdata['name'].'.json', json_encode($userdata));
    // Redirect user to welcome page
    $_SESSION["loggedin"] = true;
    $_SESSION["name"] = $username;  
    header("location: welcome.php");
    
}    
    
}


//include views
 define('CSSPATH', 'views/'); //define css path
 $cssItem = 'style.css'; //css item to display
include "views/index.view.php";
?>