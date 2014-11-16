<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Program</title>
<link href="css/bootstrap.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="css/jumbotronn.css" rel="stylesheet">

<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
<link rel="icon" href="1.ico">

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
            <li class="active"><a href="viewprogram">Program</a></li>
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

 <div class="container" role="main">
    <div class="jumbotronn">
      <h1>เลือกโปรแกรม</h1>
            <div class="col-lg-6">
              <img class="img-square" src="image/1.jpg" alt="Generic placeholder image" style="width: 140px; height: 140px;">
                <br></br><p>เพศชาย</p>
                <p><a class="btn btn-default" href="viewprogram/program4" role="button">3 วัน/สัปดาห์</a></p>
                <p><a class="btn btn-default" href="viewprogram/program5" role="button">4 วัน/สัปดาห์</a></p>
                <p><a class="btn btn-default" href="viewprogram/program6" role="button">5 วัน/สัปดาห์</a></p>
            </div>    
            <div class="col-lg-6">
              <img class="img-square" src="image/2.jpg" alt="Generic placeholder image" style="width: 140px; height: 140px;">
                <br></br><p>เพศหญิง</p>
                <p><a class="btn btn-default" href="viewprogram/program1" role="button">3 วัน/สัปดาห์</a></p>
                <p><a class="btn btn-default" href="viewprogram/program2" role="button">4 วัน/สัปดาห์</a></p>
                <p><a class="btn btn-default" href="viewprogram/program3" role="button">5 วัน/สัปดาห์</a></p>
   </div>
  </div>
</div>

  <script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
