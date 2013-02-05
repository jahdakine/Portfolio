/*
| portfolio.blade.php functions
| for portfolio only
*/

(function() {
	//cache DOM vars
	var project = $(".project");
	/*setup tabs*/
	$("#projects").tabs();
	/* project clicks !!!use template for HTML */
	project.on('click', function(e) {
		var tmp = $(this).closest("div").attr("id"),
				contentFrame = $(eval(tmp + "Frame"));
		e.preventDefault();
		if(contentFrame.css("display") !== "none") {
			contentFrame.empty();
		}
		var title = decodeURI(this.innerHTML),
		data = "",
		filename = title.replace(/\s+/g,'_').toLowerCase(),
		frag = "'</h3><div><img src=\"/img/portfolio/'+ filename +'.jpg\" alt=\"Screenshot of '+ title +' project\"/ align=\"right\" class=\"project-img\"></div><div id=\"project-desc\">' + data + '</div></a>'";
		$.ajax({
			url: '/partials/' + filename + '.html',
			cache: false
			}).done(function(data) {
				contentFrame.html(eval(frag));
				contentFrame.slideDown("slow");
			}).error(function(e) {
				contentFrame.html("There has been an error retrieving the project information.");
				contentFrame.slideDown("slow");
		});
	});
})();