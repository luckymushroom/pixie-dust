<div class="maincontent">

	<div class="col-1">                
    	<p class="highlighttext">We offer Web &amp; SMS based services to our clients. Below are some of our services currently on offer</p>
        
        <ul class="service-column-wrapper">
            <li class="services-column3">
            <div class="serv-icon"><img src="<?=base_url();?>media/img/serv-icon1.png" alt="" /></div>
            <h4>Price Information</h4>
            <h6>Get up to date crop price information.</h6>
            <p class="text-services">Unable to decide where to buy or sell you produce? Use M-Farm to check for prices from five major towns in Kenya.</p>
            </li>

			<li class="services-column3">
            <div class="serv-icon"><img src="<?=base_url();?>media/img/serv-icon7.png" alt="" /></div>
            <h4>Group Selling</h4>
            <h6>Connect to other farmers to jointly sell.</h6>
            <p class="text-services">Combining your efforts with other small scale farmers will enable you to access large-scale markets such as exporters, wholesalers and retailers.</p> 
            </li>

            <li class="services-column3-last">
            <div class="serv-icon"><img src="<?=base_url();?>media/img/serv-icon7.png" alt="" /></div>
            <h4>Group Buying</h4>
            <h6>Group Buying of farm utilities together </h6>
            <p class="text-services">Purchase input supplies together from manufacturers at cheaper rates.</p>
            </li>
                               
        </ul>
        
        <div class="pricingoffer-box">
        	<ul class="offer-list">
                <li class="offer-title"><h5>See Plans &amp; Pricing</h5></li>
                <li class="offer-button"><a class="button-helios alt-gray" href="<?=base_url('auth/login/');?>"><span>Its Free</span></a></li>
                <li class="offer-desc"><p>Subscribe with us to activate crop buying, selling  &amp; price information panel. And manage your farmers orders</p></li>                                  
            </ul>                            
        </div>
        
        <img src="<?=base_url();?>media/img/services-img.jpg" alt="" class="imgright" />
        <h5>Analytics</h5>                        
        <p>Collaborate with other farmers
		share knowledge, discuss farm events and subscribe to become an ultimate farmer</p>
        <ul class="circle-list">
        	<li>Price Analytics</li>
            <li>Buyer Information</li>
            <li>Farmers Group Data</li>
            <!-- <li>SMS Traffic / User behaviour</li>                             -->
        </ul>
        <p>Lower your costs by finding best market deals for your production inputs.</p>                        
        
    </div>                     
    

    <div class="col-3">
        <h5>Real-Time Data Collection</h5>
        <img src="<?php echo base_url();?>media/img/content-img1.jpg" alt="" class="imgborder" />            
        <p>Get access to accurate crop price information from five major towns in Kenya: Nairobi, Eldoret, Kisumu, Kitale and Mombasa</p>
        <?php if ($this->session->userdata('user_id')): ?>
            <a class="button-helios alt-green" href="<?php echo base_url();?>dashboard"><span>Back to User Panel</span></a>
        <?php else: ?>
            <a class="button-helios alt-green" href="<?php echo base_url();?>auth/create_user"><span>sign up / free 30 day trial</span></a><br /><br />
            <span>or <a href="<?php echo base_url();?>members">Sign In</a> to an existing account</span>
        <?php endif ?>
   </div>
   <div class="col-3">
        <h5>Unreasonable Institute Marketplace</h5>
        <iframe src="https://marketplace.unreasonableinstitute.org/giveo/widget/widget.php?myID=439" width="240" height="400" scrolling="no" style="border:none;"></iframe>
   </div>  
   <div class="col-3">
       <h5>Here is how to Support Us</h5>
       <p>This week, the most anyone can contribute to one entrepreneur is $50 KES 4,500.<br />
       The minimum remains $10 or KES 900.<br /> You can send your donations through paypal or a credit card or MPESA</p>

       For MPESA send in your contributions to Paybill number <strong>531300</strong> and account number MFARM</strong>
   </div><!-- / -->                 

</div>
</div>
</div>            
<!-- END OF CONTENT -->