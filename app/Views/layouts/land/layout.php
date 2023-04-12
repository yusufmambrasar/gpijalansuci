<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
	<title><?= $this->renderSection('title') ?></title>
  <link rel="stylesheet" href="<?= base_url('assets/fonts/playfair-display/playfair-display.min.css') ?>" />
  <link rel="stylesheet" href="<?= base_url('assets/fonts/poppins/poppins.min.css') ?>" />
	<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>" />
  <link rel="stylesheet" href="<?= base_url('assets/css/land.css') ?>" />
</head>
<body>

  <div class="container">
    <?= $this->include('layouts/land/header') ?>
    <?= $this->include('layouts/land/navbar') ?>
  </div>

  <main class="container">

    <?= $this->include('layouts/land/headline') ?>

    <?= $this->include('layouts/land/features') ?>

    <div class="row g-5">
      <div class="col-md-8">
        <?= $this->renderSection('content') ?>
      </div>
      <div class="col-md-4">
        <?= $this->include('layouts/land/sidebar') ?>
      </div>
    </div>

  </main>

  <?= $this->include('layouts/land/footer') ?>

</body>
</html>