<?php
function check_login($con) {
    
      $id=$_SESSION['$user_id'];
   $query ="select * from users where user_id='$id' limit 1";

$result = mysqli_query($con,$query);
if($result && mysqli_num_rows($result)>0){
    $user_data=mysqli_fetch_assoc($result);
    return $user_data;

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
