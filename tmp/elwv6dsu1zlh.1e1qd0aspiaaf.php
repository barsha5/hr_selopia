<form action="<?= ($BASE.'/allowanceCategory/create') ?>" method="post" class="form-horizontal">

    <div class="input-prepend">
        <span class="add-on"><i class="icon-envelope icon-black"></i>Category</span>
        <input type="text" id="category_name" name="category_name" value="" class="input-xlarge" />
    </div>
    <br/><br/>



    <div class="control-group">
        <div class="">
            <input type="hidden" name="create" value="create" />
            <button type="submit" class="btn btn-primary"><i class="icon-ok icon-white"></i> Add New Category</button>
        </div>
    </div>

</form>