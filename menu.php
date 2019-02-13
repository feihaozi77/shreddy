<!DOCTYPE html>
<html>
<?php include 'header.php'
               ?>
 <!--   <style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style>
 -->
<body>
    

        <div class="container-fluid" style="position: fixed;z-index: 9999;">
            <div class="row" style="border-bottom: 1px solid #000;margin-bottom: 15px;background-color: #fff;">

               <?php include 'navbar.php'
               ?>

            </div>
          </div>
<div class="container">
      <br>
         <!--  <div class="embed-container" style="margin-top: 10%"><iframe src='https://www.youtube.com/embed/CJUSBwSBSyg' frameborder='0' allowfullscreen></iframe></div>
 -->
 <div class="col-md-12" style="margin-bottom: 30px;margin-top: 93px;">
            <img src="img/menu-banner.jpeg" class="img-fluid">
          </div>

          <div class="col-md-12">
          <div class="row">
              <div class="col centeral" id="material-4">
              <a class="cat-button" data-filter="*">
            <img src="img/all-meal.png" style="position: relative;margin-left: auto;margin-right: auto;" class="img-responsive" width="100"><br><span class="material-title">全部</span></a>
            </div>
            <div class="col centeral" id="material-1">
              <a class="cat-button" data-filter=".breakfast">
            <img src="img/breakfast.png" style="position: relative;margin-left: auto;margin-right: auto;" class="img-responsive" width="100"><br><span class="material-title">早餐</span></a>
            </div>
            <div class="col centeral" id="material-2">
              <a class="cat-button" data-filter=".lunch"><img src="img/lunch-nocolor.png"  style="position: relative;margin-left: auto;margin-right: auto;" class="img-responsive" width="100"><br><span class="material-title">正餐</span> </a>
            </div>
            <div class="col centeral" id="material-3">
              <a class="cat-button" data-filter=".add"><img src="img/vegetarian-nocolor.png"  style="position: relative;margin-left: auto;margin-right: auto;" class="img-responsive" width="100"><br><span class="material-title">加餐</span></a>
            </div>
        </div>
       </div>
<hr>
<div class="grid-new">
  <div class="grid-item breakfast" onclick="applyFilter('')">全部</div>
  <div class="grid-item breakfast" onclick="applyFilter('salad')">沙拉</div>
  <div class="grid-item breakfast" onclick="applyFilter('sanwich')">三明治</div>
  <div class="grid-item breakfast" onclick="applyFilter('pancake')">中式煎饼</div>
  <div class="grid-item breakfast" onclick="applyFilter('west')">西式早点</div>
  <div class="grid-item lunch" onclick="applyFilter('breast')">鸡胸肉</div>
  <div class="grid-item lunch" onclick="applyFilter('leg')">鸡腿肉</div>
  <div class="grid-item lunch" onclick="applyFilter('beef')">牛肉</div>
  <div class="grid-item lunch" onclick="applyFilter('seafood')">水产</div>
  <div class="grid-item lunch" onclick="applyFilter('else')">其他</div>
  <div class="grid-item add" onclick="applyFilter('snack')">零食</div>
</div>
<hr>
       <section>
 <div class="col-12">
          <div class="row grid" id="menu-img">
            
          </div>
  </div>

       </section>
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
   if(window.location.href.indexOf("menu") > -1) {
      $('#menu .nav-link').addClass('active');
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