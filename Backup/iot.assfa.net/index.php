<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <title>SkyLab</title>
  <link rel="stylesheet" href="../css/station.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
  <script src="https://code.highcharts.com/highcharts.js"></script>
  <script src="https://code.highcharts.com/modules/exporting.js"></script>
  <script src="https://code.highcharts.com/modules/export-data.js"></script>
  <script src="https://code.highcharts.com/modules/accessibility.js"></script>

  <!-- <link rel="stylesheet" href="css/jquery.mobile-1.4.2.min.css" /> -->
  <script src="js/jquery.js"></script>
  <script src="js/jquery.mobile-1.4.2.min.js"></script>

  <!-- Boxicons CDN Link -->
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <?php
      $StationID = "30C6F74173";
  ?>
  <div class="sidebar">
    <div class="logo-details">
      <!-- <i class='bx bxl-c-plus-plus'></i> -->
      <i class='bx bxs-face-mask'></i>
      <span class="logo_name">SkyLab</span>
    </div>
    <ul class="nav-links">
      <!-- <li>
        <a href="index.php">
          <i class='bx bxs-dashboard'></i>
          <span class="links_name">Trang chủ</span>
        </a>
      </li> -->
      <li>
        <a href="#" class="active">
          <i class='bx bx-box'></i>
          <span class="links_name">Station 1</span>
        </a>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-box'></i>
          <span class="links_name">Station 2</span>
        </a>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-box'></i>
          <span class="links_name">Station 3</span>
        </a>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-box'></i>
          <span class="links_name">Station 4</span>
        </a>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-box'></i>
          <span class="links_name">Station 5</span>
        </a>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-box'></i>
          <span class="links_name">Station 6</span>
        </a>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-box'></i>
          <span class="links_name">Station 7</span>
        </a>
      </li>
      <!-- <li>
        <a href="analytics.html">
          <i class='bx bx-pie-chart-alt-2'></i>
          <span class="links_name">Analytics</span>
        </a>
      </li> -->
      <li>
        <a href="#">
          <i class='bx bx-cog'></i>
          <span class="links_name">Settings</span>
        </a>
      </li>
      <li class="log_out">
        <a href="index.php">
          <i class='bx bx-log-out'></i>
          <span class="links_name">Log out</span>
        </a>
      </li>
    </ul>
  </div>

  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-unite sidebarBtn'></i>
        <span class="dashboard">STATION ID: <?php echo $StationID; ?> </span>
      </div>
      <!-- Search box -->
      <!-- <div class="searchbar">
        <div class="searchbar-wrapper">
          <div class="searchbar-left">
            <div class="search-icon-wrapper">
              <span class="search-icon searchbar-icon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                  <path
                    d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5 6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z">
                  </path>
                </svg>
              </span>
            </div>
          </div> -->

          <!-- <div class="searchbar-center">
            <div class="searchbar-input-spacer"></div>

            <input type="text" class="searchbar-input" maxlength="2048" name="q" autocapitalize="off" autocomplete="off"
              title="Search" role="combobox" placeholder="Search">
          </div> -->

          <!-- <div class="searchbar-right">
            <svg class="voice-search" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
              <path fill="#4285f4"
                d="m12 15c1.66 0 3-1.31 3-2.97v-7.02c0-1.66-1.34-3.01-3-3.01s-3 1.34-3 3.01v7.02c0 1.66 1.34 2.97 3 2.97z">
              </path>
              <path fill="#34a853" d="m11 18.08h2v3.92h-2z"></path>
              <path fill="#fbbc05"
                d="m7.05 16.87c-1.27-1.33-2.05-2.83-2.05-4.87h2c0 1.45 0.56 2.42 1.47 3.38v0.32l-1.15 1.18z">
              </path>
              <path fill="#ea4335"
                d="m12 16.93a4.97 5.25 0 0 1 -3.54 -1.55l-1.41 1.49c1.26 1.34 3.02 2.13 4.95 2.13 3.87 0 6.99-2.92 6.99-7h-1.99c0 2.92-2.24 4.93-5 4.93z">
              </path>
            </svg>
          </div> -->
        </div>
      </div>
      <div class="profile-details">
        <img src="../images/profile.png" alt="">
        <span class="admin_name">Uy</span>
        <i class='bx bx-chevron-down'></i>
      </div>
    </nav>
    <!-- <img src="top-header.png" alt="" /> -->

    <div class="home-content">
      <div class="overview-boxes">
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Temperature</div>
            <div class="number" id="GiaTriNhietDo">__.__</div>
            <div class="number-mini">°C</div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">ONLINE</span>
            </div>
          </div>
          <i class='bx bx-sun card'></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Humidity</div>
            <div class="number" id="GiaTriDoAm">__.__</div>
            <div class="number-mini">%</div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">ONLINE</span>
            </div>
          </div>
          <i class='bx bx-droplet card two'></i>
        </div>

        <div class="box">
          <div class="right-side">
            <div class="box-topic">Light</div>
            <div class="number" id="GiaTriAnhSang">__.__</div>
            <div class="number-mini">lx</div>
            <div class="indicator">
              <!-- <i class='bx bx-down-arrow-alt down'></i> -->
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">ONLINE</span>
            </div>
          </div>
          <i class='bx bxs-sun card four'></i>
        </div>

        <div class="box">
          <div class="right-side">
            <div class="box-topic">Wind speed</div>
            <div class="number">__.__</div>
            <div class="number-mini">km/h</div>
            <div class="indicator">
              <i class='bx bx-down-arrow-alt down'></i>
              <span class="text">OFFLINE</span>
            </div>
          </div>
          <i class='bx bx-wind card three'></i>
        </div>
        
      </div>

      <?php
          require('connectdb.php'); 
          $sql = "SELECT * FROM `DataIoTProject` WHERE ThietBi='". $StationID . "' ORDER BY STT DESC LIMIT 1,40";
          // $sql = "(SELECT * FROM `DataIoTProject` ORDER BY STT DESC LIMIT 20) ORDER BY STT ASC;"
          if ($result = $conn->query($sql)) {
              while ($row = $result->fetch_assoc()) {    	       
                  $NhietDo = $row["NhietDo"];
                  $DoAm = $row["DoAm"];
                  $AnhSang = $row["AnhSang"];
                  $ThoiGian = $row["ThoiGian"];
                  $time= strtotime($ThoiGian) * 1000; // chuyển sang dạng format unix  *1000
              
                  $data[] = "[$time,$NhietDo]";
                  $data1[] = "[$time,$DoAm]";
                  $data2[] = "[$time,$AnhSang]";
                  // $data3[] = "[$time,$row_da]";
                  // echo $data;
              }
              $result->free();
          }
      ?>

      <div class="sales-boxes">
        
        <div class="recent-sales box" style="width:72%;">
            <!-- <div class="title">Chart</div> -->
            <!-- <div class="sales-details"></div> -->
            <!-- <canvas id="myChart" style="width:100%;max-width:600px"></canvas> -->
            <div style="width:95%; height: 10px; margin-left: auto; margin-right: auto;"> </div>
            <div id="Chart1" style="background:black; width:100%; height: 300px; margin-left: auto; margin-right: auto; "> </div>
        </div>

        <script>
            Highcharts.chart('Chart1', {
                chart: {
                    // height: 240,
                    type: 'spline',
                    animation: Highcharts.svg, // don't animate in old IE
                    marginRight: 10,
                    events: {
                        load: function () {
                            // set up the updating of the chart each second
                            var seriesNhietDo = this.series[0];
                            var seriesDoAm = this.series[1];
                            var seriesAnhSang = this.series[2];
                    
                            var lastx;
                            setInterval(function () {
                                var url = 'data.php';
                                $.getJSON(url).done(function(data) {
                                    $.each(data, function (index, json) {  
                                        var thietbi = json.ThietBi;
                                        $("#TenThietBi").html("IMEI: " + thietbi);

                                        var giatrithoigian = json.ThoiGian;
                                        // giatrithoigian = giatrithoigian.replace(/ /g,"T");
                                        // console.log(giatrithoigian);
                                        // var x = Date.parse(giatrithoigian);

                                        var date = new Date(giatrithoigian.replace(/\s+/g, 'T').concat('.000+07:00'));
                                        console.log(date);
                                        var x = date.getTime();
                                        
                                        var giatrinhietdo = parseFloat(json.NhietDo);
                                        $("#GiaTriNhietDo").html(giatrinhietdo);
                                        var giatridoam	= parseFloat(json.DoAm);
                                        $("#GiaTriDoAm").html(giatridoam);
                                        var giatrianhsang = parseFloat(json.AnhSang);
                                        $("#GiaTriAnhSang").html(giatrianhsang);
                                        
                                        console.log(x);
                                        
                                        console.log(giatrinhietdo);
                                        console.log(giatridoam);
                                        console.log(giatrianhsang);
                                        
                                        if(x != lastx){
                                            seriesNhietDo.addPoint([x, giatrinhietdo], true, true);
                                            seriesDoAm.addPoint([x, giatridoam], true, true);
                                            seriesAnhSang.addPoint([x, giatrianhsang], true, true);
                                            lastx = x;
                                        }
                                    });
                                });
                                // $.getJSON('relay.php').done(function(data) {
                                //     $.each(data, function (index, json) {  
                                //         var relay = parseInt(json.Relay1);
                                //         if(relay == 1){
                                //             console.log("ON");
                                //             // $("#ButtonRelay1").html("ON");
                                //             document.getElementById('ButtonRelay1').src = '/img/IMGBtnOn.png';
                                //         }
                                //         else if(relay == 0){
                                //             console.log("OFF");
                                //             // $("#ButtonRelay1").html("OFF");
                                //             document.getElementById('ButtonRelay1').src = '/img/IMGBtnOff.png';
                                //         } 
                                //     });
                                // });
                            }, 1000);
                        }
                    }
                },
                time: {
                    useUTC: false
                },
                title: {
                    text: ''
                },
                accessibility: {
                    announceNewData: {
                        enabled: true,
                        minAnnounceInterval: 15000,
                        announcementFormatter: function (allSeries, newSeries, newPoint) {
                            if (newPoint) {
                                return 'New point added. Value: ' + newPoint.y;
                            }
                            return false;
                        }
                    }
                },

                xAxis: {
                    type: 'datetime',
                    tickPixelInterval: 40
                },

                yAxis: {
                    title: {
                        text: ''
                    }
                },

                plotOptions: {
                    line: {
                        dataLabels: {
                            enabled: false
                        },
                        enableMouseTracking: true
                    }
                },

                tooltip: {
                    fontSize: '14px',
                    xDateFormat: 'Day: %d/%m/%Y <br> Time: %H:%M:%S',
                    shared: true
                },

                //Enable label
                legend: {
                    enabled: true,
                    itemStyle: {
                        fontSize:'10px',
                        // font: '20pt Trebuchet MS, Verdana, sans-serif',
                        // color: '#A0A0A0'
                    }
                },
                //Tắt dấu =
                exporting: {
                    enabled: false
                },

                series: [{
		            name: 'Temperature(°C)',
		            data: [<?php $data_rev = array_reverse($data); echo join($data_rev, ','); ?>],
                color: '#FF0000'
		        },{
		            name: 'Humidity(%)',
		            data: [<?php $data_rev1 = array_reverse($data1); echo join($data_rev1, ','); ?>],
                color: '#0000FF'
		        }, {
		            name: 'Light(lx)',
		            data: [<?php $data_rev2 = array_reverse($data2); echo join($data_rev2, ','); ?>],
                color: '#FCAE1E'
		        }]
            });
        </script> 

        <div class="top-sales box">
          <div class="title">Weather forcast</div>
          <div class="container">
            <div class="cloud front">
              <span class="left-front"></span>
              <span class="right-front"></span>
            </div>
            <span class="sun sunshine"></span>
            <span class="sun"></span>
            <div class="cloud back">
              <span class="left-back"></span>
              <span class="right-back"></span>
            </div>
          </div>
        </div>
        <!-- <div class="top-sales box">
          <div class="title">Control</div>
          <div class="main">
            <div class="up">
              <button class="card1">
                <i class='bx bx-sun temperature'></i>
              </button>
              <button class="card2">
                <i class='bx bx-droplet humidity'></i>
              </button>
            </div>
            <div class="down">
              <button class="card3">
                <i class='bx bx-wind windspeed'></i>
              </button>
              <button class="card4">
                <i class='bx bxs-sun uvindex'></i>
              </button>
            </div>
          </div>
        </div> -->
        
      </div>
      </br>
      <!-- </br> -->
      <div class="sales-boxes">
        <div class="recent-sales box" style="width:100%;">
            <div align="center">
              <?php
                $sql = "SELECT Lati, Longti FROM `DataIoTProject` WHERE ThietBi='30C6F74173' ORDER BY STT DESC LIMIT 1;";
                if ($result = $conn->query($sql)) {
                      while ($row = $result->fetch_assoc()) {    
                          $row_lati = $row["Lati"];
                          $row_longti = $row["Longti"];
                      }
                      $result->free();
                  }
              ?>
              <iframe width="100%" height="550" src="https://maps.google.com/maps?q=<?php echo $row_lati;?>,<?php echo $row_longti;?>&output=embed"></iframe>
            </div>

            <!-- MAP -->
            <!-- <div class="title">Chart</div> -->
            <!-- <div class="sales-details"></div> -->
            <!-- <canvas id="myChart" style="width:100%;max-width:600px"></canvas> -->
            <!-- <div style="width:95%; height: 10px; margin-left: auto; margin-right: auto;"> </div> -->
            <!-- <div id="Chart1" style="background:black; width:100%; height: 300px; margin-left: auto; margin-right: auto; "> </div> -->
        </div>
      </div>
        

    </div>
  </section>

  <script src="../js/station.js"></script>
</body>

</html>