$(document).ready(function () {
$(".navbar-nav li.cerrar a").click(function(event) {
$("nav.sidebar").css({
marginLeft:'-160px'});
$(".glyphicon").css({
marginLeft:'150px'});
$(".MenuPrincipal").css({
height: '20px'});
});
$(".navbar-nav li.cerrar a").dblclick(function(event) {
$("nav.sidebar").css({
marginLeft:'0px'});
$(".glyphicon").css({
marginLeft:'0px'});
});
}); 