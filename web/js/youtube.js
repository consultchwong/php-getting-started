// popup examples
$( document ).on( "pagecreate", function() {

	// The window width and height are decreased by 30 to take the tolerance of 15 pixels at each side into account
	function scale( width, height, padding, border ) {
		var scrWidth = $( window ).width() - 30,
			scrHeight = $( window ).height() - 30,
			ifrPadding = 2 * padding,
			ifrBorder = 2 * border,
			ifrWidth = width + ifrPadding + ifrBorder,
			ifrHeight = height + ifrPadding + ifrBorder,
			h, w;

		if ( ifrWidth < scrWidth && ifrHeight < scrHeight ) {
			w = ifrWidth;
			h = ifrHeight;
		} else if ( ( ifrWidth / scrWidth ) > ( ifrHeight / scrHeight ) ) {
			w = scrWidth;
			h = ( scrWidth / ifrWidth ) * ifrHeight;
		} else {
			h = scrHeight;
			w = ( scrHeight / ifrHeight ) * ifrWidth;
		}

		return {
			'width': w - ( ifrPadding + ifrBorder ),
			'height': h - ( ifrPadding + ifrBorder )
		};
	};

	$( ".ui-popup iframe" )
		.attr( "width", 0 )
		.attr( "height", "auto" );
    	$( "#popupVideo" ).on({
		popupbeforeposition: function() {
			// call our custom function scale() to get the width and height
			var size = scale( 710, 400, 15, 1 ),
				w = size.width,
				h = size.height;

			$( "#popupVideo iframe" )
				.attr( "width", w )
				.attr( "height", h );
		},
		popupafterclose: function() {
			$( "#popupVideo iframe" )
				.attr( "width", 0 )
				.attr( "height", 0 )
				.attr( "src", "https://www.youtube.com/embed/SXQkgG8iDow?rel=0" );
		}
	});
});


// two
$( document ).on( "pagecreate", function() {

	// The window width and height are decreased by 30 to take the tolerance of 15 pixels at each side into account
	function scale( width, height, padding, border ) {
		var scrWidth = $( window ).width() - 30,
			scrHeight = $( window ).height() - 30,
			ifrPadding = 2 * padding,
			ifrBorder = 2 * border,
			ifrWidth = width + ifrPadding + ifrBorder,
			ifrHeight = height + ifrPadding + ifrBorder,
			h, w;

		if ( ifrWidth < scrWidth && ifrHeight < scrHeight ) {
			w = ifrWidth;
			h = ifrHeight;
		} else if ( ( ifrWidth / scrWidth ) > ( ifrHeight / scrHeight ) ) {
			w = scrWidth;
			h = ( scrWidth / ifrWidth ) * ifrHeight;
		} else {
			h = scrHeight;
			w = ( scrHeight / ifrHeight ) * ifrWidth;
		}

		return {
			'width': w - ( ifrPadding + ifrBorder ),
			'height': h - ( ifrPadding + ifrBorder )
		};
	};

	$( ".ui-popup iframe" )
		.attr( "width", 0 )
		.attr( "height", "auto" );

	$( "#popupVideo2" ).on({
		popupbeforeposition: function() {
			// call our custom function scale() to get the width and height
			var size = scale( 710, 400, 15, 1 ),
				w = size.width,
				h = size.height;

			$( "#popupVideo2 iframe" )
				.attr( "width", w )
				.attr( "height", h );
		},
		popupafterclose: function() {
			$( "#popupVideo2 iframe" )
				.attr( "width", 0 )
				.attr( "height", 0 )
				.attr( "src", "https://www.youtube.com/embed/JZ1geH7BAls?rel=0" );
		}
	});
});

//three
$( document ).on( "pagecreate", function() {

	// The window width and height are decreased by 30 to take the tolerance of 15 pixels at each side into account
	function scale( width, height, padding, border ) {
		var scrWidth = $( window ).width() - 30,
			scrHeight = $( window ).height() - 30,
			ifrPadding = 2 * padding,
			ifrBorder = 2 * border,
			ifrWidth = width + ifrPadding + ifrBorder,
			ifrHeight = height + ifrPadding + ifrBorder,
			h, w;

		if ( ifrWidth < scrWidth && ifrHeight < scrHeight ) {
			w = ifrWidth;
			h = ifrHeight;
		} else if ( ( ifrWidth / scrWidth ) > ( ifrHeight / scrHeight ) ) {
			w = scrWidth;
			h = ( scrWidth / ifrWidth ) * ifrHeight;
		} else {
			h = scrHeight;
			w = ( scrHeight / ifrHeight ) * ifrWidth;
		}

		return {
			'width': w - ( ifrPadding + ifrBorder ),
			'height': h - ( ifrPadding + ifrBorder )
		};
	};

	$( ".ui-popup iframe" )
		.attr( "width", 0 )
		.attr( "height", "auto" );

	$( "#popupVideo3" ).on({
		popupbeforeposition: function() {
			// call our custom function scale() to get the width and height
			var size = scale( 710, 400, 15, 1 ),
				w = size.width,
				h = size.height;

			$( "#popupVideo3 iframe" )
				.attr( "width", w )
				.attr( "height", h );
		},
		popupafterclose: function() {
			$( "#popupVideo3 iframe" )
				.attr( "width", 0 )
				.attr( "height", 0 )
				.attr( "src", "https://www.youtube.com/embed/oU7SwnOTisY?rel=0" );
		}
	});
});


//four
$( document ).on( "pagecreate", function() {

	// The window width and height are decreased by 30 to take the tolerance of 15 pixels at each side into account
	function scale( width, height, padding, border ) {
		var scrWidth = $( window ).width() - 30,
			scrHeight = $( window ).height() - 30,
			ifrPadding = 2 * padding,
			ifrBorder = 2 * border,
			ifrWidth = width + ifrPadding + ifrBorder,
			ifrHeight = height + ifrPadding + ifrBorder,
			h, w;

		if ( ifrWidth < scrWidth && ifrHeight < scrHeight ) {
			w = ifrWidth;
			h = ifrHeight;
		} else if ( ( ifrWidth / scrWidth ) > ( ifrHeight / scrHeight ) ) {
			w = scrWidth;
			h = ( scrWidth / ifrWidth ) * ifrHeight;
		} else {
			h = scrHeight;
			w = ( scrHeight / ifrHeight ) * ifrWidth;
		}

		return {
			'width': w - ( ifrPadding + ifrBorder ),
			'height': h - ( ifrPadding + ifrBorder )
		};
	};

	$( ".ui-popup iframe" )
		.attr( "width", 0 )
		.attr( "height", "auto" );

	$( "#popupVideo4" ).on({
		popupbeforeposition: function() {
			// call our custom function scale() to get the width and height
			var size = scale( 710, 400, 15, 1 ),
				w = size.width,
				h = size.height;

			$( "#popupVideo4 iframe" )
				.attr( "width", w )
				.attr( "height", h );
		},
		popupafterclose: function() {
			$( "#popupVideo4 iframe" )
				.attr( "width", 0 )
				.attr( "height", 0 )
				.attr( "src", "https://www.youtube.com/embed/wCnOrZfeWA0?rel=0" );
		}
	});
});

//five
$( document ).on( "pagecreate", function() {

	// The window width and height are decreased by 30 to take the tolerance of 15 pixels at each side into account
	function scale( width, height, padding, border ) {
		var scrWidth = $( window ).width() - 30,
			scrHeight = $( window ).height() - 30,
			ifrPadding = 2 * padding,
			ifrBorder = 2 * border,
			ifrWidth = width + ifrPadding + ifrBorder,
			ifrHeight = height + ifrPadding + ifrBorder,
			h, w;

		if ( ifrWidth < scrWidth && ifrHeight < scrHeight ) {
			w = ifrWidth;
			h = ifrHeight;
		} else if ( ( ifrWidth / scrWidth ) > ( ifrHeight / scrHeight ) ) {
			w = scrWidth;
			h = ( scrWidth / ifrWidth ) * ifrHeight;
		} else {
			h = scrHeight;
			w = ( scrHeight / ifrHeight ) * ifrWidth;
		}

		return {
			'width': w - ( ifrPadding + ifrBorder ),
			'height': h - ( ifrPadding + ifrBorder )
		};
	};

	$( ".ui-popup iframe" )
		.attr( "width", 0 )
		.attr( "height", "auto" );

	$( "#popupVideo5" ).on({
		popupbeforeposition: function() {
			// call our custom function scale() to get the width and height
			var size = scale( 710, 400, 15, 1 ),
				w = size.width,
				h = size.height;

			$( "#popupVideo5 iframe" )
				.attr( "width", w )
				.attr( "height", h );
		},
		popupafterclose: function() {
			$( "#popupVideo5 iframe" )
				.attr( "width", 0 )
				.attr( "height", 0 )
				.attr( "src", "https://www.youtube.com/embed/0dbzda0PpJY?rel=0" );
		}
	});
});


//sive
$( document ).on( "pagecreate", function() {

	// The window width and height are decreased by 30 to take the tolerance of 15 pixels at each side into account
	function scale( width, height, padding, border ) {
		var scrWidth = $( window ).width() - 30,
			scrHeight = $( window ).height() - 30,
			ifrPadding = 2 * padding,
			ifrBorder = 2 * border,
			ifrWidth = width + ifrPadding + ifrBorder,
			ifrHeight = height + ifrPadding + ifrBorder,
			h, w;

		if ( ifrWidth < scrWidth && ifrHeight < scrHeight ) {
			w = ifrWidth;
			h = ifrHeight;
		} else if ( ( ifrWidth / scrWidth ) > ( ifrHeight / scrHeight ) ) {
			w = scrWidth;
			h = ( scrWidth / ifrWidth ) * ifrHeight;
		} else {
			h = scrHeight;
			w = ( scrHeight / ifrHeight ) * ifrWidth;
		}

		return {
			'width': w - ( ifrPadding + ifrBorder ),
			'height': h - ( ifrPadding + ifrBorder )
		};
	};

	$( ".ui-popup iframe" )
		.attr( "width", 0 )
		.attr( "height", "auto" );

	$( "#popupVideo6" ).on({
		popupbeforeposition: function() {
			// call our custom function scale() to get the width and height
			var size = scale( 710, 400, 15, 1 ),
				w = size.width,
				h = size.height;

			$( "#popupVideo6 iframe" )
				.attr( "width", w )
				.attr( "height", h );
		},
		popupafterclose: function() {
			$( "#popupVideo6 iframe" )
				.attr( "width", 0 )
				.attr( "height", 0 )
				.attr( "src", "https://www.youtube.com/embed/A1DYJw6dVqA?rel=0" );
		}
	});
});

//seven
$( document ).on( "pagecreate", function() {

	// The window width and height are decreased by 30 to take the tolerance of 15 pixels at each side into account
	function scale( width, height, padding, border ) {
		var scrWidth = $( window ).width() - 30,
			scrHeight = $( window ).height() - 30,
			ifrPadding = 2 * padding,
			ifrBorder = 2 * border,
			ifrWidth = width + ifrPadding + ifrBorder,
			ifrHeight = height + ifrPadding + ifrBorder,
			h, w;

		if ( ifrWidth < scrWidth && ifrHeight < scrHeight ) {
			w = ifrWidth;
			h = ifrHeight;
		} else if ( ( ifrWidth / scrWidth ) > ( ifrHeight / scrHeight ) ) {
			w = scrWidth;
			h = ( scrWidth / ifrWidth ) * ifrHeight;
		} else {
			h = scrHeight;
			w = ( scrHeight / ifrHeight ) * ifrWidth;
		}

		return {
			'width': w - ( ifrPadding + ifrBorder ),
			'height': h - ( ifrPadding + ifrBorder )
		};
	};

	$( ".ui-popup iframe" )
		.attr( "width", 0 )
		.attr( "height", "auto" );

	$( "#popupVideo7" ).on({
		popupbeforeposition: function() {
			// call our custom function scale() to get the width and height
			var size = scale( 710, 400, 15, 1 ),
				w = size.width,
				h = size.height;

			$( "#popupVideo7 iframe" )
				.attr( "width", w )
				.attr( "height", h );
		},
		popupafterclose: function() {
			$( "#popupVideo7 iframe" )
				.attr( "width", 0 )
				.attr( "height", 0 )
				.attr( "src", "https://www.youtube.com/embed/bPqqS2lc1tk?rel=0" );
		}
	});
});

//eight
$( document ).on( "pagecreate", function() {

	// The window width and height are decreased by 30 to take the tolerance of 15 pixels at each side into account
	function scale( width, height, padding, border ) {
		var scrWidth = $( window ).width() - 30,
			scrHeight = $( window ).height() - 30,
			ifrPadding = 2 * padding,
			ifrBorder = 2 * border,
			ifrWidth = width + ifrPadding + ifrBorder,
			ifrHeight = height + ifrPadding + ifrBorder,
			h, w;

		if ( ifrWidth < scrWidth && ifrHeight < scrHeight ) {
			w = ifrWidth;
			h = ifrHeight;
		} else if ( ( ifrWidth / scrWidth ) > ( ifrHeight / scrHeight ) ) {
			w = scrWidth;
			h = ( scrWidth / ifrWidth ) * ifrHeight;
		} else {
			h = scrHeight;
			w = ( scrHeight / ifrHeight ) * ifrWidth;
		}

		return {
			'width': w - ( ifrPadding + ifrBorder ),
			'height': h - ( ifrPadding + ifrBorder )
		};
	};

	$( ".ui-popup iframe" )
		.attr( "width", 0 )
		.attr( "height", "auto" );

	$( "#popupVideo8" ).on({
		popupbeforeposition: function() {
			// call our custom function scale() to get the width and height
			var size = scale( 710, 400, 15, 1 ),
				w = size.width,
				h = size.height;

			$( "#popupVideo8 iframe" )
				.attr( "width", w )
				.attr( "height", h );
		},
		popupafterclose: function() {
			$( "#popupVideo8 iframe" )
				.attr( "width", 0 )
				.attr( "height", 0 )
				.attr( "src", "https://www.youtube.com/embed/zZSyTiFlD4A?rel=0" );
		}
	});
});

