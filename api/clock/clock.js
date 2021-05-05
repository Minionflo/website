function time() {
  var time = document.getElementById('time');
  var gate = new Date();
  var s = gate.getSeconds();
  var m = gate.getMinutes();
  var h = gate.getHours();
  time.textContent = ("0" + h).substr(-2) + ":" + ("0" + m).substr(-2) + ":" + ("0" + s).substr(-2);
}
function date() {
  var date = document.getElementById('date');
  var gate = new Date();
  var d = gate.getDate();
  var M = gate.getMonth();
  var M = M+1
  var y = gate.getFullYear();
  date.textContent =  ("0" + d).substr(-2) + "." + ("0" + M).substr(-2) + "." + ("0" + y).substr(-4);
}
function start() {
  setInterval(time, 1000);
  setInterval(date, 1000);
}