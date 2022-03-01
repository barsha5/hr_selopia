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

        <div class="container">

            <div class="jumbotron">
                <h1><?= ($page_head) ?></h1>
            </div>

            <?php echo $this->render('user/nav.htm',NULL,get_defined_vars(),0); ?>

            <?php if ($message): ?>
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong><?= ($message) ?></strong>
            </div>
            <?php endif; ?>