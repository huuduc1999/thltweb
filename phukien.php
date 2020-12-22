<!DOCTYPE html>
<html lang="en">
<style>
    div.product-image img{
        width: 70px;height: 300px;
    }
    div.product-title{
        width: 410px;height: 140px;
    }
    
</style>

<?php include 'inc/header.php' ;

    include 'config/config.php';  
    ?>
    <body>
        <!-- Top bar Start -->
        
        <!-- Top bar End -->

        
        <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap">
            <div class="container-fluid">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
                    <li class="breadcrumb-item"> Phụ kiện</li>
                    
                </ul>
            </div>
        </div>
        <!-- Breadcrumb End -->

        <!-- Product List Start -->
            <div class="product-view">
            <div class="container-fluid">
               
                                    <div class="row">
									    <?php 
									    	$tv="select * from sanpham where madm='pk' ";
									        $tv_1 = mysqli_query($conn,$tv);
                                            $j=0;
									        while($tv_2 = mysqli_fetch_array($tv_1))
									        {
									     ?>
									 <div class="col-md-4">
                                <div class="product-item">
                                    <div class="product-title">

                                        <a href="#"><?php echo $tv_2["tensp"]?></a>
                                        
                                    </div>
                                    <div class="product-image">
                                        <a href="product-detail.html">
                                            <img src="<?php echo $tv_2["img"]?>" >
                                        </a>
                                            <div class="product-action">
                                               <form action="giohang.php" method="post">
                                                <a href="Cart.php?id=<?php echo $tv_2["masp"]?>" name="khoa"><i class="fa fa-cart-plus"></i></a><!--  gio hang --> 
                                               </form>
                                                <a href="chitietsanpham?id=<?php echo $tv_2["masp"]?>"><i class="fa fa-search"></i></a><!-- nut tim kiem -->
                                            </div>
                                    </div>
                                    <div class="product-price">
                                        <h3><?php echo number_format($tv_2["gia"])?></h3>
                                        <a class="btn" href="Cart.php?id=<?php echo $tv_2[0]?>"><i class="fa fa-shopping-cart"></i>Mua hàng</a>
                                    </div>
                                </div>
                            </div>
                       
                        <?php 
                        $j++;
                        }
                        
                         ?>
                        <!-- Pagination Start -->
                       
                        <!-- Pagination Start -->
                  </div>
              </div>
          </div>
        <?php 
echo 'tim thay '.$j;
         ?>
                    
        <!-- Product List End -->  
        
        
   <?php include 'inc/footer.php' ?>  