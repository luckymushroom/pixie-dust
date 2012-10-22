/**
 * jQuery.ScrollTo - Easy element scrolling using jQuery.
 * Copyright (c) 2007-2009 Ariel Flesler - aflesler(at)gmail(dot)com | http://flesler.blogspot.com
 * Dual licensed under MIT and GPL.
 * Date: 5/25/2009
 * @author Ariel Flesler
 * @version 1.4.2
 *
 * http://flesler.blogspot.com/2007/10/jqueryscrollto.html
 */(function(e){function n(e){return typeof e=="object"?e:{top:e,left:e}}var t=e.scrollTo=function(t,n,r){e(window).scrollTo(t,n,r)};t.defaults={axis:"xy",duration:parseFloat(e.fn.jquery)>=1.3?0:1};t.window=function(t){return e(window)._scrollable()};e.fn._scrollable=function(){return this.map(function(){var t=this,n=!t.nodeName||e.inArray(t.nodeName.toLowerCase(),["iframe","#document","html","body"])!=-1;if(!n)return t;var r=(t.contentWindow||t).document||t.ownerDocument||t;return e.browser.safari||r.compatMode=="BackCompat"?r.body:r.documentElement})};e.fn.scrollTo=function(r,i,s){if(typeof i=="object"){s=i;i=0}typeof s=="function"&&(s={onAfter:s});r=="max"&&(r=9e9);s=e.extend({},t.defaults,s);i=i||s.speed||s.duration;s.queue=s.queue&&s.axis.length>1;s.queue&&(i/=2);s.offset=n(s.offset);s.over=n(s.over);return this._scrollable().each(function(){function h(e){u.animate(l,i,s.easing,e&&function(){e.call(this,r,s)})}var o=this,u=e(o),a=r,f,l={},c=u.is("html,body");switch(typeof a){case"number":case"string":if(/^([+-]=)?\d+(\.\d+)?(px|%)?$/.test(a)){a=n(a);break}a=e(a,this);case"object":if(a.is||a.style)f=(a=e(a)).offset()}e.each(s.axis.split(""),function(e,n){var r=n=="x"?"Left":"Top",i=r.toLowerCase(),p="scroll"+r,d=o[p],v=t.max(o,n);if(f){l[p]=f[i]+(c?0:d-u.offset()[i]);if(s.margin){l[p]-=parseInt(a.css("margin"+r))||0;l[p]-=parseInt(a.css("border"+r+"Width"))||0}l[p]+=s.offset[i]||0;s.over[i]&&(l[p]+=a[n=="x"?"width":"height"]()*s.over[i])}else{var m=a[i];l[p]=m.slice&&m.slice(-1)=="%"?parseFloat(m)/100*v:m}/^\d+$/.test(l[p])&&(l[p]=l[p]<=0?0:Math.min(l[p],v));if(!e&&s.queue){d!=l[p]&&h(s.onAfterFirst);delete l[p]}});h(s.onAfter)}).end()};t.max=function(t,n){var r=n=="x"?"Width":"Height",i="scroll"+r;if(!e(t).is("html,body"))return t[i]-e(t)[r.toLowerCase()]();var s="client"+r,o=t.ownerDocument.documentElement,u=t.ownerDocument.body;return Math.max(o[i],u[i])-Math.min(o[s],u[s])}})(jQuery);(function(e){e(function(){e(".toggle-link").click(function(t){var n=e(e(this).attr("href")).toggleClass("hidden");e.scrollTo(n);t.preventDefault()});e("input#radio-yes").click(function(){e("#delivery-date").removeClass("hidden").fadeIn()});e("input#radio-yes").is(":checked")&&e("#delivery-date").removeClass("hidden").fadeIn();e("input#radio-no").is(":checked")&&e("#delivery-date").addClass("hidden");e("input#radio-no").click(function(){e("div#delivery-date").addClass("hidden").fadeOut()});window.prettyPrint&&prettyPrint();e("#dp").datepicker({format:"yyyy-mm-dd"});e("#dp1").datepicker({format:"yyyy-mm-dd"});e("input").hover(function(){e(this).popover("show")});e("img").hover(function(){e(this).popover("show")});e("a.preorder").click(function(){var t=e(this).attr("id");e("#xpost_id").val(t)});if(e.cookie("hellobar-container")=="hidden"){e("#hellobar-container").attr("class",e.cookie("hellobar-container"));e("#hellobar-open").attr("class",e.cookie("hellobar-open"))}e("#hellobar-close").click(function(){e("#hellobar-container").toggleClass("hidden",!0);e("#hellobar-open").toggleClass("hidden",!1);e.cookie("hellobar-container",e("#hellobar-container").attr("class"),{expires:1,path:"/"});e.cookie("hellobar-open",e("#hellobar-open").attr("class"),{expires:1,path:"/"})});e("#hellobar-open").click(function(){e("#hellobar-container").toggleClass("hidden",!1);e("#hellobar-open").toggleClass("hidden",!0);e.cookie("hellobar-container",e("#hellobar-container").attr("class"),{expires:1,path:"/"});e.cookie("hellobar-open",e("#hellobar-open").attr("class"),{expires:1,path:"/"})});e(".check_all").click(function(){e(this).parents("form").find("input:checkbox").attr("checked",e(this).is(":checked"))});e(".delete").click(function(){return confirm("Are you sure delete the selected item ?")?!0:!1})})})(this.jQuery);