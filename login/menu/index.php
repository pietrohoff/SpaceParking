<?php session_start();?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" name="viewport">
  <title>Menu Principal</title>

  <link rel="stylesheet" href="modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="modules/ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="modules/fontawesome/web-fonts-with-css/css/fontawesome-all.min.css">

  <link rel="stylesheet" href="modules/summernote/summernote-lite.css">
  <link rel="stylesheet" href="modules/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="css/demo.css">
  <link rel="stylesheet" href="css/style.css">

   
  <style>
    /* Always set the map height explicitly to define the size of the div
     * element that contains the map. */
    #map {
      height: 100%;
    }
    /* Optional: Makes the sample page fill the window. */
    html, body {
      height: 100%;
      margin: 0;
      padding: 0;
    }
  </style>
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="ion ion-navicon-round"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="ion ion-search"></i></a></li>
          </ul>
          <div class="search-element">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search">
            <button class="btn" type="submit"><i class="ion ion-search"></i></button>
          </div>
        </form>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg">
            <i class="ion ion-android-person d-lg-none"></i>
            <div class="d-sm-none d-lg-inline-block"></div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <a href="profile.html" class="dropdown-item has-icon">
                <i class="ion ion-android-person"></i> Perfil
              </a>
              <a href="RS/index.html" class="dropdown-item has-icon">
                <i class="ion ion-log-out"> Sair </i>
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.php">Menu</a>
          </div>
          <div class="sidebar-user">
            <div class="sidebar-user-picture">
              <img alt="image" src="img/avatar/avatar-1.jpeg">
            </div>
            <div class="sidebar-user-details">
              <div class="user-name"><?php echo $_SESSION['nomeusu'];?></div>
              <div class="user-role">
                <?php echo $_SESSION['emailusu'];?>
              </div>
            </div>
          </div>
          <ul class="sidebar-menu">  
             <li>
              <a href="RS/index.html"><i class="ion ion-cash"></i><span>Pagamento</span></a>
            </li>
            <li>
              <a href="/historico/index.html"><i class="ion ion-stats-bars"></i><span>Histórico</span></a>
            </li>
            <li>
              <a href="/configuracoes/index.php"><i class="ion ion-android-settings"></i><span>Configurações</span></a>
            </li>      
           </ul>
          <div class="p-3 mt-4 mb-4">
            <a href="logout.php" class="btn btn-secondary btn-shadow btn-round has-icon has-icon-nofloat btn-block">
              <i class="ion ion-help-buoy"></i> <div>Sair</div>
            </a>
          </div>
        </aside>
      </div>            
    </div>
  </div>
  <script src="modules/jquery.min.js"></script>
  <script src="modules/popper.js"></script>
  <script src="modules/tooltip.js"></script>
  <script src="modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="modules/scroll-up-bar/dist/scroll-up-bar.min.js"></script>
  <script src="js/sa-functions.js"></script>
  <script src="modules/chart.min.js"></script>
  <script src="modules/summernote/summernote-lite.js"></script>
 
  <script>
  var ctx = document.getElementById("myChart").getContext('2d');
  var myChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
      datasets: [{
        label: 'Statistics',
        data: [460, 458, 330, 502, 430, 610, 488],
        borderWidth: 2,
        backgroundColor: 'rgb(87,75,144)',
        borderColor: 'rgb(87,75,144)',
        borderWidth: 2.5,
        pointBackgroundColor: '#ffffff',
        pointRadius: 4
      }]
    },
    options: {
      legend: {
        display: false
      },
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: true,
            stepSize: 150
          }
        }],
        xAxes: [{
          gridLines: {
            display: false
          }
        }]
      },
    }
  });
  </script>
  <script src="js/scripts.js"></script>
  <script src="js/custom.js"></script>
  <script src="js/demo.js"></script>
  <div id="map"></div>
  <script>
    var map;
    function initMap() {
      map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: -34.397, lng: 150.644},
        zoom: 15,
        disableDefaultUI: true,
        zoomControl: true
      });infoWindow = new google.maps.InfoWindow;

// Try HTML5 geolocation.
if (navigator.geolocation) {
  navigator.geolocation.getCurrentPosition(function(position) {
    var pos = {
      lat: position.coords.latitude,
      lng: position.coords.longitude
    };

    map.setCenter(pos);
  }, function() {
    handleLocationError(true, infoWindow, map.getCenter());
  });
} else {
  // Browser doesn't support Geolocation
  handleLocationError(false, infoWindow, map.getCenter());
}
}

function handleLocationError(browserHasGeolocation, infoWindow, pos) {
infoWindow.setPosition(pos);
infoWindow.setContent(browserHasGeolocation ?
                      'Error: The Geolocation service failed.' :
                      'Error: Your browser doesn\'t support geolocation.');
infoWindow.open(map);

    }
  </script>
  <script async defer
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8ov-jY9f9GIsh0UEw2zk7odZeRvPz5mE&callback=initMap">
  </script>  
</body>
</html>