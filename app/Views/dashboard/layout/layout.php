<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noms Kopi Simongan</title>
    <!-- Bootstrap CSS -->
    <link href="//cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmTR4xO7rxOV+GSY+PhU6S4oqeQ19Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="//cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/dashboard/css/style.css') ?>">

    <?= $this->renderSection('css') ?>

</head>

<body style="display: flex; flex-direction: column; min-height: 100vh">
    <!-- headerrr -->
    <?= $this->include('dashboard/layout/header') ?>
    <!-- end header -->
    <!-- content start -->
    <?= $this->renderSection('content') ?>
    <!-- content end -->
    <!-- footer__section__start -->
    <?= $this->include('dashboard/layout/footer') ?>
    <!-- footer__section__end -->

</body>

</html>