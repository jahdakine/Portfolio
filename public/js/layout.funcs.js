(function() {
	//setup nickname pronunciation player
	var audio = $('<audio>', {
				id : "nickSound",
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
		nick_hide.css("display", "inline");
		audio_wrap.html(audio);
		audio_wrap.attr("style", "padding-top: 1em;");
	});
	//remove player and hide dismiss
	nick_hide.on('click', function(e) {
		e.preventDefault();
		nick_hide.css("display", "none");
		audio_wrap.empty();
		audio_wrap.attr("style", "padding: 0;");
	});
})();