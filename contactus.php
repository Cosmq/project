<?php
    include ("include/header.php");
        
?>
<main>
   <ul class="breadcrumb"><!--Breadcrumb start-->
                 <li><a href="index.php">Home</a></li>
                 <li>Contact Us</li>
                 
             </ul><!--Breadcrumb end-->
    <p>Send us an E-Mail</p>
    <form class="contact-form" action="include/contact.php" method="post">
        
        <input type="text" name="name" placeholder="Full Name" required>
        
        <br>
        
        <input type="text" name="Mail" placeholder="Your E-Mail" required>
        
        <br>
        
        <input type="text" name="Subject" placeholder="Subject" required>
        
         <br>
         
         <textarea name="message" placeholder="Enter your message here..." required></textarea>
          
          <br>
          
        <button type="submit" name="submit">Send</button>
        <button type="reset"    name="clear">Clear all</button>
          
         
                
    </form>
</main>
<br>

<?php 
    include("include/footer.php");
    
?>

