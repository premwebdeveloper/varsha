<?php include('urlset.php');

    $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $actual_link1 = explode("/", $actual_link);

    $meta=$actual_link1[5];;

    $sql_pd=$conn->query("select * from fleet1 where metatitle='$meta'");

    $row_pd=mysqli_fetch_array($sql_pd);    



    $cat_id = $row_pd['cat_id'];

    $subcat_id = $row_pd['sub_cat_id'];



    $sql=$conn->query("select * from fleet where id='$subcat_id'");

    $row=mysqli_fetch_array($sql);



    $sql1=$conn->query("select * from fleets where id='$cat_id'");

    $row1=mysqli_fetch_array($sql1);


    $date = date('Y-m-d');

?>

    <title><?= $row_pd['title'];?></title>
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
    <meta name="description" content="<?= $row_pd['meta_description'];?>" />
<?php include('header.php');?>
<hr>

<style>

    .shop{

        float:none;

    }

    hr{

        margin-top: 0px;

    }

    p.saree-cnt{

        margin: 0px 0px 10px 0px!important;

    }    

    p.saree-cnt > span{

        font-weight: bold;

    }

    .product-price span{

        margin-top: 0px;

    }

    .prd-interrate{

        border-top: none;

        margin: 0px 0 0 0;

    }

</style>

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

                <span class="delimiter">/</span>

            </li>            

            <li>

                <strong class="current-item"><?= $row_pd['product_name'];?></strong>

            </li>

        </ul>

    </div>
 

    <div itemscope itemtype="http://schema.org/Product" data-productid="760">

        <div class="side1blouse ">

            

            <link href="<?= $urlset;?>Themes/vijayalakshmi/Content/js/xzoom.css" rel="stylesheet" />

            <script src="<?= $urlset;?>Themes/vijayalakshmi/Content/js/xzoom.min.js"></script>

            <script src="<?= $urlset;?>Themes/vijayalakshmi/Content/js/setup.js"></script>

            <style>

                img.xzoom {width: 100%!important;}

            </style>

            <div class="xzoom-container">

                <img  class="xzoom" id="xzoom-default" src="<?= $urlset;?>admin/uploads/products/<?= $row_pd['image1'];?>"  alt="<?= $row_pd['product_name'];?>"  title="<?= $row_pd['product_name'];?>"/>

                <div class="xzoom-thumbs">

                    <a href="<?= $urlset;?>admin/uploads/products/<?= $row_pd['image1'];?>">

                        <img class="xzoom-gallery" src="<?= $urlset;?>admin/uploads/products/<?= $row_pd['image1'];?>" width="80" alt="<?= $row_pd['product_name'];?>" />

                    </a>  

                    <?php

                        if($row_pd['image2'])

                        {

                    ?>                    

                    <a href="<?= $urlset;?>admin/uploads/products/<?= $row_pd['image2'];?>">

                        <img class="xzoom-gallery" src="<?= $urlset;?>admin/uploads/products/<?= $row_pd['image2'];?>" width="80" alt="<?= $row_pd['product_name'];?>" />

                    </a>

                    <?php

                        }

                        if($row_pd['image3'])

                        {

                    ?> 

                    <a href="<?= $urlset;?>admin/uploads/products/<?= $row_pd['image3'];?>">

                        <img class="xzoom-gallery" src="<?= $urlset;?>admin/uploads/products/<?= $row_pd['image3'];?>" width="80" alt="<?= $row_pd['product_name'];?>" />

                    </a> 

                    <?php

                        }

                        if($row_pd['image4'])

                        {

                    ?>                    

                    <a href="<?= $urlset;?>admin/uploads/products/<?= $row_pd['image4'];?>">

                        <img class="xzoom-gallery" src="<?= $urlset;?>admin/uploads/products/<?= $row_pd['image4'];?>" width="80" alt="<?= $row_pd['product_name'];?>" />

                    </a>  

                    <?php

                        }

                    ?> 

                </div>

            </div>



        </div>

        

        <div class="detailcenter">

            

            <h3 class="detail1-h3">

                <span class="prd-hd-cntn"><?= $row_pd['product_name'];?>

            </h3>



            <div class="slid-stock">

                <div class="prd-avb-shr">

                    <p class="avail-det">

                        <span>Availability:</span>

                        <span id="stock-availability-value-760">In stock</span>    

                    </p>

                    <div class="product-price">

                        <span itemprop="price" content="202.28" class="price-value-760">

                            <i class="fa fa-inr" style="color: #000;""></i> <?= $row_pd['price'];?>

                        </span>

                    </div>

                </div>



                <div class="col-md-7 stck-1 size">



                    <div class="clr"></div>

                    <p class="saree-cnt">Length : <span><?= $row_pd['length'];?> </span></p>



                    <div class="clr"></div>

                    <p class="saree-cnt">Width  : <span><?= $row_pd['width'];?> </span></p>



                    <div class="clr"></div>

                    <p class="saree-cnt">Color  : <span><?= $row_pd['color'];?> </span></p>



                    <div class="clr"></div>

                    <p class="saree-cnt">Fabric  : <span><?= $row_pd['fabric'];?> </span></p>



                    <div class="clr"></div>

                    <p class="saree-cnt">Weight  : <span><?= $row_pd['weight'];?> </span></p>

                    

                </div>

                <div class="col-md-5 stck-1 size" style="margin-top: 50px;">

                    <a href="http://facebook.com/" target="_blank">

                        <i class="fa fa-facebook" style="background: #3b5998;padding: 10px;"></i>

                    </a>

                    <a href="http://twitter.com/" target="_blank">

                        <i class="fa fa-twitter" style="background: #1DA1F2;padding: 10px;"></i>

                    </a>                   

                    <a href="http://instagram.com/" target="_blank">

                        <i class="fa fa-instagram" style="background: #262626;padding: 10px;"></i>

                    </a>                    

                    <a href="http://plus-google.com/" target="_blank">

                        <i class="fa fa-google-plus" style="background: #DB4437;padding: 10px;"></i>

                    </a>

                </div>

            </div>

            <div class="addlst-det">



                <div class="col-md-4 ship prd-Button">

                    <p class="saree-cnt">

                        <span class="img-time"></span>

                        <a href="javascript:;" style="color: #000;"><span>Time to ship:<b> 7 day(s)</b></span></a>

                        <br>

                    </p>

                </div>



                <div class="col-md-4 prd-Button">

                    <p class="saree-cnt">

                        <span class="imghglt-enq"></span>

                        <a href="#Enquiry" data-toggle="modal" style="color: #000;">Send Enquiry</a>

                    </p>

                </div>
                
               <div class="col-md-4 prd-Button">

                 <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                <input type="hidden" name="cmd" value="_s-xclick">
                <input type="hidden" name="hosted_button_id" value="ZQBA7RXZXFY2N">
                <input type="image" src="https://www.paypalobjects.com/en_GB/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal – The safer, easier way to pay online!">
                <img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
            </form>

                </div>

            </div>

            <div class="prd-interrate">

                <a href="#" class="inter-rate" data-toggle="modal" data-target="#myModal-rate" style="float: left;">

                    <span class="inter-icn"></span>International Shipping costs will be calculated as per the shipping location.  Click here to view the shipping rates.

                    

                </a>

            </div>

        </div>

   <div class="clr"></div>

        <script type="text/javascript">

            YUI({

                modules: {

                    'gallery-slideshow-base': {

                        fullpath: 'gallery-slideshow-base-debug.js',

                        requires: ['node', 'event', 'widget']

                    },

                    'gallery-slideshow-animated': {

                        fullpath: 'gallery-slideshow-animated-debug.js',

                        requires: ['anim', 'gallery-slideshow-base']

                    }

                }

            }).use("gallery-slideshow-animated", function (Y) {

                Y.SlideshowAnimated.auto();

            });

        </script>

        <script type="text/javascript">

            $(document).ready(function () {

                $('ul.tabs li').click(function () {

                    var tab_id = $(this).attr('data-tab');

                    $('ul.tabs li').removeClass('current');

                    $('.tab-content').removeClass('current');

                    $(this).addClass('current');

                    $("#" + tab_id).addClass('current');

                })

            })

        </script>

        <div class="resourcemain">

            <ul class="tabs">

                <li class=" current" data-tab="tab-1">Description</li>

             </ul>

            <div class="clr"></div>

            <div id="tab-1" class="tab-content current">

                

                <?= $row_pd['description'];?>



                <div class="clr"></div>

            </div>            

        </div>

        <div class="clr"></div>

    </div>

</div>

<style>

    .footer-lower-right-nop {float: left;width: 15%;font: 12px/1.8 pt_sansregular;color: #575757;}

    @media screen and (max-width: 1199px){

        .footer-lower-right-nop { width:100%;

        }}

</style>

<div class="clr"></div>

<!-- Modal -->

<div id="Enquiry" class="modal fade" role="dialog">

    <div class="modal-dialog">

        <!-- Modal content-->

        <div class="modal-content">

            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal">&times;</button>

                <h4 class="modal-title text-center">Enquiry related to <span style="color: #b91f77;">"<?= $row_pd['product_name'];?>"</span></h4>

            </div>

            

                <div class="reg-accnt">

                    <form action="" method="post">                        

                        <p>

                            <label class="lgn-lbl" style="text-align: start">Your Name </label>

                            <br>

                            <input class="txt-fld-lgn" name="FullName" placeholder="Enter your name" type="text" value="" required>

                        </p>

                        <p>

                            <label class="lgn-lbl" style="text-align: start">Your email </label>

                            <br>

                            <input class="txt-fld-lgn" name="Email" placeholder="Enter your email" type="email" value="" required>

                        </p>                        

                        <p>

                            <label class="lgn-lbl" style="text-align: start">Your phone </label>

                            <br>

                            <input class="txt-fld-lgn" name="Phone" placeholder="Enter your Phone No." type="text" value="" required>

                        </p>

                        <p>

                            <label class="lgn-lbl" style="text-align: start">Subject</label>

                            <br>

                            <input class="txt-fld-lgn" name="Subject" placeholder="Enter your Subject" type="text" value="Enquiry related to <?= $row_pd['product_name'];?>" readonly>

                        </p>

                        <p>

                            <label class="lgn-lbl" style="text-align: start">Enquiry </label>

                            <br>

                            <textarea class="txt-fld-lgn" cols="20" id="Enquiry" name="Enquiry" placeholder="Enter your Message" rows="2"></textarea>

                        </p>

                        <p style="width: 114px;">

                            <input type="submit" name="submit" class="lgn-btn" value="Submit">

                        </p>

                    </form>                

                </div>

            

            <div class="modal-footer">

                <button type="button" class="btn btn-default" data-dismiss="modal" style="display:none;">Close</button>

            </div>

        </div>

    </div>

</div>

<?php include('footer.php');?>