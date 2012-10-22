/*-------------------------------------------------
		Quick Pager jquery plugin
		
		Copyright (C) 2011 by Dan Drayne

		Permission is hereby granted, free of charge, to any person obtaining a copy
		of this software and associated documentation files (the "Software"), to deal
		in the Software without restriction, including without limitation the rights
		to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
		copies of the Software, and to permit persons to whom the Software is
		furnished to do so, subject to the following conditions:

		The above copyright notice and this permission notice shall be included in
		all copies or substantial portions of the Software.

		THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
		IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
		FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
		AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
		LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
		OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
		THE SOFTWARE.
		
		v1.1/		18/09/09 * bug fix by John V - http://blog.geekyjohn.com/
-------------------------------------------------*/(function(e){e.fn.quickPager=function(t){var n={pageSize:10,currentPage:1,holder:null,pagerLocation:"after"},t=e.extend(n,t);return this.each(function(){var n=e(this),r=1;n.wrap("<div class='simplePagerContainer'></div>");n.children().each(function(n){if(n<r*t.pageSize&&n>=(r-1)*t.pageSize)e(this).addClass("simplePagerPage"+r);else{e(this).addClass("simplePagerPage"+(r+1));r++}});n.children().hide();n.children(".simplePagerPage"+t.currentPage).show();if(r<=1)return;var s="<ul class='simplePagerNav'>";for(i=1;i<=r;i++)i==t.currentPage?s+="<li class='currentPage simplePageNav"+i+"'><a rel='"+i+"' href='#'>"+i+"</a></li>":s+="<li class='simplePageNav"+i+"'><a rel='"+i+"' href='#'>"+i+"</a></li>";s+="</ul>";if(!t.holder)switch(t.pagerLocation){case"before":n.before(s);break;case"both":n.before(s);n.after(s);break;default:n.after(s)}else e(t.holder).append(s);n.parent().find(".simplePagerNav a").click(function(){var r=e(this).attr("rel");t.currentPage=r;if(t.holder){e(this).parent("li").parent("ul").parent(t.holder).find("li.currentPage").removeClass("currentPage");e(this).parent("li").parent("ul").parent(t.holder).find("a[rel='"+r+"']").parent("li").addClass("currentPage")}else{e(this).parent("li").parent("ul").parent(".simplePagerContainer").find("li.currentPage").removeClass("currentPage");e(this).parent("li").parent("ul").parent(".simplePagerContainer").find("a[rel='"+r+"']").parent("li").addClass("currentPage")}n.children().hide();n.find(".simplePagerPage"+r).show();return!1})})}})(jQuery);