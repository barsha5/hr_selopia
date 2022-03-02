<table width="600" cellpadding="5" class="table table-hover table-bordered">
    <thead>
    <tr>
        <th scope="col">Department Name</th>
        <th scope="col">Department Initial</th>
        <th scope="col">Department Head</th>

    </tr>
    </thead>

    <tbody>
    <?php foreach (($departments?:[]) as $department): ?>
        <tr>
            <td><?= (trim($department['department_name'])) ?></td>
            <td><?= (trim($department['department_initial'])) ?></td>
            <td><?= (trim($department['employee_name'])) ?></td>
            <td><a href="<?= ($BASE.'/department/update/'. $department['id']) ?>" class="btn btn-primary"><i class="icon-edit icon-white"></i> Edit</a>
                &nbsp; <a href="<?= ($BASE.'/department/delete/'. $department['id']) ?>" class="btn btn-danger"><i class="icon-remove icon-white"></i>
                    Delete</a></td>

        </tr>
    <?php endforeach; ?>
    </tbody>

</table>
