/**
* @version: 1.0
* @author: Dan Grossman http://www.dangrossman.info/
* @date: 2012-08-20
* @copyright: Copyright (c) 2012 Dan Grossman. All rights reserved.
* @license: Licensed under Apache License v2.0. See http://www.apache.org/licenses/LICENSE-2.0
* @website: http://www.improvely.com/
*/!function(e){var t=function(t,n,r){this.startDate=Date.today();this.endDate=Date.today();this.ranges={};this.opens="right";this.cb=function(){};this.format="MM/dd/yyyy";this.leftCalendar={month:Date.today().set({day:1,month:this.startDate.getMonth(),year:this.startDate.getFullYear()}),calendar:Array()};this.rightCalendar={month:Date.today().set({day:1,month:this.endDate.getMonth(),year:this.endDate.getFullYear()}),calendar:Array()};this.element=e(t);this.element.hasClass("pull-right")&&(this.opens="left");this.element.is("input")?this.element.on({click:e.proxy(this.show,this),focus:e.proxy(this.show,this),blur:e.proxy(this.hide,this)}):this.element.on("click",e.proxy(this.show,this));this.container=e(DRPTemplate).appendTo("body");if(typeof n=="object"){if(typeof n.ranges=="object"){for(var i in n.ranges){var s=n.ranges[i][0],o=n.ranges[i][1];typeof s=="string"&&(s=Date.parse(s));typeof o=="string"&&(o=Date.parse(o));this.ranges[i]=[s,o]}var u="<ul>";for(var i in this.ranges)u+="<li>"+i+"</li>";u+="<li>Custom Range</li>";u+="</ul>";this.container.find(".ranges").prepend(u)}typeof n.format=="string"&&(this.format=n.format);typeof n.startDate=="string"&&(this.startDate=Date.parse(n.startDate,this.format));typeof n.endDate=="string"&&(this.endDate=Date.parse(n.endDate,this.format));typeof n.opens=="string"&&(this.opens=n.opens)}if(this.opens=="right"){var a=this.container.find(".calendar.left"),f=this.container.find(".calendar.right");a.removeClass("left").addClass("right");f.removeClass("right").addClass("left")}(typeof n=="undefined"||typeof n.ranges=="undefined")&&this.container.find(".calendar").show();typeof r=="function"&&(this.cb=r);this.container.addClass("opens"+this.opens);this.container.on("mousedown",e.proxy(this.mousedown,this));this.container.find(".calendar").on("click",".prev",e.proxy(this.clickPrev,this));this.container.find(".calendar").on("click",".next",e.proxy(this.clickNext,this));this.container.find(".ranges").on("click","button",e.proxy(this.clickApply,this));this.container.find(".calendar").on("click","td",e.proxy(this.clickDate,this));this.container.find(".calendar").on("mouseenter","td",e.proxy(this.enterDate,this));this.container.find(".calendar").on("mouseleave","td",e.proxy(this.updateView,this));this.container.find(".ranges").on("click","li",e.proxy(this.clickRange,this));this.container.find(".ranges").on("mouseenter","li",e.proxy(this.enterRange,this));this.container.find(".ranges").on("mouseleave","li",e.proxy(this.updateView,this));this.element.on("keyup",e.proxy(this.updateFromControl,this));this.updateView();this.updateCalendars();this.notify()};t.prototype={constructor:t,mousedown:function(e){e.stopPropagation();e.preventDefault()},updateView:function(){this.leftCalendar.month.set({month:this.startDate.getMonth(),year:this.startDate.getFullYear()});this.rightCalendar.month.set({month:this.endDate.getMonth(),year:this.endDate.getFullYear()});this.container.find("input[name=daterangepicker_start]").val(this.startDate.toString(this.format));this.container.find("input[name=daterangepicker_end]").val(this.endDate.toString(this.format));this.startDate.equals(this.endDate)||this.startDate.isBefore(this.endDate)?this.container.find("button").removeAttr("disabled"):this.container.find("button").attr("disabled","disabled")},updateFromControl:function(){if(!this.element.is("input"))return;var e=this.element.val().split(" - "),t=Date.parseExact(e[0],this.format),n=Date.parseExact(e[1],this.format);if(t==null||n==null)return;if(n.isBefore(t))return;this.startDate=t;this.endDate=n;this.updateView();this.cb(this.startDate,this.endDate);this.updateCalendars()},notify:function(){this.updateView();this.element.is("input")&&this.element.val(this.startDate.toString(this.format)+" - "+this.endDate.toString(this.format));this.cb(this.startDate,this.endDate)},move:function(){this.opens=="left"?this.container.css({top:this.element.offset().top+this.element.outerHeight(),right:e(window).width()-this.element.offset().left-this.element.outerWidth(),left:"auto"}):this.container.css({top:this.element.offset().top+this.element.outerHeight(),left:this.element.offset().left,right:"auto"})},show:function(t){this.container.show();this.move();if(t){t.stopPropagation();t.preventDefault()}e(document).on("mousedown",e.proxy(this.hide,this))},hide:function(t){this.container.hide();e(document).off("mousedown",this.hide)},enterRange:function(e){var t=e.target.innerHTML;if(t=="Custom Range")this.updateView();else{var n=this.ranges[t];this.container.find("input[name=daterangepicker_start]").val(n[0].toString(this.format));this.container.find("input[name=daterangepicker_end]").val(n[1].toString(this.format))}},clickRange:function(e){var t=e.target.innerHTML;if(t=="Custom Range")this.container.find(".calendar").show();else{var n=this.ranges[t];this.startDate=n[0];this.endDate=n[1];this.leftCalendar.month.set({month:this.startDate.getMonth(),year:this.startDate.getFullYear()});this.rightCalendar.month.set({month:this.endDate.getMonth(),year:this.endDate.getFullYear()});this.updateCalendars();this.notify();this.container.find(".calendar").hide();this.hide()}},clickPrev:function(t){var n=e(t.target).parents(".calendar");n.hasClass("left")?this.leftCalendar.month.add({months:-1}):this.rightCalendar.month.add({months:-1});this.updateCalendars()},clickNext:function(t){var n=e(t.target).parents(".calendar");n.hasClass("left")?this.leftCalendar.month.add({months:1}):this.rightCalendar.month.add({months:1});this.updateCalendars()},enterDate:function(t){var n=e(t.target).attr("title"),r=n.substr(1,1),i=n.substr(3,1),s=e(t.target).parents(".calendar");s.hasClass("left")?this.container.find("input[name=daterangepicker_start]").val(this.leftCalendar.calendar[r][i].toString(this.format)):this.container.find("input[name=daterangepicker_end]").val(this.rightCalendar.calendar[r][i].toString(this.format))},clickDate:function(t){var n=e(t.target).attr("title"),r=n.substr(1,1),i=n.substr(3,1),s=e(t.target).parents(".calendar");if(s.hasClass("left")){startDate=this.leftCalendar.calendar[r][i];endDate=this.endDate}else{startDate=this.startDate;endDate=this.rightCalendar.calendar[r][i]}s.find("td").removeClass("active");if(startDate.equals(endDate)||startDate.isBefore(endDate)){e(t.target).addClass("active");this.startDate=startDate;this.endDate=endDate}this.notify()},clickApply:function(e){this.notify();this.hide()},updateCalendars:function(){this.leftCalendar.calendar=this.buildCalendar(this.leftCalendar.month.getMonth(),this.leftCalendar.month.getFullYear());this.rightCalendar.calendar=this.buildCalendar(this.rightCalendar.month.getMonth(),this.rightCalendar.month.getFullYear());this.container.find(".calendar.left").html(this.renderCalendar(this.leftCalendar.calendar,this.startDate));this.container.find(".calendar.right").html(this.renderCalendar(this.rightCalendar.calendar,this.endDate))},buildCalendar:function(e,t){var n=Date.today().set({day:1,month:e,year:t}),r=n.clone().add(-1).day().getMonth(),i=n.clone().add(-1).day().getFullYear(),s=Date.getDaysInMonth(t,e),o=Date.getDaysInMonth(i,r),u=n.getDay(),a=Array();for(var f=0;f<6;f++)a[f]=Array();var l=o-u+1;u==0&&(l=o-6);var c=Date.today().set({day:l,month:r,year:i});for(var f=0,h=0,p=0;f<42;f++,h++,c=c.clone().add(1).day()){if(f>0&&h%7==0){h=0;p++}a[p][h]=c}return a},renderCalendar:function(e,t){var n='<table class="table-condensed">';n+="<thead>";n+="<tr>";n+='<th class="prev"><i class="icon-arrow-left"></i></th>';n+='<th colspan="5">'+e[1][1].toString("MMMM yyyy")+"</th>";n+='<th class="next"><i class="icon-arrow-right"></i></th>';n+="</tr>";n+="<tr><th>Su</th><th>Mo</th><th>Tu</th><th>We</th><th>Th</th><th>Fr</th><th>Sa</th></tr>";n+="</thead>";n+="<tbody>";for(var r=0;r<6;r++){n+="<tr>";for(var i=0;i<7;i++){var s=e[r][i].getMonth()==e[1][1].getMonth()?"":"off";e[r][i].equals(t)&&(s="active");var o="r"+r+"c"+i;n+='<td class="'+s+'" title="'+o+'">'+e[r][i].getDate()+"</td>"}n+="</tr>"}n+="</tbody>";n+="</table>";return n}};DRPTemplate='<div class="daterangepicker dropdown-menu"><div class="calendar left"></div><div class="calendar right"></div><div class="ranges"><div class="range_inputs"><div style="float: left"><label for="daterangepicker_start">From</label><input class="input-mini" type="text" name="daterangepicker_start" value="" disabled="disabled" /></div><div style="float: left; padding-left: 12px"><label for="daterangepicker_end">To</label><input class="input-mini" type="text" name="daterangepicker_end" value="" disabled="disabled" /></div><button class="btn btn-small btn-success" disabled="disabled">Apply</button></div></div></div>';e.fn.daterangepicker=function(e,n){new t(this,e,n)}}(window.jQuery);