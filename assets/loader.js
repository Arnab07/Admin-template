$(document).ready(function(){
	// load index page when the page loads
	//$("#response").load("home.html");
	$("#dash").click(function(){
	// load about page on click

	$("#response").hide().html('<center><img src="img/loading.gif"></center>').fadeIn('fast');
		$("#response").load('index.php/account/dashboard',async=true);
	});
	$("#fees").click(function(){
	// load home page on click
	$("#response").hide().html('<center><img src="img/loading.gif"></center>').fadeIn('fast');
		$("#response").load('index.php/account/fees');

		
	}); 
	$("#teach").click(function(){
	// load contact form onclick
	$("#response").hide().html('<center><img src="img/loading.gif"></center>').fadeIn('fast');
		$("#response").load('index.php/account/teacher');
	});
}); 

