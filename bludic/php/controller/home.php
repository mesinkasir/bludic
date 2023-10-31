<ion-tab tab="home">
<ion-nav id="home-nav"></ion-nav>
<div id="home-page">
<ion-header>
<ion-toolbar color="dark">
<ion-title class="ion-text-center"><a href="<?php echo Theme::siteUrl() ?>" class="text-white">
<img x-bind:src="site_logo" width="24" x-bind:alt="site_title"/> <span x-text="site_title"></span></a> 
</ion-title>
</ion-toolbar>
</ion-header>
<ion-content>
<div>
<?php if ($WHERE_AM_I == 'page') { include(THEME_DIR_PHP.'page.php'); } else { include(THEME_DIR_PHP.'home.php'); }?>
</div>
</ion-content>
</div>
</ion-tab>