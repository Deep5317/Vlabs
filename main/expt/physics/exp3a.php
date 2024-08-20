<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap Css -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Miller Indices</title>
    <style>
        body {
            margin: 10px;
            background: #CCC;
        }

        #my_canvas {
            background: #FFF;
            border: #000 1px solid;
        }

        #my_canvas1 {
            background: #FFF;
            border: #000 1px solid;
        }
    </style>
    <script>
        var display = 0;

        function LetsStart() {
            //access canvas and its context
            var canvas = document.getElementById("my_canvas");
            var ctx = canvas.getContext("2d");
            // ctx.beginPath();
            // ctx.lineWidth = 2;
            // ctx.rect(210, 150, 120, 120);
            // ctx.rect(270, 100, 120, 120);
            // ctx.strokeStyle = '#000000';
            // ctx.stroke();
            if (display == 0) {
                setTimeout(rectangle, 100);
                display = 1;
            }

        }

        function rectangle() {
            var canvas = document.getElementById("my_canvas");
            var ctx = canvas.getContext("2d");
            ctx.beginPath();
            ctx.lineWidth = 2;
            ctx.rect(210, 150, 120, 120);
            // ctx.rect(270, 100, 120, 120);
            ctx.strokeStyle = '#000000';
            ctx.stroke();
            setTimeout(rectangle1, 1000)
        }

        function rectangle1() {
            var canvas = document.getElementById("my_canvas");
            var ctx = canvas.getContext("2d");
            ctx.beginPath();
            ctx.lineWidth = 2;
            // ctx.rect(210, 150, 120, 120);
            ctx.rect(270, 100, 120, 120);
            ctx.strokeStyle = '#000000';
            ctx.stroke();
            setTimeout(lines, 500)
        }

        function lines() {
            var canvas = document.getElementById("my_canvas");
            var ctx = canvas.getContext("2d");
            ctx.beginPath();
            ctx.moveTo(210, 150);
            ctx.lineTo(270, 100);
            ctx.stroke();
            setTimeout(lines1, 500)
        }

        function lines1() {
            var canvas = document.getElementById("my_canvas");
            var ctx = canvas.getContext("2d");
            ctx.beginPath();
            ctx.moveTo(330, 150);
            ctx.lineTo(390, 100);
            ctx.stroke();
            setTimeout(lines2, 500)
        }

        function lines2() {
            var canvas = document.getElementById("my_canvas");
            var ctx = canvas.getContext("2d");
            ctx.beginPath();
            ctx.moveTo(330, 270);
            ctx.lineTo(390, 220);
            ctx.stroke();
            setTimeout(lines3, 500)
        }

        function lines3() {
            var canvas = document.getElementById("my_canvas");
            var ctx = canvas.getContext("2d");
            ctx.beginPath();
            ctx.moveTo(210, 270);
            ctx.lineTo(270, 220);
            ctx.stroke();
            setTimeout(axis, 500)
        }

        function axis() {
            var canvas = document.getElementById("my_canvas");
            var ctx = canvas.getContext("2d");
            ctx.beginPath();
            ctx.moveTo(270, 70);
            ctx.lineTo(270, 220);
            ctx.strokeStyle = '#008000';
            ctx.stroke();
            ctx.beginPath();
            ctx.moveTo(179, 295);
            ctx.lineTo(270, 220);
            ctx.strokeStyle = '#008000';
            ctx.stroke();
            ctx.beginPath();
            ctx.moveTo(270, 220);
            ctx.lineTo(420, 220);
            ctx.strokeStyle = '#008000';
            ctx.stroke();
            setTimeout(arrows, 500)
        }

        function arrows() {
            var canvas = document.getElementById("my_canvas");
            var ctx = canvas.getContext("2d");
            ctx.beginPath();
            ctx.moveTo(270, 70);
            ctx.lineTo(260, 80);
            ctx.strokeStyle = '#008000';
            ctx.stroke();
            ctx.beginPath();
            ctx.moveTo(270, 70);
            ctx.lineTo(280, 80);
            ctx.strokeStyle = '#008000';
            ctx.stroke();

            ctx.beginPath();
            ctx.moveTo(179, 295);
            ctx.lineTo(180, 280);
            ctx.strokeStyle = '#008000';
            ctx.stroke();
            ctx.beginPath();
            ctx.moveTo(179, 295);
            ctx.lineTo(195, 295);
            ctx.strokeStyle = '#008000';
            ctx.stroke();

            ctx.beginPath();
            ctx.moveTo(420, 220);
            ctx.lineTo(410, 210);
            ctx.strokeStyle = '#008000';
            ctx.stroke();
            ctx.beginPath();
            ctx.moveTo(420, 220);
            ctx.lineTo(410, 230);
            ctx.strokeStyle = '#008000';
            ctx.stroke();
            setTimeout(labels, 500)
        }

        function labels() {
            var canvas = document.getElementById("my_canvas");
            var ctx = canvas.getContext("2d");
            var text = 'X';
            ctx.font = '25px Papyrus, sans-Serif';
            ctx.fillStyle = '#fa4b2a';
            ctx.fillText(text, 150, 315);

            var text = 'Y';
            ctx.font = '25px Papyrus, sans-Serif';
            ctx.fillStyle = '#fa4b2a';
            ctx.fillText(text, 425, 225);

            var text = 'Z';
            ctx.font = '25px Papyrus, sans-Serif';
            ctx.fillStyle = '#fa4b2a';
            ctx.fillText(text, 260, 60);
        }
    </script>
    <script>
        function initCanvas() {
            var ctx = document.getElementById('my_canvas').getContext('2d');
            ctx.canvas.addEventListener('mousemove', function(event) {
                var mouseX = event.clientX - ctx.canvas.offsetLeft;
                var mouseY = event.clientY - ctx.canvas.offsetTop;
                mouseX = mouseX - 169;
                mouseY = mouseY - 66;
                var status = document.getElementById('status');
                status.innerHTML = mouseX + " | " + mouseY;
            });
            ctx.canvas.addEventListener('click', function(event) {
                var mouseX = event.clientX - ctx.canvas.offsetLeft;
                var mouseY = event.clientY - ctx.canvas.offsetTop;
                mouseX = mouseX - 169;
                mouseY = mouseY - 66;


                if (mouseX < 225 && mouseX > 195) {
                    mouseX = 210;
                }
                if (mouseY < 285 && mouseY > 255) {
                    mouseY = 270;
                }

                if (mouseX < 405 && mouseX > 375) {
                    mouseX = 390;
                }
                if (mouseY < 115 && mouseY > 85) {
                    mouseY = 100;
                }
                if (mouseY < 165 && mouseY > 135) {
                    mouseY = 150;
                }
                if (mouseX < 345 && mouseX > 315) {
                    mouseX = 330;
                }
                if (mouseY < 235 && mouseY > 205) {
                    mouseY = 220;
                }
                if (mouseX < 285 && mouseX > 255) {
                    mouseX = 270;
                }



                draw(mouseX, mouseY);

            });


            var ctx1 = document.getElementById('my_canvas1').getContext('2d');
            ctx1.canvas.width = window.innerWidth;
            ctx1.canvas.addEventListener('mousemove', function(event) {
                var mouseX1 = event.clientX - ctx1.canvas.offsetLeft;
                var mouseY1 = event.clientY - ctx1.canvas.offsetTop;
                mouseX1 = mouseX1 + 3;
                mouseY1 = mouseY1 - 47;
                var status = document.getElementById('status');
                status.innerHTML = mouseX1 + " | " + mouseY1;
            });
            ctx1.canvas.addEventListener('click', function(event) {
                var mouseX1 = event.clientX - ctx1.canvas.offsetLeft;
                var mouseY1 = event.clientY - ctx1.canvas.offsetTop;
                mouseX1 = mouseX1 + 3;
                mouseY1 = mouseY1 - 47;


                if (mouseX1 < 105 && mouseX1 > 75) {
                    mouseX1 = 90;
                }
                if (mouseY1 < 265 && mouseY1 > 235) {
                    mouseY1 = 250;
                }

                if (mouseX1 < 165 && mouseX1 > 135) {
                    mouseX1 = 150;
                }
                if (mouseY1 < 145 && mouseY1 > 115) {
                    mouseY1 = 130;
                }
                if (mouseY1 < 95 && mouseY1 > 65) {
                    mouseY1 = 80;
                }
                if (mouseX1 < 225 && mouseX1 > 195) {
                    mouseX1 = 210;
                }
                if (mouseY1 < 215 && mouseY1 > 185) {
                    mouseY1 = 200;
                }
                if (mouseX1 < 285 && mouseX1 > 255) {
                    mouseX1 = 270;
                }

                draw1(mouseX1, mouseY1);

            });
        }


        window.addEventListener('load', function(event) {
            initCanvas();
        });
    </script>

    <style>
        @media only screen and (min-width: 600px) {

            html,
            body {
                overflow-x: hidden;
                /* overflow-y: hidden; */
            }
        }

        @media only screen and (max-width: 600px) {

            html,
            body {
                overflow-x: hidden;
            }
        }
    </style>

</head>
<script src="../js/plotting.js"></script>

<body>
    <style>
        /*color variables*/


        .status {
            border-radius: 0.2rem;
            background-color: #fff0c2;
            color: #a68b00;
            padding: 0.1rem 1em;
            text-align: center;


        }

        .status-paid {
            border-radius: 0.2rem;
            background-color: #c8e6c9;
            color: #388e3c;
            padding: 0.1rem 1em;
            text-align: center;

        }

        .status1 {
            border-radius: 0.2rem;
            background-color: #fff0c2;
            color: #a68b00;
            padding: 0.1rem 0.4em;
            text-align: center;


        }

        .status-paid1 {
            border-radius: 0.2rem;
            background-color: #c8e6c9;
            color: #388e3c;
            padding: 0.1rem 0.4em;
            text-align: center;

        }
    </style>
    <div class="container-fluid d-none d-md-block" style="margin-left: 160px;">
        <div class="row">
            <div class="col-md-12 offset-4" >
                <h1>Miller Plotting</h1>
            </div>
        </div>
        <div class="row">

            <div class="col-md-5  wrapper" style="padding-right: 2%;">
                <div class="card" style="width: 100%;">
                    <h3 class="card-header bg-primary text-white">
                        Instruction
                    </h3>
                    <div class="card-body" style="padding-top: 10px;padding-bottom: 10px;padding-right: 6px;">
                        <h5>1. To plot the cube click on the button "Draw Cube".</h5>
                        <h5>2. Then,right click on the cube edges to plot a vertice.</h5>
                        <h5>3. Next,to view the shape click the "Draw Shape" button.</h5>
                        <h5>4. Finally,to submit click on the "Submit" button.</h5>
                    </div>
                </div>
                <div class="fixed" style="margin-top: 10px;">
                    <canvas id="my_canvas" width="580" height="400"></canvas>
                </div>

            </div>





            <div class="col-md-6" style="padding-right: 200px;">

                <div class="card">
                    <h3 class="card-header bg-primary text-white">
                        Practise Miller
                    </h3>
                    <div class="card-body" style="padding-top: 0.6rem;padding-bottom: 10px;">
                        <div style="display: flex;">
                            <h5 style="margin-right: 0em;margin-top: 0.6em;">Construct cube with respective axis</h5>
                            <button onclick="LetsStart();" style=" font-size: 1em;
                            font-weight: bold;
                            margin: 0px 0px 0px 55px;
                            padding: 9px;
                            background-color: #EEE;
                            color: #222;
                            border: 4px solid orange;">Draw Cube</button>
                        </div>
                        <div style="margin-top: 8px;">
                            <h5>Plot the given 5 miller indices on the canvas </h5>
                            <!-- <h6 id="status">0 | 0</h6> -->
                        </div>
                        <div style="margin-bottom: -4px;">
                            <table class="table table-striped">
                                <thead class="thead-dark ">
                                    <tr>
                                        <th>Sr No </th>
                                        <th>Indices</th>
                                        <th style="padding-left: 30px;">Status</th>
                                        <th>&nbsp;</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th style="padding-top:18px">1</th>
                                        <td style="padding-left: 20px;padding-top:18px">
                                            <h5 id="first"></h5>
                                        </td>
                                        <td style="width: 40px;padding-right: 50px;padding-top:18px">
                                            <p class="status" id="value1">Pending</p>
                                        </td>
                                        <td><button onclick="Change1();" style=" font-size: 1em;
                                        font-weight: bold;
                                        margin: 0px 0px 0px 30px;
                                        padding: 6px;
                                        background-color: #EEE;
                                        color: #222;
                                        border: 4px solid orange;" id="change1"><a href="#" style="color: #000; text-decoration: none;">Submit</a></button></td>

                                    </tr>
                                    <tr>
                                        <th style="padding-top:18px">2</th>
                                        <td style="padding-left: 20px;padding-top:18px">
                                            <h5 id="second"></h5>
                                        </td>
                                        <td style="width: 40px;padding-right: 50px;padding-top:18px">
                                            <p class="status " id="value2">Pending</p>
                                        </td>
                                        <td><button onclick="Change2();" style=" font-size: 1em;
                                        font-weight: bold;
                                        margin: 0px 0px 0px 30px;
                                        padding: 6px;
                                        background-color: #EEE;
                                        color: #222;
                                        border: 4px solid orange;" id="change2"><a href="#" style="color: #000; text-decoration: none;">Submit</a></button></td>

                                    </tr>
                                    <tr>
                                        <th style="padding-top:18px">3</th>
                                        <td style="padding-left: 20px;padding-top:18px">
                                            <h5 id="third"></h5>
                                        </td>
                                        <td style="width: 40px;padding-right: 50px;padding-top:18px">
                                            <p class="status " id="value3">Pending</p>
                                        </td>
                                        <td><button onclick="Change3();" style=" font-size: 1em;
                                        font-weight: bold;
                                        margin: 0px 0px 0px 30px;
                                        padding: 6px;
                                        background-color: #EEE;
                                        color: #222;
                                        border: 4px solid orange;" id="change3"><a href="#" style="color: #000; text-decoration: none;">Submit</a></button></td>

                                    </tr>
                                    <tr>
                                        <th style="padding-top:18px">4</th>
                                        <td style="padding-left: 20px;padding-top:18px">
                                            <h5 id="fourth"></h5>
                                        </td>
                                        <td style="width: 40px;padding-right: 50px;padding-top:18px">
                                            <p class="status" id="value4">Pending</p>
                                        </td>
                                        <td><button onclick="Change4();" style=" font-size: 1em;
                                        font-weight: bold;
                                        margin: 0px 0px 0px 30px;
                                        padding: 6px;
                                        background-color: #EEE;
                                        color: #222;
                                        border: 4px solid orange;" id="change4"><a href="#" style="color: #000; text-decoration: none;">Submit</a></button></td>

                                    </tr>
                                    <tr>
                                        <th style="padding-top:18px">5</th>
                                        <td style="padding-left: 20px;padding-top:18px">
                                            <h5 id="fifth"></h5>
                                        </td>
                                        <td style="width: 40px;padding-right: 50px;padding-top:18px">
                                            <p class="status" id="value5">Pending</p>
                                        </td>
                                        <td><button onclick="Change5();" style=" font-size: 1em;
                                        font-weight: bold;
                                        margin: 0px 0px 0px 30px;
                                        padding: 6px;
                                        background-color: #EEE;
                                        color: #222;
                                        border: 4px solid orange;" id="change5"><a href="#" style="color: #000; text-decoration: none;">Submit</a></button></td>

                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div style="display: flex;">
                            <h5 style="margin-right: 2.0em;margin-top: 0.6em;">To construct and fill the shape</h5>
                            <button onclick="joinPoints();" style=" font-size: 1em;
                            font-weight: bold;
                            margin: 0px 0px 0px 62px;
                            padding: 6px;
                            background-color: #EEE;
                            color: #222;
                            border: 4px solid orange;">Draw Shape</button>
                        </div>
                        
                    </div>
                    <!-- <button onclick="" style=" font-size: 1em;
                            font-weight: bold;
                            margin: 0px 0px 0px 62px;
                            padding: 6px;
                            background-color: #EEE;
                            color: #222;
                            border: 4px solid orange;">Back to Experiment</button> -->
                </div>

            </div>
        </div>
       
    </div>

    <div class="conatiner-fluid d-block d-md-none">
        <div class="row">
            <div class="col-12 offset-3">
                <h4>Miller Plotting</h4>
            </div>
        </div>
        <div class="row">

            <div class="col-12">
                <div class="fixed" style="margin-top: 5px;">
                    <canvas id="my_canvas1" height="330"></canvas>
                    <!-- width-335 -->
                </div>
            </div>

            <div class="col-12">
                <div class="card" style="width: 100%;">
                    <h5 class="card-header bg-primary text-white">
                        Instruction
                    </h5>
                    <div class="card-body" style="padding-top: 10px;padding-bottom: 1px;padding-left: 5%;">
                        <div style="display: flex;">
                            <h6>1.&nbsp;</h6>
                            <h6>To plot the cube click on the button "Draw Cube".</h6>
                        </div>

                        <div style="display: flex;">
                            <h6>2.&nbsp;</h6>
                            <h6>Then,right click on the cube edges to plot a vertice.</h6>
                        </div>

                        <div style="display: flex;">
                            <h6>3.&nbsp;</h6>
                            <h6>Next,to view the shape click the "Draw Shape" button.</h6>
                        </div>

                        <div style="display: flex;">
                            <h6>4.&nbsp;</h6>
                            <h6>Finally,to submit click on the "Submit" button.</h6>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card" style="margin-top: 5px;">
                    <h5 class="card-header bg-primary text-white">
                        Practise Miller
                    </h5>
                    <div class="card-body" style="padding-top: 0.6rem;padding-bottom: 10px;">


                        <div style="display: flex;">
                            <h6 style="margin-right: 28px;margin-top: 0.6em; width: 60%;">Construct cube with respective axis</h6>
                            <button onclick="LetsStartM();" style=" font-size: 0.7em;
                            font-weight: bold;
                            margin: 2px -8px 0px 20px;
                            padding: 4px;
                            background-color: #EEE;
                            color: #222;
                            border: 4px solid orange;"><a href="#" style="color: #000; text-decoration: none;">Draw Cube</a></button>
                        </div>


                        <div style="margin-top: 15px;">
                            <h6>Plot given 5 miller indices on the canvas </h6>
                        </div>
                        <div style="margin-bottom: -4px;">
                            <table class="table table-striped">
                                <thead class="thead-dark ">
                                    <tr>
                                        <th>Sr No </th>
                                        <th>Indices</th>
                                        <th style="padding-left: 25px;">Status</th>
                                        <th>&nbsp;</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th style="padding-top:18px">1</th>
                                        <td style="padding-left: 13px;padding-top:18px">
                                            <h6 id="firstM" style="padding-left: 12px;"></h6>
                                        </td>
                                        <td style="width: 40px;padding-right: 11px;padding-top:18px">
                                            <p class="status1" id="value1M">Pending</p>
                                        </td>
                                        <td><button onclick="Change1M();" style=" font-size: 0.7em;
                                        font-weight: bold;
                                        margin: 2px 0px 0px 5px;
                                        padding: 4px;
                                        background-color: #EEE;
                                        color: #222;
                                        border: 4px solid orange;" id="change1M"><a href="#" style="color: #000; text-decoration: none;">Submit</a></button></td>

                                    </tr>
                                    <tr>
                                        <th style="padding-top:18px">2</th>
                                        <td style="padding-left: 13px;padding-top:18px">
                                            <h6 id="secondM" style="padding-left: 12px;"></h6>
                                        </td>
                                        <td style="width: 40px;padding-right: 11px;padding-top:18px">
                                            <p class="status1" id="value2M">Pending</p>
                                        </td>
                                        <td><button onclick="Change2M();" style=" font-size: 0.7em;
                                        font-weight: bold;
                                        margin: 2px 0px 0px 5px;
                                        padding: 4px;
                                        background-color: #EEE;
                                        color: #222;
                                        border: 4px solid orange;" id="change2M"><a href="#" style="color: #000; text-decoration: none;">Submit</a></button></td>

                                    </tr>
                                    <tr>
                                        <th style="padding-top:18px">3</th>
                                        <td style="padding-left: 13px;padding-top:18px">
                                            <h6 id="thirdM" style="padding-left: 12px;"></h6>
                                        </td>
                                        <td style="width: 40px;padding-right: 11px;padding-top:18px">
                                            <p class="status1 " id="value3M">Pending</p>
                                        </td>
                                        <td><button onclick="Change3M();" style=" font-size: 0.7em;
                                        font-weight: bold;
                                        margin: 2px 0px 0px 5px;
                                        padding: 4px;
                                        background-color: #EEE;
                                        color: #222;
                                        border: 4px solid orange;" id="change3M"><a href="#" style="color: #000; text-decoration: none;">Submit</a></button></td>

                                    </tr>
                                    <tr>
                                        <th style="padding-top:18px">4</th>
                                        <td style="padding-left: 13px;padding-top:18px">
                                            <h6 id="fourthM" style="padding-left: 12px;"></h6>
                                        </td>
                                        <td style="width: 40px;padding-right: 11px;padding-top:18px">
                                            <p class="status1" id="value4M">Pending</p>
                                        </td>
                                        <td><button onclick="Change4M();" style=" font-size: 0.7em;
                                        font-weight: bold;
                                        margin: 2px 0px 0px 5px;
                                        padding: 4px;
                                        background-color: #EEE;
                                        color: #222;
                                        border: 4px solid orange;" id="change4M"><a href="#" style="color: #000; text-decoration: none;">Submit</a></button></td>

                                    </tr>
                                    <tr>
                                        <th style="padding-top:18px">5</th>
                                        <td style="padding-left: 13px;padding-top:18px">
                                            <h6 id="fifthM" style="padding-left: 12px;"></h6>
                                        </td>
                                        <td style="width: 40px;padding-right: 11px;padding-top:18px">
                                            <p class="status1" id="value5M">Pending</p>
                                        </td>
                                        <td><button onclick="Change5M();" style=" font-size: 0.7em;
                                        font-weight: bold;
                                        margin: 2px 0px 0px 5px;
                                        padding: 4px;
                                        background-color: #EEE;
                                        color: #222;
                                        border: 4px solid orange;" id="change5M"><a href="#" style="color: #000; text-decoration: none;">Submit</a></button></td>

                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div style="display: flex;">
                            <h6 style="margin-right: 2.0em;margin-top: 0.6em;width: 60%;">To construct and fill the shape</h6>
                            <button onclick="joinPointsM();" style=" font-size: 0.7em;
                            font-weight: bold;
                            margin: 2px -10px 0px 10px;
                            padding: 4px;
                            background-color: #EEE;
                            color: #222;
                            border: 4px solid orange;"><a href="#" style="color: #000; text-decoration: none;">Draw Shape</a></button>
                        </div>
                    </div>

                </div>

            </div>


        </div>


    </div>


    <script>
        var result, result1, result2;
        var final;
        var count = 5;
        var one = document.getElementById("first");
        var two = document.getElementById("second");
        var three = document.getElementById("third");
        var four = document.getElementById("fourth");
        var five = document.getElementById("fifth");

        var oneM = document.getElementById("firstM");
        var twoM = document.getElementById("secondM");
        var threeM = document.getElementById("thirdM");
        var fourM = document.getElementById("fourthM");
        var fiveM = document.getElementById("fifthM");

        var val1 = document.getElementById("value1");
        var val2 = document.getElementById("value2");
        var val3 = document.getElementById("value3");
        var val4 = document.getElementById("value4");
        var val5 = document.getElementById("value5");

        var val1M = document.getElementById("value1M");
        var val2M = document.getElementById("value2M");
        var val3M = document.getElementById("value3M");
        var val4M = document.getElementById("value4M");
        var val5M = document.getElementById("value5M");

        var ch1 = document.getElementById("change1");
        var ch2 = document.getElementById("change2");
        var ch3 = document.getElementById("change3");
        var ch4 = document.getElementById("change4");
        var ch5 = document.getElementById("change5");

        var ch1M = document.getElementById("change1M");
        var ch2M = document.getElementById("change2M");
        var ch3M = document.getElementById("change3M");
        var ch4M = document.getElementById("change4M");
        var ch5M = document.getElementById("change5M");


        var change = document.getElementById("change");
        const outputSet = new Set();
        while (outputSet.size != count) {
            result = Math.floor(Math.random() * 10);
            result = result / 3;
            if (result == 3) {
                result = 0;
            }
            result = Math.floor(result);
            result = result.toString();

            result1 = Math.floor(Math.random() * 10);
            result1 = result1 / 3;
            if (result1 == 3) {
                result1 = 1;
            }
            result1 = Math.floor(result1);
            result1 = result1.toString();

            result2 = Math.floor(Math.random() * 10);
            result2 = result2 / 3;
            if (result2 == 3) {
                result2 = 2;
            }
            result2 = Math.floor(result2);
            result2 = result2.toString();
            if (result == 0 && result1 == 0 && result2 == 0) {
                result1 = '1';
            }

            final = result + result1 + result2;
            console.log(final);
            if (final == 010) {
                final = 001;
            }


            outputSet.add(final);
        }
        const myArr = Array.from(outputSet);

        one.innerHTML = "\t" + myArr[0];
        two.innerHTML = myArr[1];
        three.innerHTML = myArr[2];
        four.innerHTML = myArr[3];
        five.innerHTML = myArr[4];

        oneM.innerHTML = "\t" + myArr[0];
        twoM.innerHTML = myArr[1];
        threeM.innerHTML = myArr[2];
        fourM.innerHTML = myArr[3];
        fiveM.innerHTML = myArr[4];
    </script>


    <script>
        var v = [],
            i = 0,
            count = 1,
            a, shape = 0,
            changeValue = 0,
            changeValue1 = 0,
            changeValue2 = 0,
            changeValue3 = 0,
            changeValue4 = 0;

        function draw(mouseX, mouseY) {
            var ctx = document.getElementById('my_canvas').getContext('2d');
            if (i < 4) {
                ctx.beginPath();
                ctx.arc(mouseX, mouseY, 5, 0, 2 * Math.PI);
                ctx.stroke();
                ctx.fillStyle = "blue";
                ctx.fill();
                v.push(mouseX);
                v.push(mouseY);
            } else {
                alert("You have reach the maximum number of plotting");
            }
            i++;
        }

        function joinPoints() {
            var canvas = document.getElementById("my_canvas");
            var ctx = canvas.getContext("2d");

            canvas.height = 400;
            ctx.beginPath();
            ctx.moveTo(v[0], v[1]);
            for (var count = 2; count < v.length; count = count + 2) {
                ctx.lineTo(v[count], v[count + 1]);
            }
            ctx.fillStyle = "#E6E6FA";
            ctx.fill();
            if (v.length > 6) {
                i = 4;
            }

            if (display == 1) {
                drawAgain();
            }

            shape = 1;

        }
    </script>
    <script>
        function drawAgain() {
            //access canvas and its context
            var canvas = document.getElementById("my_canvas");
            var ctx = canvas.getContext("2d");
            ctx.beginPath();
            ctx.lineWidth = 2;
            ctx.rect(210, 150, 120, 120);
            ctx.rect(270, 100, 120, 120);
            ctx.strokeStyle = '#000000';
            ctx.stroke();

            ctx.beginPath();
            ctx.moveTo(210, 150);
            ctx.lineTo(270, 100);
            ctx.stroke();

            ctx.beginPath();
            ctx.moveTo(330, 150);
            ctx.lineTo(390, 100);
            ctx.stroke();

            ctx.beginPath();
            ctx.moveTo(330, 270);
            ctx.lineTo(390, 220);
            ctx.stroke();

            ctx.beginPath();
            ctx.moveTo(210, 270);
            ctx.lineTo(270, 220);
            ctx.stroke();

            //for axis
            ctx.beginPath();
            ctx.moveTo(270, 70);
            ctx.lineTo(270, 220);
            ctx.strokeStyle = '#008000';
            ctx.stroke();
            ctx.beginPath();
            ctx.moveTo(179, 295);
            ctx.lineTo(270, 220);
            ctx.strokeStyle = '#008000';
            ctx.stroke();
            ctx.beginPath();
            ctx.moveTo(270, 220);
            ctx.lineTo(420, 220);
            ctx.strokeStyle = '#008000';
            ctx.stroke();

            //for arrows
            ctx.beginPath();
            ctx.moveTo(270, 70);
            ctx.lineTo(260, 80);
            ctx.strokeStyle = '#008000';
            ctx.stroke();
            ctx.beginPath();
            ctx.moveTo(270, 70);
            ctx.lineTo(280, 80);
            ctx.strokeStyle = '#008000';
            ctx.stroke();

            // ctx.beginPath();
            // ctx.moveTo(260,80);
            // ctx.lineTo(280,80);
            // ctx.strokeStyle = '#008000';
            // ctx.stroke();

            ctx.beginPath();
            ctx.moveTo(179, 295);
            ctx.lineTo(180, 280);
            ctx.strokeStyle = '#008000';
            ctx.stroke();
            ctx.beginPath();
            ctx.moveTo(179, 295);
            ctx.lineTo(195, 295);
            ctx.strokeStyle = '#008000';
            ctx.stroke();

            ctx.beginPath();
            ctx.moveTo(420, 220);
            ctx.lineTo(410, 210);
            ctx.strokeStyle = '#008000';
            ctx.stroke();
            ctx.beginPath();
            ctx.moveTo(420, 220);
            ctx.lineTo(410, 230);
            ctx.strokeStyle = '#008000';
            ctx.stroke();

            var text = 'X';
            ctx.font = '25px Papyrus, sans-Serif';
            ctx.fillStyle = '#fa4b2a';
            ctx.fillText(text, 150, 315);

            var text = 'Y';
            ctx.font = '25px Papyrus, sans-Serif';
            ctx.fillStyle = '#fa4b2a';
            ctx.fillText(text, 425, 225);

            var text = 'Z';
            ctx.font = '25px Papyrus, sans-Serif';
            ctx.fillStyle = '#fa4b2a';
            ctx.fillText(text, 260, 60);


        }
        // function Nextvalue()
        // {
        //     var canvas = document.getElementById("my_canvas");
        //     var ctx = canvas.getContext("2d");

        //     if(display==1 && shape==1)
        //     {
        //         canvas.height=400;
        //     v=[];
        //     i=0;
        //     if(display ==1)
        //     {
        //         drawAgain();
        //     }
        //     if(count==1 || a==1)
        //     {
        //         val1.className = '';
        //         val1.className += 'status-paid';
        //         val1.innerHTML = 'Submitted';
        //         a=0;
        //         if(count==1)
        //         {
        //             count++;
        //         }

        //     }
        //     else if(count==2 || a==2)
        //     {
        //         val2.className = '';
        //         val2.className += 'status-paid';
        //         val2.innerHTML = 'Submitted';
        //         a=0;
        //         if(count==2)
        //         {
        //             count++;
        //         }

        //     }
        //     else if(count==3 || a==3)
        //     {
        //         val3.className = '';
        //         val3.className += 'status-paid';
        //         val3.innerHTML = 'Submitted';
        //         a=0;
        //         if(count==3)
        //         {
        //             count++;
        //         }
        //     }
        //     else if(count==4 || a==4)
        //     {
        //         val4.className = '';
        //         val4.className += 'status-paid';
        //         val4.innerHTML = 'Submitted';
        //         a=0;
        //         if(count==4)
        //         {
        //             count++;
        //         }
        //         change.innerHTML = 'Submit';

        //     }
        //     else if(count==5 || a==5)
        //     {
        //         val5.className = '';
        //         val5.className += 'status-paid';
        //         val5.innerHTML = 'Submitted';
        //         a=0;
        //         if(count==5)
        //         {
        //             count++;
        //         }

        //     }
        //     shape=0;

        //     }




        // }

        function Change1() {
            var canvas = document.getElementById("my_canvas");
            var ctx = canvas.getContext("2d");
            var change1 = document.getElementById("change1");

            if (display == 1) {
                canvas.height = 400;
                v = [];
                i = 0;
                if (display == 1) {
                    drawAgain();
                }
                a = 1;

                if (changeValue == 0 && shape == 1) {
                    change1.innerHTML = 'Change';
                    changeValue = 1;
                    val1.className = '';
                    val1.className += 'status-paid';
                    val1.innerHTML = 'Submitted';
                    shape = 0;
                } else {
                    change1.innerHTML = 'Submit';
                    changeValue = 0;
                    val1.className = '';
                    val1.className += 'status';
                    val1.innerHTML = 'Pending';

                }

            }




        }

        function Change2() {
            var canvas = document.getElementById("my_canvas");
            var ctx = canvas.getContext("2d");

            if (display == 1) {

                canvas.height = 400;
                v = [];
                i = 0;
                if (display == 1) {
                    drawAgain();
                }

                // val2.className = '';
                // val2.className += 'status';
                // val2.innerHTML = 'Pending';

                a = 2;

                if (changeValue1 == 0 && shape == 1) {
                    change2.innerHTML = 'Change';
                    changeValue1 = 1;
                    val2.className = '';
                    val2.className += 'status-paid';
                    val2.innerHTML = 'Submitted';
                    shape = 0;
                } else {
                    change2.innerHTML = 'Submit';
                    changeValue1 = 0;
                    val2.className = '';
                    val2.className += 'status';
                    val2.innerHTML = 'Pending';

                }

            }


        }

        function Change3() {
            var canvas = document.getElementById("my_canvas");
            var ctx = canvas.getContext("2d");

            if (display == 1) {


                canvas.height = 400;
                v = [];
                i = 0;
                if (display == 1) {
                    drawAgain();
                }

                // val3.className = '';
                // val3.className += 'status';
                // val3.innerHTML = 'Pending';

                a = 3;

                if (changeValue2 == 0 && shape == 1) {
                    change3.innerHTML = 'Change';
                    changeValue2 = 1;
                    val3.className = '';
                    val3.className += 'status-paid';
                    val3.innerHTML = 'Submitted';
                    shape = 0;
                } else {
                    change3.innerHTML = 'Submit';
                    changeValue2 = 0;
                    val3.className = '';
                    val3.className += 'status';
                    val3.innerHTML = 'Pending';

                }

            }


        }

        function Change4() {
            var canvas = document.getElementById("my_canvas");
            var ctx = canvas.getContext("2d");

            if (display == 1) {
                canvas.height = 400;
                v = [];
                i = 0;
                if (display == 1) {
                    drawAgain();
                }

                // val4.className = '';
                // val4.className += 'status';
                // val4.innerHTML = 'Pending';

                a = 4;

                if (changeValue3 == 0 && shape == 1) {
                    change4.innerHTML = 'Change';
                    changeValue3 = 1;
                    val4.className = '';
                    val4.className += 'status-paid';
                    val4.innerHTML = 'Submitted';
                    shape = 0;
                } else {
                    change4.innerHTML = 'Submit';
                    changeValue3 = 0;
                    val4.className = '';
                    val4.className += 'status';
                    val4.innerHTML = 'Pending';

                }

            }


        }

        function Change5() {
            var canvas = document.getElementById("my_canvas");
            var ctx = canvas.getContext("2d");

            if (display == 1) {
                canvas.height = 400;
                v = [];
                i = 0;
                if (display == 1) {
                    drawAgain();
                }

                // val5.className = '';
                // val5.className += 'status';
                // val5.innerHTML = 'Pending';

                a = 5;

                if (changeValue4 == 0 && shape == 1) {
                    change5.innerHTML = 'Change';
                    changeValue4 = 1;
                    val5.className = '';
                    val5.className += 'status-paid';
                    val5.innerHTML = 'Submitted';
                    shape = 0;
                } else {
                    change5.innerHTML = 'Submit';
                    changeValue4 = 0;
                    val5.className = '';
                    val5.className += 'status';
                    val5.innerHTML = 'Pending';
                }

            }


        }
    </script>




    <!-- jQuery first, then Popper.js, then Bootstrap JS-->
    <script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</body>

</html>