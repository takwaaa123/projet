
<?php 
session_start();

include("connexion.php");
include("functions.php");

$user_data = check_login($con);

?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet"  href="./acceuilUser.css">
    <meta charset="UTF-8">

</head>
<body>
<header> 
       <nav class="sticky">
         <h2 class="logo">Club<span>House</span></h2>
          <ul>
         
            <li> <a href="#"> Home </a></li>
            <li> <a href="#"> Classes</a></li>
            <li> <a href="#"> Schedule</a></li>
           
         </ul>
         
      </nav>

      <div>
          <h3 class="jomla">Welcome</h3>
          <h3 class="c2"> <?php echo '' .$_SESSION['username'] ;
   
          ?> </h3>
      </div>
  </header> 
  <section class="main">
   <div class="div1">
       <h3>A unique experience</h3>
   </div>
   <div class="div2">
     <h4>With ClubHouse, you can experience fitness like you never have before.<br><br>
       We offer diverse independent classes to fit all of your interests and hobbies.<br><br>
       We can help you achieve your fitness goals with our specilized coaches, 
       top-tier equipment and in a motivating atmosphere .<br><br>
       Sign up now and join us on our self improvement journey.
    
     </h4>
  </div>
    </section>

 
   <div class="main2"> 
   <div class="discover">
     <h3>Reserve your class now</h3>
   </div>
 
   <div class="div3">
<a href="./formYoga.php">
    <img src="imagess/yoga.jpg" class="img">
</a>
    <h4 class="text">Yoga</h4>
    <a href="./formDance.php">
    <img src="imagess/dance.jpg" class="img">
    </a>
    <h4 class="text">Dance</h4>

   </div>
   <div class="div4">
   <a href="./formBoxe.php">
    <img src="imagess/boxing.jpg" class="img2">
</a>
    <h4 class="text">Boxing</h4>
    <img src="imagess/liftng.jpg" class="img2">
    <h4 class="text">Body Pump</h4>

   </div>


 </div>
 
  
  





    
</body>


</html>