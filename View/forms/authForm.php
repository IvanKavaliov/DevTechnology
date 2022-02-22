<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Admin Authorization</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body class="d-flex flex-column min-vh-100">
    <div class="container center-block" >
        <header class="d-flex flex-wrap justify-content-left py-1 mb-4 text-center rounded" style="background-color: #7749F8;">
            <ul class="nav">
            <li class="nav-item"><a href="#" class="nav-link active" style="color:antiquewhite; font-family: Inter; font-style: normal; font-size: 20px; font-weight: 800;">AdminPanel</a></li>
            <li class="nav-item"><a href="#" class="nav-link" style="color:antiquewhite;">Link_1</a></li>
            <li class="nav-item"><a href="#" class="nav-link" style="color:antiquewhite;">Link_2</a></li>
            <li class="nav-item"><a href="#" class="nav-link" style="color:antiquewhite;">Link_3</a></li>
            <li class="nav-item"><a href="#" class="nav-link" style="color:antiquewhite;">Link_4</a></li>
            </ul>
        </header>
    </div>
    <div class="container border col-md-4 p-3 center-block" style="background-color: #EEEEEE;">
        <form action="../../controller/authController.php" method="post" role="form" class="p-3" enctype="multipart/form-data">
            <h2 class="text-center mb-4">Admin Authorization</h2>
            <div class="form-group">
                <label for="login" class="control-label">Login</label>
                <div>
                    <input type="text" class="form-control" id="login" name="login" required>
                </div>
            </div>
            <div class="form-group">
                <label for="password" class="control-label">Password</label>
                <div>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
            </div>
            <div class="row"> 
                <button type="submit" class="btn col-2" style="background: #7749F8; color: #ffffff">Submit</button>
            </div>
        </form>
    </div>
    <footer class="fixed-bottom">
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
            PHP Study, 2022
        </div>
    </footer>
</body>
</html>