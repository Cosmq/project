
<?php 
include("include/header.php");
include("include/db.php");
?>


 
<body>
 
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                     <form role="form" action="login-check.php" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Username" name="uname" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="upwd" type="password" value="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <button class="btn btn-lg btn-success btn-block" type="submit" name="btnlogin">Login</button> 
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
    
 
</body>
 <?php
if(isset($_GET['login'])){
    
    

$conn;

$user_uname = $_GET["uname"];

$user_pwd = $_GET["upwd"];

$select_cust = "SELECT * FROM users where user_uname='".$user_uname."' and password='".$user_pwd."'" ;

$run_cust = mysqli_query($conn, $select_cust);

$check_cust = mysqli_num_rows($run_cust);

if($check_cust ==0){
    echo "<script>alert('Incorrect username or email')</script>";
    
    exit();
}
    


if($check_cust==1){
    
    $_SESSION['user_uname']=$user_uname;
    
    echo "<script>alert('Successful Login!')</script>";
    
}else{
    $_SESSION['user_uname']=$user_uname;
    
    echo "<script>alert('Successful Login!')</script>";
    echo "<script>window.open('index.php')</script>";
}
}

?>
