const Main = ( $ ) => {

	const newsItemsSlide = $( '.news-items:not(.grid-cohere)' );
	if ( newsItemsSlide.length ) {
		newsItemsSlide.slick( {
			infinite: true,
			slidesToShow: 4,
			slidesToScroll: 1,
			arrows: true,
			dots: false,
			prevArrow: '<i class="slick-prev"></i>',
			nextArrow: '<i class="slick-next"></i>',
			responsive: [
				{
					breakpoint: 1024,
					settings: {
						slidesToShow: 3,
					}
				},
				{
					breakpoint: 768,
					settings: {
						slidesToShow: 2,
					}
				},
				{
					breakpoint: 480,
					settings: {
						slidesToShow: 1,
					}
				}
			]
		} );
	}

	const contactButton = $( '.contacts' );
	if ( contactButton.length ) {
		contactButton.click( function( e ) {
			e.preventDefault();
			$( '.contacts-block' ).toggleClass( 'active' );
			$( 'body' ).toggleClass( 'open-contacts' );
		} );
	}

	const closeBotton = $( '.close' );
	if ( closeBotton.length ) {
		closeBotton.click( function( e ) {
			$( '.contacts-block' ).removeClass( 'active' );
			$( 'body' ).toggleClass( 'open-contacts' );
		} );
	}


	if ( $( '.textarea textarea, .input input' ).length ) {
		
		const textarea = $( '.textarea textarea, .input:not(.tel) input' );
		textarea.focus( function() {
			$( this ).parent().addClass( 'focus' );
		} );

		textarea.blur( function() {
			if ( $( this ).val() === 0 ) {
				$( this ).parent().removeClass( 'focus' );
			}
		} );

		textarea.each( function() {
			if ( $( this ).val() === 0 ) {
				$( this ).parent().removeClass( 'focus' );
			} else {
				$( this ).parent().addClass( 'focus' );
			}
		} );

		$( '.input i' ).click( function() {
			if ( $( this ).hasClass( 'bi-eye' ) ) {
				$( this ).removeClass( 'bi-eye' ).addClass( 'bi-eye-slash' );
				$( this ).parent().find( 'input' ).attr( 'type', 'text' );
			} else {
				$( this ).removeClass( 'bi-eye-slash' ).addClass( 'bi-eye' );
				$( this ).parent().find( 'input' ).attr( 'type', 'password' );
			}
		} );
	}
};

export default ( ( $ ) => $( Main ) )( jQuery );
