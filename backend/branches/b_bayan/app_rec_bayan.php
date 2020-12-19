<?php include'dbconfig.php';?>
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title></title>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta name="robots" content="noindex, nofollow">
  <meta name="googlebot" content="noindex, nofollow">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<style>button,h1,tbody,thead{
    color:black;
}</style>

  <script
    type="text/javascript"
    src="//code.jquery.com/jquery-2.2.4.js"

  ></script>
<!--<link rel="stylesheet" href="css/bootstrap.css">-->

    <!--<link rel="stylesheet" type="text/css" href="/css/result-light.css">-->

      <link rel="stylesheet" type="text/css" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">
      <script type="text/javascript" src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
      <script type="text/javascript" src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
  <style type="text/css">

  </style>
  <!-- TODO: Missing CoffeeScript 2 -->

  <script type="text/javascript">


    window.onload=function(){

        /* Custom filtering function which will search data in column four between two values */
        $(document).ready(function () {

            $.fn.dataTable.ext.search.push(
                function (settings, data, dataIndex) {
                    var min = $('#min').datepicker("getDate");
                    var max = $('#max').datepicker("getDate");
                                        var startDate = new Date(data[3])
                    if (min == null && max == null) { return true; }
                    if (min == null && startDate <= max) { return true;}
                    if(max == null && startDate >= min) {return true;}
                    if (startDate <= max && startDate >= min) { return true; }
                    return false;
                }
            );


            $("#min").datepicker({ onSelect: function () { table.draw(); }, changeMonth: true, changeYear: true , dateFormat:"dd-MM-yy"});
            $("#max").datepicker({ onSelect: function () { table.draw(); }, changeMonth: true, changeYear: true, dateFormat:"dd-MM-yy" });
            var table = $('#example').DataTable({
              dom: 'Bfrtip',
             buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
                        ]

                });

            // Event listener to the two range filtering inputs to redraw on input
            $('#min, #max').change(function () {
                table.draw();
            });
        });

    }

</script>

</head>
<body>
      <h1 align="center" color="black">Fontanilla-Halili Dental Patients' Appointment Record</h1>
     <table border="0" cellspacing="5" cellpadding="5">
        <tbody>
            <tr>
                <td>From Date:</td>
                <td><input name="min" id="min" type="text" readonly ></td>
            </tr>
            <tr>
                <td>To Date:</td>
                <td><input name="max" id="max" type="text" readonly ></td>
            </tr>
        </tbody>
    </table>
    <table width="100%" class="display" id="example" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Appointment#</th>
                        <th>Patient_id</th>
                        <th>Branch</th>
                        <th>Sched_date</th>
                        <th>Sched_time</th>
                        <th>Reason</th>
                        <th>Status</th>
                        <th>Dentist</th>


                    </tr>
                    </thead>

      <!--   <tfoot>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </tfoot> -->
                   <tbody>
<?php

                    $sql = "SELECT * FROM appointments WHERE branch ='Dasma-Bayan' ";

                    $result = $conn->query($sql);
                    if ($result->num_rows > 0)
                    {
                        // output data of each row
                        while($row = $result->fetch_assoc())
                        {

                            $appointment_id = $row['appointment_id'];
                            $patient_id = $row['patient_id'];

                            $branch = $row['branch'];
                            $sched_date = $row['sched_date'];
                            $sched_time = $row['sched_time'];
                            $reason = $row['reason'];
                            $status = $row['status'];
                            $dr = $row['dr_name'];
                            // $notes = $row['notes'];



                            echo    "<tr>
                                    <td>A-$appointment_id</td>
                                    <td>P-$patient_id</td>
                                    <td>$branch</td>
                                    <td>$sched_date</td>
                                    <td>$sched_time</td>
                                    <td>$reason</td>
                                    <td>$status</td>
                                    <td>$dr</td>

                                    </tr>";
                        }

                    }

?>
                </tbody>
    </table>

  <script>
    // tell the embed parent frame the height of the content
    if (window.parent && window.parent.parent){
      window.parent.parent.postMessage(["resultsFrame", {
        height: document.body.getBoundingClientRect().height,
        slug: "2bkbx2y3"
      }], "*")
    }
  </script>

  <!--  <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script> -->
            <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
            <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
            <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js">

            </script>
</body>
</html>
