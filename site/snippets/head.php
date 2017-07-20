<!DOCTYPE html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="<?= $site->description()->html() ?>">  <meta name="author" content="Sarah K Hallacher">
  <meta name="theme-color" content="#0206ba">
  <link rel="apple-touch-icon" sizes="180x180" href="assets/favicons/apple-touch-icon.png">
  <link rel="icon" type="image/png" href="assets/favicons/favicon-32x32.png" sizes="32x32">
  <link rel="icon" type="image/png" href="assets/favicons/favicon-16x16.png" sizes="16x16">
  <link rel="manifest" href="assets/favicons/manifest.json">
  <link rel="mask-icon" href="assets/favicons/safari-pinned-tab.svg" color="#5bbad5">
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <script type="text/javascript" src="../assets/js/smoothscroll.js"></script>

  <title><?= $page->title()->html() ?></title>
  <?= css('assets/css/index.css') ?>

</head>
