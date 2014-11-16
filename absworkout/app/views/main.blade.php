<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="1.ico">


<title>absworkout</title>

<!-- Bootstrap core CSS -->
<link href="css/bootstrap.css" rel="stylesheet">


<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
<script src="js/ie-emulation-modes-warning.js"></script>


      <!-- Custom styles for this template -->
      <link href="css/carousel.css" rel="stylesheet">
      <style type="text/css" id="holderjs-style"></style></head>
<!-- NAVBAR
  ================================================== -->

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
          <li class="active"><a href="/">Home</a></li>
          @if(Auth::check())
           <li><a href="viewprogram">Program</a></li>
            <li><a href="statistic">Statistic</a></li>
          @else
            <li><a href="login">Program</a></li>
            <li><a href="login">Statistic</a></li>
          @endif
        </ul>
        @if(Auth::check())
        <form class="navbar-form navbar-right" role="form">
          <img class="img-circle" src="profilepicture/{{Auth::user()->image}}" alt="Generic placeholder image" style="width: 35px; height: 35px;">&nbsp
          <a href="profile">{{Auth::user()->username}}</a>&nbsp
          <font color="blue">|</font>&nbsp
          <a href="logout">Logout</a>
        </form>
        @else
        <form class="navbar-form navbar-right" role="form">
            <button type="submit" class="btn btn-default"><a href="login">Sign in</a></button>
            <button type="submit" class="btn btn-default"><a href="register">Sign up</a></button>
          </form>
         @endif
      </div><!--/.navbar-collapse -->
    </div>
  </div>

  @if(Session::has('success'))
  <br><br><br>
  <div class="container">
    <div class="alert alert-success" >
     <font color="green"><li>{{ Session::get('success') }}</li></font>
   </div>
 </div>
</br>
@endif

    <!-- Carousel
    ================================================== -->

    <div class="container theme-showcase" role="main">



      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li class="" data-target="#myCarousel" data-slide-to="1"></li>
          <li class="" data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="item active">
            <img src="./image/31.jpg" alt="First slide">
            <div class="container">
              <div class="carousel-caption">

              </div>
            </div>
          </div>
          <div class="item">
            <img src="./image/32.jpg" alt="Second slide">
            <div class="container">
              <div class="carousel-caption">

              </div>
            </div>
          </div>
          <div class="item">
            <img src="./image/33.jpg" alt="Third slide">
            <div class="container">
              <div class="carousel-caption">
              </div>
            </div>
          </div>
        </div>
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
      </div><!-- /.carousel -->
    </div>
  </body>




    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->




    <div id="playground-container">
      <div class="container">
        <h3>แบ่งปันสถิติ...</h3>
        <div class="row">
          <div class="panel panel-default widget">
            <div class="panel-heading">
              <span class="glyphicon glyphicon-comment"></span>&nbsp Recent Share
              </div>
              <div style="width: 1165px; height: 450px; overflow-y: scroll; scrollbar-arrow-color:blue; 
              scrollbar-face-color: #e7e7e7; scrollbar-3dlight-color: #a0a0a0; scrollbar-darkshadow-color:#888888">  
              <div class="panel-body">
                <ul class="list-group">
                  @for($i=0;$i<= 20;$i++)
                  <li class="list-group-item">
                    <div class="row">
                      <div class="col-xs-2 col-md-1">
                        <img src="profilepicture/{{$share[$i]->image}}" class="img-circle " style="width: 50px; height: 50px;" alt="" /></div>
                        <div class="col-xs-10 col-md-11">
                          <div>
                            <strong><font color="red">จำนวนแคลอรี่ : {{$share[$i]->calories}}  จำนวนครั้งที่ออกกำลังกาย : {{$share[$i]->times}}</font></strong>
                            <div class="mic-info">
                              <font size=1.5>By:<font size=2.5 color="blue">{{$share[$i]->username}}</font> &nbsp at {{$share[$i]->created_at}}</font>
                            </div>
                          </div>
                          <div class="comment-text">
                            {{$share[$i]->comment}}
                          </div>
                        </div>
                      </div>
                    </li>
                    @endfor

                  </ul>
                </div>
                </div>
              </div>
            </div>
          </div>



          <!-- START THE FEATURETTES -->
          <div class="container marketing">
            <hr class="featurette-divider">

            <div class="row featurette">
              <div class="col-md-7">
                <h2 class="featurette-heading">Overtrain คืออะไร? <!--<span class="text-muted">It'll blow your mind.</span> --></h2> 
                <p class="lead">ผู้ฝึกใหม่ที่พยายามอย่างเต็มความสามารถในการเสริมสร้าง และ พัฒนากล้ามเนื้อนั้น คำนึงถึงแต่ว่าจะทำอย่างไรให้การฝึกนั้นหนัก และ เข้มข้นพอต่อการสร้างและพัฒนากล้ามเนื้อ จนบางครั้งลืมมองในมุมกลับว่า ความหนักและความเข้มข้นนั้น อาจมากเกินไปจนนำผู้ฝึกไปสู่ภาวะการฝึกเกิน หรือ Overtrained ได้ </p>
              </div>
              <div class="col-md-5">
                <img src="./image/21.jpg" class="featurette-image img-responsive"  alt="500x500">
              </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
              <div class="col-md-5">
                <img src="./image/23.jpg" class="featurette-image img-responsive"  alt="500x500">
              </div>
              <div class="col-md-7">
                <h2 class="featurette-heading">เล่นคนเดียว VS มีบัดดี้แบบไหนใหญ่เร็วสุด</h2>
                <p class="lead">การมีบัดดี้ช่วยฝึก หรือ ช่วยเซฟนั้นสามารถส่งผลดีได้ หากบัดดี้นั้นมีประสบการณ์และมีความเข้าในใจการ “ช่วย” และ “เซฟ”ที่ถูกต้อง นอกเหนือจากนั้น การฝึกคนเดียวก็สามารถประสบผลสูงสุดในการฝึกได้แม้จะไม่มีบัดดี้คอยช่วยเซฟแต่การเลือกใช้ทักษะ และ ความเข้าในใจการฝึกที่ถูกต้องนั้นพาเราบรรลุเป้าหมายได้เช่นกัน</p>
              </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
              <div class="col-md-7">
                <h2 class="featurette-heading">เทคนิค Rest Paused </h2>
                <p class="lead">Rest Paused คือลักษณะการฝึกปกที่จนถึงจุดอ่อนแรงที่ไม่สามารถออกแรงต้านได้ ให้ผู้ฝึกเก็บเหล็ก และ พัก 15-30วินาที แล้วเริ่มยกน้ำหนักเดิมนั้นต่อจนหมดแรงอีกครั้ง</p>
              </div>
              <div class="col-md-5">
                <img src="./image/22.jpg" class="featurette-image img-responsive"  alt="500x500">
              </div>
            </div>

            <hr class="featurette-divider">


            <!-- FOOTER -->
            <footer>
              <p class="pull-right"><a href="#">Back to top</a></p>
              <p>© Absworkout CE KMITL Company, Inc. </p>
            </footer>

          </div><!-- /.container -->
        </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/docs.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>


    <div data-original-title="Copy to clipboard" title="" style="position: absolute; left: 0px; top: -9999px; width: 15px; height: 15px; z-index: 999999999;" class="global-zeroclipboard-container" id="global-zeroclipboard-html-bridge">      <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" id="global-zeroclipboard-flash-bridge" height="100%" width="100%">         <param name="movie" value="/assets/flash/ZeroClipboard.swf?noCache=1414131496438">         <param name="allowScriptAccess" value="sameDomain">         <param name="scale" value="exactfit">         <param name="loop" value="false">         <param name="menu" value="false">         <param name="quality" value="best">         <param name="bgcolor" value="#ffffff">         <param name="wmode" value="transparent">         <param name="flashvars" value="trustedOrigins=getbootstrap.com%2C%2F%2Fgetbootstrap.com%2Chttp%3A%2F%2Fgetbootstrap.com">         <embed src="Carousel%20Template%20for%20Bootstrap_files/ZeroClipboard.swf" loop="false" menu="false" quality="best" bgcolor="#ffffff" name="global-zeroclipboard-flash-bridge" allowscriptaccess="sameDomain" allowfullscreen="false" type="application/x-shockwave-flash" wmode="transparent" pluginspage="http://www.macromedia.com/go/getflashplayer" flashvars="trustedOrigins=getbootstrap.com%2C%2F%2Fgetbootstrap.com%2Chttp%3A%2F%2Fgetbootstrap.com" scale="exactfit" height="100%" width="100%">                </object></div></body></html>