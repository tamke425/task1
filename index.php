<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/hstyle.css">
  <style>

    body {
      margin: 0;
      padding: 0;
      overflow: hidden;
    }

    #background-video {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
      z-index: -1;
    }

    .container {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      text-align: center;
      z-index: 1;
    }

    .logo {
      width: 300px;
      height: 250px;
      position: absolute;
      top: 25%;
      left: 15%;
    }

    .title {
      position: absolute;
      top: 0%;
      left: 50%;
      transform: translateX(-50%);
      font-size: 50px;
      font-weight: bold;
      text-transform: uppercase;
      letter-spacing: 4px;
      animation: colorize 5s linear infinite;
      white-space: nowrap;
      overflow: hidden;
    }

    @keyframes colorize {
      0% {
        color: #fff;
      }
      25% {
        color: #ffcc00;
      }
      50% {
        color: #ff3300;
      }
      75% {
        color: #9900cc;
      }
      100% {
        color: #fff;
      }
    }

    .member-info {
      display: flex;
     
   
      margin-top: 90%;
    }

    .member {
      flex-basis: 150px;
      margin: 10px;
      padding: 10px;
      border: 1px solid #fff;
      border-radius: 5px;
      color: #ffcc00;
    }

    .member h4 {
      font-size: 16px;
      margin-bottom: 5px;
    }

    .member p {
      font-size: 14px;
      margin: 0;
    }

    .member p a {
      color: #fff;
    }

  </style>
</head>
<body>
  <video autoplay muted loop id="background-video">
    <source src="pexels-taryn-elliott-3115488-1920x1080-24fps.mp4" type="video/mp4">
    Your browser does not support the video tag.
  </video>

  <div class="container">
    <img src="Logo transparent.png" class="logo" alt="Logo">
    <h1 class="title">Welcome to Direct Farmer <br> to <br> Consumer Web App</h1>

    <button class="btn" onclick="window.location.href='admin/index.php'">
      Admin
    </button>
  
    <button class="btn" onclick="window.location.href='home.php'">
      User
    </button>
  
    <button class="btn" onclick="window.location.href='agent/index.php'">
      Agent
    </button>
  </div>
  

<!-- 
  <footer class="footer">
    <div class="container text-center">
      <div class="member-info">
        <div class="member">
          <h4>Yosef Asegid</h4>
          <p>Email: <a href="mailto:member1@example.com">Josephasegid@gmail.com</a></p>
          <p>Phone: <a href="tel:+1234567890">+251936695864</a></p>
        </div>
        <div class="member">
          <h4>Abel Solomon</h4>
          <p>Email: <a href="mailto:member2@example.com">abelsolomon@gmail.com</a></p>
          <p>Phone: <a href="tel:+1234567890">+251930902098</a></p>
        </div>
        <div class="member">
          <h4>Amare Kassahun</h4>
          <p>Email: <a href="mailto:member3@example.com">amarekassahun@gmail.com</a></p>
          <p>Phone: <a href="tel:+1234567890">+251934808979</a></p>
        </div>
        <div class="member">
          <h4>Daniel Tamirat</h4>
          <p>Email: <a href="mailto:member4@example.com">danieltamirat@gmail.com</a></p>
          <p>Phone: <a href="tel:+1234567890">+251924155352</a></p>
        </div>
        <div class="member">
          <h4>Fasika Habtu</h4>
          <p>Email: <a href="mailto:member5@example.com">fasikahabtu@gmail.com</a></p>
          <p>Phone: <a href="tel:+1234567890">+251</a></p>
        </div>
      </div>
    </div>
  </footer> -->
</body>
</html>
