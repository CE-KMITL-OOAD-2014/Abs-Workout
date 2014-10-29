
<!DOCTYPE html>
<!-- saved from url=(0040)http://getbootstrap.com/examples/signin/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    

    <title>Register</title>

    <!-- Bootstrap core CSS -->
    <link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="http://getbootstrap.com/examples/signin/signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">
      <div class="col-md-4  col-md-offset-4">
        
            <form action="{{ url('registered') }}"  role="form" method="post" >
              
        <h2 class="form-signin-heading">ลงทะเบียน</h2>
        <div class="form-group">        
   		    <input type="text" name="username" id="username" MAXLENGTH="20" class="form-control input-lg" placeholder="Username" required="" autofocus="">
        </div>
        <div class="form-group">  
           <input type="password" name="password" id="password" MAXLENGTH="30" class="form-control input-lg" placeholder="Password" required="" id="psd">
        </div>
        <div class="form-group">  
          <input type="password" name="repassword" MAXLENGTH="30" class="form-control input-lg" placeholder="Re-Password" required="" id="confirmPsd" >  
        </div>        
        <div class="form-group">  
        <input type="email" name="email" id="email" MAXLENGTH="60" class="form-control input-lg" placeholder="Email address :" required="">
        </div>
        <div class="form-group">   
          <input type="number" name="weight" id="weight"  min="0" class="form-control input-lg" placeholder="Weight" required="">
        </div>
        <div class="form-group">  
         <input type="number" name="height" id="height" min="0" class="form-control input-lg" placeholder="Height" required="">
        </div>
        <div class="form-group">  
          <input type="number" name="age" id="age" min="0" class="form-control input-lg" placeholder="Age" required="">
        </div>
        <div class="form-group">  
         <label class="radio-inline">
  			   <input type="radio" name="inlineRadioOptions" name="male" id="male" value="option1" checked> Male
		     </label>    
         <label class="radio-inline">
 			     <input type="radio" name="inlineRadioOptions" name="female" id="female" value="option2" > Female
		     </label>
        </div>
        <div class="form-group">  
          <button class="btn btn-lg btn-primary btn-block" type="submit">ยืนยัน</button>
        </div>
      </div>




    </div> <!-- /container -->



    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    
  

</body></html>
