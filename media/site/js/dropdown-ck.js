var $=jQuery.noConflict();$(document).ready(function(){$(" #menu ul ").css({display:"none"});$(" #menu li").hover(function(){$(this).find("ul:first").css({visibility:"visible",display:"none"}).slideDown(400)},function(){$(this).find("ul:first").css({visibility:"hidden"})})});