<?php
    include ("include/header.php");
        
?>
<title>Register</title>

<ul class="breadcrumb"><!--Breadcrumb start-->
                 <li><a href="index.php">Home</a></li>
                 <li>Register</li>
                 
             </ul><!--Breadcrumb end-->

  
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <form action="signup.php" method="POST" aligh="center">
  
  <div class="form-signup">
   <label for="user_first"><b>First name</b></label>
    <input type="text" placeholder="Enter First name" name="user_first">
    
    </div>
    
    
<br>

        <div class="form-signup">
    <label for="user_last"><b>Last name</b></label>
    <input type="text" placeholder="Enter Surname" name="user_last">
    
    </div>
    
    <br>
    
    <div class="form-signup">
    
    <label for="user_email"><b>E-mail</b></label>
    <input type="text" placeholder="Enter your email" name="user_email">
   
   </div>
   
   <br>
  
    <div class="form-signup">
   
     <label for="user_uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="user_uname">

   </div>
   
    <br>
    
    <div class="form-signup">
    
    
    <label for="user_pwd"><b>Password</b></label>
    <input type="password" class="inputField" placeholder="Enter Password" name="user_pwd">
    
    </div>
    
    <br>
    
    
    <div class="form-signup">
   
   <label for="user_address"><b>Address</b></label>
    <input type="text" placeholder="Enter an address" name="user_address">

   </div>
   
    <br>
    <div class="form-signup">
    
    
    <label for="user_town"><b>Town/City</b></label>
    <input type="text" placeholder="Enter your town / city" name="user_town">
    
    
    </div>
   
   
    <br>
    
    <div class="form-signup">
    
    <label for="user_county"><b>County</b></label>
    <input type="text" placeholder="Enter your county" name="user_county">

   </div>
     <br>
    
    <div class="form-signup">
          
     <label for="user_postcode"><b>Postcode</b></label>
    <input type="text" placeholder="Enter your Postcode / Zip Code" name="user_postcode">
    
    </div>
    
    <br>
    
    <div class="form-signup">   
    
    <label for="user_country"><b>Country</b></label>
    <input type="text" placeholder="Enter your country" name="user_country">
    
    </div>
    
    <br>
    
    <div class="form-signup">
    
    <label for="user_contact_num"><b>Contact Number</b></label>
    <input type="text" placeholder="Enter your phone number" name="user_contact_num">
    
    </div>

    
    <br>
    
    
    <div class="form-signup">
    
    <label for="user_DOB"><b>Birthday</b></label>
    <input type="date" placeholder="Enter your birthday" name="user_DOB">
    
    </div>

    
    <br>
    
    <div class="form-signup">
    
    <label for="user_gender"><b>Select Gender</b></label>
    <input type="radio"  name="user_gender" value="Male"> Male
    <input type="radio"  name="user_gender" value="Female">Female
    <input type="radio"  name="user_gender" value="Other">Other
    
    </div>

    
    <br>
    
    <button type="submit" name="submit">Register</button>
    <label>
    
     <br>
     
     
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  

  
    <button type="reset"    name="clear">Clear all</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  
</form>
 
<?php
    include ("include/footer.php");
?>
    