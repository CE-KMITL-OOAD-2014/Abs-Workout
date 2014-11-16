
<!DOCTYPE html>
<!-- saved from url=(0040)http://getbootstrap.com/examples/signin/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="1.ico">


<title>{{"ท่าออกกำลังกาย"}}</title>

<!-- Bootstrap core CSS -->
<link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="http://getbootstrap.com/examples/signin/signin.css" rel="stylesheet">


    </head>

    <body>

     <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">Abs-Workout</a>
        </div>
        <div class="navbar-collapse collapse">
         <ul class="nav navbar-nav">
          <li><a href="/">Home</a></li>
          <li><a href="/viewprogram">Program</a></li>
          <li><a href="/statistic">Statistic</a></li>
          
        </ul>
        <form class="navbar-form navbar-right" role="form">

            <img class="img-circle" src="/profilepicture/{{Auth::user()->image}}" alt="Generic placeholder image" style="width: 35px; height: 35px;">&nbsp
            <a href="/profile">{{Auth::user()->username}}</a>&nbsp
            <font color="blue">|</font>&nbsp
            <a href="/logout">Logout</a>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </div>




    <div class="container">
      <div class="col-md-4  col-md-offset-4">   
        <br>
        <h2 class="form-signup-heading">{{$exercise->name}}</h2>
      </br>
      <div class="form-group">
        <img class="img-square" src="/image/{{$exercise->image}}" alt="Generic placeholder image" style="width: 140px; height: 140px;">

      </div>

      <br>
      <div class="form-group">

       {{"ชื่อท่าออกกำลังกาย : "}}{{$exercise->name}}

     </div>

     <div class="form-group">

       {{"จำนวนครั้ง : "}}{{$exercise->timeperset}}{{"  /เซต"}}

     </div>


     <div class="form-group">

      {{"จำนวนเซต : "}}{{$exercise->set}}{{"  ครั้ง"}}

    </div>


    <div class="form-group">

     {{"จำนวนแคลอรี่ที่เผาผลาญ : "}}{{$exercise->calories}}{{"  แคลอรี่"}}

   </div>

   <div class="form-group">

     {{"คำอธิบาย : "}}
     @for ($i = 0; $i < $count; $i++)
        @if($i==0)
           {{$space[$i]}}
         @else 
            <FONT style="margin-left:67px"> {{$space[$i]}}</FONT><br>
         @endif
     @endfor
     

   </div>
   <br><br>

@if($exercise->name!='break')
   <form method="post" action="/program/save">
      <input type="hidden" name="timeperset" value="{{$exercise->timeperset}}">
      <input type="hidden" name="set" value="{{$exercise->set}}">
      <input type="hidden" name="calories" value="{{$exercise->calories}}">
    <form class="navbar-form navbar-right" role="form">
      <FONT style="margin-left:70px" SIZE=1.5 color="grey">{{"หากบริหารหน้าท้องเสร็จแล้ว โปรดบันทึก --> "}}</FONT>
      <button  type="submit" class="btn btn-primary">บันทึก</button>
    </form>
  </form>
@endif
</div>
</div>



</div> <!-- /container -->



<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->



</body></html>
