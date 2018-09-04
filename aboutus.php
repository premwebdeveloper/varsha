<?php include('urlset.php');

    $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

    $actual_link1 = explode("/", $actual_link);

    $meta=$actual_link1[6];

    $metatitle = str_replace('-', ' ', $meta);
    
    if($metatitle=="Disclaimer   CSR Policy ")
    {
    	$metatitle="Disclaimer & CSR Policy";
    }

    $sql_cat=$conn->query("select * from aboutus where name='$metatitle'");

    $row_cat=mysqli_fetch_array($sql_cat);

    $id=$row_cat['id'];
?>
    <title>Jewel Fab Art | <?= $metatitle;?></title>
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
    <meta name="description" content="" />
    
<?php include('header.php');?>

<script>

    $(document).ready(function(){

        $("#<?= $id;?>").addClass('act');

        $("#1_<?= $id;?>").addClass('act');

    });

</script>

<style>

    hr{

        margin-top: 0px;

    }

</style>

<hr>

<div class="master-wrapper-content">

    <div class="breadcrumb">

        <ul>

            <li><a href="<?= $urlset;?>" title="Home">

                <img src="<?= $urlset;?>Themes/vijayalakshmi/Content/images/home.png" alt="homeicon" class="breadimg">

                Home</a><span class="delimiter">/</span></li>

            <li><a title="New Arrivals"><?= $row_cat['name'];?>  </a></li>

        </ul>

    </div>

    <div class="heading">

        <h3><?= $row_cat['name'];?></h3>

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

                        //$metatitle=strtolower($metatitle1);

                ?>

                <li id="<?= $row['id'];?>">

                    <a href="<?= $urlset;?>aboutus/<?= $metatitle;?>" id="1_<?= $row['id'];?>"><?= $name;?></a>

                </li>

                <?php

                    }

                ?>

            </ul>

        </div>

        <div id="centercommon">

            <?= $row_cat['about_content'];?> 

        </div>

    </div>

</div>

<?php include('footer.php');?>