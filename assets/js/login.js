$(() => {
    // # => id,
    // . => class
    $('#btnLogin').click(function() {

        let formData = $('#formLogin').serialize();

        let username = $('input[name="username"]').val();
        let password = $('input[name="password"]').val();

        $.ajax({
            url: base_url('login/checkLogin'),
            type: 'GET',
            data: {
                username: username,
                password: password,
            },
            dataType: 'json',
            success: function(res) {
                if (res.result == true) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Success!',
                        html: res.message,
                        timer: 3000
                      }).then(() => {
                        window.location.href = base_url('Dashboard/dashboard')
                      })

                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error!',
                        html: res.message,
                      })
                }
            }
        })
    })
})