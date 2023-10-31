<!DOCTYPE html>
<html lang="<?php echo Theme::lang() ?>">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="generator" content="Bludit">
<?php echo Theme::metaTags('title'); ?>
<?php echo Theme::metaTags('description'); ?>
<?php echo Theme::favicon('img/favicon.png'); ?>
<?php echo Theme::css('css/style.css'); ?>
<?php Theme::plugins('siteHead'); ?>
<script type="module" src="https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/ionic.esm.js"></script>
<script nomodule src="https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/ionic.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@ionic/core/css/ionic.bundle.css" />
<script src="//unpkg.com/alpinejs" defer></script>
<style>a {text-decoration: none;}.text-white {color:white;}ion-avatar { margin: auto;}</style>
</head>
<body>