<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scoreboard Basket</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}"> 


    <style>
    .largebox-div {
  background-color:white;
   color:#fff; 
  width:800px;
  height: 425px;
  border: 2px solid red;
  margin-left: auto;
    margin-right: auto;
  border-radius:10px;
}
.box2{
  background-color:#000;
  top:50%;
  left:60%;
  margin-top:-44px;
  margin-left:-60px;
    color:#fff;
    width:50%;
}
.child-div{
  background-color:black;
  width:58%;
  height: 200px;
  margin-left: 285px;
    margin-right:-60px;
  margin-top:-418px;
    top:50%; 
}
.next-div{
  background-color:black;
  width:58%;
  height: 200px;
  margin-left: 285px;
    margin-right:-60px;
  margin-top:8px;
    top:50%; 
}
.home-team{
   background-color:white;
  width:12%;
  height: 30px;
  color:black;
  margin-left: 315px;
    margin-right:-800px;
  margin-top:-394px;
    top:50%; 
  text-align:center;
}
.home-score{
  background-color:black;
  border: 3px solid white;
  width:11.5%;
  height: 100px;
  margin-left: 315px;
    margin-right:-30px;
  margin-top:-32px;
    top:80%;
  color:#b9bdbf;
  text-align:center;
}
.away-team{
    background-color:white;
  width:12%;
  height: 30px;
  color: black;
  margin-left: 870px;
    margin-right:-60px;
  margin-top:-30px;
    top:50%; 
  text-align:center;
}
.away-score{
   background-color:black;
  width:11.5%;
  height: 100px;
  margin-left: 870px;
    margin-right:-30px;
  margin-top:-106px;
    top:80%;
  color:#b9bdbf;
  border:3px solid white;
  text-align:center;
}
.timer{
   background-color:black;
  width:16%;
  height: 80px;
  margin-left: 560px;
    margin-right:90px;
  margin-top:-30px;
    top:50%; 
  border:3px solid white;
  text-align:center;
}
.twodigit{
     background-color:#000;
  width:5%;
  height: 60px;
  margin-left: 575px;
    margin-right:90px;
  margin-top:-75px;
    top:50%; 
  border:2px solid white;
  text-align:center;
}
.nexttwodigit{
  background-color:#000;
  width:5%;
  height: 60px;
  margin-left: 695px;
    margin-right:90px;
  margin-top:-63px;
    top:50%; 
  border:2px solid white;
  text-align:center;
}
.doubledot {
    background-color:black;
  width:1.5%;
  height: 60px;
  margin-left: 658px;
    margin-right:90px;
  margin-top:-64px;
    top:50%;
  color:yellow;
  font-size:50px;
 
  text-align:center;
}
.period{
   background-color:black;
  width:10%;
  height: 30px;
  margin-left: 550px;
    margin-right:-50px;
  margin-top:-30px;
    top:50%;
    /* border:2px solid white; */
  color:yellow;
  text-align:right;
  font-size:20px;
}
.periodscore{
  background-color:black;
  border:3px solid black;
  width:4%;
  height: 60px;
  margin-left: 700px;
    margin-right:-50px;
  margin-top:-40px;
    top:50%;
    border:2px solid white;
  color:#fff;
  text-align:center;
}
.foul-home{
  background-color:white;
  width:12%;
  height: 30px;
  color:black;
  margin-left: 450px;
    margin-right:-800px;
  margin-top:45px;
    top:50%; 
  text-align:center;
}
.foul-away{
   background-color:white;
  width:12%;
  height: 30px;
  color:black;
  margin-left: 720px;
    margin-right:-800px;
  margin-top:-30px;
    top:50%; 
  text-align:center;
}
.foulhomescore{
  background-color:black;
  width:11.5%;
  height: 100px;
  border:3px solid white;
  color:#fff;
  margin-left: 450px;
    margin-right:-800px;
  margin-top:10px;
    top:50%; 
  text-align:center;
}
.foulawayscore{
   background-color:black;
  width:11.5%;
  height: 100px;
  border:3px solid white;
  color:#fff;
  margin-left: 720px;
    margin-right:-800px;
  margin-top:-105px;
    top:50%; 
  text-align:center;
}
.player{
    background-color:#000;
  width:11.5%;
  height: 35px;
  color:#fff;
  margin-left: 546px;
    margin-right:-800px;
  margin-top: -140px;
    top:50%; 
  text-align:center;
}
.playerscore{
   background-color:#fff;
  width:11%;
  height: 100px;
  border:3px solid black;
  color:#fff;
  margin-left: 545px;
    margin-right:-800px;
  margin-top:5px;
    top:50%; 
  text-align:center;
}
.fouls{
   background-color:black;
  width:10%;
  height: 34px;
  margin-left: 706px;
    margin-right:-50px;
  margin-top:-145px;
    top:50%;
  color:#fff;
  text-align:center;
}
.foulsscore{
  background-color:#fff;
  width:9.5%;
  height: 100px;
  border:3px solid black;
  color:#fff;
  margin-left: 706px;
    margin-right:-800px;
  margin-top:6px;
    top:50%; 
  text-align:center;
}
.tol-home{
  background-color:#000;
  width:4%;
  height: 30px;
  margin-left: 480px;
    margin-right:-40px;
  margin-top:-40px;
    top:50%;
  color:#fff;
  text-align:center;
}
.tol-away{
  width:40%;
  height:30px;
  background-color:pink;
  color:#000;
  margin-left:-44px;
  margin-top:-30;
  left:40%;
  top:50%; 
}
    </style>
</head>
<body>

<center>
<h1>SCOREBOARD</h1>
</center>

<audio id="audio1">
 <source src="{{ asset('lagu/sound1.mp3') }}" type="audio/mpeg">
  Your browser does not support the audio element.
</audio>

<audio id="audio2">
 <source src="{{ asset('lagu/sound2.mp3') }}" type="audio/mpeg">
  Your browser does not support the audio element.
</audio>

<audio id="audio3">
 <source src="{{ asset('lagu/sound3.mp3') }}" type="audio/mpeg">
  Your browser does not support the audio element.
</audio>

<audio id="audio4">
 <source src="{{ asset('lagu/sound4.mp3') }}" type="audio/mpeg">
  Your browser does not support the audio element.
</audio>

<centre>
  <div class="largebox-div">
  </div>
  <span></span>
  <span></span>
  <div class="child-div"></div>
  <div class="next-div"></div>
  <div class="home-team" style="font-size:20px; font-weight:bold;" id="name_home">HOME</div>
  <div class="away-team"  style="font-size:20px; font-weight:bold;" id="name_away">AWAY</div>
  <div class="timer"></div>
  <div class="twodigit" style="color:yellow; font-size:50px;" id="timer_menit">09</div>
  <div class="nexttwodigit" style="color:yellow; font-size:50px;" id="timer_detik">59</div>
  <div class="doubledot">:</div>
  <div class="home-score" style="color:red; font-size:75px; " id="score_home">99</div>
  <div class="away-score" style="color:red; font-size:75px; " id="score_away">100</div>
  <div class="period" style="font-weight:bold;">PERIOD</div>
  <div class="periodscore" style="color:yellow; font-size:55px;" id="period">0</div>
  <div class="foul-home" style="font-weight:bold;">FOULS</div>
  <div class="foul-away" style="font-weight:bold;">FOULS</div>
  <div class="foulhomescore" style="color:lime; font-size:75px; " id="fouls_home">0</div>
  <div class="foulawayscore" style="color:lime; font-size:75px; " id="fouls_away">0</div>
  <!-- <div class="player">PLAYER</div>
  <div class="playerscore"></div>
  <div class="fouls">FOULS</div>
  <div class="foulsscore"></div>
  <div class="tol-home">TOL</div>
  <span class="tol-away">TOL</span> -->
  <div class="test" id="timer" style="color:white;"></div>
  
  
  
</centre>

<script>
var stop;
var menit;
var detik;
window.onload = function() {
    var sse = new EventSource("<?php echo action('scoreboardController@update_sse'); ?>");
      sse.onmessage = function(e) {
          console.log(e);
          var data_json = JSON.parse(e.data);
        //   console.log(data_json);
        //   console.log(data_json[0].musik);
          document.getElementById("name_home").innerHTML=data_json[0].name_home;
          document.getElementById("name_away").innerHTML=data_json[0].name_away;
          document.getElementById("score_home").innerHTML=data_json[0].score_home;
          document.getElementById("score_away").innerHTML=data_json[0].score_away;
          document.getElementById("period").innerHTML=data_json[0].period;
          document.getElementById("fouls_away").innerHTML=data_json[0].fouls_away;
          document.getElementById("fouls_home").innerHTML=data_json[0].fouls_home;
         
          // document.getElementById('timer').innerHTML = data_json[0].menit + ":" + data_json[0].detik;
      
          
          if(data_json[0].musik==1){
            var audio1 = document.getElementById("audio1");
            stop_audio2_audio3();
            audio1.play();
            update_sound();
          }
          if(data_json[0].musik==2){
            var audio2 = document.getElementById("audio2");
            stop_audio1_audio3();
            audio2.play();
            update_sound();
          }
          if(data_json[0].musik==3){
            var audio3 = document.getElementById("audio3");
            stop_audio();
            // audio3.play();
            // update_sound();
          }
          
          document.getElementById('timer_menit').innerHTML = data_json[0].menit;
          document.getElementById('timer_detik').innerHTML = data_json[0].detik;
          document.getElementById('timer').innerHTML = data_json[0].menit + ":" + data_json[0].detik;
          
          if(data_json[0].status_waktu==1){
            startTimer();
            function startTimer() {
            // console.log('masuk startimer');
                    var presentTime = document.getElementById('timer').innerHTML;
                    var timeArray = presentTime.split(/[:]+/);
                    var m = timeArray[0];
                    var s = checkSecond((timeArray[1] - 1));
                    if(s==59){m=m-1}
                    if(m<0){
                        if(data_json[0].menit==0 && data_json[0].detik==00){
                            var audio4 = document.getElementById("audio4");
                            audio4.play();
                            console.log('timer completed');
                        }
                        // console.log(stop);
                    }
                    else{
                        // document.getElementById('timer').innerHTML =
                        // m + ":" + s;
                        menit = m;
                        detik = s;
                        insert_menit_detik();
                        console.log(m);
                        console.log(s);
                        setTimeout(startTimer, 1000*1000);
                    }
                }
                function checkSecond(sec) {
                        if (sec < 10 && sec >= 0) {sec = "0" + sec}; // add zero in front of numbers < 10
                        if (sec < 0) {sec = "59"};
                        return sec;
                }
          }
      
          
        //   tutup-sse
      }
}
function insert_menit_detik(){
              // console.log(menit);
              // console.log(detik);
      $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
        var url = '{{ url('update-menit-detik') }}';
        $.ajax({
           url:url,
           method:'POST',
           data:{
              name_menit:menit, 
              name_detik:detik, 
           },
           success:function(response){
              if(response.success){
                  // console.log(response.message);
              }else{
                  alert("Error")
              }
           },
           error:function(error){
              console.log(error)
           }
                });
}
function stop_audio(){
      audio1.pause();
      audio1.currentTime = 0;
      audio2.pause();
      audio2.currentTime = 0;
      audio3.pause();
      audio3.currentTime = 0;
}
function stop_audio2_audio3(){
      audio2.pause();
      audio2.currentTime = 0;
      audio3.pause();
      audio3.currentTime = 0;
}
function stop_audio1_audio3(){
      audio1.pause();
      audio1.currentTime = 0;
      audio3.pause();
      audio3.currentTime = 0;
}
function update_sound(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
        var url = '{{ url('update-sound') }}';
        $.ajax({
           url:url,
           method:'POST',
           data:{
              
           },
           success:function(response){
              if(response.success){
                  console.log(response.message);
              }else{
                  alert("Error")
              }
           },
           error:function(error){
              console.log(error)
           }
                });
        }
</script>
    
</body>
</html>