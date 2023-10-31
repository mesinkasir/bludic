<ion-tab tab="widget">
<ion-nav id="widget-nav"></ion-nav>
<div id="widget-page">
<ion-header>
<ion-toolbar color="dark">
<ion-title class="ion-text-center"><a href="<?php echo Theme::siteUrl() ?>" class="text-white">
<img x-bind:src="site_logo" width="24" x-bind:alt="site_title"/> <span x-text="site_title"></span></a> 
</ion-title>
</ion-toolbar>
</ion-header>
<ion-content>
<div>
<ion-card>
<ion-card-header color="dark">
<ion-card-title x-text="menuwidget"></ion-card-title>
</ion-card-header>
<ion-card-content>
<ion-list>
<ion-item>
<ion-label>
<?php include(THEME_DIR_PHP.'sidebar.php'); ?>
</ion-label>
</ion-item>
<ion-item>
<ion-label>
<?php include(THEME_DIR_PHP.'footer.php'); ?>
</ion-label>
</ion-item>
</ion-list>
</ion-card-content>
</ion-card>
</div>
</ion-content>
</div>
</ion-tab>