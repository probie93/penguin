$(function() {
	$("#header").height(0);
	var height = $("#main_container").outerHeight(true);
	$("#header").height(height+5);
});
$( window ).resize(function() {
	$("#header").height(0);
	var height = $("#main_container").outerHeight(true);
	$("#header").height(height+5);
});