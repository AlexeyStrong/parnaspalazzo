<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Parnas Palazzo</title>

  <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/lib/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/lib/fancybox/fancybox.css">
  <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/css/style.css">
</head>
<body class="dark-theme">

<div class="theme-switcher dark" data-value="dark">
  <svg class="i-dark active">
    <use xlink:href="<?= get_template_directory_uri() ?>/assets/img/icons.svg#moon-icon"></use>
  </svg>
  <svg class="i-light">
    <use xlink:href="<?= get_template_directory_uri() ?>/assets/img/icons.svg#sun-icon"></use>
  </svg>
</div>

<div class="container logo">
  <div class="row">
    <div class="col-12">
      <a href="/">
        <img src="<?= get_template_directory_uri() ?>/assets/img/logo.png" alt="logo">
      </a>
    </div>
  </div>
</div>