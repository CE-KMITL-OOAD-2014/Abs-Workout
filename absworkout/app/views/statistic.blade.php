
<!DOCTYPE html>
<!-- saved from url=(0040)http://getbootstrap.com/examples/signin/ -->
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="1.ico">

  <title>{{"สถิติการออกกำลังกาย"}}</title>

  <!-- Bootstrap core CSS -->
  <link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="http://getbootstrap.com/examples/signin/signin.css" rel="stylesheet">

  <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
  <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
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
        <li class = active><a href="/statistic">Statistic</a></li>
      </ul>
      <form class="navbar-form navbar-right" role="form">
        <img class="img-circle" src="profilepicture/{{Auth::user()->image}}" alt="Generic placeholder image" style="width: 35px; height: 35px;">&nbsp
        <a href="/profile">{{Auth::user()->username}}</a>&nbsp
        <font color="blue">|</font>&nbsp
        <a href="/logout">Logout</a>
      </form>
    </div><!--/.navbar-collapse -->
  </div>
</div>

@if(Session::has('success'))
  <br><br>
    <div class="container">
      <div class="alert alert-success" >
        <font color="green"><li>{{ Session::get('success') }}</li></font>
      </div>
    </div>
@endif

<div class="container">
  <div class="col-md-4  col-md-offset-4">   
    <br>
    <h2>Ranking</h2>
  </br>

  <center>
    <table class="table table-striped"
    style="width: 140px; height: 140px;">
    <tr><th><p><font size=3>no</font></p><th> 
      <th><p><font size=3>name</font></p><th> 
        <th><p><font size=3>times</font></p><th> 
          <th><p><font size=3>calories</font></p><th>
          </tr>
          @for ($i = 0; $i <= 9; $i++)
          <tr>
            <th>{{$i+1}}<th>  
              <th>{{$Top[$i]->username}}<th>   
                <th>{{$Top[$i]->times}}<th> 
                  <th>{{$Top[$i]->calories}}<th>   
                  </tr>
                  @endfor
                </table>
              </center>
              <br><br>
            </div>
          </div>

          <!-- Button trigger modal -->
          <center>      
            <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
              See your statistic
            </button>
          </center>


          <!-- Modal -->
          <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">My statistic</h4>
                </div>

                <div class="modal-body">

                 @if($statistic == "[]")

                 <p>คุณไม่มีสถิติการออกกำลังกาย</p>
                 <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>

                @else 

                <p>จำนวนแคลอรี่ที่ใช้ไป</p>{{$statistic[0]->calories}} &nbspแคลอรี่
                <br></br>
                <p>จำนวนครั้งที่ออกกำลังกาย</p>{{$statistic[0]->times}} &nbspครั้ง
                <br></br>
                 <form method="post" action="share">
                  <input type="hidden" name="username" value="{{$statistic[0]->username}}">
                  <input type="hidden" name="calories" value="{{$statistic[0]->calories}}">
                  <input type="hidden" name="times" value="{{$statistic[0]->times}}"> 
                  <textarea class="form-control input-lg" name="comment" placeholder="เขียนบางสิ่ง..." ></textarea>
                  <br></br>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <input type="submit" value="Share" class="btn btn-primary">
                </form>
              </div>

              @endif  

            </div>

          </div>

        </div>

      </div>



      <!-- /container -->



      <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/docs.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>


  </body></html>
