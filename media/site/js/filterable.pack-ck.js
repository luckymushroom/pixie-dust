/*
* Copyright (C) 2009 Joel Sutherland.
* Liscenced under the MIT liscense
*/(function(e){e.fn.filterable=function(t){t=e.extend({useHash:!0,animationSpeed:1e3,show:{width:"show",opacity:"show"},hide:{width:"hide",opacity:"hide"},useTags:!0,tagSelector:"#portfolio-filter a",selectedTagClass:"current",allTag:"all"},t);return e(this).each(function(){e(this).bind("filter",function(n,r){if(t.useTags){e(t.tagSelector).removeClass(t.selectedTagClass);e(t.tagSelector+"[href="+r+"]").addClass(t.selectedTagClass)}e(this).trigger("filterportfolio",[r.substr(1)])});e(this).bind("filterportfolio",function(n,r){if(r==t.allTag)e(this).trigger("show");else{e(this).trigger("show",["."+r]);e(this).trigger("hide",[":not(."+r+")"])}t.useHash&&(location.hash="#"+r)});e(this).bind("show",function(n,r){e(this).children(r).animate(t.show,t.animationSpeed)});e(this).bind("hide",function(n,r){e(this).children(r).animate(t.hide,t.animationSpeed)});t.useHash&&(location.hash!=""?e(this).trigger("filter",[location.hash]):e(this).trigger("filter",["#"+t.allTag]));t.useTags&&e(t.tagSelector).click(function(){e("#portfolio-list, #portfolio-list2, #portfolio-list3").trigger("filter",[e(this).attr("href")]);e(t.tagSelector).removeClass("current");e(this).addClass("current")})})}})(jQuery);$(document).ready(function(){$("#portfolio-list, #portfolio-list2, #portfolio-list3").filterable()});