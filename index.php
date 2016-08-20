<!doctype html>
<?php
$percentage = 75;

?>


<html>
<head>
<meta charset="utf-8">
<title>Animated Circular Progress Bar Demos</title>
<style>
/* Load animation */

@-webkit-keyframes 
load { 0% {
stroke-dashoffset:0
}
}
@-moz-keyframes 
load { 0% {
stroke-dashoffset:0
}
}
@keyframes 
load { 0% {
stroke-dashoffset:0
}
}

/* Container */

.progress {
  position: relative;
  display: inline-block;
  padding: 0;
  text-align: center;
}

/* Item */

.progress>li {
  display: inline-block;
  position: relative;
  text-align: center;
  color: #93A2AC;
  font-family: Lato;
  font-weight: 100;
  margin: 2rem;
}

.progress>li:before {
  content: attr(data-name);
  position: absolute;
  width: 100%;
  bottom: -2rem;
  font-weight: 400;
}

.progress>li:after {
  content: attr(data-percent);
  position: absolute;
  width: 100%;
  top: 3.7rem;
  left: 0;
  font-size: 2rem;
  text-align: center;
}

.progress svg {
  width: 10rem;
  height: 10rem;
}

.progress svg:nth-child(2) {
  position: absolute;
  left: 0;
  top: 0;
  transform: rotate(-90deg);
  -webkit-transform: rotate(-90deg);
  -moz-transform: rotate(-90deg);
  -ms-transform: rotate(-90deg);
}

.progress svg:nth-child(2) path {
  fill: none;
  stroke-width: 25;
  stroke-dasharray: 629;
  stroke: rgba(255, 255, 255, 0.9);
  -webkit-animation: load 1s;
  -moz-animation: load 1s;
  -o-animation: load 1s;
  animation: load 1s;
}
</style>
<link href="http://www.cssscript.com/wp-includes/css/sticky.css" rel="stylesheet" type="text/css">
</head>

<body>
<ul class="progress">
	<!--  Item  -->
	<li data-name="RMP-4.0" data-percent="<?php echo $percentage;?>%"> 
		<svg viewBox="-10 -10 220 220">
			<g fill="none" stroke-width="8" transform="translate(100,100)">
				<path d="M 0,-100 A 100,100 0 0,1 0,100" stroke="#81c784"/>     
				<path d="M 0,100 A 100,100 0 0,1 -0,-100" stroke="#81c784"/>     
			</g>
		</svg> 
		<svg viewBox="-10 -10 220 220">
			<path d="M200,100 C200,44.771525 155.228475,0 100,0 C44.771525,0 0,44.771525 0,100 C0,155.228475 44.771525,200 100,200 C155.228475,200 200,155.228475 200,100 Z" stroke-dashoffset="<?php echo ($percentage/100)* 629;?>"></path>
		</svg>
	</li> 

</body>
</html>
