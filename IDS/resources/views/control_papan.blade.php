@extends('layout.main') 
@section('layout.content')
<meta name="csrf-token" content="{{ csrf_token() }}"> 
<h5>Pertandingan</h5>

<div class="form-row mt-3">

                    <div class="col-md-4 mb-3">

                    <form action=""  method="POST">
                        <label for="validationCustom03">Home</label>
                        <input type="text" class="form-control" name ="nama_home" id="nama" placeholder="Masukkan Home" >
                        </div>

                        <div class="col-md-2 mb-3"  style="margin-top:4px;">
                        <button type="button" class="btn btn-success mt-md-4 btn-submit-home">Submit</button>
                        </form>
                        </div>
                    

                    <div class="col-md-4 mb-3">
                    <form action="" method="POST">
                    <label for="validationCustom03">Away</label>
                    <input type="text" class="form-control" name ="nama_away" id="nama" placeholder="Masukkan Away" >
                    </div>

                    <div class="col-md-2 mb-3" style="margin-top:4px;">
                    <button type="submit" class="btn btn-success mt-md-4 btn-submit-away"  >Submit</button>
                    </form>
                    </div>
                   
</div>

<div class="form-row">
    <div class="col-md-10 mb-3">
            <h5>Period</h5>
            <input type="text" class="form-control" name ="nama_home" id="period_saat_ini" placeholder="Period saat ini..." >
    </div>
    <div class="col-md-2 mb-3">
            <button type="submit" class="btn btn-danger mt-md-4 btn-submit-resetperiod">Reset</button>
    </div>
</div>

<div class="form-row">
    <div class="col-md-6 mb-3 text-md-right">
        <form action="" method="POST">
            <button type="submit" class="btn btn-primary btn-submit-plus1period mr-2">+ 1 Period</button>
        </form>
    </div>

    <div class="col-md-6 mb-3">
        <form action="" method="POST">
            <button type="submit" class="btn btn-danger btn-submit-minus1period">- 1 Period</button>
        </form>
    </div>
</div>

<h5>Score</h5>
<div class="form-row mt-3">

    <div class="col-md-4">
        <label for="validationCustom03">Home</label>
        <input type="text" class="form-control" name ="score_home" id="skor_home_saat_ini" placeholder="Skor saat ini..."  readonly>
    </div>

    <div class="col-md-1" style="margin-top:4px;">
    <form action="" method="POST">
        <button type="submit" class="btn btn-danger mt-md-4 btn-submit-reset-home">Reset</button>
    </form>
    </div>


    <div class="col-md-1"></div>

    <div class="col-md-4">
        <label for="validationCustom03">Away</label>
        <input type="text" class="form-control" name ="score_away" id="skor_away_saat_ini" placeholder="Skor saat ini..."  readonly>

                   

    </div>

    <div class="col-md-1" style="margin-top:4px;">
    <form action="" method="POST">
        <button type="submit" class="btn btn-danger mt-md-4 btn-submit-reset-away">Reset</button>
    </form>
    </div>



</div>

<center>

<div class="form-row mt-3">
    <div class="col-md-2">
        <form action="" method="POST">
            <button type="submit" class="btn btn-primary btn-submit-homeplus2" name="homeplus2">+ 2 Home</button>
        </form>
    </div>

    <div class="col-md-2">
        <form action="" method="POST">
            <button type="submit" class="btn btn-danger btn-submit-homeminus2" name="homeminus2">- 2 Home</button>
        </form>
    </div>
    <div class="col-md-2">
    </div>

    <div class="col-md-2">
        <form action="" method="POST">
            <button type="submit" class="btn btn-primary btn-submit-awayplus2" name="awayplus2">+ 2 Away</button>
        </form>
    </div>

    <div class="col-md-2">
        <form action="" method="POST">
            <button type="submit" class="btn btn-danger btn-submit-awayminus2" name="awayminus2">- 2 Away</button>
        </form>
    </div>
</div>
</center>

<center>
<div class="form-row mt-3">
    <div class="col-md-2">
        <form action="" method="POST">
            <button type="submit" class="btn btn-primary btn-submit-homeplus3" name="homeplus3">+ 3 Home</button>
        </form>
    </div>

    <div class="col-md-2">
        <form action="" method="POST">
            <button type="submit" class="btn btn-danger btn-submit-homeminus3" name="homeminus2">- 3 Home</button>
        </form>
    </div>

    <div class="col-md-2">
    </div>

    <div class="col-md-2">
        <form action="" method="POST">
            <button type="submit" class="btn btn-primary btn-submit-awayplus3" name="awayplus3">+ 3 Away</button>
        </form>
    </div>

    <div class="col-md-2">
        <form action="" method="POST">
            <button type="submit" class="btn btn-danger btn-submit-awayminus3" name="awayminus3">- 3 Away</button>
        </form>
    </div>
</div>
</center>

<br>
<div class="form-row">
                    <div class="col-md-4 mb-3">
                    <h5>Fouls</h5>
                    <label for="validationCustom05">Home</label>
                        <input type="text" class="form-control" name ="score_home" id="fouls_home_saat_ini" placeholder="Fouls saat ini..."  readonly>            
                    </div>

                    <div class="col-md-1" style="margin-top:9px;">
                    <form action="" method="POST">
                        <button type="submit" class="btn btn-danger mt-md-5 btn-submit-reset-fouls-home">Reset</button>
                    </form>
                    </div>

                    <!-- <div class="col-md-2 mb-3">
                    <center>
                    <h5>Period</h5>
                    <div class="coba">yay</div>
                    </center>
                    </div> -->
                    <div class="col-md-1 mb-3">
                    </div>

                    

                    <div class="col-md-4 mb-3 mt-md-4">
                    <!-- <h5>Fouls</h5> -->
                    <label for="validationCustom05 c">Away</label>
                        <input type="text" class="form-control" name ="score_home" id="fouls_away_saat_ini" placeholder="Fouls saat ini..."  readonly>            
                    </div>

                    <div class="col-md-1" style="margin-top:6px;">
                    <form action="" method="POST">
                        <button type="submit" class="btn btn-danger mt-md-5 btn-submit-reset-fouls-away">Reset</button>
                    </form>
                    </div>
</div>

<center>

<div class="form-row">
    <div class="col-md-2">
        <form action="" method="POST">
            <button type="submit" class="btn btn-primary btn-submit-home-foulsplus1" name="homeplus2">+ 1 Home</button>
        </form>
    </div>

    <div class="col-md-2">
        <form action="" method="POST">
            <button type="submit" class="btn btn-danger btn-submit-home-foulsminus1" name="homeminus2">- 1 Home</button>
        </form>
    </div>
    <div class="col-md-2">
    </div>

    <div class="col-md-2">
        <form action="" method="POST">
            <button type="submit" class="btn btn-primary btn-submit-away-foulsplus1" name="awayplus2">+ 1 Away</button>
        </form>
    </div>

    <div class="col-md-2">
        <form action="" method="POST">
            <button type="submit" class="btn btn-danger btn-submit-away-foulsminus1" name="awayminus2">- 1 Away</button>
        </form>
    </div>
</div>
</center>


<div class="form-row">
<div class="col-md-6">
<h5 class="mt-3">Timer</h5>
</div>
<div class="col-md-6">
<h5 class="mt-3">Music</h5>

</div>
</div>

<center>
<div class="form-row mt-3">
    <div class="col-md-2">
        <form action="/store-start-timer" method="POST">
            <button type="submit" class="btn btn-primary btn-submit-start-timer" name="start_timer">Start Timer</button>
        </form>
    </div>

    <div class="col-md-2">
        <form action="/store-resume-timer" method="POST">
            <button type="submit" class="btn btn-primary btn-submit-resume-timer" name="resume_timer">Resume Timer</button>
        </form>
    </div>

    <div class="col-md-2">
        <form action="/store-stop-timer" method="POST">
            <button type="submit" class="btn btn-danger btn-submit-stop-timer" name="stop_timer">Stop Timer</button>
        </form>
    </div>

    <div class="col-md-2">
        <form action="" method="POST">
            <button type="submit" class="btn btn-primary btn-submit-sound1" name="homeminus2">Sound 1</button>
        </form>
    </div>

    <div class="col-md-2">
        <form action="" method="POST">
            <button type="submit" class="btn btn-primary btn-submit-sound2" name="homeminus2">Sound 2</button>
        </form>
    </div>

    <div class="col-md-2">
        <form action="" method="POST">
            <button type="submit" class="btn btn-primary btn-submit-sound3" name="homeminus2">Stop</button>
        </form>
    </div>
    
</div>
</center>




@endsection

@section('script')
<script>
 $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(".btn-submit-home").click(function(e){
        e.preventDefault();
        var home = $("input[name=nama_home]").val();
        var url = '{{ url('store-home') }}';
        $.ajax({
           url:url,
           method:'POST',
           data:{
                  name_home:home, 
                },
           success:function(response){
              if(response.success){
                //   alert(response.message)
                alert_home(); 
              }else{
                  alert("Error")
              }
           },
           error:function(error){
              console.log(error)
           }
        });
	});
</script>

<script>
 $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(".btn-submit-away").click(function(e){
        e.preventDefault();
        var away = $("input[name=nama_away]").val();
        var url = '{{ url('store-away') }}';
        $.ajax({
           url:url,
           method:'POST',
           data:{
                  name_away:away, 
                },
           success:function(response){
              if(response.success){
                //   alert(response.message)
                alert_away(); 
              }else{
                  alert("Error")
              }
           },
           error:function(error){
              console.log(error)
           }
        });
	});
</script>

<script>
 $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(".btn-submit-homeplus2").click(function(e){
        console.log('masukplus2home');
        e.preventDefault();
        var homeplus2 = $("input[name=homeplus2]").val();
        var url = '{{ url('store-homeplus2') }}';
        $.ajax({
           url:url,
           method:'POST',
           data:{
              
           },
           success:function(response){
              if(response.success){
                skor_home_saat_ini();
                skor_away_saat_ini();
                //   alert(response.message);
                plus2_alert_home();
                  
              }else{
                  alert("Error")
              }
           },
           error:function(error){
              console.log(error)
           }
        });
    });
    
    function skor_home_saat_ini(){
        console.log('masuk skor_home_saat_ini');
                    jQuery.ajax({
                     url : 'get-score',
                     type : "GET",
                     dataType : "json",
                     success:function(data)
                     {
                        console.log(data);
                        jQuery.each(data, function(key,value){
                            console.log('masuk jquery each');
                            document.getElementById("skor_home_saat_ini").value = value.score_home;
                        }); 
                     }
                  });
    }
    function skor_away_saat_ini(){
        console.log('masuk skor_away_saat_ini');
                    jQuery.ajax({
                     url : 'get-score',
                     type : "GET",
                     dataType : "json",
                     success:function(data)
                     {
                        console.log(data);
                        jQuery.each(data, function(key,value){
                            console.log('masuk jquery each');
                            document.getElementById("skor_away_saat_ini").value = value.score_away;
                        }); 
                     }
                  });
    }
    function fouls_home_saat_ini(){
        console.log('masuk fouls_home_saat_ini');
                    jQuery.ajax({
                     url : 'get-score',
                     type : "GET",
                     dataType : "json",
                     success:function(data)
                     {
                        console.log(data);
                        jQuery.each(data, function(key,value){
                            console.log('masuk jquery each');
                            document.getElementById("fouls_home_saat_ini").value = value.fouls_home;
                        }); 
                     }
                  });
    }
    function fouls_away_saat_ini(){
        console.log('masuk fouls_away_saat_ini');
                    jQuery.ajax({
                     url : 'get-score',
                     type : "GET",
                     dataType : "json",
                     success:function(data)
                     {
                        console.log(data);
                        jQuery.each(data, function(key,value){
                            console.log('masuk jquery each');
                            document.getElementById("fouls_away_saat_ini").value = value.fouls_away;
                        }); 
                     }
                  });
    }
    function period_saat_ini(){
        console.log('masuk period_saat_ini');
                    jQuery.ajax({
                     url : 'get-score',
                     type : "GET",
                     dataType : "json",
                     success:function(data)
                     {
                        console.log(data);
                        jQuery.each(data, function(key,value){
                            console.log('masuk jquery each');
                            document.getElementById("period_saat_ini").value = value.period;
                        }); 
                     }
                  });
    }
</script>

<script>
 $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(".btn-submit-homeminus2").click(function(e){
        console.log('masukminus2home');
        e.preventDefault();
        var url = '{{ url('store-homeminus2') }}';
        $.ajax({
           url:url,
           method:'POST',
           data:{
              
           },
           success:function(response){
              if(response.success){
                skor_home_saat_ini();
                skor_away_saat_ini();
                //   alert(response.message);
                minus2_alert_home();
              }else{
                  alert("Error")
              }
           },
           error:function(error){
              console.log(error)
           }
        });
    });
</script>

<script>
 $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(".btn-submit-homeplus3").click(function(e){
        console.log('masukhomeplus3');
        e.preventDefault();
        var url = '{{ url('store-homeplus3') }}';
        $.ajax({
           url:url,
           method:'POST',
           data:{
              
           },
           success:function(response){
              if(response.success){
                skor_home_saat_ini();
                skor_away_saat_ini();
                //   alert(response.message);
                plus3_alert_home();
              }else{
                  alert("Error")
              }
           },
           error:function(error){
              console.log(error)
           }
        });
    });
</script>

<script>
 $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(".btn-submit-homeminus3").click(function(e){
        console.log('masukhomeminus3');
        e.preventDefault();
        var url = '{{ url('store-homeminus3') }}';
        $.ajax({
           url:url,
           method:'POST',
           data:{
              
           },
           success:function(response){
              if(response.success){
                skor_home_saat_ini();
                skor_away_saat_ini();
                //   alert(response.message);
                minus3_alert_home();
              }else{
                  alert("Error")
              }
           },
           error:function(error){
              console.log(error)
           }
        });
    });
</script>



<script>
 $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(".btn-submit-awayplus2").click(function(e){
        console.log('masukawayplus2');
        e.preventDefault();
        var url = '{{ url('store-awayplus2') }}';
        $.ajax({
           url:url,
           method:'POST',
           data:{
              
           },
           success:function(response){
              if(response.success){
                skor_away_saat_ini();
                skor_home_saat_ini();
                //   alert(response.message);
                plus2_alert_away();
              }else{
                  alert("Error")
              }
           },
           error:function(error){
              console.log(error)
           }
        });
    });
</script>

<script>
 $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(".btn-submit-awayplus3").click(function(e){
        console.log('awayplus3');
        e.preventDefault();
        var url = '{{ url('store-awayplus3') }}';
        $.ajax({
           url:url,
           method:'POST',
           data:{
              
           },
           success:function(response){
              if(response.success){
                skor_away_saat_ini();
                skor_home_saat_ini();
                //   alert(response.message);
                plus3_alert_away();
              }else{
                  alert("Error")
              }
           },
           error:function(error){
              console.log(error)
           }
        });
    });
</script>

<script>
 $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(".btn-submit-awayminus3").click(function(e){
        console.log('awayminus3');
        e.preventDefault();
        var url = '{{ url('store-awayminus3') }}';
        $.ajax({
           url:url,
           method:'POST',
           data:{
              
           },
           success:function(response){
              if(response.success){
                skor_away_saat_ini();
                skor_home_saat_ini();
                //   alert(response.message);
                minus3_alert_away();
              }else{
                  alert("Error")
              }
           },
           error:function(error){
              console.log(error)
           }
        });
    });
</script>

<script>
 $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(".btn-submit-awayminus2").click(function(e){
        console.log('awayminus2');
        e.preventDefault();
        var url = '{{ url('store-awayminus2') }}';
        $.ajax({
           url:url,
           method:'POST',
           data:{
              
           },
           success:function(response){
              if(response.success){
                skor_away_saat_ini();
                skor_home_saat_ini();
                //   alert(response.message);
                minus2_alert_away();
              }else{
                  alert("Error")
              }
           },
           error:function(error){
              console.log(error)
           }
        });
    });
</script>


<script>
 $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(".btn-submit-sound1").click(function(e){
        console.log('sound1');
        e.preventDefault();
        var url = '{{ url('store-sound1') }}';
        $.ajax({
           url:url,
           method:'POST',
           data:{
              
           },
           success:function(response){
              if(response.success){
                //   alert(response.message);
                alert_sound1();
              }else{
                  alert("Error")
              }
           },
           error:function(error){
              console.log(error)
           }
        });
    });
</script>

<script>
 $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(".btn-submit-sound2").click(function(e){
        console.log('sound2');
        e.preventDefault();
        var url = '{{ url('store-sound2') }}';
        $.ajax({
           url:url,
           method:'POST',
           data:{
              
           },
           success:function(response){
              if(response.success){
                //   alert(response.message);
                alert_sound2();
              }else{
                  alert("Error")
              }
           },
           error:function(error){
              console.log(error)
           }
        });
    });
</script>

<script>
 $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(".btn-submit-sound3").click(function(e){
        console.log('sound3');
        e.preventDefault();
        var url = '{{ url('store-sound3') }}';
        $.ajax({
           url:url,
           method:'POST',
           data:{
              
           },
           success:function(response){
              if(response.success){
                //   alert(response.message);
                alert_sound3();
              }else{
                  alert("Error")
              }
           },
           error:function(error){
              console.log(error)
           }
        });
    });
</script>

<script>
 $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(".btn-submit-start-timer").click(function(e){
        console.log('start-timer');
        e.preventDefault();
        var url = '{{ url('reset-menit-detik') }}';
        $.ajax({
           url:url,
           method:'POST',
           data:{
              
           },
           success:function(response){
              if(response.success){
                //   alert(response.message);
                alert_start_timer();
              }else{
                  alert("Error")
              }
           },
           error:function(error){
              console.log(error)
           }
        });
    });
</script>

<script>
 $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(".btn-submit-resume-timer").click(function(e){
        console.log('resume-timer');
        e.preventDefault();
        var url = '{{ url('resume-menit-detik') }}';
        $.ajax({
           url:url,
           method:'POST',
           data:{
              
           },
           success:function(response){
              if(response.success){
                //   alert(response.message);
                alert_resume_timer();
              }else{
                  alert("Error")
              }
           },
           error:function(error){
              console.log(error)
           }
        });
    });
</script>

<script>
 $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(".btn-submit-stop-timer").click(function(e){
        console.log('stop-timer');
        e.preventDefault();
        var url = '{{ url('stop-menit-detik') }}';
        $.ajax({
           url:url,
           method:'POST',
           data:{
              
           },
           success:function(response){
              if(response.success){
                //   alert(response.message);
                alert_stop_timer();
              }else{
                  alert("Error")
              }
           },
           error:function(error){
              console.log(error)
           }
        });
    });
</script>

<script>
$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(".btn-submit-reset-home").click(function(e){
        console.log('reset-home');
        e.preventDefault();
        var url = '{{ url('reset-skor-home') }}';
        $.ajax({
           url:url,
           method:'POST',
           data:{
              
           },
           success:function(response){
              if(response.success){
                skor_away_saat_ini();
                skor_home_saat_ini();
                //   alert(response.message);
                alert_reset_home();
                
              }else{
                  alert("Error")
              }
           },
           error:function(error){
              console.log(error)
           }
        });
    });
</script>

<script>
$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(".btn-submit-reset-away").click(function(e){
        console.log('reset-away');
        e.preventDefault();
        var url = '{{ url('reset-skor-away') }}';
        $.ajax({
           url:url,
           method:'POST',
           data:{
              
           },
           success:function(response){
              if(response.success){
                skor_away_saat_ini();
                skor_home_saat_ini();
                //   alert(response.message);
                alert_reset_away();
                
              }else{
                  alert("Error")
              }
           },
           error:function(error){
              console.log(error)
           }
        });
    });
</script>

<script>
$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(".btn-submit-home-foulsplus1").click(function(e){
        console.log('home-foulsplus1');
        e.preventDefault();
        var url = '{{ url('store-homefoulsplus1') }}';
        $.ajax({
           url:url,
           method:'POST',
           data:{
              
           },
           success:function(response){
              if(response.success){
                fouls_home_saat_ini();
                fouls_away_saat_ini();
                //   alert(response.message);
                plus1_alert_fouls_home();
              }else{
                  alert("Error")
              }
           },
           error:function(error){
              console.log(error)
           }
        });
    });
</script>

<script>
$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(".btn-submit-home-foulsminus1").click(function(e){
        console.log('home-foulsminus1');
        e.preventDefault();
        var url = '{{ url('store-homefoulsminus1') }}';
        $.ajax({
           url:url,
           method:'POST',
           data:{
              
           },
           success:function(response){
              if(response.success){
                fouls_home_saat_ini();
                fouls_away_saat_ini();
                //   alert(response.message);
                minus1_alert_fouls_home();
              }else{
                  alert("Error")
              }
           },
           error:function(error){
              console.log(error)
           }
        });
    });
</script>

<script>
$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(".btn-submit-away-foulsplus1").click(function(e){
        console.log('away-foulsplus1');
        e.preventDefault();
        var url = '{{ url('store-awayfoulsplus1') }}';
        $.ajax({
           url:url,
           method:'POST',
           data:{
              
           },
           success:function(response){
              if(response.success){
                fouls_home_saat_ini();
                fouls_away_saat_ini();
                //   alert(response.message);
                plus1_alert_fouls_away();
              }else{
                  alert("Error")
              }
           },
           error:function(error){
              console.log(error)
           }
        });
    });
</script>

<script>
$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(".btn-submit-away-foulsminus1").click(function(e){
        console.log('away-foulsminus1');
        e.preventDefault();
        var url = '{{ url('store-awayfoulsminus1') }}';
        $.ajax({
           url:url,
           method:'POST',
           data:{
              
           },
           success:function(response){
              if(response.success){
                fouls_home_saat_ini();
                fouls_away_saat_ini();
                //   alert(response.message);
                minus1_alert_fouls_away();
              }else{
                  alert("Error")
              }
           },
           error:function(error){
              console.log(error)
           }
        });
    });
</script>

<script>
$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(".btn-submit-reset-fouls-away").click(function(e){
        console.log('away-resetfoulsaway');
        e.preventDefault();
        var url = '{{ url('reset-fouls-away') }}';
        $.ajax({
           url:url,
           method:'POST',
           data:{
              
           },
           success:function(response){
              if(response.success){
                fouls_home_saat_ini();
                fouls_away_saat_ini();
                //   alert(response.message);
                alert_reset_fouls_away();
              }else{
                  alert("Error")
              }
           },
           error:function(error){
              console.log(error)
           }
        });
    });
</script>

<script>
$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(".btn-submit-reset-fouls-home").click(function(e){
        console.log('away-resetfoulshome');
        e.preventDefault();
        var url = '{{ url('reset-fouls-home') }}';
        $.ajax({
           url:url,
           method:'POST',
           data:{
              
           },
           success:function(response){
              if(response.success){
                fouls_home_saat_ini();
                fouls_away_saat_ini();
                //   alert(response.message);
                alert_reset_fouls_home();
              }else{
                  alert("Error")
              }
           },
           error:function(error){
              console.log(error)
           }
        });
    });
</script>

<script>
$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(".btn-submit-resetperiod").click(function(e){
        console.log('reset_period');
        e.preventDefault();
        var url = '{{ url('reset-period') }}';
        $.ajax({
           url:url,
           method:'POST',
           data:{
              
           },
           success:function(response){
              if(response.success){
                period_saat_ini();
                reset_alert_period();
                //   alert(response.message);
              }else{
                  alert("Error")
              }
           },
           error:function(error){
              console.log(error)
           }
        });
    });
</script>

<script>
$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(".btn-submit-plus1period").click(function(e){
        console.log('plus1_period');
        e.preventDefault();
        var url = '{{ url('store-plus1period') }}';
        $.ajax({
           url:url,
           method:'POST',
           data:{
              
           },
           success:function(response){
              if(response.success){
                period_saat_ini();
                //   alert(response.message);
                plus1_alert_period();
              }else{
                  alert("Error")
              }
           },
           error:function(error){
              console.log(error)
           }
        });
    });
</script>

<script>
$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(".btn-submit-minus1period").click(function(e){
        console.log('plus1_period');
        e.preventDefault();
        var url = '{{ url('store-minus1period') }}';
        $.ajax({
           url:url,
           method:'POST',
           data:{
              
           },
           success:function(response){
              if(response.success){
                period_saat_ini();
                //   alert(response.message);
                minus1_alert_period();
              }else{
                  alert("Error")
              }
           },
           error:function(error){
              console.log(error)
           }
        });
    });
</script>



<script>
    function alert_home(){
        toastr.options = {
        "closeButton": false,
        "debug": false,
        "newestOnTop": false,
        "progressBar": false,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "1000",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
        }
        toastr.info('Home Berhasil Diupdate . . .');       
    }
    function alert_away(){
        toastr.options = {
        "closeButton": false,
        "debug": false,
        "newestOnTop": false,
        "progressBar": false,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "1000",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
        }
        toastr.info('Away Berhasil Diupdate . . .');       
    }
    function plus2_alert_home(){
        toastr.options = {
        "closeButton": false,
        "debug": false,
        "newestOnTop": false,
        "progressBar": false,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "1000",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
        }
        toastr.info('Skor +2 Home Berhasil Ditambahkan . . .');       
    }
    function plus3_alert_home(){
        toastr.options = {
        "closeButton": false,
        "debug": false,
        "newestOnTop": false,
        "progressBar": false,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "1000",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
        }
        toastr.info('Skor +3 Home Berhasil Ditambahkan . . .');       
    }
    function minus2_alert_home(){
        toastr.options = {
        "closeButton": false,
        "debug": false,
        "newestOnTop": false,
        "progressBar": false,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "1000",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
        }
        toastr.info('Skor -2 Home Berhasil Ditambahkan . . .');       
    }
    function minus3_alert_home(){
        toastr.options = {
        "closeButton": false,
        "debug": false,
        "newestOnTop": false,
        "progressBar": false,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "1000",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
        }
        toastr.info('Skor -3 Home Berhasil Ditambahkan . . .');       
    }
    function plus2_alert_away(){
        toastr.options = {
        "closeButton": false,
        "debug": false,
        "newestOnTop": false,
        "progressBar": false,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "1000",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
        }
        toastr.info('Skor +2 Away Berhasil Ditambahkan . . .');       
    }
    function plus3_alert_away(){
        toastr.options = {
        "closeButton": false,
        "debug": false,
        "newestOnTop": false,
        "progressBar": false,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "1000",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
        }
        toastr.info('Skor +3 Away Berhasil Ditambahkan . . .');       
    }
    function minus2_alert_away(){
        toastr.options = {
        "closeButton": false,
        "debug": false,
        "newestOnTop": false,
        "progressBar": false,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "1000",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
        }
        toastr.info('Skor -2 Away Berhasil Ditambahkan . . .');       
    }
    function minus3_alert_away(){
        toastr.options = {
        "closeButton": false,
        "debug": false,
        "newestOnTop": false,
        "progressBar": false,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "1000",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
        }
        toastr.info('Skor -3 Away Berhasil Ditambahkan . . .');       
    }
    function alert_start_timer(){
        toastr.options = {
        "closeButton": false,
        "debug": false,
        "newestOnTop": false,
        "progressBar": false,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "1000",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
        }
        toastr.info('Timer Direset . . .');       
    }
    function alert_resume_timer(){
        toastr.options = {
        "closeButton": false,
        "debug": false,
        "newestOnTop": false,
        "progressBar": false,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "1000",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
        }
        toastr.info('Timer Dimulai . . .');       
    }
    function alert_stop_timer(){
        toastr.options = {
        "closeButton": false,
        "debug": false,
        "newestOnTop": false,
        "progressBar": false,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "1000",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
        }
        toastr.info('Timer dihentikan . . .');       
    }
    function alert_sound1(){
        toastr.options = {
        "closeButton": false,
        "debug": false,
        "newestOnTop": false,
        "progressBar": false,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "1000",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
        }
        toastr.info('Sound 1 Berhasil Di Putar . . .');       
    }
    function alert_sound2(){
        toastr.options = {
        "closeButton": false,
        "debug": false,
        "newestOnTop": false,
        "progressBar": false,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "1000",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
        }
        toastr.info('Sound 2 Berhasil Di Putar . . .');       
    }
    function alert_sound3(){
        toastr.options = {
        "closeButton": false,
        "debug": false,
        "newestOnTop": false,
        "progressBar": false,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "1000",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
        }
        toastr.info('Sound Dimatikan');       
    }
    function alert_reset_home(){
        toastr.options = {
        "closeButton": false,
        "debug": false,
        "newestOnTop": false,
        "progressBar": false,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "1000",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
        }
        toastr.info('Skor Home Berhasil Di Reset . . .');       
    }
    function alert_reset_away(){
        toastr.options = {
        "closeButton": false,
        "debug": false,
        "newestOnTop": false,
        "progressBar": false,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "1000",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
        }
        toastr.info('Skor Away Berhasil Di Reset . . .');       
    }
    function plus1_alert_fouls_away(){
        toastr.options = {
        "closeButton": false,
        "debug": false,
        "newestOnTop": false,
        "progressBar": false,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "1000",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
        }
        toastr.info('Fouls +1 Away Berhasil Ditambahkan . . .');       
    }
    function minus1_alert_fouls_away(){
        toastr.options = {
        "closeButton": false,
        "debug": false,
        "newestOnTop": false,
        "progressBar": false,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "1000",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
        }
        toastr.info('Fouls -1 Away Berhasil Ditambahkan . . .');       
    }
    function plus1_alert_fouls_home(){
        toastr.options = {
        "closeButton": false,
        "debug": false,
        "newestOnTop": false,
        "progressBar": false,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "1000",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
        }
        toastr.info('Fouls +1 Home Berhasil Ditambahkan . . .');       
    }
    function minus1_alert_fouls_home(){
        toastr.options = {
        "closeButton": false,
        "debug": false,
        "newestOnTop": false,
        "progressBar": false,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "1000",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
        }
        toastr.info('Fouls -1 Home Berhasil Ditambahkan . . .');       
    }
    function alert_reset_fouls_away(){
        toastr.options = {
        "closeButton": false,
        "debug": false,
        "newestOnTop": false,
        "progressBar": false,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "1000",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
        }
        toastr.info('Fouls Away Berhasil Di Reset . . .');       
    }
    function alert_reset_fouls_home(){
        toastr.options = {
        "closeButton": false,
        "debug": false,
        "newestOnTop": false,
        "progressBar": false,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "1000",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
        }
        toastr.info('Fouls Home Berhasil Di Reset . . .');       
    }
    function plus1_alert_period(){
        toastr.options = {
        "closeButton": false,
        "debug": false,
        "newestOnTop": false,
        "progressBar": false,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "1000",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
        }
        toastr.info('Period +1 Berhasil Ditambahkan . . .');       
    }
    function minus1_alert_period(){
        toastr.options = {
        "closeButton": false,
        "debug": false,
        "newestOnTop": false,
        "progressBar": false,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "1000",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
        }
        toastr.info('Period -1 Berhasil Ditambahkan . . .');       
    }
    
    function reset_alert_period(){
        toastr.options = {
        "closeButton": false,
        "debug": false,
        "newestOnTop": false,
        "progressBar": false,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "1000",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
        }
        toastr.info('Period Berhasil Direset . . .');       
    }
    
</script>

@endsection