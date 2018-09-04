<?php include('urlset.php');?>
<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
<title>Jewel Fab Art</title>
<meta name="description" content="Jewel Fab Art"/>
<?php include('header.php');?>

<?php include('banner.php');?>

<div class="master-wrapper-page">

    <div class="master-wrapper-content">

        <div class="master-column-wrapper">

            <div class="home-grid">

                <div class="tag-line">

                    <h2><span>NEW ARRIVALS</span></h2>

                </div>

                   

                    <ul id="flexiselDemo3">

                    <?php

                        $sql_cat_count=$conn->query("select * from fleet1 group by cat_id desc limit 0,10");

                        while($row_cat_count=mysqli_fetch_array($sql_cat_count))

                        {

                    ?>

                        <li class="box">

                            <img alt="<?= $row_cat_count['product_name'];?>" src="<?= $urlset;?>admin/uploads/products/<?= $row_cat_count['image1'];?>" title="<?= $row_cat_count['product_name'];?>"  width="270"/>

                            <div class="new-arrivals-names">

                                <p><?= $row_cat_count['product_name'];?></p>

                             </div>

                            <div class="overbox">

                                <div class="title overtext"> 

                                    <a href="<?= $urlset;?>productdetail/<?= $row_cat_count['metatitle'];?>">VIEW MORE</a> 

                                </div>

                            </div>

                        </li>

                    <?php

                        }

                    ?>                    

                    </ul>

                

                <div class="clr"></div>

            </div>

        </div>

    </div>

    <!--Categories-->

    <!-- <div class="home-page-category-grid inner-wraps" style="padding: 0px 0px 0px;">
    
     <div class="item-grid">
    
        <div class="item-box">
    
            <div class="category-item"> 
    
                <div class="picture">
    
                    <div class="saree-thumbnail">
    
                        <a href="<?= $urlset;?>product/bed-spread">
    
                            <img src="img/pd1.jpg" alt="Pure Silk Sarees" width="444"/>
    
                        </a>
    
                    </div>
    
                </div>
    
                <div class="sareedetails">
    
                    <a href="<?= $urlset;?>product/bed-spread">SHOP NOW</a>
    
                </div>
    
            </div>
    
        </div>
    
        <div class="item-box mid-boxs">
    
            <div class="category-item">
    
                <div class="picture">
    
                    <div class="saree-thumbnail">
    
                        <a href="<?= $urlset;?>product/carpets-rugs">
    
                            <img src="img/pd2.jpg" alt="Pure Silk Sarees" width="444"/>
    
                        </a>
    
                    </div>
    
                    <div class="sarees-details">
    
                        <a href="<?= $urlset;?>product/carpets-rugs" class="saree-btn">SHOP NOW</a>
    
                    </div>
    
                </div>
    
                <div class="picture">
    
                    <div class="saree-thumbnail">
    
                        <a href="<?= $urlset;?>product/cushions-covers">
    
                            <img src="img/pd3.jpg" alt="Designer Silk Sarees" width="444"/>
    
                        </a>
    
                    </div>
    
                    <div class="sarees-design-silk">
    
                       <a href="<?= $urlset;?>product/cushions-covers" class="sarees-design-btn">SHOP NOW</a>
    
                    </div>
    
                </div>
    
            </div>
    
        </div>
    
        <div class="item-box lst-boxs">
    
            <div class="category-item">
    
                <div class="picture">
    
                    <div class="saree-thumbnail">
    
                        <a href="<?= $urlset;?>product/doormates">
    
                            <img src="img/pd4.jpg" alt="Blouses" width="444"/>
    
                        </a>
    
                    </div>
    
                    <div class="sarees-details">
    
                        <a href="<?= $urlset;?>product/doormates" class="blouse-btn">SHOP NOW</a>
    
                    </div>
    
                </div>
    
                <div class="picture">
    
                    <div class="saree-thumbnail">
    
                        <a href="<?= $urlset;?>product/pouff">
    
                            <img src="img/pd5.jpg">
    
                        </a>
    
                    </div>
                    <div class="sarees-design-silk">
    
                       <a href="<?= $urlset;?>product/pouff" class="sarees-design-btn">SHOP NOW</a>
    
                    </div>
    
                </div>
    
            </div>
    
        </div>
    
        <div class="clr"></div>
    
    </div>
    
    </div> -->

</div>



<img src="img/banner2.jpg" class="img-responsive" style="padding-bottom: 20px;">



<div class="master-wrapper-page">

    <div class="master-wrapper-content">

        <div class="master-column-wrapper">

            <!--Popular Categories-->

            <div class="home-grid arrow-adjust">

                <div class="tag-line">

                    <h2><span>POPULAR CATEGORIES</span></h2>

                </div>

                <ul id="flexiselDemo4">

                    <?php

                        $sql=$conn->query("select * from fleets");

                        while($row=mysqli_fetch_array($sql))

                        {

                    ?>

                    <li class="box">

                        <a href="<?= $urlset;?>product/<?= $row['metatitle'];?>" title="Show products in category Designer">

                            <img alt="<?= $row['name'];?>" src="<?= $urlset;?>admin/uploads/fleets/<?= $row['image'];?>" title="<?= $row['name'];?>" class="saree-box-shop" />

                        </a>

                         <div class="popular-txt">

                            <p><?= $row['name'];?></p>

                            <a href="<?= $urlset;?>product/<?= $row['metatitle'];?>">SHOP NOW</a>

                        </div>

                    </li>

                    <?php

                        }

                    ?>

                </ul>



                <div class="clr"></div>

            </div>



            <div class="home-page-about-grid">

                <div class="item-grid">

                    <div class="description_new">

                        <div class="tag-line">

                            <h2><span>JEWEL FEB ART</span></h2>

                        </div>

                        <?php

                            $sql=$conn->query("select * from aboutus where id='7'");

                            $row=mysqli_fetch_array($sql);

                        ?>

                        <?= $row['about_content'];?>



                    </div>

                </div>

            </div>

            <!--Customer Review-->



        </div>

    </div>

</div>

<?php include('footer.php');?>