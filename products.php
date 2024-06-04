
    <?php include('partials-front/menu.php'); ?>

    <!-- product sEARCH Section Ends Here -->
    <!-- product MEnu Section Starts Here -->
    <section class="product-menu">
        <div class="container">
            <h2 class="text-center">product Menu</h2>

            <?php 
                //Display products that are Active
                $sql = "SELECT * FROM tbl_product WHERE active='Yes'";

                //Execute the Query
                $res=mysqli_query($conn, $sql);

                //Count Rows
                $count = mysqli_num_rows($res);

                //CHeck whether the products are availalable or not
                if($count>0)
                {
                    //products Available
                    while($row=mysqli_fetch_assoc($res))
                    {
                        //Get the Values
                        $id = $row['id'];
                        $title = $row['title'];
                        $description = $row['description'];
                        $price = $row['price'];
                        $image_name = $row['image_name'];
                        ?>
                        
                        <div class="product-menu-box">
                            <div class="product-menu-img">
                                <?php 
                                    //CHeck whether image available or not
                                    if($image_name=="")
                                    {
                                        //Image not Available
                                        echo "<div class='error'>Image not Available.</div>";
                                    }
                                    else
                                    {
                                        //Image Available
                                        ?>
                                        <img src="<?php echo SITEURL; ?>images/product/<?php echo $image_name; ?>" alt="Cabbage" class="img-responsive img-curve">
                                        <?php
                                    }
                                ?>
                                
                            </div>

                            <div class="product-menu-desc">
                                <h4><?php echo $title; ?></h4>
                             
                                <p class="product-detail">
                                    <?php echo $description; ?>
                                </p>
                                <p class="product-price">ETB <?php echo $price; ?></p>
                                <br>

                                <a href="<?php echo SITEURL; ?>order.php?product_id=<?php echo $id; ?>" class="btn btn-primary">Order Now</a>
                            </div>
                            
                        </div>

                        <?php
                    }
                }
                else
                {
                    //product not Available
                    echo "<div class='error'>product not found.</div>";
                }
            ?>

            <div class="clearfix"></div>

        </div>

    </section>
    <!-- product Menu Section Ends Here -->

    <?php include('partials-front/footer.php'); ?>