<div x-data="{ 
title: '<?php echo $page->title(); ?>' , 
description: '<?php echo $page->description(); ?>',
cover: '<?php echo $page->coverImage(); ?>',
alt: '<?php echo $page->title(); ?>',
site_title: '<?php echo $site->title(); ?>',
site_logo: '<?php echo $site->logo(); ?>',
site_slogan: '<?php echo $site->slogan(); ?>',
site_description: '<?php echo $site->description(); ?>',
date: '<?php echo $page->date(); ?>',
home: 'Home',
nav: 'Navigation',
widget: 'Widget',
info: 'Info',
menunav: '<?php echo $site->title() ?> Navigation',
menuwidget: '<?php echo $site->title() ?> Widget',
app: 'Mobile Web App Info'
}">