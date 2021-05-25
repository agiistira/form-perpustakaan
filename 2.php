<?php
$host="localhost";
$user="root";
$pass="";
$db="data_perpustakaan";
$conn=mysqli_connect($host, $user, $pass, $db)or die("koneksi gagal");
?>

<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Nama',     11],
          ['Id Perpustakaan',      2],
          ['Judul Buku',  2],
          ['Nama Penerbit', 2],
          ['Tahun Terbit',    7]
          ['No Hp',    7]

          <?php
                    while( $row = mysql_fetch_array($result) ){
                        extract($row);
                        echo "['{$name}', {$ip}, {$ip}, {$jb}, {$nb}, {$tb}, {$nh}],";
                    }
                    ?>
        ]);

        var options = {
          title: 'My Daily Activities'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
  </body>
</html>
