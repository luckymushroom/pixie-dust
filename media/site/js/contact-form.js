  $(document).ready(function() {		
  $('#buttonsend').click( function() {
	
		var name    = $('#name').val();
		var subject = $('#subject').val();
		var email   = $('#email').val();
		var message = $('#message').val();
		
		$('.loading').fadeIn('fast');
		
		if (name != "" && subject != "" && email != "" && message != "")
			{

				$.ajax(
					{
						url: $('#contactform').attr( 'action' ),
						type: 'POST',
						data: "name=" + name + "&subject=" + subject + "&email=" + email + "&message=" + message,
						success: function(result) 
						{
							$('.loading').fadeOut('fast');
							if(result == "email_error") {
								$('#email').css({"background":"#FFFCFC","border":"2px solid #ffadad"}).next('.require').text(' !');
							} else {
								$('#name, #subject, #email, #message').val("");
								$('<div class="success-contact">Your message has been sent successfully. Thank you! </div>').insertBefore('#contactFormArea');
								$('.success-contact').fadeOut(5000, function(){ $(this).remove(); });
							}
						}
					}
				);
				return false;
				
			} 
		else 
			{
				$('.loading').fadeOut('fast');
				if( name == "") $('#name').css({"background":"#FFFCFC","border":"2px solid #ffadad"});
				if(subject == "") $('#subject').css({"background":"#FFFCFC","border":"2px solid #ffadad"});
				if(email == "" ) $('#email').css({"background":"#FFFCFC","border":"2px solid #ffadad"});
				if(message == "") $('#message').css({"background":"#FFFCFC","border":"2px solid #ffadad"});
				return false;
			}
	});
	
		$('#name, #subject, #email,#message').focus(function(){
			$(this).css({"background":"#ffffff","border":"2px solid #dddddd", "background":"url(./pages/images/bg-pattern/bg-pattern7.png) repeat"});
		});
      	
		});