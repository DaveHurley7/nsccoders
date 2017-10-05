$(document).ready(function(){
    //HTML Drop Down List
	$("span#htmllink,div.html").mouseenter(function(){
        $("div.html").slideDown(.01);
    });
    $("span#htmllink,div.html").mouseleave(function(){
        $("div.html").slideUp(.01);
    });
	//CSS Drop Down List
    $("span#csslink,div.css").mouseenter(function(){
        $("div.css").slideDown(.01);
    });
	$("span#csslink,div.css").mouseleave(function(){
	    $("div.css").slideUp(.01);
	});
	//JavaScript Drop Down List
	$("span#jslink,div.js").mouseenter(function(){
	    $("div.js").slideDown(.01);
	});
	$("span#jslink,div.js").mouseleave(function(){
	    $("div.js").slideUp(.01);
	});
});