<!-- Working code -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>D'alemberts</title>
</head>

<body onload="def()">
    <div class="flex-container">

        <div class='flex-child'>
            <form style="overflow-x:hidden">
                <h4 style="overflow-y: hidden;">Enter Input Details</h4>

                <div class="row">

                    <div class='form-group'>
                        <label>Enter First Mass (Ma):</label>
                        <input class='form-control' min="0" type="number" id="x" placeholder="Mass A" oninput="weighta()">
                    </div>

                </div>
                <br>
                <div class='form-group'>
                    <div class='form-group'>
                        <label>Enter Second Mass (Mb): </label>
                        <input type="number" min="0" class='form-control' id="y" placeholder="Mass B" oninput="weightb()">

                    </div>

                </div>
            </form>
            <br>
            <button id="submit" onclick="add(),check()" class='btn btn-primary'>Submit</button>
            <button id='reset' onclick="window.location.reload();" class='btn btn-secondary' style="margin-left: 5px;">Reset</button>
            <br>

        </div>
    </div>
    <br>
    <div class="canvas" style="position: absolute; top: 10%; left: 40vw;">
        <canvas id="myCanvas" width="325px" height="600px" style="border:1px solid #d3d3d3;">
            Your browser does not support the canvas element.
        </canvas>
    </div>
    <script>
        function add() {
            var x, y, aA, aB, T;
            let g = 9.81;
            x = Number(document.getElementById("x").value);
            y = Number(document.getElementById("y").value);
            if (x > 0 && y > 0) {
                aA = (g * x - 4 * g * y) / (16 * y + x)
                aB = -(4 * g * x - 16 * g * y) / (16 * y + x)
                T = (5 * g * x * y) / (16 * y + x)

                tempa = document.getElementById("aA").innerHTML = aA.toFixed(2);
                document.getElementById("aB").innerHTML = aB.toFixed(2);
                document.getElementById("T").innerHTML = T.toFixed(2);



            } else {
                window.alert("The Number Should be greater then 0");
                window.location.reload();
            }
            //console.log(x);
            //console.log(y);
            //aA = (x* g-y* y* g)/(x+4*y *y)
            //aB=(4* y* y* g - 4* x* g)/(x+4* y*y)
            //T=5* x* y * g/(x+4* y*y)

            document.getElementById("submit").disabled = true;
            document.getElementById("x").disabled = true;
            document.getElementById("y").disabled = true;

        }






        var canvas = document.getElementById("myCanvas");
        var ctx = canvas.getContext("2d");


        function def() {
            with(ctx) {
                beginPath();
                var gradient = ctx.createRadialGradient(90, 338, 5, 388, 90, 349);
                gradient.addColorStop(0, 'white');
                gradient.addColorStop(1, 'black');
                fillStyle = 'gradient';

                lineWidth = "5";

                beginPath();
                strokeStyle = "brown"; //fixed brown bar
                moveTo(20, 10);
                lineTo(280, 10);
                stroke();

                lineWidth = "3";
                beginPath();
                strokeStyle = "black";
                fillStyle = 'grey';
                arc(95, 340, 40, 0, 2 * Math.PI); //pulley 1
                fill();
                stroke();

                beginPath();
                fillStyle = '#cacaca'
                arc(95, 340, 10, 0, 2 * Math.PI); // pulley 2
                fill();
                stroke();
                closePath();


                beginPath();
                moveTo(55, 10);
                lineTo(55, 340); //pulley line - 1 
                stroke();

                beginPath();
                fillStyle = 'grey';
                arc(135, 200, 40, 0, 2 * Math.PI); // pulley 2
                fill();
                stroke();
                closePath();

                beginPath();
                fillStyle = '#cacaca'
                arc(135, 200, 10, 0, 2 * Math.PI); // pulley 2
                fill();
                stroke();
                closePath();

                beginPath();
                moveTo(135, 210);
                lineTo(135, 340); //pulley line - 2
                stroke();
                closePath();

                moveTo(95, 50);
                lineTo(95, 200);
                stroke();
                closePath();

                beginPath();

                fillStyle = '#dcdcdc';
                rect(70, 45, 60, 50); //digital spring balance
                fill();
                stroke();
                closePath();


                beginPath();
                moveTo(95, 10); //fixed bar to digital sp
                lineTo(95, 45);
                stroke();


                let tension = 0;
                tension = document.getElementById('T').innerHTML;
                beginPath(); //digital spring balance print
                fillStyle = "black";
                font = "bold 16px Arial";
                fillText("0.00", 80, 77);
                font = "bold 14px Arial";
                fillText("N", 117, 80);
                fill();
                stroke();



                moveTo(95, 350);
                lineTo(95, 440); // pulley 1 - line(pulley to weight 1)
                stroke();
                moveTo(175, 85);
                lineTo(175, 200);
                stroke();
                moveTo(215, 10);
                lineTo(215, 90);
                stroke();
                moveTo(255, 90);
                lineTo(255, 270);
                stroke();


                fillStyle = "grey";
                arc(215, 90, 40, 0, 2 * Math.PI); // pulley 3
                fill();
                stroke();
                beginPath();

                beginPath();
                fillStyle = '#cacaca'
                arc(215, 90, 10, 0, 2 * Math.PI); // pulley 2
                fill();
                stroke();
                closePath();
            }
        }

        function weighta() { //display weight a
            with(ctx) {
                beginPath();
                fillStyle = "rgb(99,135,220)";
                rect(60, 410, 70, 90); // Weight 1
                fill();
                stroke();

                let weight1 = 0;
                weight1 = document.getElementById('x').value;
                beginPath();
                fillStyle = "black";
                font = "bold 18px Arial";
                fillText(weight1 + "Kg", 80, 460);
                lineWidth = "3";

                fill();
                stroke();
            }
        }

        function weightb() { //display weight b
            with(ctx) {
                beginPath();
                fillStyle = "rgb(99,135,220)";
                rect(220, 270, 70, 90); // Weight 2
                lineWidth = "3";
                fill();
                stroke();

                let weight2 = 0;
                weight2 = document.getElementById('y').value;
                beginPath();
                fillStyle = "black";
                font = "bold 18px Arial";
                fillText(weight2 + "Kg", 237, 320);
                lineWidth = "3";
                fill();
                stroke();

            }
        }

        function check() {
            console.log(tempa)
            if (tempa < 0.00) {
                console.log(tempa)
                updatea();
            } else {

                updateb();
            }
        }
        var a = 0,
            b = 0,
            up = 0;

        function updatea() {

            up -= .5;
            b += .5;

            with(ctx) {

                clearRect(0, 0, 350, 600)

                lineWidth = "5";

                beginPath();
                strokeStyle = "brown";
                moveTo(20, 10);
                lineTo(280, 10);
                stroke();

                lineWidth = "3";
                beginPath();
                strokeStyle = "black";
                fillStyle = 'grey';
                arc(95, 340 + up, 40, 0, 2 * Math.PI); //pulley 1
                fill();
                stroke();
                closePath();

                beginPath();
                fillStyle = '#cacaca'
                arc(95, 340 + up, 10, 0, 2 * Math.PI); //pulley 1 - inner circle
                fill();
                stroke();
                closePath();

                moveTo(55, 10);
                lineTo(55, 340 + up); //pulley line - 1 (pulley to weight 1)
                stroke();
                closePath();


                beginPath();
                fillStyle = 'grey';
                arc(135, 200, 40, 0, 2 * Math.PI); // pulley 2
                fill();
                closePath();
                stroke();

                beginPath();
                fillStyle = '#cacaca'
                arc(135, 200, 10, 0, 2 * Math.PI); //pulley 2 - inner circle
                fill();
                stroke();
                closePath();


                moveTo(135, 210);
                lineTo(135, 340 + up); //pulley line - 2
                stroke();
                closePath();


                moveTo(95, 40);
                lineTo(95, 200);
                stroke();
                closePath();

                beginPath();

                fillStyle = '#dcdcdc';
                rect(70, 45, 60, 50); //digital spring balance
                fill();
                stroke();

                beginPath();
                moveTo(95, 10);
                lineTo(95, 45);
                stroke();


                let tension = 0;
                tension = document.getElementById('T').innerHTML;
                console.log(tension);
                beginPath(); //digital spring balance print
                fillStyle = "black";
                font = "bold 16px Arial";
                fillText(tension, 80, 77);
                font = "bold 14px Arial";
                fillText("N", 117, 80);
                fill();
                stroke();


                moveTo(95, 350 + up);
                lineTo(95, 400 - up); // pulley 1 - line
                stroke();
                moveTo(175, 85);
                lineTo(175, 200); // pulley 2 to pulley 3 connection line
                stroke();
                moveTo(215, 10);
                lineTo(215, 90); //Fixed line 3 pulley
                stroke();
                moveTo(255, 90);
                lineTo(255, 270 + b); //pulley 3 to weight Line 
                stroke();


                fillStyle = "grey";
                arc(215, 90, 40, 0, 2 * Math.PI); // pulley 3
                fill();
                stroke();
                beginPath();

                beginPath();
                fillStyle = '#cacaca'
                arc(215, 90, 10, 0, 2 * Math.PI); //pulley 3 - inner circle
                fill();
                stroke();
                closePath();

                beginPath();
                fillStyle = "rgb(99,135,220)";
                rect(60, 410 + up, 70, 90); // Weight 1
                fill();
                stroke();

                let weight1 = 0;
                weight1 = document.getElementById('x').value;
                beginPath();
                fillStyle = "black";
                font = "bold 18px Arial";
                fillText(weight1 + "Kg", 80, 460 + up);
                lineWidth = "3";
                closePath();
                fill();
                stroke();

                beginPath();
                fillStyle = "rgb(99,135,220)";
                rect(220 + a, 270 + b, 70, 90); // Weight 2
                lineWidth = "3";
                fill();
                stroke();

                let weight2 = 0;
                weight2 = document.getElementById('y').value;
                beginPath();
                fillStyle = "black";
                font = "bold 18px Arial";
                fillText(weight2 + "Kg", 237 + a, 320 + b);
                lineWidth = "3";
                fill();
                stroke();

                var temp = requestAnimationFrame(updatea);

            }
            if (b == 30) {
                window.cancelAnimationFrame(temp);
            }
        }
        var a = 0,
            b = 0,
            up = 0;

        function updateb() {

            up -= .5;
            b += .5;

            with(ctx) {

                clearRect(0, 0, 350, 600)

                lineWidth = "5";

                beginPath();
                strokeStyle = "brown";
                moveTo(20, 10);
                lineTo(280, 10);
                stroke();

                lineWidth = "3";
                beginPath();
                strokeStyle = "black";

                beginPath();
                fillStyle = 'grey';
                arc(95, 340 + b, 40, 0, 2 * Math.PI); //pulley 1
                fill();
                stroke();
                closePath();

                beginPath();
                fillStyle = '#cacaca'
                arc(95, 340 + b, 10, 0, 2 * Math.PI); //pulley 1 - inner circle
                fill();
                stroke();
                closePath();

                moveTo(55, 10);
                lineTo(55, 340 - up); //pulley line - 1 
                stroke();
                closePath();

                beginPath();
                fillStyle = 'grey';
                arc(135, 200 + b, 40, 0, 2 * Math.PI); // pulley 2
                fill();
                closePath();
                stroke();

                beginPath();
                fillStyle = '#cacaca'
                arc(135, 200 + b, 10, 0, 2 * Math.PI); //pulley 2 - inner circle
                fill();
                stroke();
                closePath();

                moveTo(135, 210 + b);
                lineTo(135, 340 + b); //pulley line - 2 (pulley 2 below line)
                stroke();
                closePath();


                moveTo(95, 40);
                lineTo(95, 200 + b);
                stroke();
                closePath();

                beginPath();

                fillStyle = '#dcdcdc';
                rect(70, 45, 60, 50); //digital spring balance
                fill();
                stroke();

                beginPath();
                moveTo(95, 10);
                lineTo(95, 40);
                stroke();


                let tension = 0;
                tension = document.getElementById('T').innerHTML;
                console.log(T)
                beginPath(); //digital spring balance print
                fillStyle = "black";
                font = "bold 16px Arial";
                fillText(tension, 80, 77);
                font = "bold 14px Arial";
                fillText("N", 117, 80);
                fill();
                stroke();


                moveTo(95, 350 + b);
                lineTo(95, 420 + b); // pulley 1 - line
                stroke();
                moveTo(175, 85);
                lineTo(175, 200 + b); // pulley 2 to pulley 3 connection line
                stroke();
                moveTo(215, 10);
                lineTo(215, 90); //Fixed line 3 pulley
                stroke();
                moveTo(255, 90);
                lineTo(255, 270 + b); //pulley 3 to weight Line 
                stroke();


                fillStyle = "grey";
                arc(215, 90, 40, 0, 2 * Math.PI); // pulley 3
                fill();
                stroke();
                beginPath();

                beginPath();
                fillStyle = '#cacaca'
                arc(215, 90, 10, 0, 2 * Math.PI); //pulley 3 - inner circle
                fill();
                stroke();
                closePath();

                beginPath();
                fillStyle = "rgb(99,135,220)";
                rect(60, 410 + b, 70, 90); // Weight 1
                fill();
                stroke();

                let weight1 = 0;
                weight1 = document.getElementById('x').value;
                beginPath();
                fillStyle = "black";
                font = "bold 18px Arial";
                fillText(weight1 + "Kg", 80, 460 + b);
                lineWidth = "3";
                closePath();
                fill();
                stroke();

                beginPath();
                fillStyle = "rgb(99,135,220)";
                rect(220 + a, 270 + up, 70, 90); // Weight 2
                lineWidth = "3";
                fill();
                stroke();

                let weight2 = 0;
                weight2 = document.getElementById('y').value;
                beginPath();
                fillStyle = "black";
                font = "bold 18px Arial";
                fillText(weight2 + "Kg", 237 + a, 320 + up);
                lineWidth = "3";
                fill();
                stroke();

                var temp = requestAnimationFrame(updateb);

            }
            if (b == 30) {
                window.cancelAnimationFrame(temp);
            }
        }
    </script>





    <style>
        td {
            width: 50%;
        }

        * {
            overflow-x: visible;
        }

        .form-control {
            width: 300px;
        }

        body {
            margin-left: 30px;
            margin-top: 10px;
            margin-right: 30px;

        }

        .col-lg {
            margin-right: 500px;
        }

        .flex-container {
            display: flex;
            width: 700px;
        }

        .flex-child {
            flex: 1;

        }

        #myCanvas {
            position: top;
            justify-content: center;
            text-align: center;
        }
    </style>

    <div style=" margin-top: 300px;">
        <h2 style="overflow-y: hidden;">Result</h2><br>
        <table class="table table-striped">

            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Acceleration of Block A:</td>
                    <td id="aA">0</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Acceleration of Block B:</td>
                    <td id="aB">0</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Tension:</td>
                    <td id="T">0</td>
                </tr>
            </tbody>
        </table>
        <script>


        </script>

    </div>

</body>

</html>


<!-- <script src="beam_script.js"> </script> -->