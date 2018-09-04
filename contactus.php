<?php include('urlset.php');?>
    <title>Jewel Fab Art | Contact Us</title>
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
    <meta name="description" content="Contact Us" />
<?php include('header.php');?>
<style>

    hr{margin-top: 0px;}
    .form-control:focus{border-color:red!important;}

</style>

<hr>
<link href="<?= $urlset;?>Themes/vijayalakshmi/Content/css/contact-style.css" rel="stylesheet">

<div class="master-wrapper-content">

    <div class="breadcrumb">

        <ul>

            <li><a href="<?= $urlset;?>" title="Home">

                <img src="<?= $urlset;?>Themes/vijayalakshmi/Content/images/home.png" alt="homeicon" class="breadimg">

                Home</a><span class="delimiter">/</span></li>

            <li><a title="New Arrivals">Contact Us </a></li>

        </ul>

    </div>

    <div class="heading">

        <h3>Contact Us</h3>

        <h3></h3>

        <div class="line"></div>

    </div>

    <div class="master-column-wrapper">

        <div id="sidecommon">

            <h3>About Jewel Fab Art</h3>

            <ul>

                <?php

                    $sql=$conn->query("select * from aboutus limit 1,10");

                    while($row=mysqli_fetch_array($sql))

                    {

                    $name = $row['name'];

                    $metatitle=preg_replace('/[^A-Za-z0-9\-]/', '-', $name);

                ?>

                <li id="<?= $row['id'];?>">

                    <a href="<?= $urlset;?>aboutus/<?= $metatitle;?>" id="1_<?= $row['id'];?>"><?= $name;?></a>

                </li>

                <?php

                    }

                ?>

            </ul>

        </div>

        <div id="contact-us-rgt">
            <div id="contact-box-main">
                <div class="contact-boxs">
                    <h2>Jewel Fab Art Office</h2>
                    <?php
                        $sql1=$conn->query("select * from text");
                        $row1=mysqli_fetch_array($sql1);

                        $phone = $row1['phone'];
                        $phone = explode(',',$phone);
                    ?>
                    <span><?= $row1['address']; ?></span>
                </div>
                <div class="contact-boxs">
                    <h2>Business Enquiry</h2>
                    <p><i class="fa fa-phone" aria-hidden="true"></i> <?= $phone[0];?></p>
                    <p><a href="mailto:abhishekcg@vijayalakshmisilks.com"><i class="fa fa-location-arrow" aria-hidden="true"></i> 
                        <?= $row1['email']; ?></a>
                    </p>
                </div>
                <div style="clear:both"></div>
            </div>

            <div class="contact-btm-main">
                <div id="form-contact">
                    <h2>Contact Us</h2>
                    
                    <form action="<?= $urlset;?>contact_mail" method="post" >
                       
                        <div class="fieldset">
                            <div class="form-fields">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 padd">
                                    <div class="form-group">
                                        <label for="FullName">Your Name</label>    
                                        <span class="required">*</span>
                                        <input class="form-control" class="Name" name="name" placeholder="Enter your name" type="text" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 padd">
                                    <div class="form-group">
                                        <label for="Email">Your Email</label>  
                                        <span class="required">*</span>
                                        <input class="form-control" class="Email" name="email" placeholder="Enter your email address" type="email" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 padd">
                                    <div class="form-group">
                                        <label for="Phone">Your Phone</label>    
                                        <span class="required">*</span>
                                        <input class="form-control" class="Phone" name="phone" placeholder="Enter your phone" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 padd">
                                    <div class="form-group">
                                        <label for="City">Your City</label>  
                                        <span class="required">*</span>
                                        <input class="form-control" class="City" name="city" placeholder="Enter your city" type="text" required>
                                    </div>
                                </div>                                
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 padd">
                                    <div class="form-group">
                                        <label for="City">Your Country</label>  
                                        <span class="required">*</span>
                                        <input class="form-control" class="Country" name="country" placeholder="Enter your country" type="text" required>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padd">
                                    <div class="form-group">
                                        <label for="Message">Message</label>
                                        <textarea class="form-control" cols="20" class="Message" name="message" placeholder="Enter your message" rows="2"></textarea>
                                    </div>
                                </div>
                                <div id="imgdiv" class="col-lg-3 col-md-3 col-sm-3 col-xs-12 padd">
                                    <img id="img" src="captcha.php" style="height: 46px;width: 100%;">
                                    <!-- <img id="reload" src="reload.png"> -->
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 padd">
                                    <input type="text" name="captcha" id="captcha" placeholder="Enter Image Text" class="form-control "pattern=".{6,}" required title="6 characters">
                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12  padd" style="margin-top: 20px!important;">
                                    <div class="form-group">
                                        <button type="submit" class="submit-btn">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </form>                        
                    <div style="clear:both"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php');?>