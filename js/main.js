/*	code: prevent scrolling inside of block */
	function noScroll(className) {
		$( '.'+className ).bind( 'mousewheel DOMMouseScroll', function ( e ) {
			var e0 = e.originalEvent,
				delta = e0.wheelDelta || -e0.detail;
			this.scrollTop += ( delta < 0 ? 1 : -1 ) * 30;
			e.preventDefault();
		});
	}
/*	code: end */

/*	code: select text with one click */
	function selectText(containerid) {
		if (document.selection) {
			var range = document.body.createTextRange();
			range.moveToElementText(document.getElementById(containerid));
			range.select();
		} else if (window.getSelection) {
			var range = document.createRange();
			range.selectNode(document.getElementById(containerid));
			window.getSelection().addRange(range);
		}
	}
/*	code: end */

$(document).ready(function(){
	if ( $('form[name="request"]') ) {
		$('input[name="allgreen_phone"]').mask('+0 (000) 000-00-00');
		$('input[name="allgreen_phone"]').on('click', function() {
			if ( $('input[name="allgreen_phone"]').val() == "" )
				$('input[name="allgreen_phone"]').val('+7 ');
		});
	}
});