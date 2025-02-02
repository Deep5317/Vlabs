<!DOCTYPE html>
<html>
<script src="../js/3DCube.js"></script>


<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- Bootstrap Css -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <style>
        .button1 {
            background-color: white;
            color: black;
            border: 2px solid #800000;
        }


        .button1:hover {
            background-color: #800000;
            color: white;
        }
    </style>

    <style>
        .button {
            font-weight: bold;
            /* margin: 0px 0px 0px 100px; */
            padding: 8px;
            background-color: #EEE;
            color: #222;
            border: 4px solid orange;
        }

        .danger {
            background-color: #ffdddd;
            border-left: 6px solid #f44336;
            width: 100%;
            height: 25px;
        }

        .success {
            background-color: #ddffdd;
            border-left: 6px solid #04AA6D;
            width: 100%;
            height: 25px;
        }

        .info {
            background-color: #e7f3fe;
            border-left: 6px solid #2196F3;
            width: 100%;
            height: 25px;
        }


        .warning {
            background-color: #ffffcc;
            border-left: 6px solid #ffeb3b;
            width: 100%;
            height: 25px;
        }

        .tab {
            background-color: #ffffcc;
            border-left: 6px solid #eeb822;
            width: 100%;
            height: 25px;
        }

        #form-prompt {
            font-size: 24px;
            margin-top: 0;
            margin-bottom: 5px;
        }

        form {
            background-color: #e5f5f8;
            border-radius: 10px;
            font-family: Avenir;
            padding: 20px;
            width: 100%;
        }

        .buttonMobile {
            display: inline-block;
            padding: 0.4em 0.8em;
            margin: 0 0.2em 0.2em 0;
            border-radius: 0.10em;
            box-sizing: border-box;
            text-decoration: none;
            font-family: 'Roboto', sans-serif;
            text-transform: uppercase;
            font-weight: 400;
            color: #FFFFFF;
            background-color: #3369ff;
            box-shadow: inset 0 -0.6em 0 -0.35em rgba(0, 0, 0, 0.17);
            text-align: center;
            position: relative;
        }

        .buttonMobile:active {
            top: 0.1em;
        }
    </style>

    <style>
        @media only screen and (min-width: 650px) {

            html,
            body {
                /* overflow-x: hidden;
            overflow-y: hidden; */
            }

            .reorder {
                margin-left: 6px;
                width: 50%;
            }

            .reorder1 {
                width: 50%;
            }

            .rearrange {
                width: 50%;
            }
        }

        @media only screen and (max-width: 650px) {

            html,
            body {
                overflow-x: hidden;
            }

            .button {
                font-size: 0.7em;
                font-weight: bold;
                margin: 2px 0px 0px 0px;
                padding: 4px;
                background-color: #EEE;
                color: #222;
                border: 4px solid orange;
            }

            .compress {
                width: 100%;
                margin-top: 5px;
            }

            .rearrange {
                margin-left: 11px;
                width: 55%;
            }

            .reorder {
                margin-left: 11px;
                width: 55%;
            }

            .reorder1 {
                margin-left: 11px;
                width: 55%;
            }

            .spacetop {
                margin-top: 12px;
            }
        }
    </style>






</head>






<style>
    .arrow {
        border: solid black;
        border-width: 0 3px 3px 0;
        display: inline-block;
        padding: 3px;
    }

    .right {
        transform: rotate(-45deg);
        -webkit-transform: rotate(-45deg);
    }

    .left {
        transform: rotate(135deg);
        -webkit-transform: rotate(135deg);
    }

    .up {
        transform: rotate(-135deg);
        -webkit-transform: rotate(-135deg);
    }

    .down {
        transform: rotate(45deg);
        -webkit-transform: rotate(45deg);
    }
</style>

<style>
    .box {
        color: #000000;
        padding: 0px;
        display: none;
        margin-top: 0px;
    }

    .SC {
        background: #fff;
    }

    .BCC {
        background: #fff;
    }

    .FCC {
        background: #fff;
    }
</style>

<!-- <script type="text/javascript" src="../js/3DCube.js"></script> -->

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    var valueDownload;
    $(document).ready(function() {
        var changeValue;
        $("select").change(function() {
            $(this).find("option:selected").each(function() {
                var optionValue = $(this).attr("value");
                if (optionValue) {
                    $(".box").not("." + optionValue).hide();
                    $("." + optionValue).show();
                } else {
                    $(".box").hide();
                }
                changeValue = optionValue;

            });
            if (changeValue == "SCC") {
                valueDownload = changeValue;
                SccValue();
            }
            if (changeValue == "BCC") {
                valueDownload = changeValue;
                BccValue();
            }
            if (changeValue == "FCC") {
                valueDownload = changeValue;
                FccValue();
            }
            valueDownload = changeValue;
        }).change();


    });
</script>



<script>
    function display() {

        var checkRadio = document.querySelector(
            'input[name="GFG"]:checked');

        if (checkRadio != null) {
            document.getElementById("disp").innerHTML = alert(checkRadio.value +
                " radio button checked");
        } else {
            document.getElementById("disp").innerHTML = alert("Not selected (Yes / No)");
        }
        display1();

    }

    function theory(value, value1) {
        var y, z;

        y = 1.414 * x;
        x = 1.732 * x;

        document.getElementById('yvalue').value = y;
        document.getElementById('zvalue').value = z;

    }
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js">
</script>

<script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
<script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js">
</script>

<script type="text/javascript">
    function cal() {
        var x = document.getElementById('myNumber').value;
        var y = document.getElementById('yvalue').value;
        var z = document.getElementById('zvalue').value;
        var theoryresult = parseFloat(y) + parseFloat(z);
        if (!isNaN(result)) {
            document.getElementById('theoryresult').value = theoryresult;
        }
    }

    function theory(value) {
        var x = document.getElementById('myNumber').value;
        var y = document.getElementById('yvalue').value;
        var z = document.getElementById('zvalue').value;
    }

    function print() {
        document.getElementById('xval').value = document.getElementById('myNumber');
    }
</script>

<body>
    <div class="container ">
        <div class="row">
            <!-- <div class="col-md-12 offset-5 d-none d-md-block">
                <h1>Miller Indices</h1>
            </div>
            <div class="col-12 offset-3 d-block d-md-none">
                <h4>Miller Indices</h4>
            </div> -->
        </div>
        <div class="container d-block d-md-none">
            <div class="row d-block d-md-none">

                <div class="col-12" style="padding: 0px 15px 0px 0px;">
                    <canvas id="myCanvas1" height="400" style="border:1px solid #d3d3d3;">
                        Your browser does not support the canvas element.
                    </canvas>
                </div>
            </div>

        </div>

        <div class="row">

            <div class="col-12 d-block d-md-none">
                <div class="card" style="width: 100%;">
                    <h5 class="card-header bg-primary text-white">
                        Keys
                    </h5>
                    <div class="card-body" style="padding-top: 10px;padding-bottom: 1px;">
                        <div class="row">
                            <div class="col-6">
                                <div>
                                    <h6>Operations</h6>
                                    <span style="margin-right: 23px;font-weight: 400;font-size: large;">SCC</span>
                                    <button class="buttonMobile" id="v">V</button>
                                </div>
                                <div style="margin-top: 15px;">
                                    <span style="margin-right: 23px;font-weight: 400;font-size: large;">BCC</span>
                                    <button class="buttonMobile" id="b">B</button>
                                </div>
                                <div style="margin-top: 15px;">
                                    <span style="margin-right: 23px;font-weight: 400;font-size: large;">FCC</span>
                                    <button class="buttonMobile" id="f">F</button>
                                </div>
                                <div style="margin-top: 15px;">
                                    <span style="margin-right: 23px;font-weight: 400;font-size: large;">Axis</span>
                                    <button class="buttonMobile" id="x">X</button>
                                </div>

                            </div>
                            <div class="col-6">

                                <div>
                                    <h6 align="center">Motion</h6>
                                    <span><button class="buttonMobile" id="clockwise"><i class="fa fa-rotate-right" style="font-size:20px"></i></button></span>
                                    <span>&nbsp;</span>
                                    <span>&nbsp;</span>
                                    <span><button class="buttonMobile" id="anticlockwise"><i class="fa fa-rotate-left" style="font-size:20px"></i></button></span>
                                </div>
                                <div style="margin-top: 25px;">
                                    <span>&nbsp;</span>
                                    <span>&nbsp;</span>
                                    <span>&nbsp;</span>
                                    <span>&nbsp;</span>
                                    <span style="margin-left: 4px;"><button class="buttonMobile" id="up"><i class="fa fa-hand-o-up" style="font-size:20px"></i></button></span>
                                </div>
                                <div style="margin-top: 8px;">
                                    <span><button class="buttonMobile" id="left"><i class="fa fa-hand-o-left" style="font-size:20px"></i></button></span>
                                    <span>&nbsp;</span>
                                    <span>&nbsp;</span>
                                    <span><button class="buttonMobile" id="right"><i class="fa fa-hand-o-right" style="font-size:20px"></i></button></span>
                                </div>
                                <div style="margin-top: 8px;margin-bottom: 5px;">
                                    <span>&nbsp;</span>
                                    <span>&nbsp;</span>
                                    <span>&nbsp;</span>
                                    <span>&nbsp;</span>
                                    <span style="margin-left: 4px;"><button class="buttonMobile" id="down"><i class="fa fa-hand-o-down" style="font-size:20px"></i></button></span>
                                </div>


                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6" id="wholePage">
                <div class="card spacetop" style="padding-bottom: 0;">
                    <p class="card-header bg-primary text-white" style="font-size: 20px;"> <strong> Observation
                            Table for : </strong>

                        <select>
                            <option value="SC">SC</option>
                            <option value="BCC">BCC</option>
                            <option value="FCC">FCC</option>
                        </select>
                    </p>

                    <div class="card-body" style="padding-bottom: 0;">

                        <table class="table" border="1">
                            <thead class="thead-dark ">
                                <tr>
                                    <th>Edge</th>
                                    <th>Face diagonal</th>
                                    <th>Body diagonal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        X = <input style="width: 60%;" type="text" name="myNumber" id="myNumber" readonly>
                                    </td>
                                    <td>Y = &#8730;2 x <input type="text" style="width: 50%;" name="one" id="one" required />
                                    </td>
                                    <td>Z = &#8730;3 x <input type="text" style="width: 50%;" name="z" id="zvalue" required />
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="SC box">

                            <p style="font-size: 16px;" align="center"><b>Theoretical Ratio = d<sub>100</sub> :
                                    d<sub>110</sub> :
                                    d<sub>111</sub> = </b>
                                <input type="text" id="two" name="two" value="         1: 0.707: 0.576" readonly />
                            </p>
                            <div id="SC1">
                                <table class="table" border="1">
                                    <thead class="thead-dark ">
                                        <tr>

                                            <th>Interplanar </th>
                                            <th class="compress">Ratio by Practical</th>

                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            <td>d<sub>100</sub> = x = <input type="text" id="scx" placeholder="value" class="reorder" required></td>

                                            <td rowspan="3" align="center" class="compress">
                                                <p></p>
                                                d<sub>100</sub> : d<sub>110</sub> : d<sub>111</sub>
                                                <br>
                                                <input type="text" id="dresult" class="compress" required readonly>
                                                <br>
                                                <p><br></p>
                                                <div>
                                                    <button onclick="fun1()" class="button button1">Calculate</button>
                                                </div>
                                            </td>
                                            <!-- <td id="beta1"></td> -->
                                        </tr>

                                        <tr>
                                            <td>d<sub>110</sub> = <sup>y</sup>&frasl;<sub>2</sub> = <input type="text" id="scy" placeholder="value" style="box-sizing: border-box;" class="rearrange" required>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>d<sub>111</sub> = <sup>z</sup>&frasl;<sub>3</sub> = <input type="text" id="scz" placeholder="value" style="box-sizing: border-box;" class="rearrange" required>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>


                            </div>
                            <!-- <button>Hello</button> -->



                        </div>




                        <div class="BCC box">
                            <p align="center" style="font-size: 16px;"><b>Theoretical Ratio = d<sub>100</sub> :
                                    d<sub>110</sub> :
                                    d<sub>111</sub> = </b>
                                <input type="text" id="mynumber2" value="         1: 1.414: 0.576" readonly required>
                            </p>

                            <div id="BCC1">
                                <table class="table" border="1">
                                    <thead class="thead-dark ">
                                        <tr>

                                            <th>Interplanar </th>
                                            <th class="compress">Ratio by Practical</th>

                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>

                                            <td>d<sub>100</sub> = <sup>x</sup>&frasl;<sub>2</sub> = <input type="text" id="bccx" placeholder="value" style="box-sizing: border-box;" class="reorder1" required>
                                            </td>
                                            <td rowspan="3" align="center" class="compress">
                                                <p></p>
                                                d<sub>100</sub> : d<sub>110</sub> : d<sub>111</sub>
                                                <br>
                                                <input type="text" id="d1result" class="compress" required>
                                                <br>
                                                <p><br></p>
                                                <div>
                                                    <button onclick="fun2()" class="button button1">Calculate</button>
                                                </div>
                                            </td>
                                            <!-- <td id="beta1"></td> -->
                                        </tr>

                                        <tr>
                                            <td>d<sub>110</sub> = <sup>y</sup>&frasl;<sub>2</sub> = <input type="text" id="bccy" placeholder="value" style="box-sizing: border-box;" class="rearrange" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>d<sub>111</sub> = <sup>z</sup>&frasl;<sub>6</sub> = <input type="text" id="bccz" placeholder="value" style="box-sizing: border-box;" class="rearrange" required>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>


                            <!-- 
                            <button>Second Hello </button> -->




                        </div>

                        <div class="FCC box">
                            <p align="center" style="font-size: 16px;"><b>Theoretical Ratio = d<sub>100</sub> :
                                    d<sub>110</sub> :
                                    d<sub>111</sub> = </b>
                                <input type="text" id="mynumber1" value="         1: 0.707: 1.155" readonly>
                            </p>

                            <div id="FCC1">
                                <table class="table" border="1">
                                    <thead class="thead-dark ">
                                        <tr>

                                            <th>Interplanar </th>
                                            <th class="compress">Ratio by Practical</th>

                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>

                                            <td>d<sub>100</sub> = <sup>x</sup>&frasl;<sub>2</sub> =
                                                <input type="text" id="fccx" placeholder="value" style="box-sizing: border-box;" class="reorder1" required>
                                            </td>
                                            <td rowspan="3" align="center" class="compress">
                                                <p></p>
                                                d<sub>100</sub> : d<sub>110</sub> : d<sub>111</sub>
                                                <br>
                                                <input type="text" id="d2result" class="compress" readonly required>
                                                <br>
                                                <p><br></p>
                                                <div>
                                                    <button onclick="fun3()" class="button button1">Calculate</button>
                                                </div>
                                            </td>
                                            <!-- <td id="beta1"></td> -->
                                        </tr>

                                        <tr>
                                            <td>d<sub>110</sub> = <sup>y</sup>&frasl;<sub>4</sub> = <input type="text" id="fccy" placeholder="value" style="box-sizing: border-box;" class="rearrange" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>d<sub>111</sub> = <sup>z</sup>&frasl;<sub>3</sub> = <input type="text" id="fccz" placeholder="value" style="box-sizing: border-box;" class="rearrange" required>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>


                            <!-- <button>Third Hello </button> -->
                        </div>

                        <div>
                            <form id="form" align="center">
                                <p id=form-prompt>
                                <h5 align="center"><b>Is Theoretical and Practical values equal ?</b></h5>
                                </p>
                                <input type="radio" name="GFG" id="yes" value="Yes">Yes <input type="radio" name="GFG" id="no" value="No" required>No<br>

                            </form>
                            <div style="display: flex; align-items: baseline;justify-content: space-evenly;">
                                <button class="button button1" id="table-download">Download Table </button>
                                <button type="submit" onclick="window.location.href='./physics/exp3a.php';" class="button button1" style="margin-top: 5px;">Submit</button>

                            </div>

                        </div>

                    </div>



                </div>
            </div>




            <div class="col-12 col-md-6 d-none d-md-block">
                <div class="card" style="margin-bottom: 10px;">
                    <p class="card-header bg-primary text-white" style="font-size: 20px;"> <strong> Note : To view
                            different faces of the cube...</strong>
                    <div class="card-body">

                        <div class="SC box">
                            <div class="info">
                                <p><strong>Press 'v' once, twice , thrice for different forms of
                                        planes.<br></strong>
                                </p>
                            </div>
                        </div>
                        <div class="BCC box">
                            <div class="info">
                                <p><strong>Press 'b' once, twice , thrice for different forms of
                                        planes.<br></strong>
                                </p>
                            </div>
                        </div>
                        <div class="FCC box">
                            <div class="info">
                                <p><strong>Press 'f' once, twice , thrice for different forms of
                                        planes.<br></strong>
                                </p>
                            </div>
                        </div>

                        <table align="center" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Key:</th>
                                    <th><i class="arrow up"></i></th>
                                    <th><i class="arrow down"></i></th>
                                    <th><i class="arrow left"></i></th>
                                    <th><i class="arrow right"></i></th>
                                    <th>'a'</th>
                                    <th>'z'</th>
                                    <th>'x'</th>
                                </tr>
                            </thead>

                            <tr>
                                <th>Aim:</th>
                                <td>Up</td>
                                <td>Down</td>
                                <td>Left</td>
                                <td>Right</td>
                                <td>&#8634;</td>
                                <td>&#8635;</td>
                                <td>Axis</td>
                            </tr>

                        </table>

                    </div>
                </div>


                <canvas id="myCanvas" width="650" height="400" style="border:1px solid #d3d3d3;">
                    Your browser does not support the canvas element.
                </canvas>
            </div>

        </div>
    </div>


    <script src="./html2canvas.min.js"></script>

    <script>
        document.getElementById("table-download").onclick = function() {
            const screenshotTarget = document.getElementById('wholePage');
            html2canvas(screenshotTarget).then((canvas) => {
                const base64image = canvas.toDataURL("image/png");
                var anchor = document.createElement('a');
                anchor.setAttribute("href", base64image);
                anchor.setAttribute("download", "my-image.png");
                anchor.click();
                anchor.remove();

            });
        }
    </script>

    <script>
        function fun1() {
            var scx = document.getElementById("scx");
            var scy = document.getElementById("scy");
            var scz = document.getElementById("scz");

            var calx, caly, calz;

            var dresult = document.getElementById("dresult");

            calx = scx.value;
            caly = scy.value;
            calz = scz.value;

            caly = caly / calx;
            calz = calz / calx;
            calx = calx / calx;

            calx = calx.toFixed(3);
            caly = caly.toFixed(3);
            calz = calz.toFixed(3);



            dresult.value = "   " + calx + " : " + caly + " : " + calz;



        }


        function fun2() {
            var bccx = document.getElementById("bccx");
            var bccy = document.getElementById("bccy");
            var bccz = document.getElementById("bccz");

            var calx1, caly1, calz1;

            var dresult = document.getElementById("dresult");

            calx1 = bccx.value;
            caly1 = bccy.value;
            calz1 = bccz.value;


            caly1 = caly1 / calx1;
            calz1 = calz1 / calx1;
            calx1 = calx1 / calx1;

            calx1 = calx1.toFixed(3);
            caly1 = caly1.toFixed(3);
            calz1 = calz1.toFixed(3);

            d1result.value = "   " + calx1 + " : " + caly1 + " : " + calz1;

        }


        function fun3() {
            var fccx = document.getElementById("fccx");
            var fccy = document.getElementById("fccy");
            var fccz = document.getElementById("fccz");

            var calx2, caly2, calz2;

            var d2result = document.getElementById("d2result");

            calx2 = fccx.value;
            caly2 = fccy.value;
            calz2 = fccz.value;


            caly2 = caly2 / calx2;
            calz2 = calz2 / calx2;
            calx2 = calx2 / calx2;


            calx2 = calx2.toFixed(3);
            caly2 = caly2.toFixed(3);
            calz2 = calz2.toFixed(3);

            d2result.value = "   " + calx2 + " : " + caly2 + " : " + calz2;

        }
    </script>


    <!-- jQuery first, then Popper.js, then Bootstrap JS-->
    <script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</body>

</html>