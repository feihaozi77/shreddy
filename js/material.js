var models = [];
var $grid;
$.getJSON( "material.json", function( data ) {
  models = data;
  var items = '';
  var detail = '';
  models.forEach(function(model, index){
    console.log(model.material == 'source');
      if(model.material == 'source'){
        items += '<div class="col-md-12 element-item" data-material="'+model.material+'" style="text-align:center;"><img src="img/material/'+model.img+'.png" class="img-fluid"><br><h1 style="font-size:15px;font-family:">'+model.cn+'</h1></div>';
      }else{
  		items += '<div class="col-4 col-xs-4  col-sm-4 col-md-3 element-item" data-fancybox data-animation-duration="700" data-src="#'+model.id+'" href="javascript:;" data-material="'+model.material+'" style="text-align:center;"><div class="zoom-sign"><i class="fa fa-plus" aria-hidden="true" style="position:absolute;top:35%;left:50%;-webkit-transform: translateX(-50%);transform: translateX(-50%)"></i><br><h2>查看详情</h2></div><img src="img/material/'+model.img+'.png" class="img-fluid"><br><h1 style="font-size:15px;font-family:">'+model.cn+'</h1></div>';

  		detail += '<div style="display: none;" id="'+ model.id +'" class="animated-modal"><h1>'+model.cn+'</h1><p style="color:#000;">'+ model.detail +'</p></div>';
    }

  });
 $('#material-img').html(items);
 $('#detail').html(detail);

  // init Isotope
    $grid = $('.grid').isotope({
      itemSelector: '.element-item',
      layoutMode: 'fitRows'
      });

});

function applyFilter(filter){

  $('.grid').show();
        $grid.isotope({ filter: '[data-material="' + filter + '"]' });
  }

