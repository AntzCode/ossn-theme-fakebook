//<script>
$(document).ready(function() {
	
	setTimeout(function(){
	    // it's a hack because the original was coded to an id selector. Now we have two links on the same page doing the same thing!
	    $('.menu-section-item-a-addgroup').each(function(){
		$(this).off('click');
	    });
	    $('.container').delegate('.menu-section-item-a-addgroup', 'click', function(){
		Ossn.MessageBox('groups/add');
	    });
	    $('.sidemenu-absolute').delegate('.menu-section-item-a-addgroup', 'click', function(){
		Ossn.MessageBox('groups/add');
	    });
	    
	});
	
	$('.topbar').delegate('.ossn-topbar-dropdown-menu', 'click', function(e){
	    
	    if($(window).width() <= 992){
		// for mobile devices
		e.preventDefault();
		e.stopPropagation();
		
		if($('.sidemenu-absolute').hasClass('active')){
		    // close the menu
		    $('a i', this).css({
			'transform' : 'scaleY(1)',
			'top' : '0px',
			'position' : 'relative'
		    });
		    $('.sidemenu-absolute').removeClass('active');
		    
		}else{
		    // open the menu
		    $('a i', this).css({
			'transform' : 'scaleY(-1)',
			'top' : '8px',
			'position' : 'relative'
		    });
		    $('.sidemenu-absolute').addClass('active');
		}
	    }
	    
	    
	});
    
	$(document).on('click', '#sidebar-toggle', function() {
		var $toggle = $(this).attr('data-toggle');
		if ($toggle == 0) {
			$(this).attr('data-toggle', 1);
			$('.sidebar').addClass('sidebar-open');
			$('.ossn-page-container').addClass('sidebar-open-page-container');
			$('.topbar .right-side').addClass('right-side-space');
			$('.topbar .right-side').addClass('sidebar-hide-contents-xs');
			$('.ossn-inner-page').addClass('sidebar-hide-contents-xs');
		}
		if ($toggle == 1) {
			$(this).attr('data-toggle', 0);
			$('.sidebar').removeClass('sidebar-open');
			$('.ossn-page-container').removeClass('sidebar-open-page-container');
			$('.topbar .right-side').removeClass('right-side-space');
			$('.topbar .right-side').removeClass('sidebar-hide-contents-xs');
			$('.ossn-inner-page').removeClass('sidebar-hide-contents-xs');

			$('.topbar .right-side').addClass('right-side-nospace');
			$('.sidebar').addClass('sidebar-close');
			$('.ossn-page-container').addClass('sidebar-close-page-container');

		}
		var document_height = $(document).height();
		$(".sidebar").height(document_height);
	});
	var $chatsidebar = $('.ossn-chat-windows-long .inner');
	if($chatsidebar.length){
		$chatsidebar.css('height', $(window).height() - 45);
	}
	$(document).scroll(function() {
		if($chatsidebar.length){
			if ($(document).scrollTop() >= 50) {
				$chatsidebar.addClass('ossnchat-scroll-top');
				$chatsidebar.css('height', $(window).height());
			} else if ($(document).scrollTop() == 0) {
				$chatsidebar.removeClass('ossnchat-scroll-top');
				$chatsidebar.css('height', $(window).height() - 45);
			}
		}
	});
});
