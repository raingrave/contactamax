const Auth = {
    logout () {
        $('#bt-logout').on('click', function (event) {
            event.preventDefault()
            $('#logout-form').submit()
        })
    }
}

Auth.logout()