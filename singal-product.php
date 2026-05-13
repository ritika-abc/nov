<?php
include "nav.php";
?>
<?php
include "config.php";
 
   
$slug = $_GET['slug'];
$sel = "SELECT * from `pro` where `slug`='$slug'";
$q = mysqli_query($con, $sel);
while ($row = mysqli_fetch_array($q)) {
    $pro1 = $row['name'];
?>
    <!--====== Start Page-title-area section ======-->
    <section class="page-title-area text-white bg_cover" style="background-image: url(image/pro/<?php echo $row['image'] ?>);">
        <div class="container">
            <!--======  Page-title-Inner ======-->
            <div class="page-title-inner text-center">
                <h1 class="page-title text-capitalize"><?php

                                        echo    str_replace('-', ' ', $_GET['slug']);
                                        ?></h1>
                <div class="gd-breadcrumb">
                    <span class="breadcrumb-entry"><a href="/">Home</a></span>
                    <span class="separator"></span>
                    <span class="breadcrumb-entry active text-capitalize"><?php

                                                            echo    str_replace('-', ' ', $_GET['slug']);
                                                            ?></span>
                </div>
            </div>
        </div>
    </section><!--====== End Page-title-area section ======-->
    <!--====== Start Contact Info section ======-->
    <section class="service-details-section pt-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <!--====== Service Details Wrapper ======-->
                    <div class="service-info-wrapper pr-lg-40 wow fadeInDown">
                        <div class="block-image wow fadeInDown">
                            <img src="image/pro/<?php echo $row['image'] ?>" height="300px" class="obj   rounded"
                                width="70%" alt="">
                        </div>
                        <div class="seo-content">
                            <?php echo $row['content'] ?>
                        </div>


                    </div>
                </div>
                <div class="col-xl-4 col-lg-5">
                    <!--====== Sidebar Widget Area ======-->
                    <div class="sidebar-widget-area">
                        <div class="sidebar-widget widget-service-nav gray-bg mb-30 wow fadeInUp">
                            <h4 class="widget-title">Products</h4>
                            <ul>
                                <?php
                                            include "config.php";

                                            $sel = "SELECT * from `pro`";
                                            $q = mysqli_query($con, $sel);
                                            while ($row = mysqli_fetch_array($q)) {
                                            ?>
                                <li><a href="singal-product.php?slug=<?php echo $row['slug'] ?>"><?php echo $row['name'] ?><i class="fa-solid fa-angles-right" style="color: rgb(2, 47, 76);"></i></a></li>
                                 <?php } ?>
                            </ul>
                        </div>
                        <div class="sidebar-widget widget-banner mb-30 wow fadeInUp">
                            <div class="banner-content text-center text-white">
                                <h3 class="title">Enquire Now</h3>
                                 
                                <a href="#" class="btn btn-dark" data-toggle="modal" data-target="#exampleModal">Enquire Now</a>
                            
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
            <!--====== Post Navigation ======-->
           
        </div>
    </section><!--====== End Service Details section ======-->
<?php }  ?>








<?php
include "footer.php";
?>