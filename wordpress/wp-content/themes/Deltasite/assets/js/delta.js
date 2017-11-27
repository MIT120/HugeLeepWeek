/* Open when someone clicks on the span element */
function openNav() {
    document.getElementById("myNav").style.height = "100%";
}
    /* Close when someone clicks on the "x" symbol inside the overlay */
function closeNav() {
    document.getElementById("myNav").style.height = "0%";
}

  			$(function() {
	$('.buttonSelectYear').on('click',function(){
		$('.yearsList').removeClass('close');
		$('.yearsList').addClass('open');
	});
});

  			$(function() {
	$('.cross').on('click',function(){
		$('.yearsList').removeClass('open');
		$('.yearsList').addClass('close');
	});
});