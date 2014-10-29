<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    

    <title>Signup</title>

    <!-- Bootstrap core CSS -->
    <link href="Signin%20Template%20for%20Bootstrap_files/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="Signin%20Template%20for%20Bootstrap_files/signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="Signin%20Template%20for%20Bootstrap_files/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <div class="container">
   <form action="{{ url('signuped') }}"  role="form" method="post" >
    
    <form class="form-signup" role="form">
      <h2 class="form-signin-heading">Sign up</h2>
      <h2 class="form-signin-heading"> </h2>
  <div class="form-group">
     <label for="exampleInputUsername">Username</label><span style="color: red;">*</span>
     <input class="form-control" required="" autofocus="" type="text">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label><span style="color: red;">*</span>
    <input class="form-control" required="" type="password">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label><span style="color: red;">*</span>
    <input class="form-control" required="" autofocus="" type="email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">น้ำหนัก</label>
    <input type="text" class="form-control" >
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">ส่วนสูง</label>
    <input type="text" class="form-control" >
  </div>
  <div class="row">
    <div class="col-md-1">
      <label>เพศ:</label>
    </div>
    <div class="col-md-4">
    <span id="MemberProfile_memp_gender"><input value="m" id="MemberProfile_memp_gender_0" checked="checked" type="radio" name="MemberProfile[memp_gender]" /> <label style="display:inline" for="MemberProfile_memp_gender_0"><span class="hel37thincond fsize30">Male</span></label>&nbsp;<input value="f" id="MemberProfile_memp_gender_1" type="radio" name="MemberProfile[memp_gender]" /> <label style="display:inline" for="MemberProfile_memp_gender_1"><span class="hel37thincond fsize30">Female</span></label></span>        </div>
  </div>
  <h2 class="form-signin-heading"> </h2>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="Signin%20Template%20for%20Bootstrap_files/ie10-viewport-bug-workaround.js"></script>
  

</body></html>