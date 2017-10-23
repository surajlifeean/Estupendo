$(document).ready(function(){
	$(window).trigger('resize');
	//bxslider
	$('.banner-slider').bxSlider({
		auto:true,
		controls:false,
		speed: 1200,
		pager:true
	});
	$('.villa-slider').bxSlider({
		auto:true,
		controls:true,
		speed: 1200,
		pager:false
	});
	//Navigation	
	$('#nav_toggle').click(function() {
		$(this).toggleClass('toggle-active');
		$('#nav_overlay').toggleClass('nav-active');
	});	
// datetimepicker
	
	if (window.innerWidth > 768){ 
		$('#datetimepicker1').datetimepicker({
					format: "DD MMM",
			ignoreReadonly: true,
			widgetPositioning:{
				  vertical: 'top'
			}
		});
		$('#datetimepicker2').datetimepicker({
			format: "DD MMM",
			ignoreReadonly: true,
			widgetPositioning:{
				  vertical: 'top'
			}
		});	
	}	
	 else {
			$('#datetimepicker1').datetimepicker({
					format: "DD MMM",
			ignoreReadonly: true,
			widgetPositioning:{
				  horizontal: 'auto',
				  vertical: 'bottom'
			}
		});
		$('#datetimepicker2').datetimepicker({
			format: "DD MMM",
			ignoreReadonly: true,
			widgetPositioning:{
				  horizontal: 'auto',
				  vertical: 'bottom'
			}
		});	
	}
	
	
	$('#datetimepicker3').datetimepicker({
					format: "DD MMM",
			ignoreReadonly: true,
			widgetPositioning:{
				  vertical: 'bottom'
			}
	});
		$('#datetimepicker4').datetimepicker({
			format: "DD MMM",
			ignoreReadonly: true,
			widgetPositioning:{
				  vertical: 'bottom'
			}
	});			
		
});
$(window).on('resize',function() {
	var footerHeight = $('footer').outerHeight();
	$('body').css('margin-bottom', footerHeight+'px');
});