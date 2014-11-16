
<!DOCTYPE html>
<!-- saved from url=(0040)http://getbootstrap.com/examples/signin/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="1.ico">


    <title>Register</title>

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
      
            <form action="{{ url('registered') }}"  role="form" method="post" enctype="multipart/form-data">
            <br>
        <h2 class="form-signup-heading">ลงทะเบียน</h2>
          </br>
        <div class="form-group">
          
          <ul class="errors">
            @foreach($errors->get('username') as $message)
               <font color="red"><li>{{$message}}</li></font>
            @endforeach
          </ul>        

   		    <input type="text" name="username" id="username" MAXLENGTH="20" class="form-control input-lg" 
          placeholder="Username"  required="" autofocus="" >
        </div>

        <div class="form-group">  
           <ul class="errors">
            @foreach($errors->get('password') as $message)
               <font color="red"><li>{{$message}}</li></font>
            @endforeach
          </ul>    
           <input type="password" name="password" id="password" MAXLENGTH="30" class="form-control input-lg" 
           placeholder="Password" required="" >
        </div>

        <div class="form-group">  
          <input type="password" name="password_confirmation" id="password" MAXLENGTH="30"
           class="form-control input-lg" placeholder="Password Confirmation" required=""  >  
        </div>      

        <div class="form-group"> 
         <ul class="errors">
            @foreach($errors->get('email') as $message)
               <font color="red"><li>{{$message}}</li></font>
            @endforeach
          </ul>     
         <input type="email" name="email" id="email" MAXLENGTH="60" class="form-control input-lg" 
         placeholder="Email address " required="">
        </div>

        <div class="form-group">   
          <input type="number" name="weight" id="weight"  min="0" class="form-control input-lg" 
          placeholder="Weight (kg.)" required="">
        </div>

        <div class="form-group">  
         <input type="number" name="height" id="height" min="0" class="form-control input-lg" 
         placeholder="Height (cm.)" required="">
        </div>

        <div class="form-group">  
          <input type="number" name="age" id="age" min="0" class="form-control input-lg" 
          placeholder="Age" required="">
        </div>

         <div class="form-group">  
          Profile Image <input type='file' name = "image" >
        </div>



        <div class="form-group">  
          <button class="btn btn-lg btn-primary btn-block" type="submit">ยืนยัน</button>
        </div>
      </div>




    </div> <!-- /container -->



    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    
  

</body></html>
