<?php include(THEME_DIR_PHP.'widget/404.php'); ?>
<?php Theme::plugins('pageBegin'); ?>
<ion-grid>
<ion-row>
<?php foreach ($content as $page) : ?>
<ion-col size="12" size-md="12">
<div>
<ion-card href="<?php echo $page->permalink(); ?>">
<ion-card-header color="dark">
<ion-card-title>
<h1><?php echo $page->title(); ?></h1></ion-card-title>
<ion-card-subtitle><?php echo $page->date(); ?><?php echo $L->get('Reading time') . ': ' . $page->readingTime(); ?></ion-card-subtitle>
</ion-card-header>
<?php if ($page->coverImage()) : ?><ion-img src="<?php echo $page->coverImage(); ?>"></ion-img><?php endif ?>
<ion-card-content><?php echo $page->description(); ?></ion-card-content>
</ion-card>
</div>
<ion-col>
<?php endforeach ?>
</ion-row>
</ion-grid>
<?php Theme::plugins('pageEnd'); ?>
<?php include(THEME_DIR_PHP.'widget/pagination.php'); ?>