<tr>
    <th scope="row"><?php echo $ID_person ?></th>
    <td><?php echo $name ?></td>
    <td><?php echo $position ?></td>
    <td><?php echo $link_facebook ?></td>
    <td><?php echo $link_twitter ?></td>
    <td><?php echo $link_git ?></td>
    <td><?php echo $link_email ?></td>
    <td scope="col" class="text-center">
        <!-- <a href="#"><button type="submit" class="btn btn-warning">EDIT PERSON</button></a> -->
        <!-- <a href="forms/delete_person.php"><button id="" type="submit" class="btn btn-danger">DELETE PERSON</button></a> -->
        <form method="post" action="forms/delete_person.php">
            <input type="hidden" value='<?php echo $ID_person?>' name="hidden_field"/>
            <input type="submit" name="id_submit" value="Delete" class="btn btn-danger">
        </form>
    </td>
</tr>