  //---------------Current----------------//
  function calculate() {
    var R1value = parseFloat(document.getElementById("R1").value);
    var R2value = parseFloat(document.getElementById("R2").value);
    var R3value = parseFloat(document.getElementById("R3").value);
    var Vvalue = parseFloat(document.getElementById("V").value);


    var current = Vvalue / (R1value + R2value + R3value);

    document.getElementById("A").value = parseFloat(current).toFixed(3);

  }



  //-----------------Add Table--------------------//

  let volt = [];
  let current = [];

  function addItem() {
    R1 = document.getElementById("R1").value;
    R2 = document.getElementById("R2").value;
    R3 = document.getElementById("R3").value;
    V = document.getElementById("V").value;
    A = document.getElementById("A").value;

    var html = "<tr>";
    html += "<td><input type='text' name='R1[]' value='" + R1 + "' readonly='readonly'></td>";
    html += "<td><input type='text' name='R2[]' value='" + R2 + "' readonly='readonly'></td>";
    html += "<td><input type='number' name='R3[]' value='" + R3 + "' readonly='readonly'></td>";
    html += "<td><input type='number' name='V[]' value='" + V + "' readonly='readonly'></td>";
    html += "<td><input type='number' name='I[]' value='" + A + "' readonly='readonly'></td>";
    html += "</tr>";



    var row = document.getElementById("tbody").insertRow();
    row.innerHTML = html;

    volt.push(V);
    current.push(A);
  }


  //------------------------Displaygraph------------//

  function Display() {
    document.getElementById('myChart').style.visibility = 'visible';

    var ctx = document.getElementById("myChart");
    var myChart = new Chart(ctx, {
      type: "line",
      data: {
        labels: current,
        datasets: [{
          data: volt,
          label: "Voltage vs Current",
          borderColor: "red",
          fill: false
        }, ]
      }
    });
  }


  //-------------------------Clear-------------------------//  

  function clearRow() {
    //  location.reload()
    var tableHeaderRowCount = 1;
    var table = document.getElementById("table");
    var rowCount = table.rows.length;
    for (var i = tableHeaderRowCount; i < rowCount; i++) {
      table.deleteRow(tableHeaderRowCount);
      volt.pop();
      current.pop();
    }
    document.getElementById('myChart').style.visibility = 'hidden';
  }