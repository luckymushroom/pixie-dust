
<script type="text/javascript" src="<?=base_url();?>media/site/js/contact-form.js"></script>

<div class="maincontent">

	<div class="col-2-3 contact-envelop">
    	<div class="envelop-content">                            
            <p class="highlighttext">Are you interested in learning more about MFarm?<br/>Do you have a new project that you want to talk to us about? Just fill out our contact form below, and an actual human will get back to you within a day or two</p>
            <div id="contactFormArea">
                <!-- Contact Form Start //-->
                <form action="<?=base_url();?>contact_send" id="contactform"> 
                    <fieldset>
                    <label class="label">Name</label>
                    <input type="text" name="name" class="textfield" id="name" value="" />
                    <div class="clear"></div>
                    <label class="label">E-mail</label>
                    <input type="text" name="email" class="textfield" id="email" value="" />
                    <div class="clear"></div>
                    <label class="label">Subject</label>
                    <input type="text" name="subject" class="textfield" id="subject" value="" />
                    <div class="clear"></div>    
                    <label class="label">Message</label>
                    <textarea name="message" id="message" class="textarea" cols="2" rows="5"></textarea>
                    <div class="clear"></div> 
                    <label class="label">&nbsp;</label>
                    <input type="submit" name="submit" class="buttoncontact" id="buttonsend" value="Send" />
                    <span class="loading" style="display: none;">Please wait..</span>
                    <div class="clear"></div>
                    </fieldset> 
                </form>
                <!-- Contact Form End //--> 
            </div> 
        </div>
        
    </div>
    <div class="col-5">
       	<h4>Head Office</h4>
      	<p>
        <strong>MFarm Ltd</strong><br/>
        Bishop Magua Centre<br/>
        George Padmore Lane<br/>
        Nairobi, KENYA<br/>
        </p>
        <p>
        <img src="<?=base_url();?>media/site/images/contact-phone.png" alt="" class="contact-icon" />+254 707 993 933<br/>
        <img src="<?=base_url();?>media/site/images/contact-email.png" alt="" class="contact-icon" />info@mfarm.co.ke<br/>
        <img src="<?=base_url();?>media/site/images/contact-web.png" alt="" class="contact-icon" />www.mfarm.co.ke
        </p>
    </div>  

</div>
</div>            
<!-- END OF CONTENT -->