<table width="600" cellpadding="5" class="table table-hover table-bordered">
    <thead>
    <tr>
        <th scope="col">Employee Name</th>
        <th scope="col">Start Date</th>
        <th scope="col">End Date</th>
        <th scope="col">Duration</th>

    </tr>
    </thead>

    <tbody>
    <?php foreach (($leaveList?:[]) as $leaveList): ?>
        <tr>
            <td><?= (trim($leaveList['employee_name'])) ?></td>
            <td><?= (trim($leaveList['start_date'])) ?></td>
            <td><?= (trim($leaveList['end_date'])) ?></td>
            <td><?= (trim($leaveList['duration'])) ?></td>
            <td><a href="<?= ($BASE.'/leaveManagement/update/'. $leaveList['id']) ?>" class="btn btn-primary"><i class="icon-edit icon-white"></i> Edit</a>
                &nbsp; <a href="<?= ($BASE.'/leaveManagement/delete/'. $leaveList['id']) ?>" class="btn btn-danger"><i class="icon-remove icon-white"></i>
                    Delete</a></td>

        </tr>
    <?php endforeach; ?>
    </tbody>

</table>
