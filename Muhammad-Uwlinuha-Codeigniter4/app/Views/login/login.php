<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <title>Login</title>
    </head>
    <body style="background-color: #3a3a3a;">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mx-auto mt-5">
                <div class="card p-4" style="top: 100px;">
            <?php
            if(session()->getFlashdata('message')){ ?>
            <div class="alert alert-info">
                <?= session()->getFlashdata('message') ?>
            </div>
            <?php } ?>
            <form method="post"  action="<?= base_url('LoginAdmin/auth') ?>">
                <h1 class="h3 mb-3 font-weight-normal text-center">Login Admin</h1>
                <div class="form-group m-4 mt-5">
                <h5>Username</h5>
                <input type="text" class="form-control" name="username" id="username" required="" placeholder="Masukkan Username">
                </div>
                <div class="form-group m-4">
                <h5>Password</h5>
                <input type="password" class="form-control" name="password" id="password" required="" placeholder="Masukkan Password">
                </div>
                <div class="form-group mt-5 position-relative">
                <button class="btn btn-primary btn-block position-relative" style="left: 20px;" type="submit">Login</button>
                <a href="/" class="text-decoration-none text-danger position-absolute" style="right: 20px; top:10px;">Kembali</a>
                </div>
            </form>
                </div>
            </div>

        </div>  
    </div>

        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        -->
    </body>
</html>