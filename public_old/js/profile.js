const DNotification = window.createNotification({
    closeOnClick: true,
    displayCloseButton: true,
    positionClass: 'nfc-bottom-right',
    onclick: false,
    showDuration: 3000,
    theme: 'success'
});


function copy_email() {
    const el = document.createElement('textarea');
    var email = document.getElementById("email").innerText
    el.value = email.replace("E-Mail: ", "");
    el.setAttribute('readonly', '');
    el.style.position = 'absolute';
    el.style.left = '-9999px';
    document.body.appendChild(el);
    el.select();
    document.execCommand('copy');
    document.body.removeChild(el);
    DNotification({
        title: 'Email copied',
        message: 'Copied your email to your Clipboard'
    })
};

function copy_username() {
    const el = document.createElement('textarea');
    var username = document.getElementById("username").innerText
    el.value = username.replace("Username: ", "");
    el.setAttribute('readonly', '');
    el.style.position = 'absolute';
    el.style.left = '-9999px';
    document.body.appendChild(el);
    el.select();
    document.execCommand('copy');
    document.body.removeChild(el);
    DNotification({
        title: 'Username copied',
        message: 'Copied your Username to your Clipboard'
    })
};

function copy_uid() {
    const el = document.createElement('textarea');
    var username = document.getElementById("uid").innerText
    el.value = username.replace("UID: ", "");
    el.setAttribute('readonly', '');
    el.style.position = 'absolute';
    el.style.left = '-9999px';
    document.body.appendChild(el);
    el.select();
    document.execCommand('copy');
    document.body.removeChild(el);
    DNotification({
        title: 'UID copied',
        message: 'Copied your UID to your Clipboard'
    })
};