<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/styles.css">
  <script src="js/jquery-3.7.0.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <title><?= $this->renderSection('title') ?></title>
</head>

<body>
  <?= $this->renderSection('body') ?>
  <?= $this->renderSection('scripts') ?>
</body>

</html>