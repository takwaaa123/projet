<?php
include ('connexion.php');
include('functions.php')
$query = "select * from cours where cours_id='3' limit 1";
$result = mysqli_query($con, $query);

if($result){
    if($result && mysqli_num_rows($result) > 0){
     $data = mysqli_fetch_assoc($result);
     if ($data['nb'] <20){
         $data['nb']=$data['nb']+1;
         $sql = "insert into reservations(code_id1,user_id1) values('1','$_SESSION['user_id']');
         $result = mysqli_query($con, $sql);
     }
     header("location: ./acceuilUser.php");
     die();
    }
}