const DNotification = window.createNotification({
    closeOnClick: true,
    displayCloseButton: true,
    positionClass: 'nfc-bottom-right',
    onclick: false,
    showDuration: 3000,
    theme: 'success'
});

function log () {
    if(getParameterByName('login') == "true") {
        DNotification({
            title: 'Logged in',
            message: 'Succesful logged in'
        })
    }
    if (getParameterByName('logout') == "true") {
        DNotification({
            title: 'Logged out',
            message: 'Succesful logged out'
        })
    }
}