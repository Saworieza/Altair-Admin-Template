<?php defined('safe_access') or die('Restricted access!'); ?>

<div id="page_content">
    <div id="page_content_inner">

        <div class="gallery_grid uk-grid-width-medium-1-4 uk-grid-width-large-1-5" data-uk-grid="{gutter: 16}">
            <?php for($i=1;$i<=24;$i++) { ?>
                <div>
                    <div class="md-card md-card-hover">
                        <div class="gallery_grid_item md-card-content">
                            <a href="<?php echo $img_path?>/gallery/Image<?php if($i < 10) { echo '0';}; echo $i; ?>.jpg" data-uk-lightbox="{group:'gallery'}">
                                <img src="assets/img/gallery/Image<?php if($i < 10) { echo '0';}; echo $i; ?>.jpg" alt="">
                            </a>
                            <div class="gallery_grid_image_caption">
                                <div class="gallery_grid_image_menu" data-uk-dropdown="{pos:'top-right'}">
                                    <i class="md-icon material-icons">&#xE5D4;</i>
                                    <div class="uk-dropdown uk-dropdown-small">
                                        <ul class="uk-nav">
                                            <li><a href="#"><i class="material-icons uk-margin-small-right">&#xE150;</i> Edit</a></li>
                                            <li><a href="#"><i class="material-icons uk-margin-small-right">&#xE872;</i> Remove</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <span class="gallery_image_title uk-text-truncate"><?php echo $faker->sentence(4);?></span>
                                <span class="uk-text-muted uk-text-small"><?php echo rand(1,30);?> Jun 2016, <?php echo rand(20,100)?>KB</span>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>

    </div>
</div>