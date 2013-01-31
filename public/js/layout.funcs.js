(function() {
	/*
	|	layout.blade.php functions
	| common across site
	*/

	/* flexible footer */
	var windowHeight = window.innerHeight,
			headerHeight = $("header").height(),
			contentHeight = $("#content").height(),
			footerHeight = $("footer").height(),
			flexFooter = windowHeight - (headerHeight + contentHeight + footerHeight);
  function resizeFooter() {
    $(".flex-footer").css("min-height", flexFooter);
  }
  $(window).load(resizeFooter);
  // !!! only working on load
  $(window).resize(function() {
		//console.log(headerHeight + ' ' + contentHeight + ' ' + footerHeight + ' ' + flexFooter);
		resizeFooter();
  });
	/* setup nickname pronunciation player */
	var audio = $('<audio>', {
				id	: "nickSound",
				src : "/audio/jahdakine.wav",
				//autoPlay : 'autoPlay',
				controls : 'controls'
			}),
			nick_button = $("#nickButton"),
			nick_hide = $("#nickHide"),
			audio_wrap = $("#audioWrap");
	//create player and show dismiss
	nick_button.on('click', function(e) {
		e.preventDefault();
		audio_wrap.prepend(audio);
		audio_wrap.attr("style", "padding-top: 1em; margin-top: 1em;");
		audio_wrap.css("display", "inline");
	});
	//remove player and hide dismiss
	nick_hide.on('click', function(e) {
		e.preventDefault();
		audio_wrap.css("display", "none");
		audio_wrap.attr("style", "padding: 0; margin: 0;");
	});
	/*tooltips */
	//ordinary - blue style
	$('a[title],.href,.hover,.visited').qtip({
		def : false,
		position: {
			target: 'mouse',
			viewport: $(window)
		},
		style: {
			classes: 'qtip-blue'
		}
	});
	//definition - orange style
	$('acronym,dfn,abbr,.def').qtip({
		def : false,
		position: {
			target: 'mouse',
			viewport: $(window)
		},
		style: {
			classes: 'qtip-orange'
		}
	});
	//futuristic links created on the fly
	$('.flickr-img').live('mouseover', function(event) {
		$(this).qtip({
			overwrite: false,
			position: {
				target: 'mouse',
				viewport: $(window)
			},
			style: {
				classes: 'qtip-blue'
			},
			show: {
				event: event.type,
				ready: true
			}
		}, event);
	});
})();