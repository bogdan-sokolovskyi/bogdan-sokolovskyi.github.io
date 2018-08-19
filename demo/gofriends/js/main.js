$(function() {

	// Mobile menu
	$("#menu").mmenu({
		extensions: [
			'widescreen',
			'theme-white',
			'effect-menu-slide',
			'pagedim-black',
			"effect-menu-zoom",
			"effect-listitems-slide"
		],
		offCanvas: {
			position: 'left',
			zposition: 'front',
		},
		navbar: {
			title: "Меню"
		}
	});
	//Toggle button
	$(".toggle-mnu").click(function() {
		$(this).toggleClass("on");
	});
	let api = $("#menu").data("mmenu");
	api.bind("closed", function () {
		$(".toggle-mnu").removeClass("on");
	});
	// End Mobile menu


	//Calendar
	let Cal = function(divId) {
		//Store div id
		this.divId = divId;
		// Days of week, starting on Sunday
		this.DaysOfWeek = ['Вс', 'Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб'];
		// Months, stating on January
		this.Months = ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь' ];
		// Set the current month, year
		let d = new Date();
		this.currMonth = d.getUTCMonth();
		this.currYear = d.getUTCFullYear();
		this.currDay = d.getUTCDate();
	};
	// Goes to next month
	Cal.prototype.nextMonth = function() {
		if ( this.currMonth == 11 ) {
			this.currMonth = 0;
			this.currYear = this.currYear + 1;
		}
		else {
			this.currMonth = this.currMonth + 1;
		}
		this.showcurr();
	};
	// Goes to previous month
	Cal.prototype.previousMonth = function() {
		if ( this.currMonth == 0 ) {
			this.currMonth = 11;
			this.currYear = this.currYear - 1;
		}
		else {
			this.currMonth = this.currMonth - 1;
		}
		this.showcurr();
	};
	// Show current month
	Cal.prototype.showcurr = function() {
		this.showMonth(this.currYear, this.currMonth);
	};
	// Show month (year, month)
	Cal.prototype.showMonth = function(y, m) {
		let d = new Date()
			// First day of the week in the selected month
			, firstDayOfMonth = new Date(y, m, 1).getUTCDay()
			// Last day of the selected month
			, lastDateOfMonth =  new Date(y, m+1, 0).getUTCDate()
			// Last day of the previous month
			, lastDayOfLastMonth = m == 0 ? new Date(y-1, 11, 0).getUTCDate() : new Date(y, m, 0).getUTCDate();

		let html = '<table>';
		// Write selected month and year
		html += '<thead><tr>';
		html += '<td colspan="7">' + this.Months[m] + ' ' + y + '</td>';
		html += '</tr></thead>';

		// Write the header of the days of the week
		/*html += '<tr class="days">';
		for(var i=0; i < this.DaysOfWeek.length;i++) {
			html += '<td>' + this.DaysOfWeek[i] + '</td>';
		}
		html += '</tr>';*/

		// Write the days
		let i=1;
		do {
			let dow = new Date(y, m, i).getUTCDay();
			// If Sunday, start new row
			if ( dow == 0 ) {
				html += '<tr>';
			}
			// If not Sunday but first day of the month
			// it will write the last days from the previous month
			else if ( i == 1 ) {
				html += '<tr>';
				let k = lastDayOfLastMonth - firstDayOfMonth+1;
				for(let j=0; j < firstDayOfMonth; j++) {
					html += '<td class="not-current">' + k + '</td>';
					k++;
				}
			}
			// Write the current day in the loop
			let chk = new Date();
			let chkY = chk.getUTCFullYear();
			let chkM = chk.getUTCMonth();
			if (chkY == this.currYear && chkM == this.currMonth && i == this.currDay) {
				html += '<td class="today">' + i + '</td>';
			}
			else if (chkY == this.currYear && chkM == this.currMonth && (i >= 26 && i <=30)){
				html += '<td class="normal active">' + i + '</td>';
			}
			else {
				html += '<td class="normal">' + i + '</td>';
			}
			// If Saturday, closes the row
			if ( dow == 6 ) {
				html += '</tr>';
			}
			// If not Saturday, but last day of the selected month
			// it will write the next few days from the next month
			else if ( i == lastDateOfMonth ) {
				let k=1;
				for(dow; dow < 6; dow++) {
					html += '<td class="not-current">' + k + '</td>';
					k++;
				}
			}
			i++;
		}while(i <= lastDateOfMonth);
		// Closes table
		html += '</table>';
		// Write HTML to the div
		document.getElementById(this.divId).innerHTML = html;
	};

	function dayOff(){
		let divCalTR = document.querySelectorAll('#divCal tr');
		//Day off
		for(let i = 1; i < divCalTR.length; i++){
			for(let j = 0; j < divCalTR[i].children.length; j++){
				if(j == 5 || j == 6){
					divCalTR[i].children[j].classList.add('dayoff');
				}
			}
		}
	}
	// On Load of the window
	window.onload = function() {
		let divCal = document.querySelector('#divCal');
		// Start calendar
		let c = new Cal("divCal");
		c.showcurr();
		// Bind next and previous button clicks
		getId('btnNext').onclick = function() {
			c.nextMonth();
			//Day off
			dayOff();
		};
		getId('btnPrev').onclick = function() {
			c.previousMonth();
			//Day off
			dayOff();
		};
		divCal.addEventListener('click', function (e) {
			let self = e.target;
			if(self.tagName == 'TD' && self.parentElement.parentElement.tagName == 'TBODY'){
				self.classList.toggle('active');
			}
		}, false);

		//Day off
		dayOff();
	};
	// Get element by id
	function getId(id) {
		return document.getElementById(id);
	}
	//End Calendar


	//Equal Height
	function equalFunc() {
		if (window.innerWidth > 576) {
			$('.section-2-boxses-box p').height('auto').equalHeights();
		}
		else{
			$('.section-2-boxses-box p').height('auto');
		}
	}
	window.addEventListener("load", equalFunc);
	window.addEventListener("resize", equalFunc);
	//END Equal Height


	//Section 4 Owl Carousel
		var sync1 = $("#sync1");
		var sync2 = $("#sync2");
		var slidesPerPage = 5; //globaly define number of elements per page
		var syncedSecondary = true;

		sync1.owlCarousel({
			items: 1,
			slideSpeed: 5000,
			nav: true,
			autoplay: true,
			dots: false,
			loop: true,
			responsiveRefreshRate: 200,
			navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
		}).on('changed.owl.carousel', syncPosition);

		sync2
			.on('initialized.owl.carousel', function() {
				sync2.find(".owl-item").eq(0).addClass("current");
			})
			.owlCarousel({
				items: slidesPerPage,
				dots: false,
				nav: false,
				smartSpeed: 200,
				slideSpeed: 500,
				slideBy: slidesPerPage, //alternatively you can slide by 1, this way the active slide will stick to the first item in the second carousel
				responsiveRefreshRate: 100
			}).on('changed.owl.carousel', syncPosition2);

		function syncPosition(el) {
			//if you set loop to false, you have to restore this next line
			//var current = el.item.index;

			//if you disable loop you have to comment this block
			var count = el.item.count - 1;
			var current = Math.round(el.item.index - (el.item.count / 2) - .5);

			if (current < 0) {
				current = count;
			}
			if (current > count) {
				current = 0;
			}

			//end block

			sync2
				.find(".owl-item")
				.removeClass("current")
				.eq(current)
				.addClass("current");
			var onscreen = sync2.find('.owl-item.active').length - 1;
			var start = sync2.find('.owl-item.active').first().index();
			var end = sync2.find('.owl-item.active').last().index();

			if (current > end) {
				sync2.data('owl.carousel').to(current, 100, true);
			}
			if (current < start) {
				sync2.data('owl.carousel').to(current - onscreen, 100, true);
			}
		}

		function syncPosition2(el) {
			if (syncedSecondary) {
				var number = el.item.index;
				sync1.data('owl.carousel').to(number, 100, true);
			}
		}

		sync2.on("click", ".owl-item", function(e) {
			e.preventDefault();
			var number = $(this).index();
			sync1.data('owl.carousel').to(number, 300, true);
		});
	//End Section 4 Owl Carousel

});
