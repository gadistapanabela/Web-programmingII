<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/stylebuku.css') ?>">
</head>

<body>
    <div id="wrapper">
        <?= $this->include('v_header') ?>
    
        <?= $this->renderSection('content') ?>

        <?= $this->include('v_footer') ?>
    </div>
</body>

</html>