$(document).ready(function() {
	$("#learnMore").click(function() {
		$('#extra').slideToggle(300);
		$('b').toggleClass("caret caret-up");
	})
})