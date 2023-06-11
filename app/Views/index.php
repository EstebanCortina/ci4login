<?= $this->extend('layouts/main') ?>
<?= $this->section('title') ?>
Login
<?= $this->endSection() ?>
<?= $this->section('body') ?>
<section class=first>
  <?= $this->include('components/login') ?>
</section>
<?= $this->endSection() ?>