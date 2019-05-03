$(document).ready(function () { // Ждём загрузки страницы

	$(".image").click(function () {	// Событие клика на маленькое изображение
		var img = $(this);	// Получаем изображение, на которое кликнули
		var src = img.attr('src'); // Достаем из этого изображения путь до картинки
		$("body").append("<div class='popup'>" + //Добавляем в тело документа разметку всплывающего окна
			"<div class='popup_bg'></div>" + // Блок, который будет служить фоном затемненным
			"<img src='" + src + "' class='popup_img' />" + // Само увеличенное фото
			"</div>");
		$(".popup").fadeIn(300); // Медленно выводим изображение
		$(".popup_img").click(function () {	// Событие клика на затемненный фон	   
			$(".popup").fadeOut(300);	// Медленно убираем всплывающее окно
			setTimeout(function () {	// Выставляем таймер
				$(".popup").remove(); // Удаляем разметку всплывающего окна
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
		// Определяем свойства модели, представление будет проходить циклом
		// по массиву услуг и генерировать элементы списка
		// для каждого вложенного пункта.
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