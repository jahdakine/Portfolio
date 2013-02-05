/*
| portfolio.blade.php functions
| for portfolio only
*/

(function() {
	//cache DOM vars
	content_frame = $("#contentFrame"),
	project_hide = $("#projectHide"),
	project = $(".project");
	/*setup tabs*/
	$("#projects").tabs();
	/* project clicks !!!use template for HTML */
	project.on('click', function(e) {
		e.preventDefault();
		if(content_frame.css("display") !== "none") {
			content_frame.fadeOut("fast");
		}
		var title = decodeURI(this.innerHTML),
		data = "",
		filename = title.replace(/\s+/g,'_').toLowerCase(),
		frag = "'</h3><div><img src=\"/img/portfolio/'+ filename +'.jpg\" alt=\"Screenshot of '+ title +' project\"/ align=\"left\" class=\"project-img\">' + data + '</div></a>'";
		$.ajax({
			url: '/partials/' + filename + '.html',
			cache: false
			}).done(function(data) {
				content_frame.html(eval(frag));
				content_frame.slideDown("slow");
			}).error(function(e) {
				content_frame.html("There has been an error retrieving the project information.");
				content_frame.slideDown("slow");
		});
	});
	/* dismiss project click */
	project_hide.on('click', function(e) {
		e.preventDefault();
		content_frame.slideUp("slow");
	});
})();