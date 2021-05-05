const DNotification = window.createNotification({
  // close on click
  closeOnClick: true,

  // displays close button
  displayCloseButton: true,

  // nfc-top-left
  // nfc-bottom-right
  // nfc-bottom-left
  positionClass: 'nfc-bottom-right',

  // callback
  onclick: false,

  // timeout in milliseconds
  showDuration: 1500,

  // success, info, warning, error, and none
  theme: 'success'
});

function copydiscordflo() {
  const el = document.createElement('textarea');
  el.value = "FLO#8213";
  el.setAttribute('readonly', '');
  el.style.position = 'absolute';
  el.style.left = '-9999px';
  document.body.appendChild(el);
  el.select();
  document.execCommand('copy');
  document.body.removeChild(el);
  DNotification({
    title: 'Kopiert',
    message: 'Discord Name in die Zwischenablage kopiert'
  })
};