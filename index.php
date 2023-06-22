<?php
if (isset($_POST["masuk"])) {
  $masuk = $_POST["masuk"];
  if ($masuk == 'login')
  {
    header("location: login.php");
  }
  if ($masuk == 'registrasi')
  {
    header("location: registrasi.php");
  }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>E-PERPUSTAKKAN | Beranda</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
  <style>
    body, h1 {
      font-family: "Raleway", sans-serif;
    }
    body, html {
      height: 100%;
      background-color: #f0f0f0;
      font-family: Arial, sans-serif;
      background-image: url(bg.jpg);
      background-size: cover;
    }
    .bgimg {
      background-image: url('bg.jpg');
      min-height: 100%;
      background-position: center;
      background-size: cover;
    }
    button[name="masuk"], button[name="registrasi"] {
      background: none;
      border: none;
      padding: 0;
      font: inherit;
      cursor: pointer;
      text-decoration: underline;
      color: white;
    }
    .w3-display-middle {
      text-align: center;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      color: white;
    }
  </style>
</head>
<body>
  <form action="" method="POST">
    <div class="bgimg w3-display-container w3-animate-opacity w3-text-white">
      <div class="w3-display-topleft w3-padding-large w3-xlarge">
        <button type="submit" name="masuk" value="login">LOGIN</button>
        <button type="submit" name="masuk" value="registrasi">REGISTRASI</button>
      </div>
      <div class="w3-display-middle">
        <h1 class="w3-jumbo w3-animate-top">E-PERPUSTAKAAN</h1>
        <hr class="w3-border-grey" style="margin:auto;width:40%">
        <p class="w3-large w3-center">TRIAL</p>
      </div>
    </div>
  </form>
</body>
</html>
