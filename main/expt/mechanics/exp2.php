<style>
  p {
    padding: 1% 2%;
    /* font-size: 25px; */
    color: black;
    text-align: center;
    justify-content: center
  }

  .head {
    font-size: 2em;
    font-family: Arial, Helvetica, sans-serif;
    text-align: center;
    justify-content: center;
    color: black;
    text-shadow: 0px 0px 5px #f2f2f2;
    margin-top: 1%;
    margin-bottom: 1em;
  }

  .mainSlider {

    width: 38vw;
    height: 500px;
    margin: 11% -19%;
    position: relative;
    padding: 1% 1%;
    border-radius: 10px;
    display: flex;
    flex-direction: column;
    background: linear-gradient(-135deg, #0048ce, #008bfd);
    color: white;
    font-size: 20px;
  }

  .mainSlider input {
    -webkit-appearance: none;
    outline: none;
    background: #f2f2f2;
    height: 5px;
    margin-left: 6%;

    border-radius: 25px;
  }

  .mainSlider input::-webkit-slider-thumb {
    -webkit-appearance: none;

    height: 15px;
    width: 15px;
    background: white;
    border-radius: 50%;
    border: 2px solid #17A2B8;
  }

  .value1 {
    color: white;

    display: inline-block;
  }

  .value2 {
    color: white;
    display: inline-block;
  }

  input[type=range] {
    width: 300px;
    cursor: pointer;
    position: relative;
  }

  .slider1 {
    margin: 10px;
    padding: 10px;
  }

  .slider2 {
    margin: 10px;
    padding: 10px;
  }

  input[type=button] {
    cursor: pointer;
    width: 100px;
    height: 50px;
    margin: 10px;
    font-size: 20px;
    background-color: #FFCE45;
    color: #ffff;
  }

  .container {
    padding: 2% 2%;
    margin: 2% 2%;
    position: relative;
    border-radius: 10px;
  }

  .timerHead {
    color: white;
    text-align: center;
    background: linear-gradient(-135deg, #2a3545, #515e70);
    border-radius: 10px;
    margin-top: -2%;
  }

  .timerdisplay {
    /* background: linear-gradient(-135deg,#e4e8ed,#515e70); */
    color: white;
    position: relative;
    width: 99%;
    color: black;
    font-family: 'Orbitron', sans-serif;
    font-size: 20px;
    display: flex;
    align-items: center;
    justify-content: space-around;
    border-radius: 5px;
    height: 30%;
  }

  .button.disabled {
    cursor: default;
    background: #979b93;
  }

  .button button {
    font-size: 19px;
    background: rgb(240, 224, 83);
    padding: 5px 0 0 0;
    margin: 10px auto 0 auto;
    width: 150px;
    height: 45px;
    border-radius: 50px;
    color: black;
    cursor: pointer;
    border: none;


  }

  .td button {
    background: rgb(240, 224, 83);
    width: 100px;
    height: 50px;
    border-radius: 50px;
    color: white;
    cursor: pointer;
  }

  #tbl th {

    color: black;

  }


  .table {
    font-size: 20px;
    color: black;
    display: flex;
    justify-content: space-around;
    text-align: center;
    padding: 2em 2em;
    position: relative;
    margin-top: -3%;



  }

  .table table,
  td,
  th {
    text-align: center;
    justify-content: center;
    border: 0.5px solid black;
  }

  .table td,
  th {
    padding: 5px;
    margin: 2px 2px 2px 2px;
  }

  .content {
    top: 50px;
    justify-content: center;
    justify-items: center;
    text-align: center;
    flex: 30%;


  }

  .page {
    height: 45vh;
    width: 45vw;
    margin-top: 5%;
  }

  .pen {
    justify-content: center;
    justify-items: center;
    text-align: center;
    flex: 70%;

  }

  .base {
    overflow-x: hidden;
    min-width: 45%;
    display: inline-block;
    width: 67%;
    border-top: 5px solid black;
    margin: 7% 13%;
    text-align: center;
    position: relative;
    background-image: linear-gradient(315deg, #b8c6db 0%, #f5f7fa 74%);
    height: 500px;
  }

  .holder {
    width: 50px;
    height: 30px;
    border-radius: 0 0 50% 50%;
    background-color: black;
    margin: auto;
  }

  .thread {
    width: 2px;
    height: 350px;
    background: black;
    position: relative;
    transform-origin: 50% 0;
    display: inline-block;
  }



  .knob {
    width: 20px;
    height: 20px;
    background: #000;
    border: 2px solid rgba(255, 255, 255, 0.5);
    border-radius: 50%;
    border-bottom: 2px solid transparent;
    top: -25px;
    left: -10px;
    position: absolute;
  }

  .pendulum {
    width: 20px;
    height: 20px;
    background: radial-gradient(circle at 70% 35%, white, #6e776b 30%, #3a3b39 50%);
    position: absolute;
    bottom: -10px;
    left: -9px;
    border-radius: 50%;
  }

  @keyframes movit0 {

    0%,
    100% {
      transform: rotate(0deg);
    }

    /* 50% {
    transform: rotate(-10deg);
  } */
  }

  @keyframes movit5 {

    0%,
    100% {
      transform: rotate(5deg);
    }

    50% {
      transform: rotate(-5deg);
    }
  }

  @keyframes movit {

    0%,
    100% {
      transform: rotate(10deg);
    }

    50% {
      transform: rotate(-10deg);
    }
  }

  @keyframes movit1 {

    0%,
    100% {
      transform: rotate(20deg);
    }

    50% {
      transform: rotate(-20deg);
    }
  }

  @keyframes movit2 {

    0%,
    100% {
      transform: rotate(30deg);
    }

    50% {
      transform: rotate(-30deg);
    }
  }

  @keyframes movit3 {

    0%,
    100% {
      transform: rotate(15deg);
    }

    50% {
      transform: rotate(-15deg);
    }
  }

  @keyframes movit4 {

    0%,
    100% {
      transform: rotate(25deg);
    }

    50% {
      transform: rotate(-25deg);
    }
  }

  .checkangle0 {
    width: 2px;
    height: 350px;
    background: black;
    position: relative;
    transform-origin: 50% 0;
    display: inline-block;
    transform: rotate(0deg);

  }

  .checkangle {
    width: 2px;
    height: 350px;
    background: black;
    position: relative;
    transform-origin: 50% 0;
    display: inline-block;
    transform: rotate(10deg);

  }

  .checkangle1 {
    width: 2px;
    height: 350px;
    background: black;
    position: relative;
    transform-origin: 50% 0;
    display: inline-block;
    transform: rotate(20deg);

  }

  .checkangle2 {
    width: 2px;
    height: 350px;
    background: black;
    position: relative;
    transform-origin: 50% 0;
    display: inline-block;
    transform: rotate(30deg);

  }

  .checkangle3 {
    width: 2px;
    height: 350px;
    background: black;
    position: relative;
    transform-origin: 50% 0;
    display: inline-block;
    transform: rotate(15deg);

  }

  .checkangle4 {
    width: 2px;
    height: 350px;
    background: black;
    position: relative;
    transform-origin: 50% 0;
    display: inline-block;
    transform: rotate(25deg);

  }

  .checkangle5 {
    width: 2px;
    height: 350px;
    background: black;
    position: relative;
    transform-origin: 50% 0;
    display: inline-block;
    transform: rotate(5deg);

  }

  .initial {
    width: 2px;
    height: 350px;
    background: black;
    position: relative;
    transform-origin: 50% 0;
    display: inline-block;
    transform: rotate(0deg);

  }

  .Simulation {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    margin: auto;

  }

  @media(max-width: 950px) and (min-width: 100px) {
    .Simulation {
      flex-direction: column;
      margin: auto;
    }

    #value1,
    #value {
      width: 200px;
    }

    .mainSlider {
      margin: 1em auto;
      width: 68vw;
      height: auto;
    }

    .table {
      margin: auto;
      width: 90vw;
      font-size: 0.7em;
    }

    .page {
      margin: auto;
      height: 45vh;
      width: 90vw;
    }
  }
</style>

<div class="Simulation" id="simul">
  <hr>
  <!-- Start of Pendulum -->
  <!-- <div class="page"> -->
  <div class="pen">

    <div class="base">

      <div class="holder"></div>
      <div class="thread" id="threa">
        <div class="knob"></div>
        <div class="pendulum"></div>

      </div>
    </div>
    <br>

  </div>
  <!-- </div> -->

  <!-- End of pendulum -->

  <!-- Start of Input and timer -->
  <div class="content">
    <div class="mainSlider">
      <div class="container">
        <p class="timerHead">Stopwatch</p>
        <div>
          <p style="font-size: 25px;margin-top:1%" class="timerdisplay"> 00 : 00 : 00 : 000 </p>
        </div>
      </div>

      <div class="name"> Angle (degree) </div>
      <div class="slider1">
        <input type="range" id="value1" min="0" max="30" value="0" step="5" onchange="Updatetext(this.value)" class="inputAngle">
        <p class="value1" id="insert">00</p>
      </div>

      <div class="name">No of oscillations</div>
      <div class="slider2">
        <input type="range" id="value" step="{0,10,20}" min="10" max="30" value="0" class="inputOsc">
        <p class="value2" id="value2">10</p>
      </div>

      <div class="button">
        <button class="start" id="starttimer" onclick="check()">Start</button>
        <button class="button disabled" id="resettimer" disabled onclick="reset()">Reset</button><br>
        <button onclick="del()">Clear Table</button>
      </div>
      <span id='msg' style="color: black;padding-top: 2%;"></span>



    </div>
  </div>
  <!-- End of timer and input box -->
</div>
<!-- End Of Main Part -->

<form method="POST">
  <h3 class="head" style="font-family: Arial, Helvetica, sans-serif;font-size: xx-large;">Observation Table</h3>

  <div class="table" id="table">

    <table id="tbl">
      <thead>
        <tr>
          <th>Angle <br> θ </th>
          <th>No of Oscillations <br> N</th>
          <th>Time <br> t(sec) </th>
          <th>Time Period <br> T = t/N </th>
          <th>Acceleration due to gravity <br> G = [4Π&sup2/(T&sup2)]*L<br>Length of thread[L]=1m</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody id="tbody"></tbody>
    </table>
  </div>
  <div class="button" style="text-align: center;margin: auto;display: flex;display: grid;">
    <button type="button" style="width: 130px;color:black;" onclick="calmean()">Claculate Mean of G</button>
    <span id='t' hidden style="font-size:larger;margin-left:2%;font-family: Arial, Helvetica, sans-serif;font-weight:bold">Mean of G : <span id="m" hidden style="font-size:larger;font-family: Arial, Helvetica, sans-serif;font-weight:bold"></span></span>
    <span id='mg' hidden style="font-size:larger;margin-left:2%;font-family: Arial, Helvetica, sans-serif;font-weight:bold"></span>
    <input type="text" name="t" id='t1' value="" style="display:none">
  </div>
  <?php if ($_SESSION['logged_in'] == 'true') { ?>
    <h5><input type="submit" name="Submit" value="Submit Observation" onclick="document.getElementById('t1').value=document.getElementById('t').innerHTML"></h5>
  <?php } ?>
</form>
<script>
  function calmean() {


    var rowCount = tbl.rows.length;
    if (rowCount > 1) {
      document.getElementById('m').removeAttribute('hidden')
      document.getElementById('t').removeAttribute('hidden')
      let sum = 0.0;
      for (var i = rowCount - 1; i > 0; i--) {
        let x = parseFloat(document.getElementById("tbl").rows[i].cells[4].innerHTML);
        sum += x;
      }
      sum /= (rowCount - 1);
      document.getElementById('m').innerHTML = sum.toFixed(2) + " m/s&sup2";


    } else {
      document.getElementById('t').setAttribute('hidden', 'hidden')

      document.getElementById('m').setAttribute('hidden', 'hidden')
      document.getElementById('mg').removeAttribute('hidden')
      document.getElementById('mg').innerHTML = "No data found for mean calculation.";

    }


  }

  function reset() {
    document.getElementById('value1').value = 0;
    document.getElementById('value').value = 0;
    value1.innerHTML = 00;
    value2.innerHTML = 10;
    document.getElementById('resettimer').setAttribute("disabled", "disabled");
    document.getElementById('resettimer').className = 'button disabled';
    document.getElementById('starttimer').removeAttribute('disabled');
    document.getElementById("starttimer").className = 'Start'


  }

  function del() {
    var rowCount = tbl.rows.length;
    if (rowCount == 1) {
      document.getElementById('msg').innerHTML = 'Table is empty.';

    } else {
      for (var i = rowCount - 1; i > 0; i--) {
        tbl.deleteRow(i);
      }
      document.getElementById('msg').innerHTML = 'Table is cleared.';


    }

  }

  function check() {
    let a = document.getElementById('value1').value;
    let o = document.getElementById('value').value;
    if (a != 0 & o != 0) {
      int = setInterval(displayTimer, 10);
      document.getElementById('m').setAttribute('hidden', 'hidden');
      document.getElementById('t').setAttribute('hidden', 'hidden');
      Start();
      document.getElementById('msg').innerHTML = '';
      document.getElementById('resettimer').removeAttribute("disabled");
      document.getElementById('resettimer').className = 'Start';
      document.getElementById("starttimer").setAttribute('disabled', 'disabled');
      document.getElementById('starttimer').className = 'button disabled';


    } else {
      document.getElementById('msg').innerHTML = "Enter all the required details."
    }

  };
  let tab = document.getElementById("table");
  let sim = document.getElementById("simul");
  let the = document.getElementById("theo");
  let val1 = document.getElementById("value1");
  let val2 = document.getElementById("value2");
  let td = document.getElementById("data1");
  var slid1 = document.querySelector(".inputAngle");
  var slid2 = document.querySelector(".inputOsc");
  var value1 = document.querySelector(".value1");
  var value2 = document.querySelector(".value2");

  slid1.oninput = function() {
    value1.innerHTML = this.value;
  }
  slid2.oninput = function() {
    value2.innerHTML = this.value;
  }
  let [milliseconds, seconds, minutes, hours] = [0, 0, 0, 0];
  let timerRef = document.querySelector('.timerdisplay');
  let int;

  function displayTimer() {
    milliseconds += 10;
    if (milliseconds == 1000) {
      milliseconds = 0;
      seconds++;
      if (seconds == 60) {
        seconds = 0;
        minutes++; {
          if (minutes == 60) {
            minutes = 0;
            hours++;
          }
        }
      }
    }
    let h = hours < 10 ? "0" + hours : hours;
    let m = minutes < 10 ? "0" + minutes : minutes;
    let s = seconds < 10 ? "0" + seconds : seconds;
    let ms = milliseconds < 10 ? "00" + milliseconds : milliseconds < 100 ? "0" + milliseconds : milliseconds;


    timerRef.innerHTML = `${h} : ${m} : ${s} : ${ms}`
  }
  document.getElementById('resettimer').addEventListener('click', () => {
    clearInterval(int);
    [milliseconds, seconds, minutes, hours] = [0, 0, 0, 0];
    timerRef.innerHTML = '00 : 00 : 00 : 000';
    document.getElementById('threa').className = 'initial';
    document.getElementById("value1").disabled = false;
    document.getElementById("value").disabled = false;
    document.getElementById("starttimer").disabled = false;
  })

  function Start() {

    var fp = document.getElementById('insert').innerHTML;
    var sp = document.getElementById('value2').innerHTML;
    document.getElementById('mg').setAttribute('hidden', 'hidden')
    while (true) {
      if (fp == 5 && sp == 10) {
        threa.style.animation = "movit5 2.006s ease-in-out 10";

        function dis() {
          clearInterval(int);
          document.querySelector(".timerdisplay").innerHTML = "00 : 00 : 20 : 060";
          addData(20.06, fp, sp);


        }
        document.getElementById('resettimer').addEventListener('click', () => {
          threa.style.animation = "movit0 ease-in-out 0";
          clearTimeout(st);
        })

        let st = setTimeout(dis, 20080)

        break;

      } else if (fp == 5 && sp == 15) {
        threa.style.animation = "movit5 2.006s ease-in-out 15";

        function dis() {
          clearInterval(int);
          document.querySelector(".timerdisplay").innerHTML = "00 : 00 : 30 : 090";
          addData(30.09, fp, sp);

        }
        document.getElementById('resettimer').addEventListener('click', () => {
          threa.style.animation = "movit0 ease-in-out 0";
          clearTimeout(st);
        })
        let st = setTimeout(dis, 30110);
        break;
      } else if (fp == 5 && sp == 20) {
        threa.style.animation = "movit5 2.006s ease-in-out 20";

        function dis() {
          clearInterval(int);
          document.querySelector(".timerdisplay").innerHTML = "00 : 00 : 40 : 120";
          addData(40.12, fp, sp);
        }
        document.getElementById('resettimer').addEventListener('click', () => {
          threa.style.animation = "movit0 ease-in-out 0";
          clearTimeout(st);
        })
        let st = setTimeout(dis, 40140)
        break;
      } else if (fp == 5 && sp == 25) {
        threa.style.animation = "movit5 2.006s ease-in-out 25";

        function dis() {
          clearInterval(int);
          document.querySelector(".timerdisplay").innerHTML = "00 : 00 : 50 : 150";
          addData(50.15, fp, sp);
        }
        document.getElementById('resettimer').addEventListener('click', () => {
          threa.style.animation = "movit0 ease-in-out 0";
          clearTimeout(st);
        })
        let st = setTimeout(dis, 50170)
        break;
      } else if (fp == 5 && sp == 30) {
        threa.style.animation = "movit5 2.006s ease-in-out 30";

        function dis() {
          clearInterval(int);
          document.querySelector(".timerdisplay").innerHTML = "00 : 00 : 60 : 180";
          addData(60.18, fp, sp);
        }
        document.getElementById('resettimer').addEventListener('click', () => {
          threa.style.animation = "movit0 ease-in-out 0";
          clearTimeout(st);
        })
        let st = setTimeout(dis, 60200)
        break;
      }
      if (fp == 10 && sp == 10) {
        threa.style.animation = "movit 2.006s ease-in-out 10";

        function dis() {
          clearInterval(int);
          document.querySelector(".timerdisplay").innerHTML = "00 : 00 : 20 : 060";
          addData(20.06, fp, sp);


        }
        document.getElementById('resettimer').addEventListener('click', () => {
          threa.style.animation = "movit0 ease-in-out 0";
          clearTimeout(st);
        })

        let st = setTimeout(dis, 20080)

        break;

      } else if (fp == 10 && sp == 15) {
        threa.style.animation = "movit 2.006s ease-in-out 15";

        function dis() {
          clearInterval(int);
          document.querySelector(".timerdisplay").innerHTML = "00 : 00 : 30 : 090";
          addData(30.09, fp, sp);

        }
        document.getElementById('resettimer').addEventListener('click', () => {
          threa.style.animation = "movit0 ease-in-out 0";
          clearTimeout(st);
        })
        let st = setTimeout(dis, 30110);
        break;
      } else if (fp == 10 && sp == 20) {
        threa.style.animation = "movit 2.006s ease-in-out 20";

        function dis() {
          clearInterval(int);
          document.querySelector(".timerdisplay").innerHTML = "00 : 00 : 40 : 120";
          addData(40.12, fp, sp);
        }
        document.getElementById('resettimer').addEventListener('click', () => {
          threa.style.animation = "movit0 ease-in-out 0";
          clearTimeout(st);
        })
        let st = setTimeout(dis, 40140)
        break;
      } else if (fp == 10 && sp == 25) {
        threa.style.animation = "movit 2.006s ease-in-out 25";

        function dis() {
          clearInterval(int);
          document.querySelector(".timerdisplay").innerHTML = "00 : 00 : 50 : 150";
          addData(50.15, fp, sp);
        }
        document.getElementById('resettimer').addEventListener('click', () => {
          threa.style.animation = "movit0 ease-in-out 0";
          clearTimeout(st);
        })
        let st = setTimeout(dis, 50170)
        break;
      } else if (fp == 10 && sp == 30) {
        threa.style.animation = "movit 2.006s ease-in-out 30";

        function dis() {
          clearInterval(int);
          document.querySelector(".timerdisplay").innerHTML = "00 : 00 : 60 : 180";
          addData(60.18, fp, sp);
        }
        document.getElementById('resettimer').addEventListener('click', () => {
          threa.style.animation = "movit0 ease-in-out 0";
          clearTimeout(st);
        })
        let st = setTimeout(dis, 60200)
        break;
      }
      if (fp == 15 && sp == 10) {
        threa.style.animation = "movit3 2.006s ease-in-out 10";

        function dis() {
          clearInterval(int);
          document.querySelector(".timerdisplay").innerHTML = "00 : 00 : 20 : 000";
          addData(20.00, fp, sp);


        }
        document.getElementById('resettimer').addEventListener('click', () => {
          threa.style.animation = "movit0 ease-in-out 0";
          clearTimeout(st);
        })

        let st = setTimeout(dis, 20020)

        break;

      } else if (fp == 15 && sp == 15) {
        threa.style.animation = "movit3 2.006s ease-in-out 15";

        function dis() {
          clearInterval(int);
          document.querySelector(".timerdisplay").innerHTML = "00 : 00 : 30 : 000";
          addData(30.00, fp, sp);

        }
        document.getElementById('resettimer').addEventListener('click', () => {
          threa.style.animation = "movit0 ease-in-out 0";
          clearTimeout(st);
        })
        let st = setTimeout(dis, 30020);
        break;
      } else if (fp == 15 && sp == 20) {
        threa.style.animation = "movit3 2.006s ease-in-out 20";

        function dis() {
          clearInterval(int);
          document.querySelector(".timerdisplay").innerHTML = "00 : 00 : 40 : 000";
          addData(40.00, fp, sp);
        }
        document.getElementById('resettimer').addEventListener('click', () => {
          threa.style.animation = "movit0 ease-in-out 0";
          clearTimeout(st);
        })
        let st = setTimeout(dis, 40020)
        break;
      } else if (fp == 15 && sp == 25) {
        threa.style.animation = "movit3 2.006s ease-in-out 25";

        function dis() {
          clearInterval(int);
          document.querySelector(".timerdisplay").innerHTML = "00 : 00 : 50 : 000";
          addData(50.00, fp, sp);
        }
        document.getElementById('resettimer').addEventListener('click', () => {
          threa.style.animation = "movit0 ease-in-out 0";
          clearTimeout(st);
        })
        let st = setTimeout(dis, 50020)
        break;
      } else if (fp == 15 && sp == 30) {
        threa.style.animation = "movit3 2.006s ease-in-out 30";

        function dis() {
          clearInterval(int);
          document.querySelector(".timerdisplay").innerHTML = "00 : 00 : 60 : 000";
          addData(60.18, fp, sp);
        }
        document.getElementById('resettimer').addEventListener('click', () => {
          threa.style.animation = "movit0 ease-in-out 0";
          clearTimeout(st);
        })
        let st = setTimeout(dis, 60020)
        break;
      }
      if (fp == 20 && sp == 10) {
        threa.style.animation = "movit1 2.006s ease-in-out 10";

        function dis() {
          clearInterval(int);
          document.querySelector(".timerdisplay").innerHTML = "00 : 00 : 20 : 060";
          addData(20.06, fp, sp);
        }
        document.getElementById('resettimer').addEventListener('click', () => {
          threa.style.animation = "movit0 ease-in-out 0";
          clearTimeout(st);
        })
        let st = setTimeout(dis, 20080)
        break;
      } else if (fp == 20 && sp == 15) {
        threa.style.animation = "movit1 2.006s ease-in-out 15";

        function dis() {
          clearInterval(int);
          document.querySelector(".timerdisplay").innerHTML = "00 : 00 : 30 : 090";
          addData(30.09, fp, sp);
        }
        document.getElementById('resettimer').addEventListener('click', () => {
          threa.style.animation = "movit0 ease-in-out 0";
          clearTimeout(st);
        })
        let st = setTimeout(dis, 30110)
        break;
      } else if (fp == 20 && sp == 20) {
        threa.style.animation = "movit1 2.006s ease-in-out 20";

        function dis() {
          clearInterval(int);
          document.querySelector(".timerdisplay").innerHTML = "00 : 00 : 40 : 120";
          addData(40.12, fp, sp);
        }
        document.getElementById('resettimer').addEventListener('click', () => {
          threa.style.animation = "movit0 ease-in-out 0";
          clearTimeout(st);
        })
        let st = setTimeout(dis, 40140)
        break;
      } else if (fp == 20 && sp == 25) {
        threa.style.animation = "movit1 2.006s ease-in-out 25";

        function dis() {
          clearInterval(int);
          document.querySelector(".timerdisplay").innerHTML = "00 : 00 : 50 : 150";
          addData(50.15, fp, sp);
        }
        document.getElementById('resettimer').addEventListener('click', () => {
          threa.style.animation = "movit0 ease-in-out 0";
          clearTimeout(st);
        })
        let st = setTimeout(dis, 50170)
        break;
      } else if (fp == 20 && sp == 30) {
        threa.style.animation = "movit1 2.006s ease-in-out 30";

        function dis() {
          clearInterval(int);
          document.querySelector(".timerdisplay").innerHTML = "00 : 00 : 60 : 180";
          addData(60.18, fp, sp);
        }
        document.getElementById('resettimer').addEventListener('click', () => {
          threa.style.animation = "movit0 ease-in-out 0";
          clearTimeout(st);
        })
        let st = setTimeout(dis, 60200)
        break;
      }
      if (fp == 25 && sp == 10) {
        threa.style.animation = "movit4 2.03s ease-in-out 10";

        function dis() {
          clearInterval(int);
          document.querySelector(".timerdisplay").innerHTML = "00 : 00 : 20 : 320";
          addData(20.32, fp, sp);
        }
        document.getElementById('resettimer').addEventListener('click', () => {
          threa.style.animation = "movit0 ease-in-out 0";
          clearTimeout(st);
        })
        let st = setTimeout(dis, 20340)
        break;
      } else if (fp == 25 && sp == 15) {
        threa.style.animation = "movit4 2.03s ease-in-out 15";

        function dis() {
          clearInterval(int);
          document.querySelector(".timerdisplay").innerHTML = "00 : 00 : 30 : 470";
          addData(30.47, fp, sp);
        }
        document.getElementById('resettimer').addEventListener('click', () => {
          threa.style.animation = "movit0 ease-in-out 0";
          clearTimeout(st);
        })
        let st = setTimeout(dis, 30490)
        break;
      } else if (fp == 25 && sp == 20) {
        threa.style.animation = "movit4 2.03s ease-in-out 20";

        function dis() {
          clearInterval(int);
          document.querySelector(".timerdisplay").innerHTML = "00 : 00 : 40 : 620";
          addData(40.62, fp, sp);
        }
        document.getElementById('resettimer').addEventListener('click', () => {
          threa.style.animation = "movit0 ease-in-out 0";
          clearTimeout(st);
        })
        let st = setTimeout(dis, 40640)
        break;
      } else if (fp == 25 && sp == 25) {
        threa.style.animation = "movit4 2.006s ease-in-out 25";

        function dis() {
          clearInterval(int);
          document.querySelector(".timerdisplay").innerHTML = "00 : 00 : 50 : 770";
          addData(50.77, fp, sp);
        }
        document.getElementById('resettimer').addEventListener('click', () => {
          threa.style.animation = "movit0 ease-in-out 0";
          clearTimeout(st);
        })
        let st = setTimeout(dis, 50790)
        break;
      } else if (fp == 25 && sp == 30) {
        threa.style.animation = "movit4 2.006s ease-in-out 30";

        function dis() {
          clearInterval(int);
          document.querySelector(".timerdisplay").innerHTML = "00 : 00 : 60 : 920";
          addData(60.92, fp, sp);
        }
        document.getElementById('resettimer').addEventListener('click', () => {
          threa.style.animation = "movit0 ease-in-out 0";
          clearTimeout(st);
        })
        let st = setTimeout(dis, 60940)
        break;
      }
      if (fp == 30 && sp == 10) {
        threa.style.animation = "movit2 2.006s ease-in-out 10";

        function dis() {
          clearInterval(int);
          document.querySelector(".timerdisplay").innerHTML = "00 : 00 : 20 : 060";
          addData(20.06, fp, sp);
        }
        document.getElementById('resettimer').addEventListener('click', () => {
          threa.style.animation = "movit0 ease-in-out 0";
          clearTimeout(st);
        })
        let st = setTimeout(dis, 20080)
        break;
      } else if (fp == 30 && sp == 15) {
        threa.style.animation = "movit2 2.006s ease-in-out 15";

        function dis() {
          clearInterval(int);
          document.querySelector(".timerdisplay").innerHTML = "00 : 00 : 30 : 090";
          addData(30.09, fp, sp);
        }
        document.getElementById('resettimer').addEventListener('click', () => {
          threa.style.animation = "movit0 ease-in-out 0";
          clearTimeout(st);
        })
        let st = setTimeout(dis, 30110)
        break;
      } else if (fp == 30 && sp == 20) {
        threa.style.animation = "movit2 2.006s ease-in-out 20";

        function dis() {
          clearInterval(int);
          document.querySelector(".timerdisplay").innerHTML = "00 : 00 : 40 : 120";
          addData(40.12, fp, sp);
        }
        document.getElementById('resettimer').addEventListener('click', () => {
          threa.style.animation = "movit0 ease-in-out 0";
          clearTimeout(st);
        })
        let st = setTimeout(dis, 40140)
        break;
      } else if (fp == 30 && sp == 25) {
        threa.style.animation = "movit2 2.006s ease-in-out 25";

        function dis() {
          clearInterval(int);
          document.querySelector(".timerdisplay").innerHTML = "00 : 00 : 50 : 150";
          addData(50.15, fp, sp);
        }
        document.getElementById('resettimer').addEventListener('click', () => {
          threa.style.animation = "movit0 ease-in-out 0";
          clearTimeout(st);
        })
        let st = setTimeout(dis, 50170)
        break;
      } else if (fp == 30 && sp == 30) {
        threa.style.animation = "movit2 2.006s ease-in-out 30";

        function dis() {
          clearInterval(int);
          document.querySelector(".timerdisplay").innerHTML = "00 : 00 : 60 : 180";
          addData(60.18, fp, sp);
        }
        document.getElementById('resettimer').addEventListener('click', () => {
          threa.style.animation = "movit0 ease-in-out 0";
          clearTimeout(st);
        })
        let st = setTimeout(dis, 60200)
        break;
      }
    }

    document.getElementById("value1").disabled = true;
    document.getElementById("value").disabled = true;

    //document.getElementById("starttimer").className = "button disabled";


  }


  function Updatetext(val) {
    if (val == 0) {
      document.getElementById('threa').className = 'checkangle0';
    } else if (val == 5) {
      document.getElementById('threa').className = 'checkangle5';
    } else if (val == 10) {
      document.getElementById('threa').className = 'checkangle';
    } else if (val == 15) {
      document.getElementById('threa').className = 'checkangle3';
    } else if (val == 20) {
      document.getElementById('threa').className = 'checkangle1';
    } else if (val == 25) {
      document.getElementById('threa').className = 'checkangle4';
    } else if (val == 30) {
      document.getElementById('threa').className = 'checkangle2'
    }
  }

  function deleteRow(r) {
    var i = r.parentNode.parentNode.rowIndex;
    document.getElementById("tbl").deleteRow(i);
  }

  let gravity;

  function addData(time, angle, noOfOsc) {
    var fp = document.getElementById('insert').innerHTML;
    var sp = document.getElementById('value2').innerHTML;

    var tr = document.createElement('tr');
    var btn = document.createElement('button');
    //btn.className = "button button";
    btn.innerHTML = "Clear";
    btn.style = "background: red;width: 70px;height: 40px;border-radius: 30px;color: black;cursor: pointer;font-size:medium"
    btn.onclick = function() {
      deleteRow(this);
    }
    var td1 = tr.appendChild(document.createElement('td'));
    var td2 = tr.appendChild(document.createElement('td'));
    var td3 = tr.appendChild(document.createElement('td'));
    var td4 = tr.appendChild(document.createElement('td'));
    var td5 = tr.appendChild(document.createElement('td'));

    var td6 = tr.appendChild(document.createElement('td'));;

    var time1 = time / sp;
    gravity = (4 * (Math.PI ** 2)) / (time1 ** 2);

    td1.innerHTML = "<input type='text' name='angle1[]' value='" + angle + "' readonly='readonly'>";
    td2.innerHTML = "<input type='text' name='oscilation1[]' value='" + noOfOsc + "' readonly='readonly'>";
    td3.innerHTML = "<input type='text' name='time1[]' value='" + time + "' readonly='readonly'>";
    td4.innerHTML = "<input type='text' name='period1[]' value='" + (time / noOfOsc) + "' readonly='readonly'>";
    td5.innerHTML = "<input type='text' name='g1[]' value='" + gravity.toFixed(3) + "' readonly='readonly'>";
    td6.appendChild(btn);

    document.getElementById("tbl").appendChild(tr);

  }
</script>


<?php
if (isset($_POST["Submit"])) {
  $rowCount = count($_POST['angle1']);
  $statement = "Mean of G: 9.811 m/s^2";
  if ($rowCount < 5) {
    echo "<script>alert('Take 5 Readings');</script>";
    echo "<script>window.location='simulation.php?subID=" . $SubID . "&expID=" . $ExpID . "';</script>";
  } else {
    $userName = $_SESSION['email'];
    $sql1 = "Select * from user where Email='$userName'; ";
    $result1 = mysqli_query($db, $sql1);
    $userID;
    while ($rows = mysqli_fetch_assoc($result1)) {
      $userID = $rows['userID'];
    }

    $sql2 = "select * from observationTable where userID = '$userID' and expID = '$ExpID' and subID = '$SubID';";
    $result2 = mysqli_query($db, $sql2);

    $count = mysqli_num_rows($result2);
    if ($count == 0) {
      $sql3 = "INSERT INTO `observationtable` (`subID`, `expID`, `userID`, `rowID`, `typeTable`, `columnCount`, `col1`, `col2`, `col3`, `col4`, `col5`) VALUES ('$SubID', '$ExpID', '$userID', '1','1', '5', 'Angle', 'Number of Oscilation', 'Time', 'Time Period', 'Acceleration due to gravity');";
      mysqli_query($db, $sql3);
      for ($a = 0; $a < 5; $a++) {
        $b = $a + 2;
        $angle = $_POST['angle1'][$a];
        $oscilation = $_POST['oscilation1'][$a];
        $time = $_POST['time1'][$a];
        $period = $_POST['period1'][$a];
        $g = $_POST['g1'][$a];
        $sql4 = "INSERT INTO `observationtable` (`subID`, `expID`, `userID`, `rowID`, `typeTable`, `columnCount`, `col1`, `col2`, `col3`, `col4`, `col5`) VALUES ('$SubID', '$ExpID', '$userID', '$b','1', '5', '$angle', '$oscilation', '$time', '$period', '$g');";
        mysqli_query($db, $sql4);
      }
      $sql6 = "INSERT INTO `observationtable` (`subID`, `expID`, `userID`, `rowID`, `typeTable`, `statement`) VALUES ('$SubID', '$ExpID', '$userID', '7','0','$statement');";
      mysqli_query($db, $sql6);
      echo "<script>window.location='post-test.php?subID=" . $SubID . "&expID=" . $ExpID . "'</script>";
    } else {
      for ($a = 0; $a < 5; $a++) {
        $b = $a + 2;
        $angle = $_POST['angle1'][$a];
        $oscilation = $_POST['oscilation1'][$a];
        $time = $_POST['time1'][$a];
        $period = $_POST['period1'][$a];
        $g = $_POST['g1'][$a];
        $sql5 = "UPDATE `observationTable` SET `col1`='$angle',`col2`='$oscilation',`col3`='$time',`col4`='$period',`col5`='$g' WHERE `subID`= $SubID && `expID`=$ExpID && `rowID`=$b && `userID`=$userID;";
        mysqli_query($db, $sql5);
      }
      $sql7 = "UPDATE `observationTable` SET `statement`='$statement' WHERE `subID`= $SubID && `expID`=$ExpID && `rowID`=7 && `userID`=$userID;";
      mysqli_query($db, $sql7);
      echo "<script>alert('Simulation Completed');</script>";
      echo "<script>window.location='post-test.php?subID=" . $SubID . "&expID=" . $ExpID . "'</script>";
    }
  }
}
?>