<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
  <title></title>
</head>

<body>
<script type="text/javascript">
<!--
var ary=[
'http://www.vicsjavascripts.org.uk/StdImages/Egypt5.jpg',
'http://www.vicsjavascripts.org.uk/StdImages/Egypt6.jpg',
'http://www.vicsjavascripts.org.uk/StdImages/Egypt7.jpg',
'http://www.vicsjavascripts.org.uk/StdImages/Egypt8.jpg',
'http://www.vicsjavascripts.org.uk/StdImages/Egypt9.jpg',
'http://www.vicsjavascripts.org.uk/StdImages/Egypt10.jpg'
];

function Slide(id,ary,nu){
 document.getElementById(id).src=ary[nu];
 Slide[id]={nu:nu};  // create a function Slide[id] object with a property of nu recording the current image number
}

function nextImage(id,ary,ud){
  var nu=(Slide[id]&&Slide[id].nu?Slide[id].nu:0)+ud;  // if the function Slide[id] object exists use that or use 0 and add ud
  Slide(id,ary,Math.min(Math.max(nu,0),ary.length-1));
}

//-->
</script>



<img src="http://www.vicsjavascripts.org.uk/StdImages/One.gif" name="previous" height="46" width="46"  onmouseup="nextImage('slideshow',ary,-1);" id="previous"/>

<img src="http://www.vicsjavascripts.org.uk/StdImages/Two.gif" name="next" height="46" width="46"  onmouseup="nextImage('slideshow',ary,1)" id="next"/>

<img src="http://www.vicsjavascripts.org.uk/StdImages/Egypt5.jpg" name="slide" width="700" height="460" id="slideshow"/>
<a class="slide1" onclick="javascript:Slide('slideshow',ary,0);">1 </a>
<a class="slide2" onclick="javascript:Slide('slideshow',ary,1);">2 </a>
<a class="slide3" onclick="javascript:Slide('slideshow',ary,2);">3 </a>
<a class="slide4" onclick="javascript:Slide('slideshow',ary,3);">4 </a>
<a class="slide5" onclick="javascript:Slide('slideshow',ary,4);">5 </a>
<a class="slide6" onclick="javascript:Slide('slideshow',ary,5);">6 </a>
</body>

</html>