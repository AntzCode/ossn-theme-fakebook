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

    $('.topbar').delegate('.search-icon-submit', 'click', function(e){
        if($('.topbar form.ossn-search input[name=q]').val().length < 1){
            // not searching an empty value
            return;
        }
        $('.topbar form.ossn-search').submit();
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
	
	<?php if(!ossn_isLoggedin() || !ossn_loggedin_user()->canModerate()){ ?>
	    $('.ossn-profile-extra-menu.dropdown .dropdown-menu li a.profile-menu-extra-banuser').parents('li').remove();
	<?php } ?>
	
	$('.ossn-widget.messages-with').delegate('.message-inner', 'DOMSubtreeModified', function(){
	    
	    if($(this).data('working')>0){
		// do not trigger recursive events!
		return;
	    }else{
		$(this).data('working', 1);
	    }
	    
	    $('> .row .text:not(.linkified)', this).each(function(){
		
		$(this).addClass('linkified');
		
		var tokens = [];
		
		var hashString = function(text, options){
		    var hash = 0;
		    if(text.length === 0){
		      return hash;
		    }
		    for(var i = 0; i < text.length; i++){
		      var char = text.charCodeAt(i);
		      hash = ((hash<<5)-hash)+char;
		      hash = hash & hash; // Convert to 32bit integer
		    }
		    if(hash < 0){
		      // convert to positive integer
		      hash = 0-hash;
		    }
		    var prefix = options.prefix || 'STHASH';
		    var suffix = options.suffix || 'HSAHTS';
		    return prefix+hash+suffix;
		};
		
		var tokenizeString = function(text, options){
		    options = options || {};
		    var token = hashString(text, options);
		    tokens[token] = text;
		    return token;
		};
  
		var detokenizeString = function(token){
		  return tokens[token];
		};
  
		var processedText = $(this).html();
		
		// we do not nest links inside existing links
		processedText = processedText.replace(/(<a.*?<\/a>)/g, function(match){
		  var token = tokenizeString(match, {prefix:'STEXEMPT',suffix:'TPMEXETS'});
		  return token;
		});
		
		// convert non-linked urls into links
		processedText = processedText.replace(/http[s]?:\/\/[^\]][^\s<]*/g, function(match){
		  return '<a href="'+match+'" target="_blank">'+match+'</a>';
		});
		
		// restore existing links
		processedText = processedText.replace(/(STEXEMPT[0-9]*TPMEXETS)/g, function(match){
		  return detokenizeString(match);
		});
		
		$(this).html(processedText);
		
	    });
	    
	    // reset the flag - permit future processes to resume
	    $(this).data('working', 0);
	    
	});
	
	$('.ossn-widget.messages-with .message-inner').trigger('DOMSubtreeModified');
	
	
    
	$(document).on('click', '#sidebar-toggle', function() {
		var $toggle = $(this).attr('data-bs-toggle');
		if ($toggle == 0) {
			$(this).attr('data-bs-toggle', 1);
			$('.sidebar').addClass('sidebar-open');
			$('.ossn-page-container').addClass('sidebar-open-page-container');
			$('.topbar .right-side').addClass('right-side-space');
			$('.topbar .right-side').addClass('sidebar-hide-contents-xs');
			$('.ossn-inner-page').addClass('sidebar-hide-contents-xs');
		}
		if ($toggle == 1) {
			$(this).attr('data-bs-toggle', 0);
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
