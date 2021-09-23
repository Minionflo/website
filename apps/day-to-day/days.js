const oneDay = 24 * 60 * 60 * 1000;
const start = new Date(2021, 01, 01, 00, 00, 00, 00)
const stop = new Date(2021, 01, 01, 00, 00, 00, 00)

function days() {
    var from = document.getElementById("start").value;
    var until = document.getElementById("stop").value;
    date(from, start)
    date(until, stop)
    document.getElementById("result").innerHTML = Math.round(Math.abs((start - stop) / oneDay)) + " Days"
}


function date(input, date) {
    var output = input.split("-")
    date.setFullYear(output[0])
    date.setMonth(output[1] - 1)
    date.setDate(output[2])
}