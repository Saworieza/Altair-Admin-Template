<?php defined('safe_access') or die('Restricted access!'); ?>

    <div id="page_content">
        <div id="page_content_inner">

            <h3 class="heading_b uk-margin-bottom">Sortable</h3>

            <h4 class="heading_c uk-margin-small-bottom">Dragula.js</h4>
            <div id="dragula_sortable" class="uk-grid uk-grid-width-small-1-2 uk-grid-width-medium-1-3 uk-grid-width-large-1-5" data-uk-grid-margin>
<?php for($i=1;$i<=8;$i++) { ?>
                <div>
                    <div class="md-card">
                        <div class="md-card-head head_background" style="background-image: url('<?php echo $img_path; ?>/gallery/Image<?php if($i < 10) { echo '0';}; echo $i; ?>.jpg')"></div>
                        <div class="md-card-content"><?php echo $faker->sentence(12); ?></div>
                    </div>
                </div>
<?php } ?>
            </div>

            <h4 class="heading_c uk-margin-small-bottom">UIkit sortable</h4>
            <div class="uk-grid uk-grid-width-large-1-5 uk-grid-width-medium-1-3 uk-sortable" data-uk-grid-margin data-uk-sortable>
<?php for($i=0;$i<5;$i++) { ?>
                <div class="sortable-handler">
                    <div class="md-card">
                        <div class="md-card-content"><?php echo $faker->sentence(20); ?></div>
                    </div>
                </div>
<?php } ?>
            </div>

            <h4 class="heading_a uk-margin-bottom">Multiple lists</h4>
            <div class="md-card">
                <div class="md-card-content">
                    <div class="uk-grid" data-uk-grid-margin>
                        <div class="uk-width-medium-1-2">
                            <h4 class="heading_c uk-margin-bottom">Available</h4>
                            <ul class="md-list md-list-addon uk-sortable sortable-handler" data-uk-sortable="{group:'connected-group'}">
                                <li>
                                    <div class="md-list-addon-element">
                                        <img class="md-user-image md-list-addon-avatar" src="assets/img/avatars/avatar_02_tn.png" alt=""/>
                                    </div>
                                    <div class="md-list-content">
                                        <span class="md-list-heading"><?php echo $faker->name; ?></span>
                                        <span class="uk-text-small uk-text-muted"><?php echo $faker->sentence(8); ?></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-addon-element">
                                        <img class="md-user-image md-list-addon-avatar" src="assets/img/avatars/avatar_07_tn.png" alt=""/>
                                    </div>
                                    <div class="md-list-content">
                                        <span class="md-list-heading"><?php echo $faker->name; ?></span>
                                        <span class="uk-text-small uk-text-muted"><?php echo $faker->sentence(8); ?></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-addon-element">
                                        <img class="md-user-image md-list-addon-avatar" src="assets/img/avatars/avatar_06_tn.png" alt=""/>
                                    </div>
                                    <div class="md-list-content">
                                        <span class="md-list-heading"><?php echo $faker->name; ?></span>
                                        <span class="uk-text-small uk-text-muted"><?php echo $faker->sentence(8); ?></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-addon-element">
                                        <img class="md-user-image md-list-addon-avatar" src="assets/img/avatars/avatar_05_tn.png" alt=""/>
                                    </div>
                                    <div class="md-list-content">
                                        <span class="md-list-heading"><?php echo $faker->name; ?></span>
                                        <span class="uk-text-small uk-text-muted"><?php echo $faker->sentence(8); ?></span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="uk-width-medium-1-2">
                            <h4 class="heading_c uk-margin-bottom">Project 1 assignnments</h4>
                            <ul class="md-list md-list-addon uk-sortable sortable-handler uk-margin-medium-bottom" data-uk-sortable="{group:'connected-group'}">
                                <li>
                                    <div class="md-list-addon-element">
                                        <img class="md-user-image md-list-addon-avatar" src="assets/img/avatars/avatar_03_tn.png" alt=""/>
                                    </div>
                                    <div class="md-list-content">
                                        <span class="md-list-heading"><?php echo $faker->name; ?></span>
                                        <span class="uk-text-small uk-text-muted"><?php echo $faker->sentence(8); ?></span>
                                    </div>
                                </li>
                            </ul>
                            <h4 class="heading_c uk-margin-bottom">Project 2 assignnments</h4>
                            <ul class="md-list md-list-addon uk-sortable sortable-handler" data-uk-sortable="{group:'connected-group'}">
                                <li>
                                    <div class="md-list-addon-element">
                                        <img class="md-user-image md-list-addon-avatar" src="assets/img/avatars/avatar_04_tn.png" alt=""/>
                                    </div>
                                    <div class="md-list-content">
                                        <span class="md-list-heading"><?php echo $faker->name; ?></span>
                                        <span class="uk-text-small uk-text-muted"><?php echo $faker->sentence(8); ?></span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
