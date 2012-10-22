/*!
 * jQuery Cycle Plugin (with Transition Definitions)
 * Examples and documentation at: http://jquery.malsup.com/cycle/
 * Copyright (c) 2007-2010 M. Alsup
 * Version: 2.9999 (13-NOV-2011)
 * Dual licensed under the MIT and GPL licenses.
 * http://jquery.malsup.com/license.html
 * Requires: jQuery v1.3.2 or later
 */(function(e,t){function r(t){e.fn.cycle.debug&&i(t)}function i(){window.console&&console.log&&console.log("[cycle] "+Array.prototype.join.call(arguments," "))}function s(t,n,r){var i=e(t).data("cycle.opts"),s=!!t.cyclePause;s&&i.paused?i.paused(t,i,n,r):!s&&i.resumed&&i.resumed(t,i,n,r)}function o(n,r,o){function l(t,n,r){if(!t&&n===!0){var s=e(r).data("cycle.opts");if(!s){i("options not found, can not resume");return!1}if(r.cycleTimeout){clearTimeout(r.cycleTimeout);r.cycleTimeout=0}d(s.elements,s,1,!s.backwards)}}n.cycleStop==t&&(n.cycleStop=0);if(r===t||r===null)r={};if(r.constructor==String){switch(r){case"destroy":case"stop":var u=e(n).data("cycle.opts");if(!u)return!1;n.cycleStop++;n.cycleTimeout&&clearTimeout(n.cycleTimeout);n.cycleTimeout=0;u.elements&&e(u.elements).stop();e(n).removeData("cycle.opts");r=="destroy"&&a(u);return!1;case"toggle":n.cyclePause=n.cyclePause===1?0:1;l(n.cyclePause,o,n);s(n);return!1;case"pause":n.cyclePause=1;s(n);return!1;case"resume":n.cyclePause=0;l(!1,o,n);s(n);return!1;case"prev":case"next":var u=e(n).data("cycle.opts");if(!u){i('options not found, "prev/next" ignored');return!1}e.fn.cycle[r](u);return!1;default:r={fx:r}}return r}if(r.constructor==Number){var f=r;r=e(n).data("cycle.opts");if(!r){i("options not found, can not advance slide");return!1}if(f<0||f>=r.elements.length){i("invalid slide index: "+f);return!1}r.nextSlide=f;if(n.cycleTimeout){clearTimeout(n.cycleTimeout);n.cycleTimeout=0}typeof o=="string"&&(r.oneTimeFx=o);d(r.elements,r,1,f>=r.currSlide);return!1}return r}function u(t,n){if(!e.support.opacity&&n.cleartype&&t.style.filter)try{t.style.removeAttribute("filter")}catch(r){}}function a(t){t.next&&e(t.next).unbind(t.prevNextEvent);t.prev&&e(t.prev).unbind(t.prevNextEvent);(t.pager||t.pagerAnchorBuilder)&&e.each(t.pagerAnchors||[],function(){this.unbind().remove()});t.pagerAnchors=null;t.destroy&&t.destroy(t)}function f(n,r,o,a,f){var p,v=e.extend({},e.fn.cycle.defaults,a||{},e.metadata?n.metadata():e.meta?n.data():{}),b=e.isFunction(n.data)?n.data(v.metaAttr):null;b&&(v=e.extend(v,b));v.autostop&&(v.countdown=v.autostopCount||o.length);var w=n[0];n.data("cycle.opts",v);v.$cont=n;v.stopCount=w.cycleStop;v.elements=o;v.before=v.before?[v.before]:[];v.after=v.after?[v.after]:[];!e.support.opacity&&v.cleartype&&v.after.push(function(){u(this,v)});v.continuous&&v.after.push(function(){d(o,v,0,!v.backwards)});l(v);!e.support.opacity&&v.cleartype&&!v.cleartypeNoBg&&y(r);n.css("position")=="static"&&n.css("position","relative");v.width&&n.width(v.width);v.height&&v.height!="auto"&&n.height(v.height);if(v.startingSlide!=t){v.startingSlide=parseInt(v.startingSlide,10);v.startingSlide>=o.length||v.startSlide<0?v.startingSlide=0:p=!0}else v.backwards?v.startingSlide=o.length-1:v.startingSlide=0;if(v.random){v.randomMap=[];for(var E=0;E<o.length;E++)v.randomMap.push(E);v.randomMap.sort(function(e,t){return Math.random()-.5});if(p)for(var S=0;S<o.length;S++)v.startingSlide==v.randomMap[S]&&(v.randomIndex=S);else{v.randomIndex=1;v.startingSlide=v.randomMap[1]}}else v.startingSlide>=o.length&&(v.startingSlide=0);v.currSlide=v.startingSlide||0;var x=v.startingSlide;r.css({position:"absolute",top:0,left:0}).hide().each(function(t){var n;v.backwards?n=x?t<=x?o.length+(t-x):x-t:o.length-t:n=x?t>=x?o.length-(t-x):x-t:o.length-t;e(this).css("z-index",n)});e(o[x]).css("opacity",1).show();u(o[x],v);if(v.fit)if(!v.aspect){v.width&&r.width(v.width);v.height&&v.height!="auto"&&r.height(v.height)}else r.each(function(){var t=e(this),n=v.aspect===!0?t.width()/t.height():v.aspect;if(v.width&&t.width()!=v.width){t.width(v.width);t.height(v.width/n)}if(v.height&&t.height()<v.height){t.height(v.height);t.width(v.height*n)}});v.center&&(!v.fit||v.aspect)&&r.each(function(){var t=e(this);t.css({"margin-left":v.width?(v.width-t.width())/2+"px":0,"margin-top":v.height?(v.height-t.height())/2+"px":0})});v.center&&!v.fit&&!v.slideResize&&r.each(function(){var t=e(this);t.css({"margin-left":v.width?(v.width-t.width())/2+"px":0,"margin-top":v.height?(v.height-t.height())/2+"px":0})});var T=v.containerResize&&!n.innerHeight();if(T){var N=0,C=0;for(var k=0;k<o.length;k++){var L=e(o[k]),A=L[0],O=L.outerWidth(),M=L.outerHeight();O||(O=A.offsetWidth||A.width||L.attr("width"));M||(M=A.offsetHeight||A.height||L.attr("height"));N=O>N?O:N;C=M>C?M:C}N>0&&C>0&&n.css({width:N+"px",height:C+"px"})}var _=!1;v.pause&&n.hover(function(){_=!0;this.cyclePause++;s(w,!0)},function(){_&&this.cyclePause--;s(w,!0)});if(c(v)===!1)return!1;var D=!1;a.requeueAttempts=a.requeueAttempts||0;r.each(function(){var t=e(this);this.cycleH=v.fit&&v.height?v.height:t.height()||this.offsetHeight||this.height||t.attr("height")||0;this.cycleW=v.fit&&v.width?v.width:t.width()||this.offsetWidth||this.width||t.attr("width")||0;if(t.is("img")){var n=e.browser.msie&&this.cycleW==28&&this.cycleH==30&&!this.complete,r=e.browser.mozilla&&this.cycleW==34&&this.cycleH==19&&!this.complete,s=e.browser.opera&&(this.cycleW==42&&this.cycleH==19||this.cycleW==37&&this.cycleH==17)&&!this.complete,o=this.cycleH==0&&this.cycleW==0&&!this.complete;if(n||r||s||o){if(f.s&&v.requeueOnImageNotLoaded&&++a.requeueAttempts<100){i(a.requeueAttempts," - img slide not loaded, requeuing slideshow: ",this.src,this.cycleW,this.cycleH);setTimeout(function(){e(f.s,f.c).cycle(a)},v.requeueTimeout);D=!0;return!1}i("could not determine size of image: "+this.src,this.cycleW,this.cycleH)}}return!0});if(D)return!1;v.cssBefore=v.cssBefore||{};v.cssAfter=v.cssAfter||{};v.cssFirst=v.cssFirst||{};v.animIn=v.animIn||{};v.animOut=v.animOut||{};r.not(":eq("+x+")").css(v.cssBefore);e(r[x]).css(v.cssFirst);if(v.timeout){v.timeout=parseInt(v.timeout,10);v.speed.constructor==String&&(v.speed=e.fx.speeds[v.speed]||parseInt(v.speed,10));v.sync||(v.speed=v.speed/2);var P=v.fx=="none"?0:v.fx=="shuffle"?500:250;while(v.timeout-v.speed<P)v.timeout+=v.speed}v.easing&&(v.easeIn=v.easeOut=v.easing);v.speedIn||(v.speedIn=v.speed);v.speedOut||(v.speedOut=v.speed);v.slideCount=o.length;v.currSlide=v.lastSlide=x;if(v.random){++v.randomIndex==o.length&&(v.randomIndex=0);v.nextSlide=v.randomMap[v.randomIndex]}else v.backwards?v.nextSlide=v.startingSlide==0?o.length-1:v.startingSlide-1:v.nextSlide=v.startingSlide>=o.length-1?0:v.startingSlide+1;if(!v.multiFx){var H=e.fn.cycle.transitions[v.fx];if(e.isFunction(H))H(n,r,v);else if(v.fx!="custom"&&!v.multiFx){i("unknown transition: "+v.fx,"; slideshow terminating");return!1}}var B=r[x];if(!v.skipInitializationCallbacks){v.before.length&&v.before[0].apply(B,[B,B,v,!0]);v.after.length&&v.after[0].apply(B,[B,B,v,!0])}v.next&&e(v.next).bind(v.prevNextEvent,function(){return m(v,1)});v.prev&&e(v.prev).bind(v.prevNextEvent,function(){return m(v,0)});(v.pager||v.pagerAnchorBuilder)&&g(o,v);h(v,o);return v}function l(t){t.original={before:[],after:[]};t.original.cssBefore=e.extend({},t.cssBefore);t.original.cssAfter=e.extend({},t.cssAfter);t.original.animIn=e.extend({},t.animIn);t.original.animOut=e.extend({},t.animOut);e.each(t.before,function(){t.original.before.push(this)});e.each(t.after,function(){t.original.after.push(this)})}function c(t){var n,s,o=e.fn.cycle.transitions;if(t.fx.indexOf(",")>0){t.multiFx=!0;t.fxs=t.fx.replace(/\s*/g,"").split(",");for(n=0;n<t.fxs.length;n++){var u=t.fxs[n];s=o[u];if(!s||!o.hasOwnProperty(u)||!e.isFunction(s)){i("discarding unknown transition: ",u);t.fxs.splice(n,1);n--}}if(!t.fxs.length){i("No valid transitions named; slideshow terminating.");return!1}}else if(t.fx=="all"){t.multiFx=!0;t.fxs=[];for(p in o){s=o[p];o.hasOwnProperty(p)&&e.isFunction(s)&&t.fxs.push(p)}}if(t.multiFx&&t.randomizeEffects){var a=Math.floor(Math.random()*20)+30;for(n=0;n<a;n++){var f=Math.floor(Math.random()*t.fxs.length);t.fxs.push(t.fxs.splice(f,1)[0])}r("randomized fx sequence: ",t.fxs)}return!0}function h(t,n){t.addSlide=function(r,i){var s=e(r),o=s[0];t.autostopCount||t.countdown++;n[i?"unshift":"push"](o);t.els&&t.els[i?"unshift":"push"](o);t.slideCount=n.length;if(t.random){t.randomMap.push(t.slideCount-1);t.randomMap.sort(function(e,t){return Math.random()-.5})}s.css("position","absolute");s[i?"prependTo":"appendTo"](t.$cont);if(i){t.currSlide++;t.nextSlide++}!e.support.opacity&&t.cleartype&&!t.cleartypeNoBg&&y(s);t.fit&&t.width&&s.width(t.width);t.fit&&t.height&&t.height!="auto"&&s.height(t.height);o.cycleH=t.fit&&t.height?t.height:s.height();o.cycleW=t.fit&&t.width?t.width:s.width();s.css(t.cssBefore);(t.pager||t.pagerAnchorBuilder)&&e.fn.cycle.createPagerAnchor(n.length-1,o,e(t.pager),n,t);e.isFunction(t.onAddSlide)?t.onAddSlide(s):s.hide()}}function d(n,i,s,o){function m(){var e=0,t=i.timeout;if(i.timeout&&!i.continuous){e=v(n[i.currSlide],n[i.nextSlide],i,o);i.fx=="shuffle"&&(e-=i.speedOut)}else i.continuous&&u.cyclePause&&(e=10);e>0&&(u.cycleTimeout=setTimeout(function(){d(n,i,0,!i.backwards)},e))}if(s&&i.busy&&i.manualTrump){r("manualTrump in go(), stopping active transition");e(n).stop(!0,!0);i.busy=0}if(i.busy){r("transition active, ignoring new tx request");return}var u=i.$cont[0],a=n[i.currSlide],f=n[i.nextSlide];if(u.cycleStop!=i.stopCount||u.cycleTimeout===0&&!s)return;if(!s&&!u.cyclePause&&!i.bounce&&(i.autostop&&--i.countdown<=0||i.nowrap&&!i.random&&i.nextSlide<i.currSlide)){i.end&&i.end(i);return}var l=!1;if((s||!u.cyclePause)&&i.nextSlide!=i.currSlide){l=!0;var c=i.fx;a.cycleH=a.cycleH||e(a).height();a.cycleW=a.cycleW||e(a).width();f.cycleH=f.cycleH||e(f).height();f.cycleW=f.cycleW||e(f).width();if(i.multiFx){o&&(i.lastFx==t||++i.lastFx>=i.fxs.length)?i.lastFx=0:!o&&(i.lastFx==t||--i.lastFx<0)&&(i.lastFx=i.fxs.length-1);c=i.fxs[i.lastFx]}if(i.oneTimeFx){c=i.oneTimeFx;i.oneTimeFx=null}e.fn.cycle.resetState(i,c);i.before.length&&e.each(i.before,function(e,t){if(u.cycleStop!=i.stopCount)return;t.apply(f,[a,f,i,o])});var h=function(){i.busy=0;e.each(i.after,function(e,t){if(u.cycleStop!=i.stopCount)return;t.apply(f,[a,f,i,o])});u.cycleStop||m()};r("tx firing("+c+"); currSlide: "+i.currSlide+"; nextSlide: "+i.nextSlide);i.busy=1;i.fxFn?i.fxFn(a,f,i,h,o,s&&i.fastOnEvent):e.isFunction(e.fn.cycle[i.fx])?e.fn.cycle[i.fx](a,f,i,h,o,s&&i.fastOnEvent):e.fn.cycle.custom(a,f,i,h,o,s&&i.fastOnEvent)}else m();if(l||i.nextSlide==i.currSlide){i.lastSlide=i.currSlide;if(i.random){i.currSlide=i.nextSlide;if(++i.randomIndex==n.length){i.randomIndex=0;i.randomMap.sort(function(e,t){return Math.random()-.5})}i.nextSlide=i.randomMap[i.randomIndex];i.nextSlide==i.currSlide&&(i.nextSlide=i.currSlide==i.slideCount-1?0:i.currSlide+1)}else if(i.backwards){var p=i.nextSlide-1<0;if(p&&i.bounce){i.backwards=!i.backwards;i.nextSlide=1;i.currSlide=0}else{i.nextSlide=p?n.length-1:i.nextSlide-1;i.currSlide=p?0:i.nextSlide+1}}else{var p=i.nextSlide+1==n.length;if(p&&i.bounce){i.backwards=!i.backwards;i.nextSlide=n.length-2;i.currSlide=n.length-1}else{i.nextSlide=p?0:i.nextSlide+1;i.currSlide=p?n.length-1:i.nextSlide-1}}}l&&i.pager&&i.updateActivePagerLink(i.pager,i.currSlide,i.activePagerClass)}function v(e,t,n,i){if(n.timeoutFn){var s=n.timeoutFn.call(e,e,t,n,i);while(n.fx!="none"&&s-n.speed<250)s+=n.speed;r("calculated timeout: "+s+"; speed: "+n.speed);if(s!==!1)return s}return n.timeout}function m(t,n){var r=n?1:-1,i=t.elements,s=t.$cont[0],o=s.cycleTimeout;if(o){clearTimeout(o);s.cycleTimeout=0}if(t.random&&r<0){t.randomIndex--;--t.randomIndex==-2?t.randomIndex=i.length-2:t.randomIndex==-1&&(t.randomIndex=i.length-1);t.nextSlide=t.randomMap[t.randomIndex]}else if(t.random)t.nextSlide=t.randomMap[t.randomIndex];else{t.nextSlide=t.currSlide+r;if(t.nextSlide<0){if(t.nowrap)return!1;t.nextSlide=i.length-1}else if(t.nextSlide>=i.length){if(t.nowrap)return!1;t.nextSlide=0}}var u=t.onPrevNextEvent||t.prevNextClick;e.isFunction(u)&&u(r>0,t.nextSlide,i[t.nextSlide]);d(i,t,1,n);return!1}function g(t,n){var r=e(n.pager);e.each(t,function(i,s){e.fn.cycle.createPagerAnchor(i,s,r,t,n)});n.updateActivePagerLink(n.pager,n.startingSlide,n.activePagerClass)}function y(t){function n(e){e=parseInt(e,10).toString(16);return e.length<2?"0"+e:e}function i(t){for(;t&&t.nodeName.toLowerCase()!="html";t=t.parentNode){var r=e.css(t,"background-color");if(r&&r.indexOf("rgb")>=0){var i=r.match(/\d+/g);return"#"+n(i[0])+n(i[1])+n(i[2])}if(r&&r!="transparent")return r}return"#ffffff"}r("applying clearType background-color hack");t.each(function(){e(this).css("background-color",i(this))})}var n="2.9999";e.support==t&&(e.support={opacity:!e.browser.msie});e.expr[":"].paused=function(e){return e.cyclePause};e.fn.cycle=function(t,n){var s={s:this.selector,c:this.context};if(this.length===0&&t!="stop"){if(!e.isReady&&s.s){i("DOM not ready, queuing slideshow");e(function(){e(s.s,s.c).cycle(t,n)});return this}i("terminating; zero elements found by selector"+(e.isReady?"":" (DOM not ready)"));return this}return this.each(function(){var u=o(this,t,n);if(u===!1)return;u.updateActivePagerLink=u.updateActivePagerLink||e.fn.cycle.updateActivePagerLink;this.cycleTimeout&&clearTimeout(this.cycleTimeout);this.cycleTimeout=this.cyclePause=0;var a=e(this),l=u.slideExpr?e(u.slideExpr,this):a.children(),c=l.get(),h=f(a,l,c,u,s);if(h===!1)return;if(c.length<2){i("terminating; too few slides: "+c.length);return}var p=h.continuous?10:v(c[h.currSlide],c[h.nextSlide],h,!h.backwards);if(p){p+=h.delay||0;p<10&&(p=10);r("first timeout: "+p);this.cycleTimeout=setTimeout(function(){d(c,h,0,!u.backwards)},p)}})};e.fn.cycle.resetState=function(t,n){n=n||t.fx;t.before=[];t.after=[];t.cssBefore=e.extend({},t.original.cssBefore);t.cssAfter=e.extend({},t.original.cssAfter);t.animIn=e.extend({},t.original.animIn);t.animOut=e.extend({},t.original.animOut);t.fxFn=null;e.each(t.original.before,function(){t.before.push(this)});e.each(t.original.after,function(){t.after.push(this)});var r=e.fn.cycle.transitions[n];e.isFunction(r)&&r(t.$cont,e(t.elements),t)};e.fn.cycle.updateActivePagerLink=function(t,n,r){e(t).each(function(){e(this).children().removeClass(r).eq(n).addClass(r)})};e.fn.cycle.next=function(e){m(e,1)};e.fn.cycle.prev=function(e){m(e,0)};e.fn.cycle.createPagerAnchor=function(t,n,i,o,u){var a;if(e.isFunction(u.pagerAnchorBuilder)){a=u.pagerAnchorBuilder(t,n);r("pagerAnchorBuilder("+t+", el) returned: "+a)}else a='<a href="#">'+(t+1)+"</a>";if(!a)return;var f=e(a);if(f.parents("body").length===0){var l=[];if(i.length>1){i.each(function(){var t=f.clone(!0);e(this).append(t);l.push(t[0])});f=e(l)}else f.appendTo(i)}u.pagerAnchors=u.pagerAnchors||[];u.pagerAnchors.push(f);var c=function(n){n.preventDefault();u.nextSlide=t;var r=u.$cont[0],i=r.cycleTimeout;if(i){clearTimeout(i);r.cycleTimeout=0}var s=u.onPagerEvent||u.pagerClick;e.isFunction(s)&&s(u.nextSlide,o[u.nextSlide]);d(o,u,1,u.currSlide<t)};/mouseenter|mouseover/i.test(u.pagerEvent)?f.hover(c,function(){}):f.bind(u.pagerEvent,c);!/^click/.test(u.pagerEvent)&&!u.allowPagerClickBubble&&f.bind("click.cycle",function(){return!1});var h=u.$cont[0],p=!1;u.pauseOnPagerHover&&f.hover(function(){p=!0;h.cyclePause++;s(h,!0,!0)},function(){p&&h.cyclePause--;s(h,!0,!0)})};e.fn.cycle.hopsFromLast=function(e,t){var n,r=e.lastSlide,i=e.currSlide;t?n=i>r?i-r:e.slideCount-r:n=i<r?r-i:r+e.slideCount-i;return n};e.fn.cycle.commonReset=function(t,n,r,i,s,o){e(r.elements).not(t).hide();typeof r.cssBefore.opacity=="undefined"&&(r.cssBefore.opacity=1);r.cssBefore.display="block";r.slideResize&&i!==!1&&n.cycleW>0&&(r.cssBefore.width=n.cycleW);r.slideResize&&s!==!1&&n.cycleH>0&&(r.cssBefore.height=n.cycleH);r.cssAfter=r.cssAfter||{};r.cssAfter.display="none";e(t).css("zIndex",r.slideCount+(o===!0?1:0));e(n).css("zIndex",r.slideCount+(o===!0?0:1))};e.fn.cycle.custom=function(t,n,r,i,s,o){var u=e(t),a=e(n),f=r.speedIn,l=r.speedOut,c=r.easeIn,h=r.easeOut;a.css(r.cssBefore);if(o){typeof o=="number"?f=l=o:f=l=1;c=h=null}var p=function(){a.animate(r.animIn,f,c,function(){i()})};u.animate(r.animOut,l,h,function(){u.css(r.cssAfter);r.sync||p()});r.sync&&p()};e.fn.cycle.transitions={fade:function(t,n,r){n.not(":eq("+r.currSlide+")").css("opacity",0);r.before.push(function(t,n,r){e.fn.cycle.commonReset(t,n,r);r.cssBefore.opacity=0});r.animIn={opacity:1};r.animOut={opacity:0};r.cssBefore={top:0,left:0}}};e.fn.cycle.ver=function(){return n};e.fn.cycle.defaults={activePagerClass:"activeSlide",after:null,allowPagerClickBubble:!1,animIn:null,animOut:null,aspect:!1,autostop:0,autostopCount:0,backwards:!1,before:null,center:null,cleartype:!e.support.opacity,cleartypeNoBg:!1,containerResize:1,continuous:0,cssAfter:null,cssBefore:null,delay:0,easeIn:null,easeOut:null,easing:null,end:null,fastOnEvent:0,fit:0,fx:"fade",fxFn:null,height:"auto",manualTrump:!0,metaAttr:"cycle",next:null,nowrap:0,onPagerEvent:null,onPrevNextEvent:null,pager:null,pagerAnchorBuilder:null,pagerEvent:"click.cycle",pause:0,pauseOnPagerHover:0,prev:null,prevNextEvent:"click.cycle",random:0,randomizeEffects:1,requeueOnImageNotLoaded:!0,requeueTimeout:250,rev:0,shuffle:null,skipInitializationCallbacks:!1,slideExpr:null,slideResize:1,speed:1e3,speedIn:null,speedOut:null,startingSlide:t,sync:1,timeout:4e3,timeoutFn:null,updateActivePagerLink:null,width:null}})(jQuery);(function(e){e.fn.cycle.transitions.none=function(t,n,r){r.fxFn=function(t,n,r,i){e(n).show();e(t).hide();i()}};e.fn.cycle.transitions.fadeout=function(t,n,r){n.not(":eq("+r.currSlide+")").css({display:"block",opacity:1});r.before.push(function(t,n,r,i,s,o){e(t).css("zIndex",r.slideCount+(!o==1?1:0));e(n).css("zIndex",r.slideCount+(!o==1?0:1))});r.animIn.opacity=1;r.animOut.opacity=0;r.cssBefore.opacity=1;r.cssBefore.display="block";r.cssAfter.zIndex=0};e.fn.cycle.transitions.scrollUp=function(t,n,r){t.css("overflow","hidden");r.before.push(e.fn.cycle.commonReset);var i=t.height();r.cssBefore.top=i;r.cssBefore.left=0;r.cssFirst.top=0;r.animIn.top=0;r.animOut.top=-i};e.fn.cycle.transitions.scrollDown=function(t,n,r){t.css("overflow","hidden");r.before.push(e.fn.cycle.commonReset);var i=t.height();r.cssFirst.top=0;r.cssBefore.top=-i;r.cssBefore.left=0;r.animIn.top=0;r.animOut.top=i};e.fn.cycle.transitions.scrollLeft=function(t,n,r){t.css("overflow","hidden");r.before.push(e.fn.cycle.commonReset);var i=t.width();r.cssFirst.left=0;r.cssBefore.left=i;r.cssBefore.top=0;r.animIn.left=0;r.animOut.left=0-i};e.fn.cycle.transitions.scrollRight=function(t,n,r){t.css("overflow","hidden");r.before.push(e.fn.cycle.commonReset);var i=t.width();r.cssFirst.left=0;r.cssBefore.left=-i;r.cssBefore.top=0;r.animIn.left=0;r.animOut.left=i};e.fn.cycle.transitions.scrollHorz=function(t,n,r){t.css("overflow","hidden").width();r.before.push(function(t,n,r,i){r.rev&&(i=!i);e.fn.cycle.commonReset(t,n,r);r.cssBefore.left=i?n.cycleW-1:1-n.cycleW;r.animOut.left=i?-t.cycleW:t.cycleW});r.cssFirst.left=0;r.cssBefore.top=0;r.animIn.left=0;r.animOut.top=0};e.fn.cycle.transitions.scrollVert=function(t,n,r){t.css("overflow","hidden");r.before.push(function(t,n,r,i){r.rev&&(i=!i);e.fn.cycle.commonReset(t,n,r);r.cssBefore.top=i?1-n.cycleH:n.cycleH-1;r.animOut.top=i?t.cycleH:-t.cycleH});r.cssFirst.top=0;r.cssBefore.left=0;r.animIn.top=0;r.animOut.left=0};e.fn.cycle.transitions.slideX=function(t,n,r){r.before.push(function(t,n,r){e(r.elements).not(t).hide();e.fn.cycle.commonReset(t,n,r,!1,!0);r.animIn.width=n.cycleW});r.cssBefore.left=0;r.cssBefore.top=0;r.cssBefore.width=0;r.animIn.width="show";r.animOut.width=0};e.fn.cycle.transitions.slideY=function(t,n,r){r.before.push(function(t,n,r){e(r.elements).not(t).hide();e.fn.cycle.commonReset(t,n,r,!0,!1);r.animIn.height=n.cycleH});r.cssBefore.left=0;r.cssBefore.top=0;r.cssBefore.height=0;r.animIn.height="show";r.animOut.height=0};e.fn.cycle.transitions.shuffle=function(t,n,r){var i,s=t.css("overflow","visible").width();n.css({left:0,top:0});r.before.push(function(t,n,r){e.fn.cycle.commonReset(t,n,r,!0,!0,!0)});if(!r.speedAdjusted){r.speed=r.speed/2;r.speedAdjusted=!0}r.random=0;r.shuffle=r.shuffle||{left:-s,top:15};r.els=[];for(i=0;i<n.length;i++)r.els.push(n[i]);for(i=0;i<r.currSlide;i++)r.els.push(r.els.shift());r.fxFn=function(t,n,r,i,s){r.rev&&(s=!s);var o=s?e(t):e(n);e(n).css(r.cssBefore);var u=r.slideCount;o.animate(r.shuffle,r.speedIn,r.easeIn,function(){var n=e.fn.cycle.hopsFromLast(r,s);for(var a=0;a<n;a++)s?r.els.push(r.els.shift()):r.els.unshift(r.els.pop());if(s)for(var f=0,l=r.els.length;f<l;f++)e(r.els[f]).css("z-index",l-f+u);else{var c=e(t).css("z-index");o.css("z-index",parseInt(c,10)+1+u)}o.animate({left:0,top:0},r.speedOut,r.easeOut,function(){e(s?this:t).hide();i&&i()})})};e.extend(r.cssBefore,{display:"block",opacity:1,top:0,left:0})};e.fn.cycle.transitions.turnUp=function(t,n,r){r.before.push(function(t,n,r){e.fn.cycle.commonReset(t,n,r,!0,!1);r.cssBefore.top=n.cycleH;r.animIn.height=n.cycleH;r.animOut.width=n.cycleW});r.cssFirst.top=0;r.cssBefore.left=0;r.cssBefore.height=0;r.animIn.top=0;r.animOut.height=0};e.fn.cycle.transitions.turnDown=function(t,n,r){r.before.push(function(t,n,r){e.fn.cycle.commonReset(t,n,r,!0,!1);r.animIn.height=n.cycleH;r.animOut.top=t.cycleH});r.cssFirst.top=0;r.cssBefore.left=0;r.cssBefore.top=0;r.cssBefore.height=0;r.animOut.height=0};e.fn.cycle.transitions.turnLeft=function(t,n,r){r.before.push(function(t,n,r){e.fn.cycle.commonReset(t,n,r,!1,!0);r.cssBefore.left=n.cycleW;r.animIn.width=n.cycleW});r.cssBefore.top=0;r.cssBefore.width=0;r.animIn.left=0;r.animOut.width=0};e.fn.cycle.transitions.turnRight=function(t,n,r){r.before.push(function(t,n,r){e.fn.cycle.commonReset(t,n,r,!1,!0);r.animIn.width=n.cycleW;r.animOut.left=t.cycleW});e.extend(r.cssBefore,{top:0,left:0,width:0});r.animIn.left=0;r.animOut.width=0};e.fn.cycle.transitions.zoom=function(t,n,r){r.before.push(function(t,n,r){e.fn.cycle.commonReset(t,n,r,!1,!1,!0);r.cssBefore.top=n.cycleH/2;r.cssBefore.left=n.cycleW/2;e.extend(r.animIn,{top:0,left:0,width:n.cycleW,height:n.cycleH});e.extend(r.animOut,{width:0,height:0,top:t.cycleH/2,left:t.cycleW/2})});r.cssFirst.top=0;r.cssFirst.left=0;r.cssBefore.width=0;r.cssBefore.height=0};e.fn.cycle.transitions.fadeZoom=function(t,n,r){r.before.push(function(t,n,r){e.fn.cycle.commonReset(t,n,r,!1,!1);r.cssBefore.left=n.cycleW/2;r.cssBefore.top=n.cycleH/2;e.extend(r.animIn,{top:0,left:0,width:n.cycleW,height:n.cycleH})});r.cssBefore.width=0;r.cssBefore.height=0;r.animOut.opacity=0};e.fn.cycle.transitions.blindX=function(t,n,r){var i=t.css("overflow","hidden").width();r.before.push(function(t,n,r){e.fn.cycle.commonReset(t,n,r);r.animIn.width=n.cycleW;r.animOut.left=t.cycleW});r.cssBefore.left=i;r.cssBefore.top=0;r.animIn.left=0;r.animOut.left=i};e.fn.cycle.transitions.blindY=function(t,n,r){var i=t.css("overflow","hidden").height();r.before.push(function(t,n,r){e.fn.cycle.commonReset(t,n,r);r.animIn.height=n.cycleH;r.animOut.top=t.cycleH});r.cssBefore.top=i;r.cssBefore.left=0;r.animIn.top=0;r.animOut.top=i};e.fn.cycle.transitions.blindZ=function(t,n,r){var i=t.css("overflow","hidden").height(),s=t.width();r.before.push(function(t,n,r){e.fn.cycle.commonReset(t,n,r);r.animIn.height=n.cycleH;r.animOut.top=t.cycleH});r.cssBefore.top=i;r.cssBefore.left=s;r.animIn.top=0;r.animIn.left=0;r.animOut.top=i;r.animOut.left=s};e.fn.cycle.transitions.growX=function(t,n,r){r.before.push(function(t,n,r){e.fn.cycle.commonReset(t,n,r,!1,!0);r.cssBefore.left=this.cycleW/2;r.animIn.left=0;r.animIn.width=this.cycleW;r.animOut.left=0});r.cssBefore.top=0;r.cssBefore.width=0};e.fn.cycle.transitions.growY=function(t,n,r){r.before.push(function(t,n,r){e.fn.cycle.commonReset(t,n,r,!0,!1);r.cssBefore.top=this.cycleH/2;r.animIn.top=0;r.animIn.height=this.cycleH;r.animOut.top=0});r.cssBefore.height=0;r.cssBefore.left=0};e.fn.cycle.transitions.curtainX=function(t,n,r){r.before.push(function(t,n,r){e.fn.cycle.commonReset(t,n,r,!1,!0,!0);r.cssBefore.left=n.cycleW/2;r.animIn.left=0;r.animIn.width=this.cycleW;r.animOut.left=t.cycleW/2;r.animOut.width=0});r.cssBefore.top=0;r.cssBefore.width=0};e.fn.cycle.transitions.curtainY=function(t,n,r){r.before.push(function(t,n,r){e.fn.cycle.commonReset(t,n,r,!0,!1,!0);r.cssBefore.top=n.cycleH/2;r.animIn.top=0;r.animIn.height=n.cycleH;r.animOut.top=t.cycleH/2;r.animOut.height=0});r.cssBefore.height=0;r.cssBefore.left=0};e.fn.cycle.transitions.cover=function(t,n,r){var i=r.direction||"left",s=t.css("overflow","hidden").width(),o=t.height();r.before.push(function(t,n,r){e.fn.cycle.commonReset(t,n,r);i=="right"?r.cssBefore.left=-s:i=="up"?r.cssBefore.top=o:i=="down"?r.cssBefore.top=-o:r.cssBefore.left=s});r.animIn.left=0;r.animIn.top=0;r.cssBefore.top=0;r.cssBefore.left=0};e.fn.cycle.transitions.uncover=function(t,n,r){var i=r.direction||"left",s=t.css("overflow","hidden").width(),o=t.height();r.before.push(function(t,n,r){e.fn.cycle.commonReset(t,n,r,!0,!0,!0);i=="right"?r.animOut.left=s:i=="up"?r.animOut.top=-o:i=="down"?r.animOut.top=o:r.animOut.left=-s});r.animIn.left=0;r.animIn.top=0;r.cssBefore.top=0;r.cssBefore.left=0};e.fn.cycle.transitions.toss=function(t,n,r){var i=t.css("overflow","visible").width(),s=t.height();r.before.push(function(t,n,r){e.fn.cycle.commonReset(t,n,r,!0,!0,!0);!r.animOut.left&&!r.animOut.top?e.extend(r.animOut,{left:i*2,top:-s/2,opacity:0}):r.animOut.opacity=0});r.cssBefore.left=0;r.cssBefore.top=0;r.animIn.left=0};e.fn.cycle.transitions.wipe=function(t,n,r){var i=t.css("overflow","hidden").width(),s=t.height();r.cssBefore=r.cssBefore||{};var o;if(r.clip)if(/l2r/.test(r.clip))o="rect(0px 0px "+s+"px 0px)";else if(/r2l/.test(r.clip))o="rect(0px "+i+"px "+s+"px "+i+"px)";else if(/t2b/.test(r.clip))o="rect(0px "+i+"px 0px 0px)";else if(/b2t/.test(r.clip))o="rect("+s+"px "+i+"px "+s+"px 0px)";else if(/zoom/.test(r.clip)){var u=parseInt(s/2,10),a=parseInt(i/2,10);o="rect("+u+"px "+a+"px "+u+"px "+a+"px)"}r.cssBefore.clip=r.cssBefore.clip||o||"rect(0px 0px 0px 0px)";var f=r.cssBefore.clip.match(/(\d+)/g),l=parseInt(f[0],10),c=parseInt(f[1],10),h=parseInt(f[2],10),p=parseInt(f[3],10);r.before.push(function(t,n,r){if(t==n)return;var o=e(t),u=e(n);e.fn.cycle.commonReset(t,n,r,!0,!0,!1);r.cssAfter.display="block";var a=1,f=parseInt(r.speedIn/13,10)-1;(function d(){var e=l?l-parseInt(a*(l/f),10):0,t=p?p-parseInt(a*(p/f),10):0,n=h<s?h+parseInt(a*((s-h)/f||1),10):s,r=c<i?c+parseInt(a*((i-c)/f||1),10):i;u.css({clip:"rect("+e+"px "+r+"px "+n+"px "+t+"px)"});a++<=f?setTimeout(d,13):o.css("display","none")})()});e.extend(r.cssBefore,{display:"block",opacity:1,top:0,left:0});r.animIn={left:0};r.animOut={left:0}}})(jQuery);