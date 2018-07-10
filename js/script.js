var n;
var m;
var current;
var prevOrNext;			
function openModal(n){
	$('#modal').fadeIn();
	$('#'+n).fadeIn();
}
function closeModal(){
	$('#modal').fadeOut();
	$('.mySlides').fadeOut();
}
function plusSlides(current, prevOrNext){
	$('#'+current).hide();
	$('#'+prevOrNext).show();
}

function toggleNav(){
	document.getElementById('navbar').classList.toggle('hide-nav');
}
window.onscroll = function(){
	setTimeout(()=>{
		document.getElementById('navbar').classList.add('hide-nav');
	}, 100);
}

$(document).ready(function(){
	$("a").on('click', function(event) {
		if (this.hash !== "") {
			event.preventDefault();
			var hash = this.hash;
			$('html, body').animate({
				scrollTop: $(hash).offset().top
			}, 800, function(){
			window.location.hash = hash;
			});
		}
	});
});