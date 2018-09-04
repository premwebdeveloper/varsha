<?php include('urlset.php');
    if(isset($_POST['jewel']))

    {

        $p = $_POST['jewel'];

        $sql = "SELECT `fleet1`.*, `fleets`.`name` as `cat_name`, `fleet`.`name` as `subcat_name` FROM `fleet1` left JOIN `fleets` ON `fleets`.`id` = `fleet1`.`cat_id` left JOIN `fleet` ON `fleet`.`id` = `fleet1`.`sub_cat_id` WHERE (`fleet1`.`product_name` LIKE '%".$p."%') OR (`fleets`.`name` LIKE '%".$p."%') OR (`fleet`.`name` LIKE '%".$p."%')";

        $result = $conn->query($sql);

        $row = $result->fetch_array();

        $cat_id = $row['cat_id'];

    }
?>
    <title>Jewel Feb Art | <?= $row['product_name'];?></title>
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
    <meta name="description" content="<?= $row['product_name'];?>" />
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

        min-height: 280px!important;

    }

</style>

<script>

    $(document).ready(function(){

        $("#<?= $row['cat_id'];?>").addClass('active last');

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

            <strong class="current-item"><?= $row['cat_name'];?></strong>

            <span class="delimiter">/</span>

        </li>        

        <li>

            <strong class="current-item"><?= $row['subcat_name'];?></strong>

            <span class="delimiter">/</span>

        </li>         

        <li>

            <strong class="current-item"><?= $row['product_name'];?></strong>

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



<div class="center1">

    <div class="product-grid nop7SpikesAjaxFiltersGrid ajaxBusyPanelParent" style="position: relative;">

        <div class="item-grid">

            <?php 

                if(isset($_POST['jewel']))

                {

                    $p = $_POST['jewel'];

                    

                    $sql = "SELECT `fleet1`.*, `fleets`.`name` as `cat_name`, `fleet`.`name` as `subcat_name` FROM `fleet1` left JOIN `fleets` ON `fleets`.`id` = `fleet1`.`cat_id` left JOIN `fleet` ON `fleet`.`id` = `fleet1`.`sub_cat_id` WHERE (`fleet1`.`product_name` LIKE '%".$p."%') OR (`fleets`.`name` LIKE '%".$p."%') OR (`fleet`.`name` LIKE '%".$p."%')";

                    $result = $conn->query($sql);

                    if($result->num_rows>0)

                    {

                        while($row_cat_count = $result->fetch_array())

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

                    }

                }

            ?>

        </div>

    </div>

</div>

<div class="clr"></div>

</div>

<?php include('footer.php');?>