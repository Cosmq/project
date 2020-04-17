<?php
session_start();

include 'include/db.php';

?>


<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="StyleSheet/Maincss.css">
	<link rel="stylesheet" href="StyleSheet/bootstrap-337.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Homepage</title>

</head>
<a name="top"></a>
<body>


<?php
    
    if(!isset($_SESSION['user_uname'])){
        echo"Welcome: Guest";
        
    }else{
        echo"Welcome: ".$_SESSION['user_uname']."";
    }
    
    
    ?>
    
    
<div id="top"><!--Top menu begin-->
    <div class="container"><!--Container Begin-->
        <div class="col-md-6"><!--col-md-6 Begin-->
            <ul class="menu"><!--customerMenu Begin-->
               <li>
                   <a href="customer_register.php">Register</a>
               </li>
               <li>
                   <a href="myaccount.php">My Account</a>
               </li>
               <li>
                   <a href="cart.php">Go To Cart</a>
               </li>
               <li>
                   <a href="login.php">Login</a>
               </li>
            </ul><!--customerMenu End-->
        </div><!--col-md-6 Finish-->    
    </div><!--Container Finish-->
</div><!--Top menu Finish-->



<div><!--Logo Begin-->
<a href="index.php"><img src="Images/Logo.png" alt="North West Comics logo" class="hidden-xs" style="width:350px;height:150px;"></a>
</div><!--Logo End-->



<div class="navbar"><!--Nav Bar Begin-->
  <a href="index.php">Home</a>
  <a href="shop.php">Shop</a>
  <a href="contactus.php">Contact Us</a>
  <a href="cart.php">Shopping Cart</a>
  <a href="login.php">Login</a>
  
  
<div class="search-con"><!--SearchBar Begin-->
    <form action="/action_page.php">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
<?php 
  if(isset($_POST['submit'])){ 
  if(isset($_GET['go'])){ 
  if(preg_match("/^[  a-zA-Z]+/", $_POST['name'])){ 
  $name=$_POST['name']; 
  //connect  to the database 	 
      $db=mysql_connect  ("mwakefield", "mwakefield1",  "weweti") or die ('I cannot connect to the database  because: ' . mysql_error()); 
  //-select  the database to use 
 $mydb=mysql_select_db("yourDatabase"); 
 //-query  the database table 
 $sql="SELECT  ID, FirstName, LastName FROM Contacts WHERE FirstName LIKE '%" . $name .  "%' OR LastName LIKE '%" . $name ."%'"; 
  //-run  the query against the mysql query function 
 $result=mysql_query($sql); 
	  //-create  while loop and loop through result set 
	  while($row=mysql_fetch_array($result)){ 
	          $FirstName  =$row['FirstName']; 
	          $LastName=$row['LastName']; 
	          $ID=$row['ID']; 
	  //-display the result of the array 
  echo "<ul>\n"; 
  echo "<li>" . "<a  href=\"search.php?id=$ID\">"   .$FirstName . " " . $LastName .  "</a></li>\n"; 
	  echo "</ul>"; 
	  } 
	  } 
	  else{ 
	  echo  "<p>Please enter a search query</p>"; 
	  } 
	  } 
	  } 
	?> 
  </div><!--SearchBar End-->
               
</div><!--NavBar End-->