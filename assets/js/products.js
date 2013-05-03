function setProductGroup(id) {
	$.get('http://routerboard.com/?ajax=products&group_id=' + id, function (data) {
		$("#product_list").html(data);
		showFilters(id);
		applyFilters();
	});
}
function showFilters(id) {
	$(".filterClass").hide();
	if (id == 11 || id == 15) {
		$("#routerBoardClass").show();
	} else if (id == 12) {
		$("#enclosuresClass").show();
	} else if (id == 13) {
		$("#interfacesClass").show();
	}
}
$('#compare_box').ready(function () {
	var cookie = $.cookie('compareProducts');
	if (cookie) {
		$(cookie.split('||||')).each(function (index, value) {
			if (value) {
				setCompareProduct(value);
			}
		});
	}
});
$(document).ready(function () {
	setSlider();
	document.createElement('nav');
	document.createElement('header');
	document.createElement('footer');
	$("#prduslider").anythingSlider({height: 280, width: 920, resizeContents: false, autoPlay: true, buildStartStop: false, startStopped: true, buildNavigation: false, easing: "swing", delay: 6000, animationTime: 600});
});


