    <meta name="generator" content="nopCommerce" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script src="<?= $urlset;?>Themes/vijayalakshmi/Content/js/jquery-1.11.1.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"> 
    <script type="text/javascript">
        jQuery(document).ready(function () {
            $(".toggle-nav4").click(function () {
                $(this).find(".dropdown-menu").toggle("fast");
                jQuery(".dropdown-menu2").slideUp("fast");
            });
        });
        jQuery(document).on("click", function (event) {
            var $trigger = $(".toggle-nav4");
            if ($trigger !== event.target && !$trigger.has(event.target).length) {
                jQuery(".dropdown-menu").slideUp("fast");
            }
        });
        jQuery(document).ready(function () {
            // Show hide popover
            $(".toggle-nav5").click(function () {
                $(this).find(".dropdown-menu1").toggle("fast");
                $(".dropdown-menu2").slideUp("fast");
            });
        });
        $(document).on("click", function (event) {
            var $trigger = $(".toggle-nav5");
            if ($trigger !== event.target && !$trigger.has(event.target).length) {
                $(".dropdown-menu1").slideUp("fast");
            }
        });
        $(document).ready(function () {
            // Show hide popover
            $(".toggle-nav6").click(function () {
                $(".dropdown-menu2").toggle("fast");
            });
        });
        $(document).ready(function () {
            $("#navbtn").click(function () {
                $(".dropdown-menu").slideUp("fast");
                $(".dropdown-menu1").slideUp("fast");
                $(".dropdown-menu2").slideUp("fast");
            });
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function () {
            var _scroll = true, _timer = false, _floatbox = $("#contact_form"), _floatbox_opener = $(".contact-opener");
            _floatbox.css("right", "-207px"); //initial contact form position
            //Contact form Opener button
            _floatbox_opener.click(function () {
                if (_floatbox.hasClass('visiable')) {
                    _floatbox.animate({ "right": "-207px" }, { duration: 300 }).removeClass('visiable');
                } else {
                    _floatbox.animate({ "right": "0px" }, { duration: 300 }).addClass('visiable');
                }
            });
            //Effect on Scroll
            $(window).load(function () {
                if (_scroll) {
                    _floatbox.animate({ "top": "30px" }, { duration: 300 });
                    _scroll = false;
                }
                if (_timer !== false) { clearTimeout(_timer); }
                _timer = setTimeout(function () {
                    _scroll = true;
                    _floatbox.animate({ "top": "170px" }, { easing: "linear" }, { duration: 500 });
                }, 400);
            });
        });
    </script>
    <script>
        $(function () {
            $("#navbtn").click(function () {
                $("#res_links").slideToggle('200', "swing", function () {                    // Animation complete.
                });
            });
            $('#resp_nav').click(function (e) {
                e.stopPropagation();
            });
            $('html').click(function () {
                $('#res_links').slideUp('fast');
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.menu-toggle').click(function () {
                $(this).siblings('.top-menu').slideToggle('slow');
            });
            $('.top-menu .sublist-toggle').click(function () {
                $(this).siblings('.sublist').slideToggle('slow');
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.has-children > li').bind('mouseover', openSubMenu);
            $('.has-children > li').bind('mouseout', closeSubMenu);
            function openSubMenu() {
                $(this).find('ul').css('visibility', 'visible');
            };
            function closeSubMenu() {
                $(this).find('ul').css('visibility', 'hidden');
            };
        });
    </script>
    <script>
        $(document).ready(function () {
            $("#sub_menu > li > div").on("click", function (e) {
                if ($(this).parent().has("ul")) {
                    e.preventDefault();
                }
                function closeSubMenu() {
                    $(this).find('ul').css('visibility', 'hidden');
                };
                if (!$(this).hasClass("open")) {
                    // hide any open menus and remove all other classes
                    $("#sub_menu li ul").slideUp(350);
                    $("#sub_menu li a").removeClass("open");
                    // open our new menu and add the open class
                    $(this).next("ul").slideDown(350);
                    $(this).addClass("open");
                }
                else if ($(this).hasClass("open")) {
                    $(this).removeClass("open");
                    $(this).next("ul").slideUp(350);
                }
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.menu-toggle1').click(function () {
                $(this).siblings('.filterby').slideToggle('slow');
            });
            $('.filterby .sublist-toggle').click(function () {
                $(this).siblings('.category-sublist').slideToggle('slow');
            });
        });
    </script>
    <script type="text/javascript">
        jQuery(document).ready(function () {
            jQuery("#flexiselDemo3").flexisel({
                visibleItems: 4,
                itemsToScroll: 1,
                autoPlay: {
                    enable: true,
                    interval: 5000,
                    pauseOnHover: true
                },
                loaded: function () { }
            });
        });
    </script>
    <script type="text/javascript">
        jQuery(document).ready(function () {
            jQuery("#flexiselDemo4").flexisel({
                visibleItems: 5,
                itemsToScroll: 1,
                autoPlay: {
                    enable: true,
                    interval: 5000,
                    pauseOnHover: true
                }
            });
        });
    </script>
<link href="<?= $urlset;?><?= $urlset;?>Themes/vijayalakshmi/Content/css/bootstrap-select.html" rel="stylesheet" type="text/css" />
<link href="<?= $urlset;?><?= $urlset;?>Themes/vijayalakshmi/Content/js/gallery-slideshow-animated.js" rel="stylesheet" type="text/css" />
<link href="<?= $urlset;?><?= $urlset;?>Themes/vijayalakshmi/Content/js/gallery-slideshow-base.js" rel="stylesheet" type="text/css" />
<link href="<?= $urlset;?><?= $urlset;?>Themes/vijayalakshmi/Content/css/slick.css" rel="stylesheet" type="text/css" />
<link href="<?= $urlset;?>Content/jquery-ui-<?= $urlset;?>Themes/smoothness/jquery-ui-1.10.3.custom.min.css" rel="stylesheet" type="text/css" />
<link href="<?= $urlset;?>Themes/vijayalakshmi/Content/css/bootstrap-select.min.css" rel="stylesheet" type="text/css" />
<link href="<?= $urlset;?>Themes/vijayalakshmi/Content/css/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css" />
<link href="<?= $urlset;?>Themes/vijayalakshmi/Content/css/reset.css" rel="stylesheet" type="text/css" />
<link href="<?= $urlset;?>Themes/vijayalakshmi/Content/css/pygments.css" rel="stylesheet" type="text/css" />
<link href="<?= $urlset;?>Themes/vijayalakshmi/Content/css/jquery-ui.css" rel="stylesheet" type="text/css" />
<link href="<?= $urlset;?>Themes/vijayalakshmi/Content/css/jquery-ui-1.10.3.custom.min.css" rel="stylesheet" type="text/css" />
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="<?= $urlset;?>Themes/vijayalakshmi/Content/css/easyzoom.css" rel="stylesheet" type="text/css" />
<link href="<?= $urlset;?>Themes/vijayalakshmi/Content/css/default.css" rel="stylesheet" type="text/css" />
<link href="<?= $urlset;?>Themes/vijayalakshmi/Content/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="<?= $urlset;?>Themes/vijayalakshmi/Content/css/addAccordion.css" rel="stylesheet" type="text/css" />
<link href="<?= $urlset;?>Themes/vijayalakshmi/Content/css/style.css" rel="stylesheet" type="text/css" />
<link href="<?= $urlset;?>Themes/vijayalakshmi/Content/css/responsive.css" rel="stylesheet" type="text/css" />
<link href="<?= $urlset;?>Themes/vijayalakshmi/Content/css/media-query.css" rel="stylesheet" type="text/css" />
<link href="<?= $urlset;?>Content/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css" />


<script src="<?= $urlset;?>Scripts/jquery-1.10.2.min.js" type="text/javascript"></script>

<script src="<?= $urlset;?>Scripts/jquery.validate.unobtrusive.min.js" type="text/javascript"></script>
<script src="<?= $urlset;?>Scripts/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
<script src="<?= $urlset;?>Scripts/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
<script src="<?= $urlset;?>Scripts/public.common.js" type="text/javascript"></script>
<script src="<?= $urlset;?>Scripts/public.ajaxcart.js" type="text/javascript"></script>
<script src="<?= $urlset;?>Scripts/jquery.magnific-popup.min.js" type="text/javascript"></script>
<script src="<?= $urlset;?>Themes/vijayalakshmi/Content/js/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
<script src="<?= $urlset;?>Themes/vijayalakshmi/Content/js/jquery-ui.js" type="text/javascript"></script>
<script src="<?= $urlset;?>Themes/vijayalakshmi/Content/js/jquery.flexisel.js" type="text/javascript"></script>
<script src="<?= $urlset;?>Themes/vijayalakshmi/Content/js/jquery.gendereasydropdown.js" type="text/javascript"></script>
<script src="<?= $urlset;?>Themes/vijayalakshmi/Content/js/addAccordion.js" type="text/javascript"></script>
<script src="<?= $urlset;?>Themes/vijayalakshmi/Content/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?= $urlset;?>Themes/vijayalakshmi/Content/js/megamenu.js" type="text/javascript"></script>
<script src="<?= $urlset;?>Themes/vijayalakshmi/Content/js/modernizr.js" type="text/javascript"></script>
<script src="<?= $urlset;?>Themes/vijayalakshmi/Content/js/bootstrap-select.min.js" type="text/javascript"></script>
<script src="<?= $urlset;?>Scripts/view.contact.advanced.js" type="text/javascript"></script>
<script src="<?= $urlset;?>Themes/vijayalakshmi/Content/js/jquery.mCustomScrollbar.concat.min.js" type="text/javascript"></script>

    
<link rel="shortcut icon" href="<?= $urlset;?>img/favicon.png" />
    <meta name="p:domain_verify" content="1c9ae1b06dec4913c948a13fe94795b9" />
    <meta name="robots" content="noodp" />
    <link rel="canonical" href="<?= $urlset;?>"/>
    <style>
        .header-logo{
            padding: 0px 0px;
        }
        @media screen and (max-width: 384px){
            #res_links {
                width: 200px !important;
            }
        }
        @media screen and (max-width: 480px)
        {
            #res_links{
                width: 270px !important;
                z-index: 999;
                left: -120px;
            }
            .mobilesearch ul li ul.dropdown-menu2{
                left: -20px;
            }
            .picture img{
                width: 100%!important;
            }
            .arrow-adjust{
                padding: 0px 0px 0px !important;
            }
        }
    </style>
</head>

<body>

<div class="header" style="background: url('<?= $urlset;?>img/body_header.png');">
    <?php
        $sql1=$conn->query("select * from text");
        $row1=mysqli_fetch_array($sql1);

        $phone = $row1['phone'];
        $phone = explode(',',$phone);
    ?>
    <div class="header-upper">
    <div class="header-wrap">
        <div class="header-selectors-wrapper">
            <div class="header-selectors">
                <ul>
                    <li><a href="tel:<?= $phone[0];?>">
                        <img src="<?= $urlset;?>Themes/vijayalakshmi/Content/images/call.png" alt="cart" /><?= $phone[0];?> </a>
                    </li>
                    <li><a href="mailto:<?= $row1['email'];?>">
                        <img src="<?= $urlset;?>Themes/vijayalakshmi/Content/images/email.png" alt="cart" /><?= $row1['email'];?></a>
                    </li>

                </ul>
            </div>
        </div>

        <div class="header-links-wrapper">
            <div class="header-links">
              <div id="google_translate_element"></div>
              	<script type="text/javascript">
		function googleTranslateElementInit() {
		  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
		}
		</script>
		<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
            </div>
        </div>
        <div class="header-links-wrapper">
            <div class="header-links">
                <ul>
                   
                    <li><a href="http://www.facebook.com/jewelfabart" target="_blank" class="ico-login callhid"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="http://www.twitter.com/" target="_blank" class="ico-login callhid"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="http://www.instagram.com/jewelfabart/" target="_blank" class="ico-login"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="http://www.pinterest.com/jewelfabart/" target="_blank" class="ico-wishlist"><i class="fa fa-pinterest"></i></a></li>
                    
                </ul>
            </div>
        </div>
        <div class="clr"></div>
    </div>
</div>
<div class="clr mobile_hid"></div>
<div class="header-wrap">
    <div class="moblist">
        <div class="header-logo">
            
            <a href="<?= $urlset;?>">
                <img title="" alt="" src="<?= $urlset;?>img/logo.png">
            </a>

        </div>
        <div class="moblist-ryt">
            <ul>
                
                <li><a href="tel:<?= $phone[0];?>">
                    <img src="<?= $urlset;?>Themes/vijayalakshmi/Content/images/call.png" alt="cart" /> <?= $phone[0];?></a></li>
                <li><span>|</span></li>
                <li><a href="mailto:<?= $row1['email'];?>">
                    <img src="<?= $urlset;?>Themes/vijayalakshmi/Content/images/email.png" alt="cart" /> <?= $row1['email'];?></a></li>
            </ul>

        </div>
    </div>

    <div class="header-lower">
        <div class="header-logo">
            <a href="<?= $urlset;?>">
                <img title="Jewel Feb Art" alt="Jewel Fab Art" src="<?= $urlset;?>img/logo.png">
            </a>
        </div>

        <div class="header-lower-links" style="padding-top: 30px;">
            <div id="search">
                <div class="search-box">
                    <form action="<?= $urlset;?>search" id="small-search-box-form" method="post">   
                        <input type="text" class="search-box-text" id="small-searchterms" autocomplete="off" name="jewel" placeholder="Search product" />
                        <input type="submit" class="searchicon" value=" " />
                    </form>
                </div>
            </div>
        </div>

        <div class="header-lower-links" style="margin-right: 220px;">
            <div class="header-selectors">
                <img src="<?= $urlset;?>img/326.png" class="img-responsive" style="height: 100px;">
            </div>
        </div>
    </div>
</div>
<div class="clr"></div>
<div class="mobilenav">
    <div class="mobilesearch">
        <ul>
            <li><a class="toggle-nav6" style="color: #5C1671">
                <button class="buttonsearch">Search</button></a>
                <ul class="dropdown-menu2">
                    <li>
                        <div class="col-lg-6">
                            <div class="input-group">
                                <form action="<?= $urlset;?>search" id="small-search-box-form" method="post">    
                                    <input type="text" class="search-box-text" id="small-searchterms" name="jewel" placeholder="Search product" />
                                    <input type="submit" class="searchicon" value=" " />
                                </form>
                            </div>
                        </div>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <div class="mobilemenu">
    <div id="resp_nav">
    <div id="navbtn"></div>
         
    <script src="<?= $urlset;?>Themes/vijayalakshmi/Content/js/index-drop-script.js"></script>
        <div id="res_links">
            <ul id="sub_menu">
                <?php
                    $sql=$conn->query("select * from fleets");
                    while($row=mysqli_fetch_array($sql))
                    {
                        $subid = $row['id'];
                ?>      
                <li>
                    <a href="<?= $urlset;?>product/<?= $row['metatitle'];?>"> 
                        <span class="menupad"><?= $row['name'];?></span>
                        <img src="<?= $urlset;?>Themes/vijayalakshmi/Content/images/toggle-black.png" class="mobile-sublist-toggle" />
                    </a>                    
                    <ul class="mobsublist" style="display: none;">
                        <?php
                            $sql1=$conn->query("select * from fleet where fl_id='$subid'");
                            while($row1=mysqli_fetch_array($sql1))
                            {
                        ?>
                        <li>
                            <a href="<?= $urlset;?>product/<?= $row1['metatitle'];?>">
                                <span class="menupad"><?= $row1['name'];?></span>
                            </a>        
                        </li>
                        <?php
                            }
                        ?>
                    </ul>

                </li>
                <?php
                    }
                ?>
      		<li>
                    <a href="<?= $urlset;?>contactus"> 
                        <span class="menupad">Contact Us</span>
                        <img src="<?= $urlset;?>Themes/vijayalakshmi/Content/images/toggle-black.png" class="mobile-sublist-toggle" />
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="clr"></div>
    <div class="menu-toggle">Menu</div>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.menu-toggle').click(function () {
                $(this).siblings('.top-menu.mobile').slideToggle('slow');
            });
            $('.top-menu.mobile .sublist-toggle').click(function () {
                $(this).siblings('.sublist').slideToggle('slow');
            });
        });
    </script>


</div>

<script type="text/javascript">
    function AddUpPlumb5Events() { Plumb5AddEvent() } var P5FormData = { eventType: ['click', 'mouseover'], ButtonTag: 'input[type="submit"]', FormId: 21, Fields: [6], Mandatory: [true], FormType: 12, FieldsList: ['#small-searchterms'], isStaticCalled: !1 }, P5FormDatalist; "undefined" == typeof P5FormDatalist ? (P5FormDatalist = new Array, P5FormDatalist.push(P5FormData)) : P5FormDatalist.push(P5FormData)
</script>
</div>

<div class="header-menu">
    <ul class="top-menu">
        <?php
            $sql=$conn->query("select * from fleets");
            while($row=mysqli_fetch_array($sql))
            {
                $subid = $row['id'];
        ?>
        <li>
            <a href="<?= $urlset;?>product/<?= $row['metatitle'];?>"><?= $row['name'];?></a> 
            <div class="sublist-toggle"></div>
            <ul class="sublist first-level">
                <?php
                    $sql1=$conn->query("select * from fleet where fl_id='$subid'");
                    while($row1=mysqli_fetch_array($sql1))
                    {
                ?>
                    <li>
                        <a href="<?= $urlset;?>product/<?= $row1['metatitle'];?>"><?= $row1['name'];?></a>        
                    </li>
                <?php
                    }
                ?>
            </ul>

        </li>
        <?php
            }
        ?>
        <li>
            <a href="<?= $urlset;?>contactus">Contact Us</a> 
        </li>
    </ul>
    <!--<div class="head-menu-right">
        <p>
            <a href="javascript:;">Offers</a>
            <img src="<?= $urlset;?>Themes/vijayalakshmi/Content/images/saleHP.png">
        </p>
    </div>-->
    <div class="clr"></div>
</div>
    
<link href="https://fonts.googleapis.com/css?family=Alex+Brush&amp;subset=latin-ext" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Droid+Serif" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Alex+Brush&amp;subset=latin-ext" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">
<style>
    .description_new a {
        color: #4b4c4c;
        padding: 4px 0;
        text-decoration: none;
    }
    .nbs-flexisel-nav-left, .nbs-flexisel-nav-right{
        top: 135px;
    }
    .home-grid ul#flexiselDemo3 img{
        height: 300px;
    }
    .arrow-adjust .nbs-flexisel-nav-left{
        top: 90px;
    }    
    .arrow-adjust .nbs-flexisel-nav-right{
        top: 90px;
    }
    .nbs-flexisel-item .saree-box-shop{
        width: 100%;
        height: 200px;
    }
    .footer-upper-box{
        width: 25%;
    }
    .footer{
        background: #f1f1f1;
    }
    .footer-upper-box{
        padding: 0px 0px;
    }
    .header-upper{
        background: black;
    }
    .header-upper ul li a{
        padding: 3px 0px 0px;
        color: #fff;
    }
    .fa{
        color: #fff;
    }
    .header-lower-links{
        padding: 0px 0px;
    }
</style>