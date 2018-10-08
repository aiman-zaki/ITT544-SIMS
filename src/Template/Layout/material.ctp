<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= $this->Html->css('material-compiled.css') ?>
    <script src="main.js"></script>
</head>
<body>

<?= $this->Html->script('material-compiled.js') ?>
 <script>
    $(document).ready(function() {
    $('.mdb-select').material_select();
    });</script>

    
</body>
</html>

