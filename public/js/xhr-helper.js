function xhr(url) {
	$.getJSON(url, function(data) {
		var html = "";
		$.each(data.items, function(i,item) {
			
			html += '<a href="' + item.link + '" target="_blank"><img src="' + item.media.m + '" /></a>';
		});
		console.log(html);
		return html;
	});
}