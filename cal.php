<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Starter Template - Materialize</title>

  <!-- CSS  -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
  <link href="css/main.css" rel="stylesheet" type="text/css"/>
  <style media="screen">
    #cal-tabs a {
      color: #000;
    }
    #cal-tabs .indicator {
      background-color: #26a69a;
    }
    #cal-tab-1, #cal-tab-2,#cal-tab-3 {
      max-width: 500px;
      margin: 50px auto;
    }
    [type="checkbox"]+label {
      padding-left: 28px;
      margin-right: 25px;
    }
  </style>
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
        <li class="tab"><a class="active" href="#cal-tab-1">基础代谢率(BMR)</a></li>
        <li class="tab"><a href="#cal-tab-2">每日热量消耗</a></li>
        <li class="tab"><a href="#cal-tab-3">每日热量摄入目标</a></li>
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
          <label for="weight">体重</label>
        </div>
        <div class="input-field">
          <input id="height" type="number">
          <label for="height">身高</label>
        </div>
        <div class="input-field">
          <input id="age" type="number">
          <label for="age">周岁</label>
        </div>
        <div style="text-align: center;">
          <button class="btn waves-effect waves-light" type="button" onclick="selectSecond()">下一步</button>
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
          <button class="btn waves-effect waves-light" type="button" onclick="selectThird()">下一步</button>
        </div>
      </div>
      <div id="cal-tab-3">
        <div style="text-align: center;">
          <h4>我的每日热量摄入目标: <strong id="goal"></strong></h4>
        </div>
      </div>
    </form>
    <div id="bmr" style="
        position: absolute;
        top: 50px;
        left: 25%;
    "></div>
    <div id="activity" style="
        position: absolute;
        top: 50px;
        left: 48%;
    "></div>

  </div>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
  <script type="text/javascript">
  var bmr = 0;
    $('#male').on('change', function() {
      $('#female').prop('checked', false);
    });
    $('#female').on('change', function() {
      $('#male').prop('checked', false);
    });
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

      $('#goal').text(Math.round(activity * 0.8));
    };
  </script>

  </body>
</html>
