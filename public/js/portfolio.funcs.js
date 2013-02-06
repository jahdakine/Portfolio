/*
| portfolio.blade.php functions
| for portfolio only
*/

(function() {
	/*setup tabs*/
	$("#projects").tabs();
	//cache DOM vars
	var project = $(".project"),
			clients = $(".clients"),
			tabs = $("#tabs"),
			box = $(".box"),
			body = $('html, body');
	//client tab clicks
	clients.on('click', function() {
		var tmp = this.innerHTML.replace(/\&.+/g, '').toLowerCase(),
				contentFrame = $(eval(tmp + "Frame"));
		box.empty();
	});
	//project clicks !!!use template for HTML
	project.on('click', function(e) {
		e.preventDefault();
		var tmp = $(this).closest("div").attr("id"),
				contentFrame = $(eval(tmp + "Frame"));
		box.empty();
		var title = decodeURI(this.innerHTML),
		data = "",
		filename = title.replace(/\s+/g,'_').toLowerCase(),
		frag = "'</h3><div><img src=\"/img/portfolio/'+ filename +'.jpg\" alt=\"Screenshot of '+ title +' project\"/ align=\"right\" class=\"project-img\"></div><div id=\"project-desc\">' + data + '</div></a>'";
		$.ajax({
			url: '/partials/' + filename + '.html',
			cache: false
			}).done(function(data) {
				contentFrame.html(eval(frag));
				contentFrame.slideDown("slow", function() {
					body.animate({ scrollTop: tabs.offset().top }, 'slow');
				});
			}).error(function(e) {
				contentFrame.html("There has been an error retrieving the project information.");
				contentFrame.slideDown("slow");
		});
	});
})();