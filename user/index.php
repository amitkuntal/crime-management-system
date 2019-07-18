<?php 
session_start();
if(!isset($_SESSION["sess_user"])){
	header("location:http://localhost/final/index.php");
} else {
	include_once('config.php');
	$dbusername=$_SESSION["sess_user"];
?>
<html>
<head>
</style>


 <title>User |Dashborad| </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

<script type="text/javascript" src="js/jssor.slider.min.js"></script>
    <script>
        jssor_slider1_init = function (containerId) {
            //Reference https://www.jssor.com/development/slider-with-slideshow.html
            //Reference https://www.jssor.com/development/tool-slideshow-transition-viewer.html

            var _SlideshowTransitions = [
                //Fade
                { $Duration: 1200, $Opacity: 2 }
            ];

            var options = {
                $SlideDuration: 500,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                $DragOrientation: 3,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $Cols is greater than 1, or parking position is not 0)
                $AutoPlay: 1,                                    //[Optional] Auto play or not, to enable slideshow, this option must be set to greater than 0. Default value is 0. 0: no auto play, 1: continuously, 2: stop at last slide, 4: stop on click, 8: stop on user navigation (by arrow/bullet/thumbnail/drag/arrow key navigation)
                $Idle: 1500,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $SlideshowOptions: {                                //[Optional] Options to specify and enable slideshow or not
                    $Class: $JssorSlideshowRunner$,                 //[Required] Class to create instance of slideshow
                    $Transitions: _SlideshowTransitions,            //[Required] An array of slideshow transitions to play slideshow
                    $TransitionsOrder: 1                           //[Optional] The way to choose transition to play slide, 1 Sequence, 0 Random
                }
            };

            var jssor_slider1 = new $JssorSlider$('slider1_container', options);
        }
    </script>

<div class='container'>
	<div class='col-12'>
		<p align='right'>Police-100
		Ambulance-101</p>
	</div>

		<?php 
		include_once('navbar.php');
		?>
		<div class='col-12'>
				<div class="container-fluid">
				 <div id="slider1_container" style="position:relative;width:900px;height:300px;">
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="../svg/loading/static-svg/spin.svg" />
        </div>

        <!-- Slides Container -->
        <div data-u="slides" style="position: absolute; center: 0px; top: 8px; width:1100px; height: 280px;
            overflow: hidden;">
            <div>
                <img data-u="image" src="img/1.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/2.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/7.jpg" />
            </div>
            
			<div>
                <img data-u="image" src="img/5.jpg" />
            </div>
        </div>

        <!-- Trigger -->
        <script>
            jssor_slider1_init();
        </script>
    </div>
				</div>
		</div>
		<div class="container">
	<div class='row '>
	<div class='col-5 border btn btn-secondary'>
	<a class='btn btn-secondary'>
	View complaints
	status
	</a></div>
	
	<div class='col-5 border btn btn-secondary'>
	<a href='' class='btn btn-secondary'>
	View all registered
	complaints
	</a></div>
	</div>
<?php } ?>
	</body>
	</html>