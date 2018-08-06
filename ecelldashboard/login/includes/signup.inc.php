<?php
session_start();
if (isset($_POST['submit'])){
    $first = ($_POST['first']);
    $last = ($_POST['last']);
    $email = ($_POST['email']);
    $uname = ($_POST['uname']);
    $pwd = ($_POST['pwd']);
    
    $dbServername='localhost';
    $dbUsername='Nitin';
    $dbPassword='';
    $dbName='loginsystem';

    $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
    
    //Error Handlers
    if(empty($first)|| empty($last)|| empty($email)|| empty($uname)||empty($pwd)){
    header("Location: ../signup.php?signup=empty");
    exit();
    
    }
    else {
    //checking validity of inputs
        if(!preg_match("/^[a-z A-Z]*$/", $first )||!preg_match("/^[a-z A-Z]*$/", $last))
        {
            header("Location: ../signup.php?signup=invalid");
    exit();
        }
         else
         {
             //checking email
             if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                header("Location: ../signup.php?signup=invalid_email");
                exit();
            }
             else{  
                $sql = " SELECT * FORM users WHERE email=$email";
                 $result= mysqli_query($conn,$sql);
                 $resultCheck = mysqli_num_rows($result);
                 if(FALSE){
                    header("Location: ../signup.php?signup=userTaken");
                    exit();   
                 }
                 else{
                     $hashedpwd= md5($pwd);
                     $sql="INSERT INTO users(uname,first,last,email,hash)
                     VALUES('$uname','$first','$last','$email','$hashedpwd')";
                     mysqli_query($conn,$sql);
                     header("Location: ../signup.php?signup=success");
                     exit();
                 }
             }
         }
 }
    
}
else{
    header("Location: ../signup.php");
    exit();
}