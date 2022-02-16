<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Add person form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <div class="container border col-md-5 p-3 mt-3" style="background-color: #EEEEEE;">
        <form action="../../controller/addPerson.php" method="post" role="form" class="form-horizontal p-3" enctype="multipart/form-data">
            <h2 class="text-center mb-4">Add person form</h2>
            <div class="form-group row">
                <label for="name" class="control-label col-md-2">Name</label>
                <div class="col-md-10">
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="position" class="control-label col-md-2">Position</label>
                <div class="col-md-10">
                    <input type="text" class="form-control" id="position" name="position" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="info" class="control-label col-md-2">Description</label>
                <div class="col-md-10">
                    <textarea class="form-control" id="info" rows="4" style="resize: none;" name="info"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <span class="control-label col-2">Photo</span>
                <!-- *need to add style for width label -->
                <div class="col-10">
                    <input type="file" name="image" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile" required>Choose file</label>
                </div>
            </div>
            <div class="form-group row">
                <label for="facebook" class="control-label col-md-2">Facebook</label>
                <div class="col-md-10">
                    <input type="text" class="form-control" id="facebook" name="link_facebook">
                </div>
            </div>
            <div class="form-group row">
                <label for="mail" class="control-label col-md-2">Mail</label>
                <div class="col-md-10">
                    <input type="email" class="form-control" id="mail" name="link_email">
                </div>
            </div>
            <div class="form-group row">
                <label for="twitter" class="control-label col-md-2">Twitter</label>
                <div class="col-md-10">
                    <input type="text" class="form-control" id="twitter" name="link_twitter">
                </div>
            </div>
            <div class="form-group row">
                <label for="git" class="control-label col-md-2">Git</label>
                <div class="col-md-10">
                    <input type="text" class="form-control" id="git" name="link_git">
                </div>
            </div>
            <div class="row"> 
                <button type="submit" class="btn col-2" style="background: #7749F8; color: #ffffff">Save</button>
            </div>
        </form>
    </div>
</body>
</html>