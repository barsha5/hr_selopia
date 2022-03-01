<table width="600" cellpadding="5" class="table table-hover table-bordered">
    <thead>
    <tr>
        <th scope="col">Name</th>
        <th scope="col">Allowance Category</th>
        <th scope="col">Description</th>
        <th scope="col">Amount</th>
        <th scope="col">Date</th>
        <th scope="col">Image</th>
        <th scope="col">Approval Status</th>
        <th scope="col">Approved By</th>
        <th scope="col">Payment Status</th>

    </tr>
    </thead>

    <tbody>
    <?php foreach (($tada?:[]) as $tada): ?>
        <tr>
            <td><?= (trim($tada['employee_name'])) ?></td>
            <td><?= (trim($tada['allowanceCategory'])) ?></td>
            <td><?= (trim($tada['description'])) ?></td>
            <td><?= (trim($tada['amount'])) ?></td>
            <td><?= (trim($tada['date'])) ?></td>
            <td>

                <?php if ($tada['image_url']=='defaultImage.jpg'): ?>
                    <span>N/A</span>
                    <?php else: ?><button type="button" class="btn btn-info btn-lg open-AddImgDialog" data-image-id="../../ui/assets/tada_image/<?= (trim($tada['image_url'])) ?>" data-toggle="modal" data-target="#viewImg">View</button>
                <?php endif; ?>

            </td>
            <td>
                <?php if ($tada['approval_status']==0): ?>
                    <span>Pending</span>
                    <?php else: ?><span>Approved</span>
                <?php endif; ?>
            </td>
            <td><?= (trim($tada['approval_provider'])) ?></td>
            <td>
                <?php if ($tada['payment_status']==0): ?>
                    <span>Pending</span>
                    <?php else: ?><span>Paid</span>
                <?php endif; ?>

            </td>
            <td><a href="<?= ($BASE.'/tada/update/'. $tada['id']) ?>" class="btn btn-primary"><i class="icon-edit icon-white"></i> Edit</a>
                &nbsp; <a href="<?= ($BASE.'/tada/delete/'. $tada['id']) ?>" class="btn btn-danger"><i class="icon-remove icon-white"></i>
                    Delete</a></td>

        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

<div class="modal hide fade" id="viewImg">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h3>Document</h3>
    </div>
    <div class="modal-body">
        <img id="my_image" width="100%"/>
        <embed id="my_pdf" frameborder="0" width="100%" height="400px">
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a id="download_link" download><button type="button" class="btn btn-primary" id="download-image">Download</button></a>
    </div>
</div>

<script src="../../ui/js/jquery.slim.min.js"></script>
<script>
    $(document).on("click", ".open-AddImgDialog", function () {
        let imgsrc = $(this).data('image-id');
        let extension = imgsrc.split(".").pop();
        let img = document.getElementById('my_image');
        let pdf = document.getElementById('my_pdf');

        if(extension=="pdf") {
            $('#my_pdf').attr('src',imgsrc);
            img.style.display = 'none';
            pdf.style.display = 'inline';
            pdf.style.visibility = 'visible';
        } else {
            $('#my_image').attr('src',imgsrc);
            pdf.style.display = 'none';
            img.style.display = 'inline';
            img.style.visibility = 'visible';

        }
        $('#download_link').attr('href',imgsrc);
    })
</script>