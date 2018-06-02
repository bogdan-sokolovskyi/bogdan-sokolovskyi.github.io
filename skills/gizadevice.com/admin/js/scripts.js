$(function() {

	//Choose Drop Menu
	$('#lang-menu').each(function(){
		var $dropdown = $(this);
		// Add open class on click
		$('#lang-menu').on('click',function(){
			if($dropdown.hasClass('cls-border-lang')){
				$dropdown.removeClass("cls-border-lang");
				$dropdown.children().eq(0).removeClass("cls-borderbottom-lang");
				$("#lang-menu ul").stop().slideToggle(100);
			} else{
				$dropdown.addClass("cls-border-lang");
				$dropdown.children().eq(0).addClass("cls-borderbottom-lang");
				$("#lang-menu ul").stop().slideToggle(100);
			}
		});

		/// click languages
		$("#lang-menu ul li").on("click", function()
		{
			//select lang and apply changes
			$lang = $(this).html();
			$("#lang-menu div p").html($lang);
		});

		// Outer click
		$(document).on("click", function(event){
			if($dropdown !== event.target && !$dropdown.has(event.target).length) {
				if ($dropdown.hasClass('cls-border-lang')) {
					$dropdown.removeClass("cls-border-lang");
					$dropdown.children().eq(0).removeClass("cls-borderbottom-lang");
					$("#lang-menu ul").stop().slideToggle(100);
				}
			}
		});
	});
	// END Choose Drop Menu

	// setTimout is not necessary
	setTimeout(function() {

		$('.recaptcha').each(function() {
			grecaptcha.render(this.id, {
				'sitekey': '6LdVkwkUAAAAACeeETRX--v9Js0vWyjQOTIZxxeB',
				"theme":"white"
			});
		});

	}, 2000);


});

//COPY KEY
(function() {
	window.onload = function() {
		var copy_btn;
		copy_btn = document.querySelector('.copy-key-btn');
		return copy_btn.addEventListener('click', function(event) {
			var err, msg, successful, text;
			text = document.querySelector('.copy-key-text');
			text.select();
			try {
				successful = document.execCommand('copy');
				msg = successful ? 'successful' : 'unsuccessful';
				return console.log('Copy command was ' + msg);
			} catch (error) {
				err = error;
				return console.log('Oops, unable to copy');
			}
		});
	};

}).call(this);
