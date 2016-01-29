<?php defined('safe_access') or die('Restricted access!'); ?>

<div id="page_content">
    <div id="page_content_inner">

        <div class="uk-grid blog_article" data-uk-grid-margin>
            <div class="uk-width-medium-3-4">
                <div class="md-card">
                    <div class="md-card-content large-padding">
                        <div class="uk-article">
                            <h1 class="uk-article-title"><?php echo $faker->sentence(8); ?></h1>
                            <p class="uk-article-meta">
                                Written by John Smith on 12 April 2016
                                <br>Posted in <a href="#">Blog</a>
                            </p>
                            <p class="uk-article-lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <hr class="uk-article-divider">
                            <p>
                                <figure class="uk-thumbnail uk-thumbnail-large thumbnail_left">
                                    <img src="assets/img/gallery/Image08.jpg" alt="">
                                    <figcaption class="uk-thumbnail-caption">Some caption</figcaption>
                                </figure>
                                <?php echo $faker->sentence(300); ?>
                            </p>
                            <blockquote>
                                <?php echo $faker->sentence(50); ?>
                            </blockquote>
                            <p><?php echo $faker->sentence(100); ?></p>
                            <ul>
                                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, maiores!</li>
                                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto dignissimos possimus voluptates.</li>
                                <li>Lorem ipsum dolor sit amet, consectetur.</li>
                            </ul>
                            <p><?php echo $faker->sentence(180); ?></p>
<pre class="line-numbers"><code class="language-javascript">// Generate parameters to create a standard animation
function genFx( type, includeWidth ) {
    var which,
    i = 0,
    attrs = { height: type };
    // If we include width, step value is 1 to do all cssExpand values,
    // otherwise step value is 2 to skip over Left and Right
    includeWidth = includeWidth ? 1 : 0;
    for ( ; i < 4 ; i += 2 - includeWidth ) {
        which = cssExpand[ i ];
        attrs[ "margin" + which ] = attrs[ "padding" + which ] = type;
    }
    if ( includeWidth ) {
        attrs.opacity = attrs.width = type;
    }
    return attrs;
}</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="uk-width-medium-1-4">
                <h5 class="uk-margin-small-bottom uk-text-upper">Recent Posts</h5>
                <ul class="md-list uk-margin-remove">
                    <li>
                        <div class="md-list-content">
                            <span class="md-list-heading uk-text-truncate"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing</a></span>
                            <span class="uk-text-small uk-text-muted">April 16, 2016</span>
                        </div>
                    </li>
                    <li>
                        <div class="md-list-content">
                            <span class="md-list-heading uk-text-truncate"><a href="#">Lorem ipsum dolor sit.</a></span>
                            <span class="uk-text-small uk-text-muted">April 16, 2016</span>
                        </div>
                    </li>
                    <li>
                        <div class="md-list-content">
                            <span class="md-list-heading uk-text-truncate"><a href="#">Lorem ipsum dolor sit amet.</a></span>
                            <span class="uk-text-small uk-text-muted">April 16, 2016</span>
                        </div>
                    </li>
                    <li>
                        <div class="md-list-content">
                            <span class="md-list-heading uk-text-truncate"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></span>
                            <span class="uk-text-small uk-text-muted">April 16, 2016</span>
                        </div>
                    </li>
                </ul>
                <h5 class="uk-margin-small-bottom uk-text-upper  uk-margin-large">Tags</h5>
                <div class="blog_tags">
                    <a href="#" class="uk-badge">admin panel</a>
                    <a href="#" class="uk-badge">backend</a>
                    <a href="#" class="uk-badge">bower</a>
                    <a href="#" class="uk-badge">dashboard</a>
                    <a href="#" class="uk-badge">gulp</a>
                    <a href="#" class="uk-badge">html admin</a>
                    <a href="#" class="uk-badge uk-badge-success">material design</a>
                    <a href="#" class="uk-badge">invoices</a>
                    <a href="#" class="uk-badge">kendo ui</a>
                    <a href="#" class="uk-badge">less</a>
                    <a href="#" class="uk-badge">uikit</a>
                </div>
                <h5 class="uk-margin-small-bottom uk-text-upper uk-margin-large">Top Authors</h5>
                <ul class="md-list md-list-addon uk-margin-remove">
                    <li>
                        <div class="md-list-addon-element">
                            <img class="md-user-image md-list-addon-avatar" src="assets/img/avatars/avatar_02_tn.png" alt=""/>
                        </div>
                        <div class="md-list-content">
                            <span class="md-list-heading"><?php echo $faker->firstName; ?> <?php echo $faker->lastName; ?></span>
                            <span class="uk-text-small uk-text-muted">
                                <span class="uk-margin-small-right"><i class="material-icons md-color-red-600">&#xE87D;</i> <small><?php echo rand(2,30); ?></small></span>
                                <span><i class="material-icons">&#xE0B9;</i> <small><?php echo rand(30,300); ?></small></span>
                            </span>
                        </div>
                    </li>
                    <li>
                        <div class="md-list-addon-element">
                            <img class="md-user-image md-list-addon-avatar" src="assets/img/avatars/avatar_07_tn.png" alt=""/>
                        </div>
                        <div class="md-list-content">
                            <span class="md-list-heading"><?php echo $faker->firstName; ?> <?php echo $faker->lastName; ?></span>
                            <span class="uk-text-small uk-text-muted">
                                <span class="uk-margin-small-right"><i class="material-icons">&#xE87D;</i> <small><?php echo rand(2,30); ?></small></span>
                                <span><i class="material-icons">&#xE0B9;</i> <small><?php echo rand(30,300); ?></small></span>
                            </span>
                        </div>
                    </li>
                    <li>
                        <div class="md-list-addon-element">
                            <img class="md-user-image md-list-addon-avatar" src="assets/img/avatars/avatar_06_tn.png" alt=""/>
                        </div>
                        <div class="md-list-content">
                            <span class="md-list-heading"><?php echo $faker->firstName; ?> <?php echo $faker->lastName; ?></span>
                            <span class="uk-text-small uk-text-muted">
                                <span class="uk-margin-small-right"><i class="material-icons">&#xE87D;</i> <small><?php echo rand(2,30); ?></small></span>
                                <span><i class="material-icons">&#xE0B9;</i> <small><?php echo rand(30,300); ?></small></span>
                            </span>
                        </div>
                    </li>
                </ul>
                <h5 class="uk-margin-small-bottom uk-text-upper uk-margin-large">Categories</h5>
                <ul class="md-list uk-margin-remove">
                    <li>
                        <div class="md-list-content">
                            <span class="md-list-heading"><a href="#">Material Design</a></span>
                            <span class="uk-text-small uk-text-muted">23 posts</span>
                        </div>
                    </li>
                    <li>
                        <div class="md-list-content">
                            <span class="md-list-heading"><a href="#">Gulp</a></span>
                            <span class="uk-text-small uk-text-muted">8 posts</span>
                        </div>
                    </li>
                    <li>
                        <div class="md-list-content">
                            <span class="md-list-heading"><a href="#">Admin</a></span>
                            <span class="uk-text-small uk-text-muted">17 posts</span>
                        </div>
                    </li>
                    <li>
                        <div class="md-list-content">
                            <span class="md-list-heading"><a href="#">Ux Design</a></span>
                            <span class="uk-text-small uk-text-muted">4 posts</span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

    </div>
</div>