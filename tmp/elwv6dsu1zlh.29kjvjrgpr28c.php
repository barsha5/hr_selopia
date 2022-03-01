<form action="<?= ($BASE.'/tada/create') ?>" method="post" class="form-horizontal" enctype="multipart/form-data">

    <div class="input-prepend">
        <span class="add-on"><i class="icon-envelope icon-black"></i>Name</span>
        <select name="employee_id">
            <?php foreach (($employee_drp_data?:[]) as $row): ?>
                <option value="<?= ($row['id']) ?>" ><?= ($row['name']) ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <br/><br/>

    <div class="input-prepend">
        <span class="add-on"><i class="icon-envelope icon-black"></i>Category</span>
        <select name="category">
            <?php foreach (($category_drp_data?:[]) as $row): ?>
                <option value="<?= ($row['id']) ?>" ><?= ($row['category_name']) ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <br/><br/>

    <div class="input-prepend">
        <span class="add-on"><i class="icon-envelope icon-black"></i>Description</span>
        <input type="text" id="description" name="description" value="" class="input-xlarge" />
    </div>
    <br/><br/>

    <div class="input-prepend">
        <span class="add-on"><i class="icon-envelope icon-black"></i>Amount</span>
        <input type="text" id="amount" name="amount" value="" class="input-xlarge" />
    </div>
    <br/><br/>

    <div class="input-prepend">
        <span class="add-on"><i class="icon-envelope icon-black"></i>Date</span>
        <input type="date" id="date" name="date" value="" class="input-xlarge" />
    </div>
    <br/><br/>

    <div class="input-prepend">
        <span class="add-on"><i class="icon-envelope icon-black"></i>Upload Doc</span>
        <input type="file" id="image_url" name="image_url" VALUE="" class="input-xlarge" />
    </div>
    <br/><br/>

    <div class="input-prepend">
        <span class="add-on"><i class="icon-envelope icon-black"></i>Approval Status</span>
        <select name="approval_status">
            <option value="1" >Approved</option>
            <option value="0" >Pending</option>
        </select>
    </div>
    <br/><br/>


    <div class="input-prepend">
        <span class="add-on"><i class="icon-envelope icon-black"></i>Approved By</span>
        <select name="approved_by">
            <?php foreach (($employee_drp_data?:[]) as $row): ?>
                <option value="<?= ($row['id']) ?>"><?= ($row['name']) ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <br/><br/>

    <div class="input-prepend">
        <span class="add-on"><i class="icon-envelope icon-black"></i>Payment Status</span>
        <select name="payment_status">
            <option value="1">Paid</option>
            <option value="0">Pending</option>
        </select>
    </div>
    <br/><br/>


    <div class="control-group">
        <div class="">
            <input type="hidden" name="create" value="create" />
            <button type="submit" class="btn btn-primary"><i class="icon-ok icon-white"></i>Add Information</button>
        </div>
    </div>

</form>