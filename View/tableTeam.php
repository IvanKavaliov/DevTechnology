<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>All person</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body class="table-dark">
  <h1 class="text-center">All team list</h1>
  <table class="table table-hover table-dark">
    <thead>
      <td colspan="7"  class="text-center">
        <form method="post" action="forms/addPersonForm.php">
            <input type="submit" name="add_submit" value="ADD PERSON" class="btn btn-success btn-block">
        </form>
      </td>
      <td colspan="2" class="text-center">
        <h2>Admin panel for SHOPNO</h2>
      </td>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Position</th>
        <th scope="col">Facebook</th>
        <th scope="col">Twitter</th>
        <th scope="col">GIT</th>
        <th scope="col">E-mail</th>
        <th scope="col" class="text-center" colspan="2">Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $template = "../model/personTemplate.php";
        $pathDatabase = "../model/connectionToDatabase.php";
        $pathQuery = "../model/queries.php";
        require_once "../controller/allDataTeam.php";
      ?>
    </tbody>
  </table>
</body>
</html>