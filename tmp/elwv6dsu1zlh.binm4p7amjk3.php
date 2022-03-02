<table width="600" cellpadding="5" class="table table-hover table-bordered">
    <thead>
    <tr>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Mobile</th>
        <th scope="col">Date of Birth</th>
        <th scope="col">Identification</th>
        <th scope="col">Joining Date</th>
    </tr>
    </thead>

    <tbody>
    <?php foreach (($users?:[]) as $user): ?>
        <tr>
            <td><?= (trim($user['name'])) ?></td>
            <td><?= (trim($user['email'])) ?></td>
            <td><?= (trim($user['phone'])) ?></td>
            <td><?= (trim($user['dob'])) ?></td>
            <td><?= (trim($user['identification'])) ?></td>
            <td><?= (trim($user['joining_date'])) ?></td>
            <td><a href="<?= ($BASE.'/employee/update/'. $user['id']) ?>" class="btn btn-primary"><i class="icon-edit icon-white"></i> Edit</a>
                &nbsp; <a href="<?= ($BASE.'/employee/delete/'. $user['id']) ?>" class="btn btn-danger"><i class="icon-remove icon-white"></i>
                    Delete</a></td>

        </tr>
    <?php endforeach; ?>
    </tbody>

</table>
