(function() {
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
		audio_wrap.attr("style", "padding-top: 1em;");
		audio_wrap.css("display", "inline");
	});
	//remove player and hide dismiss
	nick_hide.on('click', function(e) {
		e.preventDefault();
		audio_wrap.css("display", "none");
		audio_wrap.attr("style", "padding: 0;");
	});
	/* make footer flexible */
  $(window).load(resizeFooter);
  $(window).resize(resizeFooter);
  // Dynamically resize footer to fill page, IE8 doesn't like this.
  function resizeFooter() {
    var windowHeight = window.innerHeight,
				headerHeight = $("header").height(),
				contentHeight = $("#content").height(),
				footerHeight = $("footer").height(),
				flexFooter = windowHeight - (headerHeight + contentHeight + footerHeight +50);
    $(".flex-footer").css("min-height", flexFooter);
  }
})();