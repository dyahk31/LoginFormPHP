<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <title>Login FORM</title>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

<div class="col-md-5 offset-md-5">
    <div class="card" style="width: 18rem;">
    <img src="https://www.skandinavisk.com/dw/image/v2/BGWV_PRD/on/demandware.static/-/Library-Sites-skandinavisk-shared/default/dwe8e65595/Fragrances/Fragrance_Preview_Images_RO.jpg?sw=768&sfrm=jpg&q=90" class="card-img-top" alt="...">
    <div class="card-body">
        <form action="login_process.php" method="post">
        <div class="mb-3">
            <label for="username" class="form-label">Your Username :</label>
            <input type="username" class="form-control" id="username" name="username" aria-describedby="username" placeholder="username">
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Your Password :</label>
            <input type="password" class="form-control" id="password" name="password" aria-describedby="password" placeholder="password">
        </div>
        <center>
        <p>Don't have an account?<br>
            <a href="register.php">Register Here</a></p>
        <button type="submit" class="btn btn-outline-info">SUBMIT</button>
        </center>
        </form>
    </div>
    </div>
</div>

</body>
</html>