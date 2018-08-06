<?php
session_start();
if (isset($_POST['submit'])){
    $dbServername='localhost';
    $dbUsername='Nitin';
    $dbPassword='';
    $dbName='loginsystem';

    $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
   
    $email= ($_POST['email']);
    $pwd= ($_POST['pwd']);
     
    if(empty($email)||empty($pwd)){
    header("Location: ../index.php?login=empty");
    exit();   
    
    }else{
        $sql = "SELECT * FROM users WHERE email='$email'";
        $result= mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        if($resultCheck==0){
        header("Location: ../index.php?login=email");
        exit();
        } else {
            if ($row = mysqli_fetch_assoc($result)){
                 $pd = md5($pwd);
                 $qr = "SELECT *FROM users WHERE email='$email' AND hash ='$pd'";
                $result= mysqli_query($conn, $qr);
                 if(mysqli_num_rows($result)!=1){
                    header("Location: ../index.php?login=$pd");
                    exit();
                 }else{
                      $_SESSION['u_id']=$row['uname'];
                      $_SESSION['u_first']=$row['first'];
                      $_SESSION['u_last']=  $row['last'];
                      $_SESSION['u_email']=$row['email'];
                      header("Location: http://ecellmnnit.in");
                      exit();  
                }
            }
        }
    }
} else {
    header("Location: ../index.php?login=error");
    exit();
}