<form action="<?= ($BASE.'/tada/update') ?>" method="post" class="form-horizontal">

    <div class="input-prepend">
        <span class="add-on"><i class="icon-user icon-black"></i> Name </span>
        <select name="employee_id">
            <?php foreach (($employee_drp_data?:[]) as $row): ?>
                <option value="<?= ($row['id']) ?>"


                <?php if ($POST['employee_id']==$row['id']): ?>
                    selected
                <?php endif; ?>


                ><?= ($row['name']) ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <br/><br/>

    <div class="input-prepend">
        <span class="add-on"><i class="icon-user icon-black"></i>Approval Status</span>
        <select name="approval_status">

            <?php if ($POST['approval_status'] == '0'): ?>
                
                    <option value="1" >Approved</option>
                    <option value="0" selected>Pending</option>
                

                <?php else: ?>
                    <option value="1" selected>Approved</option>
                    <option value="0" >Pending</option>
                

            <?php endif; ?>

        </select>
    </div><br/><br/>

    <div class="input-prepend">
        <span class="add-on"><i class="icon-user icon-black"></i> Approved By </span>
        <select name="approved_by">
            <?php foreach (($employee_drp_data?:[]) as $row): ?>
                <option value="<?= ($row['id']) ?>"

                <?php if ($POST['approved_by']==$row['id']): ?>
                    selected
                <?php endif; ?>


                ><?= ($row['name']) ?></option>
            <?php endforeach; ?>
        </select>
    </div><br/><br/>

    <div class="input-prepend">
        <span class="add-on"><i class="icon-user icon-black"></i>Payment Status</span>
        <select name="payment_status">

            <?php if ($POST['payment_status']== '0'): ?>
                
                    <option value="1" >Paid</option>
                    <option value="0" selected>Pending</option>
                

                <?php else: ?>
                    <option value="1" selected>Paid</option>
                    <option value="0" >Pending</option>
                
            <?php endif; ?>
            
        </select>
    </div><br/><br/>



    <div class="control-group">
        <div class="">
            <input type="hidden" name="id" value="<?= ($POST['id']) ?>" />
            <input type="hidden" name="update" value="update" />
            <button type="submit" class="btn btn-primary"><i class="icon-edit icon-white"></i> Update</button>
        </div>
    </div>

</form>