
$(document).ready(function() {
	// función para abrir menú
	open_menu_responsive();

});


function open_menu_responsive() {
	// Abrir memú
	$('#icon-menu').click(function() {
		$('body').css('overflow', 'hidden');
		$('#content-bg').addClass('active');
		$('#navbar_responsive').addClass('active');
		$('#content-bg').click(function() {
			$('body').css('overflow-y', 'scroll');
			$(this).removeClass('active');
			$('#navbar_responsive').removeClass('active');
		});
	});

	// abrir sub menú
	$('#event_click_js_sub_menu').click(function() {
		$(this).toggleClass('active');
		$('#sub-menu-responsive').slideToggle();
	});
}