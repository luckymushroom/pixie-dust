/**
 * jQuery.ScrollTo - Easy element scrolling using jQuery.
 * Copyright (c) 2007-2009 Ariel Flesler - aflesler(at)gmail(dot)com | http://flesler.blogspot.com
 * Dual licensed under MIT and GPL.
 * Date: 5/25/2009
 * @author Ariel Flesler
 * @version 1.4.2
 *
 * http://flesler.blogspot.com/2007/10/jqueryscrollto.html
 */
(function(d){var k=d.scrollTo=function(a,i,e){d(window).scrollTo(a,i,e)};k.defaults={axis:'xy',duration:parseFloat(d.fn.jquery)>=1.3?0:1};k.window=function(a){return d(window)._scrollable()};d.fn._scrollable=function(){return this.map(function(){var a=this,i=!a.nodeName||d.inArray(a.nodeName.toLowerCase(),['iframe','#document','html','body'])!=-1;if(!i)return a;var e=(a.contentWindow||a).document||a.ownerDocument||a;return d.browser.safari||e.compatMode=='BackCompat'?e.body:e.documentElement})};d.fn.scrollTo=function(n,j,b){if(typeof j=='object'){b=j;j=0}if(typeof b=='function')b={onAfter:b};if(n=='max')n=9e9;b=d.extend({},k.defaults,b);j=j||b.speed||b.duration;b.queue=b.queue&&b.axis.length>1;if(b.queue)j/=2;b.offset=p(b.offset);b.over=p(b.over);return this._scrollable().each(function(){var q=this,r=d(q),f=n,s,g={},u=r.is('html,body');switch(typeof f){case'number':case'string':if(/^([+-]=)?\d+(\.\d+)?(px|%)?$/.test(f)){f=p(f);break}f=d(f,this);case'object':if(f.is||f.style)s=(f=d(f)).offset()}d.each(b.axis.split(''),function(a,i){var e=i=='x'?'Left':'Top',h=e.toLowerCase(),c='scroll'+e,l=q[c],m=k.max(q,i);if(s){g[c]=s[h]+(u?0:l-r.offset()[h]);if(b.margin){g[c]-=parseInt(f.css('margin'+e))||0;g[c]-=parseInt(f.css('border'+e+'Width'))||0}g[c]+=b.offset[h]||0;if(b.over[h])g[c]+=f[i=='x'?'width':'height']()*b.over[h]}else{var o=f[h];g[c]=o.slice&&o.slice(-1)=='%'?parseFloat(o)/100*m:o}if(/^\d+$/.test(g[c]))g[c]=g[c]<=0?0:Math.min(g[c],m);if(!a&&b.queue){if(l!=g[c])t(b.onAfterFirst);delete g[c]}});t(b.onAfter);function t(a){r.animate(g,j,b.easing,a&&function(){a.call(this,n,b)})}}).end()};k.max=function(a,i){var e=i=='x'?'Width':'Height',h='scroll'+e;if(!d(a).is('html,body'))return a[h]-d(a)[e.toLowerCase()]();var c='client'+e,l=a.ownerDocument.documentElement,m=a.ownerDocument.body;return Math.max(l[h],m[h])-Math.min(l[c],m[c])};function p(a){return typeof a=='object'?a:{top:a,left:a}}})(jQuery);


(function($){

	$(function() {

		/* toggle links */
		$('.toggle-link').click(function(e) {

			var target = $($(this).attr('href')).toggleClass('hidden');
			$.scrollTo(target);

			e.preventDefault();

		});

		// Delivery Date popup
		$('input#radio-yes').click(function(){
			$('#delivery-date').removeClass('hidden').fadeIn();
		});
		if ($('input#radio-yes').is(':checked'))
		{
			$('#delivery-date').removeClass('hidden').fadeIn();
		}
		if ($('input#radio-no').is(':checked'))
		{
			$('#delivery-date').addClass('hidden');
		}
		$('input#radio-no').click(function(){
			$('div#delivery-date').addClass('hidden').fadeOut();
		});
		// Date Picker
		window.prettyPrint && prettyPrint();
		$('#dp').datepicker({
			format: 'yyyy-mm-dd'
		});
		$('#dp1').datepicker({
			format: 'yyyy-mm-dd'
		});
		// Pop Over
		$('input').hover(function(){ $(this).popover('show')});
		$('img').hover(function(){$(this).popover('show')});

		// Link Preorder items to modal form
		$("a.preorder").click(function(){
			var id = $(this).attr("id");
			$('#xpost_id').val(id);
		});


		// Toggle hello bar
		if ($.cookie('hellobar-container') == 'hidden')
		{
			$("#hellobar-container").attr('class', $.cookie('hellobar-container'));
			$("#hellobar-open").attr('class', $.cookie('hellobar-open'));
		}
		$('#hellobar-close').click(function(){
			$('#hellobar-container').toggleClass('hidden',true);
			$('#hellobar-open').toggleClass('hidden',false);
			$.cookie('hellobar-container', $("#hellobar-container").attr('class'), {expires: 1, path: '/'});
			$.cookie('hellobar-open', $("#hellobar-open").attr('class'), {expires: 1, path: '/'});
		});
		$('#hellobar-open').click(function(){
			$('#hellobar-container').toggleClass('hidden',false);
			$('#hellobar-open').toggleClass('hidden',true);
			$.cookie('hellobar-container', $("#hellobar-container").attr('class'), {expires: 1, path: '/'});
			$.cookie('hellobar-open', $("#hellobar-open").attr('class'), {expires: 1, path: '/'});
		});

		// Check or uncheck all checkboxes
	    $('.check_all').click(function() {
	        $(this).parents('form').find('input:checkbox').attr('checked', $(this).is(':checked'));
	    });

	    $('.delete').click(function(){
	        if(confirm('Are you sure delete the selected item ?'))
	        {
	            return true;
	        } else {
	            return false;
	        }
	    });

	    // $('#reportrange').daterangepicker({
	    // 	ranges: {
	    // 		'Today': ['today', 'today'],
	    // 		'Yesterday': ['yesterday', 'yesterday'],
	    // 		'Last 7 Days': [Date.today().add({ days: -6 }), 'today'],
	    //         'Last 30 Days': [Date.today().add({ days: -29 }), 'today'],
	    //         'This Month': [Date.today().moveToFirstDayOfMonth(), Date.today().moveToLastDayOfMonth()],
	    //         'Last Month': [Date.today().moveToFirstDayOfMonth().add({ months: -1 }), Date.today().moveToFirstDayOfMonth().add({ days: -1 })]
		   //      }
		   //  },
		   //  function(start, end) {
		   //  	$('#reportrange span').html(start.toString('MMMM d, yyyy') + ' - ' + end.toString('MMMM d, yyyy'));
	    //         $.post(
				 //       'http://mogetutu.dev/mfarm-web/prices/index/',
				 //       { startdate: start.toString('yyyy-MM-dd'), enddate: end.toString('yyyy-MM-dd') }
				 //    );

		   //  }
	    // );
	});

})(this.jQuery);