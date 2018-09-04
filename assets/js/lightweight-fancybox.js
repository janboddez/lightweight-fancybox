jQuery( function( $ ) {
	/**
	 * Automatically enables Fancybox for image thumbnails linking to an image.
	 */
	$( '.entry-content a[href$="png"]:has(img), .entry-content a[href$="jpg"]:has(img), .entry-content a[href$="jpeg"]:has(img)' ).attr( 'data-fancybox', 'gallery' ).fancybox( {
		// Hide buttons other than 'close'.
		buttons: [
		"close"
		],

		// Disable 'zoom on click'.
		clickContent : false,

		// Set caption based on image alt text.
		caption : function( instance, current ) {
			return $( this ).find( 'img' ).attr( 'alt' );
		}
	} );
} );
