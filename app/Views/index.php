<?= $this->extend('layouts/main') ?>
<?= $this->section('title') ?>
Login
<?= $this->endSection() ?>
<?= $this->section('body') ?>
<section class=first>
  <?= $this->include('components/login') ?>
  <?= $this->include('components/signup') ?>
</section>
<?= $this->endSection() ?>
<?= $this->section('scripts') ?>
<script src="js/index.js"></script>
<?= $this->endSection() ?>