$(".pagescroll").click(function(){
	var tujuan=$(this).attr("href");
		$('html,body').animate({
			scrollTop :$(tujuan).offset().top -130
		}'1000');
});