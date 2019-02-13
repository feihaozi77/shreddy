<!DOCTYPE html>
<html>
<?php include 'header.php'
               ?>
   <style>
   h1{   
  opacity: 1;
  font-family: si-bold!important;
  font-size: 25px;
  transition-duration: .4s;}
 .content {
    padding:30px!important;

  }
  p{
    font-size: 1.2rem;
  }
</style>

<body>
    

        <div class="container-fluid">
            <div class="row" style="border-bottom: 1px solid #000;margin-bottom: 15px;">
               <?php include 'navbar.php'
               ?>

            </div>
          </div>



<div class="container">
 <div class="col-md-12" style="margin-bottom: 30px;margin-top:20px;">
            <img src="img/withoutus-banner.jpg" class="img-fluid">
 </div>
<br>
   <div class="col-md-12">
    <div class="row">
     <div class="col-md-3 faq" style="border-right: 1px solid #e6e6e6;padding-right: 0px;">
       <p id="q1" onclick="changeContent(id)" data="q1" class="highlight">什么是欺骗餐？</p>
       <p id="q2" onclick="changeContent(id)" data="q2">欺骗餐应该怎么吃？</p>
       <p id="q3" onclick="changeContent(id)" data="q3">周末怎样保证饮食健康？</p>
       <p id="q4" onclick="changeContent(id)" data="q4">出去旅游时怎样注意饮食？</p>
       <p id="q5" onclick="changeContent(id)" data="q5">什么是液体热量？</p>
       <p id="q6" onclick="changeContent(id)" data="q6">我可以喝酒吗？</p>
       <p id="q7" onclick="changeContent(id)" data="q7">有哪些被贴上“健康”标签的垃圾食品？</p>
     </div>
     <div class="col-md-9">
       <p id="a1">在连续一段时间的相对低热量低油脂低碳水饮食之后，挑选一个相对固定的时间给身体来一次高热量高碳水的饮食。通过循环控制饮食的原则，让基础代谢保持在巅峰状态，并且不会因为过低热量而导致身体习惯于低热量饮食导致新陈代谢降低。另外欺骗餐可以帮助长期控制食欲，在心理上满足嘴馋的愿望。</p>
        <div id="a2" style="display: none;">
           <p>欺骗餐的原则应该是“想吃什么吃什么”，而不是“想吃多少吃多少”。欺骗餐可以是你平时最垂涎的，健身餐中却没有的食物。虽然欺骗餐原则上对食材没有要求，但保证以下三点可以控制过度破坏饮食习惯：</p>
           <p>
          1. 选择高蛋白的食材，如炸鸡，双层汉堡，烤肉，排骨等食材。</p>
          <p>
          2. 不能暴食。把食量控制在两只手掌大小的范围之内。欺骗餐应该慢慢享用，而不是食欲的放纵。欺骗餐当日的热量摄入控制在基础代谢左右。</p>
          <p>
          3. 有计划的吃欺骗餐。欺骗餐应该在规定的日子，规定的时间吃。并不是在吃过垃圾食品之后把它当做欺骗餐。这样会养成坏的饮食习惯，容易前功尽弃。例：每周六的早餐，和每周日的晚餐是我的欺骗餐。</p>
        </div>
          <div id="a3" style="display: none;">
           <p>周末的时间是用来娱乐，社交，放松的机会。但稍不注意就会让平时养成饮食习惯付之一炬。我们将用下面五条黄金守则，教会大家如何在周末喂饱自己，并保持健康的饮食习惯。</p>
           <p>1. 每一餐中都应该有蛋白质，碳水化合物，和健康脂肪。蛋白质用来修复破损肌肉，碳水化合物用来提供能量，健康脂肪用来维持身体健康。</p>
          <p>2. 挑选低热量，低糖，低脂肪食材。“低”并不是没有，而是要尽量控制。</p>
          <p>3. 每一餐的食量控制在1~1.5只手掌大小，而碳水食材与蛋白质食材的比例是5:5。这样可以有效控制每餐的热量摄入。</p>
          <p>4. 少食多餐。保证每天至少吃三次正餐，并且尽可能的每餐中加餐。比如水果，坚果，新鲜蔬菜等，让新陈代谢保持在巅峰状态。</p>
          <p>5. 8:2黄金比例。在没有我们陪伴的日子里，十成中，保持八成以上遵守以上四条守则。其余的时间是用来放松和社交的。好的饮食习惯并不是机器人，而是在健康的饮食习惯中偶尔放纵，平衡一下。</p>
        </div>
         <div id="a4" style="display: none;">
           <p>外出游玩是很好的放松机会。不要让健康饮食与减肥束缚你的假期。在可能的情况下，尽量吃的健康一些就可以了。但是千万不能暴饮暴食。假期结束后回归健康的饮食习惯就可以了。</p>
         </div>
         <div id="a5" style="display: none;">
           <p>液体热量是最常被大家忽略的热量摄入。果汁，碳酸饮料等饮品通常热量非常高，而且所有热量都来自于单糖。单糖会让体内胰岛素分泌迅速飙升，然后迅速回落，导致低血糖。这样会限制运动表现，妨碍脂肪细胞释放能量，得不到最佳减脂效果。碳酸饮料和果汁的平均热量在每杯200卡左右，单糖含量在30-50克。星巴克，Tim Horton’s，奶茶店等冷饮店里的大部分饮品大多都含有大量添加白糖，平均每杯在300卡左右，每杯单糖在50克以上。</p>
         </div>
         <div id="a6" style="display: none;">
           <p>可以。但是一定要遵守下面三条原则：</p>
           <p>1. 每天来自酒精的热量不可以超过300卡。</p>
           <p>2. 选择酒精浓度高，热量低，无添加剂的烈性酒。避免啤酒，红酒，鸡尾酒等高热量酒类。</p>
           <p>3. 调酒时用无糖，无热量的饮料，如无糖绿茶，无糖可乐等。降低热量摄入.</p>
           <p>酒精的热量是每克7卡，并且这个热量对身体是没有任何营养价值的。酒精还会让身体脱水，妨碍脂肪细胞释放能量。最理想的状态是完全杜绝酒精。不过每人都有社交和娱乐，当然可以理解。只要遵守以上三条规则，便可以把酒精对身体的伤害降到最低。</p>
           <p style="padding: 10px;border:1px solid #a5a3a3;text-align:center;">
             酒精热量计算方法：一瓶啤酒≈100卡<br>
             35%酒精度，500ml的热量是：500 x 35% x 7=1225卡
           </p>
         </div>
        <div id="a7" style="display: none;">
           <p>果汁</p>
           <p>果汁就是高浓压缩水果。新鲜水果是健康的，但每天如果吃10个橙子，热量还是会超标。一杯橙汁就相当于压缩了5个新鲜橙子。并且果汁中没有新鲜水果的膳食纤维，并且往往有大量化学添加剂和糖。</p>
           <p>运动饮料</p>
           <p>被市场营销手段贴上“健康”的伪标签。而真相是运动饮料的确可以帮助身体迅速恢复体能，但前提是需要有极大的消耗。运动员在比赛中可以喝，用来恢复体能；但坐在办公桌前上上班，电脑前打打游戏的你不可以喝，因为并没有体能消耗。大量的单糖进入体内如果不消耗掉，很快会变为脂肪储存起来。</p>
           <p>维他命水</p>
           <p>“维他命”是好东西。“水”也是好东西。资本家们利用大家的认知把这两样东西合在一起，创造出了叫“维他命水”的虚伪饮料，并利用市场营销手段把它包装成健康饮品。真相是维他命水中的营养还不如一颗婴儿维他命软糖，里面的白糖与添加剂却堪比可乐等饮料。</p>
           <p>无糖碳酸饮料</p>
           <p>无糖碳酸饮料在减脂范围内，是正常碳酸饮料更好的替代品，因为热量比正常版低非常多，甚至没有热量。但从整体健康角度来讲，无糖版对身体的危害有过之而无不及。无糖碳酸饮料中的零热量甜味剂进入体内后，胰腺同样会分泌出大量胰岛素来分解糖分，同样阻碍脂肪细胞释放能量。更可怕的是大量胰岛素分泌出来以后，血液中却并没有真正的糖分。长期以来会造成胰岛素分泌敏感度降低，严重将会造成糖尿病。所以正确的选择顺序应该是：水＞无糖碳酸饮料≥普通碳酸饮料。</p>
           <p>无糖碳酸饮料</p>
           <p>Booster Juice等饮品店中经常会提供蛋白粉奶昔，并给顾客一种加了蛋白粉就变健康的错觉。真相是，这些饮品店为了口感和味道，会在奶昔中添加大量白糖，奶油等高热量材料，却选用成本最低的蛋白粉品牌。一杯蛋白粉奶昔的热量往往超过500卡，而真正的蛋白质热量却只有100-150卡。如果想把蛋白粉奶昔当加餐，自己亲手用新鲜水果做会更好。</p>
           <p>谷物棒</p>
           <p>谷物棒的噱头往往是“膳食纤维”。但如果认真看背面的营养元素表，膳食纤维的含量往往很低，而碳水，白糖却非常高。商家为了味道，在谷物棒里添加大量白糖，棉花糖，蜂蜜等。“谷物”本身的膳食纤维就不多，主要营养成分是碳水。想要在谷物棒中真的获取膳食纤维，结果一定是得不偿失。</p>
           <p>加工燕麦</p>
           <p>燕麦是绝对的健康食品。但现如今市场上的加工燕麦往往有大量白糖和人工香味剂，并把整颗燕麦磨碎。这样便取代了消化过程中的一部分，饱 腹感变低，GI值变高，营养从单纯的复糖变成了复糖+大量单糖。燕麦和加工麦片的区别就相当于大米和旺旺大米饼。所以选购时要选无糖，无味，无添加 剂的纯燕麦。</p>
           <p>蛋白棒</p>
           <p>蛋白棒是个非常有争议的食品。原因是市面上的蛋白棒质量差异相当大。同一品牌中的不同口味差异都不小。所以在挑选蛋白棒时一定要加倍注意 营养表和配方。要选择最低糖，最低碳水，最高蛋白质的蛋白棒，并且在配方 中的内容往往越短越好，因为配方越长代表添加剂越多。</p>
           <p>加工“有机”食品</p>
           <p>有机”是现在最大的噱头，而真相是他只是个噱头而已。“有机”并不代表“健康”。“有机”黄油还是黄油，“有机”薯片还是 薯片。“有机”只不过在制作过程中没有添加人造化学添加剂，其营养本身与非有机食品并无不同。有机产品更多是对自然生态的保护，而对人体健康而言，并没有定论说有机食品比非有机食品更健康。</p>
           <p>“脱脂”酸奶</p>
           <p>市面上脱脂酸奶绝大部分都以“不含脂肪”所以更健康为宣传手段。而实际上为了弥补口感与味道上的差异，商家会大量添加白糖与人造 香味剂。真相是—酸奶里脂肪中的饱和脂肪的确偏高，但同样有大量健康脂肪，所以酸奶中的脂肪与白糖添加剂相比，是更加可以接受的。在选购酸奶时，与其注意脂肪含量，不如更注意蛋白质与糖的含量。市面上大部分希腊酸 奶中的蛋白质含量都非常可观，而原味的希腊酸奶中糖分相当少，是选购酸奶 的第一选择。</p>
           <p>果干</p>
           <p>干果就是风干的水果。前文提到过，水果是健康食品。干果中的营养元素与真正水果几乎相同，在可以控制摄入量的前提下是对身体有好处的。 但往往干果被认为与新鲜水果大小相差很大，所以很容易就会摄入过多。比如一颗葡萄干与一个新鲜葡萄的营养和热量相当，但体积却是1/10。与其说食物本身不健康，其实更合理的说法是给大家心理上造成的与新鲜水果的差距。如果可以理性摄入干果，控制热量，对身体还是有好处的。</p>
          
          
         </div>
     </div>
   </div>
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
<script src="js/material.js"></script>
<script src="dist/accordion.min.js"></script>
  <script>

     $(document).ready(function(){
   if(window.location.href.indexOf("withoutus") > -1) {
      $('#withoutus .nav-link').addClass('active');
   }
 });

var qlist=['q1','q2','q3','q4','q5','q6','q7'];
var alist=['a1','a2','a3','a4','a5','a6','a7'];


function changeContent(id){

  for(i=0;i<qlist.length;i++){
    if(id == qlist[i]){
    $('#'+alist[i]).siblings().hide();
    console.log(alist[i]);
    $('#'+alist[i]).fadeIn();
    $('#'+qlist[i]).addClass('highlight'); 
    $('#'+qlist[i]).siblings().removeClass('highlight');
    }
  }
}


</script>
<div style="display:none">
  <script src="https://s19.cnzz.com/z_stat.php?id=1272824792&web_id=1272824792" language="JavaScript"></script>
  <script type="text/javascript">
  var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1272824792'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s19.cnzz.com/z_stat.php%3Fid%3D1272824792' type='text/javascript'%3E%3C/script%3E"));</script>
</div>


</body>

</html>