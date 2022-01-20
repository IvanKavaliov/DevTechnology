<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>All person</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>    
    <table class="table table-hover table-dark">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Position</th>
        <th scope="col">Facebook</th>
        <th scope="col">Twitter</th>
        <th scope="col">GIT</th>
        <th scope="col">E-mail</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
    <?php
    include "orm/Database.php";
    $template = "templates.php";
    include "query_all_data_team.php";
    mysqli_close($connection);
    ?>
    </tbody>
    <td colspan="8"  class="text-center"><a href="forms/form_add_person.php"><button type="submit" class="btn btn-success btn-block">ADD PERSON</button></a></td>
  </table>
</body>
</html>