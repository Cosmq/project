<?php
include("include/header.php");

?>
<div id="content"><!--content start-->
     <div class="container"><!--container start-->
         <div class="col-md-12"><!--col-md-12 start-->
             
             <ul class="breadcrumb"><!--Breadcrumb start-->
                 <li><a href="index.php">Home</a></li>
                 <li>My Account</li>
                 
             </ul><!--Breadcrumb end-->
             
         </div><!--col-md-12 end-->

<div class="col-md-3"><!--col-md-3 start-->
<?php
include("include/my-acc-sidebar.php");

?>
</div><!--col-md-3 end-->



<div class="col-md-9"><!--col-md-9 start-->
    
    <div class="box"><!-- box start-->
        
        <?php
        
        if (isset($_GET['my_orders'])){
            include("include/my_orders.php");
        }
        
        ?>
        <?php
        
        if (isset($_GET['edit_password'])){
            include("include/edit_password.php");
        }
        
        ?>
        
    </div><!--box end-->
    
    
</div><!--col-md-9 end-->




    </div>
</div>




<?php
include("include/footer.php");
?>
