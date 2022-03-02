<form action="<?= ($BASE.'/leaveManagement/create') ?>" method="post" class="form-horizontal">

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
        <span class="add-on"><i class="icon-envelope icon-black"></i>Start Date</span>
        <input type="date" id="start_date" name="start_date" value="" class="input-xlarge" />
    </div>
    <br/><br/>

    <div class="input-prepend">
        <span class="add-on"><i class="icon-headphones icon-black"></i>End Date</span>
        <input type="date" id="end_date" name="end_date" value="" class="input-xlarge" />
    </div><br/><br/>



    <div class="control-group">
        <div class="">
            <input type="hidden" name="create" value="create" />
            <button type="submit" class="btn btn-primary"><i class="icon-ok icon-white"></i> Add New Leave</button>
        </div>
    </div>

</form>