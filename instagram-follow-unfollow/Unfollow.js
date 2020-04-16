var jqueryScript = document.createElement('script');
jqueryScript.src = "//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js";

jqueryScript.onload = function(){

	let unfollowButtonText = "Following";
	let unfollowConfirmationText = "Unfollow";
	let unfollowButtonTimeout = 10 * 1000;
	let unfollowConfirmationTimeout = 5 * 1000;
	let confirmationMessage = "Successfully Unfollow";

	window.setInterval(function(){
		var x = 0;
		$(`button:contains('${unfollowButtonText}')`).each(function(){
			if($(this).text()==unfollowButtonText){
				if(x==1) return false;
				$(this).trigger("click");
				x++;
				setTimeout(function(){
	                    var btn = $("button:contains('Unfollow')");

	                    if(btn){
	                        btn.trigger("click");
	                    }
	                }, unfollowConfirmationTimeout);
			}
		})
		var y = $(window).scrollTop();
		$("html, body").animate(
			{
				scrollTop: y+50
			}, 1000);
		console.log(confirmationMessage);
	}, unfollowButtonTimeout);

};
document.getElementsByTagName('head')[0].appendChild(jqueryScript);
