$(function() {
    var path = window.location.href;
    $('a.nav-link').each(function() {
        if (this.href === path) {
            $(this).addClass('active');
        }
    });
});

$("input[type=radio]").on('change', function () {
    var i = $('input:checked').val();
    if (i == "customer") {
        $('div.form-floating#enterprise').hide();
    }
    else {
        $('div.form-floating#enterprise').show();
    }
    console.log(i);
});


