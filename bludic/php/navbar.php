<ion-col size="12" size-sm="12">
<div>
<ion-card>
<ion-card-header color="dark">
<ion-card-title><a href="<?php echo Theme::siteUrl() ?>" class="text-white"><span x-text="menunav"></span></a></ion-card-title>
</ion-card-header>
<ion-card-content class="ion-padding">
<ion-list>
<?php foreach ($staticContent as $staticPage): ?>
<ion-item>
<ion-label>
<a href="<?php echo $staticPage->permalink() ?>"><?php echo $staticPage->title() ?></a>
</ion-label>
</ion-item>
<?php endforeach ?>
</ion-list>
<ion-item>
<ion-list>
<?php foreach (Theme::socialNetworks() as $key=>$label): ?>
<a href="<?php echo $site->{$key}(); ?>" target="_blank"><?php echo $label; ?></a>
<?php endforeach; ?>
</ion-list>
</ion-card-content>
</ion-card>
</div>
</ion-col>