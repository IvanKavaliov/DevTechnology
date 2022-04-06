<?php
    session_start();
    if(!$_SESSION){
        header('location: authForm.php');
        exit();
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Edit person form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container border col-md-5 p-3 mt-3" style="background-color: #EEEEEE;">
        <form action="../../controller/changeInfoPerson.php" method="post" role="form" class="form-horizontal p-3" enctype="multipart/form-data">
            <h2 class="text-center mb-4">Edit person form</h2>
            <div class="form-group row">
                <label for="name" class="control-label col-md-2">Name</label>
                <div class="col-md-10">
                    <input type="text" class="form-control" id="name" name="name" value="<?php echo $name?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="position" class="control-label col-md-2">Position</label>
                <div class="col-md-10">
                    <input type="text" class="form-control" id="position" name="position" value="<?php echo $position?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="info" class="control-label col-md-2">Description</label>
                <div class="col-md-10">
                    <textarea class="form-control" id="info" rows="4" style="resize: none;" name="info"><?php echo $info?></textarea>
                </div>
            </div>
            <!-- *need to add style for width label -->
            <div class="form-group row">
                <label for="customFile" class="control-label col-2">Photo</label>
                <div class="col-10">
                    <div class="custom-file">
                        <input type="file" name="image" class="custom-file-input" id="customFile">
                        <label class="custom-file-label" for="customFile" required>Choose file</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="facebook" class="control-label col-md-2">Facebook</label>
                <div class="col-md-10">
                    <input type="text" class="form-control" id="facebook" name="link_facebook" value="<?php echo $linkFacebook?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="mail" class="control-label col-md-2">Mail</label>
                <div class="col-md-10">
                    <input type="email" class="form-control" id="mail" name="link_email" value="<?php echo $linkEmail?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="twitter" class="control-label col-md-2">Twitter</label>
                <div class="col-md-10">
                    <input type="text" class="form-control" id="twitter" name="link_twitter" value="<?php echo $linkTwitter?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="git" class="control-label col-md-2">Git</label>
                <div class="col-md-10">
                    <input type="text" class="form-control" id="git" name="link_git" value="<?php echo $linkGit?>">
                </div>
            </div>
            <div class="row"> 
                <button type="submit" name="saveButton" value="<?php echo $ID_person ?>" class="btn col-2" style="background: #7749F8; color: #ffffff">Save</button>
            </div>
        </form>
    </div>
</body>
<script type="application/javascript">
    $('input[type="file"]').change(function(e) {
    var fileName = e.target.files[0].name;
    $('.custom-file-label').html(fileName);
    });
</script>
</html>