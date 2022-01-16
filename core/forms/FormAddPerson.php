<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Add person</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <div class="contacts" id="contact_us">
        <div class="container">
            <div class="contacts-section__form-wrapper">
            <form action="action.php" method="post">
                <div class="col-md-4 mb-3">
                    <label for="validationServer01">Name</label>
                    <input type="text" class="form-control is-valid" id="name" name="name" placeholder="Input Name" required>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="formGroupExampleInput2">Position</label>
                    <input type="text" class="form-control" id="position" name="position" placeholder="Input Position" required>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="formGroupExampleInput2">Info</label>
                    <input type="text" class="form-control" id="info" name="info" placeholder="Input Info" required>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="formGroupExampleInput2">Facebook</label>
                    <input type="text" class="form-control" id="link_facebook" name="link_facebook" placeholder="https://www.facebook.com/" required>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="formGroupExampleInput2">Twitter</label>
                    <input type="text" class="form-control" id="link_twitter" name="link_twitter" placeholder="https://twitter.com/" required>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="formGroupExampleInput2">Git</label>
                    <input type="text" class="form-control" id="link_git" name="link_git" placeholder="https://github.com/" required>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="formGroupExampleInput2">E-mail</label>
                    <input type="text" class="form-control" id="link_email" name="link_email" placeholder="example@mail.ru" required>
                </div>
                <button type="submit" class="btn btn-primary">ADD PERSON</button> 
            </form>
            </div>
        </div>
    </div>
</body>
</html>