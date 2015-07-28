$(document).ready(function(){
	// load index page when the page loads
	//$("#response").load("home.html");
	$("#dash").click(function(){
	// load about page on click


		$("#response").load("index.php/account/dashboard");
	});
	$("#fees").click(function(){
	// load home page on click
		$("#response").load('index.php/account/fees');
		
	});
	$("#teach").click(function(){
	// load contact form onclick
		$("#response").load("index.php/account/teacher");
	});
	$("#inv").click(function(){
	// load contact form onclick
		$("#response").load("index.php/account/invoice");
	});
}); 

