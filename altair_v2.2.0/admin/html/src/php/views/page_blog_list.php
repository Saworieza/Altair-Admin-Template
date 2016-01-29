<?php defined('safe_access') or die('Restricted access!'); ?>

    <div id="page_content">
        <div id="page_content_inner">

            <h3 class="heading_b uk-margin-bottom">Articles</h3>

            <div class="blog_list uk-grid-width-medium-1-3 uk-grid-width-large-1-4" data-uk-grid="{gutter: 24}">
                <?php for($i=1;$i<12;$i++) { ?>
                    <?php if($i == 3) { ?>
                        <div>
                            <div class="md-card">
                                <div class="md-card-content small-padding">
                                    <div class="uk-cover blog_list_teaser_video">
                                        <iframe height="150" width="300" data-uk-cover src="https://www.youtube.com/embed/-CYs99M7hzA?rel=0" frameborder="0" allowfullscreen style="max-width: 100%"></iframe>
                                    </div>
                                    <div class="blog_list_teaser">
                                        <h2 class="blog_list_teaser_title uk-text-truncate"><?php echo $faker->sentence(2); ?></h2>
                                        <p><?php echo $faker->sentence(rand(10, 30)); ?></p>
                                        <span class="uk-text-muted uk-text-small">24.06.2016</span>
                                    </div>
                                    <div class="blog_list_footer">
                                        <div class="blog_list_footer_info">
                                            <span class="uk-margin-right"><i class="material-icons">&#xE87D;</i> <small><?php echo rand(2,30); ?></small></span>
                                            <span><i class="material-icons">&#xE0B9;</i> <small><?php echo rand(30,300); ?></small></span>
                                        </div>
                                        <a href="page_blog_article.html" class="md-btn md-btn-small md-btn-flat md-btn-flat-primary uk-float-right">Read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php }?>
                    <?php if($i == 4) { ?>
                        <div>
                            <div class="md-card">
                                <div class="md-card-content small-padding">
                                    <div class="uk-cover blog_list_teaser_video">
                                        <iframe height="150" width="300" data-uk-cover src="https://www.youtube.com/embed/7AFJeaYojhU?rel=0" frameborder="0" allowfullscreen style="max-width: 100%"></iframe>
                                    </div>
                                    <div class="blog_list_teaser">
                                        <h2 class="blog_list_teaser_title uk-text-truncate"><?php echo $faker->sentence(2); ?></h2>
                                        <p><?php echo $faker->sentence(rand(10, 30)); ?></p>
                                        <span class="uk-text-muted uk-text-small">08.06.2016</span>
                                    </div>
                                    <div class="blog_list_footer">
                                        <div class="blog_list_footer_info">
                                            <span class="uk-margin-right"><i class="material-icons">&#xE87D;</i> <small><?php echo rand(2,30); ?></small></span>
                                            <span><i class="material-icons">&#xE0B9;</i> <small><?php echo rand(30,300); ?></small></span>
                                        </div>
                                        <a href="page_blog_article.html" class="md-btn md-btn-small md-btn-flat md-btn-flat-primary uk-float-right">Read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php }?>
                    <?php if($i == 5) { ?>
                        <div>
                            <div class="md-card">
                                <div class="md-card-content small-padding">
                                    <div class="uk-margin-bottom">
                                        <iframe width="100%" height="300" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/153640438&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
                                    </div>
                                    <div class="blog_list_teaser">
                                        <p><?php echo $faker->sentence(10); ?></p>
                                        <span class="uk-text-muted uk-text-small">24.06.2016</span>
                                    </div>
                                    <div class="blog_list_footer">
                                        <div class="blog_list_footer_info">
                                            <span class="uk-margin-right"><i class="material-icons">&#xE87D;</i> <small><?php echo rand(2,30); ?></small></span>
                                            <span><i class="material-icons">&#xE0B9;</i> <small><?php echo rand(30,300); ?></small></span>
                                        </div>
                                        <a href="page_blog_article.html" class="md-btn md-btn-small md-btn-flat md-btn-flat-primary uk-float-right">Read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php }?>
                    <div>
                        <div class="md-card">
                            <div class="md-card-content small-padding">
                                <?php if( ($i != 2) && ($i != 7) ) { ?>
                                <img src="assets/img/gallery/Image<?php if($i < 10) { echo '0';}; echo $i; ?>.jpg" alt="" class="blog_list_teaser_image">
                                <?php } ?>
                                <div class="blog_list_teaser">
                                    <h2 class="blog_list_teaser_title uk-text-truncate"><?php echo $faker->sentence(2); ?></h2>
                                    <p><?php echo $faker->sentence(rand(10, 30)); ?></p>
                                    <span class="uk-text-muted uk-text-small">18.06.2016</span>
                                </div>
                                <div class="blog_list_footer">
                                    <div class="blog_list_footer_info">
                                        <span class="uk-margin-right"><i class="material-icons">&#xE87D;</i> <small><?php echo rand(2,30); ?></small></span>
                                        <span><i class="material-icons">&#xE0B9;</i> <small><?php echo rand(30,300); ?></small></span>
                                    </div>
                                    <a href="page_blog_article.html" class="md-btn md-btn-small md-btn-flat md-btn-flat-primary uk-float-right">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>

        </div>
    </div>
