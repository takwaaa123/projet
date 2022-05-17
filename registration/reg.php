<!DOCTYPE HTML>
<html>
    <HEAD>
    <link rel="stylesheet" type="text/css" href="./style.css">
    </HEAD>
    <body>
        <div class="registration-form">
         <h1>Registration Form</h1>
        
         <form action="process.php" method="post">
            <div class="user-box">

             <input type="text" name="fullname" required="">
             <label>Full Name</label>
          </div>
          <div class="user-box">
           

            <input type="text" name="username" required="">
            <label>Username</label>
         </div>
         <div class="user-box">
            <input type="text" name="email" required="">
            <label>Email</label>
          </div>
          <div class="user-box">
            <input type="password" name="password" required="">
            <label>Password</label>
          </div>
          
          <div >
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <input type="submit" value="submit"  name="btn-save"  class ="a">
            
          </div>
          
         </form>
        
        </div>
    </body>
</html>
