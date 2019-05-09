$(document).ready(function () {

	$(".image").click(function () {
		var img = $(this);
		var src = img.attr('src');
		$("body").append("<div class='popup'>" +
			"<div class='popup_bg'></div>" +
			"<img src='" + src + "' class='popup_img' />" +
			"</div>");
		$(".popup").fadeIn(300);
		$(".popup_img").click(function () {
			$(".popup").fadeOut(300);
			setTimeout(function () {
				$(".popup").remove();
			}, 300);
		});
	});

});

Vue.filter('currency', function (value) {
	return '₽ ' + value.toFixed(2);
});

var demo = new Vue({
	el: '#main',
	data: {
		services: [
			{
				name: 'Деревянные',
				price: 5000,
				active: false
			}, {
				name: 'Пластиковые',
				price: 7000,
				active: false
			}, {
				name: 'Балконные',
				price: 4500,
				active: false
			}, {
				name: 'Одностворчатые',
				price: 2200,
				active: false
			}, {
				name: 'Двустворчатые',
				price: 3800,
				active: false
			}, {
				name: 'Прямоуголные',
				price: 500,
				active: false
			}, {
				name: 'Круглые',
				price: 300,
				active: false
			}, {
				name: 'Арочные',
				price: 450,
				active: false
			}, {
				name: 'Треугольные',
				price: 650,
				active: false
			}, {
				name: 'Замер',
				price: 1575,
				active: false
			}, {
				name: 'Установка',
				price: 2560,
				active: false
			}
		]
	},
	methods: {
		toggleActive: function (s) {
			s.active = !s.active;
		},
		total: function () {

			var total = 0;

			this.services.forEach(function (s) {
				if (s.active) {
					total += s.price;
				}
			});

			return total;
		}
	}
});

$(document).ready(function () {
	$.ajax({
		url: 'js/script',
		method: 'POST',
		data: $('form').serialize(),
		success: function () {
			alert('Заявка отправлена!')
		}
	});
})