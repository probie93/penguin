$(function() {
	$("#header").height(0);
	var height = $("#main_container").height();
	$("#header").height(height-5);
});
$( window ).resize(function() {
	$("#header").height(0);
	var height = $("#main_container").height();
	$("#header").height(height-5);
});