<?php defined('safe_access') or die('Restricted access!'); ?>

    <div id="page_content">
        <div id="page_content_inner">

            <div class="uk-width-medium-8-10 uk-container-center">

                <div class="md-card md-card-single">
                    <div class="md-card-toolbar">
                        <div class="md-card-toolbar-actions">
                            <i class="md-icon material-icons" id="toggleAll">&#xe8f2;</i>
                        </div>
                        <h3 class="md-card-toolbar-heading-text large">
                            Help Center
                        </h3>
                    </div>
                    <div class="md-card-content padding-reset">
                        <h4 class="heading_c full_width_in_card">First Section</h4>
                        <div class="uk-accordion uk-accordion-alt hierarchical_slide help_accordion" data-slide-children="h3" data-slide-context=".md-card-content">
<?php for($i=0;$i<6;$i++) { ?>
                            <h3 class="uk-accordion-title"><?php echo $faker->sentence(10); ?></h3>
                            <div class="uk-accordion-content">
                                <p><?php echo $faker->sentence(200); ?></p>
                            </div>
<?php } ?>
                        </div>
                        <h4 class="heading_c full_width_in_card">Other Section</h4>
                        <div class="uk-accordion uk-accordion-alt hierarchical_slide help_accordion" data-slide-children="h3" data-slide-context=".md-card-content">
<?php for($i=0;$i<8;$i++) { ?>
                            <h3 class="uk-accordion-title"><?php echo $faker->sentence(10); ?></h3>
                            <div class="uk-accordion-content">
                                <p><?php echo $faker->sentence(200); ?></p>
                            </div>
<?php } ?>
                        </div>
                        <h4 class="heading_c full_width_in_card">Other Section</h4>
                        <div class="uk-accordion uk-accordion-alt hierarchical_slide help_accordion" data-slide-children="h3" data-slide-context=".md-card-content">
<?php for($i=0;$i<5;$i++) { ?>
                            <h3 class="uk-accordion-title"><?php echo $faker->sentence(10); ?></h3>
                            <div class="uk-accordion-content">
                                <p><?php echo $faker->sentence(200); ?></p>
                            </div>
<?php } ?>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
