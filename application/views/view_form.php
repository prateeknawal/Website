html>
    <body>

    <form align="center" method="GET">
        <input type="text" name="users" id="user_id"><br>
        <input type="submit" id="mysubmit" value="Submit" onClick="addMoreRows(); return false;">
    </form>

    <table id="tbl_id" style="text-align:center" align="center" valign:"top">
        <thead>
            <tr>
                <th>Name</th>
                <th>Score</th>
                <th>Points</th>
                <th>Total</th>
            </tr>
        </thead>
    </table>

    <script type="text/javascript">

      function addMoreRows() {

        var rowsAdded = document.getElementById('user_id').value;

        for(var x=0; x<rowsAdded; x++) {
          var newRow = document.getElementById('tbl_id').insertRow();

          var newCell = newRow.insertCell();
          newCell.innerHTML="<tr><td><input type='text' name='user_name'></td></tr>";

          newCell = newRow.insertCell();
          newCell.innerHTML="<tr><td><input type='text' name='score'></td></tr>";

          newCell = newRow.insertCell();
          newCell.innerHTML="<tr><td><input type='text' name='points'></td></tr>";

          newCell = newRow.insertCell();
          newCell.innerHTML="<tr><td><input type='text' name='total'></td></tr>";

        }

      }
    </script>

    </body>

</html>