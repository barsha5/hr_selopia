<div class="navbar">
    <div class="navbar-inner">
        <ul class="nav">

            <?php if ($page_head == 'Employee List'): ?>
            <li <?php if ($page_head == 'Employee List'): ?>class="active"<?php endif; ?>><a href="<?= ($BASE.'/') ?>"><i class="icon-th icon-black"></i> Read</a></li>
            <li <?php if ($page_head == 'Create User'): ?>class="active"<?php endif; ?>><a href="<?= ($BASE.'/user/create') ?>"><i class="icon-plus-sign icon-black"></i> Create</a></li>

                <?php if ($page_head == 'Update User'): ?>
                    <li class="active"><a href="javascript:void(0);"><i class="icon-plus-sign icon-black"></i> Update</a></li>
                <?php endif; ?>

            <?php endif; ?>


            <?php if ($page_head == 'Selopia Department List'): ?>
                <li <?php if ($page_head == 'Selopia Department List'): ?>class="active"<?php endif; ?>><a href="<?= ($BASE.'/department') ?>"><i class="icon-th icon-black"></i> Read</a></li>
                <li <?php if ($page_head == 'Department'): ?>class="active"<?php endif; ?>><a href="<?= ($BASE.'/department/create') ?>"><i class="icon-th icon-black"></i> Create</a></li>

                <?php if ($page_head == 'Update Department'): ?>
                    <li class="active"><a href="javascript:void(0);"><i class="icon-plus-sign icon-black"></i> Update</a></li>
                <?php endif; ?>

            <?php endif; ?>

            <?php if ($page_head == 'Selopia Attendance List'): ?>
                <li <?php if ($page_head == 'Selopia Attendance List'): ?>class="active"<?php endif; ?>><a href="<?= ($BASE.'/attendance') ?>"><i class="icon-th icon-black"></i> Read</a></li>
                <li <?php if ($page_head == 'Attendance'): ?>class="active"<?php endif; ?>><a href="<?= ($BASE.'/attendance/create') ?>"><i class="icon-th icon-black"></i> Create</a></li>

                <?php if ($page_head == 'Update Attendance'): ?>
                    <li class="active"><a href="javascript:void(0);"><i class="icon-plus-sign icon-black"></i> Update</a></li>
                <?php endif; ?>

            <?php endif; ?>

            <?php if ($page_head == 'Employee Allowance Category List'): ?>
                <li <?php if ($page_head == 'Employee Allowance Category List'): ?>class="active"<?php endif; ?>><a href="<?= ($BASE.'/allowanceCategory') ?>"><i class="icon-th icon-black"></i> Read</a></li>
                <li <?php if ($page_head == 'Allowance Category'): ?>class="active"<?php endif; ?>><a href="<?= ($BASE.'/allowanceCategory/create') ?>"><i class="icon-th icon-black"></i> Create</a></li>

                <?php if ($page_head == 'Update Category'): ?>
                    <li class="active"><a href="javascript:void(0);"><i class="icon-plus-sign icon-black"></i> Update</a></li>
                <?php endif; ?>

            <?php endif; ?>

            <?php if ($page_head == 'Selopia Leave Record List'): ?>
                <li <?php if ($page_head == 'Selopia Leave Record List'): ?>class="active"<?php endif; ?>><a href="<?= ($BASE.'/leaveManagement') ?>"><i class="icon-th icon-black"></i> Read</a></li>
                <li <?php if ($page_head == 'Leave Management'): ?>class="active"<?php endif; ?>><a href="<?= ($BASE.'/leaveManagement/create') ?>"><i class="icon-th icon-black"></i> Create</a></li>

                <?php if ($page_head == 'Update Leave Information'): ?>
                    <li class="active"><a href="javascript:void(0);"><i class="icon-plus-sign icon-black"></i> Update</a></li>
                <?php endif; ?>

            <?php endif; ?>

            <?php if ($page_head == 'Selopia Organigram'): ?>
                <li <?php if ($page_head == 'Selopia Organigram'): ?>class="active"<?php endif; ?>><a href="<?= ($BASE.'/organigram') ?>"><i class="icon-th icon-black"></i> Read</a></li>
                <li <?php if ($page_head == 'Organigram'): ?>class="active"<?php endif; ?>><a href="<?= ($BASE.'/organigram/create') ?>"><i class="icon-th icon-black"></i> Create</a></li>

                <?php if ($page_head == 'Update Organigram'): ?>
                    <li class="active"><a href="javascript:void(0);"><i class="icon-plus-sign icon-black"></i> Update</a></li>
                <?php endif; ?>

            <?php endif; ?>

            <?php if ($page_head == 'Selopia Allowance List'): ?>
                <li <?php if ($page_head == 'Selopia Allowance List'): ?>class="active"<?php endif; ?>><a href="<?= ($BASE.'/tada') ?>"><i class="icon-th icon-black"></i> Read</a></li>
                <li <?php if ($page_head == 'Enter Allowance'): ?>class="active"<?php endif; ?>><a href="<?= ($BASE.'/tada/create') ?>"><i class="icon-th icon-black"></i> Create</a></li>

                <?php if ($page_head == 'Update Allowance'): ?>
                    <li class="active"><a href="javascript:void(0);"><i class="icon-plus-sign icon-black"></i> Update</a></li>
                <?php endif; ?>

            <?php endif; ?>






        </ul>
    </div>
</div>