$(document).ready(function(){$("#buttonsend").click(function(){var e=$("#name").val(),t=$("#subject").val(),n=$("#email").val(),r=$("#message").val();$(".loading").fadeIn("fast");if(e!=""&&t!=""&&n!=""&&r!=""){$.ajax({url:$("#contactform").attr("action"),type:"POST",data:"name="+e+"&subject="+t+"&email="+n+"&message="+r,success:function(e){$(".loading").fadeOut("fast");if(e=="email_error")$("#email").css({background:"#FFFCFC",border:"2px solid #ffadad"}).next(".require").text(" !");else{$("#name, #subject, #email, #message").val("");$('<div class="success-contact">Your message has been sent successfully. Thank you! </div>').insertBefore("#contactFormArea");$(".success-contact").fadeOut(5e3,function(){$(this).remove()})}}});return!1}$(".loading").fadeOut("fast");e==""&&$("#name").css({background:"#FFFCFC",border:"2px solid #ffadad"});t==""&&$("#subject").css({background:"#FFFCFC",border:"2px solid #ffadad"});n==""&&$("#email").css({background:"#FFFCFC",border:"2px solid #ffadad"});r==""&&$("#message").css({background:"#FFFCFC",border:"2px solid #ffadad"});return!1});$("#name, #subject, #email,#message").focus(function(){$(this).css({background:"#ffffff",border:"2px solid #dddddd",background:"url(./pages/images/bg-pattern/bg-pattern7.png) repeat"})})});