<!DOCTYPE html>

<html lang="en-US" prefix="og: http://ogp.me/ns#" style="height: auto;" class=" js no-touch csstransforms3d csstransitions webkit chrome win js js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths"><!--<![endif]--><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<meta property="fb:app_id" content="641842732576873">
<meta property="og:type" content="website">
<meta property="og:title" content="Fitness">

<link href="/css/bootstrap.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="/css/bootstrap-responsive.min.css" rel="stylesheet">
<link rel="icon" href="/1.ico">
<link rel="stylesheet" type="text/css" href="/css/theme7e2e.css"> 
<div class="fit-vids-style" id="fit-vids-style" style="display: none;">­<style>.fluid-width-video-wrapper{width:100%;position:relative;padding:0;}.fluid-width-video-wrapper iframe,.fluid-width-video-wrapper object,.fluid-width-video-wrapper embed {position:absolute;top:0;left:0;width:100%;height:100%;}</style></div><script async="" src="/js/analytics.js"></script><script type="text/javascript" src="/js/jquery-1.9.1.min.js"></script>

<title>โปรแกรมออกกำลังกาย</title>
<meta charset="UTF-8">
<meta name="generator" content="Spyropress 3.3.0">

<body>
    <!-- wrapper -->
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
        <li class="active"><a href="/viewprogram">Program</a></li>
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



<!-- content -->
<div role="main" class="main">
	<div id="content" class="content full">


        <style type="text/css">
            .work-img{ 
                margin-top:30px; 
                height:100px;
                line-height: 100px;
                text-align: center;
                background-color: black;
                color: #007cff;
                font-weight: bold;
                overflow: hidden;
            }
            span.centerSpan {
              display: inline-block;
              vertical-align: middle;
              line-height: normal;
          }

      </style>
      <div role="main" class="main">

        <div id="content" class="content full">

            <div id="post-6" class="post-6 page type-page status-publish hentry post-1 odd">
                <div class="container">
                    @if(Session::has('success'))
                       <br><br><br><br>
                    <div class="container">
                        <div class="alert alert-success" >
                            <font color="green"><li>{{ Session::get('success') }}</li></font>
                        </div>
                    </div>
                    @endif
                    <br>
                    <h2 class="title-page hel77bdcond fsize50" style="margin-top: 60px; margin-bottom: 20px; visibility: visible;">โปรแกรมออกกำลังกาย : {{$head}}</h2>
                    <form class="navbar-form navbar-right" role="form">
                        <button type="submit" class="btn btn-default"><a href="/cancelwork">ยกเลิกโปรแกรม</a></button>
                        <br></br>
                        <font size=2.5 color="grey">วันที่เริ่มโปรแกรม : {{$start}}</font><br>
                        
                        @if($current<28)
                            <font size=2.5 color="grey">ตอนนี้อยู่ที่ :</font><font size=3 color="red">Day {{$current}}</font>
                        @else
                            <font size=3 color="red">End of program</font>
                        @endif
                
                    </form>
                </div>



                <div id="builder-row-5231dd7351ff3" class="">
                    <div class="container">
                        <div class="row">




                            <div class="workout-block">                             
                                <h3 class="hel57cond fsize34" style="margin: 45px 0px 0px; visibility: visible;">Week 1</h3><br></br>
                                <ul class="work-list">  

                                    <li>
                                        
                                        <a href="/programs/{{$prog[0]->day1}}">
                              
                                            <div class="work-date hel57cond fsize25">day 1</div>
                                            <div class="work-img hel57cond fsize25">
                                                <!-- <img src="wp-content/uploads/sites/13/2013/09/img_workout1.jpg" /> -->
                                                <span class="centerSpan">
                                                    {{$prog[0]->day1}}                                        </span>
                                                </div>

                                            </li>


                                            <li>
                                         
                                                <a href="/programs/{{$prog[0]->day2}}">
                                          
                                                    <div class="work-date hel57cond fsize25">day 2</div>
                                                    <div class="work-img hel57cond fsize25">
                                                        <!-- <img src="wp-content/uploads/sites/13/2013/09/img_workout1.jpg" /> -->
                                                        <span class="centerSpan">
                                                            {{$prog[0]->day2}}                                            </span>
                                                        </div>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="/programs/{{$prog[0]->day3}}">
                                                        <div class="work-date hel57cond fsize25">day 3</div>
                                                        <div class="work-img hel57cond fsize25">
                                                            <!-- <img src="wp-content/uploads/sites/13/2013/09/img_workout1.jpg" /> -->
                                                            <span class="centerSpan">
                                                                {{$prog[0]->day3}}                                            </span>
                                                            </div>
                                                        </a>
                                                    </li>

                                                    <li>
                                                     <a href="/programs/{{$prog[0]->day4}}">
                                                        <div class="work-date hel57cond fsize25">day 4</div>
                                                        <div class="work-img hel57cond fsize25">
                                                            <!-- <img src="wp-content/uploads/sites/13/2013/09/img_workout1.jpg" /> -->
                                                            <span class="centerSpan">
                                                                {{$prog[0]->day4}}                                             </span>
                                                            </div>
                                                        </a>
                                                    </li>

                                                    <li>
                                                     <a href="/programs/{{$prog[0]->day5}}">                                            <div class="work-date hel57cond fsize25">day 5</div>
                                                        <div class="work-img hel57cond fsize25">
                                                            <!-- <img src="wp-content/uploads/sites/13/2013/09/img_workout1.jpg" /> -->
                                                            <span class="centerSpan">
                                                                {{$prog[0]->day5}}                                             </span>
                                                            </div>
                                                        </a>
                                                    </li>

                                                    <li>
                                                     <a href="/programs/{{$prog[0]->day6}}">
                                                        <div class="work-date hel57cond fsize25">day 6</div>
                                                        <div class="work-img hel57cond fsize25">
                                                            <!-- <img src="wp-content/uploads/sites/13/2013/09/img_workout1.jpg" /> -->
                                                            <span class="centerSpan">
                                                                {{$prog[0]->day6}}                                            </span>
                                                            </div>
                                                        </a>
                                                    </li>

                                                    <li>
                                                     <a href="/programs/{{$prog[0]->day7}}">
                                                        <div class="work-date hel57cond fsize25">day 7</div>
                                                        <div class="work-img hel57cond fsize25">
                                                            <!-- <img src="wp-content/uploads/sites/13/2013/09/img_workout1.jpg" /> -->
                                                            <span class="centerSpan">
                                                                {{$prog[0]->day7}}                                            </span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>


                                            <div class="workout-block">                             
                                                <h3 class="hel57cond fsize34" style="margin: 45px 0px 0px; visibility: visible;">Week 2</h3><br></br>
                                                <ul class="work-list">  

                                                    <li>
                                                        <a href="/programs/{{$prog[1]->day1}}">
                                                            <div class="work-date hel57cond fsize25">day 8</div>
                                                            <div class="work-img hel57cond fsize25">
                                                                <!-- <img src="wp-content/uploads/sites/13/2013/09/img_workout1.jpg" /> -->
                                                                <span class="centerSpan">
                                                                    {{$prog[1]->day1}}                                            </span>
                                                                </div>
                                                            </a>
                                                        </li>

                                                        <li>
                                                           <a href="/programs/{{$prog[1]->day2}}">
                                                            <div class="work-date hel57cond fsize25">day 9</div>
                                                            <div class="work-img hel57cond fsize25">
                                                                <!-- <img src="wp-content/uploads/sites/13/2013/09/img_workout1.jpg" /> -->
                                                                <span class="centerSpan">
                                                                    {{$prog[1]->day2}}                                           </span>
                                                                </div>
                                                            </a>
                                                        </li>

                                                        <li>
                                                           <a href="/programs/{{$prog[1]->day3}}">
                                                            <div class="work-date hel57cond fsize25">day 10</div>
                                                            <div class="work-img hel57cond fsize25">
                                                                <!-- <img src="wp-content/uploads/sites/13/2013/09/img_workout1.jpg" /> -->
                                                                <span class="centerSpan">
                                                                    {{$prog[1]->day3}}                                            </span>
                                                                </div>
                                                            </a>
                                                        </li>

                                                        <li>
                                                           <a href="/programs/{{$prog[1]->day4}}">
                                                            <div class="work-date hel57cond fsize25">day 11</div>
                                                            <div class="work-img hel57cond fsize25">
                                                                <!-- <img src="wp-content/uploads/sites/13/2013/09/img_workout1.jpg" /> -->
                                                                <span class="centerSpan">
                                                                    {{$prog[1]->day4}}                                            </span>
                                                                </div>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="/programs/{{$prog[1]->day5}}">
                                                                <div class="work-date hel57cond fsize25">day 12</div>
                                                                <div class="work-img hel57cond fsize25">
                                                                    <!-- <img src="wp-content/uploads/sites/13/2013/09/img_workout1.jpg" /> -->
                                                                    <span class="centerSpan">
                                                                        {{$prog[1]->day5}}                                            </span>
                                                                    </div>
                                                                </a>
                                                            </li>

                                                            <li>
                                                               <a href="/programs/{{$prog[1]->day6}}">
                                                                <div class="work-date hel57cond fsize25">day 13</div>
                                                                <div class="work-img hel57cond fsize25">
                                                                    <!-- <img src="wp-content/uploads/sites/13/2013/09/img_workout1.jpg" /> -->
                                                                    <span class="centerSpan">
                                                                        {{$prog[1]->day6}}                                            </span>
                                                                    </div>
                                                                </a>
                                                            </li>

                                                            <li>
                                                               <a href="/programs/{{$prog[1]->day7}}">
                                                                <div class="work-date hel57cond fsize25">day 14</div>
                                                                <div class="work-img hel57cond fsize25">
                                                                    <!-- <img src="wp-content/uploads/sites/13/2013/09/img_workout1.jpg" /> -->
                                                                    <span class="centerSpan">
                                                                        {{$prog[1]->day7}}                                            </span>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>


                                                    <div class="workout-block">                             
                                                        <h3 class="hel57cond fsize34" style="margin: 45px 0px 0px; visibility: visible;">Week 3</h3><br></br>
                                                        <ul class="work-list">  

                                                            <li>
                                                               <a href="/programs/{{$prog[2]->day1}}">
                                                                <div class="work-date hel57cond fsize25">day 15</div>
                                                                <div class="work-img hel57cond fsize25">
                                                                    <!-- <img src="wp-content/uploads/sites/13/2013/09/img_workout1.jpg" /> -->
                                                                    <span class="centerSpan">
                                                                        {{$prog[2]->day1}}                                            </span>
                                                                    </div>
                                                                </a>
                                                            </li>

                                                            <li>
                                                               <a href="/programs/{{$prog[2]->day2}}">
                                                                <div class="work-date hel57cond fsize25">day 16</div>
                                                                <div class="work-img hel57cond fsize25">
                                                                    <!-- <img src="wp-content/uploads/sites/13/2013/09/img_workout1.jpg" /> -->
                                                                    <span class="centerSpan">
                                                                        {{$prog[2]->day2}}                                            </span>
                                                                    </div>
                                                                </a>
                                                            </li>

                                                            <li>
                                                               <a href="/programs/{{$prog[2]->day3}}">
                                                                <div class="work-date hel57cond fsize25">day 17</div>
                                                                <div class="work-img hel57cond fsize25">
                                                                    <!-- <img src="wp-content/uploads/sites/13/2013/09/img_workout1.jpg" /> -->
                                                                    <span class="centerSpan">
                                                                        {{$prog[2]->day3}}                                            </span>
                                                                    </div>
                                                                </a>
                                                            </li>

                                                            <li>
                                                               <a href="/programs/{{$prog[2]->day4}}">
                                                                <div class="work-date hel57cond fsize25">day 18</div>
                                                                <div class="work-img hel57cond fsize25">
                                                                    <!-- <img src="wp-content/uploads/sites/13/2013/09/img_workout1.jpg" /> -->
                                                                    <span class="centerSpan">
                                                                        {{$prog[2]->day4}}                                            </span>
                                                                    </div>
                                                                </a>
                                                            </li>

                                                            <li>
                                                               <a href="/programs/{{$prog[2]->day5}}">
                                                                <div class="work-date hel57cond fsize25">day 19</div>
                                                                <div class="work-img hel57cond fsize25">
                                                                    <!-- <img src="wp-content/uploads/sites/13/2013/09/img_workout1.jpg" /> -->
                                                                    <span class="centerSpan">
                                                                        {{$prog[2]->day5}}                                            </span>
                                                                    </div>
                                                                </a>
                                                            </li>

                                                            <li>
                                                               <a href="/programs/{{$prog[2]->day6}}">
                                                                <div class="work-date hel57cond fsize25">day 20</div>
                                                                <div class="work-img hel57cond fsize25">
                                                                    <!-- <img src="wp-content/uploads/sites/13/2013/09/img_workout1.jpg" /> -->
                                                                    <span class="centerSpan">
                                                                        {{$prog[2]->day6}}                                            </span>
                                                                    </div>
                                                                </a>
                                                            </li>

                                                            <li>
                                                               <a href="/programs/{{$prog[2]->day7}}">
                                                                <div class="work-date hel57cond fsize25">day 21</div>
                                                                <div class="work-img hel57cond fsize25">
                                                                    <!-- <img src="wp-content/uploads/sites/13/2013/09/img_workout1.jpg" /> -->
                                                                    <span class="centerSpan">
                                                                        {{$prog[2]->day7}}                                            </span>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>


                                                    <div class="workout-block">                             
                                                        <h3 class="hel57cond fsize34" style="margin: 45px 0px 0px; visibility: visible;">Week 4</h3><br></br>
                                                        <ul class="work-list">  

                                                            <li>
                                                               <a href="/programs/{{$prog[3]->day1}}">
                                                                <div class="work-date hel57cond fsize25">day 22</div>
                                                                <div class="work-img hel57cond fsize25">
                                                                    <!-- <img src="wp-content/uploads/sites/13/2013/09/img_workout1.jpg" /> -->
                                                                    <span class="centerSpan">
                                                                        {{$prog[3]->day1}}                                            </span>
                                                                    </div>
                                                                </a>
                                                            </li>

                                                            <li>
                                                               <a href="/programs/{{$prog[3]->day2}}">
                                                                <div class="work-date hel57cond fsize25">day 23</div>
                                                                <div class="work-img hel57cond fsize25">
                                                                    <!-- <img src="wp-content/uploads/sites/13/2013/09/img_workout1.jpg" /> -->
                                                                    <span class="centerSpan">
                                                                        {{$prog[3]->day2}}                                            </span>
                                                                    </div>
                                                                </a>
                                                            </li>

                                                            <li>
                                                               <a href="/programs/{{$prog[3]->day3}}">
                                                                <div class="work-date hel57cond fsize25">day 24</div>
                                                                <div class="work-img hel57cond fsize25">
                                                                    <!-- <img src="wp-content/uploads/sites/13/2013/09/img_workout1.jpg" /> -->
                                                                    <span class="centerSpan">
                                                                        {{$prog[3]->day3}}                                            </span>
                                                                    </div>
                                                                </a>
                                                            </li>

                                                            <li>
                                                               <a href="/programs/{{$prog[3]->day4}}">
                                                                <div class="work-date hel57cond fsize25">day 25</div>
                                                                <div class="work-img hel57cond fsize25">
                                                                    <!-- <img src="wp-content/uploads/sites/13/2013/09/img_workout1.jpg" /> -->
                                                                    <span class="centerSpan">
                                                                        {{$prog[3]->day4}}                                           </span>
                                                                    </div>
                                                                </a>
                                                            </li>

                                                            <li>
                                                               <a href="/programs/{{$prog[3]->day5}}">
                                                                <div class="work-date hel57cond fsize25">day 26</div>
                                                                <div class="work-img hel57cond fsize25">
                                                                    <!-- <img src="wp-content/uploads/sites/13/2013/09/img_workout1.jpg" /> -->
                                                                    <span class="centerSpan">
                                                                        {{$prog[3]->day5}}                                            </span>
                                                                    </div>
                                                                </a>
                                                            </li>

                                                            <li>
                                                               <a href="/programs/{{$prog[3]->day6}}">
                                                                <div class="work-date hel57cond fsize25">day 27</div>
                                                                <div class="work-img hel57cond fsize25">
                                                                    <!-- <img src="wp-content/uploads/sites/13/2013/09/img_workout1.jpg" /> -->
                                                                    <span class="centerSpan">
                                                                        {{$prog[3]->day6}}                                            </span>
                                                                    </div>
                                                                </a>
                                                            </li>

                                                            <li>
                                                               <a href="/programs/{{$prog[3]->day7}}">
                                                                <div class="work-date hel57cond fsize25">day 28</div>
                                                                <div class="work-img hel57cond fsize25">
                                                                    <!-- <img src="wp-content/uploads/sites/13/2013/09/img_workout1.jpg" /> -->
                                                                    <span class="centerSpan">
                                                                        {{$prog[3]->day7}}                                            </span>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <br><br></br>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div><!-- content -->
                    </div>
                    <!-- /content -->





                </li></ul>

            </nav>
        </div>

    </div>

</div>


</div>

<script src="/js/jquery.js"></script>
<script src="/js/bootstrap.min.js"></script>

</body></html>