<div class="clear"></div>
</div>
<footer id="footer" role="contentinfo">
<div id="copyright">
<?php echo sprintf( __( 'Copyright %1$s %2$s %3$s', 'blankslate' ), '&copy;', esc_html( get_bloginfo( 'name' ) ), date( 'Y' ) ); ?>
</div>
</footer>
</div>
<?php wp_footer(); ?>
<script type="text/javascript">
jQuery(document).ready(function($){	
	jQuery("#tilmeld-form").dialog({
		autoOpen:false,
		modal:true
	});
		
	/*jQuery("#login-form").dialog({
		autoOpen:false,
		modal:true
	});*/
	
	jQuery("#tilmeld").click(function(){
		$("#tilmeld-form").dialog("open");
	});
	
	jQuery("#medlem_tilmeld").click(function(){
		$("#tilmeld-form").dialog("open");
	});
	
	jQuery("#tilmeld-ie").click(function(){
		$("#tilmeld-form").dialog("open");
	});
		
	/*jQuery("#logind").click(function(){
		$("#login-form").dialog("open");
	});

	jQuery("#logind-ie").click(function(){
		$("#login-form").dialog("open");
	});
	
	jQuery(".close-button-login").click(function(){
		$("#login-form").dialog("close");
	});*/
	
	jQuery(".close-button-tilmeld").click(function(){
		$("#tilmeld-form").dialog("close");
	});

	//Indryk annonce button
	jQuery('#add-img').click(function(){
		if ($('.annoncer-links').hasClass('hidden')) {
			$('.annoncer-links').show();
			$('.annoncer-links').removeClass('hidden');
		} else {
			$('.annoncer-links').addClass('hidden');
			$('.annoncer-links').hide();
		}
	});
	
	//when the trigger is clicked we check to see if the popout is currently hidden
	//based on the hidden we choose the correct animation
	jQuery('#mobile_button').click( function() {
	    if ($('#mobile_menu').hasClass('hidden')) {
		$('#mobile_menu').removeClass('hidden');
		showPopout();
	    }
	    else {
		$('#mobile_menu').addClass('hidden');
		hidePopout();
	    }
	});
	
	function showPopout() {
	    $('#mobile_menu').animate({
		left: 0
	    }, 'slow', function () {
		//$('#mobile_button').html('Close');  //change the trigger text at end of animation
	    });
	}
	
	function hidePopout() {
	    $('#mobile_menu').animate({
		left: -250
	    }, 'slow', function () {
		//$('#mobile_button').html('Show');  //change the trigger text at end of animation
	    });
	}
	
	jQuery('#sheep-img').hover(function(){
		$(this).attr('src','<?php bloginfo('stylesheet_directory');?>/images/annoncer/sheep_hover.png');
	}, function() {
		$(this).attr('src','<?php bloginfo('stylesheet_directory');?>/images/annoncer/sheep.png');
	});
	
	jQuery('#mats-img').hover(function(){
		$(this).attr('src','<?php bloginfo('stylesheet_directory');?>/images/annoncer/mats_hover.png');
	}, function() {
		$(this).attr('src','<?php bloginfo('stylesheet_directory');?>/images/annoncer/mats.png');
	});
		
	jQuery('#food-img').hover(function(){
		$(this).attr('src','<?php bloginfo('stylesheet_directory');?>/images/annoncer/food_hover.png');
	}, function() {
		$(this).attr('src','<?php bloginfo('stylesheet_directory');?>/images/annoncer/food.png');
	});
	
	jQuery('#add-img').hover(function(){
		$(this).attr('src','<?php bloginfo('stylesheet_directory');?>/images/annoncer/add_hover.png');
	}, function() {
		$(this).attr('src','<?php bloginfo('stylesheet_directory');?>/images/annoncer/add.png');
	});
	
	$('.button-primary').attr('value', '');
	
	// Released under MIT license: http://www.opensource.org/licenses/mit-license.php
 
	$('[placeholder]').focus(function() {
	  var input = $(this);
	  if (input.val() == input.attr('placeholder')) {
	    input.val('');
	    input.removeClass('placeholder');
	  }
	}).blur(function() {
	  var input = $(this);
	  if (input.val() == '' || input.val() == input.attr('placeholder')) {
	    input.addClass('placeholder');
	    input.val(input.attr('placeholder'));
	  }
	}).blur().parents('form').submit(function() {
	  $(this).find('[placeholder]').each(function() {
	    var input = $(this);
	    if (input.val() == input.attr('placeholder')) {
	      input.val('');
	    }
	  })
	});
});
</script>
<script type="text/javascript">    
    function isTouchDevice(){
	try{
		document.createEvent("TouchEvent");
		return true;
	}catch(e){
		return false;
	}
    }
    
    function touchScroll(id){
	if(isTouchDevice()){ //if touch events exist...
		var el=document.getElementById(id);
		var scrollStartPos=0;
 
		document.getElementById(id).addEventListener("touchstart", function(event) {
			scrollStartPos=this.scrollTop+event.touches[0].pageY;
			event.preventDefault();
		},false);
 
		document.getElementById(id).addEventListener("touchmove", function(event) {
			this.scrollTop=scrollStartPos-event.touches[0].pageY;
			event.preventDefault();
		},false);
	}
}

var mainBox = document.getElementById("");
</script>
</body>
</html>