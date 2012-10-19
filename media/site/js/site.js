$(document).ready(function(){    
    //Flickr Jquery Setting
    <!--
    $('#cbox').jflickrfeed({
        limit: 14,
        qstrings: {
            id: '69259295@N05'
        },
        itemTemplate: '<li>'+
                        '<a rel="colorbox" href="{{image}}" title="{{title}}">' +
                            '<img src="{{image_s}}" alt="{{title}}" />' +
                        '</a>' +
                      '</li>'
    }, function(data) {
        $('#cbox a').colorbox();
    });
    // -->
    
    //Colorbox Setting
    $("a[rel='portfolio']").colorbox({transition:"fade"});
    
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
    
    //Twitter Jquery Setting
    $("#twitter").getTwitter({
        userName: "mfarm_ke",
        numTweets: 3,
        loaderText: "Loading tweets...",
        slideIn: true,
        slideDuration: 750
    });

});
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1&appId=265214620168679";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));