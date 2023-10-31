<ion-tab tab="navigation">
<ion-nav id="navigation-nav"></ion-nav>
<div id="navigation-page">
<ion-header>
<ion-toolbar color="dark">
<ion-title class="ion-text-center"><a href="<?php echo Theme::siteUrl() ?>" class="text-white">
<img x-bind:src="site_logo" width="24" x-bind:alt="site_title"/> <span x-text="site_title"></span></a> 
</ion-title>
</ion-toolbar>
</ion-header>
<ion-content>
<div>
<?php include(THEME_DIR_PHP.'navbar.php'); ?>
</div>
</ion-content>
</div>
</ion-tab>