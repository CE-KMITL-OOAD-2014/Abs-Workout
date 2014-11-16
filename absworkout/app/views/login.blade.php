<!DOCTYPE html>
<!-- saved from url=(0040)http://getbootstrap.com/examples/signin/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="1.ico">


    <title>Login</title>

    <!-- Bootstrap core CSS -->
    <link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="http://getbootstrap.com/examples/signin/signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="./Signin Template for Bootstrap_files/ie-emulation-modes-warning.js"></script><style type="text/css"></style>
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
            <li><a href="login">Program</a></li>
            <li><a href="login">Statistic</a></li>
          </ul>
          <form class="navbar-form navbar-right" role="form">

            <button type="submit" class="btn btn-default"><a href="login">Sign in</a></button>
            <button type="submit" class="btn btn-default"><a href="register">Sign up</a></button>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </div>

    
     @if(Session::has('danger'))
     <br>
      <div class="container">
        <div class="alert alert-danger" role="alert">
           <font color="red"><li>{{ Session::get('danger') }}</li></font>
         </div>
         </div>
         </br>
      @endif

     <div class="container">

      <div class="col-md-4  col-md-offset-4">

        <form name="form1" method="post" action="logined">
      <form class="form-signin" role="form">
      <br>
        <h2 class="form-signin-heading">เข้าสู่ระบบ</h2>
          </br>  
          <div class="form-group">  
            <input class="form-control" placeholder="Username" required="" autofocus="" type="text" name="username" id="username">
          </div>
          <div class="form-group">  
            <input class="form-control" placeholder="Password" required="" type="password" name="password" id="password">
          </div>

    
        <button class="btn btn-lg btn-primary btn-block" type="submit">ยืนยัน</button>
        <span class="pull-right"><a href="register">ลงทะเบียน</a></span>

      </form>
      </div>
    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="./Signin Template for Bootstrap_files/ie10-viewport-bug-workaround.js"></script>
  

</body></html>