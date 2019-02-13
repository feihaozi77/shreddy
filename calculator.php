<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Shreddy</title>


<link href="css/bootstrap-grid.css" rel="stylesheet" type="text/css"/>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="css/main.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="css/materialize.css">
<link href="css/calculator.css" rel="stylesheet" type="text/css"/>
<link href="css/main-nav.css" rel="stylesheet" type="text/css"/>
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

</head>
<body>
  <div class="container-fluid">
            <div class="row" style="border-bottom: 1px solid #000;margin-bottom: 15px;">

               <?php include 'navbar.php'
               ?>

            </div>
          </div>

  <div class="container">
    <form>
      <ul id="cal-tabs" class="tabs tabs-fixed-width">
        <li class="tab">
          <a class="active" href="#cal-tab-1">基础代谢率(BMR)<span id="bmr" style="
          position: absolute;
          bottom: -55px;
          left: 40%;
          font-size: 1.5rem;
          "></span></a>

        </li>
        <li class="tab disabled">
          <a href="#cal-tab-2">每日热量消耗<span id="activity" style="
          position: absolute;
          bottom: -55px;
          left: 40%;
          font-size: 1.5rem;
          "></span></a>

        </li>
        <li class="tab disabled"><a href="#cal-tab-3">每日热量摄入目标</a></li>
      </ul>
      <div id="cal-tab-1">
        <div style="text-align: center;">
          <input type="checkbox" name="group1" id="male" />
          <label for="male">男</label>
          <input type="checkbox" name="group1" id="female" />
          <label for="female">女</label>
        </div>
        <div class="input-field">
          <input id="weight" type="number">
          <label for="weight">体重(KG)</label>
        </div>
        <div class="input-field">
          <input id="height" type="number">
          <label for="height">身高(CM)</label>
        </div>
        <div class="input-field">
          <input id="age" type="number">
          <label for="age">周岁</label>
        </div>
        <div style="text-align: center;">
          <button class="btn waves-effect waves-light disabled" type="button" onclick="selectSecond()">下一步</button>
        </div>
      </div>
      <div id="cal-tab-2">
        <p>
          <input name="activity" type="radio" id="level-low" value="1.2" />
          <label for="level-low"><a class="tooltipped" data-position="right" data-delay="50" data-tooltip="办公室办公，学生，日常生活，低强度体育锻炼如走路，或无计划中高强度运动">低强度</a></label>
        </p>
        <p>
          <input name="activity" type="radio" id="level-mid" value="1.4" />
          <label for="level-mid"><a class="tooltipped" data-position="right" data-delay="50" data-tooltip="每周固定3-4次中强度体育活动如慢跑，网球，游泳，健身等，并维持 60%-70%最高心率45-60分钟">中强度</a></label>
        </p>
        <p>
          <input name="activity" type="radio" id="level-high" value="1.6" />
          <label for="level-high"><a class="tooltipped" data-position="right" data-delay="50" data-tooltip="每周固定6-7次中高强度运动如力量训练，HIIT，爬楼梯等，并维持70%-85% 最高心率45-60分钟">高强度</a></label>
        </p>
        <p>
          <input name="activity" type="radio" id="level-athlete" value="2" />
          <label for="level-athlete"><a class="tooltipped" data-position="right" data-delay="50" data-tooltip="每周固定7次以上高强度运动，如体能训练，力量训练，柔韧度训练，反应能力 等，是专业运动员的标准">运动员</a></label>
        </p>
        <div style="text-align: center;">
          <button class="btn waves-effect waves-light disabled" type="button" onclick="selectThird()">下一步</button>
        </div>
      </div>
      <div id="cal-tab-3" class="card">
        <div class="card-content">
          <div style="text-align: center;">
            <h5>我的每日热量摄入目标</h5>
          </div>
          <table>
            <tbody>
              <tr>
                <th>维持体重所需热量:</th>
                <td id="maintenance" class="text-right"></td>
              </tr>
              <tr>
                <th>减肥热量目标:</th>
                <td id="goal" class="text-right"></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </form>
  </div>



  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="js/bootstrap.min.js" type="text/javascript"></script>
  <script type="text/javascript">
    var bmr = 0;
    $(document).ready(function(){
      if(window.location.href.indexOf("calculator") > -1) {
         $('#calculator .nav-link').addClass('active');
      }
    });

    var check1stform = function() {
      var is_valid = $('#cal-tab-1 input[type!="checkbox"]').map(function() {
        return !!$(this).val();
      })
      .get()
      .reduce(function(t, n) {
        return t && n;
      });
      if(is_valid && $('#cal-tab-1 input:checked').length) {
        $('#cal-tab-1 button').removeClass('disabled');
        $('#cal-tabs .tab:eq(1)').removeClass('disabled');
      }
      else {
        $('#cal-tab-1 button').addClass('disabled');
        $('#cal-tabs .tab:eq(1)').addClass('disabled');
      }
    };

    var check2ndform = function() {
      if($('#cal-tab-2 input:checked').length) {
        $('#cal-tab-2 button').removeClass('disabled');
        $('#cal-tabs .tab:eq(2)').removeClass('disabled');
      }
      else {
        $('#cal-tab-2 button').addClass('disabled');
        $('#cal-tabs .tab:eq(2)').addClass('disabled');
      }
    }

    $('#male').on('change', function() {
      $('#female').prop('checked', false);
      check1stform();
    });
    $('#female').on('change', function() {
      $('#male').prop('checked', false);
      check1stform();
    });
    $('#cal-tab-1 input').keyup(check1stform);

    $('#cal-tab-2 input[name="activity"]').on('change', check2ndform);


    function selectSecond() {
      var weight = parseInt($('#weight').val());
      var height = parseInt($('#height').val());
      var age = parseInt($('#age').val());
      bmr = $('#male').prop('checked')? Math.round(66 + (13.8 * weight) + (5 * height) - (5.8 * age)) : Math.round(655 + (9.4 * weight) + (1.6 * height) - (4.7 * age));
      $('#bmr').text(bmr);
      $('ul.tabs').tabs('select_tab', 'cal-tab-2');
    };
    function selectThird() {
      var activity = Math.round(bmr * parseFloat($('input[name=activity]:checked').val()));
      $('#activity').text(activity);
      $('ul.tabs').tabs('select_tab', 'cal-tab-3');

      $('#maintenance').text(activity);
      $('#goal').text(Math.round(activity * 0.8));
    };
  </script>
  <div style="display:none">
    <script src="https://s19.cnzz.com/z_stat.php?id=1272824792&web_id=1272824792" language="JavaScript"></script>
  <script type="text/javascript">
  var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1272824792'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s19.cnzz.com/z_stat.php%3Fid%3D1272824792' type='text/javascript'%3E%3C/script%3E"));</script>
</div>



  </body>
</html>
