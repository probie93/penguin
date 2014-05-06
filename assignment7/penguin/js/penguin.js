$(function() {
	$("#header").height(0);
	var height = $("#main_container").outerHeight(true);
	$("#header").height(height+5);
	   $('#menuHam').click(function(){
	$('#header').toggle();
	});
});
$( window ).resize(function() {
	$("#header").height(0);
	var height = $("#main_container").outerHeight(true);
	$("#header").height(height+5);
});