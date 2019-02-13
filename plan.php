<!DOCTYPE html>
<html>
<?php include 'header.php'
               ?>
   <style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }
   * {
    box-sizing: border-box;
}


.price {
    list-style-type: none;
    border: 1px solid #eee;
    margin: 0;
    padding: 0;
    -webkit-transition: 0.3s;
    transition: 0.3s;
}

.price:hover {
    box-shadow: 0 8px 12px 0 rgba(0,0,0,0.2)
}

.price .header {
    background-color:  #323232;
    color: white;
    font-size: 25px;
}

.price li {
    border-bottom: 1px solid #eee;
    padding: 20px;
    text-align: center;
}

.price .grey {
    background-color: #eee;
    font-size: 20px;
}

.button {
    background-color: #323232;
    border: none;
    color: white;
    padding: 10px 25px;
    text-align: center;
    text-decoration: none;
    font-size: 18px;
    text-decoration: none;
}

a{
    text-decoration: none!important;
}

a:hover{
    color: #fff;
}


@media only screen and (max-width: 600px) {
    .columns {
        width: 100%;
    }
}

 </style>

<body>
    

        <div class="container-fluid" style="position: relative;z-index: 9999;">
            <div class="row" style="border-bottom: 1px solid #000;margin-bottom: 15px;background-color: #fff;">

               <?php include 'navbar.php'
               ?>

            </div>
          </div>

<div class="container" style="margin-top: 30px;">
    
  <div class="col-md-12">
  <p style="font-size: 1.5em;"><i class="fa fa-leaf" aria-hidden="true" style="color:#4caf50"></i> 周套餐为周一至周五，共5天，月套餐为4个周套餐。</p>
    <div class="row">
<div class="col-md-6">
  <ul class="price">
    <li class="header">CUT</li>
    <li class="grey">$ 210 / 周 </li>
    <li>每天平均1600卡</li>
    <li>适合男士减脂</li>
    <li class="grey"><a data-fancybox data-animation-duration="300" data-src="img/wechat.png" href="javascript:;" class="button">立刻下单</a></li>
  </ul>
<br>
    <ul class="price">
    <li class="header" style="background-color: #4caf50">LITE</li>
    <li class="grey">$ 180 / 周 </li>
    <li>每天平均1200卡</li>
    <li>适合女士减脂</li>
    <li class="grey"><a  data-fancybox data-animation-duration="300" data-src="img/wechat.png" href="javascript:;"  class="button">立刻下单</a></li>
  </ul>

</div>

<div class="col-md-6">
 <ul class="price">
    <li class="header">CUT</li>
    <li class="grey">$ 800 / <b>4</b>周 </li>
    <li>每天平均1600卡</li>
    <li>适合男士减脂</li>
    <li class="grey"><a data-fancybox data-animation-duration="300" data-src="img/wechat.png" href="javascript:;" class="button">立刻下单</a></li>
  </ul>
  <br>
    <ul class="price">
    <li class="header" style="background-color:#4caf50">LITE</li>
    <li class="grey">$ 690 / <b>4</b>周 </li>
    <li>每天平均1200卡</li>
    <li>适合女士减脂</li>
    <li class="grey"><a data-fancybox data-animation-duration="300" data-src="img/wechat.png" href="javascript:;" class="button">立刻下单</a></li>
  </ul>
</div>
</div>
</div>
<a data-fancybox="gallery" href="img/demomenu-01.jpg">
<img src="img/demomenu-01.jpg" class="img-responsive"></a>
</div>


        <?php include 'footer.php'
        ?>
    
    
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.js"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/isotope.pkgd.min.js"></script>
<script src="js/menu.js"></script>
<script type="text/javascript">

 $(document).ready(function(){
   if(window.location.href.indexOf("plan") > -1) {
      $('#plan .nav-link').addClass('active');
   }
$('.grid').hide();

    var material = {'#material-1':'#protein','#material-2':'#carbohydrat','#material-3':'#fat','#material-4':'#veg','#material-5':'#source'};

    jQuery.each(material, function(i,val){
        $(i).click(function(){
        $('.material-title').removeClass('active');
        $(i + ' .material-title').addClass('active');
      });

    });

    // external js: isotope.pkgd.js

var $grid = $('.grid-new').isotope({
  itemSelector: '.grid-item',
  stagger: 30
});

$('.cat-button').on( 'click', function() {
  var filterValue = $(this).attr('data-filter');
  $grid.isotope({ filter: filterValue });
});




});

  </script>
  <div style="display:none">
    <script src="https://s19.cnzz.com/z_stat.php?id=1272824792&web_id=1272824792" language="JavaScript"></script>
  <script type="text/javascript">

  var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1272824792'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s19.cnzz.com/z_stat.php%3Fid%3D1272824792' type='text/javascript'%3E%3C/script%3E"));</script>
</div>


</body>

</html>