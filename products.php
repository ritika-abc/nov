<?php

include "nav.php";
?>
    <section class=" " style="height: 200px;filter:brightness(0.5)">
        <video src="video/2.mp4" autoplay muted loop type="video/mp4" height="100%" style="object-position:top" class="obj" width="100%"></video>


    </section>
 






    <!-- product -->
    <section class="my-7">
        <div class="container">

            <div class="row  ">
                 <?php
                                            include "config.php";

                                            $sel = "SELECT * from `pro`";
                                            $q = mysqli_query($con, $sel);
                                            while ($row = mysqli_fetch_array($q)) {
                                            ?>
                <div class="col-12 col-sm-6 col-lg-3 my-4">
                    <div class="img_container">
                        <a class="w-100 d-block" title="<?php echo $row['name'] ?> " href="singal-product.php?slug=<?php echo $row['slug'] ?>" target="_blank">
                            <div class="hov-card">
                                <img src="image/pro/<?php echo $row['image'] ?>" alt="<?php echo $row['name'] ?> ">
                            </div>
                        </a>
                        <div class="p-3">
                            <h4> <?php echo $row['name'] ?> </h4>
                            <a href="" class="enq-btn" data-toggle="modal" data-target="#exampleModal">Enquire
                                Now</a>
                        </div>
                        <div class="span-line"></div>
                    </div>
                </div>
                  <?php }?>
            </div>
    </section>
    <!-- product -->

<?php
include "footer.php";

?>