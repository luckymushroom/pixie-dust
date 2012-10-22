/*
* Copyright (C) 2009 Joel Sutherland
* Licenced under the MIT license
* http://www.newmediacampaigns.com/page/jquery-flickr-plugin
*
* Available tags for templates:
* title, link, date_taken, description, published, author, author_id, tags, image*
*/(function(e){e.fn.jflickrfeed=function(t,n){t=e.extend(!0,{flickrbase:"http://api.flickr.com/services/feeds/",feedapi:"photos_public.gne",limit:20,qstrings:{lang:"en-us",format:"json",jsoncallback:"?"},cleanDescription:!0,useTemplate:!0,itemTemplate:"",itemCallback:function(){}},t);var r=t.flickrbase+t.feedapi+"?",i=!0;for(var s in t.qstrings){i||(r+="&");r+=s+"="+t.qstrings[s];i=!1}return e(this).each(function(){var i=e(this),s=this;e.getJSON(r,function(r){e.each(r.items,function(e,n){if(e<t.limit){if(t.cleanDescription){var r=/<p>(.*?)<\/p>/g,o=n.description;if(r.test(o)){n.description=o.match(r)[2];n.description!=undefined&&(n.description=n.description.replace("<p>","").replace("</p>",""))}}n.image_s=n.media.m.replace("_m","_s");n.image_t=n.media.m.replace("_m","_t");n.image_m=n.media.m.replace("_m","_m");n.image=n.media.m.replace("_m","");n.image_b=n.media.m.replace("_m","_b");delete n.media;if(t.useTemplate){var u=t.itemTemplate;for(var a in n){var f=new RegExp("{{"+a+"}}","g");u=u.replace(f,n[a])}i.append(u)}t.itemCallback.call(s,n)}});e.isFunction(n)&&n.call(s,r)})})}})(jQuery);