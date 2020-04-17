<div class="panel panel-default sidebar-menu"><!--panel panel-default sidebar-menu start-->
    <div class="panel-heading"><!--panel heading start-->
        <h3 class="panel-title">My Account</h3>
            
        
    </div><!--panel heading end-->
    
    <div class="panel-body"><!--panel body start-->
        <ul class="nav nav-pills nav-stacked myAcc-menu">
           
         <li class="<?php if(isset($_GET['my_orders']));  ?>"></li>
           
        <li><a href="myaccount.php?my_orders">
        <i class="fa fa-list"></i> My Orders</a></li>
            
        <li class="<?php if(isset($_GET['edit_account']));  ?>"></li>
            
           <li><a href="myaccount.php?edit_account">
           <i class="fa fa-pencil"></i> Edit your account
           </a></li>
           
           <li class="<?php if(isset($_GET['edit_password'])); ?>"></li>
           
           <li><a href="myaccount.php?edit_password">
           <i class="fa fa-user"></i> Change your password
           </a></li>
           
            <li><a href="logout.php">
           <i class="fa fa-sign-out"></i> Log Out
           </a></li>
           
            
        </ul>
        </div><!--panel panel-default sidebar-menu end-->
</div><!--panel panel-default sidebar-menu end-->
  
