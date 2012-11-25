jQuery(document).ready(function($){
	// Get hash and fill text spans
	var url_hash = window.location.hash;
	var hash_array = url_hash.replace('#', '').split('/');
	for (var i = hash_array.length - 1; i >= 0; i--) {
		var current_hash = hash_array[i].split('=');
		var current_element = '#hashlibs-' + current_hash[0];
		$(current_element).text(current_hash[1]);
	};
});