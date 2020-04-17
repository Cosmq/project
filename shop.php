<?php 

    $active='Shop';
    include("include/header.php");
   
?>
   
   <div id="content"><!-- #content Begin -->
       <div class="container"><!-- container Begin -->
           <div class="col-md-12"><!-- col-md-12 Begin -->
               
               <ul class="breadcrumb"><!-- breadcrumb Begin -->
                   <li>
                       <a href="index.php">Home</a>
                   </li>
                   <li>
                       Shop
                   </li>
               </ul><!-- breadcrumb Finish -->
               
           </div><!-- col-md-12 Finish -->
           
           <div class="col-md-3"><!-- col-md-3 Begin -->
   
   <?php 
    
    include("include/sideshop.php");
    
    ?>
               
           </div><!-- col-md-3 Finish -->
           
           <div class="col-md-9"><!-- col-md-9 Begin -->
             
             <?php 
               
                if(!isset($_GET['prd_details'])){
                    
                    if(!isset($_GET['cat'])){
              
                      echo "

                       <div class='box'><!-- box Begin -->
                           <h1>Shop</h1>
                           <p>
                               Please browse all of our products!
                           </p>
                       </div><!-- box Finish -->

                       ";
                        
                    }
                   
                   }
               
               ?>
               
               <div class="row"><!-- row Begin -->
               
                   <?php 
                   
                        if(!isset($_GET['prd_details'])){
                            
                         if(!isset($_GET['cat'])){
                            
                            $per_page=6; 
                             
                            if(isset($_GET['page'])){
                                
                                $page = $_GET['page'];
                                
                            }else{
                                
                                $page=1;
                                
                            }
                            
                            $start_from = ($page-1) * $per_page;
                             
                            $get_products = "select * from products order by 1 DESC LIMIT $start_from,$per_page";
                             
                            $run_products = mysqli_query($conn,$get_products);
                             
                            while($row_products = mysqli_fetch_array($run_products)){
                                
                                $prd_id = $row_products['product_id'];
        
                                $prd_title = $row_products['product_title'];

                                $prd_price = $row_products['product_price'];

                                $prd_img1 = $row_products['product_img1'];
                                
                                echo "
                                
                                    <div class='col-md-4 col-sm-6 center-responsive'>
                                    
                                        <div class='product'>
                                        
                                            <a href='details.php?prd_id=$prd_id'>
                                            
                                                <img class='img-responsive' src='admin_area/admin/$prd_img1'>
                                            
                                            </a>
                                            
                                            <div class='text'>
                                            
                                                <h3>
                                                
                                                    <a href='details.php?prd_id=$prd_id'> $prd_title </a>
                                                
                                                </h3>
                                            
                                                <p class='price'>

                                                    $prd_price

                                                </p>

                                                <p class='buttons'>

                                                    <a class='btn btn-default' href='details.php?prd_id=$prd_id'>

                                                        View Details

                                                    </a>

                                                    <a class='btn btn-primary' href='details.php?prd_id=$prd_id'>

                                                        <i class='fa fa-shopping-cart'></i> Add To Cart

                                                    </a>

                                                </p>
                                            
                                            </div>
                                        
                                        </div>
                                    
                                    </div>
                                
                                ";
                                
                        }
                        
                   ?>
               
               </div><!-- row Finish -->
               
               <center>
                   <ul class="pagination"><!-- page changer Begin -->
					 <?php
                             
                    $query = "select * from products";
                             
                    $result = mysqli_query($conn,$query);
                             
                    $total_records = mysqli_num_rows($result);
                             
                    $total_pages = ceil($total_records / $per_page);
                             
                        echo "
                        
                            <li>
                            
                                <a href='shop.php?page=1'> ".'First Page'." </a>
                            
                            </li>
                        
                        ";
                             
                        for($i=1; $i<=$total_pages; $i++){
                            
                              echo "
                        
                            <li>
                            
                                <a href='shop.php?page=".$i."'> ".$i." </a>
                            
                            </li>
                        
                        ";  
                            
                        };
                             
                        echo "
                        
                            <li>
                            
                                <a href='shop.php?page=$total_pages'> ".'Last Page'." </a>
                            
                            </li>
                        
                        ";
                             
					    	}
							
						}
					 
					 ?> 
                       
                   </ul><!-- page changer Finish -->
               </center>
                
                <?php 
               
               //getpcatpro(); 
               
              // getcatpro();
               
               ?>  
               
           </div><!-- col-md-9 Finish -->
           
       </div><!-- container Finish -->
   </div><!-- #content Finish -->
   
<?php
include("include/footer.php");
?>
    
    
