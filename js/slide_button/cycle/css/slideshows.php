<style>
/* slideshow  */	

.ss<?= $img_num;?>_wrapper { position:relative; width:100%; height:220px; margin:0 0 20px 0; }
.ss<?= $img_num;?>_wrapper .slideshow { position:relative; width:100%; height:180px; }	
	.ss<?= $img_num;?>_wrapper .slideshow_item { display:none; width:100%; height:220px; }
	.ss<?= $img_num;?>_wrapper .slideshow_item  { display:none; }	
	

	.ss<?= $img_num;?>_wrapper a.slideshow_prev { position:absolute; left: 5px; bottom: 160px; z-index:98; outline:none; background:url(<?= $site;?>/js/slide_button/cycle/css/trans-black-60.png); }
		.ss<?= $img_num;?>_wrapper a.slideshow_prev:hover { background:#000; }
		.ss<?= $img_num;?>_wrapper a.slideshow_prev span { display:block; width:40px; height:46px; background:url(<?= $site;?>/js/slide_button/cycle/css/arrows.png) no-repeat -55px 50%; text-indent:-9999px; }
		
	.ss<?= $img_num;?>_wrapper a.slideshow_next { position:absolute; left: 45px; bottom: 160px; z-index:98; outline:none; background:url(<?= $site;?>/js/slide_button/cycle/css/trans-black-60.png);}
		.ss<?= $img_num;?>_wrapper a.slideshow_next:hover { background:#000; }
		.ss<?= $img_num;?>_wrapper a.slideshow_next span { display:block; width:40px; height:46px; background:url(<?= $site;?>/js/slide_button/cycle/css/arrows.png) no-repeat -5px 50%; text-indent:-9999px; }

	.ss<?= $img_num;?>_wrapper .slideshow_paging { position:absolute; bottom:10px; right:545px; z-index:99; font-size:12px; }
		.ss<?= $img_num;?>_wrapper .slideshow_paging a { display:block; float:left; margin:0 0 0 2px; padding:4px 7px; color:#ccc; }
			.ss<?= $img_num;?>_wrapper .slideshow_paging a:hover { color:#fff }
			.ss<?= $img_num;?>_wrapper .slideshow_paging a.activeSlide { background:#eee; color:#222 }
	
		
.ss<?= $img_num;?>_wrapper .slideshow_box { position:absolute; left:30px; bottom:0; background:url(<?= $site;?>/js/slide_button/cycle/css/trans-black-60.png); z-index:10; }
		.ss<?= $img_num;?>_wrapper .slideshow_box .data { padding:15px; color:#ccc;  }
		.ss<?= $img_num;?>_wrapper .slideshow_box .data h4 { color:#fff; font:bold 18px arial, sans-serif; padding:0; margin:0 0 10px 0; }
		.ss<?= $img_num;?>_wrapper .slideshow_box .data p { padding:0; margin:0; line-height:140%;}
		
		.ss<?= $img_num;?>_wrapper .slideshow_box .data a { color:#fff; }
</style>
<script>
$(function() {
	


// ---------------------------------------------------
// Slideshow 1

    $('#slideshow_<?= $img_num;?>').cycle({
        fx: 'fade',		
	//	easing: 'easeInOutCirc',
		speed:  700, 
		timeout: 0, 
		pager: '.ss<?= $img_num;?>_wrapper .slideshow_paging', 
        prev: '.ss<?= $img_num;?>_wrapper .slideshow_prev',
        next: '.ss<?= $img_num;?>_wrapper .slideshow_next',
		before: function(currSlideElement,nextSlideElement) {
			var data = $('.data', $(nextSlideElement)).html();
			$('.ss<?= $img_num;?>_wrapper .slideshow_box').fadeOut(300, function(){
				$('.ss<?= $img_num;?>_wrapper .slideshow_box ').remove();
				$('<div class="data">'+data+'</div>').hide().appendTo('.ss<?= $img_num;?>_wrapper .slideshow_box').fadeIn(600);
			});
		}
    });
		// not using the 'pause' option. instead make the slideshow pause when the mouse is over the whole wrapper
	$('.ss<?= $img_num;?>_wrapper').mouseenter(function(){
		$('#slideshow_<?= $img_num;?>').cycle('pause');
    }).mouseleave(function(){
		$('#slideshow_<?= $img_num;?>').cycle('resume');
    });
	
	
// ---------------------------------------------------
	
	$('a[href="#"]').click(function(event){ 
		event.preventDefault(); // for this demo disable all links that point to "#"
	});
	
});
</script>