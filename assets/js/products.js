function setProductGroup(id) {
	$.ajax({
		method: 'post',
		url: BASE_URL + 'products/index/',
		data: {id: id},
		complete: function (data) {
			var products=eval(data.responseText);
			console.log(products);
			for (var key in products){
				var product = products[key];
				var code = product['code'];
				var description = product['description'];
				var group_id = product['group_id'];
				var group_name = product['group_name'];
				var image_id = product['image_id'];
				var info = product['info'];
				var name = product['name'];
				var position = product['position'];
				var price = product['price'];
				var product_id = product['product_id'];
				var url = product['url'];
				$('#product_list').append('<div class="product_box product_title group_class_' + group_id + '">' +
					'<h3><a href="/routerboard/products/view/' + product_id + '">' +
					''+name+'</a></h3>' +
					'</div>')
			}
		showFilters(id);
		applyFilters();
		}
	});
}
function showFilters(id) {
	$(".filterClass").hide();
	if (id == 1 || id == 2) {
		$("#routerBoardClass").show();
	} else if (id == 3) {
		$("#enclosuresClass").show();
	} else if (id == 4) {
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


