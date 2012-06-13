<script type="text/javascript" src="<?=base_url();?>media/site/js/vtip.js"></script>
<script type="text/javascript" src="<?=base_url();?>media/site/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="<?=base_url();?>media/site/js/filterable.pack.js"></script>
<script type="text/javascript" src="<?=base_url();?>media/site/js/jquery.colorbox.js"></script>
<script type="text/javascript" src="<?=base_url();?>media/site/js/ddaccordion.js"></script>
<script type="text/javascript" src="<?=base_url();?>media/site/js/faq-functions.js" ></script>
<script type="text/javascript"> 
	$(document).ready(function() {
		//Colorbox Setting
		$("a[rel='portfolio']").colorbox({transition:"fade"});	
		
		//Sliding Door Setting
		$('.pf-image').hover(
		function () {
			value = $(this).find('img').outerHeight() * -1;
			$(this).find('img').stop().animate({bottom: value} ,{duration:1300, easing: 'easeOutBounce'});			
		},
		function () {
			$(this).find('img').stop().animate({bottom:0});		
		});	
		
		//Tab Jquery
		$(".tab_content").hide(); 
		$("ul.tabs li:first").addClass("active").show(); 
		$(".tab_content:first").show(); 
		$("ul.tabs li").click(function() {
			$("ul.tabs li").removeClass("active");
			$(this).addClass("active"); 
			$(".tab_content").hide(); 
			var activeTab = $(this).find("a").attr("href"); 
			$(activeTab).fadeIn(); 
			return false;
		});
});
</script>
<div class="maincontent">

	<div class="col-1">                 
        
        <!-- begin of portfolio list -->
        <ul id="portfolio-list">
            <li class="others"><!-- portfolio 1 --> 	
                <div class="pf-image">
                    <img src="<?=base_url();?>media/img/portfolio-thumb/pf-thumb1.jpg" alt="" title="" />
                    <div class="caption">
                    	<span class="header">Angela</span>
                        <p>Angela supports m-Farm with monitoring and evaluation. She has been involved in corporate outreach to engage businesses in dialogue on sustainability at the World Wildlife Fund (Washington, DC,USA). She also has experience working with infoDev, a global development financing program, housed by the World Bank. Angela studied international environment and development issues at Georgetown University (USA). She is conducting research on a Fulbright fellowship in Kenya until August 2011.</p>
                        <!-- <a class="fullscreen-img" href="#" rel="portfolio" title="Mfarm-Angela-Crandall">#</a> -->
                    </div>
                </div>
            </li>
            
            
            <li class="others"><!-- portfolio 5 -->            	
                <div class="pf-image">
                    <img src="<?=base_url();?>media/img/portfolio-thumb/pf-thumb5.jpg" alt="" title="" />
                    <div class="caption">
                    	<span class="header">Isaak</span>
                        <p>A “full-stack programmer” a generalist, someone who can create a non-trivial application by themselves. Has developed broad skills also tends to develop a good mental model of how different layers of systems behave.</p>
                        <!-- <a class="fullscreen-img" href="#" rel="portfolio" title="Mfarm-Isaak-Mogetutu">#</a>                                                   -->
                    </div>
                </div>
            </li>

            
            <li class="founders"><!-- portfolio 3 -->            	
                <div class="pf-image">
                    <img src="<?=base_url();?>media/img/portfolio-thumb/pf-thumb7.jpg" alt="" title="" />
                    <div class="caption">
                    	<span class="header">SusanEve</span>
                        <p>Susaneve is a mobile developer and research junkie.She aspires to pour her entrepreneurial spirit into researching and launching mobile solutions for emerging economies.</p>
                        <!-- <a class="fullscreen-img" href="#" rel="portfolio" title="Mfarm-SusanEve-Oguya">#</a>                                                   -->
                    </div>
                </div>
            </li>
            
            <li class="others"><!-- portfolio 4 -->            	
                <div class="pf-image">
                    <img src="<?=base_url();?>media/img/portfolio-thumb/pf-thumb4.jpg" alt="" title="" />
                    <div class="caption">
                    	<span class="header">Kresten</span>
                        <p>Kresten has extensive experience in online media space. He successfully built the Australian sports data production company-Centrebet's online presence in Scandinavian market. He founded a sports data collection company Betgenius in 2003, that got acquired by a UK company. He is the majority shareholder in a sports betting company Danbook and also in Denmark's largest football website bold.dk. He launched HumanIPO a social investment platform that aims to empower entrepreneurship.</p>
                        <!-- <a class="fullscreen-img" href="#" rel="portfolio" title="Mfarm-Kresten-Buch">#</a>                                                   -->
                    </div>
                </div>
            </li>


			<li class="founders"><!-- portfolio 2 -->           	
                <div class="pf-image">
                    <img src="<?=base_url();?>media/img/portfolio-thumb/pf-thumb2.jpg" alt="" title="" />
                    <div class="caption">
                    	<span class="header">Jamila</span>
                        <p>Jamila Abass is a passionate and adept web and mobile applications developer.She strives to empower people at the bottom of pyramid, especially women, with the knowledge to unleash their potential and drive growth in the East African IT sector.</p>
                        <!-- <a class="fullscreen-img" href="#" rel="portfolio" title="Mfarm-Jamila-Abass">#</a>                                                   -->
                    </div>
                </div>
            </li>
            
            <li class="founders"><!-- portfolio 6 -->             	
                <div class="pf-image">
                    <img src="<?=base_url();?>media/img/portfolio-thumb/pf-thumb6.jpg" alt="" title="" />
                    <div class="caption">
                    	<span class="header">Linda</span>
                        <p>Active in product development and marketing from a school for business and IT- strathmore university, to getting into startup environs, Linda has proved that startups can become successful businesses. Leading a student enterprise program that natures their entrepreneurial skills, this has led to her vision in making Kenya a food secure country on sustainable basis through entrepreneurship.</p>
                        <!-- <a class="fullscreen-img" href="#" rel="portfolio" title="Mfarm-Linda-Kwamboka">#</a>                                                   -->
                    </div>
                </div>
            </li>
            <li class="others"><!-- portfolio 7 -->            	
				<div class="pf-image">
                    <img src="<?=base_url();?>media/img/portfolio-thumb/pf-thumb3.jpg" alt="" title="" />
                    <div class="caption">
                    	<span class="header">Jessica</span>
                        <p>Jessica is a Researcher and Mobile Technology Evangelist,Founder of Mobile Boot Camp Kenya, Co-founder of AkiraChix and a Bass guitarist in Nairobi, Kenya. She was named one of the top 40 women under 40 years in Kenya’s business scene by Business Daily on 2009.She is the Manager at iHub – Nairobi’s Tech Innovation Hub.Jessica Colaço is passionate about Mobile, Data Visualization in Research, Innovation, Entrepreneurship and Mentorship.</p>
                        <!-- <a class="fullscreen-img" href="#" rel="portfolio" title="Mfarm-Jessica-Colaço">#</a>                                                   -->
                    </div>
                </div>
            </li>
            
            <li class="others"><!-- portfolio 8 -->            	
                <div class="pf-image">
                    <img src="<?=base_url();?>media/img/portfolio-thumb/pf-thumb8.jpg" alt="" title="" />
                    <div class="caption">
                    	<span class="header">Simon</span>
                        <p>Simon Stumpf works as a Senior Change Manager for Ashoka's Rural Innovation and Farming project based in Nairobi, Kenya. He graduated from Yale University with degrees in Anthropology and African Studies. Before joining Ashoka, Simon developed and led a vocational skills training program for street children in Mombasa, Kenya, worked as a National Organizer for Global Justice in Washington, DC, and helped develop a social enterprise in northeastern Laos.</p>
                        <!-- <a class="fullscreen-img" href="#" rel="portfolio" title="Mfarm-Simon">#</a>                                                   -->
                    </div>
                </div>
            </li>
            
            <li class="others"><!-- portfolio 9 -->             	
                <div class="pf-image">
                    <img src="<?=base_url();?>media/img/portfolio-thumb/pf-thumb9.jpg" alt="" title="" />
                    <div class="caption">
                    	<span class="header">Melvin</span>
                        <p>Melvin is one of the upcoming young techies who recently came out of the Akirachix IT training program. He's a dedicated student aspiring to be a full fledged software developer in the near future. He's M-Farm's content manager assuring quality of every detail and piece of any data coming to the system.</p>
                        <!-- <a class="fullscreen-img" href="#" rel="portfolio" title="Mfarm-Melvin-Marende">#</a>                                                   -->
                    </div>
                </div>
            </li>
        </ul>
        <!-- end of portfolio list -->
        
    </div>                     

</div>
</div>            
<!-- END OF CONTENT -->