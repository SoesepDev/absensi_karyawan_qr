$(document).ready(function () {
    $('#form_login').on('submit', function (e) {
        e.preventDefault();
        console.log($(this).serialize());

        $.ajax({
            url: '?api=auth-login',
            type: 'POST',
            data: $(this).serialize(),
            dataType: 'json',
            success: function (res) {
                if (res.success) {
                    window.location.href = res.redirect;
                } else {
                    alert(res.message);
                }
            },
            error: function () {
                alert('Terjadi kesalahan saat menghubungi server.');
            },
            complete: function () {
                
            }
        });
    });
});