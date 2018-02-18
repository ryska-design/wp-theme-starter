/*
 * Modal
 *
 */
function openModal() {
	$(this).addClass('active');
	const modal = $(this).attr('target');
	$(`${modal} .hamburger`).addClass('active');
	$(modal).toggleClass('active');
	setTimeout(() => {
		$('html, body').css({ 'overflow-y': 'hidden' });
	}, 350);
}
function closeModal() {
	$('.modal-link').removeClass('active');
	$('.modal').removeClass('active');
	$('html, body').css({ 'overflow-y': 'auto' });
}
$('.modal-link').on('click', openModal);
$('.modal .hamburger').on('click', closeModal);

/*
 * Main menu
 *
 */
$('.menu-item-has-children').on('mouseover', function () {
	$(this).parent().addClass('expand');
});
$('.menu-item-has-children').on('mouseout', function () {
	$(this).parent().removeClass('expand');
});
