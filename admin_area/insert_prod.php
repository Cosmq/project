<?php
include("../include/db.php");
include("../include/session.php");
    ?>
<link rel="stylesheet" href="../StyleSheet/bootstrap-337.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>Insert product</title>
</head>
<body>
    
    <div class="row"><!--row start-->
        
        <div class="col-lg-12"><!--col-lg-12 start-->
            
            <ol class="breadcrumb"><!--breadcrumb start-->
                
                <li class="active">
                    
                    <i class=""></i>Insert Products
                    
                </li>
                
            </ol><!--breadcrumb end-->
            
        </div><!--col-lg-12 end-->
        
    </div><!--row end-->
    
    <div class="row"><!--row start-->
        
        <div class="col-lg-12"><!--col-lg-12 start-->
            
            <div class="panel panel-default">
                <div class="panel-heading">
                    
                    <h3 class="panel-title">
                        
                        <i class=></i>Insert Product
                    </h3>
                    
                </div>
                
            </div>
            
            <div class="panel-body"><!-- panel body start-->
                <form method="post" class="form-horizontal" enctype="multipart/form-data">
                    <div class="form-group"><!--form group start-->
                        <label class="col-md-3 control-label">Products Title</label>
                        <div class="col-md-6">
                            
                            <input name="prd_name" type="text" class="form-control" required>
                        </div>
                        
                    </div><!--form group end-->
                    
                    
                    
                    <div class="form-group"><!--form group start-->
                        <label class="col-md-3 control-label">Prodcut Category</label>
                        <div class="col-md-6">
                            
                            <select name="prd_cat_title" class="form-control"> 
                            
                            <option>Select a Category</option>
                            
                            <?php
                            
                                $get_prd_cat = "select * from product_catagories";
                                $run_prd_cat = mysqli_query($conn, $get_prd_cat);
                                
                                while ($row_prd_cat=mysqli_fetch_array($run_prd_cat)){
                                    
                                    $prd_cat_id = $row_prd_cat['$prd_cat_id'];
                                    $prd_cat_title = $row_prd_cat['$prd_cat_title'];
                                    
                                    echo "
                                    
                                    <option value='$prd_cat_id'> $prd_cat_title </option>
                                    
                                    ";
                                }
                                
                            ?>
                                
                            </select>
                        </div>
                        
                    </div><!--form group end-->
              
                   
                    
                    <div class="form-group"><!-- form start--><!--Product price Start-->
                        
                        <label class="col-md-3 control-label">Product Price (£)</label>
                        
                        <div class="col-md-6"><!--md-6 start-->
                            
                            <input name="prd_price" type="text" class="form-control" required>
                            
                        </div><!--md-6 end-->
                        
                    </div><!-- form end--><!--Product price end-->
                    
               
                    
                    <div class="form-group"><!-- form start--><!--Product image 1 Start start-->
                        
                        <label class="col-md-3 control-label">Product Image</label>
                        
                        <div class="col-md-6"><!--md-6 start-->
                            
                            <input name="prd_img" type="file" class="form-control">
                            
                        </div><!--md-6 end-->
                        
                        
                    </div><!-- form end--><!--Product image 1 end-->
                    
                     
                    
                    <div class="form-group"><!-- form start--><!--Product Publisher Start-->
                        
                        <label class="col-md-3 control-label">Product Publisher</label>
                        
                        <div class="col-md-6"><!--md-6 start-->
                            
                            <input name="prd_publisher_name" type="text" class="form-control" required>
                            
                        </div><!--md-6 end-->
                        
                    </div><!-- form end--><!--Product publisher end-->
                    
                    
                    
                    <div class="form-group"><!-- form start--><!--Product Writer Name Start-->
                        
                        <label class="col-md-3 control-label">Product Writer Name</label>
                        
                        <div class="col-md-6"><!--md-6 start-->
                            
                            <input name="prd_writer_name" type="text" class="form-control" required>
                            
                        </div><!--md-6 end-->
                        
                    </div><!-- form end--><!--Product writer name end-->
                    
                    
                    <div class="form-group"><!-- form start--><!--Product Artist Name-->
                        
                        <label class="col-md-3 control-label">Product Artist Name</label>
                        
                        <div class="col-md-6"><!--md-6 start-->
                            
                            <input name="prd_artist_name" type="text" class="form-control" required>
                            
                        </div><!--md-6 end-->
                        
                    </div><!-- form end--><!--Product artist name end-->
                    
                    
                    
                     <div class="form-group"><!-- form start--><!--Product publication year-->
                        
                        <label class="col-md-3 control-label">Product Publication Year</label>
                        
                        <div class="col-md-6"><!--md-6 start-->
                            
                            <input name="prd_date" type="text" class="form-control" required>
                            
                        </div><!--md-6 end-->
                        
                    </div><!-- form end--><!--Product PublicationYear end-->
                    
                    
                    <div class="form-group"><!-- form start--><!--Product quantity-->
                        
                        <label class="col-md-3 control-label">Product Quantity</label>
                        
                        <div class="col-md-6"><!--md-6 start-->
                            
                            <input name="prd_quantity" type="text" class="form-control" required>
                            
                        </div><!--md-6 end-->
                        
                    </div><!-- form end--><!--Product quantity end-->
                    
                    
                    
                    <div class="form-group"><!-- form start--><!--Product description Start-->
                        
                        <label class="col-md-3 control-label">Product Description</label>
                        
                        <div class="col-md-6"><!--md-6 start-->
                            
                            <textarea name="prd_desc"  cols="19" rows="6"></textarea>
                            
                        </div><!--md-6 end-->
                        
                        
                    </div><!-- form end--><!--Product desc end-->
                    
                     <div class="form-group"><!-- form start--><!--Submit-->
                        
                        <label class="col-md-3 control-label"></label>
                        
                        <div class="col-md-6"><!--md-6 start-->
                            
                            <input name="submit" value="Insert New Product" type="submit" class="btn btn-primary form-control">
                            
                        </div><!--md-6 end-->
                        
                    </div><!-- form end--><!--Product artist name end-->
                    
                    
                    
                    
                </form><!--form horizontal end-->
            </div><!-- panel body end-->
            
        </div><!--col-lg-12 end-->
        
    </div><!--row end-->
    
    
    
    <script>"JavaScript/bootstrap-337.min.js"</script>
    <script>"JavaScript/jquery-331.min.js"</script>


</body>
</html>

<?php

if(isset($_POST['submit'])){
    $product_name = $_POST['prd_name'];
    $product_category = $_POST['prd_cat_id'];
    $product_price = $_POST['prd_price'];
    $product_publisher_name = $_POST['prd_publisher_name'];
    $product_writer_name = $_POST['prd_writer_name'];
    $product_artist_name = $_POST['prd_artist_name'];
    $product_date = $_POST['prd_date'];
    $product_quantity = $_POST['prd_quantity'];
    $product_desc = $_POST['prd_desc'];
    
    
    $prd_img = $_FILES['prd_img']['name'];
    
    $temp_name = $_FILES['prd_img']['tmp_name'];
    
    
    move_uploaded_file($temp_name,"../admin/$prd_img");
    
    
    $insert_product = "INSERT INTO prd_details (prd_name, prd_cat_id, prd_price, prd_publisher_name, prd_writer_name, prd_artist_name, prd_date, prd_quantity, prd_desc, prd_img) values('$product_name','$product_category','$product_price','$product_publisher_name','$product_writer_name','$product_artist_name',NOW(),'$product_quantity','$product_desc')";
    
    $run_product = mysqli_query($conn, $insert_product);
    
    if($run_product){
        
        echo"<script>alert('Product has been successflly uploaded!')</script>";
        echo"<script>window.open('insert_prod.php','_self')</script";
    }
    else{
        echo"<script>alert('Failed!')</script>";
    }
    }
    



?>

