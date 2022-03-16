<div class="container mb-3 col-11">
    <div class="row col-sm-9 col-md-12 col-lg-6 col-xl-5 pt-3 justify-content-between rounded border">
    <!-- style="height: 50px; width:500px; padding-top: 13px;" -->
        <div class="d-flex flex-row justify-content-between">
            <div class="block col-9 col-md-10">
                <p><?php echo $name." - ".$position ?></p>
            </div>
            <div class="block col-2 col-md-1">
                <form method="post" action="../controller/editPerson.php">
                    <input type="hidden" value='<?php echo $ID_person?>' name="editSubmit">
                    <input type="image" src="../images/edit.png" alt="Edit" name="editSubmit">
                </form>
            </div>
            <div class="block col-1 col-md-1">
                <form method="post" action="../controller/deletePerson.php">
                    <input type="hidden" value='<?php echo $ID_person?>' name="deleteSubmit">
                    <input type="image" src="../images/delete.png" alt="Delete" name="deleteSubmit" onclick="return confirm('Do you really want to DELETE?')">
                </form>
            </div>
        </div>
    </div>
</div>