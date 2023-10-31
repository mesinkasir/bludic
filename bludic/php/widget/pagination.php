<?php if (Paginator::numberOfPages() > 1) : ?>
<ion-toolbar>
<ion-buttons slot="start">
<?php if (Paginator::showPrev()) : ?><ion-button color="dark" href="<?php echo Paginator::previousPageUrl() ?>"><ion-icon name="arrow-back-outline"></ion-icon> Prevoius</ion-button><?php endif; ?>
</ion-buttons>
<ion-buttons class="ion-justify-content-around">
<ion-button color="dark" href="<?php echo Theme::siteUrl() ?>"><ion-icon name="home-outline"></ion-icon></ion-button>   
</ion-buttons>
<ion-buttons slot="end">
<?php if (Paginator::showNext()) : ?><ion-button color="dark" href="<?php echo Paginator::nextPageUrl() ?>">Next <ion-icon name="arrow-forward-outline"></ion-icon></ion-button><?php endif; ?>
</ion-buttons>
</ion-toolbar>
<?php endif ?>