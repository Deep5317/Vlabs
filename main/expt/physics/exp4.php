<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Energy Band Gap</title>
    <link rel="stylesheet" href="../css/stylePhy4.css" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <form>
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-lg-5">
            <div class="mt-2">
              <div class="tablehead obs spc diodeselect" id="tablehead">
                <h4>Select The Diode</h4>
                <select class="form-select" id="inlineFormSelectPref">
                  <!-- <option selected>Choose...</option> -->
                  <option value="../images/bandgapSilicon.svg">Silicon</option>
                  <option value="../images/bandgapGermanium.svg">Germanium</option>
                </select>
              </div>

              
            </div>
            <div class="tablehead obs spc mt-2" id="tablehead">
              <h4>OBSERVATION TABLE</h4>
            </div>

            <div class="table mt-2">
              <table id="table1">
                <tr>
                  <th>Sr no.</th>
                  <th>T(<sup>O</sup>C)</th>
                  <th>T(<sup>O</sup>K)</th>
                  <th>I<sub>s</sub>(µA)</th>
                  <th>T<sup>2</sup>(<sup>O</sup>K)<sup>2</sup></th>
                  <th>
                    <sup>10<sup>3</sup></sup
                    >&frasl;<sub>T</sub>(<sup>O</sup>K)<sup>-1</sup>
                  </th>
                  <th>
                    log<sup>I<sub>s</sub></sup
                    >&frasl;<sub>T<sup>2</sup></sub>
                  </th>
                </tr>
                <tr>
                  <td>
                    <input class="srno" id="srno1" type="text" disabled />
                  </td>
                  <td><input class="tempc" type="text" disabled /></td>
                  <td><input class="tempk" type="text" disabled /></td>
                  <td><input class="current" type="text" disabled /></td>
                  <td><input class="tempsqr" type="text" disabled /></td>
                  <td><input class="tempinv" type="text" disabled /></td>
                  <td><input class="log" type="text" disabled /></td>
                </tr>
                <tr>
                  <td><input class="srno" type="text" disabled /></td>
                  <td><input class="tempc" type="text" disabled /></td>
                  <td><input class="tempk" type="text" disabled /></td>
                  <td><input class="current" type="text" disabled /></td>
                  <td><input class="tempsqr" type="text" disabled /></td>
                  <td><input class="tempinv" type="text" disabled /></td>
                  <td><input class="log l2" type="text" disabled /></td>
                </tr>
                <tr>
                  <td><input class="srno" type="text" disabled /></td>
                  <td><input class="tempc" type="text" disabled /></td>
                  <td><input class="tempk" type="text" disabled /></td>
                  <td><input class="current" type="text" disabled /></td>
                  <td><input class="tempsqr" type="text" disabled /></td>
                  <td><input class="tempinv" type="text" disabled /></td>
                  <td><input class="log l3" type="text" disabled /></td>
                </tr>
                <tr>
                  <td><input class="srno" type="text" disabled /></td>
                  <td><input class="tempc" type="text" disabled /></td>
                  <td><input class="tempk" type="text" disabled /></td>
                  <td><input class="current" type="text" disabled /></td>
                  <td><input class="tempsqr" type="text" disabled /></td>
                  <td><input class="tempinv" type="text" disabled /></td>
                  <td><input class="log" type="text" disabled /></td>
                </tr>
                <tr>
                  <td><input class="srno" type="text" disabled /></td>
                  <td><input class="tempc" type="text" disabled /></td>
                  <td><input class="tempk" type="text" disabled /></td>
                  <td><input class="current" type="text" disabled /></td>
                  <td><input class="tempsqr" type="text" disabled /></td>
                  <td><input class="tempinv" type="text" disabled /></td>
                  <td><input class="log" type="text" disabled /></td>
                </tr>
                <tr>
                  <td><input class="srno" type="text" disabled /></td>
                  <td><input class="tempc" type="text" disabled /></td>
                  <td><input class="tempk" type="text" disabled /></td>
                  <td><input class="current" type="text" disabled /></td>
                  <td><input class="tempsqr" type="text" disabled /></td>
                  <td><input class="tempinv" type="text" disabled /></td>
                  <td><input class="log" type="text" disabled /></td>
                </tr>
                <tr>
                  <td><input class="srno" type="text" disabled /></td>
                  <td><input class="tempc" type="text" disabled /></td>
                  <td><input class="tempk" type="text" disabled /></td>
                  <td><input class="current" type="text" disabled /></td>
                  <td><input class="tempsqr" type="text" disabled /></td>
                  <td><input class="tempinv" type="text" disabled /></td>
                  <td><input class="log" type="text" disabled /></td>
                </tr>
                <tr>
                  <td><input class="srno" type="text" disabled /></td>
                  <td><input class="tempc" type="text" disabled /></td>
                  <td><input class="tempk" type="text" disabled /></td>
                  <td><input class="current" type="text" disabled /></td>
                  <td><input class="tempsqr" type="text" disabled /></td>
                  <td><input class="tempinv" type="text" disabled /></td>
                  <td><input class="log" type="text" disabled /></td>
                </tr>
              </table>
            </div>

            
            <div class="flex mt-2 py-3 w-100">
              <div class="tablehead obs spc" id="tablehead">
                <h4>CALCULATION</h4>
              </div>
              <!-- <button type="button" class="btn btn-outline-primary mr-4" data-bs-toggle="modal" data-bs-target="#staticBackdrop" >Graph</button> -->
              <!-- <button type="button" class="btn btn-primary mx-4"  id="downloadj">Download</button> -->
            </div>

            <div class="formula">
              <h4>E<sub>g</sub> = 2.303 * 8.62 * k * slope</h4>
              <h6 class="formula-desc">
                where,<br />
                k is Boltzman’s constant ( 8.62 x 10<sup>-5</sup> eV)
              </h6>

              <div class="ebg py-4">
                <h4>Energy band gap:</h4>
                <div class="d-flex">
                  <h6>
                    2.303 x 8.62 x 10<sup>-5</sup> x
                    <input
                      class="slopeinp"
                      type="text"
                      placeholder="Enter slope"
                    />
                  </h6>
                  <div class="ebgres">
                      <h6>&nbsp;&nbsp;&nbsp;E<sub>g </sub>: <span class="ebgvalue"></span> eV</h6>
                    </div>
              </div>

                <div class="py-3 calcbtn">
                  <button
                    type="button"
                    class="btn btn-outline-primary mr-4"
                    data-bs-toggle="modal"
                    data-bs-target="#staticBackdrop"
                  >
                    Graph
                  </button>
                  <button class="btn btn-outline-primary ebgbtn">
                    Calculate
                  </button>
                  <button type="button" class="btn btn-outline-primary ml-3" id="download">
                    Download
                  </button>
                </div>

                <div class="ebgres">
                  <h4>E<sub>g </sub>: <span class="ebgvalue"></span> eV</h4>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xs-12 col-lg-7 bt">
            <div class="center-height">
              <div class="simulation-container">
                <object
                  type="image/svg+xml"
                  class="ml-4"
                  id="main-svg"
                  data="../images/bandgapSilicon.svg"
                ></object>
                <div id="snackbar" class="instruct1"></div>
                <input
                  class="btn btn-primary btn-sbt"
                  onclick="myFunction()"
                  value="Submit Observation"
                />
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
    <div
      class="modal fade"
      id="staticBackdrop"
      data-bs-backdrop="static"
      data-bs-keyboard="false"
      tabindex="-1"
      aria-labelledby="staticBackdropLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="staticBackdropLabel">Graph</h1>
            <button
              type="button"
              class="close"
              aria-label="Close"
              data-bs-dismiss="modal"
            >
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="graph p-4" id="graph" style="margin-top: 10px">
              <div class="tablehead obs" id="graphhead">
                <h4>log(Is / T^2) vs 1/T</h4>
              </div>
              <canvas id="myChart"></canvas>
            </div>
            
          </div>
          <div class="modal-footer">
            <div class="slope-div">
              <div class="slope">
                <div>
                  <h4 class="svalue">Slope is <span class="slopev"></span></h4>
                </div>
              </div>
            </div>
            <button type="button" class="btn btn-primary calcslope">
                Calculate The Slope
            </button>
            <button
              type="button"
              class="btn btn-secondary"
              data-bs-dismiss="modal"
            >
              Close
            </button>
            <button type="button" class="btn btn-primary" id="downloadgraph">
              Download Graph
            </button>
          </div>
        </div>
      </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>

    <script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"
    ></script>
    <script src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="../js/tablegraphPhy4.js"></script>
    <!-- <script src="index.js"></script> -->
    <script
      src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
      integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
      integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
      crossorigin="anonymous"
    ></script>
  </body>
</html>


