<?= $this->extend('layouts/main') ?>
<?= $this->section('title') ?>
Forum
<?= $this->endSection() ?>
<?= $this->section('body') ?>
<?php
if (session()->has('data')) {
  echo session('data');
}
?>

<?= $this->endSection() ?>