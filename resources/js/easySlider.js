(function($) {

	$.fn.easySlider = function(options){
	  
		// default configuration properties
		var defaults = {
			prevId: 		'prevBtn',
			prevText: 		'Previous',
			nextId: 		'nextBtn',	
			nextText: 		'Next',
			submitId: 		'submitBtn',
			submitText: 		'Submit',
			orientation:	'', //  'vertical' is optional;
			speed: 			800			
		}; 
		
		var options = $.extend(defaults, options);		
		
		return this.each(function() {  
			obj = $(this); 				
			var s = $("li", obj).length;
			var w = obj.width(); 
			var h = obj.height(); 
			var ts = s-1;
			var t = 0;
			var vertical = (options.orientation == 'vertical');
			$("ul", obj).css('width',s*w);			
			if(!vertical) $("li", obj).css('float','left');
			$(obj).after('<span id="'+ options.prevId +'"><a href=\"javascript:void(0);\" class=\"contact_button\">'+ options.prevText +'</a></span> <span id="'+ options.nextId +'"><a href=\"javascript:void(0);\" class=\"contact_button\">'+ options.nextText +'</a></span> <span id="'+ options.submitId +'"><a href=\"#\" class=\"contact_button\">'+ options.submitText +'</a></span>');		
			$("a","#"+options.prevId).hide();
			$("a","#"+options.submitId).hide();
			$("a","#"+options.nextId).hide();
			$("a","#"+options.nextId).click(function(){		
				animate("next");
				if (t>=ts){
					$(this).fadeOut();
					$("a","#"+options.submitId).fadeIn();
				}else{
					$("a","#"+options.prevId).fadeIn();					
				}

			});
			
			
			$("a","#"+options.prevId).click(function(){		
				animate("prev");
				if (t<=0){
					$(this).fadeOut();
				}else{
					$("a","#"+options.submitId).fadeOut();					
					$("a","#"+options.nextId).fadeIn();
					
				}
			});
			
			
			$("#submitBtn").click(function () {
		
			//document.forms['form1'].submit();		
			var names = $('#names').val();
			var company = $('#company').val();
			var contact = $('#contact').val();
			var email = $('#email').val();
			var comment = $('#comment').val();
			var email_str = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,})+$/
			
			if(names=='' || names=='1.) What is your first and last name?'){
				$('#contact_errmsg_area').html('<div class="text_big">Please enter your first and last name.</div>');
				return false;
			} else if(company=='' || company=='2.) What is your company?'){
				$('#contact_errmsg_area').html('<div class="text_big">Please enter your company name.</div>');
				return false;
			} else if(contact=='' || contact=='3.) What is your contact number?'){
				$('#contact_errmsg_area').html('<div class="text_big">Please enter your contact number.</div>');
				return false;
			} else if(email=='' || email=='4.) What is your email id?'){
				$('#contact_errmsg_area').html('<div class="text_big">Please enter your email address.</div>');
				return false;
			}
			else if(!email.match(email_str)){
				$('#contact_errmsg_area').html('<div class="text_big">Please enter a correct email address.</div>');
				return false;
			} else if(comment=='' || comment=='5.) Any message or comment for us?'){
				$('#contact_errmsg_area').html('<div class="text_big">Please enter your comment/message.</div>');
				return false;
			} else {				
				document.forms['form1'].submit();
			}			
			
			});	
			//--start of the function to submit the form---------------------------------
//			$("a","#"+options.submitId).click(function(){
//				document.forms['form1'].submit();
//			});
			//--end of the function to submit the form---------------------------------
			
			function animate(dir){
				if(dir == "next"){
					t = (t>=ts) ? ts : t+1;	
				} else {
					t = (t<=0) ? 0 : t-1;
				};								
				if(!vertical) {
					p = (t*w*-1);
					$("ul",obj).animate(
						{ marginLeft: p }, 
						options.speed
					);				
				} else {
					p = (t*h*-1);
					$("ul",obj).animate(
						{ marginTop: p }, 
						options.speed
					);					
				}
			};
			if(s>1) $("a","#"+options.nextId).fadeIn();
		});	  
	};
})(jQuery);