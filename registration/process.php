<?php
session_start();

include("connexion.php");
function check_login($con) {
  if (isset( $_SESSION['$user_id']))
  {
      $id=$_SESSION['$user_id'];
   $query ="select * from users where user_id='$id' limit 1";

$result = mysqli_query($con,$query);
if($result && mysqli_num_rows($result)>0){
    $user_data=mysqli_fetch_assoc($result);
    return $user_data;
}
}
//redirect to login

header("location : ../login/index.php");
die();
}

function random_num($length)
{
$text="";
{
    $length=5;

}
$len= rand(4,$length);
for ($i=0; $i<$len; $i++){
    $text.=rand(0,9);
}
return $text;
}



if($_SERVER['REQUEST_METHOD'] == "POST")
{
    //something was posted

    $password = $_POST['password'];
    $FullName = $_POST['fullname'];
    $UserName = $_POST['username'];
    $Email = $_POST['email'];


    if(!empty($UserName) && !empty($password))
    {

    
        $user_id = random_num(20);
        $query = "insert into users (fullname,username, email,password,user_id) values ('$FullName','$UserName','$Email','$password','$user_id')";

        mysqli_query($con, $query);

        header("Location: ../login/index.php");
        die();
    }else
    {
        echo "Please enter some valid information!";
    }
}
?>
