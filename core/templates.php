<tr>
    <th scope="row"><?php echo $ID_person ?></th>
    <td><?php echo $name ?></td>
    <td><?php echo $position ?></td>
    <td><?php echo $link_facebook ?></td>
    <td><?php echo $link_twitter ?></td>
    <td><?php echo $link_git ?></td>
    <td><?php echo $link_email ?></td>
    <td scope="col">
        <form method="post" action="forms/edit_person.php" class="">
            <input type="hidden" value='<?php echo $ID_person?>' name="hidden_field">
            <input type="submit" name="edit_submit" value="EDIT" class="btn btn-warning btn-primary btn-block">
        </form>
    </td>
    <td scope="col">
        <form method="post" action="forms/delete_person.php" class="">
            <input type="hidden" value='<?php echo $ID_person?>' name="hidden_field">
            <input type="submit" name="delete_submit" value="DELETE" class="btn btn-danger btn-secondary btn-block">
        </form>
    </td>
</tr>