$(document).ready(function() {		
$('#buttonsend').click( function() {
	
		var name    	= $('#name').val();
		var mobile  	= $('#mobile').val();
		var product 	= $('#product').val();
		var quantity 	= $('#quantity').val();
		var location 	= $('#location').val();
		var price	 	= $('#price').val();
		
		$('.loading').fadeIn('fast');
		
		if (name != "" && mobile != "" && product != "" && quantity != "" && location != "" && price != "")
			{

				$.ajax(
					{
						url: $('#buyform').attr( 'action' ),
						type: 'POST',
						data: "name=" + name + "&mobile=" + mobile + "&product=" + product + "&quantity=" + quantity + "&location=" + location + "&price=" + price,
						success: function(result) 
						{
							$('.loading').fadeOut('fast');
							if(result == "mobile_error") {
								$('#mobile').css({"background":"#FFFCFC","border":"2px solid #ffadad"}).next('.require').text(' !');
							} else {
								$('#name, #mobile, #product, #quantity, #location, #price').val("");
								$('<div class="success-contact">Your request has been sent successfully. Thank you! </div>').insertBefore('#contactFormArea');
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
				if(name == "") $('#name').css({"background":"#FFFCFC","border":"2px solid #ffadad"});
				if(mobile == "") $('#mobile').css({"background":"#FFFCFC","border":"2px solid #ffadad"});
				if(product == "" ) $('#product').css({"background":"#FFFCFC","border":"2px solid #ffadad"});
				if(quantity == "") $('#quantity').css({"background":"#FFFCFC","border":"2px solid #ffadad"});
				if(location == "") $('#location').css({"background":"#FFFCFC","border":"2px solid #ffadad"});
				if(price == "") $('#price').css({"background":"#FFFCFC","border":"2px solid #ffadad"});
				
				return false;
			}
	});
	
		$('#name, #mobile, #product, #quantity, #location, #price').focus(function(){
			$(this).css({"background":"#ffffff","border":"2px solid #dddddd", "background":"url(./pages/images/bg-pattern/bg-pattern7.png) repeat"});
		});
    	
		});