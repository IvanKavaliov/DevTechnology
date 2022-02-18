<?php
    require_once "../model/connectionToDatabase.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Headers · Bootstrap v5.1</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/headers/">
    <link href="../css/headers.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="headers.css" rel="stylesheet">
  </head>
<body>
    <main>
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
        <div class="container"><h1>Our Team</h1><hr></div>
        <div class="container mt-3 center-block">
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
    </main>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>