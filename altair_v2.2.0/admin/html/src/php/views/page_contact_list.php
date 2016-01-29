<?php defined('safe_access') or die('Restricted access!'); ?>
<?php $companies = ['Goodwin-Nienow', 'Strosin Groupa', 'Schamberger PLC ']; ?>

    <div id="page_content">
        <div id="page_content_inner">

            <h3 class="heading_b uk-margin-bottom">Contact List</h3>
            <div class="md-card uk-margin-medium-bottom">
                <div class="md-card-content">
                    <div class="uk-grid" data-uk-grid-margin>
                        <div class="uk-width-medium-1-2">
                            <div class="uk-vertical-align">
                                <div class="uk-vertical-align-middle">
                                    <ul id="contact_list_filter" class="uk-subnav uk-subnav-pill uk-margin-remove">
                                        <li class="uk-active" data-uk-filter=""><a href="#">All</a></li>
                                        <li data-uk-filter="<?php echo trim(strtolower($companies[0])); ?>"><a href="#"><?php echo $companies[0]; ?></a></li>
                                        <li data-uk-filter="<?php echo trim(strtolower($companies[1])); ?>"><a href="#"><?php echo $companies[1]; ?></a></li>
                                        <li data-uk-filter="<?php echo trim(strtolower($companies[2])); ?>"><a href="#"><?php echo $companies[2]; ?></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="uk-width-medium-1-2">
                            <label for="contact_list_search">Find user</label>
                            <input class="md-input" type="text" id="contact_list_search"/>
                        </div>
                    </div>
                </div>
            </div>

            <div class="uk-grid-width-small-1-2 uk-grid-width-medium-1-3 uk-grid-width-large-1-4 uk-grid-width-xlarge-1-5 hierarchical_show" id="contact_list">
<?php
    for($i=0;$i<24;$i++) {
    $thisCompany = $companies[array_rand($companies)];
    $thisUser = $faker->name;
    $randImg = rand(1,12);
    $featured = array('3','6','19');
?>
                <div data-uk-filter="<?php echo trim( strtolower($thisCompany).','.strtolower($thisUser) ); ?>">
                    <div class="md-card md-card-hover">
                        <div class="md-card-head<?php if(in_array($i,$featured)) {?> md-bg-cyan-600<?php };?>">
                            <div class="md-card-head-menu" data-uk-dropdown="{pos:'bottom-right'}">
                                <i class="md-icon material-icons<?php if(in_array($i,$featured)) {?> md-icon-light<?php };?>">&#xE5D4;</i>
                                <div class="uk-dropdown uk-dropdown-small">
                                    <ul class="uk-nav">
                                        <li><a href="#">Edit</a></li>
                                        <li><a href="#">Remove</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="uk-text-center">
                                <img class="md-card-head-avatar" src="assets/img/avatars/avatar_<?php if($randImg < 10) echo '0'; echo $randImg; ?>.png" alt=""/>
                            </div>
                            <h3 class="md-card-head-text uk-text-center<?php if(in_array($i,$featured)) {?> md-color-white<?php };?>">
                                <?php echo $thisUser; ?>
                                <span class="uk-text-truncate"><?php echo $thisCompany ?></span>
                            </h3>
                        </div>
                        <div class="md-card-content">
                            <ul class="md-list">
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Info</span>
                                        <span class="uk-text-small uk-text-muted"><?php echo $faker->sentence(10);?></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Email</span>
                                        <span class="uk-text-small uk-text-muted uk-text-truncate"><?php echo $faker->email; ?></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Phone</span>
                                        <span class="uk-text-small uk-text-muted"><?php echo $faker->phoneNumber; ?></span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
<?php }; ?>

        </div>
    </div>

    <div class="md-fab-wrapper">
        <a class="md-fab md-fab-accent" href="#">
            <i class="material-icons">&#xE145;</i>
        </a>
    </div>
