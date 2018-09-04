<script>
    $(document).ready(function(){
        $('#1').addClass('active');
    });
</script>
<div id="banner" class="inner-wraps">
    <div id="myCarousel" class="carousel" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>       
            <li data-target="#myCarousel" data-slide-to="1" class="active"></li>       
            <li data-target="#myCarousel" data-slide-to="2" class="active"></li>       
            <li data-target="#myCarousel" data-slide-to="3" class="active"></li>       
        </ol>
        <div class="carousel-inner">
        <?php
            $i=1;
            $sql=$conn->query("select * from banner");
            while($row=mysqli_fetch_array($sql))
            {
        ?> 
            <div class="item" id="<?= $i;?>">
                <img src="<?= $urlset;?>admin/slider/<?= $row['image'];?>" />
<!--                 <div class="carousel-caption">
                    <div class="temp-cap">
                        <h3>Bridal</h3>
                        <p>Collection</p>
                        <a href="sarees/buy-kanchipuram-silk-sarees-online-shopping-india.html">Shop Now</a>
                    </div>
                </div>   -->              
            </div>             
        <?php
            $i++;
        }
        ?>       
        </div>
    </div>
</div>