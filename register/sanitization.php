<?php
session_start();

 $_SESSION['error']['name']=$_SESSION['error']['phone']= $_SESSION['error']['email']=$_SESSION['error']['password']="";

if ($_SERVER['REQUEST_METHOD'] === "POST") {

    if (isset($_POST['name'],$_POST['phone'], $_POST['email'], $_POST['password'],$_POST['repass'])) {
        $name = $_POST['name'];
        $phone=$_POST['phone'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $repass=$_POST['repass'];

        if (strlen($name) > 30) {
            $_SESSION['error']['name'] = "Name cannot be greater than 30 characters";
        } elseif (empty($name)) {
            $_SESSION['error']['name'] = "Name field is required";
        }
        elseif(!preg_match("/^[a-zA-Z]+$/",$name)){
            $_SESSION['error']['name']="Invalid Name";
        }
        if(!preg_match("/^[0-9]{10}+$/",$phone)){
            $_SESSION['error']['phone']="Invalid Phone Number";

        if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
            $_SESSION['error']['email'] = "Please enter correct email ID.";
        }
        if($password!=$repass)
        {
             $_SESSION['error']['password'] = "Password mismatch.";
        }
    }
    else {
        $_SESSION['error']['global'] = "Please fill out all the required fields.";
    }

    if (! isset($_SESSION['session'])) {
        $_SESSION['success'] = true;
    }
}
}
header('Location:http://127.0.0.1:8080/register/signup.php');
?>