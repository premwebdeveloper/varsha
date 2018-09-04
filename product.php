<?php include('urlset.php');
    $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $actual_link1 = explode("/", $actual_link);

    $meta=$actual_link1[6];

    $sql=$conn->query("select * from fleet where metatitle='$meta'");

    $row=mysqli_fetch_array($sql);

    $subcat_id = $row['id'];

    $catid = $row['fl_id'];


    $sql1=$conn->query("select * from fleets where metatitle='$meta'");

    $row1=mysqli_fetch_array($sql1);

    $cat_id = $row1['id'];

    if($subcat_id)

    {

?>
    <title><?= $row['title'];?></title>
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
    <meta name="description" content="<?= $row['meta_description'];?>" />
<?php
    }
    else
    {
?>     
    <title><?= $row1['title'];?></title>
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
    <meta name="description" content="<?= $row1['meta_description'];?>" />
<?php
    }
?>  
<?php include('header.php');?>

<hr>

<style>

    .shop{

        float:none;

    }

    hr{

        margin-top: 0px;

    }

    .side1{

        padding-bottom: 10px;

    }

    .flex{

        min-height: 250px!important;

    }

</style>

<script>

    $(document).ready(function(){

        $("#<?= $row1['id'];?>").addClass('active last');

        $("#<?= $catid;?>").addClass('active last');

    });

</script>

<div class="master-wrapper-content">

   

<div class="breadcrumb">

    <ul>

        <li>

            <a href="<?= $urlset;?>" title="Home">Home</a>

            <span class="delimiter">/</span>

        </li>

        <li>

            <strong class="current-item"><?= $row1['name'];?></strong>

            <span class="delimiter">/</span>

        </li>        

        <li>

            <strong class="current-item"><?= $row['name'];?></strong>

        </li>

    </ul>

</div>



            

<div class="side1">

    <h2>Filter by</h2>

        <div id="dropcssmenu">

        <ul class="">

            <li class="">

                <a class="toggleControl" id="togle" onclick="toggle()"><span>Categories<span style="float: right">

                    <img src="<?= $urlset;?>Themes/vijayalakshmi/Content/images/filters-toggle.png">

                    </span></span>

                </a>

            </li>

        </ul>

        <div style="display: block;" id="categoryul">

            <ul class="dish-cnt scroll content mCustomScrollbar _mCS_ _mCS_2 _mCS_1">

                <div id="mCSB_1" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" tabindex="0" style="max-height: 300px;">

                    <div id="mCSB_1_container" class="mCSB_container" style="position:relative; top:0; left:0;" dir="ltr">

                        <?php

                            $sql_cat=$conn->query("select * from fleets");

                            while($row_cat=mysqli_fetch_array($sql_cat))

                            {

                                $sub_cat_id = $row_cat['id'];

                        ?>

                        <li id="<?= $row_cat['id'];?>">

                            <a href="<?= $urlset;?>product/<?= $row_cat['metatitle'];?>"><?= $row_cat['name'];?> </a>

                            <ul class="sublist">

                                <?php

                                    $sql_sub_cat=$conn->query("select * from fleet where fl_id='$sub_cat_id'");

                                    while($row_sub_cat=mysqli_fetch_array($sql_sub_cat))

                                    {

                                ?>

                                    <li class="inactive">

                                        <a href="<?= $urlset;?>product/<?= $row_sub_cat['metatitle'];?>"><?= $row_sub_cat['name'];?></a>

                                    </li>

                                <?php

                                    }

                                ?>

                            </ul>

                        </li>                        

                        <?php

                            }

                        ?>

                    </div>

                </div>

            </ul>

        </div>

    </div>

    <script>

        $("#togle").click(function() {

        $("#categoryul").toggle("fast");

        });

    </script>

</div>

<?php

    if($subcat_id)

    {

?>

<div class="center1">

    <h3><?= $row['name'];?></h3>

    <div class="products">

        <?php

            $sql_cct = "select count(id) as pd_count from fleet1 where sub_cat_id=$subcat_id";

            $sql_cat_count=$conn->query($sql_cct);

            $row_cat_count=mysqli_fetch_assoc($sql_cat_count);

        ?>

        <h2>Total <span class="p_count"><?= $row_cat_count['pd_count'];?></span> Products Found in <?= $row['name'];?>.</h2>

    </div>

    <div class="product-grid nop7SpikesAjaxFiltersGrid ajaxBusyPanelParent" style="position: relative;">

        <div class="item-grid">

            <?php

                $sql_cat_count=$conn->query("select * from fleet1 where sub_cat_id=$subcat_id");

                while($row_cat_count=mysqli_fetch_array($sql_cat_count))

                {

                    $currnet_date = date('Y-m-d');

                    $image_new = $row_cat_count['date'];

                    $image_new = date('Y-m-d', strtotime($image_new. ' + 7 days'));

            ?>

            <div class="item-box">

                <div data-productid="998">

                    <div class="picture">

                        <a href="<?= $urlset;?>productdetail/<?= $row_cat_count['metatitle'];?>" title="<?= $row_cat_count['product_name'];?>">

                            <img alt="<?= $row_cat_count['product_name'];?>" src="<?= $urlset;?>admin/uploads/products/<?= $row_cat_count['image1'];?>" title="<?= $row_cat_count['product_name'];?>" style="height: 220px;">

                        </a>

                        <?php

                            if($image_new>=$currnet_date)

                            {

                        ?>

                        <div class="smallimg">

                            <a title="<?= $row_cat_count['product_name'];?>">

                                <img src="<?= $urlset;?>Themes/vijayalakshmi/Content/images/new.png">             

                            </a>

                        </div>

                        <?php

                            }

                        ?>

                    </div>

                    <div class="details">

                        <h2 class="product-title">

                            <a class="Product_Name" href="<?= $urlset;?>productdetail/<?= $row_cat_count['metatitle'];?>"><?= $row_cat_count['product_name'];?></a>

                        </h2>

                        <div class="add-info">

                            

                            <div class="prices">

                                <span class="price-actual-price">Rs <?= $row_cat_count['price'];?></span>

                            </div>

                            

                            <div class="buttons">

                                <a href="<?= $urlset;?>productdetail/<?= $row_cat_count['metatitle'];?>">

                                    <button class="shop">Shop Now</button>

                                </a>

                            </div>

                            

                        </div>

                    </div>

                </div>

            </div>

            <?php

                }

            ?>

        </div>

    </div>

</div>

<div class="clr"></div>

    <div class="category-page-product-grid inner-flex">

        <div class="item-grid">

            <div class="category-title">

                <h3>You May Like this product also</h3>

            </div>

            <div class="nbs-flexisel-container">

                <div class="nbs-flexisel-inner">

                    <ul id="flexiselDemo4" class="nbs-flexisel-ul" style="left: -3593.4px;">

                    <?php

                        $sql_cat_count=$conn->query("select * from fleet1 where sub_cat_id=$subcat_id order by id desc");

                        while($row_cat_count=mysqli_fetch_array($sql_cat_count))

                        {

                    ?>

                        <li class="nbs-flexisel-item" style="width: 239.6px;">

                            <div data-productid="576">

                                <div class="picture flex">

                                    <a href="<?= $urlset;?>productdetail/<?= $row_cat_count['metatitle'];?>" title="<?= $row_cat_count['product_name'];?>">

                                        <img alt="<?= $row_cat_count['product_name'];?>" src="<?= $urlset;?>admin/uploads/products/<?= $row_cat_count['image1'];?>" title="<?= $row_cat_count['product_name'];?>" style="width:auto;height:200px;">

                                    </a>

                                </div>

                                <div class="details">

                                    <h2 class="product-title">

                                        <a class="Product_Name" href="<?= $urlset;?>productdetail/<?= $row_cat_count['metatitle'];?>"><?= $row_cat_count['product_name'];?></a>

                                    </h2>



                                    <div class="add-info">

                                        <div class="prices">

                                            <span class="price-actual-price">Rs <?= $row_cat_count['price'];?></span>

                                        </div>

                                        

                                        <div class="buttons">

                                            <a href="<?= $urlset;?>productdetail/<?= $row_cat_count['metatitle'];?>">

                                                <button type="button" value="Shop Now" class="shop">Shop Now</button>

                                            </a>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </li>

                    <?php

                        }

                    ?>

                    </ul>

                <div class="nbs-flexisel-nav-left"></div>

                <div class="nbs-flexisel-nav-right"></div>

            </div>

        </div>

    </div>

</div>

<div class="clr"></div>

<?php

    }

    elseif($cat_id)

    {

?>

<div class="center1">

    <h3><?= $row1['name'];?></h3>

    <div class="products">

        <?php

            $sql_cct = "select count(id) as pd_count from fleet1 where cat_id=$cat_id";

            $sql_cat_count=$conn->query($sql_cct);

            $row_cat_count=mysqli_fetch_assoc($sql_cat_count);

        ?>

        <h2>Total <span class="p_count"><?= $row_cat_count['pd_count'];?></span> Products Found in <?= $row1['name'];?>.</h2>

    </div>

    <div class="product-grid nop7SpikesAjaxFiltersGrid ajaxBusyPanelParent" style="position: relative;">

        <div class="item-grid">

            <?php

                $sql_cat_count=$conn->query("select * from fleet1 where cat_id=$cat_id");

                while($row_cat_count=mysqli_fetch_array($sql_cat_count))

                {

                    $currnet_date = date('Y-m-d');

                    $image_new = $row_cat_count['date'];

                    $image_new = date('Y-m-d', strtotime($image_new. ' + 7 days'));

            ?>

            <div class="item-box">

                <div data-productid="998">

                    <div class="picture">

                        <a href="<?= $urlset;?>productdetail/<?= $row_cat_count['metatitle'];?>" title="<?= $row_cat_count['product_name'];?>">

                            <img alt="<?= $row_cat_count['product_name'];?>" src="<?= $urlset;?>admin/uploads/products/<?= $row_cat_count['image1'];?>" title="<?= $row_cat_count['product_name'];?>" style="height: 220px;">

                        </a>

                        <?php

                            if($image_new>=$currnet_date)

                            {

                        ?>

                        <div class="smallimg">

                            <a title="<?= $row_cat_count['product_name'];?>">

                                <img src="<?= $urlset;?>Themes/vijayalakshmi/Content/images/new.png">             

                            </a>

                        </div>

                        <?php

                            }

                        ?>

                    </div>

                    <div class="details">

                        <h2 class="product-title">

                            <a class="Product_Name" href="<?= $urlset;?>productdetail/<?= $row_cat_count['metatitle'];?>"><?= $row_cat_count['product_name'];?></a>

                        </h2>

                        <div class="add-info">

                            

                            <div class="prices">

                                <span class="price-actual-price">Rs <?= $row_cat_count['price'];?></span>

                            </div>

                            

                            <div class="buttons">

                                <a href="<?= $urlset;?>productdetail/<?= $row_cat_count['metatitle'];?>">

                                    <button class="shop">Shop Now</button>

                                </a>

                            </div>

                            

                        </div>

                    </div>

                </div>

            </div>

            <?php

                }

            ?>

        </div>

    </div>

</div>

<div class="clr"></div>

    <div class="category-page-product-grid inner-flex">

        <div class="item-grid">

            <div class="category-title">

                <h3>You May Like this product also</h3>

            </div>

            <div class="nbs-flexisel-container">

                <div class="nbs-flexisel-inner">

                    <ul id="flexiselDemo4" class="nbs-flexisel-ul" style="left: -3593.4px;">

                    <?php

                        $sql_cat_count=$conn->query("select * from fleet1 where cat_id=$cat_id order by id desc");

                        while($row_cat_count=mysqli_fetch_array($sql_cat_count))

                        {

                    ?>

                        <li class="nbs-flexisel-item" style="width: 239.6px;">

                            <div data-productid="576">

                                <div class="picture flex">

                                    <a href="<?= $urlset;?>productdetail/<?= $row_cat_count['metatitle'];?>" title="<?= $row_cat_count['product_name'];?>">

                                        <img alt="<?= $row_cat_count['product_name'];?>" src="<?= $urlset;?>admin/uploads/products/<?= $row_cat_count['image1'];?>" title="<?= $row_cat_count['product_name'];?>" style="height:200px">

                                    </a>

                                </div>

                                <div class="details">

                                    <h2 class="product-title">

                                        <a class="Product_Name" href="<?= $urlset;?>productdetail/<?= $row_cat_count['metatitle'];?>"><?= $row_cat_count['product_name'];?></a>

                                    </h2>



                                    <div class="add-info">

                                        <div class="prices">

                                            <span class="price-actual-price">Rs <?= $row_cat_count['price'];?></span>

                                        </div>

                                        

                                        <div class="buttons">

                                            <a href="<?= $urlset;?>productdetail/<?= $row_cat_count['metatitle'];?>">

                                                <button type="button" value="Shop Now" class="shop">Shop Now</button>

                                            </a>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </li>

                    <?php

                        }

                    ?>

                    </ul>

                <div class="nbs-flexisel-nav-left"></div>

                <div class="nbs-flexisel-nav-right"></div>

            </div>

        </div>

    </div>

</div>

<div class="clr"></div>

<?php

    }

?>

</div>

<?php include('footer.php');?>