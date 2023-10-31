<?php Theme::plugins('pageBegin'); ?>
<ion-card>
<ion-card-header color="dark">
<ion-card-title><a href="<?php echo $page->permalink(); ?>" class="text-white"><span x-text="title"></span></a></ion-card-title>
<ion-card-subtitle x-text="description"></ion-card-subtitle>
</ion-card-header>
<?php if ($page->coverImage()): ?><ion-img x-bind:alt="title" x-bind:src="cover"></ion-img><?php endif ?>
<ion-card-content class="ion-padding">
<?php if (!$page->isStatic() && !$url->notFound()): ?><h6 class="card-subtitle mb-3 text-muted"><span x-text="date"></span> - <?php echo $L->get('Reading time') . ': ' . $page->readingTime() ?></h6><?php endif ?>
<?php echo $page->content(); ?>
</ion-card-content>
</ion-card>
<?php Theme::plugins('pageEnd'); ?>