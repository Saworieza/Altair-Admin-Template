<?php defined('safe_access') or die('Restricted access!'); ?>

    <div id="page_content">
        <div id="page_content_inner">
            <div class="uk-grid" data-uk-grid-margin data-uk-grid-match id="user_profile">
                <div class="uk-width-large-7-10">
                    <div class="md-card">
                        <div class="user_heading">
                            <div class="user_heading_menu" data-uk-dropdown="{pos:'left-top'}">
                                <i class="md-icon material-icons md-icon-light">&#xE5D4;</i>
                                <div class="uk-dropdown uk-dropdown-small">
                                    <ul class="uk-nav">
                                        <li><a href="#">Action 1</a></li>
                                        <li><a href="#">Action 2</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="user_heading_avatar">
                                <img src="<?php echo $img_path?>/avatars/avatar_11.png" alt="user avatar"/>
                            </div>
                            <div class="user_heading_content">
                                <h2 class="heading_b uk-margin-bottom"><span class="uk-text-truncate"><?php echo $faker->firstNameFemale;?> <?php echo $faker->lastName;?></span><span class="sub-heading">Land acquisition specialist</span></h2>
                                <ul class="user_stats">
                                    <li>
                                        <h4 class="heading_a">2391 <span class="sub-heading">Posts</span></h4>
                                    </li>
                                    <li>
                                        <h4 class="heading_a">120 <span class="sub-heading">Photos</span></h4>
                                    </li>
                                    <li>
                                        <h4 class="heading_a">284 <span class="sub-heading">Following</span></h4>
                                    </li>
                                </ul>
                            </div>
                            <a class="md-fab md-fab-small md-fab-accent" href="page_user_edit.html">
                                <i class="material-icons">&#xE150;</i>
                            </a>
                        </div>
                        <div class="user_content">
                            <ul id="user_profile_tabs" class="uk-tab" data-uk-tab="{connect:'#user_profile_tabs_content', animation:'slide-horizontal'}" data-uk-sticky="{ top: 48, media: 960 }">
                                <li class="uk-active"><a href="#">About</a></li>
                                <li><a href="#">Photos</a></li>
                                <li><a href="#">Posts</a></li>
                            </ul>
                            <ul id="user_profile_tabs_content" class="uk-switcher uk-margin">
                                <li>
                                    <?php echo $faker->sentence(120); ?>
                                    <div class="uk-grid uk-margin-medium-top uk-margin-large-bottom" data-uk-grid-margin>
                                        <div class="uk-width-large-1-2">
                                            <h4 class="heading_c uk-margin-small-bottom">Contact Info</h4>
                                            <ul class="md-list md-list-addon">
                                                <li>
                                                    <div class="md-list-addon-element">
                                                        <i class="md-list-addon-icon material-icons">&#xE158;</i>
                                                    </div>
                                                    <div class="md-list-content">
                                                        <span class="md-list-heading"><?php echo $faker->email; ?></span>
                                                        <span class="uk-text-small uk-text-muted">Email</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="md-list-addon-element">
                                                        <i class="md-list-addon-icon material-icons">&#xE0CD;</i>
                                                    </div>
                                                    <div class="md-list-content">
                                                        <span class="md-list-heading"><?php echo $faker->phoneNumber; ?></span>
                                                        <span class="uk-text-small uk-text-muted">Phone</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="md-list-addon-element">
                                                        <i class="md-list-addon-icon uk-icon-facebook-official"></i>
                                                    </div>
                                                    <div class="md-list-content">
                                                        <span class="md-list-heading">facebook.com/envato</span>
                                                        <span class="uk-text-small uk-text-muted">Facebook</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="md-list-addon-element">
                                                        <i class="md-list-addon-icon uk-icon-twitter"></i>
                                                    </div>
                                                    <div class="md-list-content">
                                                        <span class="md-list-heading">twitter.com/envato</span>
                                                        <span class="uk-text-small uk-text-muted">Twitter</span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="uk-width-large-1-2">
                                            <h4 class="heading_c uk-margin-small-bottom">My groups</h4>
                                            <ul class="md-list">
                                                <li>
                                                    <div class="md-list-content">
                                                        <span class="md-list-heading"><a href="#">Cloud Computing</a></span>
                                                        <span class="uk-text-small uk-text-muted"><?php echo rand(10,300) ?> Members</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="md-list-content">
                                                        <span class="md-list-heading"><a href="#">Account Manager Group</a></span>
                                                        <span class="uk-text-small uk-text-muted"><?php echo rand(10,300) ?> Members</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="md-list-content">
                                                        <span class="md-list-heading"><a href="#">Digital Marketing</a></span>
                                                        <span class="uk-text-small uk-text-muted"><?php echo rand(10,300) ?> Members</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="md-list-content">
                                                        <span class="md-list-heading"><a href="#">HR Professionals Association - Human Resources</a></span>
                                                        <span class="uk-text-small uk-text-muted"><?php echo rand(10,300) ?> Members</span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <h4 class="heading_c uk-margin-bottom">Timeline</h4>
                                    <div class="timeline">
                                        <div class="timeline_item">
                                            <div class="timeline_icon timeline_icon_success"><i class="material-icons">&#xE85D;</i></div>
                                            <div class="timeline_date">
                                                <?php $moment = new Moment\Moment(); echo $moment->startOf('month')->addDays(8)->format('d'); ?>
 <span><?php $moment = new Moment\Moment(); echo $moment->format('M'); ?></span>
                                            </div>
                                            <div class="timeline_content">Created ticket <a href="#"><strong>#3289</strong></a></div>
                                        </div>
                                        <div class="timeline_item">
                                            <div class="timeline_icon timeline_icon_danger"><i class="material-icons">&#xE5CD;</i></div>
                                            <div class="timeline_date">
                                                <?php $moment = new Moment\Moment(); echo $moment->startOf('month')->addDays(14)->format('d'); ?>
 <span><?php $moment = new Moment\Moment(); echo $moment->format('M'); ?></span>
                                            </div>
                                            <div class="timeline_content">Deleted post <a href="#"><strong><?php echo $faker->sentence(6); ?></strong></a></div>
                                        </div>
                                        <div class="timeline_item">
                                            <div class="timeline_icon"><i class="material-icons">&#xE410;</i></div>
                                            <div class="timeline_date">
                                                <?php $moment = new Moment\Moment(); echo $moment->startOf('month')->addDays(18)->format('d'); ?>
 <span><?php $moment = new Moment\Moment(); echo $moment->format('M'); ?></span>
                                            </div>
                                            <div class="timeline_content">
                                                Added photo
                                                <div class="timeline_content_addon">
                                                    <img src="<?php echo $img_path ?>/gallery/Image16.jpg" alt=""/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="timeline_item">
                                            <div class="timeline_icon timeline_icon_primary"><i class="material-icons">&#xE0B9;</i></div>
                                            <div class="timeline_date">
                                                <?php $moment = new Moment\Moment(); echo $moment->startOf('month')->addDays(20)->format('d'); ?>
 <span><?php $moment = new Moment\Moment(); echo $moment->format('M'); ?></span>
                                            </div>
                                            <div class="timeline_content">
                                                New comment on post <a href="#"><strong><?php echo $faker->sentence(4); ?></strong></a>
                                                <div class="timeline_content_addon">
                                                    <blockquote>
                                                        <?php echo $faker->sentence(20); ?>&hellip;
                                                    </blockquote>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="timeline_item">
                                            <div class="timeline_icon timeline_icon_warning"><i class="material-icons">&#xE7FE;</i></div>
                                            <div class="timeline_date">
                                                <?php $moment = new Moment\Moment(); echo $moment->startOf('month')->addDays(28)->format('d'); ?>
 <span><?php $moment = new Moment\Moment(); echo $moment->format('M'); ?></span>
                                            </div>
                                            <div class="timeline_content">
                                                Added to Friends
                                                <div class="timeline_content_addon">
                                                    <ul class="md-list md-list-addon">
                                                        <li>
                                                            <div class="md-list-addon-element">
                                                                <img class="md-user-image md-list-addon-avatar" src="assets/img/avatars/avatar_02_tn.png" alt=""/>
                                                            </div>
                                                            <div class="md-list-content">
                                                                <span class="md-list-heading"><?php echo $faker->firstNameFemale;?> <?php echo $faker->lastName;?></span>
                                                                <span class="uk-text-small uk-text-muted"><?php echo $faker->sentence(4); ?></span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div id="user_profile_gallery" data-uk-check-display class="uk-grid-width-small-1-2 uk-grid-width-medium-1-3 uk-grid-width-large-1-4" data-uk-grid="{gutter: 4}">
<?php for($i=1;$i<=24;$i++) { ?>
                                        <div>
                                            <a href="<?php echo $img_path?>/gallery/Image<?php if($i < 10) { echo '0';}; echo $i; ?>.jpg" data-uk-lightbox="{group:'user-photos'}">
                                                <img src="<?php echo $img_path?>/gallery/Image<?php if($i < 10) { echo '0';}; echo $i; ?>.jpg" alt=""/>
                                            </a>
                                        </div>
<?php } ?>
                                    </div>
                                    <ul class="uk-pagination uk-margin-large-top">
                                        <li class="uk-disabled"><span><i class="uk-icon-angle-double-left"></i></span></li>
                                        <li class="uk-active"><span>1</span></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><span>&hellip;</span></li>
                                        <li><a href="#">20</a></li>
                                        <li><a href="#"><i class="uk-icon-angle-double-right"></i></a></li>
                                    </ul>
                                </li>
                                <li>
                                    <ul class="md-list">
<?php for($i=0;$i<20;$i++) { ?>
                                        <li>
                                            <div class="md-list-content">
                                                <span class="md-list-heading"><a href="#"><?php echo $faker->sentence(6); ?></a></span>
                                                <div class="uk-margin-small-top">
                                                <span class="uk-margin-right">
                                                    <i class="material-icons">&#xE192;</i> <span class="uk-text-muted uk-text-small"><?php $moment = new Moment\Moment(); echo $moment->startOf('month')->addDays(rand(1,28))->format('d M Y'); ?></span>
                                                </span>
                                                <span class="uk-margin-right">
                                                    <i class="material-icons">&#xE0B9;</i> <span class="uk-text-muted uk-text-small"><?php echo rand(1,28); ?></span>
                                                </span>
                                                <span class="uk-margin-right">
                                                    <i class="material-icons">&#xE417;</i> <span class="uk-text-muted uk-text-small"><?php echo rand(100,1000); ?></span>
                                                </span>
                                                </div>
                                            </div>
                                        </li>
<?php } ?>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="uk-width-large-3-10">
                    <div class="md-card">
                        <div class="md-card-content">
                            <div class="uk-margin-medium-bottom">
                                <h3 class="heading_c uk-margin-bottom">Alerts</h3>
                                <ul class="md-list md-list-addon">
                                    <li>
                                        <div class="md-list-addon-element">
                                            <i class="md-list-addon-icon material-icons uk-text-warning">&#xE8B2;</i>
                                        </div>
                                        <div class="md-list-content">
                                            <span class="md-list-heading"><?php echo $faker->sentence(2); ?></span>
                                            <span class="uk-text-small uk-text-muted uk-text-truncate"><?php echo $faker->sentence(6); ?></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="md-list-addon-element">
                                            <i class="md-list-addon-icon material-icons uk-text-success">&#xE88F;</i>
                                        </div>
                                        <div class="md-list-content">
                                            <span class="md-list-heading"><?php echo $faker->sentence(2); ?></span>
                                            <span class="uk-text-small uk-text-muted uk-text-truncate"><?php echo $faker->sentence(6); ?></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="md-list-addon-element">
                                            <i class="md-list-addon-icon material-icons uk-text-danger">&#xE001;</i>
                                        </div>
                                        <div class="md-list-content">
                                            <span class="md-list-heading"><?php echo $faker->sentence(2); ?></span>
                                            <span class="uk-text-small uk-text-muted uk-text-truncate"><?php echo $faker->sentence(6); ?></span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <h3 class="heading_c uk-margin-bottom">Friends</h3>
                            <ul class="md-list md-list-addon uk-margin-bottom">
                                <li>
                                    <div class="md-list-addon-element">
                                        <img class="md-user-image md-list-addon-avatar" src="assets/img/avatars/avatar_02_tn.png" alt=""/>
                                    </div>
                                    <div class="md-list-content">
                                        <span class="md-list-heading"><?php echo $faker->name;?></span>
                                        <span class="uk-text-small uk-text-muted"><?php echo $faker->sentence(4); ?></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-addon-element">
                                        <img class="md-user-image md-list-addon-avatar" src="assets/img/avatars/avatar_07_tn.png" alt=""/>
                                    </div>
                                    <div class="md-list-content">
                                        <span class="md-list-heading"><?php echo $faker->name;?></span>
                                        <span class="uk-text-small uk-text-muted"><?php echo $faker->sentence(4); ?></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-addon-element">
                                        <img class="md-user-image md-list-addon-avatar" src="assets/img/avatars/avatar_06_tn.png" alt=""/>
                                    </div>
                                    <div class="md-list-content">
                                        <span class="md-list-heading"><?php echo $faker->name;?></span>
                                        <span class="uk-text-small uk-text-muted"><?php echo $faker->sentence(4); ?></span>
                                    </div>
                                </li>
                            </ul>
                            <a class="md-btn md-btn-flat md-btn-flat-primary" href="#">Show all</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
