$(document).ready(function(){
    vasa();
});

function vasa() {
    $("#phone2").intlTelInput({
        initialCountry: "ua",
        geoIpLookup: function (callback) {
            $.get("http://ipinfo.io", function () {
            }, "jsonp").always(function (resp) {
                var countryCode = (resp && resp.country) ? resp.country : "";
                callback(countryCode);
            });
        },
        preferredCountries: ['ua', 'ru', 'kz'],
        separateDialCode: true,
        utilsScript: "js/utils.js"
    });
}

$('.input-hint.open-button').on('click', function(){
    $('.close-block').addClass('open');
})

$('.first-step').submit(function(event){
    var _this = $(this);
    event.preventDefault();

    var name = _this.find('.firstName').val();
    var surname = _this.find('.lastName').val();
    var phone = _this.find('.selected-dial-code').text() + _this.find('.phone').val();
    var email = _this.find('.email').val();

    var data = {
        'name': name,
        'surname': surname,
        'phone': phone,
        'email': email
    };

    if( _this.hasClass('form-submitted') ){
        return false;
    } else {
        $('.first-step').addClass('form-submitted');

        if ((_this.find('.checkbox').is(':checked'))) {
            $.ajax({
                url: 'https://tstpr10.gerchikco.com/lead-api/send-sms-heat-code',
                data: data,
                method: 'POST',
                dataType: 'json',
                success: function(data) {
                    // console.log(data);
                    if (!data.success) {

                        if (data.msg.hasOwnProperty('name')) {
                            _this.find('.firstName').closest('.input-block').addClass('error');
                            var messages = data.msg['name'];
                            _this.find('.firstName').closest('.input-block').find('.error-message').text(messages);
                        }

                        if (data.msg.hasOwnProperty('surname')) {
                            _this.find('.lastName').closest('.input-block').addClass('error');
                            var messages = data.msg['surname'];
                            _this.find('#lastName').closest('.input-block').find('.error-message').text(messages);
                        }

                        if (data.msg.hasOwnProperty('phone')) {
                            if (data.msg.phone[0] == "1") {
                                _this.parent().find('.overlay-success.overlay-email-used').addClass('active');

                                $('.first-step').removeClass('form-submitted');
                                return false;
                            } else {
                                _this.find('.phone').closest('.input-block').addClass('error');
                                var messages = data.msg['phone'];
                                _this.find('.phone').closest('.input-block').find('.error-message').text(messages);

                            }
                        }

                        if (data.msg.hasOwnProperty('email')) {
                            if (data.msg.email[0] == "1") {
                                _this.parent().find('.overlay-success.overlay-email-used').addClass('active');

                                $('.first-step').removeClass('form-submitted');
                                return false;
                            } else {
                                _this.find('.email').closest('.input-block').addClass('error');
                                var messages = data.msg['email'];
                                _this.find('.email').closest('.input-block').find('.error-message').text(messages);
                            }
                        }

                        $('.first-step').removeClass('form-submitted');
                        return false;
                    } else {
                        // console.log('success');
                    }
                    _this.parent().find(".email-verificate").val(_this.find('.email').val());


                    var current_fs, next_fs, previous_fs;
                    var left, opacity, scale;
                    var animating;

                    if(animating) return false;
                    animating = true;

                    current_fs = _this;
                    next_fs = _this.next();

                    //show the next fieldset
                    next_fs.show();
                    //hide the current fieldset with style
                    current_fs.animate({opacity: 0}, {
                        step: function(now, mx) {
                            //as the opacity of current_fs reduces to 0 - stored in "now"
                            //1. scale current_fs down to 80%
                            scale = 1 - (1 - now) * 0;
                            //2. bring next_fs from the right(50%)
                            left = (now * 50)+"%";
                            //3. increase opacity of next_fs to 1 as it moves in
                            opacity = 1 - now;
                            current_fs.css({
                                'transform': 'scale('+scale+')',
                                'position': 'absolute'
                            });
                            next_fs.css({'left': left, 'opacity': opacity, 'display': 'flex'});
                        },
                        duration: 800,
                        complete: function(){
                            current_fs.hide();
                            animating = false;
                        },
                        //this comes from the custom easing plugin
                        easing: 'easeInOutBack'
                    });

                },
                error: function(data) {
                    // need field where I can show some error information
                }
            });

            if(!(_this.find('.checkbox').is(':checked'))) {
                _this.find('.checkbox_wrapper').removeClass('error');
            }

        } else {
            _this.find('.checkbox_wrapper').addClass('error');
            $('.first-step').removeClass('form-submitted');
        }
    };
});

$('.form-prevent').submit(function(event){
    event.preventDefault();
});
$('.form-submitted').submit(function(event){
    event.preventDefault();
    // console.log('form-submitted');
});


$('.confirm-code').on('click', function(){

    var _this = $(this).parent('.form-prevent');

    $('.form-prevent .button').addClass('disable');

    var phone = _this.parent().find('.selected-dial-code').text() + _this.parent().find('.phone').val();
    var code = _this.find('.code').val();



    var data = {
        'phone': phone,
        'code': code
    };

    if( _this.hasClass('form-submitted') ){
        // console.log(_this.hasClass('form-submitted'), phone, code);
        return false;
    } else {
        _this.addClass('form-submitted');

        // console.log('phone, code');
        $.ajax({
            url: 'http://tstpr10.gerchikco.com/lead-api/heat',
            data: data,
            method: 'POST',
            dataType: 'json',
            success: function(data) {
                if (!data.success) {
                    if (data.msg.hasOwnProperty('code')) {
                        _this.find('.code').closest('.input-block').addClass('error');
                        var messages = data.msg['code'];
                        _this.find('.code').closest('.input-block').find('.error-message').text(messages);
                    }
                    $('.form-prevent .button').removeClass('disable');
                    _this.removeClass('form-submitted');

                    return false;
                } else {
                    window.location.replace(data.msg);
                }
            }
        })
    }
});




$('.email-confirm').on('click', function(){

    var _this = $(this).parent('.form-prevent');

    $('.form-prevent .button').addClass('disable');

    var email = _this.find('.email-verificate').val();

    var data = {
        'email': $(".email-verificate").val()
    };


    if( _this.find('.email-confirm').hasClass('form-submitted') ){
        return false;
    } else {
        _this.find('.email-confirm').addClass('form-submitted');

        // console.log(data);
        $.ajax({
            url: 'http://tstpr10.gerchikco.com/lead-api/heat-email',
            data: data,
            method: 'POST',
            dataType: 'json',
            success: function(data) {
                if (!data.success) {
                    if (data.msg.hasOwnProperty('email')) {
                        $('.email-verificate').closest('.input-block').addClass('error');
                        var messages = data.msg['email'];
                        $('.email-verificate').closest('.input-block').find('.error-message').text(messages);
                    }

                    $('.form-prevent .button').removeClass('disable');

                    return false;
                } else {
                    $('.overlay-email-success').addClass('active');
                }
            }
        });
    }
});
