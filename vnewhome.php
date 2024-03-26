<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>


<style>
  body {
    
   background-image:radial-gradient(rgb(255, 255, 255),rgb(141, 220, 237));
     background-repeat: no-repeat;
    background-size: cover;
    justify-content: center;
    text-align: center;
  }
  h1{
    color: rgb(19, 18, 18);
  }
  h3{
    text-transform: capitalize;
  }
    
        .grid-layout{
            border: 1px;
            background-color: octal;
        }
    .carousel-item{
        width:100%;
        height:100%;

    }
    .nav-link {
      color:white;
    }
    .navbar-toggler {
      background-color: white;
    }
.card{
  background-color: aliceblue;
}
.card:hover{
  transform:scale(1.05);
}
.nav-link:hover{
  color:aqua;

}
</style>
</head>
<body >
<header>
  <h1>Iray</h1>
</header>
<nav class="navbar navbar-expand-lg navbar-light bg-dark transparent-navbar">
  <div class="container-fluid">
      <a class="navbar-brand" href="#"><img src="icon.jpeg" width="30px" height="30px" alt="hacking" class="rounded-circle"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse  justify-content-end" id="navbarNav">
          <ul class="navbar-nav">
              <li class="nav-item">
                  <a class="nav-link" href="bootstrapIray.html">Home</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="vlogin.php">login</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="vsignin.php">sign up</a>
              </li>
              <form class="d-flex">
                <input class="form-control me-2" type="text" placeholder="Search">
                <button class="btn btn-primary" type="button">Search</button>
              </form>
          </ul>
      </div>
  </div>
</nav>
<br>
<div class="container">
<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner justify content-center">
      <div class="carousel-item active">
          <img src="https://wallpapercave.com/wp/wp5709594.jpg" class="d-block w-100 " alt="Image 1" height="500" width="100%">
      </div>
      <div class="carousel-item">
          <img src="https://wallpapercave.com/wp/wp9183263.jpg" class="d-block w-100" alt="Image 2" height="500" width="100%">
      </div>
      <div class="carousel-item">
          <img src="https://hdqwalls.com/wallpapers/lenovo-pro-gaming-pc.jpg" class="d-block w-100" alt="Image 3" height="500" width="100%">
      </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
<br>
<div class="card">
    <h5 class="card-header rounded">some free antivirus softwares</h5>
<br></div>
<div class="row">
 <div class="col-sm-4">
<div class="card" style="width: 400px;">
    <img class="card-img-top rounded-circle" src="2mcaffee.jpeg" alt="Card image">
    <div class="card-body">
      <h4 class="card-title">McAfee</h4>
      <p class="card-text">Some example text.</p>
      <a href="#" class="btn btn-primary">free</a>
    </div>
  </div>
</div>
  <div class="col-sm-4">
  <div class="card " style="width: 400px;">
    <img class="card-img-top rounded-circle" src="1norton.jpeg" alt="Card image">
    <div class="card-body">
      <h4 class="card-title">norton</h4>
      <p class="card-text">Some example text.</p>
      <a href="#" class="btn btn-primary">free</a>
    </div>
  </div></div>
  <div class="col-sm-4">
  <div class="card" style="width: 400px;;">
    <img class="card-img-top rounded-circle" src="3mcafee.jpeg" alt="Card image">
    <div class="card-body">
      <h4 class="card-title">quickheal</h4>
      <p class="card-text">Some example text.</p>
      <a href="#" class="btn btn-primary">free</a>
    </div>
  </div></div>
</div>
<br><hr>
<div class="container"> 
    <div class="row grid-layout"> 
        <div class="col-md-2"><img src="th.jpeg" alt="flipper zero" width="200px" height="200px" class="rounded"></div>
     <div class="col-md-10"> <h3>flipperzero</h3><p>1.4" Monochrome LCD Display/5-Button Directional Pad/USB Type-C/Sub-1 GHz Transceiver</p>
      <pre><big>3,500/</big><s>5000</s><br><button type="button" class="btn btn-primary">buy</button>  </pre> </div>
   </div><hr> 
   <div class="row grid-layout" >
  <div class="col-md-2"><img src="yagi antenna.jpg" alt="yagi antenna" width="200px" height="200px"  class="rounded"></div>
  <div class="col-md-10"> <h3>yagi antenna</h3><p>ELECTROPRIME 2.4GHz 13DBI-15DBI Yagi WLAN WiFi Wireless Antenna for Router X8S9</p><pre><big>3,500/</big><s>2,800</s>   <br><button type="button" class="btn btn-primary">buy</button> </pre>
  </div></div><hr>
<div class="row grid-layout">
  <div class="col-md-2"><img src="crowdstrike-falcon.webp" alt="crowdstrike falcon" width="200px" height="200px"  class="rounded"></div>
  <div class="col-md-10"> <h3>crowd strike falcon</h3><p>Powered by the CrowdStrike® Security Cloud and world-class AI, the Falcon platform leverages real-time indicators of attack, threat intelligence</p> <pre><big>500/</big><s>1000</s> <br><button type="button" class="btn btn-primary">buy</button> </pre>
  </div></div><hr>
<div class="row grid-layout">
  <div class="col-md-2"><img src="ra.jpeg" alt="rasperry pi 5" width="200px" height="200px"  class="rounded"></div>
  <div class="col-md-10"> <h3>Raspberry 5</h3><p> Raspberry Pi 5 Model B 4GB RAM Redefine Possibilities with The Raspberry Pi 5 Model B 4GB RAMUnleash Power-Packed Performance and Endless Innovation Single Board Computer</p> <pre><big>8,000/</big><s>15000</s>  <br><button type="button" class="btn btn-primary">buy</button> </pre>
  </div></div><hr>
  <div class="row grid-layout">
  <div class="col-md-2"><img src="usb data blocker.jpg" alt="usb data blocker" width="200px" height="200px" class="rounded"></div>
  <div class="col-md-10"> <h3>usb data bloker</h3><p>PortaPow USB-A to USB-C Data Blocker</p> <pre><big>2,500/</big><s>5000</s>  <br><button type="button" class="btn btn-primary">buy</button> </pre>
  </div></div><hr>
  <div class="row grid-layout">
  <div class="col-md-2"><img src="doorlocker.jpg" alt="door locker" width="200px" height="200px"></div> 
  <div class="col-md-10"> <h3>door locker</h3><p>QUBO Smart Door Lock Essential from Hero Group | 5-Way Unlocking | Fingerprint | Pincode | RFID Card | Bluetooth Mobile App | Mechanical Key | OTP Access | 1 Year Brand Warranty | (Black)</p> <pre><big>3,500/</big><s>5000</s>  <br><button type="button" class="btn btn-primary">buy</button> </pre>
  </div></div><hr>
  <div class="row grid-layout">
  <div class="col-md-2"><img src="alfa.webp" alt="alfa" width="200px" height="200px"></div>
  <div class="col-md-10"> <h3>alfa</h3><p>Superior Wi-Fi Performance Professionally Tuned Wireless, Better Range & Coverage Increased Bandwidth, More Applications Increased Wireless Signal Penetration</p> <pre><big>3,500/</big><s>5000</s>  <br><button type="button" class="btn btn-primary">buy</button> </pre>
  </div></div>
  </div>
  <hr>
  <br>
<footer>
     <ul class="pagination justify-content-center">
        <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">Next</a></li>
      </ul>
<hr>
<p>this content is made in collaboration with vishal and ponaalagar,at webtechnology lab in admin block which is located at kongu engineering college,erode ,perundurai</p>
</footer>
</div>
</body>
</html>