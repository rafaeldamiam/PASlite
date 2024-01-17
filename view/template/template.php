<!DOCTYPE html>
<html>
    <head>
        <title><?php echo Services::pageTitle(); ?></title>
        <meta charset="UTF-8"> 
    </head>
    <body>
        <?php include 'header.template.php' ?>
        <?php require $viewFilePath; ?>
        <?php include 'footer.template.php' ?>
    </body>
</html> 