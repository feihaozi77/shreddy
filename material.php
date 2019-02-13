

<!DOCTYPE html>
<html>
<?php include 'header.php'
               ?>
<!--    <style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style> -->

<body>
    

        <div class="container-fluid" style="position: fixed;z-index: 9999;">
            <div class="row" style="border-bottom: 1px solid #000;margin-bottom: 15px;background-color: #fff;">

               <?php include 'navbar.php'
               ?>

            </div>
          </div>
<div class="container">
      <br>
          <!-- <div class="embed-container" style="margin-top: 10%"><iframe src='https://www.youtube.com/embed/CJUSBwSBSyg' frameborder='0' allowfullscreen></iframe></div> -->

          <div class="col-md-12" style="margin-bottom: 30px;margin-top: 93px;">
            <img src="img/material-banner.jpeg" class="img-fluid">
          </div>


          <div class="col-md-12">
          <div class="row">
            
            <div class="col centeral" id="material-1">
              <a onclick="applyFilter('protein')">
            <img src="img/protein.png" style="position: relative;margin-left: auto;margin-right: auto;" class="img-responsive" width="100"><br><span class="material-title">蛋白质</span></a>
            </div>
            <div class="col centeral" id="material-2">
              <a onclick="applyFilter('carb')"><img src="img/carb.png"  style="position: relative;margin-left: auto;margin-right: auto;" class="img-responsive" width="100"><br><span class="material-title">碳水化合物</span> </a>
            </div>
            <div class="col centeral" id="material-3">
              <a onclick="applyFilter('fat')"><img src="img/meat.png"  style="position: relative;margin-left: auto;margin-right: auto;" class="img-responsive" width="100"><br><span class="material-title">脂肪</span></a>
            </div>
            <div class="col centeral" id="material-4">
              <a onclick="applyFilter('veg')"><img src="img/veg.png"  style="position: relative;margin-left: auto;margin-right: auto;" class="img-responsive" width="100"><br><span class="material-title">果蔬</span></a>
            </div>
            <div class="col centeral" id="material-5">
              <a onclick="applyFilter('source')"><img src="img/source.png"  style="position: relative;margin-left: auto;margin-right: auto;" class="img-responsive" width="100"><br><span class="material-title">调料</span></a>
            </div>

        </div>
       </div>
<!-- Protein -->       
<div class="material-description">
  <div  id="protein">
  <div class="row">
  <div id="diamond"></div>
  <p style="margin-bottom: 0;margin-top: 6px;margin-left: 10px;">为肌肉与筋腱的修复/增长提供营养</p>
</div>
 <div class="row">
  <div id="diamond"></div>
  <p style="margin-bottom: 0;margin-top: 6px;margin-left: 10px;">帮助人体生产荷尔蒙与酵素</p>
</div>
 <div class="row">
  <div id="diamond"></div>
  <p style="margin-bottom: 0;margin-top: 6px;margin-left: 10px;">热量: 4卡/克</p>
</div>
</div>

<!-- carbohydrat -->       

  <div id="carbohydrat">
  <div class="row">
  <div id="diamond"></div>
  <p style="margin-bottom: 0;margin-top: 6px;margin-left: 10px;">日常生活最有效的能量来源</p>
</div>
 <div class="row">
  <div id="diamond"></div>
  <p style="margin-bottom: 0;margin-top: 6px;margin-left: 10px;">碳水中的膳食纤维可以帮助消化</p>
</div>
 <div class="row">
  <div id="diamond"></div>
  <p style="margin-bottom: 0;margin-top: 6px;margin-left: 10px;">热量: 4卡/克</p>
</div>
</div>

<!-- fat -->       
<div id="fat">
  <div class="row">
  <div id="diamond"></div>
  <p style="margin-bottom: 0;margin-top: 6px;margin-left: 10px;">单不饱和与多不饱和脂肪酸可以预防心脑血管疾病</p>
</div>
 <div class="row">
  <div id="diamond"></div>
  <p style="margin-bottom: 0;margin-top: 6px;margin-left: 10px;">健脑，保持皮肤，促进激素，修复细胞等重要作用</p>
</div>
 <div class="row">
  <div id="diamond"></div>
  <p style="margin-bottom: 0;margin-top: 6px;margin-left: 10px;">热量: 9卡/克</p>
</div>
</div>
<!-- Veg -->       

  <div id="veg">
  <div class="row">
  <div id="diamond"></div>
  <p style="margin-bottom: 0;margin-top: 6px;margin-left: 10px;">维生素和微量元素丰富</p>
</div>
 <div class="row">
  <div id="diamond"></div>
  <p style="margin-bottom: 0;margin-top: 6px;margin-left: 10px;">热量低，饱腹感强</p>
</div>
 <div class="row">
  <div id="diamond"></div>
  <p style="margin-bottom: 0;margin-top: 6px;margin-left: 10px;">拥有大量膳食纤维，帮助消化</p>
</div>
</div>
<!-- Veg -->       

  <div id="source">
 
</div>
</div>

<hr>
       <section>
        <div class="col-12">
          <div class="row grid"  id="material-img">
            
          </div>
        </div>
         <div id='detail'></div>
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
<script src="js/material.js"></script>
<script type="text/javascript">

 $(document).ready(function(){
   if(window.location.href.indexOf("material") > -1) {
      $('#materials .nav-link').addClass('active');
   }
    $('.grid').hide();

    var material = {'#material-1':'#protein','#material-2':'#carbohydrat','#material-3':'#fat','#material-4':'#veg','#material-5':'#source'};

    jQuery.each(material, function(i,val){
        $(i).click(function(){
        $('.material-title').removeClass('active1');
        $(i + ' .material-title').addClass('active1');
        $(val).siblings().fadeOut(0);
        $(val).fadeIn(800);
        
  
      });

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