<table width="600" cellpadding="5" class="table table-hover table-bordered">
    <thead>
    <tr>
        <th scope="col">Allowance Category Name</th>
    </tr>
    </thead>

    <tbody>
    <?php foreach (($categories?:[]) as $category): ?>
        <tr>
            <td><?= (trim($category['category_name'])) ?></td>
            <td><a href="<?= ($BASE.'/allowanceCategory/update/'. $category['id']) ?>" class="btn btn-primary"><i class="icon-edit icon-white"></i> Edit</a>
                &nbsp; <a href="<?= ($BASE.'/allowanceCategory/delete/'. $category['id']) ?>" class="btn btn-danger"><i class="icon-remove icon-white"></i>
                    Delete</a></td>
        </tr>
    <?php endforeach; ?>
    </tbody>

</table>
