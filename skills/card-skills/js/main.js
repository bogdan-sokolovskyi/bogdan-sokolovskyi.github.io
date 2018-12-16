$(document).ready(function() {

    // Если в проекте используются встроенные js-плагины от Foundation, разкомментировать
    // $(document).foundation();

	// TODO
	$(document).scroll(render);
	function render () {
		var oTop = $('.level-counter, .level-gauge').offset().top - window.innerHeight + 140;
		if ($(window).scrollTop() > oTop) {
			$('.level-counter-value').each(function() {
				var $this = $(this),
					countTo = $this.attr('data-count');
				$({
					countNum: $this.text()
				}).animate({countNum: countTo	},
					{
						duration: 2200,
						easing: 'swing',
						step: function() {
							$this.text(Math.floor(this.countNum));
						},
						complete: function() {
							$this.text(this.countNum);
						}
					});
			});

			function runAllGauges()
			{
				var gauges = $('.level-gauge');
				$.each(gauges, function(){
					var gauge = this;
					setTimeout(function(){
						var percentage = $(gauge).data('percentage') / 1000;
						var degrees = 180 * percentage;
						var pointerDegrees = degrees - 60;
						var pointer = $(gauge).find('.level-gauge-pointer');
						$(pointer).attr({
							style: '-webkit-transform: rotate(' + pointerDegrees + 'deg);' +
							'-ms-transform: rotate(' + pointerDegrees + 'deg);' +
							'-moz-transform: rotate(' + pointerDegrees + 'deg);' +
							'-o-transform: rotate(' + pointerDegrees + 'deg);' +
							'transform: rotate(' + pointerDegrees + 'deg);'
						});
					});
				});
			}
			runAllGauges();
		}
	}
	render();

});