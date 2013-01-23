function xhr(url) {
	$.getJSON(url, function(data) {
		var html = "";
		$.each(data.items, function(i,item) {
			//this is going to be different each time
			html += '<a href="' + item.link + '" target="_blank"><img src="' + item.media.m + '" /></a>';
		});
		console.log(html);
		return html;
	});
}