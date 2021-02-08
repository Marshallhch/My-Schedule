<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Schedule Dashboard</title>
  <link rel="stylesheet" href="/myschedule/css/style.css">
</head>

<body>
  <div class="wrap">
    <header>
      <div class="center headerCenter">
        <span class="hollow"></span>
        <h1>Schedule Dashboard</h1>
        <div class="mIcon">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </header>
    <div class="center">
      <div class="container">
        <div class="item">
          <div class="graph-circle">
            <div class="circle-graph-container">
              <div class="circle-graph easyPieChart" data-percent="30">
                <p class="totalPercent">30%</p>
                <!-- <canvas width="300" height="300"></canvas> -->
              </div>
            </div>
            <p class="totalTit">Total Process Rates</p>
          </div>

        </div>
        <div class="item"></div>
        <div class="item"></div>
        <div class="item"></div>
        <div class="item"></div>
        <div class="item"></div>
      </div>
    </div>
  </div>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/easy-pie-chart/2.1.6/jquery.easypiechart.min.js"></script>
  <script src=/myschedule/js/custom.js></script>
</body>

</html>