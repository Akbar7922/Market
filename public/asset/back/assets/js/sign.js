$('#mobile_login').keypress(function (e) {
    if (e.which !== 8 && e.which !== 0 && (e.which < 48 || e.which > 57)) {
        $('#mobileError').fadeIn(200);
        $('#mobileError').text(' * فقط عدد وارد کنید.');
        return false;
    }
});

$('#loginBtn').click(function () {
    let mobile = $('#mobile_login').val();
    let password = $('#password');
    let isOK = true;
    if (!validateMobile(mobile)) {
        $('#mobileError').fadeIn(200);
        $('#mobileError').text('* شماره موبایل نامعتبر است');
        isOK = false;
    }
    if (!password.val()) {
        $('#passwordError').fadeIn(200);
        $('#passwordError').text('* رمزعبور اجباری است ');
        isOK = false;
    }

    if (isOK)
        $('form#loginForm').submit();

});

// Register Form

$('#mobile_register').keypress(function (e) {
    if (e.which !== 8 && e.which !== 0 && (e.which < 48 || e.which > 57)) {
        $('#mobileErrorRegister').fadeIn(200);
        $('#mobileErrorRegister').text(' * فقط عدد وارد کنید.');
        return false;
    }
});


$('#activationDiv input').keyup(function (e) {
    let id = $(this).attr('id');
    let value = $(this).val();
    let nextID = parseInt(id) + 1;
    if (e.keyCode === 8)
        if (parseInt(id) > 1) {
            $(this).empty();
            $('#' + (parseInt(id) - 1)).focus();
        } else
            $(this).empty();
    if ($.isNumeric(value))
        $('#' + nextID).focus();
    else
        $(this).val('');
});

$('#registerBtn').add('#validateCode').click(function () {
    getCode();
    let isLoginCode = $(this).attr('data-login');
    let code = $('input[name=code]').val();
    let url = $(this).attr('data-link');
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $(this).parent().find('input[name=_token]').val()
        },
        type: 'post',
        url: url,
        data: { 'code': code },
        success: function (data) {
            if (data.status == 200) {
                if(typeof isLoginCode != 'undefined' && isLoginCode == 1){
                    $('#loginCodeForm').submit();
                } else {
                    $('#signModal').modal('show');
                    if (typeof (isAdmin) != 'undefined')
                        $('#user_create_inputs').fadeIn(500);
                }
            } else
                wrongCode();
        },
        error: function () {

        }
    });
});

function wrongCode() {
    for (let i = 1; i <= 4; i++) {
        $('#' + i).empty();
        $('#' + i).css("border-color", 'red');
    }
    $('span#codeError').fadeIn(200);
    $('span#codeError').text(' * کدفعالسازی اشتباه است');
}

$('#sendCode').click(function () {
    let mobile = $('#mobile_register').add('#mobile').val();
    let url = $(this).attr('data-link');

    if (!validateMobile(mobile)) {
        $('#mobileErrorRegister').fadeIn(200);
        $('#mobileErrorRegister').text('* شماره موبایل نامعتبر است');
    } else
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('input[name=_token]').val()
            },
            type: 'POST',
            url: url,
            data: {
                'mobile': mobile
            },
            success: function (data) {
                if (data.status === 200) {
                    for (let i = 1; i <= 4; i++)
                        $('#' + i).prop("disabled", false);
                    $('#sendCode').addClass('disabled');
                    $('#sendCode').prop('disabled', true);
                    $('.code_timer').css('display', 'inline-block');
                    setTimer();
                } else
                    showErrorToast();
            },
            error: function (e) {
            }
        });
});

$('.close').add('#cancel_modal').click(function () {
    $('#signModal').modal('hide');
});
$('#submit_modal').click(function () {
    validateModal();
});

function validateModal() {
    let name = $('#name');
    let family = $('#family');
    let isOk = true;

    if (!name.val()) {
        $('#nameError').fadeIn(200);
        $('#nameError').text('* نام نامعتبر است');
        isOk = false;
    }
    if (!family.val()) {
        $('#familyError').fadeIn(200);
        $('#familyError').text('* نام خانوادگی نامعتبر است');
        isOk = false;
    }

    $('#mobile_modal').val($('#mobile_register').val());

    if (isOk)
        $('#registerForm').submit();
}

function setTimer() {
    let fiveSeconds = new Date().getTime() + 60000;
    $('#timer').countdown(fiveSeconds, { elapse: true })
        .on('update.countdown', function (event) {
            let $this = $(this);
            if (event.elapsed) {
                $this.html(event.strftime('<span style="text-align:center; color:red;">00:00</span>'));
                $('#sendCode').removeClass('disabled');
                $('#sendCode').prop('disabled', false);
            } else {
                $this.html(event.strftime('<span style="text-align:center; color:red;">%M:%S</span>'));
            }
        });
}

function getCode() {
    let code = $('#1').val() + $('#2').val() + $('#3').val() + $('#4').val();
    $('input[name=code]').val(code);
}


function validateMobile(val) {
    let regex = new RegExp('(0|98|0098)?([ ]|-|[()]){0,2}9[0-9]([ ]|-|[()]){0,2}(?:[0-9]([ ]|-|[()]){0,2}){8}');
    return regex.test(val);
}

function showErrorToast() {
    toastr.options = {
        "closeButton": false,
        "debug": true,
        "newestOnTop": true,
        "progressBar": false,
        "positionClass": "toast-bottom-center",
        "preventDuplicates": true,
        "onclick": null,
        "showDuration": "30000",
        "hideDuration": "100000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    };

    let title = "<span style='text-align: right;direction: rtl'> احرازهویت </span>";
    let body = "<span style='text-align: right;direction: rtl'> شما قبلا ثبت نام کرده اید! </span>";
    toastr.error(body, title);
}
