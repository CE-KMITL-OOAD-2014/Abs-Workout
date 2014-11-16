
<!DOCTYPE html>
<!-- saved from url=(0040)http://getbootstrap.com/examples/signin/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="1.ico">


    <title>Profile</title>

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
            <li><a href="viewprogram">Program</a></li>
            <li><a href="statistic">Statistic</a></li>
          </ul>
          <form class="navbar-form navbar-right" role="form">
  

             <img class="img-circle" src="profilepicture/{{Auth::user()->image}}" alt="Generic placeholder image" style="width: 35px; height: 35px;">&nbsp
             <a href="profile">{{Auth::user()->username}}</a>&nbsp
            <font color="blue">|</font>&nbsp
            <a href="logout">Logout</a>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </div>

     

    <div class="container">
      <div class="col-md-4  col-md-offset-4">   
      <br>
        <h2 class="form-signup-heading">โปรไฟล์ส่วนตัว</h2>
      </br>
        <div class="form-group">
         
          {{"Username : "}}{{Auth::user()->username}}
         
        </div>

       
        <div class="form-group">
         
           {{"Email : "}}{{Auth::user()->email}}
         
        </div>

        <div class="form-group">
         
           {{"Weight : "}}{{Auth::user()->weight}}{{"  kg."}}
         
        </div>

       
        <div class="form-group">
         
          {{"Height : "}}{{Auth::user()->height}}{{"  cm."}}
         
        </div>

        
        <div class="form-group">
         
           {{"Age : "}}{{Auth::user()->age}}
         
        </div>

        <form class="navbar-form navbar-left" role="form">
         <button type="submit" class="btn btn-default"><a href="changepassword">เปลี่ยนรหัสผ่าน</a></button>
       </form>

       <form class="navbar-form navbar-right" role="form">
         <button type="submit" class="btn btn-default"><a href="editprofile">แก้ไขข้อมูล</a></button>
       </form>



    </div> <!-- /container -->



    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    
  

</body></html>
