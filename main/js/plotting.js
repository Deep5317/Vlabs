var displayMobile = 0,
    v1 = [],
    i1 = 0,
    shapeM = 0,
    changeValueM = 0,
    changeValue1M = 0,
    changeValue2M = 0,
    changeValue3M = 0,
    changeValue4M = 0;

function LetsStartM() {
    //access canvas and its context
    var canvas1 = document.getElementById("my_canvas1");
    var ctx1 = canvas1.getContext("2d");


    if (displayMobile == 0) {
        setTimeout(rectangleM, 100);
        displayMobile = 1;
    }

}

function rectangleM() {
    var canvas1 = document.getElementById("my_canvas1");
    var ctx1 = canvas1.getContext("2d");
    ctx1.beginPath();
    ctx1.lineWidth = 2;
    ctx1.rect(90, 130, 120, 120);
    // ctx.rect(270, 100, 120, 120);
    ctx1.strokeStyle = '#000000';
    ctx1.stroke();
    setTimeout(rectangleM1, 1000)
}

function rectangleM1() {
    var canvas1 = document.getElementById("my_canvas1");
    var ctx1 = canvas1.getContext("2d");
    ctx1.beginPath();
    ctx1.lineWidth = 2;
    // ctx.rect(210, 150, 120, 120);
    ctx1.rect(150, 80, 120, 120);
    ctx1.strokeStyle = '#000000';
    ctx1.stroke();
    setTimeout(linesM1, 500)
}

function linesM1() {
    var canvas1 = document.getElementById("my_canvas1");
    var ctx1 = canvas1.getContext("2d");
    ctx1.beginPath();
    ctx1.moveTo(90, 130);
    ctx1.lineTo(150, 80);

    // ctx.moveTo(210, 150);
    // ctx.lineTo(270, 100);

    ctx1.stroke();
    setTimeout(linesM2, 500)
}

function linesM2() {
    var canvas1 = document.getElementById("my_canvas1");
    var ctx1 = canvas1.getContext("2d");
    ctx1.beginPath();
    ctx1.moveTo(210, 130);
    ctx1.lineTo(270, 80);

    // ctx.moveTo(330, 150);
    // ctx.lineTo(390, 100);

    ctx1.stroke();
    setTimeout(linesM3, 500)
}

function linesM3() {
    var canvas1 = document.getElementById("my_canvas1");
    var ctx1 = canvas1.getContext("2d");
    ctx1.beginPath();
    ctx1.moveTo(210, 250);
    ctx1.lineTo(270, 200);

    // ctx.moveTo(330, 270);
    // ctx.lineTo(390, 220);

    ctx1.stroke();
    setTimeout(linesM4, 500)
}

function linesM4() {
    var canvas1 = document.getElementById("my_canvas1");
    var ctx1 = canvas1.getContext("2d");
    ctx1.beginPath();
    ctx1.moveTo(90, 250);
    ctx1.lineTo(150, 200);

    // ctx.moveTo(210, 270);
    // ctx.lineTo(270, 220);

    ctx1.stroke();
    setTimeout(axisM, 500)
}

function axisM() {
    var canvas1 = document.getElementById("my_canvas1");
    var ctx1 = canvas1.getContext("2d");
    ctx1.beginPath();
    ctx1.moveTo(150, 50);
    ctx1.lineTo(150, 200);
    ctx1.strokeStyle = '#008000';
    ctx1.stroke();

    ctx1.beginPath();
    ctx1.moveTo(59, 275);
    ctx1.lineTo(150, 200);
    ctx1.strokeStyle = '#008000';
    ctx1.stroke();

    ctx1.beginPath();
    ctx1.moveTo(150, 200);
    ctx1.lineTo(300, 200);
    ctx1.strokeStyle = '#008000';
    ctx1.stroke();
    setTimeout(arrowsM, 500)
}

function arrowsM() {
    var canvas1 = document.getElementById("my_canvas1");
    var ctx1 = canvas1.getContext("2d");
    ctx1.beginPath();
    ctx1.moveTo(150, 50);
    ctx1.lineTo(140, 60);
    ctx1.strokeStyle = '#008000';
    ctx1.stroke();

    ctx1.beginPath();
    ctx1.moveTo(150, 50);
    ctx1.lineTo(160, 60);
    ctx1.strokeStyle = '#008000';
    ctx1.stroke();

    ctx1.beginPath();
    ctx1.moveTo(59, 275);
    ctx1.lineTo(60, 260);
    ctx1.strokeStyle = '#008000';
    ctx1.stroke();

    ctx1.beginPath();
    ctx1.moveTo(59, 275);
    ctx1.lineTo(75, 275);
    ctx1.strokeStyle = '#008000';
    ctx1.stroke();

    ctx1.beginPath();
    ctx1.moveTo(300, 200);
    ctx1.lineTo(290, 190);
    ctx1.strokeStyle = '#008000';
    ctx1.stroke();

    ctx1.beginPath();
    ctx1.moveTo(300, 200);
    ctx1.lineTo(290, 210);
    ctx1.strokeStyle = '#008000';
    ctx1.stroke();
    setTimeout(labelsM, 500)
}

function labelsM() {
    var canvas1 = document.getElementById("my_canvas1");
    var ctx1 = canvas1.getContext("2d");
    var text = 'X';
    ctx1.font = '25px Papyrus, sans-Serif';
    ctx1.fillStyle = '#fa4b2a';
    ctx1.fillText(text, 35, 295);

    var text = 'Y';
    ctx1.font = '25px Papyrus, sans-Serif';
    ctx1.fillStyle = '#fa4b2a';
    ctx1.fillText(text, 305, 210);

    var text = 'Z';
    ctx1.font = '25px Papyrus, sans-Serif';
    ctx1.fillStyle = '#fa4b2a';
    ctx1.fillText(text, 140, 40);
}


function drawAgainM() {
    var canvas1 = document.getElementById("my_canvas1");
    var ctx1 = canvas1.getContext("2d");
    ctx1.beginPath();
    ctx1.lineWidth = 2;
    ctx1.rect(90, 130, 120, 120);
    // ctx.rect(270, 100, 120, 120);
    ctx1.strokeStyle = '#000000';
    ctx1.stroke();
    ctx1.beginPath();
    ctx1.lineWidth = 2;
    // ctx.rect(210, 150, 120, 120);
    ctx1.rect(150, 80, 120, 120);
    ctx1.strokeStyle = '#000000';
    ctx1.stroke();
    ctx1.beginPath();
    ctx1.moveTo(90, 130);
    ctx1.lineTo(150, 80);

    // ctx.moveTo(210, 150);
    // ctx.lineTo(270, 100);

    ctx1.stroke();
    ctx1.beginPath();
    ctx1.moveTo(210, 130);
    ctx1.lineTo(270, 80);

    // ctx.moveTo(330, 150);
    // ctx.lineTo(390, 100);

    ctx1.stroke();
    ctx1.beginPath();
    ctx1.moveTo(210, 250);
    ctx1.lineTo(270, 200);

    // ctx.moveTo(330, 270);
    // ctx.lineTo(390, 220);

    ctx1.stroke();
    ctx1.beginPath();
    ctx1.moveTo(90, 250);
    ctx1.lineTo(150, 200);

    // ctx.moveTo(210, 270);
    // ctx.lineTo(270, 220);

    ctx1.stroke();
    ctx1.beginPath();
    ctx1.moveTo(150, 50);
    ctx1.lineTo(150, 200);
    ctx1.strokeStyle = '#008000';
    ctx1.stroke();

    ctx1.beginPath();
    ctx1.moveTo(59, 275);
    ctx1.lineTo(150, 200);
    ctx1.strokeStyle = '#008000';
    ctx1.stroke();

    ctx1.beginPath();
    ctx1.moveTo(150, 200);
    ctx1.lineTo(300, 200);
    ctx1.strokeStyle = '#008000';
    ctx1.stroke();
    ctx1.beginPath();
    ctx1.moveTo(150, 50);
    ctx1.lineTo(140, 60);
    ctx1.strokeStyle = '#008000';
    ctx1.stroke();

    ctx1.beginPath();
    ctx1.moveTo(150, 50);
    ctx1.lineTo(160, 60);
    ctx1.strokeStyle = '#008000';
    ctx1.stroke();

    ctx1.beginPath();
    ctx1.moveTo(59, 275);
    ctx1.lineTo(60, 260);
    ctx1.strokeStyle = '#008000';
    ctx1.stroke();

    ctx1.beginPath();
    ctx1.moveTo(59, 275);
    ctx1.lineTo(75, 275);
    ctx1.strokeStyle = '#008000';
    ctx1.stroke();

    ctx1.beginPath();
    ctx1.moveTo(300, 200);
    ctx1.lineTo(290, 190);
    ctx1.strokeStyle = '#008000';
    ctx1.stroke();

    ctx1.beginPath();
    ctx1.moveTo(300, 200);
    ctx1.lineTo(290, 210);
    ctx1.strokeStyle = '#008000';
    ctx1.stroke();

    var text = 'X';
    ctx1.font = '25px Papyrus, sans-Serif';
    ctx1.fillStyle = '#fa4b2a';
    ctx1.fillText(text, 35, 295);

    var text = 'Y';
    ctx1.font = '25px Papyrus, sans-Serif';
    ctx1.fillStyle = '#fa4b2a';
    ctx1.fillText(text, 305, 210);

    var text = 'Z';
    ctx1.font = '25px Papyrus, sans-Serif';
    ctx1.fillStyle = '#fa4b2a';
    ctx1.fillText(text, 140, 40);

}



function draw1(mouseX1, mouseY1) {

    var ctx = document.getElementById('my_canvas1').getContext('2d');
    if (i1 < 4) {
        ctx.beginPath();
        ctx.arc(mouseX1, mouseY1, 5, 0, 2 * Math.PI);
        ctx.stroke();
        ctx.fillStyle = "blue";
        ctx.fill();
        v1.push(mouseX1);
        v1.push(mouseY1);
    } else {
        alert("You have reach the maximum number of plotting");
    }
    i1++;
}


function joinPointsM() {
    var canvas1 = document.getElementById("my_canvas1");
    var ctx = canvas1.getContext("2d");

    canvas1.height = 330;

    ctx.beginPath();
    ctx.moveTo(v1[0], v1[1]);
    for (var count = 2; count < v1.length; count = count + 2) {
        ctx.lineTo(v1[count], v1[count + 1]);
    }
    ctx.fillStyle = "#E6E6FA";
    ctx.fill();
    if (v1.length > 6) {
        i = 4;
    }

    if (displayMobile == 1) {
        drawAgainM();
    }

    shapeM = 1;

}


function Change1M() {
    var canvas1 = document.getElementById("my_canvas1");
    var ctx = canvas1.getContext("2d");
    var change1M = document.getElementById("change1M");
    var val1M = document.getElementById("value1M");

    if (displayMobile == 1) {
        canvas1.height = 400;
        v1 = [];
        i1 = 0;
        if (displayMobile == 1) {
            drawAgainM();
        }

        if (changeValueM == 0 && shapeM == 1) {
            change1M.innerHTML = 'Change';
            changeValueM = 1;
            val1M.className = '';
            val1M.className += 'status-paid1';
            val1M.innerHTML = 'Submitted';
            shapeM = 0;
            window.location.assign("#");
        } else {
            change1M.innerHTML = 'Submit';
            changeValueM = 0;
            val1M.className = '';
            val1M.className += 'status1';
            val1M.innerHTML = 'Pending';
            window.location.assign("#");

        }

    }
}

function Change2M() {
    var canvas1 = document.getElementById("my_canvas1");
    var ctx = canvas1.getContext("2d");
    var change2M = document.getElementById("change2M");
    var val2M = document.getElementById("value2M");

    if (displayMobile == 1) {

        canvas1.height = 400;
        v1 = [];
        i1 = 0;
        if (displayMobile == 1) {
            drawAgainM();
        }


        if (changeValue1M == 0 && shapeM == 1) {
            change2M.innerHTML = 'Change';
            changeValue1M = 1;
            val2M.className = '';
            val2M.className += 'status-paid1';
            val2M.innerHTML = 'Submitted';
            shapeM = 0;
            window.location.assign("#");
        } else {
            change2M.innerHTML = 'Submit';
            changeValue1M = 0;
            val2M.className = '';
            val2M.className += 'status1';
            val2M.innerHTML = 'Pending';
            window.location.assign("#");

        }
    }
}


function Change3M() {
    var canvas1 = document.getElementById("my_canvas1");
    var ctx = canvas1.getContext("2d");
    var change3M = document.getElementById("change3M");
    var val3M = document.getElementById("value3M");

    if (displayMobile == 1) {


        canvas1.height = 400;
        v1 = [];
        i1 = 0;
        if (displayMobile == 1) {
            drawAgainM();
        }

        if (changeValue2M == 0 && shapeM == 1) {
            change3M.innerHTML = 'Change';
            changeValue2M = 1;
            val3M.className = '';
            val3M.className += 'status-paid1';
            val3M.innerHTML = 'Submitted';
            shapeM = 0;
            window.location.assign("#");
        } else {
            change3M.innerHTML = 'Submit';
            changeValue2M = 0;
            val3M.className = '';
            val3M.className += 'status1';
            val3M.innerHTML = 'Pending';
            window.location.assign("#");

        }

    }
}

function Change4M() {
    var canvas1 = document.getElementById("my_canvas1");
    var ctx = canvas1.getContext("2d");
    var change4M = document.getElementById("change4M");
    var val4M = document.getElementById("value4M");

    if (displayMobile == 1) {
        canvas1.height = 400;
        v1 = [];
        i1 = 0;
        if (displayMobile == 1) {
            drawAgainM();
        }


        if (changeValue3M == 0 && shapeM == 1) {
            change4M.innerHTML = 'Change';
            changeValue3M = 1;
            val4M.className = '';
            val4M.className += 'status-paid1';
            val4M.innerHTML = 'Submitted';
            shapeM = 0;
            window.location.assign("#");
        } else {
            change4M.innerHTML = 'Submit';
            changeValue3M = 0;
            val4M.className = '';
            val4M.className += 'status1';
            val4M.innerHTML = 'Pending';
            window.location.assign("#");

        }

    }
}

function Change5M() {
    var canvas1 = document.getElementById("my_canvas1");
    var ctx = canvas1.getContext("2d");
    var change5M = document.getElementById("change5M");
    var val5M = document.getElementById("value5M");

    if (displayMobile == 1) {
        canvas1.height = 400;
        v1 = [];
        i1 = 0;
        if (displayMobile == 1) {
            drawAgainM();
        }
        if (changeValue4M == 0 && shapeM == 1) {
            change5M.innerHTML = 'Change';
            changeValue4M = 1;
            val5M.className = '';
            val5M.className += 'status-paid1';
            val5M.innerHTML = 'Submitted';
            shapeM = 0;
            window.location.assign("#");
        } else {
            change5M.innerHTML = 'Submit';
            changeValue4M = 0;
            val5M.className = '';
            val5M.className += 'status1';
            val5M.innerHTML = 'Pending';
            window.location.assign("#");
        }

    }
}