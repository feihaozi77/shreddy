<!DOCTYPE html>
<html>
<?php include 'header.php'
               ?>
<body>
    

        <div class="container-fluid" style="position: relative;z-index: 9999;">
            <div class="row" style="border-bottom: 1px solid #000;margin-bottom: 15px;background-color: #fff;">

               <?php include 'navbar.php'
               ?>

            </div>
          </div>

<div class="container" style="margin-top: 30px;">

  <form method="post" action="https://moocadvertising.createsend.com/t/j/s/etjuui/" id="subForm">
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputEmail4">邮箱地址</label>
      <input id="fieldEmail" name="cm-etjuui-etjuui" type="email" class="form-control" placeholder="Email" required>
    </div>
    <div class="form-group col-md-4">
      <label for="inputPassword4">微信/电话</label>
      <input id="fieldjrkkirh" name="cm-f-jrkkirh" type="text" class="form-control" placeholder="Wechat/Phone">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">送餐地址</label>
    <input class="form-control" id="fieldjrkkiyy" name="cm-f-jrkkiyy" type="text" placeholder="Delivery Address">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">城市</label>
      <select id="fieldjrkkirk" name="cm-fo-jrkkirk" class="form-control">
      <option selected>Choose...</option>
      <option value="2696516">Toronto</option>
  </select>
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">省份</label>
      <select id="fieldjrkkiru" name="cm-fo-jrkkiru" class="form-control">
        <option selected>Choose...</option>
        <option value="2696517">Ontario</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">邮编</label>
      <input id="fieldjrkkiyl" name="cm-f-jrkkiyl" type="text" class="form-control" placeholder="Zip Code">
    </div>
  </div>

  <div class="form-group">
  <label for="inputZip">留言</label>
  <textarea id="fieldjrkkiyr" name="cm-f-jrkkiyr" type="text" placeholder="Your Message"></textarea>
  </div>

  <input type="submit" value="发送" id="submit" class="btn btn-primary">
</form>
  
  <div id="thankyou">
    <p>谢谢您对Shreddy的支持，我们将继续尽心为您服务。</p>
  </div>


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
   if(window.location.href.indexOf("contactus") > -1) {
      $('#contactus .nav-link').addClass('active');
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


        $(function() {
            $('#subForm').submit(function(e) {
                e.preventDefault();
                $.getJSON(
                    this.action + "?callback=?",
                    $(this).serialize(),
                    function(data) {
                        if (data.Status === 400) {
                            alert("Error: " + data.Message);
                        } else { // 200
                           $('#subForm').fadeOut();
                            $('#thankyou').fadeIn();
                            $('#subForm').trigger("reset");
                            
                        }
                    });
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