<?php defined('safe_access') or die('Restricted access!'); ?>

    <div id="top_bar">
        <div class="md-top-bar">
            <div class="uk-width-large-8-10 uk-container-center">
                <ul class="top_bar_nav" id="snippets_grid_filter">
                    <li class="uk-active" data-uk-filter="">
                        <a href="#">All</a>
                    </li>
                    <li data-uk-filter="snippets-lang-php">
                        <a href="#">PHP</a>
                    </li>
                    <li data-uk-filter="snippets-lang-css">
                        <a href="#">CSS</a>
                    </li>
                    <li data-uk-filter="snippets-lang-javascript">
                        <a href="#">jQuery</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div id="page_content">
        <div id="page_content_inner">

            <div class="uk-width-large-8-10 uk-container-center">
                <div id="snippets">
                    <div class="uk-grid uk-grid-small uk-grid-width-1 uk-grid-width-medium-1-2 uk-grid-width-large-1-2 uk-grid-width-xlarge-1-3 hierarchical_show" data-uk-grid="{ gutter: 16, controls: '#snippets_grid_filter' }">
<?php
    $moment = new Moment\Moment();
    $date_month = $moment->format('M Y');
    $snippets_data_file = file_get_contents('data/snippets.json');
    $snippets_data = json_decode($snippets_data_file,true);
    $snippets_length = count($snippets_data);
    for($i=0;$i<$snippets_length;$i++) {
    $lang = $snippets_data[$i]['language'];
    $title = $snippets_data[$i]['title'];
    $content = $snippets_data[$i]['content'];
?>
                        <div data-uk-filter="snippets-lang-<?php echo $lang; ?>">
                            <div class="md-card md-card-hover md-card-overlay" data-snippet-title="<?php echo $title; ?>">
                                <div class="md-card-content">
<pre class="line-numbers"><code class="language-<?php echo $lang; ?>"><?php echo $content; ?></code></pre>
                                </div>
                                <div class="md-card-overlay-content">
                                    <div class="uk-clearfix md-card-overlay-header">
                                        <i class="md-icon md-icon material-icons md-card-overlay-toggler">&#xE5D4;</i>
                                        <h4><?php echo $title; ?></h4>
                                    </div>
                                    <div class="md-card-overlay-content-inner">
                                        <p class="uk-margin-bottom truncate-text" style="height: 88px">
                                            <?php echo $faker->sentence(30); ?>
                                        </p>
                                        <p><span class="uk-badge uk-badge-<?php if($lang == 'javascript') { echo 'success'; } elseif($lang == 'php') { ?>primary<?php } else {; ?>danger<?php }; ?>"><?php echo $lang ?></span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
<?php }; ?>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="md-fab-wrapper">
        <a class="md-fab md-fab-accent" href="#snippet_new" data-uk-modal="{center:true,bgclose:false,modal:false}">
            <i class="material-icons">&#xE150;</i>
        </a>
    </div>

    <div class="uk-modal" id="snippet_new" >
        <div class="uk-modal-dialog">
            <div class="uk-modal-header">
                <h3 class="uk-modal-title">New Snippet</h3>
            </div>
            <form class="uk-form-stacked">
                <div class="uk-margin-medium-bottom">
                    <label for="snippet_title">Title</label>
                    <input type="text" class="md-input" id="snippet_title" name="snippet_title"/>
                </div>
                <div class="uk-margin-medium-bottom">
                    <label for="snippet_language" class="uk-form-label">Language</label>
                    <select class="uk-form-width-medium" name="snippet_language" id="snippet_language" data-md-selectize-inline>
                        <option value="javascript">Javascript</option>
                        <option value="php">PHP</option>
                        <option value="css">CSS</option>
                    </select>
                </div>
                <textarea id="snippet_content" name="snippet_content" data-uk-htmleditor="{'toolbar':'','height': '240'}"></textarea>
                <span class="uk-form-help-block">Don't wrap your snippets in &lt;pre&gt;&lt;/pre&gt; or &lt;code&gt;&lt;/code&gt; tags.</span>
                <div class="uk-modal-footer uk-text-right">
                    <button type="button" class="md-btn md-btn-flat uk-modal-close">Close</button><button type="button" class="md-btn md-btn-flat md-btn-flat-primary" id="snippet_new_save">Save</button>
                </div>
            </form>
        </div>
    </div>
