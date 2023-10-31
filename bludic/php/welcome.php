<ion-tabs>
<?php include(THEME_DIR_PHP.'controller/home.php'); ?>
<?php include(THEME_DIR_PHP.'controller/navigation.php'); ?>
<?php include(THEME_DIR_PHP.'controller/widget.php'); ?>
<ion-tab tab="info" x-data="{ mobile: 'Mobile WebApp' , web: 'Web Version', wv: '<?php echo (BLUDIT_VERSION) ?>', mbs: 'Mobile Version', mbv: '7', aps: 'App Version', apv: '1.0.5', wt: 'Web Tech', mt: 'Mobile Tech', dev: 'Developer', dv: 'Creativitas', blu: 'Bludit', ion: 'Ionic', cre: 'https://fiverr.com/creativitas', bll: 'https://bludit.com', ions: 'https://ionicframework.com', al: 'Alphine JS', als: 'https://alpinejs.dev/', jsf: 'Javascript Tech', devmo: 'https://bludit.axcora.com/bludic/', devmos: 'Try Bludic PRO', devmof: 'Bludic Version', devmosf: 'Standard 1.04.1' }">
<ion-nav id="info-nav"></ion-nav>
<div id="info-page"><ion-header>
<ion-toolbar color="dark">
<ion-title class="ion-text-center"><a href="<?php echo Theme::siteUrl() ?>" class="text-white">
<img x-bind:src="site_logo" width="24" x-bind:alt="site_title"/> <span x-text="site_title"></span></a> 
</ion-title>
</ion-toolbar>
</ion-header>
<ion-content>
<ion-card>
<ion-card-header color="dark">
<ion-card-title x-text="app"></ion-card-title>
</ion-card-header>
<ion-card-content>
<ion-list>
<ion-item>
<ion-label><ion-icon name="apps-sharp" color="primary"></ion-icon> 
<span x-text="mobile"></span> : <span x-text="site_title"></span></ion-label>
</ion-item>
<ion-item>
<ion-label><ion-icon name="desktop-sharp" color="medium"></ion-icon> 
<span x-text="web"></span> : <span x-text="wv"></span></ion-label>
</ion-item>
<ion-item>
<ion-label><ion-icon name="notifications-circle-sharp" color="warning"></ion-icon> 
<span x-text="mbs"></span> : <span x-text="mbv"></span></ion-label>
</ion-item>
<ion-item>
<ion-label><ion-icon name="watch-sharp" color="success"></ion-icon> 
<span x-text="aps"></span> : <span x-text="apv"></span></ion-label>
</ion-item>
<ion-item>
<ion-label><ion-icon name="sparkles-sharp" color="secondary"></ion-icon> 
<span x-text="devmof"></span> : <span x-text="devmosf"></span> <a x-bind:href="devmo" x-text="devmos"></a></ion-label>
</ion-item>
<ion-item>
<ion-label><ion-icon name="planet-sharp" color="danger"></ion-icon> 
<span x-text="wt"></span> : <a x-bind:href="bll" x-text="blu"></a></ion-label>
</ion-item>
<ion-item>
<ion-label><ion-icon name="phone-portrait-sharp" color="primary"></ion-icon> 
<span x-text="mt"></span> : <a x-bind:href="ions" x-text="ion"></a></ion-label>
</ion-item>
<ion-item>
<ion-label><ion-icon name="wifi-sharp" color="success"></ion-icon>
<span x-text="jsf"></span> : <a x-bind:href="als" x-text="al"></a></ion-label>
</ion-item>	
<ion-item>
<ion-label><ion-icon name="person-sharp" color="secondary"></ion-icon> 
<span x-text="dev"></span> : <a x-bind:href="cre" x-text="dv"></a></ion-label>
</ion-item>
</ion-list>
</ion-card-content>
</ion-card>
</ion-content>
</div>
</ion-tab>