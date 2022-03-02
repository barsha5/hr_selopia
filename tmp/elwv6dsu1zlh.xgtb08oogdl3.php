<table width="600" cellpadding="5" class="table table-hover table-bordered">
    <thead>
    <tr>
        <th scope="col">Name</th>
        <th scope="col">Selopia ID</th>
        <th scope="col">Designation</th>
        <th scope="col">Department</th>
        <th scope="col">Manager</th>

    </tr>
    </thead>

    <tbody>
    <?php foreach (($organigram?:[]) as $organigram): ?>
        <tr>
            <td><?= (trim($organigram['employee_name'])) ?></td>
            <td><?= (trim($organigram['dept_initial'])) ?>-<?= (trim($organigram['employee_id'])) ?></td>
            <td><?= (trim($organigram['designation'])) ?></td>
            <td><?= (trim($organigram['department_name'])) ?></td>
            <td><?= (trim($organigram['manager_name'])) ?></td>
            <td><a href="<?= ($BASE.'/organigram/update/'. $organigram['id']) ?>" class="btn btn-primary"><i class="icon-edit icon-white"></i> Edit</a>
                &nbsp; <a href="<?= ($BASE.'/organigram/delete/'. $organigram['id']) ?>" class="btn btn-danger"><i class="icon-remove icon-white"></i>
                    Delete</a></td>

        </tr>
    <?php endforeach; ?>
    </tbody>

</table>
