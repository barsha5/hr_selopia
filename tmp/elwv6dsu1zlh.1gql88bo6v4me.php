<!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?= ($BASE.'/'.$UI) ?>" />
    <title><?= ($sitename) ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="../../ui/css/bootstrap.css" media="screen">
    <link href="../../ui/css/crud.css" rel="stylesheet" media="screen">
</head>

<body>
    <div class="jumbotron">
        <h1><?= ($page_head) ?></h1>
    </div>



    <?php if ($message): ?>
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong><?= ($message) ?></strong>
        </div>
    <?php endif; ?>







    <form action="<?= ($BASE.'/') ?>" method="post" class="form-horizontal">
    <fieldset>
        <legend>Welcome to Selopia</legend>
        <label>Username</label>
        <input type="email" name="email" placeholder="Enter Selopia Email">
        <label>Password</label>
        <input type="password" name="password" placeholder="Password">
        <br/><br/>
        <div class="control-group">
            <div class="">
                <input type="hidden" name="login" value="login" />
                <button type="submit" class="btn btn-primary"><i class="icon-ok icon-white"></i>Login</button>
            </div>
        </div>
    </fieldset>
</form>



    </div>
    <script src="../../ui/js/jquery.slim.min.js"></script>
    <script src="../../ui/js/bootstrap.min.js"></script>
</body>
</html>

