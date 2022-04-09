<?php
    $userData = require_once "../model/adminData.php";
    session_start();
    if($_SESSION == null or ($_SESSION['login'] != $userData['login'] && $_SESSION['password'] != $userData['password'])){
        header('location: forms/authForm.php');
        exit();
    }
    require_once "../model/connectionToDatabase.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title>Admin panel</title>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body style="min-height: 100%">
    <main>
        <nav class="navbar navbar-expand-lg navbar-light rounded col-xl-10 mx-auto" style="background-color: #7749F8;">
            <div class="container-fluid">
                <a class="navbar-brand" href="#" style="color:antiquewhite; font-family: Inter; font-style: normal; font-size: 20px; font-weight: 800;">Admin Panel</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="http://m44736af.beget.tech/" style="color:antiquewhite;">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" style="color:antiquewhite;">Link_1</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" style="color:antiquewhite;">Link_2</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" style="color:antiquewhite;">Link_3</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container"><h1>Our Team</h1><hr></div>
        <div class="container mt-3 mb-3 center-block">
            <form method="post" action="forms/addPersonForm.php">
                <input type="submit" name="add_submit" value="Add new person" class="btn btn-block" style="background-color: #7749F8; color: white;">
            </form>
        </div>
        <?php
            $template = "../model/personTemplate.php";
            $pathDatabase = "../model/connectionToDatabase.php";
            $pathQuery = "../model/queries.php";
            require_once "../controller/allDataTeam.php";
        ?>
        <footer>
            <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
                PHP Study, 2022
            </div>
        </footer>
    </main>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>