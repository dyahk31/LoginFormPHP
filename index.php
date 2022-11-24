<?php
session_start();

if(empty($_SESSION['login'])){
	header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css">
    <title>Login FORM</title>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>

<nav class="navbar navbar-expand-lg" style="background-color: #e3f2fd;">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
      </ul>
      <a href="logout_process.php" class="btn btn-outline-danger">Log Out</a>
    </div>
  </div>
</nav>

<div class="content-img">
    <img src="./img/moon (2).png">
</div>

  <div class="content-text">
    <h1>Moon Sites</h1>
    <?php echo "<p>Welcome to Moon Sites, " . $_SESSION['username'] ."!". "</p>"; ?>
    <p>Moon Sites is a website about moon</p>
  </div>
</body>
<script>
    Swal.fire(
    'Berhasil!',
    'Anda berhasil login!',
    'success'
  )
</script>
<!-- 
<script>
  function logout(a){
    swal({
      title: "Are you sure to log out?",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    })
    .then((isOkay) => {
      if(isOkay){
        a.logout();
      }
    });
  }
</script> -->
</html>