/* FAQ settings */
ddaccordion.init({
	headerclass: "ask", 
	contentclass: "question", 
	revealtype: "click", 
	mouseoverdelay: 200, 
	collapseprev: true, 
	defaultexpanded: [], 
	onemustopen: true, 
	animatedefault: false,
	persiststate: false, 
	toggleclass: ["closedquestion", "openquestion"], 
	togglehtml: ["prefix", "<img src='images/closed.png' alt='' style='width:10px; height:10px; margin:6px 3px 0px 0px; float:right;' /> ", "<img src='images/open.png' alt='' style='width:10px; height:10px; margin:6px 3px 0px 0px; float:right;' /> "], 
	animatespeed: "fast", 
	oninit:function(expandedindices){ 
	},
	onopenclose:function(header, index, state, isuseractivated){ 		
	}
})
