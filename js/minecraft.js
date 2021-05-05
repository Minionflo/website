const DNotification = window.createNotification({
  closeOnClick: true,
  displayCloseButton: true,
  positionClass: 'nfc-bottom-right',
  onclick: false,
  showDuration: 3000,
  theme: 'success'
});
  
function copyip() {
    const el = document.createElement('textarea');
    el.value = "Minionflo.net";
    el.setAttribute('readonly', '');
    el.style.position = 'absolute';
    el.style.left = '-9999px';
    document.body.appendChild(el);
    el.select();
    document.execCommand('copy');
    document.body.removeChild(el);
    DNotification({
      title: 'IP Copied',
      message: 'Minecraft Server IP in die Zwischenablage kopiert'
    })
  };