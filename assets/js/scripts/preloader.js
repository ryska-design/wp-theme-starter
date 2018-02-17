/* eslint func-names: 0 */
/* eslint prefer-arrow-callback: 0 */
/* eslint no-unused-vars: 0 */

const hidePreloader = function () {
	$('.preloader._page').fadeOut('slow');
	$('body').removeClass('loading');
	$('body').addClass('loaded');
};
const showPreloader = function () {
	$('.preloader._page').fadeIn('slow');
	$('body').removeClass('loaded');
	$('body').addClass('loading');
};

$(window).on('load', function () {
	// Just delate settimeout for faster loading
	setTimeout(function () {
		hidePreloader();
	}, 500);
});
