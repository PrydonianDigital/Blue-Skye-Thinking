jQuery(document).foundation();

jQuery(document).ready(function() {

	var api = 'd8a6cfb2',
		jg = 'https://api.sandbox.justgiving.com/'+api+'/v1/fundraising/pages/loomstallation?callback=';

	$.ajax({
		url: jg,
		type: 'GET',
		headers: {
			'x-api-key': api,
			'Accept':'application/json',
			'Authorization': 'Basic bG9vbXN0YWxsYXRpb24uYnN0QGdtYWlsLmNvbTpCbHUzU2t5MzEyMyE='
		},
		done: function(data) {
			console.log('Done');
		},
		fail: function(data) {
			console.log('Fail!');
		},
		success: function(data) {
			console.log('Success!');
		}
	});

	jQuery(window).paroller();

	jQuery('[data-menu-underline-from-center] li').addClass('underline-from-center');

	jQuery('.sub-menu').attr('data-submenu');

	jQuery(window).scroll(function() {
		var winTop = jQuery(window).scrollTop();
		if (winTop >= 80) {
			jQuery('body').addClass('closed');
		} else{
			jQuery('body').removeClass('closed');
		}
	});

	var percent = jQuery('.progress-meter').data('percent');
	jQuery('.progress-meter').animate({
		'width': percent+'%'
	}, 1200);


});

function exists(data) {
	if(!data || data==null || data=='undefined' || typeof(data)=='undefined') return false;
	else return true;
}

function element_exists(id){
	if(jQuery(id).length > 0){
		return true;
	}
	return false;
}

