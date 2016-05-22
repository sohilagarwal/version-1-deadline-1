// JavaScript Document
$( document ).ready(function() {
    var ifrm_height = $( window ).height();
	var bar_height = $( ".bar_header" ).height()
	var use_high = ifrm_height - bar_height;
	$('.abcd').css("height",use_high);
});