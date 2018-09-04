
<style>
    .footer-lower-right-nop {float: left;width: 15%;font: 12px/1.8 pt_sansregular;color: #575757;}
    @media screen and (max-width: 1199px){
        .footer-lower-right-nop { width:100%;
        }}
.submit_btn_fm1 {
    background: #bb1e77 none repeat scroll 0 0 !important;
    border: medium none;
    border-radius: 2px !important;
    color: #fff;
    font: 600 13px pt_sansregular;
    height: auto !important;
    margin: 14px 0 0;
    padding: 6px 12px;
    width: 120px !important;
}
</style>
<div class="clr"></div>
<div class="footer">
    <div class="footer-wrap">
        <div class="footer-upper-grid">

            <div class="footer-upper-box">
                <h2>Our Policies</h2>
                <ul>
                    <?php
                        $sql_cat=$conn->query("select * from aboutus limit 1,10");
                        while($row_cat=mysqli_fetch_array($sql_cat))
                        {
                            $name = $row_cat['name'];
                            $metatitle=preg_replace('/[^A-Za-z0-9\-]/', '-', $name);
                            //$metatitle=strtolower($metatitle1);
                    ?>
                        <li><a href="<?= $urlset;?>aboutus/<?= $metatitle;?>"><?= $name;?></a></li>
                    <?php
                        }
                    ?>
                </ul>
            </div>

            <div class="footer-upper-box" style="text-align: left;">
                <h2>Follow Us Facebook</h2>
                <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fjewelfabart&tabs=timeline&width=240&height=500&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="240" height="250" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>

            </div>
            
            <div class="footer-upper-box">
                <h2>Our Location</h2>
            </div>
            
            <div class="footer-upper-box">
                <h2>Online Chat & Calls</h2>
                <ul>
                    <li>
                        <a>
                            <img src="<?= $urlset;?>Themes/vijayalakshmi/Content/images/footer-clock.png" />
                            10:30 am till 8:30 pm IST
                        </a>
                    </li>
                    <li>
                        <a>
                            <img src="<?= $urlset;?>Themes/vijayalakshmi/Content/images/calender.png" />
                            Monday to Saturday
                        </a>
                    </li>
                </ul>
            </div>
            <div class="clr"></div>
        </div>
    </div>
</div>
<div class="footer-mob">
    <div id="my_accordian">
        <div data-addui='accordion'>
            <div role='header'>Our Policies</div>
            <div role='content'>
                <div class="mobile_footerlist">
                    <ul>
                        <?php
                            $sql_cat=$conn->query("select * from aboutus limit 1,10");
                            while($row_cat=mysqli_fetch_array($sql_cat))
                            {
                                $name = $row_cat['name'];
                                $metatitle=preg_replace('/[^A-Za-z0-9\-]/', '-', $name);
                                //$metatitle=strtolower($metatitle1);
                        ?>
                            <li><a href="<?= $urlset;?>aboutus/<?= $metatitle;?>"><?= $name;?></a></li>
                        <?php
                            }
                        ?>
                    </ul>
                </div>
                <div style="clear: both"></div>
            </div>

            <div role='header'>Follow Us Facebook</div>
            <div role='content'>
                <div class="mobile_footerlist">
<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fjewelfabart&tabs=timeline&width=340&height=500&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="340" height="250" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                </div>
                <div style="clear: both"></div>
            </div>

        <div role='header'>Online Chat & Calls</div>
        <div role='content'>
            <div class="mobile_footerlist">
                <ul>
                    <li>
                        <a>
                            <img src="<?= $urlset;?>Themes/vijayalakshmi/Content/images/footer-clock.png" />
                            10:30 am till 8:30 pm IST
                        </a>
                    </li>
                    <li>
                        <a>
                            <img src="<?= $urlset;?>Themes/vijayalakshmi/Content/images/calender.png" />
                            Monday to Saturday
                        </a>
                    </li>
                </ul>
            </div>
            <div style="clear: both"></div>
        </div>
        </div>
    </div>
</div>

<div class="footer1">
    <div class="footer-wrap">
        <div class="footer-middle1-grid">
            <div class="footer-middle-box-left">
                <h3>Need help? Contact Us:</h3>
                <ul>
                    <li>
                        <a>
                            <img src="<?= $urlset;?>Themes/vijayalakshmi/Content/images/watsapp.png" /> +91 94140 42334
                        </a>
                    </li>
                    <li>
                        <a>
                            <img src="<?= $urlset;?>Themes/vijayalakshmi/Content/images/email.png" /> info@jewelfabart.com
                        </a>
                    </li>
                </ul>
            </div>
            <div class="footer-middle-box-right">
                <div class="ft-left">
                    <h3>Jewel Feb Art Updates</h3>
                </div>
                <div class="col-lg-7 padhid">
                <div class="input-group">
                    <input class="form-control" id="newsletter-email" name="NewsletterEmail" placeholder="Enter your email here..." type="text" value="" />
                    <div class="input-group-btn">
                        <input type="button" value="Join US" id="newsletter-subscribe-button" class="btn btn-default" />
                    </div>
                </div>
                <div class="newsletter-subscribe" id="newsletter-subscribe-block">
                    <div class="newsletter-email">
                    </div>
                    <div class="newsletter-validation">
                        <span id="subscribe-loading-progress" style="display: none;" class="please-wait">Wait...</span>
                        <span class="field-validation-valid" data-valmsg-for="NewsletterEmail" data-valmsg-replace="true"></span>
                    </div>
                </div>
                <div class="newsletter-result" id="newsletter-result-block">
                    <br />
                </div>


                </div>
            </div>
            <div class="clr"></div>
        </div>
        <div class="clr"></div>
    </div>
</div>
</div>
<div class="footer-lower-grid">
    <div class="footer-lower-box">
        <div class="footer-lower-left">
            <p>&copy; 2018 Jewel Feb Art. All rights reserved </p>
        </div>
        <div class="footer-lower-right">
            <ul>
                <li><span>KEEP IN TOUCH</span></li>
                <li>
                    <a href="https://www.facebook.com/jewelfabart/" target="_blank">
                        <img src="<?= $urlset;?>Themes/vijayalakshmi/Content/images/fb.png" />
                    </a>
                </li>
                <li>
                    <a href="https://www.pinterest.com/jewelfabart/" target="_blank">
                        <img src="<?= $urlset;?>Themes/vijayalakshmi/Content/images/pinterest.png" />
                </li>
                <li>
                    <a href="https://www.twitter.com/" target="_blank">
                        <img src="<?= $urlset;?>Themes/vijayalakshmi/Content/images/twitter.png" />
                    </a>
                </li>
                <li>
                    <a href="https://www.instagram.com/jewelfabart/" target="_blank">
                        <img src="<?= $urlset;?>Themes/vijayalakshmi/Content/images/insta.png" />
                    </a>
                </li>
            </ul>
        </div>
        <div class="footer-lower-right-nop">
            <img src="http://www.cutercounter.com/hit.php?id=7134&nd=6&style=37" border="0" alt="Hit Counter">
        </div>
        <div class="footer-lower-right-nop">
            <a href="https://www.dexusmedia.com/" target="_blank"><p>Powered by Dexus Media</p></a>
        </div>
            <div style="clear: both;"></div>
            <div class="floating-form" id="contact_form">
                <div class="contact-opener"></div>
                <div class="floating-form-heading">Request a call Back</div>

                <div id="contact_body">
                    <form action="<?= $urlset;?>phone_mail" method="post">
                        <div class="form-group">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding: 0;">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding: 0;">
                                    <label class="control-label">Enter your Phone Number</label>
                                    <span style="color: #B91F77; font-size: 13px; margin: 2px 0 6px 0; display: inline-block;">
(eg: +91 94140 42334)</span>
                                    <input class="form-control" name="phone1" placeholder="Enter your Phone Number" type="text" required=""/>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 btn_alg_admin" style="padding: 0;">
                                <button type="submit" name="call_me" class="submit_btn_fm1" />CALL ME NOW!</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="clr"></div>
            </div>
        </div>
    </div>

<script type="text/javascript">
    $(document).ready(function () {
        $('.footer-block .title').click(function () {
            var e = window, a = 'inner';
            if (!('innerWidth' in window)) {
                a = 'client';
                e = document.documentElement || document.body;
            }
            var result = { width: e[a + 'Width'], height: e[a + 'Height'] };
            if (result.width < 769) {
                $(this).siblings('.list').slideToggle('slow');
            }
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.block .title').click(function () {
            var e = window, a = 'inner';
            if (!('innerWidth' in window)) {
                a = 'client';
                e = document.documentElement || document.body;
            }
            var result = { width: e[a + 'Width'], height: e[a + 'Height'] };
            if (result.width < 1001) {
                $(this).siblings('.listbox').slideToggle('slow');
            }
        });
    });
</script>

</body>
<!-- Begin Inspectlet Embed Code -->
<script type="text/javascript" id="inspectletjs">
    window.__insp = window.__insp || [];
    __insp.push(['wid', 1357735532]);
    (function () {
        function ldinsp() { if (typeof window.__inspld != "undefined") return; window.__inspld = 1; var insp = document.createElement('script'); insp.type = 'text/javascript'; insp.async = true; insp.id = "inspsync"; insp.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://cdn.inspectlet.com/inspectlet.js'; var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(insp, x); };
        setTimeout(ldinsp, 500); document.readyState != "complete" ? (window.attachEvent ? window.attachEvent('onload', ldinsp) : window.addEventListener('load', ldinsp, false)) : ldinsp();
    })();
</script>
<!-- End Inspectlet Embed Code -->
<script type="text/javascript">
    if (window.location.hash && window.location.hash == '#_=_') {
        if (window.history && history.pushState) {
            window.history.pushState("", document.title, window.location.pathname);
        } else {
            // Prevent scrolling by storing the page's current scroll offset
            var scroll = {
                top: document.body.scrollTop,
                left: document.body.scrollLeft
            };
            window.location.hash = '';
            // Restore the scroll offset, should be flicker free
            document.body.scrollTop = scroll.top;
            document.body.scrollLeft = scroll.left;
        }
    }
</script>

</html>
