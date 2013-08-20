<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Create beautiful slideshows with jQuery Cycle - Backslash</title>

<!-- <link href="css/demo.css" rel="stylesheet" type="text/css" /> -->
<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->


<!-- required for this demo -->
<!-- <link rel="stylesheet" href="css/slideshows.css" /> -->
<script src="../jquery-1.6.4.min.js"></script>
<script src="js/jquery.cycle.all.js"></script>

<script src="js/jquery.easing.1.3.js"></script>


</head>
<body>
<div id="wrapper">

<section id="main">

	<div id="content">
	
		<h1>Create beautiful slideshows with jQuery Cycle</h1>
		<p>by <a href="http://www.backslash.gr/">Nikos Tsaganos</a></p>
		<p>for more demos like this visit <a href="http://www.backslash.gr/">Backslash.gr</a></p>

	
		
		<h2>Slideshow #2</h2>
		<?php 
	for($i=1;$i<=3;$i++){
?>
<style>
/* slideshow 2 */
	
.ss<?= $i;?>_wrapper { position:relative; width:360px; height:268px; margin:0 0 20px 0; overflow:hidden; }
.ss<?= $i;?>_wrapper .slideshow { position:relative; width:360px; height:268px; }
	
	.ss<?= $i;?>_wrapper .slideshow_item { width:360px; height:268px; }
	.ss<?= $i;?>_wrapper .slideshow_item .data { display:none; }	
	
	.ss<?= $i;?>_wrapper a.slideshow_prev { position:absolute; left:-40px; top:160px; z-index:10; width:40px; height:46px; outline:none; background:url(trans-black-70.png); -moz-border-radius: 4px; -webkit-border-radius: 4px; border-radius: 4px; -moz-box-shadow: 0 0 2px #222; -webkit-box-shadow: 0 0 2px #222; box-shadow: 0 0 2px #222;  }
		.ss<?= $i;?>_wrapper a.slideshow_prev:hover { background:#000; }
		.ss<?= $i;?>_wrapper a.slideshow_prev span { display:block; width:40px; height:46px; background:url(css/arrows.png) no-repeat -55px 50%; text-indent:-9999px; }
		
	.ss<?= $i;?>_wrapper a.slideshow_next { position:absolute; right:-40px; top:160px; z-index:10; width:40px; height:46px; outline:none; background:url(trans-black-70.png); -moz-border-radius: 4px; -webkit-border-radius: 4px; border-radius: 4px; -moz-box-shadow: 0 0 2px #222; -webkit-box-shadow: 0 0 2px #222; box-shadow: 0 0 2px #222;  }
		.ss<?= $i;?>_wrapper a.slideshow_next:hover { background:#000; }
		.ss<?= $i;?>_wrapper a.slideshow_next span { display:block; width:40px; height:46px; background:url(css/arrows.png) no-repeat -5px 50%; text-indent:-9999px; }
	
	.ss<?= $i;?>_wrapper .slideshow_paging { position:absolute; top:10px; right:10px; z-index:11; font-size:12px; padding:3px 2px; background:url(trans-black-70.png); -moz-border-radius: 4px; -webkit-border-radius: 4px; border-radius: 4px; -moz-box-shadow: 0 0 2px #222; -webkit-box-shadow: 0 0 2px #222; box-shadow: 0 0 2px #222; }
		.ss<?= $i;?>_wrapper .slideshow_paging a { display:block; float:left; margin:0 1px; padding:3px 7px; color:#ccc; -moz-border-radius: 4px; -webkit-border-radius: 4px; border-radius: 4px; }
			.ss<?= $i;?>_wrapper .slideshow_paging a:hover { color:#fff }
			.ss<?= $i;?>_wrapper .slideshow_paging a.activeSlide { background:#eee; color:#222 }
</style>
<script>
$(function() {
	

// ---------------------------------------------------
// Slideshow 2

    $('#slideshow_<?= $i;?>').cycle({
        fx: 'fade',		
		speed:  900, 
		timeout: 0, 
		pager: '.ss<?= $i;?>_wrapper .slideshow_paging', 
        prev: '.ss<?= $i;?>_wrapper .slideshow_prev',
        next: '.ss<?= $i;?>_wrapper .slideshow_next',
		before: function(currSlideElement, nextSlideElement) {
			var data = $('.data', $(nextSlideElement)).html();
			$('.ss<?= $i;?>_wrapper .slideshow_box').stop(true, true).animate({ bottom:'-110px'}, 400, function(){
				$('.ss<?= $i;?>_wrapper .slideshow_box .data').html(data);
			});
			$('.ss<?= $i;?>_wrapper .slideshow_box').delay(100).animate({ bottom:'0'}, 400);
		}
    });

	$('.ss<?= $i;?>_wrapper').mouseenter(function(){
		$('#slideshow_<?= $i;?>').cycle('pause');
		$('.ss<?= $i;?>_wrapper .slideshow_prev').stop(true, true).animate({ left:'20px'}, 200);
		$('.ss<?= $i;?>_wrapper .slideshow_next').stop(true, true).animate({ right:'20px'}, 200);
    }).mouseleave(function(){
		$('#slideshow_2').cycle('resume');
		$('.ss<?= $i;?>_wrapper .slideshow_prev').stop(true, true).animate({ left:'-40px'}, 200);
		$('.ss<?= $i;?>_wrapper .slideshow_next').stop(true, true).animate({ right:'-40px'}, 200);
    });
	
	
	
// ---------------------------------------------------


	
	$('a[href="#"]').click(function(event){ 
		event.preventDefault(); // for this demo disable all links that point to "#"
	});
	
});
</script>

		<div class="ss<?= $i;?>_wrapper">
		
			<a href="#" class="slideshow_prev"><span>Previous</span></a>
			<a href="#" class="slideshow_next"><span>Next</span></a>
				
			<!-- <div class="slideshow_paging"></div> -->
			
			<div class="slideshow_box">

				<div class="data"></div>
			</div>
			
			<div id="slideshow_<?= $i;?>" class="slideshow">
				
					<div class="image"><a href="1"><img src="photos/1.jpg" alt="photo 2" width="360" height="268" /></a></div>
					<div class="image"><a href="2"><img src="photos/4.jpg" alt="photo 3" width="360" height="268" /></a></div>
					<div class="image"><a href="3"><img src="photos/2.jpg" alt="photo 2" width="360" height="268" /></a></div>
					<div class="image"><a href="4"><img src="photos/3.jpg" alt="photo 3" width="360" height="268" /></a></div>
				
								
			</div>

		</div><!-- .ss<?= $i;?>_wrapper -->
		
	<? }?>
		
		
		
			
	</div>
	
</section><!-- #main -->

<footer>
	<p>Copyright © 2011 Backslash • Created by <a href="http://www.backslash.gr">Nikos Tsaganos</a></p>
</footer>
</div><!-- #wrapper -->
</body>
</html>