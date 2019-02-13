var menus = [];
var $grid;
$.getJSON( "menu.json", function( data ) {
  menus = data;
  var items = '';
  menus.forEach(function(menu, index){
  		items += '<div class="col-4 col-xs-4  col-sm-4 col-md-3  element-item" data-fancybox data-animation-duration="700" data-src="img/'+menu.img+'.jpg" href="javascript:;" data-material="'+menu.catagory+'" style="text-align:center;"><div class="zoom-sign"><i class="fa fa-plus" aria-hidden="true" style="position:absolute;top:40%;left:50%;-webkit-transform: translateX(-50%);transform: translateX(-50%)"></i><br><!--h2>查看详情</h2--></div><img src="img/'+menu.img+'.png" class="img-fluid"><br><h1>'+menu.name+'</h1></div>';
  });
 $('#menu-img').html(items);



  // init Isotope
    $grid = $('.grid').isotope({
      itemSelector: '.element-item',
      layoutMode: 'fitRows'
      });

});



function applyFilter(filter){
  $('.grid').show();
         $grid.isotope({ filter: filter ? ('[data-material="' + filter + '"]') : undefined });
    }

