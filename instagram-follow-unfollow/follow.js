var jqueryScript = document.createElement('script');
jqueryScript.src = "//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js";

jqueryScript.onload = function(){

	let followButtonText = "Follow";
	let followButtonTimeout = 10 * 1000;
	let confirmationMessage = "Successfully follow";
	window.setInterval(function(){
		var x = 0;
		$(`button:contains('${followButtonText}')`).each(function(){
			if($(this).text()==followButtonText){
				if(x==1) return false;
				$(this).trigger("click");
				x++;
			}
		})
		var y = $(window).scrollTop();
		$("html, body").animate(
			{
				scrollTop: y+50
			}, 1000);
		console.log(confirmationMessage);
	}, followButtonTimeout);

};
document.getElementsByTagName('head')[0].appendChild(jqueryScript);
